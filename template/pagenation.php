<?php if (paginate_links()) : ?>
    <div class="l_news_paginate paginate_items">
        <?php echo
        paginate_links(
            array(
                'end_size' => 0,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<img src="' . esc_url(get_template_directory_uri()) . '/img/news/icon-chevron-left.svg" alt="">',
                'next_text' => '<img src="' . esc_url(get_template_directory_uri()) . '/img/news/icon-chevron-right.svg" alt="">',
            )
        ); ?>
    </div>
<?php endif; ?>