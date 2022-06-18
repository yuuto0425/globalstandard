const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});
function click() {
    jQuery('.drawer_menu_icon').on('click', function () {
        jQuery(this).toggleClass('is-active');
        jQuery('.drawer_menu_content').toggleClass('is-active');
        jQuery('.header').toggleClass('is-drawer-open');
    });
}
click();

function jsAccordion() {
    jQuery('.js-accordion').on('click', function () {
        jQuery(this).next().stop().slideToggle();
        jQuery(this).toggleClass('is-open');
    });
}
jsAccordion();

jQuery(function () {
    // #で始まるa要素をクリックした場合に処理（"#"←ダブルクォーテンションで囲むのを忘れずに。忘れるとjQueryのバージョンによっては動かない。。）
    jQuery('a[href^="#"]').click(function () {
        // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
        var adjust = -70;
        // スクロールの速度（ミリ秒）
        var speed = 400;
        // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
        var href = jQuery(this).attr("href");
        // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
        var position = target.offset().top + adjust;
        // スムーススクロール linear（等速） or swing（変速）
        jQuery('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});
jQuery(function () {
    // TOPに戻るボタン
    var topBtn = jQuery('#page-top');

    //スムーススクロールでページトップへ
    topBtn.click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

//selectの初期値の色を変える記述
function changeColor(hoge){
    if( hoge.value == 0 ){
        hoge.style.color = '';
    }else{
        hoge.style.color = '#333';
    }
}
// jQuery(function() {
//     let value = jQuery('#select').children('option');
//     let value_at = value.attr('value');
//     if(value == null) { 
//         value.style.color = "";
//     }
//     else {
//         value.style.color = "#333";
//     }
// });
// jQuery(function() {})
jQuery('select').on('change',function() {
    let value = jQuery(this).val();
    if(value == '') {
        jQuery(this).removeClass('is-empty');
    }
    else {
        jQuery(this).addClass('is-empty');
    }
});