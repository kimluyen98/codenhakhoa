<?php
$path = get_template_directory_uri();
$path = $path.'/Module_v2/Landing/step_ld_4_0_1';
  if($check == 0){
    	$css_inline .= "
		<style>
			a {
			text-decoration: none;
			}

			.step_ld_4_0_1 {
			font-family: 'Roboto Condensed', sans-serif;
			}
			.step_ld_4_0_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.step_ld_4_0_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.step_ld_4_0_1 {
			background: url('.$path.'/images/step_ld_4_0_1-bg.jpg) center 0 no-repeat;
			padding: 30px 0;
			}
			.step_ld_4_0_1_title {
			text-transform: uppercase;
			text-align: center;
			font-size: 36px;
			color: #3056a0;
			}
			.step_ld_4_0_1_title p {
			font-size: 24px;
			color: #000000;
			}
			.step_ld_4_0_1_box {
			margin-top: 20px;
			display: flex;
			flex-wrap: wrap;
			}
			.step_ld_4_0_1_box1 {
			display: none !important;
			}
			.step_ld_4_0_1__item {
			position: relative;
			width: 20%;
			padding: 0 3px;
			transition: 0.4s;
			}
			.step_ld_4_0_1__item:hover .step_ld_4_0_1__pic img {
			transform: scale(0.95);
			transition: 0.4s;
			}
			.step_ld_4_0_1__pic img {
			width: 100%;
			display: block;
			}
			.step_ld_4_0_1__number {
			position: relative;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 130px;
			border-radius: 15px 15px 0 0;
			}
			.step_ld_4_0_1__number1 {
			background-color: #7ed3ff;
			}
			.step_ld_4_0_1__number2 {
			background-color: #71bcfc;
			}
			.step_ld_4_0_1__number3 {
			background-color: #5ba1fc;
			}
			.step_ld_4_0_1__number4 {
			background-color: #4582d1;
			}
			.step_ld_4_0_1__number5 {
			background-color: #3056a0;
			}
			.step_ld_4_0_1__number1::after, .step_ld_4_0_1__number2::after, .step_ld_4_0_1__number3::after, .step_ld_4_0_1__number4::after {
			content: '>';
			color: #3056a0;
			background-color: #fff;
			width: 40px;
			height: 40px;
			position: absolute;
			right: -23px;
			top: 50px;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 5;
			font-size: 30px;
			}
			.step_ld_4_0_1__number span {
			font-size: 72px;
			color: #fff;
			}
			.step_ld_4_0_1__name {
			color: #000000;
			background-color: #fff;
			display: flex;
			justify-content: center;
			height: 160px;
			font-size: 24px;
			text-align: center;
			text-transform: uppercase;
			padding: 20px;
			}
			.step_ld_4_0_1__ct {
			font-size: 16px;
			display: flex;
			justify-content: center;
			height: 80px;
			text-align: center;
			padding: 0 20px;
			}
			.step_ld_4_0_1_regist {
			border-radius: 40px;
			margin: 30px auto 0;
			color: #fff;
			background-color: #ff5159;
			width: 320px;
			text-align: center;
			transition: 0.4s;
			padding: 7px 0;
			}
			.step_ld_4_0_1_regist:hover {
			box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
			border-radius: 40px;
			transition: 0.4s;
			}
			.step_ld_4_0_1_regist a {
			display: block;
			text-transform: uppercase;
			color: #fff;
			font-size: 24px;
			line-height: 1;
			padding: 8px 10px;
			}

			@media (max-width: 1024px) {
			.step_ld_4_0_1_title {
					font-size: 30px;
			}
			.step_ld_4_0_1_title p {
					font-size: 20px;
			}
			.step_ld_4_0_1__name {
					height: 120px;
					font-size: 18px;
			}
			.step_ld_4_0_1__ct {
					font-size: 16px;
					height: 100px;
					padding: 0 10px;
			}
			.step_ld_4_0_1_regist {
					width: 250px;
			}
			.step_ld_4_0_1_regist a {
					font-size: 20px;
			}
			}
			@media (max-width: 812px) {
			.step_ld_4_0_1_title {
					font-size: 28px;
			}
			.step_ld_4_0_1__ct {
					height: 90px;
			}
			.step_ld_4_0_1__number {
					height: 80px;
			}
			.step_ld_4_0_1__number span {
					font-size: 52px;
			}
			.step_ld_4_0_1__number1::after, .step_ld_4_0_1__number2::after, .step_ld_4_0_1__number3::after, .step_ld_4_0_1__number4::after {
					top: 20px;
			}
			.step_ld_4_0_1__name {
					font-size: 16px;
			}
			}
			@media (max-width: 414px) {
			.step_ld_4_0_1 {
					padding-bottom: 20px;
					background-color: #ebedec;
			}
			.step_ld_4_0_1_title {
					font-size: 22px;
			}
			.step_ld_4_0_1_title br {
					display: block;
			}
			.step_ld_4_0_1_title p {
					font-size: 15px;
			}
			.step_ld_4_0_1_title span {
					display: none;
			}
			.step_ld_4_0_1__number {
					height: 80px;
					color: #000000;
			}
			.step_ld_4_0_1__number1::after, .step_ld_4_0_1__number2::after, .step_ld_4_0_1__number3::after, .step_ld_4_0_1__number4::after {
					display: none;
			}
			.step_ld_4_0_1__name {
					height: 120px;
					font-size: 18px;
					padding: 20px 10px;
					text-align: center;
			}
			.step_ld_4_0_1__item {
					width: 100%;
			}
			.step_ld_4_0_1__ct {
					font-size: 16px;
					height: 85px;
					padding: 0 10px;
			}
			.step_ld_4_0_1_box {
					display: none;
			}
			.step_ld_4_0_1_box1 {
					display: block !important;
					margin-top: 20px;
			}
			.step_ld_4_0_1_regist {
					width: 240px;
					margin: 10px auto 0;
			}
			.step_ld_4_0_1_regist a {
					font-size: 17px;
			}
			}
			@media (max-width: 375px) {
			.step_ld_4_0_1__name {
					font-size: 15px;
					padding: 20px 5px;
					height: 90px;
			}
			.step_ld_4_0_1__ct {
					font-size: 14px;
			}
			}
			@media (max-width: 320px) {
			.step_ld_4_0_1_title {
					font-size: 20px;
			}
			.step_ld_4_0_1__name {
					font-size: 13px;
					height: 70px;
			}
			}

			/*# sourceMappingURL=step_ld_4_0_1.css.map */

		</style>
			";
	
		$js_inline .='
			<script>
			var step_ld_4_0_1_box1=tns({container:".step_ld_4_0_1_box1",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:5}}});
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

<div class="step_ld_4_0_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_4_0_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->