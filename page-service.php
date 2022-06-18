<?php get_header('index'); ?>

<main class="main">
    <section class="l_service_about">
        <div class="lower-inner l_service">
            <h3 class="l_service_about_title">世界で活躍できる<br>グローバルな人材を育てる3つの研修プログラム</h3>
            <div class="l_service_about_card_items">
                <?php require_once('require/lists.php'); ?>
                <?php  foreach ($lists as $list) : ?>
                    <div id="<?php echo $list['id'];?>" class="l_service_about_card_item">
                        <div class="l_service_about_card_item_txt_box">
                            <div class="l_service_about_card_item_box_nam"><?php echo $list['nam'] ?></div>
                            <div class="l_service_about_card_item_head">
                                <h4 class="l_service_about_card_item_title"> <?php
                                $terms = get_terms('case_cate', array('slug' => $list['terms']));
                                $term = $terms[0];
                                echo $term->name; //ターム名を表示?></h4>
                                <p class="l_service_about_card_item_subtitle"><?php echo $list['sub_terms_name'] ?></p>
                            </div>
                            <p class="l_service_about_card_item_textarea">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。 海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。 担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。 また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。</p>
                            <dl class="l_service_about_card_item_dl">
                                <div class="l_service_about_card_item_dl_row">
                                    <dt class="l_service_about_card_item_dt">対象</dt>
                                    <dd class="l_service_about_card_item_dd">ビジネスの中で使える英語コミュニケーション能力が必要な方</dd>
                                </div>
                                <div class="l_service_about_card_item_dl_row">
                                    <dt class="l_service_about_card_item_dt">費用</dt>
                                    <dd class="l_service_about_card_item_dd">時間内容相談</dd>
                                </div>
                            </dl>
                            <div class="l_service_about_card_item_btn_wrapper">
                                <a href="" class="l_service_about_card_item_btn">お申し込みはこちら</a>
                            </div>
                        </div>
                        <figure class="l_service_about_card_item_figure">
                            <img src="<?php echo get_template_directory_uri();
                                        echo $list['img']; ?>" alt="" class="l_service_about_card_item_img">
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="l_service_flow">
        <div class="lower-inner l_service">
            <h3 class="l_service_flow_title">導入の流れ</h3>
            <div class="l_service_flow_box_items">
                <?php require_once('require/service/flow_lists.php');?>
                <?php foreach($flow_lists as $flow_list):?>    
                <div class="l_service_flow_box_item">
                    <div class="l_service_flow_box_item_step_nam">step<span><?php echo $flow_list['nam'];?></span></div>
                    <div class="l_service_flow_box_item_body">
                        <h4 class="l_service_flow_box_item_body_title">お問い合わせ</h4>
                        <p class="l_service_flow_box_item_body_lead">お問い合わせフォームより必要事項を誤入力の上、お申し込みください</p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <section class="l_service_qa">
        <div class="lower-inner l_service">
            <h3 class="l_service_qa_title">よくある質問</h3>
            <div class="l_service_qa_items">
                <div class="l_service_qa_item">
                    <?php if(get_field('question1')):?>
                    <h4 class="l_service_qa_item_question js-accordion"><?php  echo the_field('question1');?></h4>
                    <?php endif;?>
                    <?php if(get_field('answer1')):?>
                    <p class="l_service_qa_item_answer"><?php echo the_field('answer1');?></p>
                    <?php endif;?>
                </div>
                <div class="l_service_qa_item">
                    <?php if(get_field('question2')):?>
                    <h4 class="l_service_qa_item_question js-accordion"><?php  echo the_field('question2');?></h4>
                    <?php endif;?>
                    <?php if(get_field('answer2')):?>
                    <p class="l_service_qa_item_answer"><?php echo the_field('answer2');?></p>
                    <?php endif;?>
                </div>
                <div class="l_service_qa_item">
                    <?php if(get_field('question3')):?>
                    <h4 class="l_service_qa_item_question js-accordion"><?php  echo the_field('question3');?></h4>
                    <?php endif;?>
                    <?php if(get_field('answer3')):?>
                    <p class="l_service_qa_item_answer"><?php echo the_field('answer3');?></p>
                    <?php endif;?>
                </div>
                <div class="l_service_qa_item">
                    <?php if(get_field('question4')):?>
                    <h4 class="l_service_qa_item_question js-accordion"><?php  echo the_field('question4');?></h4>
                    <?php endif;?>
                    <?php if(get_field('answer4')):?>
                    <p class="l_service_qa_item_answer"><?php echo the_field('answer4');?></p>
                    <?php endif;?>
                </div>
                <div class="l_service_qa_item">
                    <?php if(get_field('question5')):?>
                    <h4 class="l_service_qa_item_question js-accordion"><?php  echo the_field('question5');?></h4>
                    <?php endif;?>
                    <?php if(get_field('answer5')):?>
                    <p class="l_service_qa_item_answer"><?php echo the_field('answer5');?></p>
                    <?php endif;?>
                </div>
                <div class="l_service_qa_item">
                    <?php if(get_field('question6')):?>
                    <h4 class="l_service_qa_item_question js-accordion"><?php  echo the_field('question6');?></h4>
                    <?php endif;?>
                    <?php if(get_field('answer6')):?>
                    <p class="l_service_qa_item_answer"><?php echo the_field('answer6');?></p>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>