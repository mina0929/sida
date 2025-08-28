<?php get_header(); ?>
<div class="p-page p-single">
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
    </div>
    <section>
        <div class="l-container">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>

                    <?php
                    $addr = get_field('addr');
                    $tel = get_field('tel');
                    $hour = get_field('hour');
                    $url = get_field('url');
                    $map = get_field('googlemap');
                    $mapurl = get_field('mapurl');
                    ?>

                    <div class="p-salon__infobox">


                        <div class="p-salon__info">
                            <div class="p-salon__titlebox">
                                <h3 class="p-salon__title"><?php the_title(); ?></h3>
                                <?php if ($mapurl): ?>
                                    <div class="p-salon__link">
                                        <a href="<?php echo esc_html($mapurl); ?>" class="c-link">Google Map<img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg"
                                                class="c-link__arrow"></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <dl class="p-salon__info-list">
                                <?php if ($addr): ?>
                                    <div class="p-salon__info-row">
                                        <dt class="p-salon__info-term">ACCESS</dt>
                                        <dd class="p-salon__info-desc"><?php echo esc_html($addr); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ($tel): ?>
                                    <div class="p-salon__info-row">
                                        <dt class="p-salon__info-term">TEL</dt>
                                        <dd class="p-salon__info-desc">
                                            <a class="c-textlink"
                                                href="tel:<?php echo esc_attr(preg_replace('/\D+/', '', $tel)); ?>">
                                                <?php echo esc_html($tel); ?>
                                            </a>
                                        </dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ($hour): ?>
                                    <div class="p-salon__info-row">
                                        <dt class="p-salon__info-term">HOUR</dt>
                                        <dd class="p-salon__info-desc"><?php echo wp_kses_post($hour); ?>
                                        </dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ($url): ?>
                                    <div class="p-salon__info-row">
                                        <dt class="p-salon__info-term">URL</dt>
                                        <dd class="p-salon__info-desc">
                                            <a class="c-textlink" target="_blank" href="<?php echo esc_url($url); ?>"
                                                target="_blank" rel="noopener">
                                                予約はこちら
                                            </a>
                                        </dd>
                                    </div>
                                <?php endif; ?>
                            </dl>
                        </div>
                        <div>
                            <?php
                            // アイキャッチ（任意）
                            if (has_post_thumbnail()):
                                echo '<div class="p-salon__thumb">';
                                the_post_thumbnail('large', ['class' => 'p-salon__img', 'loading' => 'lazy']);
                                echo '</div>';
                            endif;
                            ?>
                        </div>
                    </div><?php if ($map): ?>
                        <div class="p-salon__map">
                            <?php echo wp_kses($map, [
                                'iframe' => [
                                    'src' => true,
                                    'width' => true,
                                    'height' => true,
                                    'frameborder' => true,
                                    'style' => true,
                                    'allow' => true,
                                    'allowfullscreen' => true,
                                ],
                            ]); ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // 親グループを一度だけ取得
                    $staff_group = get_field('staff', get_the_ID()); // 配列 or null
            
                    $has_staff = false;
                    $staff_html = '';

                    if ($staff_group && is_array($staff_group)) {
                        // グループ内のキー名（ACF側の「名前」に合わせる）
                        $keys = [
                            'staff_item',
                            'staff_item2',
                            'staff_item3',
                            'staff_item4',
                            'staff_item5',
                            'staff_item6',
                            'staff_item7',
                            'staff_item8',
                            'staff_item9',
                            'staff_item10',
                        ];

                        ob_start();

                        foreach ($keys as $key) {
                            if (empty($staff_group[$key]) || !is_array($staff_group[$key]))
                                continue;

                            $item = $staff_group[$key];

                            // サブフィールド（画像はURL/配列 どちらでもOKに）
                            $img = $item['staff_img'] ?? '';
                            if (is_array($img) && isset($img['url']))
                                $img = $img['url'];

                            $name = $item['staff_name'] ?? '';
                            $role = $item['staff_role'] ?? '';
                            $num = $item['staff_num'] ?? '';
                            $insta = $item['staff_insta'] ?? '';

                            // いずれか入っていれば描画
                            if ($img || $name || $role || $num || $insta) {
                                $has_staff = true; ?>
                                <div class="p-staff-card">
                                    <?php if ($img): ?>
                                        <figure class="p-staff-card__figure">
                                            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name ?: 'staff'); ?>"
                                                loading="lazy" />
                                        </figure>
                                    <?php endif; ?>

                                    <div class="p-staff-card__body">
                                        <?php if ($name): ?>
                                            <h3 class="p-staff-card__name"><?php echo esc_html($name); ?></h3>
                                        <?php endif; ?>

                                        <?php if ($role || $num): ?>
                                            <p class="p-staff-card__meta">
                                                <?php echo esc_html(trim($num . ($num && $role ? '　/　' : '') . $role)); ?>
                                            </p>
                                        <?php endif; ?>
                                        <?php if (!empty($insta)):
                                            // 入力がURLならパス末尾をユーザー名に、IDだけならそのまま使う
                                            $is_url = filter_var($insta, FILTER_VALIDATE_URL);
                                            $username = $is_url ? trim((string) parse_url($insta, PHP_URL_PATH), '/') : ltrim($insta, '@');

                                            // リンク先は必ず完全URLに正規化
                                            $href = $is_url
                                                ? $insta
                                                : ('https://www.instagram.com/' . rawurlencode($username) . '/');
                                            ?>
                                            <p class="p-staff-card__insta">
                                                <a href="<?php echo esc_url($href); ?>" target="_blank" rel="noopener" class="c-textlink">
                                                    @<?php echo esc_html($username); ?>
                                                </a>
                                            </p>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php }
                        }

                        $staff_html = ob_get_clean();
                    }
                    ?>

                    <?php if ($has_staff): ?>
                        <section class="p-salon__staff">
                            <h4 class="p-salon__staff-title">
                                <span class="p-salon__staff-title--en">STAFF</span>
                                <span class="p-salon__staff-title--ja">スタッフ</span>
                            </h4>
                            <div class="p-salon__staff-grid">
                                <?php echo $staff_html; ?>
                            </div>
                        </section>
                    <?php endif; ?>


                    <div class="p-salon__back">
                        <div class="p-salon__link">
                            <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-link">Back to list<img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg"
                                    class="c-link__arrow"></a>
                        </div>
                    </div>

                <?php endwhile; endif; ?>

        </div>
    </section>
    <section class="p-hero-salons" id="salon">
        <div class="l-container">
            <div class="p-hero-salons__header p-hero-salons__header--2">
                <h2 class="p-hero-salons__title p-hero-salons__title--2">
                    <span class="p-hero-salons__title-en">OTHER SALON</span>
                    <span class="p-hero-salons__title-ja p-hero-salons__title-ja--2">その他のサロン</span>
                </h2>
            </div>
            <?php
            $current_id = get_the_ID();

            $args = [
                'post_type' => 'salon',
                'posts_per_page' => 4,
                'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
                'post__not_in' => [$current_id],       // ← これで“今の投稿”を除外
                'ignore_sticky_posts' => true,
            ];

            $q = new WP_Query($args);

            if ($q->have_posts()): ?>
                <div class="md-hidden">
                    <div class="p-hero-salons__grid  swiper">
                        <div class="swiper-wrapper">
                            <?php while ($q->have_posts()):
                                $q->the_post();
                                $addr = get_field('addr_short', get_the_ID());

                                // アイキャッチ（なければダミー）
                                if (has_post_thumbnail()) {
                                    $img_html = get_the_post_thumbnail(
                                        get_the_ID(),
                                        'large',
                                        [
                                            'class' => 'p-hero-salons__img',
                                            'loading' => 'lazy',
                                            'alt' => esc_attr(get_the_title()),
                                        ]
                                    );
                                } else {
                                    $fallback = get_template_directory_uri() . '/assets/images/index/company3.jpg';
                                    $img_html = '<img class="p-hero-salons__img" src="' . esc_url($fallback) . '" alt="' . esc_attr(get_the_title()) . '">';
                                }
                                ?>
                                <a href="<?php the_permalink(); ?>" class="p-hero-salons__item swiper-slide">
                                    <div class="p-hero-salons__image">
                                        <?php echo $img_html; ?>
                                    </div>
                                    <div class="p-hero-salons__content">
                                        <h3 class="p-hero-salons__name"><?php the_title(); ?></h3>
                                        <?php if ($addr): ?>
                                            <p class="p-hero-salons__address"><?php echo esc_html($addr); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="md-only">
                    <div class="p-hero-salons__grid js-salons swiper">
                        <div class="swiper-wrapper">
                            <?php while ($q->have_posts()):
                                $q->the_post();
                                $addr = get_field('addr_short', get_the_ID());

                                // アイキャッチ（なければダミー）
                                if (has_post_thumbnail()) {
                                    $img_html = get_the_post_thumbnail(
                                        get_the_ID(),
                                        'large',
                                        [
                                            'class' => 'p-hero-salons__img',
                                            'loading' => 'lazy',
                                            'alt' => esc_attr(get_the_title()),
                                        ]
                                    );
                                } else {
                                    $fallback = get_template_directory_uri() . '/assets/images/index/company3.jpg';
                                    $img_html = '<img class="p-hero-salons__img" src="' . esc_url($fallback) . '" alt="' . esc_attr(get_the_title()) . '">';
                                }
                                ?>
                                <a href="<?php the_permalink(); ?>" class="p-hero-salons__item swiper-slide">
                                    <div class="p-hero-salons__image">
                                        <?php echo $img_html; ?>
                                    </div>
                                    <div class="p-hero-salons__content">
                                        <h3 class="p-hero-salons__name"><?php the_title(); ?></h3>
                                        <?php if ($addr): ?>
                                            <p class="p-hero-salons__address"><?php echo esc_html($addr); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </section>

</div>
<?php get_footer(); ?>