<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>The MotherBucket Band</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Styles CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/motherbucket.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/isotope.css">
        <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
        

        <!-- Scripts JS -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
       

        <div class="full-wrapper header">
        	<div class="main-logo">
            	<a class="symbol" href="#"><div class="navbar-brand"><ul><li></li><li></li><li></li></ul></div>motherbucket</a>
            </div>

            <nav class="main-menu">
            	<ul>
                	<li class="{{ request()->is('/') ? 'current' : '' }}">
                        <a href="/">Home</a>
                    </li>
                    <li class="{{ request()->is('news') ? 'current' : '' }}">
                        <a href="/news">About Us</a>
                    </li>
                    <li class="{{ request()->is('shows') ? 'current' : '' }}">
                        <a href="/shows">Upcoming Shows</a>
                    </li>
                    <li class="{{ request()->is('songs') ? 'current' : '' }}">
                        <a href="/songs">Songs</a>
                    </li>
                    <li class="{{ request()->is('gallery') ? 'current' : '' }}">
                        <a href="/gallery">Gallery</a>
                    </li>
                    <li class="{{ request()->is('contactus') ? 'current' : '' }}">
                        <a href="/contactus">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <nav id="nav2" role="navigation">
                <a class="jump-menu" title="Show navigation">Show navigation</a>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/news">About Us</a></li>
                    <li><a href="/mshows">Shows</a></li>
                    <li><a href="/msongs">Songs</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                </ul>
            </nav>
        </div>

        <main class="py-1">
            @yield('content')
        </main>

		<!-- Scripts JS -->
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>-->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/superslides-0.6.2/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.isotope.min.js"></script>
	    <script type="text/javascript" src="js/player/audio.js"></script> <!-- Audio Player -->
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script src="js/news.js"></script>
        <script src="js/discography.js"></script>
        <script src="js/tweets.js"></script>
        <script src="js/jquery.scrolly.js"></script>
        <script src="js/fancybox/jquery.fancybox.js"></script>
        <script src="js/fancybox/helpers/jquery.fancybox-media.js"></script>
        <script src="js/color-picker.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/sonorama.js"></script>



    </body>
</html>
