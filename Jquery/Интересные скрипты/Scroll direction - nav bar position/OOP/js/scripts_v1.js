var main = (function () {
    doConstruct = function () {
        this.init_callbacks = [];
    };
    doConstruct.prototype = {
        add_init_callback : function (func) {
            if (typeof(func) == 'function') {
                this.init_callbacks.push(func);
                return true;
            }
            else {
                return false;
            }

        }
    };
    return new doConstruct;
})();
$(document).ready(function () {
    $.each(main.init_callbacks, function (index, func) {
        func();
    });
});
var document_style = (function () {
    var doConstruct = function () {
        main.add_init_callback(this.load_style);
        main.add_init_callback(this.profile_style);
    };
    doConstruct.prototype = {
        load_style: function () {
            var sum_h = 0;
            $('#menu li').each(function(){   //sum li elements height for navigation inded height indicator
                sum_h += $(this).outerHeight(true);
            });
            $('#nav_index').css({           //navigation indicator height
                'height': sum_h
            });
            $('#index_line').css({
                'height': ($('#menu li').height())
            });
            /*и по их высоте назначаем высоту навигационному столбцу*/
            /*Задаем высоту и ширину секциям КОНТЕНТА*/

            var winHeight = $(window).height();
            // set initial div height / width
            if(winHeight > 500) {
                $('#home,#home_img,#profile,#present,#info').css({
                    'height': winHeight
                });
            } else {
                $('#home,#home_img,#profile,#present,#info').css({
                    'min-height': 500
                });
            }
        },
        profile_style: function () {
            $('#hover_div').click(function(){
                if ($('#hover_div').hasClass("class_scale")){
                    $('#hover_div').removeClass("class_scale")
                } else {
                    $('#hover_div').addClass("class_scale")
                }

            });
            $('#profile_second_hide').click(function(){
                $('#first-slide').animate({
                    left: 0
                },500)
            });
            $('#first-slide').click(function(){
                $('#first-slide').animate({
                    left: 100+'%'
                },500)
            })
        }
    };
    return new doConstruct;
})();

var scroll_move_detaction = (function () {
    var doConstruct = function () {
        main.add_init_callback(this.profile_scroll_direction);
    };
    doConstruct.prototype = {
        profile_scroll_direction: function () {
            $("#id").bind("mouseenter mouseleave", function (e) { //div events
                var w = $(this).width();
                var h = $(this).height();
                var offset = $(this).offset();
                var x = (e.pageX - offset.left - (w/2)) * ( w > h ? (h/w) : 1 );
                var y = (e.pageY - offset.top  - (h/2)) * ( h > w ? (w/h) : 1 );
                var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180 ) / 90 ) + 3 )  % 4;
                /** check for direction **/
                switch (direction) {
                    case 0:
                        // direction top
                        var mDir = 'top';
                        break;
                    case 1:
                        // direction right
                        var mDir = 'right';
                        break;
                    case 2:
                        // direction bottom
                        var mDir = 'bottom';
                        break;
                    case 3:
                        // direction left
                        var mDir = 'left';
                        break;
                }
                if (e.type === 'mouseenter') {  //event mouseenter condition
                    switch (mDir) {
                        case 'top':
                            // direction top

                            break;
                        case 'right':
                            // direction right
                            //first slide  (в верстке это правый блок от #id)
                            $('#first-slide').addClass('animate_left',500);
                            //end first slide
                            break;
                        case 'bottom':
                            // direction bottom
                            break;
                        case 'left':
                            // direction left

                            break;
                    }
                } else {                      ////event mouseleave condition
                    switch (mDir) {
                        case 'top':
                            // direction top
                            //first slide (в верстке это правый блок от #id)
                            $('#first-slide').addClass('animate_top',500);
                            setTimeout(function(){
                                $('#first-slide').removeClass('animate_top animate_left');
                            }, 1000);
                            setTimeout(function(){
                                $('#first-slide').css('left',100+'%');
                            }, 1000);
                            //end first slide
                            break;
                        case 'right':
                            // direction right
                            //first slide (в верстке это правый блок от #id)
                            $('#first-slide').removeClass('animate_left');
                            $('#first-slide').addClass('animate_right',500);
                            setTimeout(function(){
                                $('#first-slide').removeClass('animate_right');
                            }, 1000);
                            setTimeout(function(){
                                $('#first-slide').css('left',100+'%');
                            }, 1000);
                            //end first slide
                            break;
                        case 'bottom':
                            // direction bottom
                            //first slide  (в верстке это правый блок от #id)
                            $('#first-slide').removeClass('animate_left');
                            $('#first-slide').addClass('animate_bottom',500);
                            setTimeout(function(){
                                $('#first-slide').removeClass('animate_bottom');
                            }, 1000);
                            setTimeout(function(){
                                $('#first-slide').css('left',100+'%');
                            }, 1000);
                            //end first slide
                            break;
                        case 'left':
                            // direction left
                            //first slide  (в верстке это правый блок от #id)
                            $('#first-slide').removeClass('animate_left');
                            $('#first-slide').addClass('animate_left_left',500);
                            setTimeout(function(){
                                $('#first-slide').removeClass('animate_left_left animate_left');
                            }, 1000);
                            setTimeout(function(){
                                $('#first-slide').css('left',100+'%');
                            }, 1000);
                            //end first slide
                            break;
                    }
                }
            });



        }
    };
    return new doConstruct;
})();

