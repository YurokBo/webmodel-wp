<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>

    <title><?php bloginfo( 'description' ); ?></title>
</head>
<body>

<nav class="Nav">
    <div class="Container">
        <div class="Nav-Content">
            <a href="<?php echo get_home_url(); ?>" class="Nav-Logo">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo.png" alt="logo">
            </a>
            <ul class="Nav-List">
                <li class="Nav-Item">
                    <a href="/questions.php" class="Nav-Link">вопросы</a>
                </li>
                <li class="Nav-Item">
                    <a href="<?php echo get_home_url(); ?>/registration.php" class="Nav-Link">регистрация</a>
                </li>
                <li class="Nav-Item">
                    <a href="<?php echo get_home_url(); ?>/contacts.php" class="Nav-Link">контакты</a>
                </li>
            </ul>
            <button class="Nav-Btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="Nav-ContentMobile">
            <div class="Close">
                <span></span>
                <span></span>
            </div>
            <a href="<?php echo get_home_url(); ?>" class="Nav-LogoMobile">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo.png" alt="logo">
            </a>
            <ul class="Nav-ListMobile">
                <li class="Nav-Item">
                    <a href="<?php echo get_home_url(); ?>/questions.php" class="Nav-Link">вопросы</a>
                </li>
                <li class="Nav-Item">
                    <a href="<?php echo get_home_url(); ?>/registration.php" class="Nav-Link">регистрация</a>
                </li>
                <li class="Nav-Item">
                    <a href="<?php echo get_home_url(); ?>/contacts.php" class="Nav-Link">контакты</a>
                </li>
            </ul>
        </div>
        <!--<div class="nav__burger">
            <span></span>
        </div>-->
    </div>
</nav>
<!--
--><?php
/*include_once(__DIR__ . '/../components/NavBar.php')
*/?>
