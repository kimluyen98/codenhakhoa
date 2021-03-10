<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}

			.price_ld_5_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_5_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.price_ld_5_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}

			.price_ld_5_0_0 {
				padding: 30px 0;
			}

			.price_ld_5_0_0_title {
				text-transform: uppercase;
				font-size: 36px;
				color: #fff;
			}

			.price_ld_5_0_0_title p {
				font-size: 24px;
			}

			.price_ld_5_0_0_box {
				display: flex;
				flex-wrap: wrap;
			}

			.price_ld_5_0_0_boxL {
				width: 40%;
				position: relative;
			}

			.price_ld_5_0_0_boxL img {
				width: 100%;
			}

			.price_ld_5_0_0_tt {
				position: absolute;
				top: 40px;
				left: 20px;
			}

			.price_ld_5_0_0_boxR {
				width: 60%;
				display: flex;
				flex-wrap: wrap;
			}

			.price_ld_5_0_0_pic {
				position: relative;
			}

			.price_ld_5_0_0_pic img {
				width: 100%;
			}

			.price_ld_5_0_0_ud {
				position: absolute;
				top: 160px;
				left: 34%;
				display: inline-block;
				padding: 10px 5px;
				border-radius: 50%;
				background-color: #de5259;
				color: #fff;
				font-size: 36px;
			}

			.price_ld_5_0_0_ct {
				display: flex;
				flex-wrap: wrap;
				height: 150px;
				justify-content: center;
				text-align: center;
				margin-top: 60px;
				font-size: 24px;
			}

			.price_ld_5_0_0_ct span {
				display: block;
				font-size: 16px;
			}

			.price_ld_5_0_0_item {
				width: 33%;
				position: relative;
				background-color: #f7f7f7;
				transition: 0.8s ease;
			}

			.price_ld_5_0_0_item:hover {
				background-color: #0055a4;
				color: #fff;
			}

			.price_ld_5_0_0_item:hover .price_ld_5_0_0_pic img {
				transform: scale(0.94);
				transition: 0.8s ease;
				-webkit-transition: 0.8s ease;
			}

			.price_ld_5_0_0_regist {
				transition: 0.4s;
				margin: 50px auto 0;
			}

			.price_ld_5_0_0_regist:hover a {
				box-shadow: 0 0 1px 3px rgba(174, 254, 255, 0.8), 0 0 1px 10px rgba(174, 254, 255, 0.1), 0 0 1px 20px rgba(174, 254, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}

			.price_ld_5_0_0_regist a {
				display: inline-block;
				text-transform: uppercase;
				color: #fff;
				padding: 12px 30px;
				font-size: 24px;
				line-height: 1;
				background-color: #ff5159;
				color: #fff;
				border-radius: 40px;
			}

			.price_ld_5_0_0_registMB {
				display: none;
			}

			@media (max-width: 1024px) {
				.price_ld_5_0_0 {
					min-height: 510px;
				}

				.price_ld_5_0_0_title {
					font-size: 30px;
				}

				.price_ld_5_0_0_title p {
					font-size: 18px;
				}

				.price_ld_5_0_0_item__top span {
					font-size: 60px;
				}

				.price_ld_5_0_0_item__text {
					padding: 10px 0;
					height: 120px;
				}

				.price_ld_5_0_0_item__text p {
					font-size: 20px;
				}

				.price_ld_5_0_0_ud {
					top: 130px;
					left: 34%;
					font-size: 28px;
				}

				.price_ld_5_0_0_ct {
					margin-top: 40px;
					height: 130px;
					font-size: 20px;
				}

				.price_ld_5_0_0_regist a {
					font-size: 18px;
					line-height: 1.2;
				}

				.price_ld_5_0_0_regist i {
					font-size: 14px;
				}
			}

			@media (max-width: 812px) {
				.price_ld_5_0_0_title {
					font-size: 22px;
				}

				.price_ld_5_0_0_title p {
					font-size: 15px;
				}

				.price_ld_5_0_0_ud {
					top: 91px;
					left: 32%;
					font-size: 23px;
				}

				.price_ld_5_0_0_ct {
					margin-top: 30px;
					height: 140px;
					font-size: 17px;
				}

				.price_ld_5_0_0_regist {
					margin: 30px auto 0;
				}
			}

			@media (max-width: 414px) {
				.price_ld_5_0_0 {
					background: url('.$path.'/images/price_ld_5_0_0-bg-m.jpg) center 0 no-repeat;
				}

				.price_ld_5_0_0_title {
					font-size: 22px;
				}

				.price_ld_5_0_0_title p {
					font-size: 16px;
				}

				.price_ld_5_0_0_title br {
					display: none;
				}

				.price_ld_5_0_0_box {
					display: block;
				}

				.price_ld_5_0_0_boxL {
					width: 100%;
				}

				.price_ld_5_0_0_boxL img {
					display: none;
				}

				.price_ld_5_0_0_boxR {
					width: 100%;
					margin-top: 20px;
				}

				.price_ld_5_0_0_ct {
					font-size: 16px;
					height: 100px;
				}

				.price_ld_5_0_0_ct span {
					font-size: 14px;
				}

				.price_ld_5_0_0_item {
					width: 50%;
				}

				.price_ld_5_0_0_ud {
					top: 131px;
					left: 35%;
					font-size: 25px;
				}

				.price_ld_5_0_0_tt {
					position: relative;
					left: auto;
					top: auto;
					text-align: center;
				}

				.price_ld_5_0_0_regist {
					display: none;
				}

				.price_ld_5_0_0_registMB {
					display: block;
					transition: 0.4s;
					margin-top: 20px;
					text-align: center;
				}

				.price_ld_5_0_0_registMB:hover a {
					box-shadow: 0 0 1px 3px rgba(174, 254, 255, 0.8), 0 0 1px 10px rgba(174, 254, 255, 0.1), 0 0 1px 20px rgba(174, 254, 255, 0.1);
					border-radius: 40px;
					transition: 0.4s;
				}

				.price_ld_5_0_0_registMB a {
					display: inline-block;
					text-transform: uppercase;
					color: #fff;
					padding: 12px 30px;
					font-size: 18px;
					line-height: 1;
					background-color: #ff5159;
					color: #fff;
					border-radius: 40px;
				}

				.price_ld_5_0_0_regist {
					display: none;
				}
			}

			@media (max-width: 375px) {
				.price_ld_5_0_0_ud {
					top: 110px;
				}
			}

			@media (max-width: 320px) {
				.price_ld_5_0_0_ud {
					top: 90px;
				}

				.price_ld_5_0_0_ct {
					font-size: 14px;
				}

				.price_ld_5_0_0_ct span {
					font-size: 13px;
				}
			}

			/*# sourceMappingURL=price_ld_5_0_0.css.map */
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
<?php if(isset($_GET['load'])): ?>

<div class="price_ld_5_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_5_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->