<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- ヘッダー -->
    <header class="l-header" id="header">
        <div class="l-header__inner">
            <div class="l-header__logo">

                <h1 class="c-site-title"><a href="<?php echo home_url(); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                            alt="<?php bloginfo('name'); ?>" class="c-logo-img"></a>
                    <p class="c-tagline">「印象プロデュース」で、"わたしらしさ"を髪に。</p>
                </h1>
            </div>

            <nav class="l-header__nav">
                <ul class="c-nav">
                    <li class="c-nav__item">
                        <a href="#company" class="c-nav__link">COMPANY</a>
                    </li>
                    <li class="c-nav__item">
                        <a href="#salon" class="c-nav__link">SALON</a>
                    </li>
                    <li class="c-nav__item">
                        <a href="#contact" class="c-nav__link">CONTACT</a>
                    </li>
                    <li class="c-nav__item">
                        <a href="#recruit" class="c-nav__link">RECRUIT</a>
                    </li>
                </ul>
            </nav>

            <button class="c-hamburger" id="hamburger-btn" aria-label="メニューを開く">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 8H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M3 16H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
        </div>
    </header>

    <!-- グローバルメニュー -->
    <div class="l-global-menu" id="global-menu">
        <div class="l-global-menu__overlay" id="menu-overlay"></div>
        <nav class="l-global-menu__content">
            <button class="c-close-btn" id="close-btn" aria-label="メニューを閉じる">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>

            <ul class="c-global-nav">
                <li class="c-global-nav__item">
<<<<<<< HEAD
                    <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-nav__link">COMPANY</a>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company#mvv')); ?>" class="c-nav__inlink">sidaの使命</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company#greeting')); ?>"
                                class="c-nav__inlink">ごあいさつ</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company#overview')); ?>"
                                class="c-nav__inlink">会社概要</a>
                        </li>
                    </ul>
                </li>
                <li class="c-global-nav__item">
                    <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-nav__link">SALON</a>
                    <?php
                    $args = [
                        'post_type' => 'salon',
                        'posts_per_page' => -1,
                        'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
                    ];
                    $q = new WP_Query($args);

                    if ($q->have_posts()): ?>
                        <ul>
                            <?php while ($q->have_posts()):
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="c-nav__inlink"><?php the_title(); ?></a>
                                </li>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        </ul>
                    <?php endif; ?>
                </li>
                <li class="c-global-nav__item">
                    <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-nav__link">RECRUIT</a>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-nav__inlink">採用情報</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/data')); ?>"
                                class="c-nav__inlink">数字で見るSida</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/curriculum')); ?>"
                                class="c-nav__inlink">カリキュラム</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/story01')); ?>"
                                class="c-nav__inlink">ストーリー1</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/story02')); ?>"
                                class="c-nav__inlink">ストーリー2</a>
                        </li>
                    </ul>
                </li>
                <li class="c-global-nav__item">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-nav__link">CONTACT</a>
=======
                    <a href="#company" class="c-global-nav__link">COMPANY</a>
                </li>
                <li class="c-global-nav__item">
                    <a href="#salon" class="c-global-nav__link">SALON</a>
                </li>
                <li class="c-global-nav__item">
                    <a href="#contact" class="c-global-nav__link">CONTACT</a>
                </li>
                <li class="c-global-nav__item">
                    <a href="#recruit" class="c-global-nav__link">RECRUIT</a>
>>>>>>> parent of 5b20fdd (更新)
                </li>
            </ul>
        </nav>
    </div>
    <main>