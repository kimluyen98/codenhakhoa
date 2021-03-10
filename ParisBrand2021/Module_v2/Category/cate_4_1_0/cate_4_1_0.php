<style>
    .cate_4_1_0, .cate_4_1_0_title h2 {
        font-family: Quicksand, Arial, Helvetica;
        font-weight: 500;
    }
    .cate_4_1_0_title h2 {
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 700;
        line-height: 20px;
        color: #000;
        margin-bottom: 20px;
        margin-top: 0;
        padding-bottom: 10px;
        position: relative;
    }
    .cate_4_1_0_title h2::after {
        content: "";
        border-bottom: 1px solid #ccc;
        position: absolute;
        width: 20%;
        left: 0;
        bottom: 0;
        height: 1px;
    }
    .cate_4_1_0_title h2::before {
        content: "";
        border: 2px solid #ff706f;
        position: absolute;
        width: 10%;
        left: 0;
        bottom: -1px;
        z-index: 1;
    }
    .cate_4_1_0_box a {
        font-family: Quicksand, Arial, Helvetica;
        font-weight: 500;
        margin-bottom: 20px;
        display: block;
        cursor: pointer;
    }
    .cate_4_1_0_box a:hover {
        color: #0056A4;
    }
    .cate_4_1_0_box a:hover .sub_title {
        color: #0056A4;
    }
    .cate_4_1_0_box__sub {
        flex: 1;
        padding-top: 8px;
        font-size: 15px;
        color: #000
    }
    .cate_4_1_0_box img {
        width: 100%;
        display: block;
    }
    .cate_4_1_0_box .sub_title {
        text-transform: uppercase;
        font-size: 16px;
        color: #000;
        font-weight: 600;
    }
    .cate_4_1_0_box hr {
        margin: 5px 0;
        border-top: 5px solid #0056A4;
        width: 150px;
    }

    @media (max-width: 414px) {
        .cate_4_1_0_title h2::after {
            width: 55%;
        }
        .cate_4_1_0_title h2::before {
            width: 30%;
        }
        .cate_4_1_0 .row .col-md-4 {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 10px;
            padding-left: 10px;
        }
        .cate_4_1_0_box__sub .sub_title {
            display: block;
            font-size: 12px;
            margin-bottom: 0;
        }
        .cate_4_1_0_box__sub span, .cate_4_1_0_box__sub hr, .cate_4_1_0_box__sub p {
            display: none;
        }
    }
    /*# sourceMappingURL=cate_4_1_0.css.map */

</style>

<div class="cate_4_1_0">
    <div class="cate_1_0_0__content">
            <div class="cate_4_1_0_title">
                <h2>
                    <?php
                        foreach((get_the_category()) as $category) { 
                            echo $category->cat_name . ' '; 
                        } 
                    ?>
                </h2>
            </div>
            <div class="cate_4_1_0_box row">
                <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            global $post; 
                                $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
                                $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
                                $date = get_the_date();
                                $excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );

                                echo '
                                    <div class="col-md-3">
                                        <a href="'.get_permalink($post->ID).'">
                                            <div class="cate_4_1_0_box__pic">
                                                <img src="/rs/?w=300&h=300&src='.$img.'" alt="">
                                            </div>
                                            <div class="cate_4_1_0_box__sub">
                                                <p class="sub_title">'.get_the_title($post->ID).'</p>
                                                <span>Ngày '.$date.'</span>
                                                <hr>
                                                <p>'.$excerpt.'</p>
                                            </div>
                                        </a>
                                    </div>
                                ';
                        endwhile;
                    endif;
                ?>
            </div>
    </div>
</div>

	