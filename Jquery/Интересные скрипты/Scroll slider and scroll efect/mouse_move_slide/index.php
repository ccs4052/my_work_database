<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>тест</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/scripts_v1.js"></script>
</head>
<body style="position: relative" data-spy="1scroll" data-target="#myScrollspy" data-offset="50">
<div style="padding: 0px;position: fixed;height: 100%;background-color: brown;width: 100px;z-index: 1500" id="test">
    <nav id="myScrollspy">
        <ul id="menu"  class="nav nav-pills nav-stacked" role="tablist">
            <div id="nav_index" style="position: absolute;z-index: 200;width: 10px;background-color: inherit">
                <div id="index_line" style="position: relative;width: 10px;background-color: darkturquoise;border-bottom-left-radius: 2px;border-top-left-radius: 2px">

                </div>
            </div>
            <li style="margin: 0px" id="home_m" ><a style="color:black" href="#home">Home</a></li>
            <li style="margin: 0px" id="profile_m"><a style="color:black" href="#profile">Profile</a></li>
            <li style="margin: 0px" id="present_m"><a style="color:black" href="#present">Present</a></li>
            <li style="margin: 0px" id="present_m"><a style="color:black" href="#info">Info</a></li>
        </ul>
    </nav>
</div>
<div class="container-fluid">
    <div class="row">
        <div  class="col-lg-12" style="padding-left: 100px;padding-right: 0px">
            <div id="home" style="margin: 0px;background-color: cadetblue;position: relative;z-index: -10">
                <div id="home_img" style="position: fixed;padding: 0px;z-index: -5;background: url(images/DSCF3578.JPG);width: 100%;background-size: cover;background-position: center" class="col-lg-12">

                </div>
            </div>
            <div id="profile" style="background-color: chocolate;z-index: 800">
                <div class="col-lg-12">
                    <div style="float: none;margin: 0 auto;height: 200px;background-color: red" class="col-lg-6">
                        <button><a href="#">dfgdfg</a></button>
                        <div id="hover_div" style="position: absolute;top:0px;left: 0px;margin: 0 auto;height: 100%;background-color: darkslateblue;-webkit-transition: 1s ease-in-out; -moz-transition: 1s ease-in-out;-o-transition: 1s ease-in-out;transition: 1s ease-in-out;" class="col-lg-12">
                            click to resize div
                        </div>
                    </div>
                </div>
                <div id="slide-block" style="height: 300px" class="col-lg-12"> <!--js function scroll_move_detaction -->
                    <div id="id" class="col-lg-3">
                        <div  id="profile_trafaret" class="col-md-12">
                            mouse move direction slide <<<--->>>
                        </div>
                        <div id="right-slide"  class="col-md-12"> <!--js var slide_right -->
                            <p>Right slide</p>
                        </div>
                        <div id="left-slide"  class="col-md-12"> <!--js var slide_left -->
                            <p>Left slide</p>
                        </div>
                        <div id="top-slide"  class="col-md-12"> <!--js var slide_top -->
                            <p>Top slide</p>
                        </div>
                        <div id="bottom-slide"  class="col-md-12"> <!--js var slide_bottom -->
                            <p>Bottom slide</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="present" style="background-color: darkolivegreen;">
                <div style="height: 100%;margin: 0 auto;background-color: cornsilk;float: none" class="col-lg-6">
                    <div  class="col-lg-12">
                        
                    </div>
                </div>
            </div>
            <div id="info" style="background-color: cadetblue">

            </div>
        </div>
    </div>
</div>


</body>
</html>