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
                    // 上部：基本情報（ACF）
                    $addr = get_field('addr');   // 住所
                    $tel = get_field('tel');    // TEL
                    $hour = get_field('hour');   // 営業時間
                    $url = get_field('url');    // 予約URLなど
                    $map = get_field('map');    // リッチエディタ（iframe想定）
                    ?>

                    <div class="p-salon__head">
                        <h1 class="p-salon__title"><?php the_title(); ?></h1>
                        <?php
                        // アイキャッチ（任意）
                        if (has_post_thumbnail()):
                            echo '<div class="p-salon__thumb">';
                            the_post_thumbnail('large', ['class' => 'p-salon__img', 'loading' => 'lazy']);
                            echo '</div>';
                        endif;
                        ?>
                        </header>

                        <div class="p-salon__info">
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
                                            <a href="tel:<?php echo esc_attr(preg_replace('/\D+/', '', $tel)); ?>">
                                                <?php echo esc_html($tel); ?>
                                            </a>
                                        </dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ($hour): ?>
                                    <div class="p-salon__info-row">
                                        <dt class="p-salon__info-term">HOUR</dt>
                                        <dd class="p-salon__info-desc"><?php echo esc_html($hour); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if ($url): ?>
                                    <div class="p-salon__info-row">
                                        <dt class="p-salon__info-term">URL</dt>
                                        <dd class="p-salon__info-desc">
                                            <a class="c-link" href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
                                                予約はこちら
                                            </a>
                                        </dd>
                                    </div>
                                <?php endif; ?>
                            </dl>
                        </div>

                        <?php if ($map): ?>
                            <div class="p-salon__map">
                                <?php
                                // iframe入りのWYSIWYGをそのまま出す（信頼できる入力のみ）
                                echo $map; // wp_kses_post() に通すと iframe が消えるため注意
                                ?>
                            </div>
                        <?php endif; ?>

                        <?php
                        // ===== STAFF（グループ: staff_item1〜10） =====
                        $has_staff = false;
                        ob_start();
                        for ($i = 1; $i <= 10; $i++):
                            $item = get_field("staff_item{$i}"); // グループ配列 or null
                            if (empty($item))
                                continue;

                            $img = isset($item['staff_img']) ? $item['staff_img'] : '';
                            $name = isset($item['staff_name']) ? $item['staff_name'] : '';
                            $role = isset($item['staff_role']) ? $item['staff_role'] : '';
                            $num = isset($item['staff_num']) ? $item['staff_num'] : ''; // 年数など
                            $insta = isset($item['staff_insta']) ? $item['staff_insta'] : '';

                            // いずれか入っていれば表示
                            if ($img || $name || $role || $num || $insta):
                                $has_staff = true;
                                ?>
                                <article class="p-staff-card">
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
                                                <?php echo esc_html(trim($num . ($num && $role ? '｜' : '') . $role)); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if ($insta): ?>
                                            <p class="p-staff-card__insta">
                                                <a href="<?php echo esc_url($insta); ?>" target="_blank" rel="noopener">@Instagram</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </article>
                                <?php
                            endif;
                        endfor;
                        $staff_html = ob_get_clean();
                        ?>

                        <?php if ($has_staff): ?>
                            <section class="p-salon__staff">
                                <h2 class="p-salon__staff-title">STAFF</h2>
                                <div class="p-salon__staff-grid">
                                    <?php echo $staff_html; ?>
                                </div>
                            </section>
                        <?php endif; ?>

                        <div class="p-salon__back">
                            <a class="c-btn c-btn--ghost" href="<?php echo esc_url(get_post_type_archive_link('salon')); ?>">
                                Back to list
                            </a>
                        </div>

                    <?php endwhile; endif; ?>

            </div>
    </section>

</div>
<?php get_footer(); ?>