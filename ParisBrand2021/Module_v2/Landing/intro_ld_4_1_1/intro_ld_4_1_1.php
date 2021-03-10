<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_4_1_1';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
			text-decoration: none;
			}
			
			.intro_ld_4_1_1 {
			font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_4_1_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_4_1_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_4_1_1 {
				margin-top: 80px;
				margin-bottom: 50px;
			}
			.intro_ld_4_1_1 .tns-controls{
				display: none;
			}
			.intro_ld_4_1_1_bg {
				position: relative;
			}
			.intro_ld_4_1_1_bg img {
				width: 100%;
				display: block;
			}
			.intro_ld_4_1_1 .tns-nav{
				margin: 0;
				display: none;
			}
			.intro_ld_4_1_1_box {
				position: absolute;
				bottom: -30px;
				right: 0;
				left: 0;
				color: #000;
			}
			.intro_ld_4_1_1_box1 {
				width: 90%;
				margin: 0 auto;
			}
			.intro_ld_4_1_1_sub {
				color: #000;
				font-size: 20px;
				margin: 10px 0;
			}
			.intro_ld_4_1_1_regist {
				color: #fff;
				background-color: #ff3f3a;
				width: 40%;
				text-align: center;
				transition: 0.4s;
				padding: 8px 0;
			}
			.intro_ld_4_1_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			.intro_ld_4_1_1_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			.intro_ld_4_1_1_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 22px;
				line-height: 1;
			}
			.intro_ld_4_1_1_box2 {
				text-align: center;
				width: 80%;
				margin: 30px auto 0;
			}
			.intro_ld_4_1_1_box2.owl-carousel img {
				margin: 0 auto;
				width: auto;
			}
			.intro_ld_4_1_1_box2__item {
				background-color: #fff;
				color: #000;
				padding: 30px 10px;
				font-size: 20px;
				font-weight: 500;
				transition: 0.3s;
				box-shadow: 0 8px 6px -6px #eee;
				border: 1px solid #eee;
			}
			.intro_ld_4_1_1_box2__item:hover {
				background-color: #c0ecff;
				transition: 0.3s;
			}
			.intro_ld_4_1_1_box2__item .pic {
				position: relative;
			}
			.intro_ld_4_1_1_box2__item .pic::after {
				content: "";
				display: block;
				position: absolute;
				border-bottom: 5px solid #135ca7;
				bottom: -10px;
				left: 37%;
				width: 55px;
			}
			.intro_ld_4_1_1_box2__item .text {
				padding-top: 20px;
				height: 70px;
			}
			
			@media (max-width: 1440px) {
			.intro_ld_4_1_1 {
				margin-bottom: 80px;
			}
			
			.intro_ld_4_1_1_title {
				width: 35%;
			}
			.intro_ld_4_1_1_title img {
				width: 100%;
			}
			.intro_ld_4_1_1_box {
				bottom: -60px;
			}
			.intro_ld_4_1_1_sub {
				margin: 5px 0;
				font-size: 18px;
			}
			.intro_ld_4_1_1_regist {
				width: 25%;
				padding: 6px 0;
			}
			.intro_ld_4_1_1_box1 {
				width: 80%;
			}
			.intro_ld_4_1_1_box2 {
				width: 80%;
				margin: 20px auto 0;
			}
			.intro_ld_4_1_1_box2__item {
				padding: 20px 10px;
				font-size: 17px;
				border: 1px solid #eee;
			}
			}
			@media (max-width: 1280px) {
				.intro_ld_4_1_1 {
					margin-bottom: 90px;
				}
				.intro_ld_4_1_1_regist {
					margin-top: 10px;
				}
				.intro_ld_4_1_1_box {
					bottom: -100px;
				}
				.intro_ld_4_1_1_box2 {
					margin-top: 20px;
				}
				.intro_ld_4_1_1_box2__item .pic::after {
					left: 36%;
				}
			}
			@media (max-width: 1024px) {
				.intro_ld_4_1_1_sub {
					font-size: 16px;
				}
				.intro_ld_4_1_1_box2 {
					margin-top: 10px;
				}
				.intro_ld_4_1_1_box2.owl-carousel img {
					width: 100%;
				}
				.intro_ld_4_1_1_box2__item {
					font-size: 14px;
				}
				.intro_ld_4_1_1_box2__item .pic {
					width: 30%;
					margin: 0 auto;
				}
				.intro_ld_4_1_1_box2__item .pic img{
					width: 100%;
					display: block;
				}
				.intro_ld_4_1_1_box2__item .pic::after {
					width: 40px;
					left: 0;
				}
				.intro_ld_4_1_1_box2__item .text {
					height: 60px;
				}
				.intro_ld_4_1_1_regist {
					margin-top: 0;
				}
				.intro_ld_4_1_1_regist a {
					font-size: 16px;
				}
			}
			@media (max-width: 812px) {
				.intro_ld_4_1_1_box1 {
					width: 80%;
				}
				.intro_ld_4_1_1_box {
					bottom: -120px;
				}
				.intro_ld_4_1_1_sub {
					font-size: 13px;
					margin-top: 0;
				}
				.intro_ld_4_1_1_regist {
					margin-top: 5px;
					width: 40%;
					margin-left: 0;
				}
				.intro_ld_4_1_1_regist i {
					font-size: 13px;
				}
				.intro_ld_4_1_1_regist a {
					font-size: 16px;
				}
				.intro_ld_4_1_1_box2 {
					margin-top: 15px;
				}
				.intro_ld_4_1_1_box2__item {
					padding: 10px 5px;
				}
				.intro_ld_4_1_1_box2__item .text {
					font-size: 12px;
					height: 55px;
				}
				.intro_ld_4_1_1_box2__item .text br {
					display: none;
				}
			}
			@media (max-width: 414px) {

				.intro_ld_4_1_1 {
					margin-bottom: 60px;
				}
				.intro_ld_4_1_1_box1 {
					width: 90%;
				}
				.intro_ld_4_1_1_title {
					width: 90%;
					margin: 0 auto;
				}
				.intro_ld_4_1_1_sub {
					text-align: center;
					font-size: 16px;
				}
				.intro_ld_4_1_1_box {
					bottom: -50px;
					left: 10px;
					right: 10px;
				}
				.intro_ld_4_1_1_regist {
					text-align: center;
					width: 70%;
					margin: 310px auto 10px;
					padding: 6px 0;
				}
				.intro_ld_4_1_1_regist a {
					font-size: 20px;
					line-height: 1;
				}
				.intro_ld_4_1_1_regist i {
					font-size: 14px;
				}
				.intro_ld_4_1_1_box2 {
					width: 90%;
					margin-top: 10px;
					position: relative;
				}
				.tns-controls [aria-controls]{
					z-index: 2;
					position: absolute;
					bottom: 25px;
					padding: 0;
					color: #61c0e7;
					margin: 0;
					font-size: 20px;
					background: none;
				}
				.tns-controls [aria-controls]:nth-child(1){
					left: 0;
				}
				.tns-controls [aria-controls]:nth-child(2){
					right: 0;
				}
			
			}
			@media (max-width: 414px) and (max-width: 360px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-prev {
					width: 20px;
					height: 20px;
				}
			}
			@media (max-width: 414px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-prev span {
					font-size: 30px;
					line-height: 1;
					color: #25aae1;
				}
			}
			@media (max-width: 414px) and (max-width: 360px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-prev span {
					line-height: 18px;
				}
			}
			@media (max-width: 414px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-next {
					position: absolute;
					top: calc(60% - 40px);
					right: -20px;
					background: none;
					width: 20px;
					height: 20px;
					border-radius: 100%;
				}
			}
			@media (max-width: 414px) and (max-width: 360px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-next {
					width: 20px;
					height: 20px;
				}
			}
			@media (max-width: 414px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-next span {
					font-size: 30px;
					color: #25aae1;
					line-height: 1;
				}
			}
			@media (max-width: 414px) and (max-width: 360px) {
				.intro_ld_4_1_1_box2.owl-carousel .owl-nav .owl-next span {
					line-height: 18px;
				}
			}
			@media (max-width: 414px) {
				.intro_ld_4_1_1_box2__item .pic::after {
					width: 35px;
					border-bottom: 2px solid #23aae2;
				}
				.intro_ld_4_1_1_box2__item .text {
					padding-top: 15px;
					font-size: 14px;
					height: 50px;
				}
			}
			@media (max-width: 375px) {
				.intro_ld_4_1_1_box {
					bottom: -60px;
				}
				.intro_ld_4_1_1_sub {
					font-size: 13px;
				}
				.intro_ld_4_1_1_regist {
					margin-top: 270px;
				}
				.intro_ld_4_1_1_regist a {
					font-size: 18px;
				}
			}
			@media (max-width: 320px) {
				.intro_ld_4_1_1_regist {
					margin-top: 220px;
				}
			}
			
			/*# sourceMappingURL=intro_ld_4_1_1.css.map */

		</style>
		';	

		$js_inline .='
			<script>
			var intro_ld_4_1_1_box2=tns({container:".intro_ld_4_1_1_box2",items:4,center:!0,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,lazyloadSelector:".tns-lazy",responsive:{0:{items:3,controls:!0},768:{mouseDrag:!1,items:5}}});
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

<div class="intro_ld_4_1_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_4_1_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->