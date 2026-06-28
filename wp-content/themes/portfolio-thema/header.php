<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri().'/assets/img/favicon.png'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Noto+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
   
    <?php wp_head(); ?>
</head>

<body>
    <header class="header u-wrapper">
        <div class="header__inner">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <p class="header__title">Portfolio</p>
            </a>

            <nav class="header__nav header__drawer js-drawer">
                <ul class="header__navlist">
                    <li class="header__navitem">
                        <a href="<?php echo esc_url(home_url('/#service')); ?>" class="header__navlink">Service</a>
                    </li>
                    <li class="header__navitem">
                        <a href="<?php echo esc_url(home_url('/#works')); ?>" class="header__navlink">Works</a>
                    </li>
                    <li class="header__navitem is-hidden-pc">
                        <a href="<?php echo esc_url(home_url('/#flow')); ?>" class="header__navlink">Flow</a>
                    </li>
                    <li class="header__navitem">
                        <a href="<?php echo esc_url(home_url('/#about')); ?>" class="header__navlink">About</a>
                    </li>
                    <li class="header__navitem">
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="header__navlink">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- SP用ハンバーガー -->
            <button class="header__hamburger js-hamburger" aria-label="メニューを開く">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </header>
