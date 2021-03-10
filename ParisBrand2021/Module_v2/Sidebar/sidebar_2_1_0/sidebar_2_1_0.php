<?php 
    if($check == 0){
		include(locate_template("Module_v2/Sidebar/sidebar_2_1_0/css/sidebar_2_1_0_css.php"));

		add_action( 'theme_js', 'sidebar_2_1_0_js' );
        function sidebar_2_1_0_js(){
            echo '
				<script>
					let sidebar_2_1_0 = document.getElementById("sidebar_2_1_0_item__slide");
					if(sidebar_2_1_0 != null){
						var sidebar_2_1_0_item__slide=tns({container:"#sidebar_2_1_0_item__slide",items:1,swipeAngle:!1,speed:400,autoplay:!1,autoplayButtonOutput:!1,mouseDrag:!0,gutter:10,nav:!0,controls:!1});
					}
				</script>
            ';
        }
    }
?>      


<section class="sidebar_2_1_0">
	<?php
		foreach( $field as $key2 => $value): 
			foreach( $value as $key3 => $list):
					
				if( $list['acf_fc_layout'] == 'sidebar_title' ):
					$list = explode("\n",  $list["title"]);
						echo'
						<a href="#" class="sidebar_2_1_0_tt '.$list[1].'" >
							<span class="sidebar_2_1_0_icon icon-'. $key3.'"></span>
							<p>'.$list[0].'</p>
						</a>
					';
					
					
					// End Tieu De
					
				elseif( $list['acf_fc_layout'] == 'sidebar_sv' ):
					echo '
						<div class="sidebar_2_1_0_item-4 border">
							'.$list['content'].'
						</div>
						
					';
					// End List Dich Vu

				elseif( $list['acf_fc_layout'] == 'sidebar_new' ):
					echo '<div id="stick">
						<span class="sidebar_2_1_0_tt" id="sidebar_2_1_0_tt">
							<span class="icon-post icon-7 sidebar_2_1_0_icon"></span>
							<p>tin được xem nhiều</p>
						</span>
						<div class="border border_note">
					';
					foreach($list['content'] as $key4 => $post):
						setup_postdata($post);
						$link = get_permalink();
						// $title = get_the_title();
						$title = wp_trim_words( get_the_title(), 10 );
						$img = get_the_post_thumbnail_url();
						echo'
						<div class="sidebar_2_1_0_item-7">
							<div class="siderbar_news">
								<div class="siderbar_news-item">
									<div class="img">
										<img width="90" height="82" src="'.$img.' ?>" alt="">
									</div>
									<div class="tt">
										<a href="'.$link.'" class="tt-1">'.$title.'</a><br>
										<a href="'.$link.'" class="more">Xem thêm >></a>
									</div>
								</div>
							</div>
						</div>
						';
					endforeach;
					echo "</div> </div>";
					wp_reset_postdata(); 
				
				// End Tin tức

				elseif( $list['acf_fc_layout'] == 'sidebar_img' ):
					echo '
						<div class="sidebar_2_1_0_item-2 border">
						<div class="sidebar_2_1_0_item__slide" id="sidebar_2_1_0_item__slide">
					';
					$rows = $list["sidebar_sub"];
					foreach($rows as $key => $row):
						$data1 = explode("\n",  $row["sidebar_info"]);
						$data2 = $row['sidebar_pic'];
						echo'
							<div class="item modal-btn" data-modal="modal-pic'.$key.'">
								<img width="263" height="263" src="/rs/?w=263&h=263&src='.$data2.'" alt="">
								<span>'.$data1[0].'</span>
								<p>'.$data1[1].'</p>
							</div>
						';
					endforeach;
						echo'
						</div>
						</div>
						';
					// foreach($rows as $key => $row):
					// 	$data2 = $row['sidebar_pic'];
					// 	echo'
					// 	<div class="modal" id="modal-pic'.$key.'" style="display: none;">
					// 		<div class="modal-closePic">×</div>
					// 		<div class="modal-bg"></div>
					// 		<div class="modal-box modal-box-img animate-zoom">
					// 			<div class="modal-pic">
					// 				<img class="sidebar_img" src="/rs/?w=650&h=450&src='.$data2.'" alt="">
					// 			</div>
					// 		</div>
					// 	</div>
					// 	';
					// endforeach;
					

					// End thư viện ảnh
				elseif( $list['acf_fc_layout'] == 'sidebar_banner' ):
						$list = explode("\n",  $list["sb_banner"]);
						echo '
							<div class="sidebar_2_1_0_item-6 border">
								<div class="uu-dai">
									<a href="'.$list[1].'">
										<img width="262" height="165" src="/rs/?w=262&h=165&src='.$list[0].'" alt="">
										<span>'.$list[2].'</span>
									</a>
								</div>
							</div>
						';
							
				endif;

				// End List ưu đãi

			endforeach;
		endforeach;
	?>
</section>



