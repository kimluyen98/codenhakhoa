<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Category/cate_5_0_0';

	if($check == 0){
		$css_inline .= '
        <style>
            .cate_5_0_0 {
                font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            }
            
            .cate_5_0_0 img {
                width: 100%;
                display: block;
            }
            .cate_5_0_0_tabs {
                display: flex;
                justify-content: space-between;
                list-style: none;
                flex-wrap: wrap;
                padding-left: 0;
            }
            .cate_5_0_0_tabs .tab {
                width: 13%;
                text-align: center;
                text-transform: uppercase;
                background-color: #0155bc;
                color: #ffff;
                font-size: 14px;
                padding: 8px 20px;
                cursor: pointer;
            }
            .cate_5_0_0_tabs .tab:focus {
                outline: unset;
            }
            .cate_5_0_0_tabs .tab.tns-nav-active {
                background-color: #21a1ed;
            }
            .cate_5_0_0_sub {
                padding-top: 40px;
                text-align: justify;
            }
            .cate_5_0_0_sub img {
                margin: 10px 0;
            }
            .cate_5_0_0_sub span {
                font-style: italic;
                padding-left: 15px;
                color: #0055BC;
            }
            .cate_5_0_0_sub .sub_item {
                margin-bottom: 30px;
                display: block;
            }
            .cate_5_0_0_sub .sub_item .tt {
                color: #000;
                font-weight: 500;
            }
            
            @media (max-width: 812px) {
                .cate_5_0_0_tabs .tab {
                padding: 8px 10px;
                font-size: 12px;
                }
            }
            @media (max-width: 414px) {
                .cate_5_0_0_tabs {
                justify-content: center;
                }
                .cate_5_0_0_tabs .tab {
                    padding: 8px 2px;
                    width: 22%;
                    margin: 5px;
                    font-size: 13px;
                }
                .cate_5_0_0 .col-md-3 {
                flex: 0 0 50%;
                max-width: 50%;
                }
                .cate_5_0_0_sub .sub_item {
                font-size: 14px;
                }
            }
            @media (max-width: 375px) {
                .cate_5_0_0_tabs .tab {
                padding: 8px 0;
                font-size: 12px;
                }
            }
            @media (max-width: 360px) {
                .cate_5_0_0_tabs .tab {
                    width: 20%;
                    padding: 8px 0;
                    font-size: 11px;
                }
            }
            
            /*# sourceMappingURL=cate_5_0_0.css.map */
          
        </style>
        ';
        $js_inline .='
        <script>
        var cate_5_0_0_box=tns({container:".cate_5_0_0_box",items:1,navContainer:"#cate_5_0_0_tabs",navAsThumbnails:!0,autoplay:!1,autoplayTimeout:1e3,loop:!1,controls:!1});
        </script>
        ';
	}
	
?>
		
        


<section class="cate_5_0_0">
    <div class="container">
        <ul class="cate_5_0_0_tabs" id="cate_5_0_0_tabs">
            <?php
                foreach($field['info'] as $key => $value):
                    $data = explode("\n",  $value['info_video_name']);
                    echo'
                        <li class="tab">
                            '.$data[0].'
                        </li>
                    ';
                endforeach;
            ?>
        </ul>
        <div class="cate_5_0_0_box">
            <?php
                foreach($field['info'] as $key => $value):
                    echo'
                        <div class="cate_5_0_0_item">';
                    $data = explode("\n",  $value['info_video_name']);
                    echo'
                        <div class="slider">
                            <img src=" '.$data[1].'" alt="">
                        </div>
                    ';
                    echo'
                    <div class="cate_5_0_0_sub">
                    <div class="row">
                    ';
                    foreach($value['content1'] as $key2 => $post):
                        setup_postdata($post);
                        $link = get_permalink();
                        $title = get_the_title();
                        $img = get_the_post_thumbnail_url();
                        $excerpt = wp_trim_words( get_the_excerpt(), 20 );
                        echo'
                            <div class="col-md-3">
                                <a href="'. $link.'" class="sub_item">
                                    <div class="tt">'. $title.'</div>
                                    <img src="'.$img.'" alt="'. $title.'">
                                    <p> '.$excerpt.'...<span>Xem thêm &gt;</span></p>
                                </a>
                            </div>
                        ';
                    endforeach;
                    echo'
                    </div>
                    </div>
                    ';
                    echo'
                        </div>
                    ';
                    echo'';
                endforeach;

                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>







