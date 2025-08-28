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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story1/story1-1.jpg" alt="杉山 恵理"
                class="p-story__thumbnail">
            <div class="p-story__inner">
                <h3 class="p-story__title">安心があるから、<br class="md-only">もっと向き合える。
                </h3>
                <div class="p-story__meta">
                    <div class="p-story__name">杉山 恵理</div>
                    <div class="p-story__role">西院店　/　社内TOPスタイリスト</div>
                </div>
                <div class="p-story__box">
                    <h4 class="p-story__question c-ttlobject"><span class="p-story__question--en">Q01</span><br><span
                            class="p-story__question--ja">sidaの魅力は？</span></h4>
                    <p class="p-story__answer">
                        お客様の満足度をしっかり考えられた会社で、社会保険もしっかり完備されていて、スタッフへの歩合還元もしっかりあるところが魅力的です。また、マンツーマンサロンということもありしっかりお客様と１：１で接することができるので、より一層責任感を持って働くことができます。
                    </p>
                </div>
                <div class="p-story__box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story1/story1-2.jpg" alt="杉山 恵理"
                        class="p-story__img">
                </div>
                <div class="p-story__box">
                    <h4 class="p-story__question c-ttlobject"><span class="p-story__question--en">Q02</span><br><span
                            class="p-story__question--ja">入社を決めた理由は？</span></h4>
                    <p class="p-story__answer">
                        初めてオーナーにお会いした時、「美容師のために会社をつくった」という言葉に熱い思いを感じ、惹かれました。当時、sidaはオープンからまだ1年ほどの若い会社でしたが、これから大きくなるワクワク感があり、その成長に自分も関わりたいと思い、入社を決めました。
                    </p>
                </div>
                <div class="p-story__box">
                    <h4 class="p-story__question c-ttlobject"><span class="p-story__question--en">Q03</span><br><span
                            class="p-story__question--ja">今後の働き方について教えてください。</span></h4>
                    <p class="p-story__answer">
                        今後、結婚や出産を迎える際にも働き方を選べるため、自分がその時期を迎えても、リスクにとらわれず楽しく仕事を続けられると感じています。
                    </p>
                </div>
                <div class="p-story__box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story1/story1-3.jpg" alt="杉山 恵理"
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
</div>
<?php get_footer(); ?>