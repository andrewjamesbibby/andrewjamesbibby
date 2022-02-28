<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Andrew James Bibby</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Andrew James Bibby"/>
    <meta name="author" content="ajb"/>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- /Loading animation -->

<div id="page" class="page">

    <!-- Header -->
    <header id="site_header" class="header">
        <div class="my-photo">
            <img src="images/my_photo.jpg" alt="image">
            <div class="mask"></div>
        </div>

        <div class="site-title-block">
            <h1 class="site-title">Andrew James Bibby</h1>
            <p class="site-description">Web Developer</p>
        </div>

        <div class="site-avatar-block">
            <img src="/images/avatar.png" alt="avatar">
        </div>

        <div class="site-certifications-block">
            <img src="/images/certs/aws-developer.png" alt="aws-developer">
            <img src="/images/certs/aws-solutions-architect.png" alt="aws-developer">
        </div>

        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </header>
    <!-- /Header -->

    <!-- Main Content -->
    <div id="main" class="site-main">

        <!-- Page changer wrapper -->
        <div class="pt-wrapper">

            <!-- Navigation & Social buttons -->
            <div class="site-nav mobile-menu-hide">

                <!-- Main menu -->
                <ul id="nav" class="site-main-menu">
                    <!-- About Me Subpage link -->
                    <li>
                        <a class="pt-trigger" href="#about_me" data-animation="1" data-goto="1">About me</a>
                        <!-- href value = data-id without # of .pt-page -->
                    </li>
                    <!-- /About Me Subpage link -->
                    <li>
                        <a class="pt-trigger" href="#resume" data-animation="1" data-goto="2">Resume</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#portfolio" data-animation="1" data-goto="3">Portfolio</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#blog" data-animation="1" data-goto="4">Blog</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#contact" data-animation="1" data-goto="5">Contact</a>
                    </li>
                </ul>
                <!-- /Main menu -->

                <!-- Social buttons -->
                <ul class="social-links">
                    <li><a class="tip social-button" href="https://twitter.com/andrewjbibby" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="tip social-button" href="https://www.linkedin.com/in/andrew-james-bibby-464a0627/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="tip social-button" href="https://www.facebook.com/andrewjamesbibby" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="tip social-button" href="https://github.com/andrewjamesbibby" title="Github" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a class="tip social-button" href="https://stackoverflow.com/users/1968209/andrew-bibby" title="Github" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
                </ul>
                <!-- /Social buttons -->

            </div>
            <!-- Navigation & Social buttons -->

            <!-- Subpages -->
            <div class="subpages">
