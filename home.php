<?php get_header('index'); ?>
<main class="main">
  <div class="lower-inner l_news_inner">
    <div class="l_news">
      <div class="l_news_wrapper">
        <section class="l_news_main_content">
          <h3 class="l_news_main_title"><?php single_post_title(); ?></h3>
          <ul class="l_news_post_lists">
            <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
                <li class="l_news_post_list">
                  <article class="l_news_post_list_article">
                    <a href="<?php the_permalink(); ?>">
                      <figure class="l_news_post_list_img">
                        <?php if (has_post_thumbnail()) {
                          echo the_post_thumbnail('full');
                        } else {
                          echo '<img src="' . get_template_directory_uri() . '/img/news/icatch-news.png" alt=" ">';
                        } ?>
                      </figure>
                      <div class="l_news_post_list_body">
                        <div class="l_news_post_list_body_top">
                          <?php $category = get_the_category();
                          if ($category[0]) {
                            echo '<p class="l_news_post_list_cate_name">' . $category[0]->cat_name . '</p>';
                          } ?>
                          <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                        <h4 class="l_news_post_list_title"><?php the_title(); ?></h4>
                      </div>
                    </a>
                  </article>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>
          <?php get_template_part('template/pagenation');?>
        </section>
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>