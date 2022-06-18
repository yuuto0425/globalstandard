<?php get_header('index'); ?>

<main class="l-main-case">
    <div class="lower-inner case-lower-inner">
        <nav class="l-case-nav">
            <ul class="l-case-nav-lists">
                <?php require_once('require/lists.php');?>
                <?php foreach ($lists as $list) : ?>
                    <li class="l-case-nav-list">
                        <a href="<?php echo $list['link']; ?>">
                            <?php
                            $terms = get_terms('case_cate', array('slug' => $list['terms']));
                            $term = $terms[0];
                            echo $term->name;    //ターム名を表示
                            ?>
                            <!-- term名を出力 -->
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <?php foreach ($lists as $list) : ?>
            <section id="<?php echo $list['terms']; ?>" class="l-case-section">
                <h3 class="l-case-cate-title">
                    <?php
                    $terms = get_terms('case_cate', array('slug' => $list['terms']));
                    $term = $terms[0];
                    echo $term->name;    //ターム名を表示
                    ?>
                    <span><?php echo $list['sub_terms_name'] ?></span>
                </h3>
                <article class="l-case-items">
                    <?php
                    $args = array(
                        'post_type' => 'case', // カスタム投稿
                        'order' => 'ASC', // 昇降順
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'case_cate', // タクソノミー
                                'field' => 'slug',
                                'terms' => $list['terms'], // ターム 
                            )
                        )
                    );
                    $my_posts = get_posts($args);
                    ?>
                    <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                        <div id="<?php the_field('PairingID'); ?>" class="l-case-item">
                            <div class="l-case-item-header">
                                <h4 class="l-case-item-header-title"><?php the_title(); ?></h4>
                                <p class="l-case-item-header-company-title"></p>
                                <div class="l-case-item-header-company-logo">
                                    <?php if(get_field('CorporateLogo')):?>
                                    <img src="<?php the_field('CorporateLogo');?>" alt="">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="l-case-item-body">
                                <h5 class="l-case-item-body-title">研修コース：
                                    <?php
                                    $terms = get_the_terms($post->ID, 'case_cate');
                                    if (!empty($terms)) {
                                        foreach ($terms as $term) :
                                            echo $term->name;
                                        endforeach;
                                    } else {
                                        echo '未分類';
                                    } ?>
                                </h5>
                                <h6 class="l-case-item-body-sub-title">研修の目的</h6>
                                <?php if(get_field('TrainingObjectives')):?>
                                <p class="l-case-item-body-text"><?php the_field('TrainingObjectives');?></p>
                                <?php endif;?>
                                <h6 class="l-case-item-body-sub-title">選んだ理由</h6>
                                <?php if(get_field('TrainingObjectives')):?>
                                <p class="l-case-item-body-text"><?php the_field('ReasonsForSelection');?></p>
                                <?php endif;?>
                                <h6 class="l-case-item-body-sub-title">導入後の成果・効果</h6>
                                <?php if(get_field('results')):?>
                                <p class="l-case-item-body-text"><?php the_field('results');?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </article>
                <div class="case_btn_wrapper">
                    <a href="<?php echo esc_url(home_url('/service')).'#'.$list['id']; ?>" class="case_btn">
                        <?php
                        $terms = get_terms('case_cate', array('slug' => $list['terms']));
                        $term = $terms[0];
                        echo $term->name;    //ターム名を表示
                        ?>の詳細
                    </a>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</main>
<?php get_footer(); ?>