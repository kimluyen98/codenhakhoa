<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.price_ld_3_0_3 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_3_0_3.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.price_ld_3_0_3.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			.price_ld_3_0_3 {
				background: url('.$path.'/images/price_ld_3_0_3-bg.jpg) center 0 no-repeat;
				min-height: 690px;
				background-size: 100%;
				padding: 30px 0;
				display: flex;
				align-items: center;
			}
		
			.price_ld_3_0_3_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #fff;
			}
		
			.price_ld_3_0_3_title br {
				display: none;
			}
		
			.price_ld_3_0_3_title p {
				font-size: 28px;
				text-transform: none;
			}
		
			.price_ld_3_0_3_box {
				display: flex;
				align-items: center;
				flex-wrap: wrap;
				width: 60%;
				margin: 0 auto;
				justify-content: flex-end;
			}
		
			.price_ld_3_0_3_box__text {
				width: 75%;
				margin-right: -120px;
			}
		
			.price_ld_3_0_3_box__pic {
				width: 35%;
			}
		
			.price_ld_3_0_3_box__pic img {
				width: 100%;
			}
		
			.price_ld_3_0_3_box ul {
				color: #fff;
				padding: 0;
				list-style: none;
				font-size: 18px;
				text-transform: uppercase;
			}
		
			.price_ld_3_0_3_box ul li {
				padding: 6px 10px;
			}
		
			.price_ld_3_0_3_box ul li br {
				display: none;
			}
		
			.price_ld_3_0_3_box ul li:nth-child(1) {
				background-color: #FF3630;
			}
		
			.price_ld_3_0_3_box ul li:nth-child(2),
			.price_ld_3_0_3_box ul li:nth-child(4) {
				background-color: #0044B6;
			}
		
			.price_ld_3_0_3_box ul li:nth-child(3),
			.price_ld_3_0_3_box ul li:nth-child(5) {
				background-color: #fff;
				color: #000;
			}
		
			.price_ld_3_0_3_regist {
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 280px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
				border-radius: 40px;
			}
		
			.price_ld_3_0_3_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.price_ld_3_0_3_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
		
			.price_ld_3_0_3_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
		
			@media (max-width: 1440px) {
				.price_ld_3_0_3 {
					min-height: auto;
				}
		
				.price_ld_3_0_3 .container {
					margin-right: 0;
				}
		
				.price_ld_3_0_3_box__text {
					width: 65%;
				}
		
				.price_ld_3_0_3_box__sale {
					width: 20%;
				}
		
				.price_ld_3_0_3_box ul {
					font-size: 15px;
				}
		
				.price_ld_3_0_3_regist {
					margin-top: 0;
				}
		
				.price_ld_3_0_3_regist a {
					font-size: 20px;
				}
		
				.price_ld_3_0_3_regist i {
					font-size: 14px;
				}
			}
		
			@media (max-width: 1024px) {
				.price_ld_3_0_3 {
					padding: 10px 0;
				}
		
				.price_ld_3_0_3_title {
					font-size: 28px;
				}
		
				.price_ld_3_0_3_title p {
					font-size: 22px;
				}
		
				.price_ld_3_0_3_box {
					width: 70%;
				}
		
				.price_ld_3_0_3_box__text {
					width: 65%;
				}
		
				.price_ld_3_0_3_box__pic {
					width: 30%;
				}
		
				.price_ld_3_0_3_box ul {
					font-size: 14px;
				}
		
				.price_ld_3_0_3_box ul li {
					padding: 4px 10px;
				}
			}
		
			@media (max-width: 812px) {
				.price_ld_3_0_3 {
					background-size: 1045px;
					padding: 30px 0;
				}
		
				.price_ld_3_0_3_title {
					font-size: 22px;
				}
		
				.price_ld_3_0_3_title p {
					font-size: 18px;
				}
		
				.price_ld_3_0_3_box__text {
					width: 75%;
					margin-right: -90px;
				}
		
				.price_ld_3_0_3_box ul {
					font-size: 13px;
				}
		
				.price_ld_3_0_3_regist {
					margin-top: 20px;
				}
		
				.price_ld_3_0_3_regist a {
					font-size: 18px;
				}
			}
		
			@media (max-width: 414px) {
				.price_ld_3_0_3 {
					background: #0353D1;
				}
		
				.price_ld_3_0_3 .container {
					margin-right: auto;
				}
		
				.price_ld_3_0_3_title {
					font-size: 28px;
				}
		
				.price_ld_3_0_3_title p {
					font-size: 22px;
				}
		
				.price_ld_3_0_3_box {
					width: 100%;
				}
		
				.price_ld_3_0_3_box__text {
					width: 65%;
					margin-right: -80px;
				}
		
				.price_ld_3_0_3_box__pic {
					width: 45%;
				}
		
				.price_ld_3_0_3_box ul {
					font-size: 14px;
				}
		
				.price_ld_3_0_3_box ul li {
					padding: 4px 10px 4px 20px;
					line-height: 1.3;
				}
		
				.price_ld_3_0_3_box ul li br {
					display: block;
				}
		
				.price_ld_3_0_3_regist {
					width: 250px;
				}
		
				.price_ld_3_0_3_regist a {
					font-size: 16px;
				}
		
				.price_ld_3_0_3_regist i {
					font-size: 13px;
				}
			}
		
			@media (max-width: 375px) {
				.price_ld_3_0_3_box__text {
					width: 70%;
				}
			}
		
			@media (max-width: 360px) {
				.price_ld_3_0_3_box__text {
					margin-right: -60px;
				}
			}
			@media (max-width: 320px) {
				.price_ld_3_0_3_title {
					font-size: 22px;
				}
		
				.price_ld_3_0_3_title p {
					font-size: 18px;
				}

				.price_ld_3_0_3_box__pic {
					width: 40%;
				}
		
				.price_ld_3_0_3_box__text {
					margin-right: -40px;
				}
			}
		
			/*# sourceMappingURL=price_ld_3_0_3.css.map */
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

<div class="price_ld_3_0_3 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_3_0_3.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->