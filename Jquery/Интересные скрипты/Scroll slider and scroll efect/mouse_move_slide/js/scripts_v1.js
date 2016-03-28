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
        main.add_init_callback(this.drag_n_drop);
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
            $('#profile_trafaret').click(function(){
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
        //#slide-block mouse move slider
        profile_scroll_direction: function () {
            $("#id").bind("mouseenter mouseleave", function (e) { //div events
                var w = $(this).width();
                var h = $(this).height();
                var offset = $(this).offset();
                var x = (e.pageX - offset.left - (w/2)) * ( w > h ? (h/w) : 1 );
                var y = (e.pageY - offset.top  - (h/2)) * ( h > w ? (w/h) : 1 );
                var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180 ) / 90 ) + 3 )  % 4;
                /** check for direction **/
                switch (direction) {  //mDir variable contains mouse direction
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
                var slide_right = $('#right-slide');
                var slide_left = $('#left-slide');
                var slide_top = $('#top-slide');
                var slide_bottom = $('#bottom-slide');
                //g_invisible класс который при проходе через блок слайдеров за нужным блоком - тянеться не нужный и этот класс делает невидимым ненужный блок
                if (e.type === 'mouseenter') {  //event mouseenter condition
                    switch (mDir) {
                        case 'top':
                            // direction top
                            //third slide  (в верстке это верхний блок от #id)
                            slide_top.addClass('top_animate_bottom',500);
                            slide_left.addClass('g_invisible');
                            slide_right.addClass('g_invisible');
                            break;
                        case 'right':
                            // direction right
                            //first slide  (в верстке это правый блок от #id)
                            slide_right.addClass('right_animate_left',500);
                            slide_left.addClass('g_invisible');
                            slide_top.addClass('g_invisible');
                            slide_bottom.addClass('g_invisible');
                            //end first slide
                            break;
                        case 'bottom':
                            // direction bottom
                            // four slide (в верстке это нижний блок от #id)
                            slide_bottom.addClass('bottom_animate_top',500);
                            slide_left.addClass('g_invisible');
                            slide_top.addClass('g_invisible');
                            slide_right.addClass('g_invisible');
                            // emd four slide
                            break;
                        case 'left':
                            // direction left
                            //second slide  (в верстке это левый блок от #id)
                            slide_left.addClass('left_animate_right',500);
                            slide_right.addClass('g_invisible');
                            slide_top.addClass('g_invisible');
                            slide_bottom.addClass('g_invisible');
                            //end second slide
                            //нада добавить класс если из неправельной стороны ведем мышкой
                            break;
                    }
                } else {                      ////event mouseleave condition
                    switch (mDir) {
                        case 'top':
                            // direction top
                            //first slide '#right-slide' (в верстке это правый блок от #id)
                            slide_right.addClass('right_animate_top',500);
                            setTimeout(function(){
                                slide_right.removeClass('right_animate_top right_animate_left g_invisible');
                            }, 1000);
                            setTimeout(function(){
                                slide_right.css('left',100+'%');
                            }, 1000);
                            //end first slide

                            //second slide '#left-slide' (в верстке это левый блок от #id)
                            slide_left.addClass('left_animate_top',500);
                            setTimeout(function(){
                                slide_left.removeClass('left_animate_top left_animate_right g_invisible');
                            }, 1000);
                            setTimeout(function(){
                                slide_left.css('right',100+'%');
                            }, 1000);
                            //end second slide

                            //third slide '#top-slide' (в верстке это верхний блок от #id)
                            slide_top.addClass('top_animate_top',500);
                            setTimeout(function(){
                                slide_top.removeClass('top_animate_top top_animate_bottom');
                            }, 1000);
                            //end third slide

                            //four slide '#bottom-slide' (в верстке это верхний блок от #id)
                            slide_bottom.addClass('bottom_animate_top_top',500);
                            setTimeout(function(){
                                slide_bottom.removeClass('bottom_animate_top_top bottom_animate_top g_invisible');
                                slide_top.removeClass('g_invisible');
                            }, 1000);
                            //end four slide
                            break;
                        case 'right':
                            // direction right
                            //first slide '#right-slide' (в верстке это правый блок от #id)
                            slide_right.addClass('right_animate_right',500);
                            slide_right.removeClass('right_animate_left');
                            setTimeout(function(){
                                slide_right.removeClass('right_animate_right g_invisible');
                            }, 1000);
                            //end first slide '#right-slide'

                            //second slide '#left-slide' (в верстке это левый блок от #id)
                            slide_left.addClass('left_animate_right_right',500);
                            setTimeout(function(){
                                slide_left.removeClass('left_animate_right_right left_animate_right g_invisible'); //left_invisible если мыжка зашла не стого края блок невидемый
                            }, 1000);
                            //end second slide

                            //third slide '#top-slide' (в верстке это верхний блок от #id)
                            slide_top.addClass('top_animate_right',500);
                            setTimeout(function(){
                                slide_top.removeClass('top_animate_right top_animate_bottom g_invisible');
                            }, 1000);
                            //end third slide

                            //four slide '#bottom-slide' (в верстке это верхний блок от #id)
                            slide_bottom.addClass('bottom_animate_right',500);
                            setTimeout(function(){
                                slide_bottom.removeClass('bottom_animate_right bottom_animate_top g_invisible');
                            }, 1000);
                            //end four slide
                            break;
                        case 'bottom':
                            // direction bottom
                            //first slide '#right-slide' (в верстке это правый блок от #id)
                            slide_right.addClass('right_animate_bottom',500);
                            setTimeout(function(){
                                slide_right.removeClass('right_animate_bottom right_animate_left g_invisible');
                            }, 1000);
                            setTimeout(function(){
                                slide_right.css('left',100+'%');
                            }, 1000);
                            //end first slide

                            //second slide '#left-slide' (в верстке это левый блок от #id)
                            slide_left.addClass('left_animate_bottom',500);
                            setTimeout(function(){
                                slide_left.removeClass('left_animate_bottom left_animate_right g_invisible'); //незабываем уберать класс left_invisible
                            }, 1000);
                            setTimeout(function(){
                                slide_left.css('right',100+'%');
                            }, 1000);
                            //end second slide

                            //third slide '#top-slide' (в верстке это верхний блок от #id)
                            slide_top.addClass('top_animate_bottom_bottom',500);
                            setTimeout(function(){
                                slide_top.removeClass('top_animate_bottom_bottom top_animate_bottom');
                            }, 1000);
                            //end third slide

                            //four slide '#bottom-slide' (в верстке это верхний блок от #id)
                            slide_bottom.addClass('bottom_animate_bottom',500);
                            setTimeout(function(){
                                slide_bottom.removeClass('bottom_animate_bottom bottom_animate_top g_invisible');
                                slide_top.removeClass('g_invisible');
                            }, 1000);
                            //end four slide
                            break;
                        case 'left':
                            // direction left
                            //first slide '#right-slide' (в верстке это правый блок от #id)
                            slide_right.addClass('right_animate_left_left',500);
                            slide_right.removeClass('right_animate_left');
                            setTimeout(function(){
                                slide_right.removeClass('right_animate_left_left g_invisible');
                                low_z_index.removeClass('low_z_index');  //убераем класс и блок становиться невидемым относительно родителя
                            }, 1000);
                            setTimeout(function(){
                                slide_right.css('left',100+'%');
                            }, 1000);
                            //end first slide

                            //second slide '#left-slide' (в верстке это левый блок от #id)
                            slide_left.addClass('left_animate_left',500);
                            slide_left.removeClass('left_animate_right');
                            setTimeout(function(){
                                slide_left.removeClass('left_animate_left g_invisible');
                                //div_trafaret.removeClass('right_wrong_direction');  //убераем класс и блок становиться невидемым относительно родителя
                            }, 1000);
                            setTimeout(function(){
                                slide_left.css('right',100+'%');
                            }, 1000);
                            //end second slide

                            //third slide '#top-slide' (в верстке это верхний блок от #id)
                            slide_top.addClass('top_animate_left',500);
                            setTimeout(function(){
                                slide_top.removeClass('top_animate_left top_animate_bottom');
                            }, 1000);
                            //end third slide

                            //four slide '#bottom-slide' (в верстке это верхний блок от #id)
                            slide_bottom.addClass('bottom_animate_left',500);
                            setTimeout(function(){
                                slide_bottom.removeClass('bottom_animate_left bottom_animate_top');
                                slide_top.removeClass('g_invisible');
                            }, 1000);
                            //end four slide
                            break;
                    }
                }
            });



        }
    };
    return new doConstruct;
})();



//scrolling function
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
        //First block background opacity and transform change
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







