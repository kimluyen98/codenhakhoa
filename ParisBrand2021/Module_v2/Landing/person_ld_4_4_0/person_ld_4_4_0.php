<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_4_4_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.person_ld_4_4_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.person_ld_4_4_0.copy {
				text-align: center;
				padding: 10px 0;
				min-height: 0;
			}
			.person_ld_4_4_0.copy textarea.copy {
				opacity: 0;
				height: 1px;
				width: 1px;
			}
			.person_ld_4_4_0.copy a.copy {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			.person_ld_4_4_0 {
				background: url('.$path.'/images/person_ld_4_4_0-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				background-size: 100%;
				padding: 30px 0;
			}
		
			.person_ld_4_4_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #0055A4;
			}
		
			.person_ld_4_4_0_title br {
				display: none;
			}
		
			.person_ld_4_4_0_title p {
				font-size: 24px;
			}
		
			.person_ld_4_4_0_regist {
				margin: 485px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 280px;
				text-align: center;
				transition: 0.4s;
				padding: 12px 0;
				border-radius: 40px;
			}
		
			.person_ld_4_4_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.person_ld_4_4_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
		
			.person_ld_4_4_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 22px;
				line-height: 1;
			}
		
			@media (max-width: 1440px) {
				.person_ld_4_4_0 {
					padding: 20px 0;
					min-height: auto;
				}
		
				.person_ld_4_4_0_title {
					font-size: 28px;
				}
		
				.person_ld_4_4_0_title p {
					font-size: 18px;
				}
		
				.person_ld_4_4_0_regist {
					margin: 365px auto 10px;
				}
			}
		
			@media (max-width: 1366px) {
				.person_ld_4_4_0_regist {
					margin-top: 335px;
				}
			}
		
			@media (max-width: 1280px) {
				.person_ld_4_4_0_regist {
					margin-top: 315px;
				}
			}
		
			@media (max-width: 1024px) {
				.person_ld_4_4_0_title {
					font-size: 20px;
				}
		
				.person_ld_4_4_0_regist {
					margin-top: 245px;
					width: 210px;
				}
		
				.person_ld_4_4_0_regist a {
					font-size: 18px;
				}
			}
		
			@media (max-width: 812px) {
				.person_ld_4_4_0 {
					background-size: 1015px;
				}
			}
		
			@media (max-width: 414px) {
				.person_ld_4_4_0 {
					background-size: 100%;
					background: url('.$path.'/images/person_ld_4_4_0-bg-m.jpg) center 0 no-repeat;
					min-height: 550px;
				}
		
				.person_ld_4_4_0_title {
					font-size: 22px;
				}
		
				.person_ld_4_4_0_title br {
					display: block;
				}
		
				.person_ld_4_4_0_title p {
					color: #000;
					font-size: 16px;
				}
		
				.person_ld_4_4_0_regist {
					margin-top: 355px;
				}
		
				.person_ld_4_4_0_regist a {
					font-size: 16px;
				}
			}
		
			@media (max-width: 375px) {
				.person_ld_4_4_0 {
					min-height: 500px;
					background-position-y: -20px;
				}
		
				.person_ld_4_4_0_title {
					font-size: 19px;
				}
			}
		
			@media (max-width: 320px) {
				.person_ld_4_4_0_title {
					font-size: 17px;
				}
		
				.person_ld_4_4_0_title p {
					font-size: 14px;
				}
			}
		
			/*# sourceMappingURL=person_ld_4_4_0.css.map */
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
<!-- coppy -->
<?php if(isset($_GET['load'])): ?>
<div class="person_ld_4_4_0 copy">
    <?php get_template_part("Module_v2/Landing/".$name."/html_id_".$name."");	 ?>
</div>

<?php endif;?>
<!-- End Demo HTML -->