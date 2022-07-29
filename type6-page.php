<?php

/**
 * Template Name: Type 6 (Mechanism)
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="custom-page-header pt-5 pt-3">
            <div class="container d-flex justify-content-center">

                <div class="col-lg-10 col-md-10">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p><?php echo the_content(); ?></p>
                </div>

            </div>
        </div>


        <div class="mechanism">
            <div class="container">
                <div class="top-banner text-center">
                    <img src="https://placehold.jp/6e65b3/ffffff/800x200.png?text=MECHANISM" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                </div>
                <div class="inner-contents no1">
                    <h3>01. 特許技術インカラミ反応</h3>
                    <p>TOKIOの圧倒的なケア効果を可能にする、TOKIOでしか実現できない技術です。</p>
                    <hr>
                    <img src="https://placehold.jp/80/242647/ffffff/640x640.png?text=%E6%AF%9B%E9%AB%AA%E3%81%AE%E6%96%AD%E9%9D%A2%E5%9B%B3" alt="断面図" class="img-fluid">
                    <hr>

                    <h4>毛髪のダメージ</h4>
                    <p>エイジング・紫外線・アイロン・カラーやパーマによって、ケラチンタンパク質が壊れた状態をさします。</p>
                    <h4>特許技術インカラミ</h4>
                    <p>壊れたケラチンタンパク質に対して、驚異的なケア効果を発揮します。</p>
                    <h4>特許技術インカラミ</h4>
                    <p>壊れたケラチンタンパク質に対して、驚異的なケア効果を発揮します。</p>
                    <h4>毛髪強度を140%回復させる</h4>
                    <p>大きなダメージを受けた毛髪は、「」引っかかると千切れる」「濡れるとの伸びる」</p>
                    <p>TOKIOの施術によって、毛髪の強度が140％まで回復し、引っ張っても千切れにくく、濡れても伸びにくい質感へ導きます。</p>
                </div>
            </div>
            <div class="container">
                <div class="top-banner text-center">
                    <img src="https://placehold.jp/6e65b3/ffffff/800x200.png?text=MECHANISM" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                </div>
                <div class="inner-contents no1">
                    <h3>02. ダブルインカラミ</h3>
                    <p>世界初の家庭用システムトリートメント、TOKIO IEの秘訣</p>
                    <hr>
                    <img src="https://placehold.jp/80/242647/ffffff/640x640.png?text=%E6%AF%9B%E9%AB%AA%E3%81%AE%E6%96%AD%E9%9D%A2%E5%9B%B3" alt="断面図" class="img-fluid">
                    <hr>


                    <h5>毛髪強度を140%回復させる</h5>
                    <p>サロンでTOKIOインカラミの施術を受けた後、いつも通りに、シャンプーとトリートメントをすることで、ダブルインカラミが完結します。</p>

                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="pages-link col-sm-6">
                    <div class="img-bnr">

                    </div>
                    <div class="link-text">
                        <h4>03. TOKIOの他ブランド</h4>
                        <p>TOKIOブランドでは、インカラミ反応を取り入れた、あらゆるメニューを展開しております。
                                TOKIOのストレートパーマ、デジタルパーマ、ヘッドスパについてはお取り扱いサロン様へお問い合わせくださいませ。
                            </p>
                    </div>
                </div>
                <div class="pages-link col-sm-6">
                    <div class="img-bnr">

                    </div>
                    <div class="link-text">
                        <h4>04. i-Column</h4>
                            <p>美容のシャンプー、トリートメント、スタイリング剤選びならi-Column。髪を綺麗にするための美容メディアです。
                            </p>
                    </div>
                </div>
                </div>
            </div>
        </div>


    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>