var main_scroll = (function () {
    doConstruct = function () {
        this.init_callbacks = [];
    };
    doConstruct.prototype = {
        add_init_callback : function (func) {
            if (typeof(func) == 'function') {
                this.init_callbacks.push(func);
                return true;
            }
            else {
                return false;
            }

        }
    };
    return new doConstruct;
})();
$(window).scroll(function(){
    $.each(main_scroll.init_callbacks, function (index, func) {
        func();
    });
});
var scroll_do = (function () {
    var doConstruct = function () {
        main_scroll.add_init_callback(this.scroll_menu_position);
        main_scroll.add_init_callback(this.first_section_scroll_hide);
    };
    doConstruct.prototype = {
        scroll_menu_position: function () {
            var scrollTop = $(window).scrollTop();
            var home = $('#home').height();          //div section height
            var profile = $('#profile').height();    //div section height
            var present = $('#present').height();    //div section height
            var info = $('#info').height();          //div section height
            if (scrollTop >= home) {
                $('#index_line').css({
                    'top': (100 / $('#menu li').size()) + '%'
                });
            } else {
                $('#index_line').css({
                    'top': 0
                });
            }
            if (scrollTop >= home + profile) {
                $('#index_line').css({
                    'top': ((100 / $('#menu li').size()) * 2) + '%'
                });
            }
            if (scrollTop >= home + profile + present) {
                $('#index_line').css({
                    'top': ((100 / $('#menu li').size()) * 3) + '%'
                });
            }
        },
        first_section_scroll_hide: function () { //#home scroll hide
            var limit = $('#home').height();     //div need'd height
            var opacity_div = $('#home_img');   //div need to opacity
            var scroll_top = $(window).scrollTop();
            var transform = ($(window).scrollTop())/5;
            transform = -transform;             //positive -> negative
            if (scroll_top <= limit) {          //when scroll opacity element
                opacity_div.css({ 'opacity' : (1 - scroll_top/limit),
                                '-webkit-transform' : 'translateY('+transform+'px)',
                                '-moz-transform'    : 'translateY('+transform+'px)',
                                '-ms-transform'     : 'translateY('+transform+'px)',
                                '-o-transform'      : 'translateY('+transform+'px)',
                                'transform'         : 'translateY('+transform+'px)'
                                });
            }
        }
    };
    return new doConstruct;
})();







