<style>
    a {
        text-decoration: none;
    }
    
    .news_12_1_0 {
        
    }
    .news_12_1_0_title {
        text-align: center;
        color: #0055a2;
        font-weight: 600;
        text-transform: uppercase;
        padding: 80px 0 0px;
        margin: 10px 0 20px;
        font-size: 24px;
        position: relative;
    }
    .news_12_1_0_title::before{
        content:"";
        background-image: url(/wp-content/themes/CheckTheme2020/Module_v2/Home/news_12_1_0/images/icon-title.png);
        background-position: center 0;
        background-size: 100%;
        min-height: 63px;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        z-index: 1;
        width: 100%;
        height: 100%;
        left: 0;
    }
    .news_12_1_0_box__pic {
        margin-bottom: 5px;
    }
    .news_12_1_0_box img {
        display: block;
        width: 100%;
    }
    .news_12_1_0_box a {
        margin-bottom: 15px;
        display: block;
        font-weight: 600;
    }
    .news_12_1_0_box a:hover{
        color: #0055a2;
    }
    @media (max-width: 1024px){
        .news_12_1_0_title{
            padding: 50px 0 0px;
        }
        .news_12_1_0 .row .col-md-3{
            font-size: 14px;
        }
    }
    @media (max-width: 768px){
        .news_12_1_0 .row .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 12px;
        }
    }
    
    @media (max-width: 414px) {
        .news_12_1_0_title {
        font-size: 20px;
        padding: 30px 0 0px;
        }
        .news_12_1_0 .row {
        margin: 0 -10px;
        }
        .news_12_1_0 .row .col-md-3 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 10px;
        padding-right: 10px;
        }
        .news_12_1_0_box__sub {
        font-size: 14px;
        }
    }
    
    /*# sourceMappingURL=news_12_1_0.css.map */
  
</style>
<div class="news_12_1_0">
        <div class="news_12_1_0_title">
           Bài viết liên quan
        </div>

        <div class="row news_12_1_0_box">
                <?php
                    $categories = get_the_category($post->ID);
                    if ($categories){
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                       
                        $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>8, // Số bài viết bạn muốn hiển thị.
                            'caller_get_posts'=>1
                        );
                        $my_query = new wp_query($args);
                    
                        if( $my_query->have_posts() ){
                            while ($my_query->have_posts()){
                            $my_query->the_post();
                            global $post;
                            $do_not_duplicate[$post->ID] = $post->ID;
                            $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');             							
                            $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);	
    
                           
                    ?>
                    
                        <div class="col-md-3">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news_12_1_0_box__pic">
                                    <img src="/rs/?w=184&h=184&src=<?php echo ''.$img.''?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="news_12_1_0_box__sub">
                                    <?php the_title(); ?>
                                </div>
                            </a>
                        </div>
                        
                        <?php
                            }
                        }
                    }
                ?>

        </div>

</div>


