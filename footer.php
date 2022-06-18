<div class="footer-top_links">
    <div class="footer_link">
        <div class="footer_link_head">
            <h2 class="footer_link_title">DOWNLOAD</h2>
            <p class="footer_link_sub_title">資料ダウンロード</p>
        </div>
        <a href="<?php echo esc_url(home_url('download'));?>" class="footer_link_btn">View more</a>
    </div>
    <div class="footer_link">
        <div class="footer_link_head">
            <h2 class="footer_link_title">CONTACT</h2>
            <p class="footer_link_sub_title">お問い合わせ</p>
        </div>
        <a href="<?php echo esc_url(home_url('contact'));?>" class="footer_link_btn">View more</a>
    </div>
</div>
</main>

<footer class="footer">
    <div class="footer_content">
        <h3 class="footer_title">Global Standard</h3>
        <p class="footer_info">〒550-1000 大阪市西区土佐堀9-5-5 <br>
TEL 06-123-4567 <br>
FAX 06-123-4568</p>
        <p class="footer_copyright"><small>&copy;2022 Global Standard. All Rights Reserved.</small></p>
    </div>
    <div id="page-top" class="footer-scroll-top"><img src="<?php echo get_template_directory_uri();?>/img/top/icon-top.svg" alt="トップへ戻る"></div>
</footer>
<?php wp_footer(); ?>
</body>

</html>