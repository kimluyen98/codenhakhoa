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

                                $args = array(
                                    'post_status' => 'publish',
                                    'showposts' => 0,
                                    'orderby' => 'desc',
                                    'category__not_in' => array( 150 ),
                                );
                                
                                $getposts = new WP_query($args); 
                                $num = 0; 
                                while ($getposts->have_posts() && $num < 4) : 
                                    $num++;
                                    $getposts->the_post(); 
                                    $link = get_permalink();
                                    $title = get_the_title();
                                    $img = get_the_post_thumbnail_url();
                                    $date = get_the_date('d-m-Y');
                                    $excerpt = wp_trim_words( get_the_excerpt(), 20 );

                                    echo'
                                        <a href="'.$link.'">
                                            <div class="pic">
                                                <img width="100" height="99" class="lazy" data-src="/rs/?w=289&h=288&src='.$img.'" alt="'.get_the_title($post->ID).'">
                                            </div>
                                            <div class="text">
                                                <p>'.$title.'</p>
                                                <div class="info">
                                                    <span><i class="icon-user"></i>'.get_the_author().'</span>
                                                    <span><i class="icon-clock"></i>'.get_the_date('h:m - d/m/Y').'</span>
                                                </div>
                                                <span>
                                                    '.$excerpt.'
                                                </span>
                                            </div>
                                        </a>
                                    ';
                            
                                endwhile; wp_reset_postdata(); 

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