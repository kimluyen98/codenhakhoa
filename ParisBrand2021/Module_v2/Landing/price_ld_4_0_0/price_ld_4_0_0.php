<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.price_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.price_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			.price_ld_4_0_0 {
				background: url('.$path.'/images/price_ld_4_0_0-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				padding: 30px 0;
				background-size: 100%;
			}
		
			.price_ld_4_0_0 .mb {
				display: none;
			}
		
			.price_ld_4_0_0_title {
				text-transform: uppercase;
				font-size: 36px;
				color: #fff;
				text-align: center;
			}
		
			.price_ld_4_0_0_box {
				color: #fff;
				padding: 20px 0;
			}
		
			.price_ld_4_0_0_box table {
				border-collapse: collapse;
				width: 100%;
			}
		
			.price_ld_4_0_0_box table td {
				border: 1px solid #0044B6;
				text-align: left;
				padding: 10px;
				border-top: none;
				font-size: 20px;
			}
		
			.price_ld_4_0_0_box table td:nth-child(2),
			.price_ld_4_0_0_box table td:nth-child(3) {
				text-align: center;
			}
		
			.price_ld_4_0_0_box table td:nth-child(2) {
				text-decoration: line-through;
			}
		
			.price_ld_4_0_0_box table tr {
				text-transform: uppercase;
				background-color: #0044B6;
				color: #fff;
				transition: 0.4s;
			}
		
			.price_ld_4_0_0_box table tr:hover {
				background-color: #C8F4FF;
				transition: 0.4s;
				color: #000;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(even) {
				background-color: #fff;
				color: #000;
				transition: 0.4s;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(even):hover {
				background-color: #C8F4FF;
				transition: 0.4s;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(1) {
				background-color: #FF5159;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(1) th {
				border: none;
				padding: 15px 10px;
				font-size: 22px;
				font-weight: 500;
				text-align: left;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(1) th:nth-child(2),
			.price_ld_4_0_0_box table tr:nth-child(1) th:nth-child(3) {
				text-align: center;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(1) th:nth-child(3) {
				position: relative;
			}
		
			.price_ld_4_0_0_box table tr:nth-child(1) th:nth-child(3)::after {
				content: "";
				background-image: url('.$path.'/images/price_ld_4_0_0-icon_sale.png);
				background-position: center;
				background-repeat: no-repeat;
				background-size: 100%;
				position: absolute;
				top: -3px;
				right: -35px;
				width: 70px;
				height: 70px;
			}
		
			.price_ld_4_0_0_regist {
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 280px;
				text-align: center;
				transition: 0.4s;
				border-radius: 40px;
			}
		
			.price_ld_4_0_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.price_ld_4_0_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
		
			.price_ld_4_0_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				padding: 8px 10px;
			}
		
			@media (max-width: 1440px) {
				.price_ld_4_0_0 {
					min-height: auto;
				}
		
				.price_ld_4_0_0_box {
					padding: 10px 0;
				}
		
				.price_ld_4_0_0_box table {
					width: 70%;
					margin: 0 auto;
				}
		
				.price_ld_4_0_0_box table td {
					padding: 6px 10px;
					font-size: 18px;
				}
		
				.price_ld_4_0_0_box table tr:nth-child(1) th {
					padding: 10px 10px;
					font-size: 20px;
				}
		
				.price_ld_4_0_0_box table tr:nth-child(1) th:nth-child(3)::after {
					top: -10px;
					right: -45px;
				}
		
				.price_ld_4_0_0_regist {
					width: 230px;
					margin: 20px auto 0;
				}
		
				.price_ld_4_0_0_regist a {
					font-size: 20px;
				}
		
				.price_ld_4_0_0_regist i {
					font-size: 14px;
				}
			}
		
			@media (max-width: 1280px) {
				.price_ld_4_0_0 {
					background-size: 1360px;
				}
			}
		
			@media (max-width: 1024px) {
				.price_ld_4_0_0 {
					background: #0145CE;
				}
			}
		
			@media (max-width: 812px) {
				.price_ld_4_0_0_title {
					font-size: 26px;
				}
		
				.price_ld_4_0_0_box table {
					width: 90%;
				}
		
				.price_ld_4_0_0_box table td {
					font-size: 15px;
				}
		
				.price_ld_4_0_0_box table th {
					font-size: 16px;
				}
		
				.price_ld_4_0_0_box table tr:nth-child(1) th:nth-child(3)::after {
					right: -40px;
					width: 60px;
					height: 60px;
				}
		
				.price_ld_4_0_0_regist a {
					font-size: 18px;
				}
			}
		
			@media (max-width: 414px) {
				.price_ld_4_0_0 .pc {
					display: none;
				}
		
				.price_ld_4_0_0 .mb {
					display: block;
				}
		
				.price_ld_4_0_0_title {
					display: flex;
					align-items: center;
				}
		
				.price_ld_4_0_0_box ul {
					padding: 0;
					margin: 0;
					list-style: none;
					text-transform: uppercase;
					text-align: center;
					font-size: 15px;
				}
		
				.price_ld_4_0_0_box ul li {
					background-color: #fff;
					color: #000;
					padding: 8px 10px;
					line-height: 1.2;
				}
		
				.price_ld_4_0_0_box ul li p {
					margin: 0;
				}
		
				.price_ld_4_0_0_box ul li i {
					font-style: unset;
					text-decoration: line-through;
				}
		
				.price_ld_4_0_0_box ul li span {
					color: #EC0000;
					font-size: 20px;
					margin: 0 10px;
				}
		
				.price_ld_4_0_0_box ul li:nth-child(2),
				.price_ld_4_0_0_box ul li:nth-child(4),
				.price_ld_4_0_0_box ul li:nth-child(6) {
					background-color: #0145CE;
					color: #fff;
				}
			}
		
			@media (max-width: 375px) {
				.price_ld_4_0_0_box ul {
					font-size: 13px;
				}
			}
		
			@media (max-width: 360px) {
				.price_ld_4_0_0_title {
					font-size: 20px;
				}
		
				.price_ld_4_0_0_box ul {
					font-size: 14px;
				}
			}
		
			/*# sourceMappingURL=price_ld_4_0_0.css.map */
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

<div class="price_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_4_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->