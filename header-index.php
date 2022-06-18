<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo bloginfo('description') ?>">
    <?php wp_head(); ?>

</head>

<body>
    <header class="header ">
        <!-- .is-drawer-openのtoggleClass付け外し -->
        <div class="header_inner">
            <div class="header_content">
                <h1 class="header_logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Global Standard
                    </a>
                </h1>
                <div class="header_list_btn_group">
                    <ul class="header_list_items">
                        <li class="header_list_item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                        <li class="header_list_item"><a href="<?php echo esc_url(home_url('/company')); ?>">当社について</a></li>
                        <li class="header_list_item"><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></li>
                        <li class="header_list_item"><a href="<?php echo esc_url(home_url('/case')); ?>">導入事例</a></li>
                        <li class="header_list_item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
                    </ul>
                    <div class="header_cvr_btn_area">
                        <a href="<?php echo esc_url(home_url('/download')); ?>">資料ダウンロード</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="drawer_menu_icon">
        <!-- .is-activeのtoggleClass付け外し -->
        <div class="drawer_menu_icon_bar1"></div>
        <div class="drawer_menu_icon_bar2"></div>
        <div class="drawer_menu_icon_bar3"></div>
    </div>
    <div class="drawer_menu_content ">
        <!-- .is-activeのtoggleClass付け外し -->
        <ul class="header_list_items">
            <li class="header_list_item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
            <li class="header_list_item"><a href="<?php echo esc_url(home_url('/company')); ?>">当社について</a></li>
            <li class="header_list_item"><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></li>
            <li class="header_list_item"><a href="<?php echo esc_url(home_url('/case')); ?>">導入事例</a></li>
            <li class="header_list_item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
        </ul>
        <div class="header_cvr_btn_area">
            <a href="<?php echo esc_url(home_url('/download')); ?>">資料ダウンロード</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
        </div>
    </div>
    <div class="top <?php if (is_page('company')) : ?>l-company<?php endif; ?>
        <?php if (is_page('service')) : ?>l-service<?php endif; ?>
            <?php if (is_post_type_archive('case')) : ?>l-case<?php endif; ?>
                <?php if (is_home('news') || is_category() || is_single()) : ?>l-news<?php endif; ?>
                    <?php if (is_page('download')||is_page('download-thanks')) : ?>l-download<?php endif; ?>
                    <?php if (is_page('contact')||is_page('contact-thanks')) : ?>l-contact<?php endif; ?>
                    ">
        <div class="mask"></div>
        <div class="top_title_g">
            <h2 class="top_title"><?php if (is_page('company')) : ?>ABOUT US<?php endif; ?>
                <?php if (is_page('service')) : ?>SERVICE<?php endif; ?>
                <?php if (is_post_type_archive('case')) : ?>CASE STUDY<?php endif; ?>
                <?php if (is_home('news') || is_category() || is_single()) : ?>NEWS<?php endif; ?>
                <?php if (is_page('download')||is_page('download-thanks')) : ?>DOWNLOAD<?php endif; ?>
                <?php if (is_page('contact')||is_page('contact-thanks')) : ?>CONTACT<?php endif; ?>
            </h2>
            <p class="top_title_lead"><?php if (is_page('company')) : ?> 当社について<?php endif; ?>
                    <?php if (is_page('service')) : ?>サービス<?php endif; ?>
                    <?php if (is_post_type_archive('case')) : ?>導入事例<?php endif; ?>
                    <?php if (is_home('news') || is_category() || is_single()) : ?>お知らせ<?php endif; ?>
                    <?php if (is_page('download')||is_page('download-thanks')) : ?>ダウンロード<?php endif; ?>
                    <?php if (is_page('contact')||is_page('contact-thanks')) : ?>お問い合わせ<?php endif; ?>
            </p>
        </div>
    </div>
    <!-- パンくずリストbreadcrumbs -->
    <div class="breadcrumb lower-inner">
        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
        ?>
    </div>