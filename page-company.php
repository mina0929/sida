<?php get_header(); ?>
<div class="p-page p-company">
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
    <section id="mvv">
        <div class="l-container">
            <h3 class="c-page_subttl">マンツーマン施術で、<br class="md-only">髪に“わたしらしさ”を。</h3>
            <p class="c-page_desc">sidaでは、カウンセリングから仕上げまでを一人のスタイリストが担当する“マンツーマン施術”を大切にしています。<br>
                お客様一人ひとりの髪質やライフスタイル、なりたいイメージをしっかりと受け止め、その方にとって本当に似合うスタイルをご提案。<br>
                流れ作業のない丁寧な時間の中で、「わたしらしさ」が自然と引き出されていく、そんな特別な体験をお届けします。<br>
                あなたの毎日に、自信と心地よさをプラスするヘアデザインをsidaで。</p>
            <div class="p-company_mvv">
                <div class="p-company_mvv-item p-company_mvv-item--1">
                    <h4 class="p-company_mvv-title c-ttlobject c-ttlobject--center">MISSION</h4>
                    <h5 class="p-company_mvv-subtitle">「sidaがあってよかった」<br>
                        と思ってもらえる存在に</h5>
                    <p class="p-company_mvv-desc">スタッフにも、お客様にも、その家族にも―<br>
                        美容という仕事を通して、<br>
                        人生を支える“安心”と“信頼”を<br>
                        届けることが私たちの使命です。</p>
                </div>
                <div class="p-company_mvv-item p-company_mvv-item--2">
                    <h4 class="p-company_mvv-title c-ttlobject c-ttlobject--center">VISION</h4>
                    <h5 class="p-company_mvv-subtitle">美容師が安心して働き、
                        <br>
                        成長できる社会をつくる。
                    </h5>
                    <p class="p-company_mvv-desc">働きやすさとキャリアの両立を実現しながら、<br>
                        毎年新しい店舗を増やし、フランチャイズとして拡大。<br>
                        「美容師であることに、将来性を感じられる」<br>
                        未来をつくっていきます。</p>
                </div>
                <div class="p-company_mvv-item p-company_mvv-item--3">
                    <h4 class="p-company_mvv-title c-ttlobject c-ttlobject--center">VALUE</h4>
                    <ol class="p-company_mvv-list">
                        <li>尊愛と思いやりをもって、人と向き合う。</li>
                        <li>安心できる給与・休日・環境を提供する。</li>
                        <li>成長と挑戦を応援し、誰もが上を目指せるチャンスをつくる。</li>
                        <li>マンツーマンでの誠実な施術を徹底し、お客様一人ひとりに寄り添う。</li>
                        <li>「らしさ」を大切に、働く人も通う人も、sidaで自分らしくいられる場所にする。</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="swiper p-company_mvv__image">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company1.jpg"
                        alt="Company image">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company2.jpg"
                        alt="Company image">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company3.jpg"
                        alt="Company image">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company1.jpg"
                        alt="Company image">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company2.jpg"
                        alt="Company image">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company3.jpg"
                        alt="Company image">
                </div>
            </div>
        </div>
    </section>
    <section id="greeting" class="p-company_greeting">
        <div class="l-container">
            <div class="p-company_greeting__box">
                <div class="p-company_greeting__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/greeting.jpg"
                        alt="Company image">
                </div>
                <div class="p-company_greeting__text">

                    <h3 class="p-company_greeting__title c-ttlobject">GREETING</h3>
                    <h4 class="p-company_greeting__title--ja">人を思いやる心で、<br>
                        美容の未来を変える。</h4>
                    <p class="p-company_greeting__desc">
                        美容師はこんなにも素晴らしい職業なのに、恵まれずに時間やお金、そして将来を搾取されている方が多いという現状を変えたい、という思いから生まれました。美容師が休日や給料、そして将来への希望をしっかり持てる会社をつくりたい——それが私たちの出発点です。今後の目指すところは、まずは100店舗！店舗数を増やすのは、スタッフへの還元をしっかり行うためです。加えて、これは大きく将来性への投資でもあります。美容師の仕事にとどまらず、教育や経営など幅広い分野で活躍できる場も設けていきます。<br>
                        美容師という職業は特殊で、お客様やスタッフとのコミュニケーションを密にとる職業です。そこで必要なのは、人を思いやる気持ち。人とのつながりを大切に、コミュニケーションをしっかりとりながら、相手を思いやり、気持ちよく仕事ができるよう心がけています。<br><br>代表　下山
                        大智
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>