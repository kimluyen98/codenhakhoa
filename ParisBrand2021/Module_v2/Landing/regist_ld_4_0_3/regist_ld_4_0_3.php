<?php
	$data = explode("\n",  $field['data_img']);
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			.regist_ld_4_0_3.copy {
				text-align: center;
				padding: 20px 0;
			}
			.regist_ld_4_0_3.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.regist_ld_4_0_3,
			.regist_ld_4_0_3_box .form h3 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.regist_ld_4_0_3 {
				background: url('.$data[0].') center 0 no-repeat;
				background-size: 100%;
				min-height: 690px;
				display: flex;
				align-items: center;
			}
		
			.regist_ld_4_0_3_box {
				width: 40%;
				float: right;
			}
		
			.regist_ld_4_0_3_box .form {
				width: 100%;
				background: #fff;
				border: 1px solid #ccc;
				padding: 8px;
				margin-top: 30px;
			}
		
			.regist_ld_4_0_3_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 7px 12px;
				background-color: #f0f0f0;
			}
		
			.regist_ld_4_0_3_box .form .dkbt {
				text-align: center;
				background: #ff5159;
				margin-bottom: 5px;
				margin-top: 10px;
			}
		
			.regist_ld_4_0_3_box .form .dkbt button {
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				cursor: pointer;
				display: block;
				padding: 10px 0 5px;
				background: none;
				border: none;
				width: 100%;
			}
		
			.regist_ld_4_0_3_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
		
			.regist_ld_4_0_3_box .form h3 {
				font-size: 24px;
				text-align: center;
				margin: 10px;
				color: #de5259;
				line-height: 1.2;
			}
		
			@media (max-width: 1440px) {
				.regist_ld_4_0_3 {
					padding: 50px 0;
					min-height: auto;
				}
			}
		
			@media (max-width: 1280px) {
				.regist_ld_4_0_3_title {
					text-align: center;
				}
		
				.regist_ld_4_0_3_title img {
					width: 80%;
				}
		
				.regist_ld_4_0_3_box .form {
					margin-top: 10px;
				}
			}
		
			@media (max-width: 1024px) {
				.regist_ld_4_0_3 {
					padding: 20px 0;
				}
		
				.regist_ld_4_0_3_box .form h3 {
					font-size: 18px;
				}
		
				.regist_ld_4_0_3_box .form .dkbt button {
					font-size: 20px;
				}
			}
		
			@media (max-width: 812px) {
				.regist_ld_4_0_3 {
					background: #00388A;
					padding: 30px 0;
				}
		
				.regist_ld_4_0_3_title img {
					width: 50%;
				}
		
				.regist_ld_4_0_3_box {
					width: 100%;
				}
		
				.regist_ld_4_0_3_box .form {
					margin-top: 20px;
					background-color: #006DDD;
					border: none;
				}
		
				.regist_ld_4_0_3_box .form h3 {
					font-size: 24px;
					color: #fff;
				}
		
				.regist_ld_4_0_3_box .form input {
					padding: 8px 12px;
				}
			}
		
			@media (max-width: 414px) {
				.regist_ld_4_0_3_title img {
					width: 100%;
				}
		
				.regist_ld_4_0_3_box .form h3 {
					font-size: 18px;
				}
			}
		
			@media (max-width: 360px) {
				.regist_ld_4_0_3_box .form h3 {
					font-size: 15px;
				}
		
				.regist_ld_4_0_3_box .form .dkbt button {
					font-size: 17px;
				}
		
				.regist_ld_4_0_3_box .form .dkbt i {
					font-size: 14px;
				}
			}
		
			/*# sourceMappingURL=regist_ld_4_0_3.css.map */
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

<div class="regist_ld_4_0_3 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_regist_ld_4_0_3.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->