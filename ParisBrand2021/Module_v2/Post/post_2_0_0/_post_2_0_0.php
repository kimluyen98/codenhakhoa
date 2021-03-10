<?php
    $path = get_template_directory_uri();
    $path = $path . '/Module_v2/Post/post_2_0_0';

    include(locate_template("Module_v2/Post/post_2_0_0/css/post_2_0_0_css.php"));
?>

<style>
    .layout_1_0_0{
        margin-top: 0px;
    }
    @media (max-width: 1024px) {
        .layout_1_0_0{
            margin-top: 40px;
        }
    }
    @media (max-width: 414px) {
        .layout_1_0_0{
            margin-top: 10px;
        }
    }
    .post_2_0_0__right .more .nd-more a{
        font-weight: bold;
        color:blue;
    }
    .sidebar_2_1_0_item-7 .siderbar_news-item .tt .more{
        color:blue!important;
    }
    .kk-star-ratings .kksr-muted{
        opacity: 1 !important;
    }
</style>
<div class="layout_1_0_0">
    <?php get_template_part('Module_v2/Category/breadcrumb_1_1_0/breadcrumb_1_1_0'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <section class="post_2_0_0">
                    <div class="post_2_0_0__right">
                        <!-- <div class=" post_2_0_0__right_quang-cao">
                            <a href="">
                                <img src="<?php echo '' . $path . '' ?>/images/post_quang-cao.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="quang-cao">						
					<?php 
						$cate = get_the_category();
						$id= $cate[0]->cat_ID;
						if(get_field('bndb','category_'.$id)=='') {
							echo '
								<div class="advtop">
									<div class="textwidget"> 
								';
								
								if( have_rows('adv','option') ) : 
									while ( have_rows('adv','option') ) : the_row();
										if( get_row_layout() == 'adv_post' ):
											echo '
												<a href="'.get_sub_field('adv_link').'">
													<picture>
														<source media="(max-width:600px)" srcset="'.get_sub_field('adv_mb').'" />
														<img src="'.get_sub_field('adv_pc').'" />
													</picture>
												</a>
											';
										endif;
									endwhile;
								endif;
										
							echo '
									</div>
								</div>
								';
						}else {
							echo'
								<div class="advtop">
									<div class="textwidget"> 
										<div>
											<a href="'.get_field('lbn','category_'.$id).'">
												<img src="'.get_field('bndb','category_'.$id).'" class="aligncenter" />
											</a>
										</div>
									</div>
								</div>
							';
						}
					?>
					
				</div>
                        <h1 class=" post_2_0_0__right_title-post"><?php echo the_title(); ?></h1>
                        <div class=" post_2_0_0__right_chi-tiet">
                            <div class="post_info">
                                <div class="post_author pc">
                                    Tác giả: <a href="#" rel="nofollow"><?php echo get_the_author() ?></a> * Tham vấn y khoa: <a href="#" rel="nofollow">Chuyên gia Nha Khoa Paris</a>
                                </div>
                                <div class="post_info_box">
                                    <p>Ngày đăng: <span><i class="icon-calendar"></i> <?php the_modified_date('d-m-Y') ?></span></p>
                                    <p><i class="icon-chat-1"></i><img src="<?php echo $path ?>/images/chat.png?ver=1" alt=""><span> <?php echo wp_count_comments($post->ID)->approved; ?> comment</span></p>
                                </div>
                            </div>
                            <div class="scroll_check">
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>
                            </div>
                            <div class="more">
                                <h2 class="chi-tiet-title">tìm hiểu thêm</h2>
                                <div class="nd-more">
                                    <?php $post_other = get_field('post_other'); ?>
                                    <?php if ($post_other) : ?>
                                        <?php echo $post_other; ?>
                                    <?php else : ?>

                                        <?php
                                        /*
                                        * Code hiển thị bài viết liên quan trong cùng 1 category
                                        * Code by levantoan.com
                                        */
                                        $categories = get_the_category(get_the_ID());
                                        if ($categories) {
                                            $category_ids = array();
                                            foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                            $args = array(
                                                'category__in' => $category_ids,
                                                'post__not_in' => array(get_the_ID()),
                                                'posts_per_page' => 2, // So bai viet dc hien thi
                                            );
                                            $my_query = new wp_query($args);
                                            if ($my_query->have_posts()) :
                                                while ($my_query->have_posts()) : $my_query->the_post();
                                        ?>
                                                    <a href="<?php the_permalink() ?>">» <?php the_title(); ?></a></br>
                                        <?php
                                                endwhile;
                                            endif;
                                            wp_reset_query();
                                        }
                                        ?>

                                    <?php endif; ?>
                                </div>
                                <?php comments_template(); ?>
                                <?php //include "myComment.php"; ?>
                                <?php include(locate_template('Module_v2/Home/news_12_1_0/news_12_1_0.php')); ?>
                            </div>
                        </div>
                    </div>
                </section>            
            </div>
            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('Module_v2/Popup/tool_1_0_0/tool_1_0_0'); ?>
</div>




