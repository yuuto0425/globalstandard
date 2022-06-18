<aside class="l_sidebar">
    <h3 class="l_sidebar_title">新着記事</h3>
    <?php $args = array(
        'posts_per_page' => 6,
        'post_type' => 'post',
    );
    $my_posts = get_posts($args); ?>
    <ul class="l_sidebar_posts_lists">
        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
            <li class="l_sidebar_posts_list">
                <article class="l_sidebar_posts_list_article">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="l_sidebar_posts_list_figure">
                            <?php if (has_post_thumbnail()) {
                                echo the_post_thumbnail(array(100, 100));
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/news/icatch-news.png" alt="">';
                            }
                            ?>
                        </figure>
                        <div class="l_sidebar_posts_list_body">
                            <div class="l_sidebar_posts_list_body_top">
                                <?php $category = get_the_category();
                                if ($category[0]) {
                                    echo '<p class="l_news_post_list_cate_name sidebar">' . $category[0]->cat_name . '</p>';
                                } ?>
                                <time datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                            </div>
                            <h4 class="l_sidebar_posts_list_title"><?php the_title(); ?></h4>
                        </div>
                    </a>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
    <h3 class="l_sidebar_title">カテゴリ</h3>
    <ul class="l_sidebar_posts_cate_lists">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<li class="l_sidebar_posts_cate_list"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        ?>
    </ul>
</aside>