<?php get_header(); ?>
<div class="p-page p-recruit">
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
    <section class="p-recruit__box">
        <div class="l-container">
            <h3 class="c-page_subttl p-recruit_subttl">あなたらしく働ける、<br>
                美容師人生のステージへ。
            </h3>
            <p class="c-page_desc p-recruit_desc">sidaは、スタッフ一人ひとりの人生に、そっと寄り添えるサロンでありたいと思っています。<br>
                安心できる給与やお休みの制度、無理のない働き方、頼れる仲間たち。<br>
                そして、頑張りたいときには背中を押してくれるキャリアの仕組みも整えています。<br>
                ここでなら、美容師としての毎日が、もっと誇らしく、もっとあたたかくなる。<br>
                そんな場所を、一緒につくっていきませんか。</p>
        </div>
        <div class="p-recruit__images">
            <div class="p-recruit__image p-recruit__image--1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit1.jpg"
                    alt="Beautiful hairstyle" class="p-recruit__img">
            </div>
            <div class="p-recruit__image p-recruit__image--2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit2.jpg"
                    alt="Salon interior" class="p-recruit__img">
            </div>
        </div>
    </section>
    <section class="p-recruit__box">

        <div class="swiper c-marquee-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">新メニュー開始！</div>
                <div class="swiper-slide">採用情報公開中</div>
                <div class="swiper-slide">キャンペーン実施中</div>
            </div>
        </div>

        <div class="l-container">
            <h3 class="c-page_subttl c-page_subttl--center">わたしらしい<br class="md-only">働き方を実現する。</h3>
            <p class="c-page_desc c-page_desc--center">sidaでは、20代の若手が<br class="md-only">安心してスタートできるよう、<br
                    class="md-only">給与・休日・人間関係といった<br>
                “働きやすさ”をベースに、しっかりと<br class="md-only">キャリアアップできる仕組みを整えています。</p>

            <div class="p-recruit__btnbox">
                <a href="<?php echo esc_url(home_url('/recruit/curriculum/')); ?>"
                    class="p-recruit__btnitem p-recruit__btnitem--1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit3.jpg"
                        alt="Beautiful hairstyle" class="p-recruit__btnimg">
                    <div class="p-recruit__btntext"><span class="p-recruit__btntext--en">CURRICULM</span><span
                            class="p-recruit__btntext--ja">カリキュラム</span></div>
                    <div class="p-recruit__btn">
                        <div class="c-btn c-btn--primary">MORE</div>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/recruit/data/')); ?>"
                    class="p-recruit__btnitem p-recruit__btnitem--2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit4.jpg"
                        alt="Salon interior" class="p-recruit__btnimg">
                    <div class="p-recruit__btntext"><span class="p-recruit__btntext--en">DATA</span><span
                            class="p-recruit__btntext--ja">数字で見るsida</span></div>
                    <div class="p-recruit__btn">
                        <div class="c-btn c-btn--primary">MORE</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="p-recruit__box">
        <div class="l-container">
            <div class="p-recruit__benefitsbox">
                <h4 class="p-recruit__benefits-title">
                    <span class="p-recruit__benefits-title--en">BENEFITS</span>
                    <span class="p-recruit__benefits-title--ja">福利厚生</span>
                </h4>
                <div class="p-recruit__benefits">
                    <div class="p-recruit__benefit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/benefit1.svg"
                            alt="社会保険完備" class="">
                        <p>社会保険完備</p>
                    </div>
                    <div class="p-recruit__benefit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/benefit2.svg"
                            alt="有給休暇制度" class="">
                        <p>有給休暇制度</p>
                    </div>
                    <div class="p-recruit__benefit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/benefit3.svg"
                            alt="産休・育休制度" class="">
                        <p>産休・育休制度</p>
                    </div>
                    <div class="p-recruit__benefit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/benefit4.svg"
                            alt="ソムリエ制度補助" class="">
                        <p>ソムリエ制度補助</p>
                    </div>
                    <div class="p-recruit__benefit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/benefit5.svg"
                            alt="通勤手当有り" class="">
                        <p>通勤手当有り</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="p-recruit__box">
        <div class="l-container">
            <div class="p-recruit__storysbox">
                <h4 class="p-recruit__storys-title">
                    <span class="p-recruit__storys-title--en">STAFF’S STORY</span>
                    <span class="p-recruit__storys-title--ja">スタッフストーリー</span>
                </h4>
                <div class="p-recruit__storys">
                    <a href class="p-recruit__story p-recruit__story--1">
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
                    <a href class="p-recruit__story p-recruit__story--2">
                        <div class="p-recruit__story-text">
                            <h5 class="p-recruit__story-title">
                                マンツーマンだから<br class="md-only">こそ、
                                <br class="md-hidden">
                                お客様と深く<br class="md-only">向き合える。
                            </h5>
                            <div class="p-recruit__story-meta">
                                <span class="p-recruit__story-name">恒松 大毅</span>
                                <span class="p-recruit__story-role">西院店　/　店長　/　自社カウンセリング講師</span>
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