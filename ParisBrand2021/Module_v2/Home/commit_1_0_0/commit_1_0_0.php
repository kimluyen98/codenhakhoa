<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/commit_1_0_0/css/commit_1_0_0_css.php"));
		
        add_action( 'theme_js', 'commit_1_0_0_js' );
        function commit_1_0_0_js(){
            echo '
				<script>
					var ddl=document.querySelector("#select-box"),prevEl=document.getElementsByClassName("commit_1_0_0__box3__item");function showHide(){for(var e of prevEl){"block"===e.style.display&&(e.style.display="none");var l=ddl.value;if(l){var o=document.querySelector("#"+l);o.style.display="block",e=o}}}
					var commit_1_0_0__box2 = tns({
						container: ".commit_1_0_0__box2",
						items: 1,
						navContainer: "#commit_1_0_0__box1_tabs",
						navAsThumbnails: !0,
						autoplay: !1,
						loop: !1,
						autoplayTimeout: 1e3,
						controls: !1,
						responsive: {
							0: {
								items: 1,
								mouseDrag: !1,
								touch: !0
							},
							768: {
								items: 1
							},
							1024: {
								items: 1
							}
						}
					});
				</script>
            ';
		}
	}
	
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'commit'):
    	foreach($field->commit_sub_fields as $commit_data): 
			if($commit_data->acf_fc_layout == 'commit_1_0_0'): 
			$info = $commit_data->info1;
			$contact_info = $commit_data->contact_info; ?>

<section class="commit_1_0_0">
	<div class="container lazy-bg">
		<div class="row">
			<div class="col-md-8">
				<h2 class="commit_1_0_0__title"><?php echo $commit_data->title ?></h2>
		
				<div class="commit_1_0_0__box1">
					<ul class="tabs commit_1_0_0__box1_tabs" id="commit_1_0_0__box1_tabs">
					<?php
						foreach($info as $key => $value):
							$data = explode("\n",  $value->content1);
							echo'
								<li class="tab">
									<img width="101" height="98" class="lazy" data-src="'.$data[0].'" alt="'.$data[1].'">
								</li>
							';
						endforeach;
					?>
					</ul>
				</div>
			
				<div class="commit_1_0_0__box2" id="commit_1_0_0__box2">
				<?php
					foreach($info as $key => $value):
						$data = explode("\n",  $value->content1);
						echo'
							<div class="commit_1_0_0__box2__item">
								<div class="commit_1_0_0__box2__pic">
									<img width="750" height="291" class="lazy" data-src="'.$data[3].'" alt="'.$data[1].'">
								</div>
								<div class="commit_1_0_0__box2__ct">
									<h3 class="tt">'.$data[1].'</h3>
									<i>'.$data[2].'</i><br>
									<a class="commit_1_0_0__box2__more popup_regist">
										<span><b>Đăng Ký Tư Vấn</b> <i class="icon-angle-double-right"></i></span>
									</a>
								</div>
							</div>
						';
					endforeach;
				?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="commit_1_0_0__box3">
					<div class="commit_1_0_0__box3__tt">
						<div class="commit_1_0_0__box3tt"><?php echo $commit_data->contact_title ?></div>
						<select id="select-box" onchange="showHide()" class="commit_1_0_0__box3__select">
							<?php
								foreach($contact_info as $key => $value):
									$i = $key + 1;
									echo'
										<option value="op'.$i.'">'.$value->contact_city_name.'</option>
									';
								endforeach;
							?>
						</select>
						<div class="commit_1_0_0__box3__list">
						<?php
							foreach($contact_info as $key => $value_0):
								$i = $key + 1;
								if($key == 0):
									$style = "style='display:block'";
								else: 
									$style = "style='display:none'";
								endif;
								echo'
								<div class="commit_1_0_0__box3__item" id="op'.$i.'" '.$style.'>
									<div class="scrollbar" id="style-11">
										<div class="force-overflow">
								';
									foreach($value_0->contact_city_data as $value):
										$data2 = explode("\n",  $value->content);
										$x = $data2[0];
										echo'
											<div class="commit_1_0_0__box3__sub">
												<a href="'.$data2[1].'" class="address">'.$x.'</a>
												<a class="icon__call popup_caller bg-lazy" data-class="lazy"> Hotline</a>
												<a class="icon__time popup_regist btnnktv bg-lazy" data-class="lazy" onclick="myFunction(document.getElementById(\'local-'.$i.$key.'\').textContent)"> Lịch hẹn</a>
											</div>
											<script>
											function myFunction(text) {
												document.getElementById("itext").innerHTML = "Đặt lịch hẹn tại: "+text;
											}
											</script>
										';
									endforeach;
								echo'</div></div></div>
								';
							
							endforeach;
						?>
						</div>
					</div>
					<div class="form" id="form">
						<div>
							<article>
								<div class="fct">
									<input id="iname" name="iname" type="text" required placeholder="*Họ Tên:">
									<input type="hidden" id="gclid_field" name="gclid_field" value="">
									<input type="hidden" id="code_campaign" name="code_campaign" value="558803148">
									<input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Thương Hiệu Sale">
									<input id="imob" name="imob" type="text" required placeholder="*Số Điện Thoại:">
									<input id="iemail" name="iemail" type="email" placeholder="Email:"style="display:none">
									<textarea placeholder="Dịch vụ quan tâm: " rows="1" cols="1" id="itext" name="itext" style="display:none"></textarea>
								</div>
								<div class="dkbt wow pulse" data-wow-iteration="infinite" data-wow-duration="0.5s">
									<input onclick="ants_send_contact(this);" class="target fbt bmk submit_s" type="button" value="hẹn lịch tư vấn">
								</div>
							</article>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>