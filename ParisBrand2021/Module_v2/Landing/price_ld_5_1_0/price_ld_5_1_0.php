<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}

			.price_ld_5_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.price_ld_5_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.price_ld_5_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}

			.price_ld_5_1_0 {
				padding: 30px 0;
				background: url('.$path.'/images/price_ld_5_1_0-bg.jpg) center 0 no-repeat;
			}

			.price_ld_5_1_0_title {
				text-align: center;
				text-transform: uppercase;
				font-size: 36px;
				color: #3056a0;
			}

			.price_ld_5_1_0_title p {
				font-size: 24px;
				color: #000;
			}

			.price_ld_5_1_0_box {
				margin: 30px auto 0;
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}

			.price_ld_5_1_0_pic {
				position: relative;
			}

			.price_ld_5_1_0_pic img {
				width: 100%;
			}

			.price_ld_5_1_0_ct {
				padding: 10px 0;
				display: flex;
				align-items: center;
				justify-content: space-between;
			}

			.price_ld_5_1_0_ud {
				font-size: 72px;
				color: #c2332f;
				margin-left: 20px;
			}

			.price_ld_5_1_0_des {
				color: #000;
				text-align: right;
				margin-right: 20px;
			}

			.price_ld_5_1_0_des p {
				font-size: 24px;
				text-transform: uppercase;
				margin: 0;
				line-height: 1.3;
				margin-bottom: 5px;
			}

			.price_ld_5_1_0_des span {
				font-size: 16px;
			}

			.price_ld_5_1_0_item {
				width: 32%;
				margin-bottom: 20px;
				background-color: #f8f8f8;
				transition: 0.4s ease;
			}

			.price_ld_5_1_0_item:hover {
				background-color: #ef413d;
				color: #fff;
			}

			.price_ld_5_1_0_item:hover .price_ld_5_1_0_pic img {
				transform: scale(1.05);
				transition: 0.4s ease;
				-webkit-transition: 0.4s ease;
			}

			.price_ld_5_1_0_item:hover .price_ld_5_1_0_des {
				color: #fff;
			}

			.price_ld_5_1_0_item:hover .price_ld_5_1_0_ud {
				color: #fff;
			}

			.price_ld_5_1_0_regist {
				transition: 0.4s;
				text-align: center;
				margin-top: 20px;
			}

			.price_ld_5_1_0_regist:hover a {
				box-shadow: 0 0 1px 3px rgba(174, 254, 255, 0.8), 0 0 1px 10px rgba(174, 254, 255, 0.1), 0 0 1px 20px rgba(174, 254, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}

			.price_ld_5_1_0_regist a {
				display: inline-block;
				text-transform: uppercase;
				color: #fff;
				padding: 15px 30px;
				font-size: 24px;
				line-height: 1;
				background-color: #ff5159;
				color: #fff;
				border-radius: 40px;
			}

			@media (max-width: 1024px) {
				.price_ld_5_1_0 {
					min-height: 510px;
				}

				.price_ld_5_1_0_title {
					font-size: 30px;
				}

				.price_ld_5_1_0_title p {
					font-size: 18px;
				}

				.price_ld_5_1_0_ud {
					font-size: 52px;
				}

				.price_ld_5_1_0_des p {
					font-size: 18px;
				}

				.price_ld_5_1_0_regist a {
					font-size: 18px;
					line-height: 1.2;
				}

				.price_ld_5_1_0_regist i {
					font-size: 14px;
				}
			}

			@media (max-width: 812px) {
				.price_ld_5_1_0_title {
					font-size: 22px;
				}

				.price_ld_5_1_0_title p {
					font-size: 15px;
				}

				.price_ld_5_1_0_ud {
					font-size: 45px;
				}

				.price_ld_5_1_0_des p {
					font-size: 16px;
				}

				.price_ld_5_1_0_des span {
					font-size: 14px;
				}
			}

			@media (max-width: 414px) {
				.price_ld_5_1_0 {
					background: url('.$path.'/images/price_ld_5_1_0-bg-m.jpg) center 0 no-repeat;
				}

				.price_ld_5_1_0_title {
					font-size: 22px;
					color: #fff;
				}

				.price_ld_5_1_0_title p {
					font-size: 16px;
					color: #fff;
				}

				.price_ld_5_1_0_item {
					width: 49%;
					margin-bottom: 8px;
				}

				.price_ld_5_1_0_ud {
					font-size: 36px;
					margin-left: 5px;
				}

				.price_ld_5_1_0_des {
					margin-right: 10px;
				}
			}

			@media (max-width: 375px) {
				.price_ld_5_1_0_ud {
					font-size: 36px;
					margin-left: 5px;
				}

				.price_ld_5_1_0_des {
					margin-right: 5px;
				}

				.price_ld_5_1_0_des p {
					font-size: 14px;
				}

				.price_ld_5_1_0_des span {
					font-size: 12px;
				}
			}

			@media (max-width: 320px) {
				.price_ld_5_1_0_ud {
					font-size: 32px;
					margin-left: 2px;
				}

				.price_ld_5_1_0_des p {
					font-size: 13px;
				}

				.price_ld_5_1_0_des span {
					font-size: 11px;
				}
			}

			/*# sourceMappingURL=price_ld_5_1_0.css.map */
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

<div class="price_ld_5_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_price_ld_5_1_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->