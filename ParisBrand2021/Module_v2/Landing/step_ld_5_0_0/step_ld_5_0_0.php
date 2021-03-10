<?php
$path = get_template_directory_uri();
$path = $path.'/Module_v2/Landing/step_ld_5_0_0';
  if($check == 0){
    $css_inline .= '
	<style>
		a {
		text-decoration: none;
		}

		.step_ld_5_0_0 {
		font-family: "Roboto Condensed", sans-serif;
		}
		.step_ld_5_0_0.copy {
			text-align: center;
			padding: 20px 0;
			min-height: 0
		}
		.step_ld_5_0_0.copy a {
			background: #F36B44;
			color: #fff;
			text-transform: uppercase;
			padding: 10px 30px;
			border-radius: 20px;
			border: 1px solid #fff;
			outline: none;
			cursor: pointer;
		}

		.step_ld_5_0_0 {
		background-color: #013387;
		padding: 30px 0;
		}
		.step_ld_5_0_0_title {
		text-transform: uppercase;
		text-align: center;
		font-size: 36px;
		color: #fff;
		}
		.step_ld_5_0_0_title p {
		font-size: 24px;
		color: #dd4558;
		}
		.step_ld_5_0_0_box {
		margin-top: 20px;
		display: flex;
		flex-wrap: wrap;
		}
		.step_ld_5_0_0__item {
		position: relative;
		transition: 0.4s;
		}
		.step_ld_5_0_0__item:hover .step_ld_5_0_0__pic img {
		transform: scale(0.95);
		transition: 0.4s;
		}
		.step_ld_5_0_0__pic {
		padding: 0 10px;
		}
		.step_ld_5_0_0__pic img {
		width: 100%;
		display: block;
		}
		.step_ld_5_0_0__number {
		margin: 20px 0;
		position: relative;
		text-align: center;
		}
		.step_ld_5_0_0__number span {
		font-size: 32px;
		color: #fff;
		background-color: #c84854;
		border-radius: 50%;
		padding: 5px 16px;
		z-index: 4;
		}
		.step_ld_5_0_0__line {
		margin-top: -23px;
		height: 2px;
		border: 1px solid #6978ad;
		width: 100%;
		}
		.step_ld_5_0_0__name {
		color: #88c8da;
		font-size: 24px;
		text-align: center;
		text-transform: uppercase;
		padding: 20px;
		}
		.step_ld_5_0_0__des {
		color: #fff;
		text-align: center;
		font-size: 18px;
		}
		.step_ld_5_0_0__ct {
		font-size: 16px;
		justify-content: center;
		height: 80px;
		text-align: center;
		padding: 0 20px;
		}
		.step_ld_5_0_0_regist {
		border-radius: 40px;
		margin: 30px auto 0;
		color: #fff;
		background-color: #ff5159;
		width: 320px;
		text-align: center;
		transition: 0.4s;
		padding: 7px 0;
		}
		.step_ld_5_0_0_regist:hover {
		box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
		border-radius: 40px;
		transition: 0.4s;
		}
		.step_ld_5_0_0_regist a {
		display: block;
		text-transform: uppercase;
		color: #fff;
		font-size: 24px;
		line-height: 1;
		padding: 8px 10px;
		}

		@media (max-width: 1024px) {
		.step_ld_5_0_0_title {
			font-size: 30px;
		}
		.step_ld_5_0_0_title p {
			font-size: 20px;
		}
		.step_ld_5_0_0__name {
			font-size: 18px;
		}
		.step_ld_5_0_0__ct {
			font-size: 16px;
			height: 100px;
			padding: 0 10px;
		}
		.step_ld_5_0_0_regist {
			width: 250px;
		}
		.step_ld_5_0_0_regist a {
			font-size: 20px;
		}
		}
		@media (max-width: 812px) {
		.step_ld_5_0_0_title {
			font-size: 28px;
		}
		.step_ld_5_0_0__ct {
			height: 90px;
		}
		.step_ld_5_0_0__name {
			font-size: 16px;
		}
		}
		@media (max-width: 414px) {
		.step_ld_5_0_0 {
			padding-bottom: 20px;
		}
		.step_ld_5_0_0_title {
			font-size: 24px;
		}
		.step_ld_5_0_0_title br {
			display: block;
		}
		.step_ld_5_0_0_title p {
			font-size: 16px;
		}
		.step_ld_5_0_0_title span {
			display: none;
		}
		.step_ld_5_0_0__pic {
			padding: 0;
		}
		.step_ld_5_0_0__name {
			font-size: 24px;
			text-align: center;
		}
		.step_ld_5_0_0__item {
			width: 100%;
		}
		.step_ld_5_0_0__ct {
			font-size: 16px;
			height: 85px;
			padding: 0 10px;
		}
		.step_ld_5_0_0__des {
			font-size: 16px;
		}
		.step_ld_5_0_0_box {
			display: none;
		}
		.step_ld_5_0_0_box1 {
			display: block !important;
			margin-top: 20px;
		}
		.step_ld_5_0_0 .owl-theme .owl-dots .owl-dot.active span, .step_ld_5_0_0 .owl-theme .owl-dots .owl-dot:hover span {
			background: #006cff;
		}
		.step_ld_5_0_0_regist {
			width: 240px;
			margin: 10px auto 0;
		}
		.step_ld_5_0_0_regist a {
			font-size: 17px;
		}
		}

		/*# sourceMappingURL=step_ld_5_0_0.css.map */

	</style>
			';
	$js_inline .='
		<script>
		var step_ld_5_0_0_box1=tns({container:".step_ld_5_0_0_box1",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,loop:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:1,nav:!0},768:{items:3}}});
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
<?php if(isset($_GET['load'])): ?>

<div class="step_ld_5_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_5_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->




 