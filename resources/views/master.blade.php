<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Red Blog Theme - Free CSS Templates</title>
        <meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
        <meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
        <link href="{{asset('/frontend_asset/templatemo_style.css')}}" rel="stylesheet" type="text/css" />

    </head>
    <body>

        <div id="templatemo_top_wrapper">
            <div id="templatemo_top">

                <div id="templatemo_menu">

                    <ul>
                        <!--<li><a href="{{URL::to('/')}}" class="current">Home</a></li>-->
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('/portfolio')}}">Portfolio</a></li>
                        <li><a href="{{URL::to('/services')}}">Services</a></li>
                        <li><a href="{{URL::to('/contact-us')}}">Contact Us</a></li>
                    </ul>    	

                </div> <!-- end of templatemo_menu -->

                <div id="twitter">
                    <a href="#">follow us <br />
                        on twitter</a>
                </div>

            </div>
        </div>

        <div id="templatemo_header_wrapper">
            <div id="templatemo_header">

                <div id="site_title">
                    <h1><a href="http://www.templatemo.com" target="_parent"><strong>Red Blog</strong><span>Free Blog Template in HTML CSS</span></a></h1>
                </div>

            </div>
        </div>

        <div id="templatemo_main_wrapper">
            <div id="templatemo_main">
                <div id="templatemo_main_top">

                    <div id="templatemo_content">
                        @yield('content')
                    </div>


                    <div id="templatemo_sidebar">
                          @yield('category')  
                        <h4>Friends</h4>
                        <ul class="templatemo_list">
                            <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                            <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                            <li><a href="http://www.templatemo.com/page/1" target="_parent">Free Blog Themes</a></li>
                            <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                            <li><a href="http://www.koflash.com" target="_parent">Flash Websites Gallery</a></li>
                            <li><a href="#">Vestibulum laoreet</a></li>
                            <li><a href="#">Nullam nec mi enim</a></li>
                            <li><a href="#">Aliquam quam nulla</a></li>
                        </ul>

                        <div id="ads">
                            <a href="#"><img src="{{asset('/frontend_asset/images/templatemo_200x100_banner.jpg')}}" alt="banner 1" /></a>

                            <a href="#"><img src="{{asset('/frontend_asset/images/templatemo_200x100_banner.jpg')}}" alt="banner 2" /></a>
                        </div>

                    </div>

                    <div class="cleaner"></div>

                </div>

            </div>

            <div id="templatemo_main_bottom"></div>

        </div>

        <div id="templatemo_footer">

            Copyright © 2048 <a href="index.html">Your Company Name</a> | 
            <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>

        </div>

        <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>