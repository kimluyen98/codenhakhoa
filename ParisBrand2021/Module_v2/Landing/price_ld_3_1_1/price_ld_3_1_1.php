<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.price_ld_3_1_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_3_1_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.price_ld_3_1_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.price_ld_3_1_1 {
				background: url('.$path.'/images/price_ld_3_1_1-bg.jpg) center 0 no-repeat;
				padding: 20px 0;
			}
			
			.price_ld_3_1_1_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #0055a4;
			}
			
			.price_ld_3_1_1_title br {
				display: none;
			}
			
			.price_ld_3_1_1_title p {
				font-size: 24px;
				color: #3056a0;
			}
			
			.price_ld_3_1_1_box {
				margin-top: 25px;
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
			}
			
			.price_ld_3_1_1_boxL,
			.price_ld_3_1_1_boxR {
				width: 47%;
			}
			
			.price_ld_3_1_1_item {
				display: flex;
				align-items: center;
				background-color: #fff;
				border-radius: 160px;
				margin-bottom: 15px;
			}
			
			.price_ld_3_1_1_item:hover {
				background-color: #2445d0;
			}
			
			.price_ld_3_1_1_item:hover .price_ld_3_1_1_tt {
				color: #fff;
			}
			
			.price_ld_3_1_1_item:hover .price_ld_3_1_1_tt span {
				color: #fff;
			}
			
			.price_ld_3_1_1_item:hover .price_ld_3_1_1_thammy {
				color: #fff;
			}
			
			.price_ld_3_1_1_item:hover .price_ld_3_1_1_uudai img {
				transform: scale(1.05);
				transition: 1s;
			}
			
			.price_ld_3_1_1_item:hover .price_ld_3_1_1_phantram {
				z-index: 2;
			}
			
			.price_ld_3_1_1_tt {
				color: #0078fe;
				font-size: 24px;
				text-transform: uppercase;
				line-height: 1.2;
			}
			
			.price_ld_3_1_1_tt p {
				font-size: 16px;
				margin: 0;
			}
			
			.price_ld_3_1_1_tt span {
				font-size: 16px;
				display: block;
				color: #2b2b2b;
				text-transform: capitalize;
			}
			
			.price_ld_3_1_1_phantram {
				position: absolute;
				top: 30px;
				left: 20%;
				font-size: 52px;
				font-weight: 600;
			}
			
			.price_ld_3_1_1_phantram sup {
				font-size: 28px;
			}
			
			.price_ld_3_1_1_uudai {
				position: relative;
				color: #fff;
				font-size: 0;
			}
			
			.price_ld_3_1_1_uudai sub {
				font-size: 12px;
			}
			
			.price_ld_3_1_1_uudai img {
				border-radius: 100%;
			}
			
			.price_ld_3_1_1_thammy p {
				font-size: 16px;
				margin: 0;
				display: flex;
			}
			
			.price_ld_3_1_1_thammy span {
				width: 70px;
			}
			
			.price_ld_3_1_1_ct {
				width: 240px;
				padding-left: 20px;
			}
			
			.price_ld_3_1_1_pic img {
				border-radius: 69px 72px 69px 20px;
				display: block;
			}
			
			.price_ld_3_1_1_regist {
				padding: 8px 10px;
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 280px;
				text-align: center;
				transition: 0.4s;
				border-radius: 40px;
			}
			
			.price_ld_3_1_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.price_ld_3_1_1_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.price_ld_3_1_1_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				padding: 8px 10px;
			}
			
			@media (max-width: 1024px) {
				.price_ld_3_1_1_title {
					font-size: 30px;
				}
				.price_ld_3_1_1_title p {
					font-size: 20px;
				}
				.price_ld_3_1_1_phantram {
					top: 31px;
					left: 15%;
					font-size: 38px;
				}
				.price_ld_3_1_1_uudai img {
					width: 100%;
				}
				.price_ld_3_1_1_thammy p {
					line-height: 18px;
				}
				.price_ld_3_1_1_tt {
					font-size: 20px;
				}
				.price_ld_3_1_1_pic img {
					width: 100%;
				}
				.price_ld_3_1_1_regist {
					width: 280px;
				}
				.price_ld_3_1_1_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.price_ld_3_1_1 {
					background: #d6d6d7;
				}
				.price_ld_3_1_1_tt {
					font-size: 18px;
				}
				.price_ld_3_1_1_tt p {
					font-size: 13px;
				}
				.price_ld_3_1_1_thammy {
					font-size: 13px;
				}
				.price_ld_3_1_1_box {
					width: 80%;
					margin: 20px auto 0;
				}
				.price_ld_3_1_1_boxL,
				.price_ld_3_1_1_boxR {
					width: 100%;
				}
				.price_ld_3_1_1_ct {
					width: 260px;
					padding-left: 30px;
				}
				.price_ld_3_1_1_phantram {
					top: 32px;
					left: 20%;
					font-size: 52px;
				}
				.price_ld_3_1_1_regist {
					margin: 10px auto 0;
				}
			}
			
			@media (max-width: 414px) {
				.price_ld_3_1_1 {
					background: #f2f1ed;
					padding-bottom: 20px;
				}
				.price_ld_3_1_1_title {
					font-size: 24px;
				}
				.price_ld_3_1_1_title p {
					font-size: 16px;
					font-weight: 600;
				}
				.price_ld_3_1_1_box {
					width: 100%;
					margin: 20px auto 0;
				}
				.price_ld_3_1_1_tt {
					font-size: 16px;
					line-height: 1.0;
				}
				.price_ld_3_1_1_tt span {
					font-size: 13px;
				}
				.price_ld_3_1_1_ct {
					padding-left: 5px;
				}
				.price_ld_3_1_1_phantram {
					top: 17px;
					left: 14%;
					font-size: 40px;
				}
				.price_ld_3_1_1_phantram sub {
					font-size: 25px;
				}
				.price_ld_3_1_1 .owl-theme .owl-nav.disabled+.owl-dots {
					margin-top: 0;
				}
				.price_ld_3_1_1_thammy p {
					line-height: 15px;
				}
				.price_ld_3_1_1_regist {
					width: 250px;
				}
				.price_ld_3_1_1_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.price_ld_3_1_1 {
					background-position-y: 80px;
				}
				.price_ld_3_1_1_title br {
					display: block;
				}
				.price_ld_3_1_1_phantram {
					top: 14px;
					left: 14%;
					font-size: 32px;
				}
				.price_ld_3_1_1_phantram sup {
					font-size: 20px;
				}
				.price_ld_3_1_1_thammy p {
					font-size: 13px;
				}
				.price_ld_3_1_1_thammy span {
					width: 60px;
				}
			}
			
			@media (max-width: 320px) {
				.price_ld_3_1_1_title {
					font-size: 20px;
				}
				.price_ld_3_1_1_thammy p {
					line-height: 12px;
					font-size: 12px;
				}
				.price_ld_3_1_1_tt {
					font-size: 15px;
				}
				.price_ld_3_1_1_tt span {
					font-size: 12px;
				}
				.price_ld_3_1_1_phantram {
					top: 14px;
					left: 13%;
					font-size: 28px;
				}
			}
			/*# sourceMappingURL=price_ld_3_1_1.css.map */
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

<div class="price_ld_3_1_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_3_1_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->