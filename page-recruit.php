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
                <div class="swiper-slide">BE YOURSELF SHINE AS A STYLIST</div>
                <div class="swiper-slide">BE YOURSELF SHINE AS A STYLIST</div>
                <div class="swiper-slide">BE YOURSELF SHINE AS A STYLIST</div>
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
                    <a href="<?php echo esc_url(home_url('/recruit/story02')); ?>"
                        class="p-recruit__story p-recruit__story--2">
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
    <section class="p-recruit__box p-recruit__flow">
        <div class="l-container">
            <div class="p-recruit__storysbox">
                <h4 class="p-recruit__flow-title">
                    <span class="p-recruit__flow-title--en">FLOW</span>
                    <span class="p-recruit__flow-title--ja">採用までの流れ</span>
                </h4>
                <div class="p-curriculum__flow">
                    <ul class="p-curriculum__flowlist">
                        <li class="p-curriculum__flow-card">
                            <div class="p-curriculum__flow-title">STEP1</div>
                            <p class="p-curriculum__flow-desc">応募</p>
                            <p class="p-curriculum__flow-text">ホームページのお問い合わせ<br>
                                フォームから応募ください。<br>
                                担当者よりご連絡いたします。</p>
                        </li>
                        <li class="p-curriculum__flow-card">
                            <div class="p-curriculum__flow-title">STEP2</div>
                            <p class="p-curriculum__flow-desc">書類選考</p>
                            <p class="p-curriculum__flow-text">応募後、メールもしくは郵送にて<br>
                                履歴書をお送りください。<br>
                                到着後、書類選考を行います。</p>
                        </li>
                        <li class="p-curriculum__flow-card">
                            <div class="p-curriculum__flow-title">STEP3</div>
                            <p class="p-curriculum__flow-desc">面接・店舗見学</p>
                            <p class="p-curriculum__flow-text">書類選考通過後、<br>
                                通過のお知らせと、面接・店舗見学<br>
                                のご案内をお送りします。</p>
                        </li>
                        <li class="p-curriculum__flow-card">
                            <div class="p-curriculum__flow-title">STEP4</div>
                            <p class="p-curriculum__flow-desc">採用</p>
                            <p class="p-curriculum__flow-text">面接・店舗見学後、<br>
                                選考結果を10日以内に<br>
                                お送りします。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="p-recruit__box">
        <div class="l-container">
            <div class="p-recruit__jobofferbox">
                <h4 class="p-recruit__joboffer-title">
                    <span class="p-recruit__joboffer-title--en">JOB OFFER</span>
                    <span class="p-recruit__joboffer-title--ja">募集要項</span>
                </h4>
                <dl class="p-recruit__joboffer-list">
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">募集職種</dt>
                        <dd class="p-recruit__joboffer-desc">アシスタント／アシスタント兼アイリスト</dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">雇用形態</dt>
                        <dd class="p-recruit__joboffer-desc"><span
                                class="u-text-pink">▶︎プライベートを優先にしたい！</span><br>基本給：20万円<br>
                            休日：公休8回／早番　遅番制<br>
                            給与：歩合・技術売上40%　フリー＆指名<br><br><span class="u-text-pink">▶︎しっかり稼ぎたい！</span><br>基本給：20万円<br>
                            休日：公休8回　フルタイム／早番　遅番　月4回<br>
                            給与：歩合／100万円以下　40%　　<br class="md-only">100万円以上　45%<br><br><span
                                class="u-text-pink">▶︎将来への伸び代をつけたい</span><br>基本給：25万円<br>
                            休日：公休8回　フルタイム／早番　遅番　月4回<br>
                            給与：歩合／フリー　40%　　<br class="md-only">指名　　50%</dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">勤務地</dt>
                        <dd class="p-recruit__joboffer-desc">sida<br>〒567-0817 大阪府茨木市別院町3-34<br><br>sida
                            SAIIN<br>〒567-0817 大阪府茨木市別院町3-34<br><br>sida MINOH<br>〒567-0817 大阪府茨木市別院町3-34<br><br>ranan
                            by sida<br>〒567-0817 大阪府茨木市別院町3-34
                        </dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">勤務時間</dt>
                        <dd class="p-recruit__joboffer-desc">09:00open　<br class="md-only">フル：09:00〜20:00　<br
                                class="md-only">早番：09:00〜18:00　<br class="md-only">遅番：11:00〜ラスト<br><br class="md-only">
                            10:00open　<br class="md-only">フル：10:00〜21:00　<br class="md-only">早番：10:00〜17:00　<br
                                class="md-only">遅番：12:00〜ラスト
                        </dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">歩合給</dt>
                        <dd class="p-recruit__joboffer-desc">最低保証以上の売上から</dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">社会保険</dt>
                        <dd class="p-recruit__joboffer-desc">雇用保険／健康保険／労災／厚生年金</dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">福利厚生</dt>
                        <dd class="p-recruit__joboffer-desc">産休・育休</dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">諸手当</dt>
                        <dd class="p-recruit__joboffer-desc">店販手当、役職手当</dd>
                    </div>
                    <div class="p-recruit__joboffer-row">
                        <dt class="p-recruit__joboffer-term">交通費</dt>
                        <dd class="p-recruit__joboffer-desc">公共交通機関利用の場合　上限1万円</dd>
                    </div>
                </dl>
                <div class="p-recruit__joboffer-btn">
                    <div class="p-recruit__joboffer-link">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-btn2">ENTRY</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>