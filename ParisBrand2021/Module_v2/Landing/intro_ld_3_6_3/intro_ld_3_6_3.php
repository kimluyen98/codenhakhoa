<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
			text-decoration: none;
			}
			
			.intro_ld_3_6_3 {
			font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_6_3.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_6_3.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_6_3 {
			margin-top: 80px;
			}
			.intro_ld_3_6_3_bg {
			position: relative;
			}
			.intro_ld_3_6_3_bg img {
			width: 100%;
			display: block;
			}
			.intro_ld_3_6_3_box {
			position: absolute;
			bottom: 120px;
			right: 0;
			left: 0;
			color: #000;
			}
			.intro_ld_3_6_3_box .row {
			margin: 0;
			}
			.intro_ld_3_6_3_box .row .col-md-7, .intro_ld_3_6_3_box .row .col-md-5 {
			padding-left: 8px;
			padding-right: 8px;
			}
			.intro_ld_3_6_3_box ul {
			padding-left: 200px;
			margin: -150px auto 70px;
			width: 90%;
			}
			.intro_ld_3_6_3_box ul li {
			font-size: 20px;
			}
			.intro_ld_3_6_3_regist {
			color: #fff;
			background-color: #ff3f3a;
			width: 60%;
			text-align: center;
			transition: 0.4s;
			margin-left: 35px;
			padding: 8px 0;
			}
			.intro_ld_3_6_3_regist:hover {
			box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
			border-radius: 40px;
			transition: 0.4s;
			}
			.intro_ld_3_6_3_regist i {
			font-style: normal;
			font-size: 14px;
			text-transform: none;
			}
			.intro_ld_3_6_3_regist a {
			display: block;
			text-transform: uppercase;
			color: #fff;
			font-size: 22px;
			line-height: 1;
			}
			
			@media (max-width: 1440px) {
			.intro_ld_3_6_3_title {
				width: 70%;
				margin: 0 auto;
			}
			.intro_ld_3_6_3_title img {
				width: 100%;
			}
			.intro_ld_3_6_3_box {
				bottom: 50px;
			}
			.intro_ld_3_6_3_box ul {
				padding-left: 250px;
				margin: -130px auto 70px;
			}
			.intro_ld_3_6_3_box ul li {
				font-size: 17px;
			}
			.intro_ld_3_6_3_regist {
				margin: 0 auto;
			}
			}
			@media (max-width: 1280px) {
			.intro_ld_3_6_3_box {
				bottom: 30px;
			}
			}
			@media (max-width: 1024px) {
			.intro_ld_3_6_3_title {
				width: 75%;
			}
			.intro_ld_3_6_3_box {
				bottom: 15px;
			}
			.intro_ld_3_6_3_box ul {
				padding-left: 200px;
				margin: -102px auto 40px;
			}
			.intro_ld_3_6_3_box ul li {
				font-size: 14px;
			}
			.intro_ld_3_6_3_regist {
				width: 240px;
			}
			.intro_ld_3_6_3_regist a {
				font-size: 16px;
			}
			.intro_ld_3_6_3_regist i {
				font-size: 11px;
			}
			}
			@media (max-width: 812px) {
			.intro_ld_3_6_3_title img {
				width: 100%;
			}
			.intro_ld_3_6_3_box {
				bottom: 8px;
			}
			.intro_ld_3_6_3_box ul {
				width: 100%;
				margin: -85px auto 20px;
				padding-left: 180px;
			}
			.intro_ld_3_6_3_box ul li {
				font-size: 12px;
			}
			.intro_ld_3_6_3_regist {
				width: 250px;
				padding: 0;
			}
			.intro_ld_3_6_3_regist a {
				padding: 7px 0px;
				font-size: 15px;
			}
			}
			@media (max-width: 414px) {
			.intro_ld_3_6_3_title {
				width: 90%;
			}
			.intro_ld_3_6_3_title img {
				width: 100%;
			}
			.intro_ld_3_6_3_box {
				bottom: 10px;
			}
			.intro_ld_3_6_3_box ul {
				width: 90%;
				padding-left: 20px;
				margin: -25px auto 8px;
			}
			.intro_ld_3_6_3_box ul li {
				font-size: 16px;
			}
			.intro_ld_3_6_3_regist {
				text-align: center;
				width: 75%;
				padding: 8px 0;
				margin-top: 320px;
			}
			.intro_ld_3_6_3_regist a {
				font-size: 16px;
			}
			.intro_ld_3_6_3_regist i {
				font-size: 13px;
			}
			}
			@media (max-width: 375px) {
			.intro_ld_3_6_3_box ul li {
				font-size: 14px;
			}
			.intro_ld_3_6_3_regist {
				margin-top: 290px;
				width: 85%;
				padding: 4px 0;
			}
			}
			@media (max-width: 320px) {
			.intro_ld_3_6_3_box ul {
				margin: -20px auto 8px;
			}
			.intro_ld_3_6_3_box ul li {
				font-size: 13px;
			}
			.intro_ld_3_6_3_regist {
				margin-top: 250px;
			}
			.intro_ld_3_6_3_regist i {
				font-size: 12px;
			}
			}
			
			/*# sourceMappingURL=intro_ld_3_6_3.css.map */
		
		</style>	
		';	
	}	
	
?>
<!-- Demo HTML -->
<?php 
	$info = $field['info'];
	if(empty($info)):
		echo $css_inline;
		get_template_part("Module/Landing/".$name."/html_id_".$name."");
	else:
		echo $info;
	endif;
?>
<!-- Copy -->

<?php if(isset($_GET['load'])): ?>

<div class="intro_ld_3_6_3 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_6_3.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->