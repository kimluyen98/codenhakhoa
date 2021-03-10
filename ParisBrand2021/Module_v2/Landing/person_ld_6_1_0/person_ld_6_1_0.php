<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_6_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			.person_ld_6_1_0__title,
			.person_ld_6_1_0__tab .tab,
			.person_ld_6_1_0__img .item .text,
			.person_ld_6_1_0__regist a {
					font-family: "Roboto Condensed", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			}
			.person_ld_6_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.person_ld_6_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			a {
					text-decoration: none;
			}
		
			a {
					text-decoration: none;
			}
		
			.person_ld_6_1_0 {
					padding: 30px 0;
					background: #F7F7F7;
			}
		
			.person_ld_6_1_0__title {
					color: #3056a0;
					text-align: center;
					font-size: 34px;
					text-transform: uppercase;
			}
		
			.person_ld_6_1_0__box {
					margin: 20px auto 0;
			}
		
			.person_ld_6_1_0__tab {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
				list-style: none;
				padding: 0;
				margin: 0;
			}
		
			.person_ld_6_1_0__tab .tab {
					width: 48%;
					background: #e5e5e5;
					margin-bottom: 40px;
					padding: 14px 0;
					font-size: 18px;
					text-transform: uppercase;
					color: #0055a4;
					text-align: center;
					position: relative;
			}
			.person_ld_6_1_0__tab .tab:focus{
				outline: unset;
			}
			.person_ld_6_1_0__tab .tab.tns-nav-active{
					background: #0055A8;
					color: #fff;
			}
		
			.person_ld_6_1_0__tab .tab.tns-nav-active::after {
					opacity: 1;
			}
		
			.person_ld_6_1_0__tab .tab::after {
					content: "";
					width: 0;
					height: 0;
					border-left: 20px solid transparent;
					border-right: 20px solid transparent;
					border-top: 20px solid #0055A8;
					position: absolute;
					bottom: -20px;
					left: calc(50% - 20px);
					opacity: 0;
			}
		
			.person_ld_6_1_0__tab.mb {
					display: none;
			}
			.person_ld_6_1_0__img img{
				width: 100%;
				display: block;
			}
		
			.person_ld_6_1_0__img .item .text {
					background: #00AEFF;
					text-align: center;
					color: #fff;
					font-size: 20px;
					padding: 10px 5px;
			}
		
			.person_ld_6_1_0__img .item-child .box {
					margin-bottom: 10px;
					transition: all 0.4s;
			}
		
			.person_ld_6_1_0__img .item-child .box:hover .text {
					background: #FF5259;
					transition: all 0.4s;
			}
		
			.person_ld_6_1_0__regist {
					text-align: center;
					margin-top: 30px;
			}
		
			.person_ld_6_1_0__regist a {
					padding: 10px 30px;
					background: #FF5259;
					color: #fff;
					font-size: 22px;
					border-radius: 50px;
			}
		
			@media (max-width: 1024px) {
					.person_ld_6_1_0__title {
							font-size: 26px;
					}
		
					.person_ld_6_1_0__box {
							width: 100%;
					}
		
					.person_ld_6_1_0__tab .tab {
							font-size: 16px;
							padding: 13px 60px;
					}
		
					.person_ld_6_1_0__img .item .text {
							font-size: 16px;
					}
		
					.person_ld_6_1_0__regist a {
							font-size: 18px;
					}
			}
		
			@media (max-width: 812px) {
					.person_ld_6_1_0__title {
							font-size: 22px;
					}
		
					.person_ld_6_1_0__tab .tab {
							font-size: 14px;
							padding: 8px 30px;
					}
			}
		
			@media (max-width: 414px) {
					.person_ld_6_1_0__title {
							font-size: 22px;
					}
		
					.person_ld_6_1_0__title br {
							display: none;
					}
		
					.person_ld_6_1_0__box {
							display: block;
							margin-top: 10px;
					}
		
					.person_ld_6_1_0__tab {
							width: 100%;
					}
		
					.person_ld_6_1_0__tab .tab {
							font-size: 14px;
							padding: 5px;
							display: block;
							text-transform: initial;
							text-align: center;
							background: #f0f0f0;
							margin-bottom: 20px;
					}
		
					.person_ld_6_1_0__tab .tab::after {
							border-left: 15px solid transparent;
							border-right: 15px solid transparent;
							border-top: 15px solid #0055A8;
							position: absolute;
							bottom: -14px;
							left: calc(50% - 13px);
					}
		
					.person_ld_6_1_0__tab.pc {
							display: none;
					}
		
					.person_ld_6_1_0__tab.mb {
							display: flex;
							flex-wrap: wrap;
							flex-direction: row;
							justify-content: center;
							margin-bottom: 10px;
					}
		
					.person_ld_6_1_0__img {
							width: 100%;
					}
		
					.person_ld_6_1_0__regist {
							margin-top: 20px;
					}
			}
		
			@media (max-width: 375px) {
					.person_ld_6_1_0__title {
							font-size: 18px;
					}
		
					.person_ld_6_1_0__regist a {
							font-size: 16px;
					}
		
					.person_ld_6_1_0__img .item .text {
							font-size: 14px;
					}
			}
		
			@media (max-width: 320px) {
					.person_ld_6_1_0__title {
							font-size: 16px;
					}
		
					.person_ld_6_1_0__img .item .text {
							font-size: 12px;
					}
		
					.person_ld_6_1_0__tab .tab {
							font-size: 12px;
					}
			}
		
			/*# sourceMappingURL=person_ld_6_1_0.css.map */
		</style>
		';	

		$js_inline .='
			<script>
				var per61=tns({container:".per61",items:1,navContainer:"#person_ld_6_1_0__tab",navAsThumbnails:!0,autoplay:!1,autoplayTimeout:1e3,gutter:10,controls:!1});
				for(var sliders=[],containers=document.querySelectorAll(".per61-child"),i=0,l=containers.length;i<l;i++)sliders.push(tns({container:containers[i],axis:"horizontal",items:3,gutter:10,nav:!0,navPosition:"bottom",mouseDrag:!0,controls:!1,responsive:{0:{items:2,mouseDrag:!1,touch:!0},768:{items:3}}}));
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

<div class="person_ld_6_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_6_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->