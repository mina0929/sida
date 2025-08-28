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
                        <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-nav__link">COMPANY</a>
                    </li>
                    <li class="c-nav__item">
                        <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-nav__link">SALON</a>
                    </li>
                    <li class="c-nav__item">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-nav__link">CONTACT</a>
                    </li>
                    <li class="c-nav__item">
                        <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-nav__link">RECRUIT</a>
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
                    <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-nav__titlelink">COMPANY</a>
                    <ul class="c-global-innav">
                        <li>
                            <a href="<?php echo esc_url(home_url('/company#mvv')); ?>" class="c-nav__link">sidaの使命</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company#greeting')); ?>"
                                class="c-nav__link">ごあいさつ</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-nav__link">会社概要</a>
                        </li>
                    </ul>
                </li>
                <li class="c-global-nav__item">
                    <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-nav__titlelink">SALON</a>
                    <?php
                    $news_query = new WP_Query(
                        array(
                            'post_type' => 'salon',
                            'posts_per_page' => 5,
                        )
                    );
                    ?>
                    <?php if ($news_query->have_posts()): ?>
                        <ul class="c-global-innav">
                            <?php while ($news_query->have_posts()): ?>
                                <?php $news_query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="c-nav__link"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </li>
                <li class="c-global-nav__item">
                    <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-nav__titlelink">RECRUIT</a>
                    <ul class="c-global-innav">
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-nav__link">採用情報</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/data')); ?>"
                                class="c-nav__link">数字で見るSida</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/curriculum')); ?>"
                                class="c-nav__link">カリキュラム</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/story01')); ?>"
                                class="c-nav__link">ストーリー1</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/recruit/story02')); ?>"
                                class="c-nav__link">ストーリー2</a>
                        </li>
                    </ul>
                </li>
                <li class="c-global-nav__item">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-nav__titlelink">CONTACT</a>
                </li>
            </ul>
        </nav>
    </div>
    <main>