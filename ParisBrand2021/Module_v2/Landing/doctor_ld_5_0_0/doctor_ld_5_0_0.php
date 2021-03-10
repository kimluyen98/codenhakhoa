<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/doctor_ld_5_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			.doctor_ld_5_0_0 {
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
				}
		
				.doctor_ld_5_0_0 {
				font-family: "Roboto Condensed", sans-serif;
				}
		
				.doctor_ld_5_0_0 {
				padding: 30px 0 0;
				background: url('.$path.'/images/doctor_ld_5_0_0-bg.jpg) center 0 no-repeat;
				background-color: #274c93;
				}
				.doctor_ld_5_0_0.copy {
					text-align: center;
					padding: 20px 0;
					min-height: 0
				}
				.doctor_ld_5_0_0.copy a {
					background: #F36B44;
					color: #fff;
					text-transform: uppercase;
					padding: 10px 30px;
					border-radius: 20px;
					border: 1px solid #fff;
					outline: none;
					cursor: pointer;
				}
				.doctor_ld_5_0_0_title {
				font-size: 36px;
				color: #fff;
				text-transform: uppercase;
				text-align: center;
				padding: 10px 0 20px;
				}
				.doctor_ld_5_0_0_title span {
				display: block;
				font-size: 24px;
				}
				.doctor_ld_5_0_0_title span br {
				display: none;
				}
				.doctor_ld_5_0_0_title br {
				display: none;
				}
				.doctor_ld_5_0_0__bs {
				width: 80%;
				margin: 10px auto 0;
				}
				.doctor_ld_5_0_0__bs .item {
				display: flex;
				}
				.doctor_ld_5_0_0__bs .item img{
					width: 100%;
					display: block;
				}
				.doctor_ld_5_0_0__bs .item .content {
				color: #fff;
				padding: 20px;
				border-radius: 10px;
				margin: 30px 0;
				margin-left: 10px;
				}
				.doctor_ld_5_0_0__bs .item .content .name p {
				color: #69baff;
				text-transform: uppercase;
				font-weight: 600;
				font-size: 24px;
				margin: 0;
				}
				.doctor_ld_5_0_0__bs .item .content .name span {
				color: #69baff;
				font-size: 16px;
				}
				.doctor_ld_5_0_0__bs .item .content .line {
				height: 6px;
				border: 3px solid #de5259;
				width: 200px;
				margin: 10px 0;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul {
				padding-left: 18px;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul li {
				padding: 3px 0;
				list-style: none;
				}
				.doctor_ld_5_0_0__bs .item .content .view {
				margin-top: 40px;
				}
				.doctor_ld_5_0_0__bs .item .content .view a {
				text-transform: uppercase;
				background: #de5259;
				color: #fff;
				padding: 12px 30px;
				border-radius: 25px;
				font-size: 18px;
				}
				.doctor_ld_5_0_0__tabs {
				width: 60%;
				display: flex;
				}
				.doctor_ld_5_0_0__tabs .tab {
				line-height: 0;
				margin: 0 2px;
				}
				.doctor_ld_5_0_0__tabs .tab .thum-bs img {
				opacity: 0.7;
				}
				.doctor_ld_5_0_0__tabs .tab.tns-nav-active .thum-bs img {
				opacity: 1;
				}
				.doctor_ld_5_0_0_tt {
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
				.doctor_ld_5_0_0_box1 {
				display: flex;
				justify-content: center;
				}
		
				@media (max-width: 1024px) {
				.doctor_ld_5_0_0__bs {
					width: 83%;
				}
				.doctor_ld_5_0_0__bs .item .content {
					width: 55%;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul li {
					font-size: 12px;
				}
				.doctor_ld_5_0_0__tabs {
					width: 70%;
					display: flex;
				}
				}
				@media (max-width: 812px) {
				.doctor_ld_5_0_0__bs {
					width: 100%;
				}
				.doctor_ld_5_0_0__bs .item .content {
					width: 60%;
					margin: 10px 0 0;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul li {
					font-size: 12px;
				}
				.doctor_ld_5_0_0__tabs {
					width: 95%;
					position: relative;
				}
				.doctor_ld_5_0_0__tabs .owl-dots {
					display: none;
				}
				.doctor_ld_5_0_0__tabs .owl-prev {
					position: absolute;
					left: -20px;
					top: calc( 50% - 15px);
					background: #E59D3B !important;
					color: #fff;
					font-size: 30px;
				}
				.doctor_ld_5_0_0__tabs .owl-next {
					position: absolute;
					right: -20px;
					top: calc( 50% - 15px);
					background: #E59D3B !important;
					color: #fff;
					font-size: 30px;
				}
				}
				@media (max-width: 414px) {
				.doctor_ld_5_0_0 {
					background: url('.$path.'/images/doctor_ld_5_0_0-bg-m.jpg) center 0 no-repeat;
					background-color: #254a91;
					padding-bottom: 10px;
				}
				.doctor_ld_5_0_0_title {
					font-size: 24px;
				}
				.doctor_ld_5_0_0_title span {
					font-size: 16px;
				}
				.doctor_ld_5_0_0_title span br {
					display: block;
				}
				.doctor_ld_5_0_0_title br {
					display: block;
				}
				.doctor_ld_5_0_0__bs {
					margin-top: 20px;
				}
				.doctor_ld_5_0_0__bs .item .pic {
					display: none;
				}
				.doctor_ld_5_0_0__bs .item .content {
					background: none;
					margin-left: 10px;
					padding: 0;
					width: 100%;
				}
				.doctor_ld_5_0_0__bs .item .content .name {
					font-size: 16px;
				}
				.doctor_ld_5_0_0__bs .item .content .name p {
					font-size: 24px;
				}
				.doctor_ld_5_0_0__bs .item .content .view {
					text-align: center;
					margin-top: 10px;
				}
				.doctor_ld_5_0_0__bs .item .content .view a {
					font-size: 15px;
					padding: 12px 10px;
					display: inline-block;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul {
					padding: 0;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul li {
					padding: 3px 0;
					list-style: none;
				}
				.doctor_ld_5_0_0__bs .item .content .line {
					width: 150px;
				}
				.doctor_ld_5_0_0_box1 {
					flex-wrap: wrap;
				}
				.doctor_ld_5_0_0_tt {
					width: 95%;
					margin-bottom: 10px;
					justify-content: center;
					padding: 5px 20px;
					margin-right: 0;
				}
				.doctor_ld_5_0_0__tabs {
					justify-content: center;
					width: 100%;
					flex-wrap: wrap;
				}
				.doctor_ld_5_0_0__tabs .tab {
					margin-bottom: 4px;
				}
				.doctor_ld_5_0_0__tabs .tab img {
					width: 100%;
				}
				.doctor_ld_5_0_0 .owl-prev, .doctor_ld_5_0_0 .owl-next {
					display: none;
				}
				}
				@media (max-width: 375px) {
				.doctor_ld_5_0_0 {
					background-size: 170%;
				}
				}
				@media (max-width: 360px) {
				.doctor_ld_5_0_0__title h2 {
					font-size: 20px;
					margin: 0 40px;
				}
				}
				@media (max-width: 320px) {
				.doctor_ld_5_0_0__title h2 {
					margin: 0 20px;
				}
				.doctor_ld_5_0_0__bs .item .content .info ul li {
					font-size: 10px;
				}
				}
		
				/*# sourceMappingURL=doctor_ld_5_0_0.css.map */
		
		</style>	
		';	
		$js_inline .='
				<script>
				var doctor_ld_5_0_0__bs=tns({container:".doctor_ld_5_0_0__bs",items:1,navContainer:"#doctor_ld_5_0_0__tabs",navAsThumbnails:!0,autoplay:!1,autoplayTimeout:1e3,gutter:10,controls:!1});
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

<div class="doctor_ld_5_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_doctor_ld_5_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->