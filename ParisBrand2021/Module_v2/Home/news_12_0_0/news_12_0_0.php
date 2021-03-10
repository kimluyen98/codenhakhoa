<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Home/news_12_0_0';
	if($check == 0){
		echo "
			<style>
				a {
					text-decoration: none;
					color: #000;
				}
				.news_12_0_0 .news_12_0_0__box_tabs li {
					   font-family: -apple-system, system-ui, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
				}
				
				.news_12_0_0 {
					padding: 20px 0;
					   font-family: -apple-system, system-ui, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
				}
				
				.news_12_0_0 .news_12_0_0__box_tabs{
					list-style: none;
					padding: 0;
					display: flex !important;
				}
				.news_12_0_0 .news_12_0_0__box_tabs li {
					font-size: 38px;
					color: #0056A2;
					text-transform: uppercase;
				}
				.news_12_0_0 .news_12_0_0__box_tabs li:focus {
					outline: unset;
				}
				.news_12_0_0 .news_12_0_0__box_tabs li.tns-nav-active {
					background-color: rgba(225, 225, 225, 0);
					color: #0056A2;
				}
				
				.news_12_0_0__line {
					width: 60%;
					margin: 10px 0;
					position: relative;
					border-top: 1px solid #ccc;
				}
				
				.news_12_0_0__line::before {
					width: 60%;
					border-top: 3px solid #E43D3B;
					display: block;
					content: '';
					margin-top: -2px;
				}
				
				.news_12_0_0__item {
					padding-top: 20px;
				}
				
				.news_12_0_0__content .sub {
					display: flex;
					margin-bottom: 15px;
				}
				
				.news_12_0_0__content .sub-1 {
					width: 40px;
					height: 40px;
					background-color: #CBE5FF;
					text-align: center;
					line-height: 40px;
					border-radius: 10px;
					color: #6593C9;
				}
				
				.news_12_0_0__content .sub-2 {
					width: 80%;
					padding-left: 20px;
				}
				
				.news_12_0_0__content .sub_pic img {
					border-radius: 5px;
				}
				
				.news_12_0_0__content .sub_text {
					width: 80%;
					padding-left: 20px;
				}
				
				.news_12_0_0__content .sub .dec {
					display: block;
				}
				
				.news_12_0_0__content .sub .reply {
					font-weight: bold;
					text-transform: uppercase;
					text-decoration: underline;
				}
				
				.news_12_0_0__content .sub .more {
					color: #E43D3B;
					font-size: 18px;
					margin-left: 10px;
				}
				
				.news_12_0_0__content ul li {
					padding-bottom: 10px;
				}
				
				.news_12_0_0 .news_12_0_0__box_tabs {
					display: flex;
				}
				
				.news_12_0_0 .scrollbar {
					float: left;
					height: 300px;
					width: 353px;
					overflow-y: scroll;
					margin-bottom: 25px;
				}
				
				@media (max-width: 1280px) {
					.news_12_0_0 .scrollbar {
						width: 333px;
					}
				}
				
				.news_12_0_0 .force-overflow {
					min-height: 450px;
				}
				
				.news_12_0_0 #style-1::-webkit-scrollbar-track {
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
					border-radius: 10px;
					background-color: #F5F5F5;
				}
				
				.news_12_0_0 #style-1::-webkit-scrollbar {
					width: 8px;
					background-color: #F5F5F5;
				}
				
				.news_12_0_0 #style-1::-webkit-scrollbar-thumb {
					border-radius: 10px;
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
					background-color: #154589;
				}
				
				@media (max-width: 1024px) {
					.news_12_0_0__content .sub .reply {
						font-size: 12px;
					}
					.news_12_0_0__content .sub i {
						font-size: 15px;
					}
					.news_12_0_0 .news_12_0_0__box_tabs li.tns-nav-active {
						background-color: #0055A4;
						color: #fff;
					}
					.news_12_0_0 .scrollbar {
						width: 306px;
					}
				}
				
				@media (max-width: 812px) {
					.news_12_0_0 .news_12_0_0__box_tabs a {
						font-size: 16px;
					}
					.news_12_0_0 .scrollbar {
						width: 716px;
					}
					.news_12_0_0 .row .col-md-4 {
					    flex: 0 0 33.333333%;
    					max-width: 33.333333%;
					}
				}
				
				@media (max-width: 414px) {
					.news_12_0_0__line {
						display: none;
					}
					.news_12_0_0 .row {
						margin: 0;
					}
					.news_12_0_0 .row .col-md-4 {
						width: 33%;
						margin: 0 auto;
					}
					.news_12_0_0 .news_12_0_0__box_tabs .tab {
						background-color: #E8E8E8;
						border-right: 2px solid #fff;
						display: flex;
						justify-content: center;
						align-items: center;
						padding: 5px 20px;
						text-align: center;
						font-size: 23px;
					}
					.news_12_0_0 .scrollbar {
						width: 100%;
					}
				}
				
				@media (max-width: 375px) {
					.news_12_0_0 .news_12_0_0__box_tabs .tab {
						font-size: 20px;
					}
					.news_12_0_0__content .sub .dec {
						font-size: 13px;
					}
					.news_12_0_0__content ul li {
						font-size: 13px;
					}
				}
				
				@media (max-width: 320px) {
					.news_12_0_0 .news_12_0_0__box_tabs .tab {
						padding: 5px 15px;
						font-size: 18px;
					}
				}
				/*# sourceMappingURL=news_12_0_0.css.map */
			</style>
		";
		add_action('wp_footer', 'news_12_0_0');
		function news_12_0_0(){ 
			echo '
			<script>
				var news_12_0_0_slider=tns({container:".news_12_0_0_slider",items:3,navContainer:"#news_12_0_0__box_tabs",navAsThumbnails:!0,autoplay:!1,autoplayTimeout:1e3,controls:!1,responsive:{0:{items:1,mouseDrag:!1,touch:!0},768:{items:1},1024:{items:3}}});
			</script>	
            ';           
        };
	}
	
