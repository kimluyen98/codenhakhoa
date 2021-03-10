<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/basis_ld_1_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			.basis_ld_1_0_0 {
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			}
			.basis_ld_1_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.basis_ld_1_0_0 img{
				width: 100%;
				display: block;
			}
			.basis_ld_1_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.basis_ld_1_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.basis_ld_1_0_0 {
				padding: 30px 0 0;
			}
		
			.basis_ld_1_0_0_title {
				font-size: 36px;
				color: #fff;
				text-transform: uppercase;
				padding: 30px 0 10px;
				text-align: center;
			}
		
			.basis_ld_1_0_0_title span {
				display: block;
				font-size: 24px;
				color: #000;
			}
		
			.basis_ld_1_0_0_title span br {
				display: none;
			}
		
			.basis_ld_1_0_0_title br {
				display: none;
			}
		
			.basis_ld_1_0_0__bs .item .content {
				color: #fff;
				position: absolute;
			}
		
			.basis_ld_1_0_0__bs .item .content1 {
				top: 150px;
				left: 20px;
				width: 50%;
			}
		
			.basis_ld_1_0_0__bs .item .content2 {
				width: 40%;
				top: 210px;
				left: 20px;
			}
		
			.basis_ld_1_0_0__bs .item .content3 {
				top: 50px;
				left: 30px;
			}
		
			.basis_ld_1_0_0__bs .item .content4 {
				top: 50px;
				left: 30px;
			}
		
			.basis_ld_1_0_0__bs .item .content5 {
				top: 50px;
				left: 30px;
			}
		
			.basis_ld_1_0_0__bs .item .content .name {
				color: #233d71;
				font-size: 36px;
				text-transform: uppercase;
			}
		
			.basis_ld_1_0_0__bs .item .content .desc {
				font-size: 24px;
				color: #000;
				text-transform: uppercase;
			}
		
			.basis_ld_1_0_0__tabs .tab .thum-bs {
				line-height: 0;
			}
		
			.basis_ld_1_0_0__tabs .tab .thum-bs:nth-child(1) {
				border-bottom: 1px solid #5696ff;
			}
		
			.basis_ld_1_0_0__tabs .tab .thum-bs img {
				width: 100%;
				background-color: #4a7fd5;
				padding: 21px 42px;
			}
		
			.basis_ld_1_0_0__tabs .tab.tns-nav-active .thum-bs img {
				background-color: #de5259;
			}
		
			.basis_ld_1_0_0_tt {
				color: #fff;
				padding: 0 20px;
				font-size: 16px;
				text-transform: uppercase;
				background-color: #0043b3;
				display: flex;
				justify-content: space-between;
				align-items: center;
				margin-right: 2px;
			}
		
			.basis_ld_1_0_0_box {
				display: flex;
				flex-wrap: wrap;
				padding: 0 40px 40px;
			}
		
			.basis_ld_1_0_0_boxL {
				width: 14%;
			}
		
			.basis_ld_1_0_0_boxL .view {
				margin-top: 40px;
			}
		
			.basis_ld_1_0_0_boxL .view a {
				text-transform: uppercase;
				background: #de5259;
				color: #fff;
				padding: 12px 30px;
				border-radius: 25px;
				font-size: 18px;
			}
		
			.basis_ld_1_0_0_boxR {
				width: 86%;
				background-color: #fff;
				padding: 10px;
			}
		
			.basis_ld_1_0_0_boxCt {
				background-color: #00498D;
			}
		
			.basis_ld_1_0_0_boxMB {
				display: none;
			}
		
			@media (max-width: 1024px) {
				.basis_ld_1_0_0_title {
					font-size: 28px;
				}
		
				.basis_ld_1_0_0_title span {
					font-size: 18px;
				}
		
				.basis_ld_1_0_0_boxL {
					width: 15%;
				}
		
				.basis_ld_1_0_0_boxR {
					width: 85%;
				}
		
				.basis_ld_1_0_0__bs .item .content1 {
					top: 50px;
					left: 20px;
					width: 40%;
				}
		
				.basis_ld_1_0_0__bs .item .content2 {
					width: 30%;
					top: 140px;
					left: 20px;
				}
		
				.basis_ld_1_0_0__bs .item .content3 {
					top: 50px;
					left: 30px;
				}
		
				.basis_ld_1_0_0__bs .item .content4 {
					top: 50px;
					left: 30px;
				}
		
				.basis_ld_1_0_0__bs .item .content5 {
					top: 50px;
					left: 30px;
				}
		
				.basis_ld_1_0_0__bs .item .content .name {
					font-size: 28px;
				}
		
				.basis_ld_1_0_0__bs .item .content .desc {
					font-size: 16px;
				}
		
				.basis_ld_1_0_0__tabs .tab .thum-bs img {
					padding: 21px 43px;
				}
			}
		
			@media (max-width: 812px) {
				.basis_ld_1_0_0_boxL {
					width: 20%;
				}
		
				.basis_ld_1_0_0_boxR {
					width: 80%;
				}
		
				.basis_ld_1_0_0__tabs .tab .thum-bs img {
					padding: 13px 47px;
				}
		
				.basis_ld_1_0_0__bs .item .content2 {
					top: 50px;
				}
		
				.basis_ld_1_0_0__bs .item .content .name {
					font-size: 20px;
				}
		
				.basis_ld_1_0_0__bs .item .content .desc {
					font-size: 16px;
				}
			}
		
			@media (max-width: 414px) {
				.basis_ld_1_0_0 {
					background: url('.$path.'/images/basis_ld_1_0_0-bg-m.jpg) center 0 no-repeat;
					background-size: 200%;
					padding-bottom: 10px;
				}
		
				.basis_ld_1_0_0_title {
					padding: 0 0 10px;
					font-size: 24px;
				}
		
				.basis_ld_1_0_0_title br {
					display: block;
				}
		
				.basis_ld_1_0_0_box {
					display: none;
				}
		
				.basis_ld_1_0_0_boxMB {
					display: flex;
				}
		
				.basis_ld_1_0_0_item {
					background-color: #fff;
					display: flex;
					height: 74px;
					margin-bottom: 4px;
					align-items: center;
				}
		
				.basis_ld_1_0_0_item p {
					color: #233d71;
					font-size: 16px;
					text-transform: uppercase;
					margin: 0;
					margin-left: 5px;
					line-height: 18px;
				}
		
				.basis_ld_1_0_0_item span {
					display: block;
					color: #000;
					text-transform: initial;
				}
		
				.basis_ld_1_0_0__tabs .tab .thum-bs {
					line-height: 0;
				}
		
				.basis_ld_1_0_0__tabs .tab .thum-bs:nth-child(1) {
					border-bottom: 4px solid #5696ff;
				}
		
				.basis_ld_1_0_0__tabs .tab .thum-bs img {
					padding: 9px 15px;
				}
			}
		
			@media (max-width: 375px) {
				.basis_ld_1_0_0__tabs .tab .thum-bs img {
					padding: 13px 15px;
				}
			}
		
			@media (max-width: 360px) {
				.basis_ld_1_0_0__tabs .tab .thum-bs img {
					padding: 15px 15px;
				}
			}
		
			@media (max-width: 320px) {
				.basis_ld_1_0_0__tabs .tab .thum-bs img {
					padding: 19px 14px;
				}
			}
		
			/*# sourceMappingURL=basis_ld_1_0_0.css.map */
		</style>
		';	
		$js_inline .='
			<script>
			var basis_ld_1_0_0__bs=tns({container:".basis_ld_1_0_0__bs",items:1,navContainer:"#basis_ld_1_0_0__tabs",navAsThumbnails:!0,autoplay:!1,autoplayTimeout:1e3,gutter:10,controls:!1});
			</script>
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

<div class="basis_ld_1_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_basis_ld_1_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->