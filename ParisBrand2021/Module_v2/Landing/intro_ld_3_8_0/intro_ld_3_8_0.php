<?php
	$data = explode("\n",  $field['data_img']);
	if($check == 0){
		$css_inline .= '
		<style>
			.intro_ld_3_8_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_8_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			a {
			text-decoration: none;
			}
			
			.intro_ld_3_8_0 {
			font-family: "Roboto Condensed", sans-serif;
			}
			
			.intro_ld_3_8_0 {
			margin-top: 80px;
			background: url('.$data[0].') center 0 no-repeat;
			background-size: 100%;
			min-height: 695px;
			padding: 20px 0;
			display: flex;
			align-items: center;
			}
			
			.intro_ld_3_8_0 .row {
			margin: 0;
			align-items: center;
			}
			
			.intro_ld_3_8_0_box {
			color: #000;
			font-size: 24px;
			padding-left: 40px;
			}
			
			.intro_ld_3_8_0_box ul {
			padding-left: 20px;
			margin: 10px 0;
			}
			
			.intro_ld_3_8_0_regist {
			text-align: center;
			width: 270px;
			}
			
			.intro_ld_3_8_0_regist i {
			font-style: normal;
			text-transform: none;
			color: #000;
			font-size: 15px;
			}
			
			.intro_ld_3_8_0_regist a {
			background-color: #f12c07;
			display: block;
			text-transform: uppercase;
			color: #fff;
			font-size: 22px;
			line-height: 1;
			padding: 12px 35px;
			transition: 0.4s;
			}
			
			.intro_ld_3_8_0_regist a:hover {
			box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
			border-radius: 40px;
			transition: 0.4s;
			}
			
			@media (max-width: 1440px) {
			.intro_ld_3_8_0 {
				min-height: 525px;
			}
			}
			
			@media (max-width: 1366px) {
			.intro_ld_3_8_0 {
				min-height: 490px;
				margin-top: 60px;
			}
			}
			
			@media (max-width: 1280px) {
			.intro_ld_3_8_0_title img {
				width: 80%;
			}
			.intro_ld_3_8_0_box {
				font-size: 18px;
			}
			.intro_ld_3_8_0 {
				min-height: 450px;
			}
			}
			
			@media (max-width: 1024px) {
			.intro_ld_3_8_0_title img {
				width: 70%;
			}
			.intro_ld_3_8_0_box {
				font-size: 16px;
			}
			.intro_ld_3_8_0_box ul {
				margin-top: 0;
			}
			.intro_ld_3_8_0_regist {
				width: 250px;
			}
			.intro_ld_3_8_0_regist a {
				font-size: 18px;
			}
			}
			
			@media (max-width: 812px) {
			.intro_ld_3_8_0_box {
				font-size: 14px;
			}
			.intro_ld_3_8_0_regist {
				width: 190px;
			}
			.intro_ld_3_8_0_regist i {
				font-size: 13px;
			}
			.intro_ld_3_8_0_regist a {
				font-size: 15px;
				padding: 12px 5px;
			}
			}
			
			@media (max-width: 414px) {
			.intro_ld_3_8_0 {
				background: url('.$data[1].') center 0 no-repeat;
				min-height: 700px;
				align-items: flex-end;
				padding-top: 0;
				margin-top: 40px;
			}
			.intro_ld_3_8_0_box {
				padding-left: 0;
				font-size: 17px;
			}
			.intro_ld_3_8_0_title img {
				width: 100%;
			}
			.intro_ld_3_8_0_regist {
				width: 200px;
				margin: 0 auto;
				border-radius: 40px;
			}
			.intro_ld_3_8_0_regist a {
				font-size: 16px;
			}
			}
			
			@media (max-width: 375px) {
			.intro_ld_3_8_0 {
				min-height: 690px;
			}
			.intro_ld_3_8_0_box {
				font-size: 15px;
			}
			}
			
			@media (max-width: 320px) {
			.intro_ld_3_8_0 {
				min-height: 640px;
			}
			}
			
			/*# sourceMappingURL=intro_ld_3_8_0.css.map */
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

<div class="intro_ld_3_8_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_8_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->