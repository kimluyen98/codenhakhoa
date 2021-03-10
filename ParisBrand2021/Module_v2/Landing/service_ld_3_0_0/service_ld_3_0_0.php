<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.service_ld_3_0_0 {
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
			.service_ld_3_0_0 {
				background: url('.$path.'/images/service_ld_3_0_0-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				padding: 40px 0;
			}
			
			.service_ld_3_0_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #0055a4;
			}
			
			.service_ld_3_0_0_title p {
				font-size: 24px;
				color: #000;
			}
			
			.service_ld_3_0_0_box {
				padding: 20px 0;
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}
			
			.service_ld_3_0_0_box_left {
				width: 49%;
			}
			
			.service_ld_3_0_0_box_right {
				width: 49%;
			}
			
			.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item {
				display: flex;
				align-items: center;
				flex-wrap: wrap;
			}
			
			.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item:nth-child(1) {
				margin-bottom: 20px;
			}
			
			.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic {
				width: 40%;
			}
			
			.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic img {
				width: auto;
			}
			
			.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .sub {
				width: 60%;
				flex: 1;
			}
			
			.service_ld_3_0_0_box__item {
				background-color: #fff;
				color: #000;
				transition: 0.3s;
			}
			
			.service_ld_3_0_0_box__item:hover {
				background-color: #c8f4ff;
				transition: 0.3s;
			}
			
			.service_ld_3_0_0_box__item .pic img {
				width: 100%;
				display: block;
			}
			
			.service_ld_3_0_0_box__item .sub {
				padding: 34px 30px;
				font-size: 16px;
			}
			
			.service_ld_3_0_0_box__item .sub p {
				font-size: 24px;
				color: #2971c5;
			}
			
			.service_ld_3_0_0_regist {
				background-color: #ff5159;
				color: #fff;
				padding: 5px 0 0px;
				border-radius: 40px;
				text-align: center;
				width: 25%;
				margin: 0 auto;
			}
			
			.service_ld_3_0_0_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
			}
			
			.service_ld_3_0_0_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1440px) {
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic {
					width: 45%;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic img {
					width: 100%;
				}
				.service_ld_3_0_0_box__item .sub {
					padding: 10px 30px;
				}
			}
			
			@media (max-width: 1024px) {
				.service_ld_3_0_0 {
					padding-bottom: 20px;
					min-height: 680px;
				}
				.service_ld_3_0_0_title {
					font-size: 30px;
				}
				.service_ld_3_0_0_title p {
					font-size: 20px;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic {
					width: 45%;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic img {
					width: 100%;
				}
				.service_ld_3_0_0_box__item .sub {
					font-size: 14px;
				}
				.service_ld_3_0_0_box__item .sub p {
					font-size: 20px;
				}
				.service_ld_3_0_0_regist {
					font-size: 13px;
				}
				.service_ld_3_0_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.service_ld_3_0_0 {
					min-height: 600px;
				}
				.service_ld_3_0_0_box__item .sub {
					padding: 10px;
				}
				.service_ld_3_0_0_box__item .sub p {
					font-size: 18px;
				}
				.service_ld_3_0_0_regist {
					width: 33%;
				}
			}
			
			@media (max-width: 414px) {
				.service_ld_3_0_0 {
					background: url('.$path.'/images/service_ld_3_0_0-bg-m.jpg) center 0 no-repeat;
					padding: 10px 0;
				}
				.service_ld_3_0_0_title {
					font-size: 23px;
				}
				.service_ld_3_0_0_title p {
					font-size: 16px;
				}
				.service_ld_3_0_0_box {
					display: block;
					padding: 10px 0 0;
				}
				.service_ld_3_0_0_box_left {
					width: 100%;
				}
				.service_ld_3_0_0_box_right {
					width: 100%;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item {
					display: flex;
					flex-direction: column;
					margin-bottom: 10px;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item:nth-child(1) {
					margin-bottom: 10px;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .pic {
					width: 100%;
				}
				.service_ld_3_0_0_box_right .service_ld_3_0_0_box__item .sub {
					width: 100%;
					order: 2;
				}
				.service_ld_3_0_0_box__item {
					background: none;
					margin-bottom: 10px;
				}
				.service_ld_3_0_0_box__item .sub p {
					margin-bottom: 0px;
				}
				.service_ld_3_0_0_regist {
					width: 55%;
				}
				.service_ld_3_0_0_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 375px) {
				.service_ld_3_0_0_title {
					font-size: 18px;
					padding-top: 10px;
				}
				.service_ld_3_0_0_title p {
					font-size: 13px;
				}
				.service_ld_3_0_0_box {
					padding: 0;
				}
				.service_ld_3_0_0_box__item .sub {
					font-size: 13px;
				}
				.service_ld_3_0_0_box__item .sub p {
					font-size: 15px;
				}
				.service_ld_3_0_0_regist {
					width: 63%;
				}
			}
			
			@media (max-width: 320px) {
				.service_ld_3_0_0_regist a {
					font-size: 14px;
				}
				.service_ld_3_0_0_regist i {
					font-size: 11px;
				}
			}
			/*# sourceMappingURL=service_ld_3_0_0.css.map */
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

<div class="service_ld_3_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_service_ld_3_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->