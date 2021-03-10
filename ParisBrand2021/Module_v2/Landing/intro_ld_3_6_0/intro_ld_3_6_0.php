<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
			text-decoration: none;
			}
			
			.intro_ld_3_6_0 {
			font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_6_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_6_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_6_0 {
			margin-top: 80px;
			}
			.intro_ld_3_6_0_bg {
			position: relative;
			}
			.intro_ld_3_6_0_bg img {
			width: 100%;
			display: block;
			}
			.intro_ld_3_6_0_box {
			position: absolute;
			bottom: 80px;
			right: 0;
			left: 0;
			color: #fff;
			}
			.intro_ld_3_6_0_box .row {
			margin: 0;
			}
			.intro_ld_3_6_0_box .row .col-md-6 {
			padding-left: 8px;
			padding-right: 8px;
			}
			.intro_ld_3_6_0_box ul {
			padding-left: 0px;
			margin: 15px auto;
			display: flex;
			justify-content: space-between;
			width: 80%;
			}
			.intro_ld_3_6_0_box ul li {
			font-size: 22px;
			}
			.intro_ld_3_6_0_regist {
			color: #fff;
			background-color: #ff3f3a;
			width: 280px;
			text-align: center;
			transition: 0.4s;
			margin: 10px auto 0;
			padding: 10px 0;
			}
			.intro_ld_3_6_0_regist:hover {
			box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
			border-radius: 40px;
			transition: 0.4s;
			}
			.intro_ld_3_6_0_regist i {
			font-style: normal;
			font-size: 16px;
			text-transform: none;
			}
			.intro_ld_3_6_0_regist a {
			display: block;
			text-transform: uppercase;
			color: #fff;
			font-size: 24px;
			line-height: 1;
			}
			
			@media (max-width: 1440px) {
			.intro_ld_3_6_0_title {
				width: 70%;
				margin: 0 auto;
			}
			.intro_ld_3_6_0_title img {
				width: 100%;
			}
			.intro_ld_3_6_0_box {
				bottom: 40px;
			}
			.intro_ld_3_6_0_box ul {
				width: 75%;
				margin: 15px auto;
				padding-left: 20px;
			}
			.intro_ld_3_6_0_box ul li {
				font-size: 20px;
			}
			.intro_ld_3_6_0_regist {
				width: 50%;
				margin: 0 auto;
			}
			}
			@media (max-width: 1280px) {
			.intro_ld_3_6_0_box {
				bottom: 20px;
			}
			}
			@media (max-width: 1024px) {
			.intro_ld_3_6_0_box {
				bottom: 15px;
			}
			.intro_ld_3_6_0_box ul li {
				font-size: 15px;
			}
			.intro_ld_3_6_0_regist a {
				font-size: 18px;
			}
			.intro_ld_3_6_0_regist i {
				font-size: 13px;
			}
			}
			@media (max-width: 812px) {
			.intro_ld_3_6_0_title {
				width: 60%;
			}
			.intro_ld_3_6_0_title img {
				width: 100%;
			}
			.intro_ld_3_6_0_box ul {
				width: 95%;
				margin-top: 10px;
			}
			.intro_ld_3_6_0_regist {
				width: 60%;
				padding: 0;
			}
			.intro_ld_3_6_0_regist a {
				padding: 10px 20px;
				font-size: 15px;
			}
			}
			@media (max-width: 414px) {
			.intro_ld_3_6_0_title {
				width: 80%;
			}
			.intro_ld_3_6_0_title img {
				width: 100%;
			}
			.intro_ld_3_6_0_box {
				bottom: 10px;
			}
			.intro_ld_3_6_0_box ul {
				width: 90%;
				margin: 0 auto;
			}
			.intro_ld_3_6_0_regist {
				text-align: center;
				width: 60%;
				margin-top: 240px;
			}
			.intro_ld_3_6_0_regist a {
				font-size: 16px;
			}
			}
			@media (max-width: 375px) {
			.intro_ld_3_6_0_regist {
				margin-top: 208px;
			}
			}
			@media (max-width: 320px) {
			.intro_ld_3_6_0_box ul li {
				font-size: 12px;
			}
			.intro_ld_3_6_0_regist {
				width: 75%;
				margin-top: 170px;
			}
			}
			
			/*# sourceMappingURL=intro_ld_3_6_0.css.map */
			
		</style>	
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

<div class="intro_ld_3_6_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_6_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->