?>
<section class="news_12_0_0">
	<div class="container">
		<div class="news_12_0_0__box">
			<ul class="news_12_0_0__box_tabs row" id="news_12_0_0__box_tabs">
				<li class="tab da col-md-4">
					<?php
						$value = $field['title1'];
						$data = explode("\n",  $value);
						echo $data[0]; 
					?>
					<div class="news_12_0_0__line"></div>
				</li>
				<li class="tab da col-md-4">
					<?php
						echo  $field['title2']; 
					?>
					<div class="news_12_0_0__line"></div>
				</li>
				<li class="tab da col-md-4">
					<?php echo $field['title3']; ?>
					<div class="news_12_0_0__line"></div>
				</li>
			</ul>
			<div class="news_12_0_0_slider" id="news_12_0_0_slider">
				<div class="news_12_0_0__item">
					<div class="news_12_0_0__content">
						<?php
							$value = $field['title1'];
							$data = explode("\n",  $value);
							$catz = get_the_category($post->ID);
							$cat=$catz[0]->term_id;

							$i=0;
							$my_query = new WP_Query('cat='.$data[1].'&offset=0&showposts=3'); while ($my_query->have_posts()) : $my_query->the_post(); global $post;$do_not_duplicate[$post->ID] = $post->ID;
							$kim='';
							$i++;
							$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');             							
							$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);							

							echo '
								<div class="sub">
									<div class="sub-1">
										'.$i.'
									</div>
									<div class="sub-2">
										<a href="'.get_permalink($post->ID).'" class="dec">'.get_the_title($post->ID).'</a>
										<a href="'.get_permalink($post->ID).'" class="reply">trả lời </a>
										<a href="'.get_permalink($post->ID).'" class="more"><i class="icon-angle-circled-right"></i></a>
									</div>
								</div>
							';
							endwhile;
							wp_reset_query(); 
						?>

						
					</div>
				</div>
				<div class="news_12_0_0__item">
					<div class="news_12_0_0__content">
						<?php
							foreach($field['content1'] as $key => $post):
								setup_postdata($post);
								$link = get_permalink();
								$title = get_the_title();
								$img = get_the_post_thumbnail_url();
								echo '
									<div class="sub">
										<div class="sub_pic">
											<img class="lazy" data-src="/rs/?w=70&h=70&src='.$img.'" alt="'.$title.'">
										</div>
										<div class="sub_text">
											<a href="'.$link.'" class="dec">'.$title.'</a>
											<a href="'.$link.'" class="reply">xem thêm </a>
											<a href="'.$link.'" class="more"><i class="icon-angle-circled-right"></i></a>
										</div>
									</div>									
								';
							endforeach;
							wp_reset_postdata(); 
						?>

					</div>
				</div>
				<div class="news_12_0_0__item">
					<div class="news_12_0_0__content scrollbar" id="style-1">
						<div class="force-overflow">
							<?php
								echo'
									'.$field['sub'].'
								';
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



