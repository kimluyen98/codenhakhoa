<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.price_ld_3_0_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_3_0_1.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.price_ld_3_0_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.price_ld_3_0_1.loaded {
				background: url('.$path.'/images/price_ld_3_0_1-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				padding: 30px 0;
				background-position-y: -43px;
			}
			
			.price_ld_3_0_1_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #0055a4;
			}
			
			.price_ld_3_0_1_title br {
				display: none;
			}
			
			.price_ld_3_0_1_title p {
				font-size: 36px;
				color: #de5259;
				font-weight: 600;
			}
			
			.price_ld_3_0_1_box {
				padding: 20px 0 0;
			}
			
			.price_ld_3_0_1_box .row {
				margin: 0 -8px;
			}
			
			.price_ld_3_0_1_box .row .col-md-4 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.price_ld_3_0_1_item__sub {
				background-color: #f8f8f8;
				border: 4px solid #d2e8ff;
				margin-bottom: 15px;
				transition: 0.3s;
			}
			
			.price_ld_3_0_1_item__sub:hover .price_ld_3_0_1_item__top {
				background-color: #de5259;
				border-radius: 0px 0px 50px 0;
				transition: 0.3s;
			}
			
			.price_ld_3_0_1_item__sub:hover .pic {
				transition: 0.3s;
			}
			
			.price_ld_3_0_1_item__top {
				border-radius: 0px 0px 50px 0;
				display: flex;
				flex-wrap: wrap;
				align-items: center;
				justify-content: center;
				background-color: #3d6dd9;
			}
			
			.price_ld_3_0_1_item__top span {
				width: 60%;
				color: #fff;
				font-size: 72px;
			}
			
			.price_ld_3_0_1_item__top .pic {
				width: 25%;
				background-color: #fff;
				border-radius: 50px;
				padding: 5px;
			}
			
			.price_ld_3_0_1_item__top .pic img {
				width: 100%;
				border-radius: 50%;
				display: block;
			}
			
			.price_ld_3_0_1_item__text {
				text-align: center;
				padding: 20px 0;
				height: 130px;
			}
			
			.price_ld_3_0_1_item__text p {
				text-transform: uppercase;
				color: #0165c1;
				font-size: 24px;
			}
			
			.price_ld_3_0_1_item__text span {
				color: #de5259;
				font-size: 23px;
				font-weight: 500;
			}
			
			.price_ld_3_0_1_item__text i {
				text-decoration: line-through;
				font-style: normal;
			}
			
			.price_ld_3_0_1.loaded .price_ld_3_0_1__box2 {
				display: flex;
				flex-wrap: wrap;
				background-image: url('.$path.'/images/price_ld_3_0_1-boxBg.jpg);
				background-size: 100%;
				background-repeat: no-repeat;
				align-items: center;
			}
			
			.price_ld_3_0_1__boxL {
				width: 24%;
			}
			
			.price_ld_3_0_1__boxR {
				width: 76%;
			}
			
			.price_ld_3_0_1__gia {
				color: #fff;
				font-size: 68px;
				text-transform: uppercase;
				margin-left: 10px;
			}
			
			.price_ld_3_0_1__tragop {
				margin-top: 20px;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			
			.price_ld_3_0_1__tt {
				color: #3965bd;
				text-transform: uppercase;
				font-size: 24px;
			}
			
			.price_ld_3_0_1__uudai {
				color: #3965bd;
				text-transform: uppercase;
				font-size: 35px;
				margin-top: 20px;
			}
			
			.price_ld_3_0_1__uudai br {
				display: none;
			}
			
			.price_ld_3_0_1_regist {
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 280px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
				border-radius: 40px;
			}
			
			.price_ld_3_0_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.price_ld_3_0_1_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.price_ld_3_0_1_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1024px) {
				.price_ld_3_0_1.loaded {
					background-position-y: -75px;
				}
				.price_ld_3_0_1_title {
					font-size: 30px;
				}
				.price_ld_3_0_1_title p {
					font-size: 20px;
				}
				.price_ld_3_0_1_box {
					padding: 20px 0;
				}
				.price_ld_3_0_1_item__top span {
					font-size: 60px;
				}
				.price_ld_3_0_1_item__text {
					padding: 10px 0;
					height: 120px;
				}
				.price_ld_3_0_1_item__text p {
					font-size: 20px;
				}
				.price_ld_3_0_1__uudai {
					font-size: 28px;
				}
				.price_ld_3_0_1__gia {
					font-size: 54px;
				}
				.price_ld_3_0_1__tt {
					font-size: 20px;
				}
				.price_ld_3_0_1__tragop {
					margin-top: 10px;
				}
				.price_ld_3_0_1__img {
					text-align: center;
				}
				.price_ld_3_0_1__img img {
					max-width: 80%;
				}
				.price_ld_3_0_1_regist {
					width: 280px;
				}
				.price_ld_3_0_1_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.price_ld_3_0_1_item__text {
					height: 130px;
				}
				.price_ld_3_0_1_item__text span {
					font-size: 18px;
				}
				.price_ld_3_0_1_item__text p {
					font-size: 20px;
					margin-bottom: 0;
				}
				.price_ld_3_0_1__gia {
					margin-left: 5px;
					font-size: 42px;
				}
				.price_ld_3_0_1__uudai {
					font-size: 22px;
				}
				.price_ld_3_0_1.loaded .price_ld_3_0_1__box2 {
					background-size: 110%;
				}
			}
			
			@media (max-width: 414px) {
				.price_ld_3_0_1.loaded {
					background: url('.$path.'/images/price_ld_3_0_1-bg-m.jpg) center 0 no-repeat;
					background-position-y: 50px;
					padding-bottom: 20px;
				}
				.price_ld_3_0_1_title {
					font-size: 24px;
				}
				.price_ld_3_0_1_title p {
					font-size: 16px;
				}
				.price_ld_3_0_1_item {
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
					padding: 0;
				}
				.price_ld_3_0_1_item__sub {
					margin-bottom: 0;
					width: 100%;
				}
				.price_ld_3_0_1_item__sub:hover .price_ld_3_0_1_item__top {
					border-radius: 0px 0px 20px 0;
				}
				.price_ld_3_0_1_item__subPad {
					margin-bottom: 10px;
				}
				.price_ld_3_0_1_item__top {
					border-radius: 0px 0px 20px 0;
				}
				.price_ld_3_0_1_item__top span {
					font-size: 36px;
					width: 50%;
				}
				.price_ld_3_0_1_item__top .pic {
					width: 28%;
				}
				.price_ld_3_0_1_item__text {
					height: 90px;
				}
				.price_ld_3_0_1_item__text p {
					font-size: 16px;
					font-weight: 600;
				}
				.price_ld_3_0_1_item__text span {
					font-size: 16px;
				}
				.price_ld_3_0_1_boxContent {
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
				}
				.price_ld_3_0_1__boxL {
					width: 100%;
				}
				.price_ld_3_0_1__boxR {
					width: 100%;
				}
				.price_ld_3_0_1_box {
					width: 45%;
					padding: 0;
				}
				.price_ld_3_0_1_box .row {
					margin: 0;
				}
				.price_ld_3_0_1_box .row .col-md-4 {
					padding-left: 0;
					padding-right: 0;
				}
				.price_ld_3_0_1.loaded .price_ld_3_0_1__box2 {
					background-image: url('.$path.'/images/price_ld_3_0_1-boxBg-m.jpg);
					background-size: 100%;
					text-align: center;
					width: 50%;
					display: block;
				}
				.price_ld_3_0_1__gia {
					font-size: 50px;
					margin-left: 0;
					margin-top: 40px;
				}
				.price_ld_3_0_1__tragop {
					display: block;
				}
				.price_ld_3_0_1__tt {
					font-size: 16px;
					font-weight: 600;
				}
				.price_ld_3_0_1__tt br {
					display: none;
				}
				.price_ld_3_0_1__tt2 {
					margin-top: -20px;
				}
				.price_ld_3_0_1__img img {
					max-width: 100%;
				}
				.price_ld_3_0_1__uudai {
					font-size: 20px;
					font-weight: 600;
					margin-top: 40px;
				}
				.price_ld_3_0_1__uudai br {
					display: block;
				}
				.price_ld_3_0_1_regist {
					width: 250px;
				}
				.price_ld_3_0_1_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.price_ld_3_0_1.loaded {
					background-position-y: 80px;
				}
				.price_ld_3_0_1_title br {
					display: block;
				}
			}
			
			@media (max-width: 360px) {
				.price_ld_3_0_1.loaded .price_ld_3_0_1__box2 {
					background-size: 102%;
				}
				.price_ld_3_0_1__gia {
					margin-top: 30px;
				}
				.price_ld_3_0_1__tragop {
					margin-top: 30px;
				}
			}
			
			@media (max-width: 320px) {
				.price_ld_3_0_1.loaded {
					background-position-y: 30px;
				}
				.price_ld_3_0_1_title {
					font-size: 20px;
				}
				.price_ld_3_0_1_item__top span {
					font-size: 30px;
				}
				.price_ld_3_0_1_item__text {
					height: 82px;
				}
				.price_ld_3_0_1_item__text p {
					font-size: 14px;
				}
				.price_ld_3_0_1_item__text span {
					font-size: 14px;
				}
				.price_ld_3_0_1__tragop {
					margin-top: 20px;
				}
				.price_ld_3_0_1__gia {
					font-size: 38px;
				}
				.price_ld_3_0_1.loaded .price_ld_3_0_1__box2 {
					background-size: 104%;
				}
			}
			/*# sourceMappingURL=price_ld_3_0_1.css.map */
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

<div class="price_ld_3_0_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_3_0_1.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->