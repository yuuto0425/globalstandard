    <?php get_header(); ?>
    <div class="main_visual">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/img/top/sp/sp-top-mv1.png" media="(max-width:767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img-mv01_pc.png" alt="人材紹介">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/img/top/sp/sp-top-mv2.png" media="(max-width:767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img-mv02_pc.png" alt="人材紹介">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/img/top/sp/sp-top-mv3.png" media="(max-width:767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img-mv03_pc.png" alt="人材紹介">
                    </picture>
                </div>
            </div>
        </div>
        <div class="main_visual_lead_area">
            <h2 class="main_visual_big_lead">
                <p><span>YOU CAN</span> <span>CHANGE</span></p>
                <p>THE WORLD</p>
            </h2>
            <p class="main_visual_sub_lead">世界で活躍できるグローバルな人材を育てる</p>
        </div>
    </div>

    <main class="main">
        <section class="about">
            <div class="about_top_bg"></div>
            <div class="about_inner inner">
                <div class="about_content">
                    <div class="top_heading">
                        <div class="section_head">
                            <h2 class="section_title">ABOUT US</h2>
                            <p class="section_sub_title">当社について</p>
                        </div>
                        <a href="<?php echo esc_url(home_url('company')); ?>" class="view_more">
                            <p>View more</p>
                            <div class="view_more_right_arrow"></div>
                            <div class="view_more_circle"></div>
                        </a>
                    </div>
                    <div class="about_content_body">
                        <p class="about_content_txt_area">
                            急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。<br>
                            <br>
                            コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。<br>
                            <br>
                            文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
                        </p>
                        <div class="about_content_img_wrapper">
                            <figure class="company_about_img">
                                <img src="<?php echo get_template_directory_uri() ?>/img/top/img-company.png" alt="" class="about_content_body_img">
                            </figure>
                            <a href="<?php echo esc_url(home_url('company')); ?>" class="view_more_sp">
                                <p>View more</p>
                                <div class="view_more_right_arrow"></div>
                                <div class="view_more_circle"></div>
                            </a>
                            <div class="about_content_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service">
            <div class="service_inner inner">
                <div class="service_content">
                    <div class="top_heading">
                        <div class="section_head">
                            <h2 class="section_title">SERVICE</h2>
                            <p class="section_sub_title">サービス</p>
                        </div>
                        <a href="<?php echo esc_url(home_url('service')); ?>" class="view_more even">
                            <p>View more</p>
                            <div class="view_more_right_arrow even"></div>
                            <div class="view_more_circle even"></div>
                        </a>
                    </div>
                    <ul class="service_card_lists">
                        <li class="service_card_list">
                            <div class="service_card_list_img">
                                <div class="service_card_list_nam">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/top/01.png" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/top/img-service01.png" alt="">
                                <h3 class="service_card_title"><span>ビジネス英語研修</span></h3>
                            </div>
                            <p class="service_card_lead">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。</p>
                        </li>
                        <li class="service_card_list">
                            <div class="service_card_list_img">
                                <div class="service_card_list_nam">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/top/02.png" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/top/img-service02.png" alt="">
                                <h3 class="service_card_title"><span>異文化</span><br><span>コミュニケーション研修</span></h3>
                            </div>
                            <p class="service_card_lead">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。
                                言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
                        </li>
                        <li class="service_card_list">
                            <div class="service_card_list_img">
                                <div class="service_card_list_nam">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/top/03.png" alt="">
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/top/img-service03.png" alt="">
                                <h3 class="service_card_title"><span>ビジネス留学</span><br><span>サポートプログラム</span></h3>
                            </div>
                            <p class="service_card_lead">将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。
                                通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。。</p>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('service')); ?>" class="view_more_sp even">
                        <p>View more</p>
                        <div class="view_more_right_arrow even"></div>
                        <div class="view_more_circle even"></div>
                    </a>
                </div>
            </div>
        </section>
        <section class="case">
            <div class="case_inner inner">
                <div class="case_content">
                    <div class="top_heading">
                        <div class="section_head section_case">
                            <h2 class="section_title">CASE STUDY</h2>
                            <p class="section_sub_title">導入事例</p>
                        </div>
                        <a href="<?php echo esc_url(home_url('case')); ?>" class="view_more">
                            <p>View more</p>
                            <div class="view_more_right_arrow"></div>
                            <div class="view_more_circle"></div>
                        </a>
                    </div>
                    <ul class="case_card_lists">
                        <?php
                        $args = array(
                            'post_type' => 'case', // カスタム投稿
                            'order' => 'rand', // ランダム
                            'posts_per_page' => 6,
                        );
                        $my_posts = get_posts($args);
                        ?>
                        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                            <li class="case_card_list">
                                <article class="case_card_list_article">
                                    <?php
                                    $page_id = get_page_by_path('case');
                                    $page_id = $page_id->ID; //ページIDを取得して$page_idに代入
                                    ?>
                                    <a href="<?php echo esc_url(home_url('/case')) ?>#<?php the_field('PairingID', $page_id); ?>">
                                        <?php if (get_field('CorporateLogo', $page_id)) : ?>
                                            <img src="<?php the_field('CorporateLogo', $page_id); ?>" alt="">
                                        <?php endif; ?>
                                        <h3 class="case_card_title"><?php the_field('CompanyName',$page_id);?></h3>
                                        <div class="case_card_category">
                                            <?php
                                            if ($terms = get_the_terms($post->ID, 'case_cate')) {
                                                foreach ($terms as $term) {
                                                    echo esc_html($term->name);
                                                }
                                            }
                                            ?>
                                        </div>
                                        <svg class="case_card_svg_icon" xmlns="http://www.w3.org/2000/svg" width="29.25" height="29.25" viewBox="0 0 29.25 29.25">
                                            <g id="arrow-icon" transform="translate(-3.375 -3.375)">
                                                <path id="パス_4104" data-name="パス 4104" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" fill="#fff" />
                                                <path id="パス_4105" data-name="パス 4105" d="M3.375,18A14.625,14.625,0,1,0,18,3.375,14.623,14.623,0,0,0,3.375,18Zm2.25,0A12.37,12.37,0,0,1,26.747,9.253,12.37,12.37,0,1,1,9.253,26.747,12.269,12.269,0,0,1,5.625,18Z" fill="#fff" />
                                            </g>
                                        </svg>
                                    </a>
                                </article>
                            </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a href="<?php echo esc_url(home_url('case')); ?>" class="view_more_sp">
                        <p>View more</p>
                        <div class="view_more_right_arrow"></div>
                        <div class="view_more_circle"></div>
                    </a>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news_inner inner">
                <div class="top_heading">
                    <div class="section_head">
                        <h2 class="section_title">NEWS</h2>
                        <p class="section_sub_title">新着情報</p>
                    </div>
                    <a href="<?php echo esc_url(home_url('news')); ?>" class="view_more even">
                        <p>View more</p>
                        <div class="view_more_right_arrow even"></div>
                        <div class="view_more_circle even"></div>
                    </a>
                </div>
                <div class="news_content">
                    <ul class="news_items">
                        <?php
                        $args = array(
                            'post_type' => 'post', // カスタム投稿
                            'order' => 'ASC', // 昇降順
                            'posts_per_page' => 3,
                        );
                        $my_posts = get_posts($args);
                        ?>
                        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                            <li class="news_item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="news_info">
                                        <?php
                                        // カテゴリー１つ目の名前を表示
                                        $category = get_the_category();
                                        if ($category[0]) {
                                            echo '<p class="news_info_cate">' . $category[0]->cat_name . '</p><!-- /entry-item-tag -->';
                                        }
                                        ?>
                                        <time datetime="<?php the_time('c') ?>" class="news_info_time"><?php the_time('Y.m.d'); ?></time>
                                    </div>
                                    <h3 class="news_title"><?php the_title(); ?></h3>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('news')); ?>" class="view_more_sp even">
                    <p>View more</p>
                    <div class="view_more_right_arrow even"></div>
                    <div class="view_more_circle even"></div>
                </a>
            </div>
        </section>
        <?php get_footer(); ?>