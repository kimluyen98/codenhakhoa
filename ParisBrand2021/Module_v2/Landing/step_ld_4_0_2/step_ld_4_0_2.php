<?php
$path = get_template_directory_uri();
$path = $path.'/Module_v2/Landing/step_ld_4_0_2';
  if($check == 0){
    $css_inline .= "
		<style>
			a {
				text-decoration: none;
			}
			
			.step_ld_4_0_2 {
				font-family: 'Roboto Condensed', sans-serif;
			}
			.step_ld_4_0_2.copy {
				text-align: center;
				padding: 20px 0;
			}
			.step_ld_4_0_2.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.step_ld_4_0_2 {
				background: url($path/images/step_ld_4_0_2-bg.jpg) center 0 no-repeat;
				padding: 30px 0 10px;
			}
			.step_ld_4_0_2_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3056a0;
				margin-bottom: 10px;
			}
			.step_ld_4_0_2_title br {
				display: none;
			}
			.step_ld_4_0_2_box {
				display: flex;
				flex-wrap: wrap;
				position: relative;
			}
			.step_ld_4_0_2_block::before {
				content: '';
				position: absolute;
				width: 963px;
				height: 5px;
				top: 70px;
				left: 106px;
				background-color: #fff;
			}
			.step_ld_4_0_2__item {
				padding-top: 70px;
				position: relative;
			}
			.step_ld_4_0_2__item:hover .step_ld_4_0_2__pic {
				transition: 0.5s;
			}
			.step_ld_4_0_2__item:hover .step_ld_4_0_2__pic img {
				transform: scale(0.95);
				transition: 0.5s;
				width: 100%;
				display: block;
			}
			.step_ld_4_0_2__bgText1 {
				background-color: #75ddfa;
			}
			.step_ld_4_0_2__bgText2 {
				background-color: #2ebcfc;
			}
			.step_ld_4_0_2__bgText3 {
				background-color: #00a1ff;
			}
			.step_ld_4_0_2__bgText4 {
				background-color: #0083d4;
			}
			.step_ld_4_0_2__bgText5 {
				background-color: #025ac7;
			}
			.step_ld_4_0_2__bgText6 {
				background-color: #003aa4;
			}
			.step_ld_4_0_2__number {
				width: 80px;
				position: absolute;
				top: 35px;
				left: 30%;
				height: 80px;
				border-radius: 100%;
				border: 5px solid #fff;
				z-index: 2;
			}
			.step_ld_4_0_2__number span {
				font-size: 30px;
				height: 80px;
				color: #fff;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.step_ld_4_0_2__number span::before {
				content: '';
				position: absolute;
				width: 5px;
				height: 30px;
				top: -30px;
				background-color: #fff;
			}
			.step_ld_4_0_2__pic img {
				border-radius: 0 0 110px 110px;
				width: 100%;
				display: block;
			}
			.step_ld_4_0_2__ct {
				border: 5px solid #fff;
				font-size: 22px;
				display: flex;
				justify-content: center;
				height: 190px;
				text-align: center;
				padding: 50px 10px 0;
				color: #fff;
				position: relative;
			}
			.step_ld_4_0_2__ct p::after {
				content: '';
				width: 120px;
				height: 2px;
				background-color: #fff;
				position: absolute;
				bottom: 20px;
				left: 30px;
			}
			.step_ld_4_0_2_regist {
				background-color: #ff5159;
				color: #fff;
				padding: 6px 0 0px;
				border-radius: 40px;
				text-align: center;
				width: 300px;
				margin: 20px auto 0;
			}
			.step_ld_4_0_2_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			.step_ld_4_0_2_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
				padding: 8px 10px;
			}
			.step_ld_4_0_2_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.step_ld_4_0_2_title {
				font-size: 30px;
				}
				.step_ld_4_0_2_title p {
				font-size: 20px;
				}
				.step_ld_4_0_2_block{
					width: 85%;
					margin: 0 auto;
				}
				.step_ld_4_0_2_block::before {
				content: '';
				width: 612px;
				left: 198px;
				top: 60px;
				}
				.step_ld_4_0_2__number {
				left: 75px;
				}
				.step_ld_4_0_2__ct {
				height: 140px;
				font-size: 18px;
				}
				.step_ld_4_0_2__ct p::after {
				left: 50px;
				}
				.step_ld_4_0_2_regist {
				width: 250px;
				}
				.step_ld_4_0_2_regist a {
				font-size: 20px;
				}
			}
			@media (max-width: 812px) {
				.step_ld_4_0_2 {
				background: #f2efef;
				}
				.step_ld_4_0_2_box {
				margin-top: 10px;
				}
				.step_ld_4_0_2_block::before {
					width: 419px;
					left: 182px;
					top: 70px;
				}
				.step_ld_4_0_2__ct {
				height: 140px;
				}
			}
			@media (max-width: 414px) {
				.step_ld_4_0_2 {
				padding-bottom: 20px;
				background-color: #ebedec;
				}
				.step_ld_4_0_2_title {
				font-size: 24px;
				}
				.step_ld_4_0_2_title br {
				display: block;
				}
				.step_ld_4_0_2_title p {
				font-size: 16px;
				}
				.step_ld_4_0_2_title span {
				display: none;
				}
				.step_ld_4_0_2_block{
					width: 100%;
				}
				.step_ld_4_0_2_block::before {
					display: none;
				}
				.step_ld_4_0_2__number {
				left: 55px;
				}
				.step_ld_4_0_2__number span::before {
				display: none;
				}
				.step_ld_4_0_2__ct {
				font-size: 16px;
				height: 160px;
				padding: 60px 10px  0;
				}
				.step_ld_4_0_2__ct p::after {
				left: 30px;
				}
				.step_ld_4_0_2_regist {
				margin: 10px auto 0;
				width: 240px;
				}
				.step_ld_4_0_2_regist a {
				font-size: 17px;
				}
				.step_ld_4_0_2__item {
				padding-top: 40px;
				}
				.step_ld_4_0_2__number {
				top: 0;
				}
			}
			@media (max-width: 375px) {
				.step_ld_4_0_2__number {
				left: 45px;
				}
				.step_ld_4_0_2__ct {
				padding: 50px 10px  0;
				}
				.step_ld_4_0_2__ct p::after {
				left: 20px;
				}
			}
			@media (max-width: 320px) {
				.step_ld_4_0_2_title {
				font-size: 20px;
				}
				.step_ld_4_0_2__number {
				left: 35px;
				width: 70px;
				height: 70px;
				}
				.step_ld_4_0_2__number span {
				height: 70px;
				}
				.step_ld_4_0_2__ct {
				padding: 40px 10px 0;
				font-size: 15px;
				height: 140px;
				}
				.step_ld_4_0_2__ct p::after {
				left: 20px;
				width: 100px;
				}
			}
			
			/*# sourceMappingURL=step_ld_4_0_2.css.map */
			
				
		</style>
			";
	$js_inline .='
			<script>
			var step_ld_4_0_2_box=tns({container:".step_ld_4_0_2_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,loop:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:4},1280:{items:6}}});
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

<div class="step_ld_4_0_2 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_4_0_2.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->