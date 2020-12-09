<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/luxbar.css">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>

<!-- <div class="shutter"></div> -->
<div class="bg">
    <p class="shutter-text"><span>A</span><span>P</span><span>E</span><span>X</span></p>
</div>

<div id="wrapper">
<!-- header start -->
<header id="luxbar" class="luxbar-fixed">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-light">
        <p class="tweet">(*´･ω･`)ｏ０○（睡眠不足）</p>
        <ul class="luxbar-navigation">
            <li class="luxbar-header">
                <!-- <a href="#" class="luxbar-brand">LUXBAR</a> -->
                <label class="luxbar-hamburger luxbar-hamburger-doublespin"
                id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
            </li>
            <li class="luxbar-item"><a href="#">Menu 1</a></li>
            <li class="luxbar-item"><a href="#">Menu 2</a></li>
            <li class="luxbar-item"><a href="#">Menu 3</a></li>
            <li class="luxbar-item"><a href="#">Menu 4</a></li>
        </ul>
    </div>
</header>
<!-- header end -->
