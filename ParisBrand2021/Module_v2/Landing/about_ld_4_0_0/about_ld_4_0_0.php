<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.about_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.about_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.about_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.about_ld_4_0_0 {
				padding: 30px 0;
			}
			
			.about_ld_4_0_0_title {
				text-transform: uppercase;
				font-size: 36px;
				color: #0055a4;
			}
			
			.about_ld_4_0_0_title br {
				display: none;
			}
			
			.about_ld_4_0_0_regist {
				margin-top: 30px;
			}
			
			.about_ld_4_0_0_regist a {
				background-color: #ff5159;
				color: #fff;
				font-size: 24px;
				text-transform: uppercase;
				padding: 12px 25px;
				border-radius: 30px;
			}
			
			.about_ld_4_0_0_box {
				padding-top: 15px;
			}
			
			.about_ld_4_0_0_box .row {
				margin: 0;
			}
			
			.about_ld_4_0_0_box .row .col-md-6 {
				padding-left: 10px;
				padding-right: 10px;
			}
			
			.about_ld_4_0_0_box .row .col-md-6 img {
				width: 100%;
				display: block;
			}
			
			.about_ld_4_0_0_box_right {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}
			
			.about_ld_4_0_0_item {
				width: 48%;
				margin-bottom: 10px;
			}
			
			.about_ld_4_0_0_item__sub {
				padding-top: 10px;
				font-size: 16px;
				color: #000;
			}
			
			.about_ld_4_0_0_item__sub p {
				text-transform: uppercase;
				margin-bottom: 5px;
			}
			
			@media (max-width: 1024px) {
				.about_ld_4_0_0_title {
					font-size: 28px;
				}
				.about_ld_4_0_0_item__sub {
					font-size: 13px;
				}
				.about_ld_4_0_0_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 414px) {
				.about_ld_4_0_0_title {
					font-size: 24px;
					text-align: center;
				}
				.about_ld_4_0_0_title br {
					display: block;
				}
				.about_ld_4_0_0_image {
					display: none;
				}
				.about_ld_4_0_0_box .row {
					display: flex;
					flex-direction: column;
				}
				.about_ld_4_0_0_box .row .col-md-6 {
					padding-left: 5px;
					padding-right: 5px;
				}
				.about_ld_4_0_0_box .row .col-md-6:nth-child(1) {
					order: 2;
				}
				.about_ld_4_0_0_box_right {
					display: block;
				}
				.about_ld_4_0_0_item {
					width: 100%;
					display: flex;
					align-items: center;
					flex-wrap: wrap;
				}
				.about_ld_4_0_0_item__pic {
					width: 30%;
				}
				.about_ld_4_0_0_item__sub {
					width: 70%;
					flex: 1;
					padding-left: 10px;
					font-size: 15px;
				}
				.about_ld_4_0_0_regist {
					text-align: center;
				}
			}
			
			@media (max-width: 375px) {
				.about_ld_4_0_0_item__sub {
					font-size: 13px;
				}
				.about_ld_4_0_0_regist a {
					font-size: 14px;
				}
			}
			
			@media (max-width: 320px) {
				.about_ld_4_0_0_title {
					font-size: 20px;
				}
				.about_ld_4_0_0_item {
					margin-bottom: 5px;
				}
				.about_ld_4_0_0_item__sub {
					font-size: 11px;
				}
			}
			/*# sourceMappingURL=about_ld_4_0_0.css.map */
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

<div class="about_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_about_ld_4_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->