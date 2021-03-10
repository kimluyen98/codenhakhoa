<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.price_ld_3_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_3_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.price_ld_3_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.price_ld_3_0_0 {
				background: url('.$path.'/images/price_ld_3_0_0-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				padding: 30px 0;
				background-position-y: -43px;
			}
			
			.price_ld_3_0_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #0055a4;
			}
			
			.price_ld_3_0_0_title br {
				display: none;
			}
			
			.price_ld_3_0_0_title p {
				font-size: 24px;
				color: #000;
			}
			
			.price_ld_3_0_0_box {
				padding: 30px 0 20px;
			}
			
			.price_ld_3_0_0_box .row {
				margin: 0;
			}
			
			.price_ld_3_0_0_box .row .col-md-4 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.price_ld_3_0_0_item__sub {
				background-color: #f8f8f8;
				border: 4px solid #d2e8ff;
				margin-bottom: 15px;
				transition: 0.3s;
			}
			
			.price_ld_3_0_0_item__sub:hover .price_ld_3_0_0_item__top {
				background-color: #00a2ff;
				border-radius: 0px 0px 50px 0;
				transition: 0.3s;
			}
			
			.price_ld_3_0_0_item__top {
				border-radius: 0px 0px 50px 0;
				display: flex;
				flex-wrap: wrap;
				align-items: center;
				justify-content: center;
				background-color: #cf1a15;
			}
			
			.price_ld_3_0_0_item__top span {
				width: 60%;
				color: #fff;
				font-size: 72px;
			}
			
			.price_ld_3_0_0_item__top .pic {
				width: 25%;
				background-color: #fff;
				border-radius: 50px;
				padding: 5px;
			}
			
			.price_ld_3_0_0_item__top .pic img {
				width: 100%;
				border-radius: 50%;
				display: block;
			}
			
			.price_ld_3_0_0_item__text {
				text-align: center;
				padding: 20px 0;
				height: 150px;
			}
			
			.price_ld_3_0_0_item__text p {
				text-transform: uppercase;
				color: #0165c1;
				font-size: 24px;
			}
			
			.price_ld_3_0_0_item__text span {
				color: #000;
				font-size: 20px;
				font-weight: 500;
			}
			
			.price_ld_3_0_0_item__text i {
				text-decoration: line-through;
				font-style: normal;
			}
			
			.price_ld_3_0_0_regist {
				background-color: #ff5159;
				color: #fff;
				padding: 6px 0 0px;
				border-radius: 40px;
				text-align: center;
				width: 300px;
				margin: 0 auto;
			}
			
			.price_ld_3_0_0_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
			}
			
			.price_ld_3_0_0_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.price_ld_3_0_0 {
					background-position-y: -75px;
				}
				.price_ld_3_0_0_title {
					font-size: 30px;
				}
				.price_ld_3_0_0_title p {
					font-size: 20px;
				}
				.price_ld_3_0_0_box {
					padding: 20px 0;
				}
				.price_ld_3_0_0_item__top span {
					font-size: 60px;
				}
				.price_ld_3_0_0_item__text {
					padding: 10px 0;
					height: 120px;
				}
				.price_ld_3_0_0_item__text p {
					font-size: 20px;
				}
				.price_ld_3_0_0_regist {
					width: 250px;
				}
				.price_ld_3_0_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.price_ld_3_0_0_item__text {
					height: 130px;
				}
				.price_ld_3_0_0_item__text span {
					font-size: 18px;
				}
				.price_ld_3_0_0_item__text p {
					font-size: 20px;
					margin-bottom: 0;
				}
			}
			
			@media (max-width: 414px) {
				.price_ld_3_0_0 {
					background: url('.$path.'/images/price_ld_3_0_0-bg-m.jpg) center 0 no-repeat;
					background-position-y: 100px;
					padding-bottom: 20px;
				}
				.price_ld_3_0_0_title {
					font-size: 24px;
				}
				.price_ld_3_0_0_title br {
					display: block;
				}
				.price_ld_3_0_0_title p {
					font-size: 16px;
				}
				.price_ld_3_0_0_item {
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
					padding: 0;
				}
				.price_ld_3_0_0_item__sub {
					margin-bottom: 8px;
					width: 48%;
				}
				.price_ld_3_0_0_item__sub:hover .price_ld_3_0_0_item__top {
					border-radius: 0px 0px 20px 0;
				}
				.price_ld_3_0_0_item__top {
					border-radius: 0px 0px 20px 0;
				}
				.price_ld_3_0_0_item__top span {
					font-size: 36px;
					width: 50%;
				}
				.price_ld_3_0_0_item__top .pic {
					width: 28%;
				}
				.price_ld_3_0_0_item__text {
					height: 110px;
				}
				.price_ld_3_0_0_item__text p {
					font-size: 16px;
				}
				.price_ld_3_0_0_item__text span {
					font-size: 16px;
				}
				.price_ld_3_0_0_regist {
					width: 200px;
				}
				.price_ld_3_0_0_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.price_ld_3_0_0 {
					background-position-y: 80px;
				}
			}
			
			@media (max-width: 320px) {
				.price_ld_3_0_0 {
					background-position-y: 30px;
				}
				.price_ld_3_0_0_title {
					font-size: 20px;
				}
				.price_ld_3_0_0_item__top span {
					font-size: 30px;
				}
				.price_ld_3_0_0_item__text {
					height: 95px;
				}
				.price_ld_3_0_0_item__text p {
					font-size: 14px;
				}
				.price_ld_3_0_0_item__text span {
					font-size: 14px;
				}
			}
			/*# sourceMappingURL=price_ld_3_0_0.css.map */
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

<div class="price_ld_3_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_3_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->