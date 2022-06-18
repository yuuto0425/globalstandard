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