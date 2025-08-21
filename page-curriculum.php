<?php get_header(); ?>
<div class="p-page p-curriculum">
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
            <div class="p-curriculum__box">
                <section class="p-curriculum__item p-curriculum__item--policy">
                    <h4 class="p-curriculum__title c-ttlobject">sidaの教育方針と仕組み</h4>
                    <p class="p-curriculum__lead">
                        sidaの教育は、ただ技術を教えるだけではありません。<br>
                        「目の前のお客様にきちんと向き合える人」を育てるために、カウンセリング力や対応力も重視しています。
                    </p>

                    <div class="p-curriculum__list">
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">カウンセリングセミナー</h5>
                                <div class="p-curriculum-card__meta">月一回</div>
                            </div>
                            <p class="p-curriculum-card__desc">
                                お客様の「なりたい印象」を引き出すためのヒアリング力を<br class="md-hidden">
                                磨くセミナーです。似合わせや印象プロデュースの理論を学び、<br class="md-hidden">
                                日々の接客で活かせる実践的なカウンセリングスキルを身につけます。
                            </p>
                        </div>
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">技術講習</h5>
                                <div class="p-curriculum-card__meta">月一回</div>
                            </div>
                            <p class="p-curriculum-card__desc">
                                最新のトレンドや技術を取り入れながら、<br class="md-hidden">
                                カット・カラー・ケアのスキルを高める講習です。<br class="md-hidden">
                                現場ですぐに役立つ実践練習で、着実に成長できます。
                            </p>
                        </div>
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">オンライン・対面の<br class="md-only">両方を活用した<br>
                                    ハイブリッド型教育</h5>
                            </div>
                            <p class="p-curriculum-card__desc">自宅から参加できるオンライン研修と、<br class="md-hidden">
                                対面練習を組み合わせた効率的な学習スタイル。<br class="md-hidden">
                                時間や場所にとらわれず、継続的にスキルアップできます。
                            </p>
                        </div>
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">ミルボン<br class="md-only">「オージュアソムリエ制度」など<br>
                                    外部講習にも対応</h5>
                            </div>
                            <p class="p-curriculum-card__desc">髪質や頭皮の専門知識を深める「オージュアソムリエ」取得をはじめ、<br class="md-hidden">
                                外部の専門講習への参加も支援。高い提案力と専門性を持った<br class="md-hidden">
                                スタイリストとして活躍できる環境です。
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="p-curriculum__box">
                <section class="p-curriculum__item p-curriculum__item--policy">
                    <h4 class="p-curriculum__title c-ttlobject">キャリアステップ制度</h4>
                    <p class="p-curriculum__lead">
                        sidaでは、スタッフ一人ひとりのライフスタイルや目標に合わせたキャリアプランを提案しています。
                        <br>
                        基本的には正社員雇用でのスタートですが、希望や適性に応じて様々な働き方が選べます。
                    </p>

                    <div class="p-curriculum__list p-curriculum__list--2">
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">短時間勤務正社員</h5>
                                <div class="p-curriculum-card__meta">時間制限がある方向け</div>
                            </div>
                        </div>
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">通常勤務正社員</h5>
                                <div class="p-curriculum-card__meta">キャリアップ可能</div>
                            </div>
                        </div>
                        <div class="p-curriculum-card">
                            <div class="p-curriculum-card__head">
                                <h5 class="p-curriculum-card__title">店長・マネージャー職</h5>
                                <div class="p-curriculum-card__meta">教育・経営・店頭を兼任</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-curriculum__point">売上や実績に応じて給与もステップアップしていく制度を整えており、「長く働くほど安心できる」環境を用意しています。</div>
                </section>
            </div>
            <div class="p-curriculum__box">
                <section class="p-curriculum__item p-curriculum__item--policy">
                    <h4 class="p-curriculum__title c-ttlobject">オージュアソムリエ制度</h4>
                    <p class="p-curriculum__lead">
                        より専門的に髪と向き合うために、ミルボン社の「オージュアソムリエ制度」を取り入れています。この制度は、髪質・頭皮・ライフスタイルに合わせて最適なケアプログラムを提案できる、美容の“パーソナルケアのプロ”としての証です。専門の研修や試験を経て認定を受けるため、技術だけでなく知識・カウンセリング力も高めることができます。実際にsidaでは、多くのスタッフが資格を取得しており、信頼される提案力につながっています。「お客様の髪に本当に合うケアを届けたい」――そんな想いを、資格というかたちで育てていける制度です。
                    </p>
                    <div class="p-curriculum__pointbox">
                        <h5 class="p-curriculum__pointbox__title">オージュアソムリエ制度とは？</h5>
                        <p class="p-curriculum__pointbox__desc">
                            ミルボン社が認定する、パーソナルな毛髪ケア提案の専門資格。座学・実技・カウンセリング審査をクリアした美容師にのみ与えられます。sidaでは取得率約80%を超えるスタッフが保有しています。
                        </p>
                        <p class="c-note">※2025年現在
                        </p>
                    </div>

                    <div class="p-curriculum__flow">
                        <h5 class="p-curriculum__flow__title">認定までの流れ</h5>
                        <ul class="p-curriculum__flowlist">
                            <li class="p-curriculum__flow-card">
                                <div class="p-curriculum__flow-title">STEP1</div>
                                <p class="p-curriculum__flow-desc">知識検定</p>
                            </li>
                            <li class="p-curriculum__flow-card">
                                <div class="p-curriculum__flow-title">STEP1</div>
                                <p class="p-curriculum__flow-desc">知識検定</p>
                            </li>
                            <li class="p-curriculum__flow-card">
                                <div class="p-curriculum__flow-title">STEP1</div>
                                <p class="p-curriculum__flow-desc">知識検定</p>
                            </li>
                            <li class="p-curriculum__flow-card">
                                <div class="p-curriculum__flow-title">STEP1</div>
                                <p class="p-curriculum__flow-desc">知識検定</p>
                            </li>
                        </ul>

                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>