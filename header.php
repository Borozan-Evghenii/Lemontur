<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4285f4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LemonTur</title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
</head>
<body>

<div class="wrapper">
        <!-- Header -->
        <header class="header">
    <div class="header-container container">
        <div class="header-logo">
            <span class="logo"><?php  echo get_field('header_logo');?><span class="logo-descr"><?php  echo get_field('header_logo_descriptor');?></span></span>
        </div>
        <div class="header-button">
            <button href="" class="button" data-path="modal"><?php  echo get_field('header_button');?></button>
        </div>
    </div>
</header>
        <!-- End Header -->
    