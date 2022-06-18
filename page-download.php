<?php get_header('index'); ?>
<main class="main">
    <div class="lower-inner l_download_inner">
        <div class="l_form_page">
            <div class="l_download_wrapper">
                <div class="l_download_left_content">
                    <p class="l_download_left_title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</p>
                    <figure class="l_download_figure">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/download/pamphlet.png" alt="">
                    </figure>
                    <p class="l_download_left_txt">
                        急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。
                        ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、
                        世界レベルでの人脈を構築する研修をご用意しております。
                        英語に苦手意識のある方でもご安心ください。
                        ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。
                        まずはこちらの資料をごらんください。
                    </p>
                </div>
                <div class="l_download_right_form">
                    <h3 class="l_form_title">資料ダウンロード</h3>
                    <div class="l_download_right_form_body">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php get_footer(); ?>