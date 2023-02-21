<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Mitra</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="css/shop.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="images/team/mitralogoicon2.png" type="image/icon type">
<style>
    @font-face {
    font-family: 'font';
    src: url(CenturyGothic.ttf)  format('truetype');
  }
    /* "Gilroy bold",sans-serif */

body {
    font-family:"Gilroy ",sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 30px;
    background-color: #fff;
}
.section_header {
    margin-bottom: 45px;
    font-size: 36px;
    position: relative;
    word-wrap: break-word;
    line-height: .85;
    font-weight: 600;
    text-transform: uppercase;
    font-family:"Gilroy bold",sans-serif;
}

</style>
</head>

<body>
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- template sections -->
            <section
                class="page_toplogo ls section_padding_top_15 section_padding_bottom_15 table_section table_section_md">
                <header class="page_header header_white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 text-left"> <a href="index.php"
                                    class="logo top_logo top_offset_logo">
                                    <!-- <img src="img/logo/Mitra-logo.png" alt=""> -->
                                    <img src="img/logo/Mitra-logo-02.png" alt="">
                                </a>
                                <!-- header toggler --><span class="toggle_menu"><span></span></span>
                            </div>
                            <div class="col-sm-8 text-center">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class=" <?php echo ($activePage == 'index') ? "active" : ""; ?>"><a
                                                href="index.php" class=" pl-0">HOME</a></li>
                                        <li class=" <?php echo ($activePage == 'about') ? "active" : ""; ?>"><a
                                                href="about.php" class="">ABOUT US</a></li>
                                        <li class=" <?php echo ($activePage == 'courses') ? "active" : ""; ?>"><a
                                                href="courses.php" class="">COURSES</a></li>
                                        <li class=" <?php echo ($activePage == 'blogs') ? "active" : ""; ?>"><a
                                                href="blogs.php" class=" ">BLOGS</a></li>
                                        <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
                                        <li class=" <?php echo ($active5 == 'contact') ? "active" : ""; ?>"><a
                                                href="contact.php" class="">CONTACT US </a></li>

                                        <!-- eof contacts -->
                                    </ul>
                                </nav>
                                <!-- eof main nav -->
                            </div>
                        </div>
                    </div>
                </header>
            </section>