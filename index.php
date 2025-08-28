<?php get_header(); ?>
<section class="p-hero" id="hero">
    <div class="p-hero__grid">
        <div class="p-hero__inner">
            <div class="p-hero__text">
                <h1 class="p-hero__title">
                    <span class="p-hero__title-line">Your Beauty.</span>
                    <span class="p-hero__title-line">Your Way.</span>
                    <span class="p-hero__title-line p-hero__title-line--accent">Always.</span>
                </h1>
                <p class="p-hero__subtitle">
                    ずっと美しく、わたしらしく。<br>
                    美しさを叶えるライフサロン。
                </p>
            </div>
        </div>
        <div class="p-hero__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/hero.jpg"
                alt="Beautiful woman with brown hair" class="p-hero__img">
        </div>
    </div>
</section>

<section class="p-hero-concept" id="concept">
    <div class="p-hero-concept__inner">
        <div class="p-hero-concept__content">
            <div class="p-hero-concept__text">
                <h2 class="p-hero-concept__title">
                    <span class="p-hero-concept__title-en">CONCEPT</span>
                    <span class="p-hero-concept__title-ja">
                        マンツーマン施術で、
                        <br>
                        髪に“わたしらしさ”を。
                    </span>
                </h2>
                <div class="p-hero-concept__description">
                    <p>sidaでは、カウンセリングから仕上げまでを<br>
                        一人のスタイリストが担当する“マンツーマン施術”を大切にしています。<br>
                        私たちのカウンセリングは、単に髪型を決めるのではなく、<br>
                        「印象プロデュース」という考え方を軸にしています。<br>
                        お客様が「どう見られたいか」という理想のイメージに寄り添いながら、<br>
                        今の印象とのズレを丁寧に整えていくことで、<br>
                        その方らしさが自然とにじみ出るスタイルをかたちにしていきます。<br>
                        <br>
                        髪質やライフスタイルに寄り添い、<br>
                        流れ作業のない丁寧な時間の中で生まれる特別な体験。<br>
                        あなたの毎日に、自信と心地よさをプラスするヘアデザインをsidaで。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-hero-concept__images">
        <div class="p-hero-concept__image p-hero-concept__image--1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/concept1.jpg"
                alt="Beautiful hairstyle" class="p-hero-concept__img">
        </div>
        <div class="p-hero-concept__image p-hero-concept__image--2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/concept2.jpg" alt="Salon interior"
                class="p-hero-concept__img">
        </div>
    </div>
</section>

<section class="p-hero-company" id="company">
    <div class="l-container">
        <div class="p-hero-company__content">
            <div class="p-hero-company__left">
                <h2 class="p-hero-company__title">
                    <span class="p-hero-company__title-en">COMPANY</span>
                    <span class="p-hero-company__title-ja">sidaについて</span>
                </h2>
                <div class="p-hero-company__link md-hidden">
                    <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-link">View more<img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg"
                            class="c-link__arrow"></a>
                </div>
            </div>
            <div class="p-hero-company__right">
                <div class="p-hero-company__description">
                    <p>sidaは、「思いやり」と「安心」を大切にする美容サロン運営会社です。<br>
                        美容師として働く人たちが、将来に不安を感じることなく、自分らしく輝ける場所をつくりたい――<br>
                        そんな想いからスタートしました。カウンセリング・ケア・カラーを軸とした、マンツーマン施術を大切にし、お客様一人ひとりに寄り添う丁寧なサロン体験を提供しています。また、スタッフにとっても安心して長く働ける環境を整え、ライフスタイルに合わせた働き方やキャリアアップの機会を広げています。
                    </p>
                </div>
            </div>
            <div class="p-hero-company__link md-only">
                <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-link">View more<img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg"
                        class="c-link__arrow"></a>
            </div>
        </div>
        <div class="p-hero-company__images">
            <a href="<?php echo esc_url(home_url('/company#mvv')); ?>" class="p-hero-company__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/company1.jpg"
                    alt="Hair stylist at work" class="p-hero-company__img">
                <div class="p-hero-company__image-num">01</div>
                <div class="p-hero-company__image-caption">
                    <p class="p-hero-company__caption--en">MVV</p>
                    <p class="p-hero-company__caption--ja">sidaの使命</p>
                </div>
            </a>
            <a href="<?php echo esc_url(home_url('/company#greeting')); ?>" class="p-hero-company__image"> <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/index/company2.jpg"
                    alt="Hair consultation" class="p-hero-company__img">
                <div class="p-hero-company__image-num">01</div>
                <div class="p-hero-company__image-caption">
                    <p class="p-hero-company__caption--en">GREETING</p>
                    <p class="p-hero-company__caption--ja">ごあいさつ</p>
                </div>
            </a>
            <a href="<?php echo esc_url(home_url('/company#overview')); ?>" class="p-hero-company__image"> <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/index/company3.jpg"
                    alt="Salon interior" class="p-hero-company__img">
                <div class="p-hero-company__image-num">01</div>
                <div class="p-hero-company__image-caption">
                    <p class="p-hero-company__caption--en">OVERVIEW</p>
                    <p class="p-hero-company__caption--ja">会社概要</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="p-hero-salons" id="salon">
    <div class="l-container">
        <div class="p-hero-salons__header">
            <h2 class="p-hero-salons__title">
                <span class="p-hero-salons__title-en">OUR SALONS</span>
                <span class="p-hero-salons__title-ja">サロン紹介</span>
            </h2>
            <div class="p-hero-salons__link md-hidden">
                <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-link">View more<img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg"
                        class="c-link__arrow"></a>
            </div>
        </div>
        <?php
        $args = [
            'post_type' => 'salon',
            'posts_per_page' => 4,
            'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
        ];
        $q = new WP_Query($args);

        if ($q->have_posts()): ?>
            <div class="p-hero-salons__grid swiper">
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
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="p-hero-salons__link md-only">
            <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-link">View more<img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg"
                    class="c-link__arrow"></a>
        </div>
    </div>
</section>

<section class="p-hero-recruit" id="recruit">
    <div class="p-hero-recruit__inner">
        <a href class="p-hero-recruit__content">
            <div class="p-hero-recruit__text">
                <h2 class="p-hero-recruit__title">
                    <span class="p-hero-recruit__title-en">RECRUIT</span>
                </h2>
                <h3 class="p-hero-recruit__subtitle">
                    この先も、<br>
                    美容師として<br class="md-only">歩んでいける場所。
                </h3>
                <div class="p-hero-recruit__description md-hidden">
                    <p>sidaは、スタッフ一人ひとりの人生に、そっと寄り添えるサロンでありたいと思っています。安心できる給与やお休みの制度、無理のない働き方、頼れる仲間たち。そして、頑張りたいときには背中を押してくれるキャリアの仕組みも整えています。ここでなら、美容師としての毎日が、もっと誇らしく、もっとあたたかくなる。そんな場所を、一緒につくっていきませんか。
                    </p>
                </div>
            </div>
            <div class="p-hero-recruit__cta">
                <div class="c-btn c-btn--primary">MORE</div>
            </div>
        </a>
    </div>
</section>

<?php get_footer(); ?>