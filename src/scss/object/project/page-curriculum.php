<?php get_header(); ?>
<div class="p-page">
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
            <h3 class="c-page_subttl">教育は「型」より「想い」。
                <br>丁寧に育てる制度があります。
            </h3>
            <div class="p-curriculum_box">
                <div class="p-curriculum_box-item p-curriculum_box-item--1">
                    <h4 class="p-curriculum_box-title c-ttlobject">sidaの教育方針と仕組み</h4>
                    <p class="p-curriculum_box-desc">sidaの教育は、ただ技術を教えるだけではありません。<br>
                        「目の前のお客様にきちんと向き合える人」を育てるために、カウンセリング力や対応力も重視しています。</p>
                    <div class="">
                        <div class="">
                            <h5 class="">カウンセリングセミナー</h5>
                            <div>月一回</div>
                            <p class="p-company_mvv-desc">
                                お客様の「なりたい印象」を引き出すためのヒアリング力を<br>磨くセミナーです。似合わせや印象プロデュースの理論を学び、<br>
                                日々の接客で活かせる実践的なカウンセリングスキルを身につけます。</p>
                        </div>
                        <div class="">
                            <h5 class="">カウンセリングセミナー</h5>
                            <div>月一回</div>
                            <p class="p-company_mvv-desc">
                                お客様の「なりたい印象」を引き出すためのヒアリング力を<br>磨くセミナーです。似合わせや印象プロデュースの理論を学び、<br>
                                日々の接客で活かせる実践的なカウンセリングスキルを身につけます。</p>
                        </div>
                        <div class="">
                            <h5 class="">カウンセリングセミナー</h5>
                            <div>月一回</div>
                            <p class="p-company_mvv-desc">
                                お客様の「なりたい印象」を引き出すためのヒアリング力を<br>磨くセミナーです。似合わせや印象プロデュースの理論を学び、<br>
                                日々の接客で活かせる実践的なカウンセリングスキルを身につけます。</p>
                        </div>
                        <div class="">
                            <h5 class="">カウンセリングセミナー</h5>
                            <div>月一回</div>
                            <p class="p-company_mvv-desc">
                                お客様の「なりたい印象」を引き出すためのヒアリング力を<br>磨くセミナーです。似合わせや印象プロデュースの理論を学び、<br>
                                日々の接客で活かせる実践的なカウンセリングスキルを身につけます。</p>
                        </div>
                    </div>
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
    <section class="p-company_greeting">
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