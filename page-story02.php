<?php get_header(); ?>
<div class="p-page p-story">
    <div class="c-pageheader">
        <div class="l-container">
            <div class="c-pageheader_title">
                <?php if (get_field('enttl')): ?>
                    <p class="c-pageheader_title--en"><?php the_field('enttl'); ?></p>
                <?php endif; ?>
                <?php if (get_field('jattl')): ?>
                    <h2 class="c-pageheader_title--jp"><?php the_field('jattl'); ?></h2>
                <?php endif; ?>
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story2/story2-1.jpg" alt="恒松 大毅"
                class="p-story__thumbnail">
            <div class="p-story__inner">
                <h3 class="p-story__title">マンツーマンだからこそ、<br class="md-only">お客様と深く向き合える。
                </h3>
                <div class="p-story__meta">
                    <div class="p-story__name">恒松 大毅</div>
                    <div class="p-story__role">西院店　/　店長　/　自社カウンセリング講師</div>
                </div>
                <div class="p-story__box">
                    <h4 class="p-story__question c-ttlobject"><span class="p-story__question--en">Q01</span><br><span
                            class="p-story__question--ja">sidaの魅力は？</span></h4>
                    <p class="p-story__answer">
                        sidaの魅力は、マンツーマンサロンでありながら業務委託ではないため、互いに切磋琢磨して成長できるチーム環境があり、会社として一丸でお客様をきれいにできる点にあります。さらに「スタッフファースト」の会社なので、オーナーをはじめ全員が僕らを最優先に動いてくれるところも大きな魅力です。
                    </p>
                </div>
                <div class="p-story__box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story2/story2-2.jpg" alt="恒松 大毅"
                        class="p-story__img">
                </div>
                <div class="p-story__box">
                    <h4 class="p-story__question c-ttlobject"><span class="p-story__question--en">Q02</span><br><span
                            class="p-story__question--ja">入社を決めた理由は？</span></h4>
                    <p class="p-story__answer">
                        入社を決めた一番の理由は、正社員雇用であることです。保険などの社会保障がしっかり整っている点は大切だと感じています。さらに、店舗展開をはじめさまざまなチャレンジが進む今、自分も力になり、会社と美容業界を一緒に盛り上げたいと思い入社を選びました。
                    </p>
                </div>
                <div class="p-story__box">
                    <h4 class="p-story__question c-ttlobject"><span class="p-story__question--en">Q03</span><br><span
                            class="p-story__question--ja">教育に関わる中での働きがいはありますか？</span></h4>
                    <p class="p-story__answer">
                        入社間もない頃から、取得していた「ビューティーソムリエ」の知見を活かし、会社のカウンセリング基準づくりやスタッフ全体の教育に携わっています。今後は、現場のプレイヤーとして売上に貢献するだけでなく、管理職や教育の面でも会社の役に立てる存在を目指して働いています。
                    </p>
                </div>
                <div class="p-story__box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story2/story2-3.jpg" alt="恒松 大毅"
                        class="p-story__img">
                </div>
            </div>
        </div>
    </section>

    <section class="p-recruit__box p-story__other">
        <div class="l-container">
            <div class="p-recruit__storysbox">
                <h4 class="p-recruit__storys-title">
                    <span class="p-recruit__storys-title--en">OTHER STORY</span>
                    <span class="p-recruit__storys-title--ja">スタッフストーリー</span>
                </h4>
                <div class="p-recruit__storys">
                    <a href="<?php echo esc_url(home_url('/recruit/story01')); ?>"
                        class="p-recruit__story p-recruit__story--1">
                        <div class="p-recruit__story-text">
                            <h5 class="p-recruit__story-title">
                                安心があるから、<br>
                                もっと向き合える。
                            </h5>
                            <div class="p-recruit__story-meta">
                                <span class="p-recruit__story-name">杉山 恵理</span>
                                <span class="p-recruit__story-role">西院店　/　社内TOPスタイリスト</span>
                            </div>
                        </div>
                        <div class="p-recruit__story-cta">
                            <div class="c-btn c-btn--primary">MORE</div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>