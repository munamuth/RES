<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/node_modules/animate.css/animate.min.css') }}">
        <!-- Fonts -->
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
            }
            .header, .body, .footer{
                width: 100%;
                height: auto;
                float: left;
                display: flex;
                background: #678;
            }
            .logo_container{
                width: 20%;
                padding: 15px;
            }
            .menu_container{
                width: 80%;
                position: relative;
            }
            ul.main_menu{
                list-style: none;
                position: absolute;
                bottom: 15px;
                margin: 0;
                right: 30px;
            }
            ul.main_menu li{
                display: inline-block;
            }
            ul.main_menu li:first-child::before{
                content: '';
            }
            ul.main_menu li:before{
                content: '|';
                color: #fff;
            }

            ul.main_menu li a{
                color: #fff;
                font-weight: 500;
                font-size: 15px;
                width: 100%;
                padding: 15px;
            }

            ul.main_menu li a:hover{
                background: #234;
                text-decoration: none;
            }
            ul.sub_menu{
                display: none;
                background: #123;
                max-width: 320px;
            }
            ul.sub_menu li{
                width: 100%;
                float: left;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="logo_container">
                <div class="logo">
                    <img src="{{ url('/node_modules/logo/logo.png') }}" class="img-fluid">
                </div>
            </div>
            <div class="menu_container">
                <ul class="main_menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">Category</a>
                        <ul class="sub_menu">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 1</a></li>
                        </ul>
                    </li>
                    <li><a href="">News and Events</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="body">
            
        </div>
        <div class="footer">
            
        </div>
    </body>
</html>
