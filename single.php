<?php get_header('index'); ?>
<main class="main">
    <div class="lower-inner l_news_inner">
        <div class="l_news">
            <div class="l_news_wrapper">
                <section class="l_news_main_content">
                    <div class="l_news_single_post_wrapper ">
                        <?php if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <div class="single_post_top">
                                    <?php $category = get_the_category();
                                    if ($category[0]) {
                                        echo '<p class="l_news_post_list_cate_name">' . $category[0]->cat_name . '</p>';
                                    } ?>
                                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </div>
                                <div class="l_news_single_post">
                                    <article class="l_news_single_post_article">
                                        <figure class="l_news_post_list_img single_post">
                                            <?php if (has_post_thumbnail()) {
                                                echo the_post_thumbnail();
                                            } else {
                                                echo '<img src="' . get_template_directory_uri() . '/img/news/icatch-news.png" alt=" ">';
                                            } ?>
                                        </figure>
                                        <div class="l_news_single_post_body">
                                            <?php the_content(); ?>
                                        </div>
                                    </article>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="single_post_bottom_next_prev_link">
                        <?php if (get_previous_post()) : ?>
                            <?php previous_post_link('%link', '前の記事へ'); ?>
                        <?php endif; ?>

                        <?php if (get_next_post()) : ?>
                            <?php next_post_link('%link', '次の記事へ'); ?>
                        <?php endif; ?>
                    </div>
                </section>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>