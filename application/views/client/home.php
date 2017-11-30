<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, maximum-scale=1"/>
        <title><?php if(isset($title)) echo $title; ?></title>
        <meta name="Description" content="">
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="http://solarsaversllc.com" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:image" content="http://solarsaversllc.com/assets/logo.png" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:700,300" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/frontend/materializemin.css"  media="screen,projection" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/styles.css" type="text/css" rel="stylesheet"/>
        <meta name="theme-color" content="#212121">
        <meta name="application-name" content="Solar Savers"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        
    </head>

    <body id="home">

        <ul class="menu">
            <ul class="mobile-menu mobile" id="">
                <li class="left-item">
                    <img src="<?php base_url(); ?>assets/frontend/assets/hrp.png"/>
                    <h1>SOLAR SAVERS</h1>
                </li>
                <li class="right-item">
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <img src="<?php base_url(); ?>assets/frontend/assets/menu.png"/>
                    </a>
                </li>
            </ul>
        </ul>
        

        <ul id="slide-out" class="side-nav" id="">
            <li class="menu-align">
                <img src="<?php base_url(); ?>assets/frontend/assets/hrp.png"/>
                <h1>SOLAR SAVERS</h1>
            </li>
            <li><p>SERVICES</p></li>
            <li><a href="#">WINDOW TINTING</a></li>
            <li><a href="#">HEADLIGHT RESTORATION</a></li>
            <li><a style="color: #61c5e6; font-weight: bold; font-size: larger;" href="#start">RESERVATIONS</a></li>
            <li><a href="mailto:dealerships@solarsaversllc.com">FOR DEALERSHIPS</a></li>
            <li><p>GET SOCIAL</p></li>
            <li><a href="#gallery">OUR LIVE GALLERY</a></li>
            <li><p>CONTACT</p></li>
            <!--<li style="margin-bottom: .75em"><a href="tel:18000000000">Call Us Now</a></li>-->
            <span>
                <a href="#" data-activates="slide-out"><i class="material-icons">close</i></a>
            </span>
        </ul>

        <div class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="/assets/bg4.jpeg" style="background-position-x:35%;"/>
                    <div class="bg-darken"></div>
                    <div class="caption left-align">
                        <h3>50 SHADES OF TINT</h3>
                        <h5 class="light grey-text text-lighten-3">Experience your car with the best tints professionally applied.</h5>
                        <a href="https://form.jotform.com/72685560584164" class="waves-effect waves-light btn">RESERVE</a>
                    </div>
                </li>
                <li>
                    <img src="/assets/bg6.jpeg" style="background-position-x:60%;"/>
                    <div class="bg-darken"></div>
                    <div class="caption left-align">
                        <h3>LIGHTEN UP TODAY</h3>
                        <h5 class="light grey-text text-lighten-3">Atlanta's #1 headlight restoration service.</h5>
                        <a href="" class="waves-effect waves-light btn">GET STARTED</a>
                    </div>
                </li>
            </ul>
        </div>

        <div style="height:100vh;width:100%;position:relative;" id="remove"></div>

        <ul class="fullbg" id="">
            <ul class="slow-load">
                <li class="title">
                    QUALITY. AFFORDABLE.<span>EXCELLENCE.</span>
                </li>
                <li class="subtitle">
                    We utlize the best practices to get your car the best looking window tints and the cleanest looking lights possible at reduced costs yet quickly and professionally.
                    <br>
                    <br>
                    You are invited to try us out, make your car yours again.
                </li>
                <a href="<?php echo site_url('form'); ?>" class="sl-cta">
                    GET STARTED
                </a>
            </ul>
            <li class="load-after">
                <div class="bg-darken"></div>
                <video playsinline autoplay muted loop poster="/assets/bg6.jpeg" id="bgvid">
                    <source src="/assets/video/final.webm" type="video/webm">
                    <source src="/assets/video/solar_savers_reel.mp4" type="video/mp4">
                </video>
            </li>
        </ul>

        <ul class="full-cta">
            <li>
                SHADES OF TINT
                <span>Tell us what shade you need or let us consult you on which window tint percentage we'd recommend.</span>
                <a href="form.html">
                    ORDER NOW
                </a>
            </li>
            <li id="bgimg1"></li>
        </ul>
        <ul class="full-cta-2">
            <li id="bgimg2"></li>
            <li id="right-align">
                TOTAL CRAFTSMANSHIP
                <span>By never cutting corners and making sure the job is done right, we provide top quality window tints.</span>
                <a href="form.html">
                    GET STARTED
                </a>
            </li>
        </ul>

        <ul class="details">
            <li>
                We professionally:
            </li>
            <ul>
                <li>
                    <span></span>
                    restore headlights
                </li>
                <li>
                    <span></span>
                    tint vehicle windows
                </li>
            </ul>
            <li>
                <a href="form.html">
                    I NEED THIS
                </a>
            </li>
        </ul>

        <ul class="full-cta-3">
            <li>
                EXPERT RESTORATION
                <span>We have the tools & know-how to properly restore your car's lights and keep it looking great.</span>
                <a href="form.html">
                    ORDER NOW
                </a>
            </li>
            <li id="bgimg3"></li>
        </ul>
        <ul class="full-cta-4">
            <li id="bgimg4"></li>
            <li id="right-align">
                DETAIL IN DETAIL
                <span>Whether it's foggy lights, yellow hues, or just about anything, we'll get it back to looking new.</span>
                <a href="form.html">
                    FIX MY LIGHTS
                </a>
            </li>
        </ul>

        <ul class="why">
            <li>
                WHY SOLAR SAVERS?
            </li>
            <ul>
                <li>
                    <span></span>
                    PROFESSIONAL CARE
                </li>
                <li>
                    <span></span>
                    EXPERT KNOWLEDGE
                </li>
                <li>
                    <span></span>
                    YEARS OF EXPERIENCE
                </li>
                <li>
                    <span></span>
                    WE COME TO YOU
                </li>
            </ul>
            <li>
                <a href="form.html">
                    START TODAY
                </a>
            </li>
        </ul>

        <script src="<?php base_url(); ?>assets/frontend/assets.juicer.io/embed.js" type="text/javascript"></script>
        <link href="<?php base_url(); ?>assets/frontend/assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
        <ul class="juicer-feed" data-feed-id="solarsaversllc"></ul>

        <ul class="footer">
            <li style="flex-flow:column nowrap;-webkit-flex-flow:column nowrap;">
                Copyright © 2017 Solar Savers, LLC. All Rights Reserved.
            </li>
        </ul>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/materializemin.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.js"></script>
        <script src="//code.tidio.co/r91jfcqfxamk1jvruzk4cnpsnwxxaum1.js"></script>

    </body>

</html>