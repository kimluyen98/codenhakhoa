<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/step_ld_4_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.step_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.step_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.step_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.step_ld_4_0_0 {
				background: url('.$path.'/images/step_ld_4_0_0-bg.jpg) center 0 no-repeat;
				padding: 30px 0;
			}
			
			.step_ld_4_0_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3056a0;
			}
			
			.step_ld_4_0_0_title br {
				display: none;
			}
			
			.step_ld_4_0_0_title p {
				font-size: 24px;
				color: #000000;
			}
			
			.step_ld_4_0_0_box {
				margin-top: 20px;
			}
			
			.step_ld_4_0_0__item {
				background-color: #fff;
				transition: 0.4s;
			}
		
			.step_ld_4_0_0__item img{
				width: 100%;
				display: block;
			}
			
			.step_ld_4_0_0__number {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 130px;
			}
			
			.step_ld_4_0_0__number1 {
				background-color: #7ed3ff;
			}
			
			.step_ld_4_0_0__number2 {
				background-color: #71bcfc;
			}
			
			.step_ld_4_0_0__number3 {
				background-color: #5ba1fc;
			}
			
			.step_ld_4_0_0__number4 {
				background-color: #4582d1;
			}
			
			.step_ld_4_0_0__number5 {
				background-color: #3056a0;
			}
			
			.step_ld_4_0_0__number span {
				font-size: 72px;
				color: #fff;
			}
			
			.step_ld_4_0_0__name {
				display: flex;
				justify-content: center;
				height: 140px;
				font-size: 24px;
				text-align: center;
				text-transform: uppercase;
				padding: 20px;
			}
			
			.step_ld_4_0_0__item:hover .step_ld_4_0_0__pic img {
				transform: scale(0.95);
				transition: 0.4s;
			}
			.step_ld_4_0_0__ct {
				font-size: 16px;
				display: flex;
				justify-content: center;
				height: 80px;
				text-align: center;
				padding: 0 20px;
			}
			.step_ld_4_0_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			.step_ld_4_0_0_regist {
				background-color: #ff5159;
				color: #fff;
				padding: 6px 0 0px;
				border-radius: 40px;
				text-align: center;
				width: 300px;
				margin: 20px auto 0;
			}
			
			.step_ld_4_0_0_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
				padding: 8px 10px;
			}
			
			.step_ld_4_0_0_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.step_ld_4_0_0_title {
					font-size: 30px;
				}
				.step_ld_4_0_0_title p {
					font-size: 20px;
				}
				.step_ld_4_0_0__name {
					height: 120px;
					font-size: 20px;
				}
				.step_ld_4_0_0__ct {
					font-size: 16px;
					height: 100px;
					padding: 0 10px;
				}
				.step_ld_4_0_0_regist {
					width: 250px;
				}
				.step_ld_4_0_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.step_ld_4_0_0__ct {
					height: 90px;
				}
			}
			
			@media (max-width: 414px) {
				.step_ld_4_0_0 {
					padding-bottom: 20px;
					background-color: #ebedec;
				}
				.step_ld_4_0_0_title {
					font-size: 24px;
				}
				.step_ld_4_0_0_title br {
					display: block;
				}
				.step_ld_4_0_0_title p {
					font-size: 16px;
				}
				.step_ld_4_0_0_title span {
					display: none;
				}
				.step_ld_4_0_0__number {
					height: 80px;
				}
				.step_ld_4_0_0__name {
					height: 70px;
					font-size: 16px;
					padding: 20px 10px;
				}
				.step_ld_4_0_0__ct {
					font-size: 16px;
					height: 85px;
					padding: 0 10px;
				}
				.step_ld_4_0_0_regist {
					width: 240px;
				}
				.step_ld_4_0_0_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.step_ld_4_0_0_title {
					font-size: 22px;
				}
				.step_ld_4_0_0_title p {
					font-size: 14px;
				}
				.step_ld_4_0_0__name {
					font-size: 15px;
					padding: 20px 5px;
				}
				.step_ld_4_0_0__ct {
					font-size: 14px;
				}
			}
			
			@media (max-width: 320px) {
				.step_ld_4_0_0_title {
					font-size: 19px;
				}
				.step_ld_4_0_0_title p {
					font-size: 13px;
				}
				.step_ld_4_0_0__name {
					font-size: 13px;
				}
			}
			/*# sourceMappingURL=step_ld_4_0_0.css.map */
		</style>	
		';	
		
		$js_inline .='
			<script>
				var step_ld_4_0_0_box=tns({container:".step_ld_4_0_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:5}}});
			</script>
		';
	}	
	
?>
<!-- Demo HTML -->
<?php 
	$info = $field['info'];
	if(empty($info)):
		echo $css_inline;
		get_template_part("Module_v2/Landing/".$name."/html_id_".$name."");
	else:
		echo $info;
	endif;
?>
<!-- Copy -->

<?php if(isset($_GET['load'])): ?>

<div class="step_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_4_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->