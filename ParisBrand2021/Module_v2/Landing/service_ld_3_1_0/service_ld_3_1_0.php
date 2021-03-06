<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.service_ld_3_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.service_ld_3_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.service_ld_3_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.service_ld_3_1_0 {
				background: url(images/service_ld_3_1_0-bg.jpg) center 0 no-repeat;
				min-height: 600px;
				padding: 0px 0 20px;
			}
			
			.service_ld_3_1_0 .row {
				margin: 0;
				align-items: center;
			}
			
			.service_ld_3_1_0 .row .col-md-5,
			.service_ld_3_1_0 .row .col-md-7 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.service_ld_3_1_0 .mb {
				display: none;
			}
			
			.service_ld_3_1_0_title {
				color: #0055a4;
				text-transform: uppercase;
				font-size: 36px;
				text-align: left;
				padding: 20px 0;
			}
			
			.service_ld_3_1_0_title p {
				color: #000;
				font-size: 24px;
			}
			
			.service_ld_3_1_0_box {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}
			
			.service_ld_3_1_0_item {
				width: 48%;
			}
			
			.service_ld_3_1_0_item:nth-child(1) {
				margin-top: 30px;
			}
			
			.service_ld_3_1_0_item__sub {
				background-color: #fff;
				color: #006ddd;
				text-transform: uppercase;
				text-align: center;
				padding: 20px 0 30px;
				margin-bottom: 25px;
				transition: 0.4s;
				font-size: 24px;
				box-shadow: 0 0 8px 3px #ccc;
			}
			
			.service_ld_3_1_0_item__sub:hover {
				background-color: #006ddd;
				color: #fff;
				transition: 0.4s;
			}
			
			.service_ld_3_1_0_item__sub p {
				padding-top: 25px;
				margin-bottom: 0;
			}
			
			.service_ld_3_1_0_item__pic {
				width: 80%;
				margin: 0 auto;
			}
			
			.service_ld_3_1_0_item__pic img {
				width: 100%;
				display: block;
				border-radius: 25px;
			}
			
			.service_ld_3_1_0_regist {
				color: #fff;
				background-color: #ff5159;
				width: 300px;
				text-align: center;
				transition: 0.4s;
				padding: 6px 0;
				border-radius: 40px;
			}
			
			.service_ld_3_1_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.service_ld_3_1_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.service_ld_3_1_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1024px) {
				.service_ld_3_1_0 {
					min-height: 560px;
				}
				.service_ld_3_1_0_title {
					font-size: 28px;
				}
				.service_ld_3_1_0_title p {
					font-size: 20px;
				}
				.service_ld_3_1_0_item__sub {
					font-size: 20px;
				}
				.service_ld_3_1_0_regist {
					width: 250px;
				}
				.service_ld_3_1_0_regist a {
					font-size: 18px;
					line-height: 1.2;
				}
				.service_ld_3_1_0_regist i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 812px) {
				.service_ld_3_1_0 {
					min-height: 500px;
				}
			}
			
			@media (max-width: 414px) {
				.service_ld_3_1_0 {
					background: #f5f5f5;
					padding: 0 0 10px;
				}
				.service_ld_3_1_0 .pc {
					display: none;
				}
				.service_ld_3_1_0 .mb {
					display: block;
				}
				.service_ld_3_1_0_title {
					text-align: center;
				}
				.service_ld_3_1_0_item__sub {
					font-size: 16px;
					padding: 20px 0 20px;
				}
				.service_ld_3_1_0_item__pic {
					width: 90%;
				}
				.service_ld_3_1_0_regist {
					margin: 10px auto;
				}
				.service_ld_3_1_0_regist a {
					font-size: 16px;
				}
				.service_ld_3_1_0_regist i {
					font-size: 13px;
				}
			}
			
			@media (max-width: 375px) {
				.service_ld_3_1_0_title {
					font-size: 24px;
				}
				.service_ld_3_1_0_title p {
					font-size: 18px;
				}
			}
			
			@media (max-width: 320px) {
				.service_ld_3_1_0_item__sub {
					font-size: 14px;
				}
				.service_ld_3_1_0_item__sub p {
					padding-top: 15px;
				}
			}
			/*# sourceMappingURL=service_ld_3_1_0.css.map */
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

<div class="service_ld_3_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_service_ld_3_1_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->