<?php get_header(); ?>
<div class="p-page p-company">
    <div class="c-pageheader">
        <div class="l-container">
            <div class="c-pageheader_title">
                <p class="c-pageheader_title--en">SALON</p>
                <h2 class="c-pageheader_title--jp">サロン紹介</h2>
            </div>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
        <section>
            <div class="l-container">

                <?php if (have_posts()): ?>
                    <div class="p-salons__grid">
                        <?php
                        while (have_posts()):
                            the_post();

                            // ACF フィールド
                            $addr = get_field('addr'); // 住所
                            $hour = get_field('hour'); // 営業時間
                    
                            // サムネイル（アイキャッチ）URL。なければデフォルト画像にフォールバック
                            $thumb_url = get_the_post_thumbnail_url(null, 'medium');
                            if (!$thumb_url) {
                                $thumb_url = get_template_directory_uri() . '/assets/images/index/company3.jpg';
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="p-salons__item">
                                <div class="p-salons__image">
                                    <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                        class="p-salons__img" loading="lazy">
                                </div>
                                <div class="p-salons__content">
                                    <h3 class="p-salons__name"><?php the_title(); ?></h3>

                                    <?php if ($addr): ?>
                                        <p class="p-salons__address"><?php echo esc_html($addr); ?></p>
                                    <?php endif; ?>

                                    <?php if ($hour): ?>
                                        <p class="p-salons__hour"><?php echo esc_html($hour); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>現在、掲載中のサロンはありません。</p>
                <?php endif; ?>

            </div>
        </section>

    </div>
    <?php get_footer(); ?>