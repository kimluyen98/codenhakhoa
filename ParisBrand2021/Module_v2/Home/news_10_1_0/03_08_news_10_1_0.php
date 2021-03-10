<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/news_10_1_0/css/news_10_1_0_css.php"));
	}
	
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'news'):
    	foreach($field->news_sub_fields as $news_data): 
			if($news_data->acf_fc_layout == 'news_10_1_0'): 
            $data = $news_data->content1;?>
            
            <section class="news_10_1_0">
                <div class="container">
                    <div class="row news_10_1_0_box">
                        <div class="col-md-6 box2">
                            <div class="box_title">Bài viết mới nhất</div>
                            <?php
                                    // $value = $field['title2'];
                                    // 	$data = explode("\n",  $value);
                                    // $catz = get_the_category($post->ID);
                                    // $cat=$catz[0]->term_id;
                                $i=0;
                                $my_query = new WP_Query('cat=tin-tuc&offset=0&showposts=4&orderby=desc'); 
                                while ($my_query->have_posts()) : 
                                    $my_query->the_post(); 
                                    global $post;
                                    $do_not_duplicate[$post->ID] = $post->ID;
                                    $excerpt = get_the_excerpt($post->ID);
                                    $excerpt = substr($excerpt, 0, 150);
                                    $des = substr($excerpt, 0, strrpos($excerpt, ' '));
                                    $kim='';
                                    $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');             							
                                    $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);							
                                        echo'
                                            <a href="'.get_permalink($post->ID).'">
                                                <div class="pic">
                                                    <img width="100" height="99" class="lazy" data-src="/rs/?w=289&h=288&src='.$img.'" alt="'.get_the_title($post->ID).'">
                                                </div>
                                                <div class="text">
                                                    <p>'.get_the_title($post->ID).'</p>
                                                    <div class="info">
                                                        <span><i class="icon-user"></i>'.get_the_author().'</span>
                                                        <span><i class="icon-clock"></i>'.get_the_date('h:m - d/m/Y').'</span>
                                                    </div>
                                                    <span>
                                                        '.$des.'
                                                    </span>
                                                </div>
                                            </a>
                                        ';
                                endwhile;
                                wp_reset_query();

                            ?>
                        </div>
                        <div class="col-md-6 box2">
                            <div class="box_title">Bài viết nổi bật</div>
                                <?php
                                    foreach($data as $key => $post):
                                    setup_postdata($post);
                                    $link = get_permalink();
                                    $title = get_the_title();
                                    $img = get_the_post_thumbnail_url();
                                    $excerpt = wp_trim_words( get_the_excerpt(), 20 );
                                    $admin = get_the_author();
                                    $time = get_the_date('h:m - d/m/Y');
                                        echo'
                                        <a href="'. $link.'">
                                            <div class="pic">
                                                <img width="100" height="99" class="lazy" data-src="/rs/?w=133&h=132&src='.$img.'" alt="'. $title.'">
                                            </div>
                                            <div class="text">
                                                <p>'. $title.'</p>
                                                <div class="info">
                                                    <span><i class="icon-user"></i>'.$admin.'</span>
                                                    <span><i class="icon-clock"></i>'.$time.'</span>
                                                </div>
                                                <span>
                                                    '.$excerpt.'
                                                </span>
                                            </div>
                                        </a>
                                        ';
                                    endforeach;
                                    wp_reset_postdata(); 
                                ?>
                        </div>
                    </div>

                </div>
            </section>

<?php endif; endforeach;
endif; endforeach; ?>  