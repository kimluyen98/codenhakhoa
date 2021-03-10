<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_5_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			.person_ld_5_0_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.person_ld_5_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.person_ld_5_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.person_ld_5_0_0 {
				padding: 30px 0;
				background: #f6f6f6;
			}
		
			.person_ld_5_0_0_title {
				font-size: 36px;
				color: #0055a4;
				text-transform: uppercase;
				text-align: center;
				padding: 10px 0 20px;
			}
			.person_ld_5_0_0 img{
				width: 100%;
				display: block;
			}
		
			.person_ld_5_0_0 .owl-theme .owl-dots .owl-dot.active span,
			.person_ld_5_0_0 .owl-theme .owl-dots .owl-dot:hover span {
				background: #31579e;
			}
		
			.person_ld_5_0_0_item {
				display: flex;
				justify-content: space-around;
				align-items: center;
				background-color: #fff;
				padding: 0px 30px;
				border-radius: 10px;
			}
		
			.person_ld_5_0_0_item-sub {
				text-align: center;
				padding-top: 15px;
				font-size: 15px;
				line-height: 30px;
			}
		
			.person_ld_5_0_0_item-sub p {
				text-transform: uppercase;
				color: #0859f0;
				font-size: 18px;
				font-weight: 500;
			}
		
			.person_ld_5_0_0_item-sub span {
				background-color: #0859f0;
				padding: 6px 20px;
				border-radius: 5px;
				color: #fff;
				text-transform: uppercase;
			}
		
			.person_ld_5_0_0_regist {
				color: #fff;
				background-color: #f73b3b;
				width: 320px;
				text-align: center;
				margin: 25px auto 0;
				transition: 0.4s;
				padding: 12px 0;
				border-radius: 40px;
			}
		
			.person_ld_5_0_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.person_ld_5_0_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
		
			@media (max-width: 1024px) {
				.person_ld_5_0_0_title {
					font-size: 30px;
				}
		
				.person_ld_5_0_0_item-sub {
					padding-top: 10px;
					font-size: 12px;
					line-height: 23px;
				}
		
				.person_ld_5_0_0_item-sub p {
					font-size: 14px;
					margin-bottom: 3px;
				}
		
				.person_ld_5_0_0_item-sub span {
					padding: 4px 10px;
				}
		
				.person_ld_5_0_0_item-sub b {
					font-weight: 500;
				}
		
				.person_ld_5_0_0_box .owl-carousel img {
					width: 100%;
				}
			}
		
			@media (max-width: 812px) {
				.person_ld_5_0_0 {
					padding: 10px 0;
				}
		
				.person_ld_5_0_0_title {
					font-size: 26px;
				}
		
				.person_ld_5_0_0_item {
					font-size: 13px;
				}
		
				.person_ld_5_0_0_regist {
					margin-top: 10px;
				}
			}
		
			@media (max-width: 414px) {
				.person_ld_5_0_0_title {
					font-size: 22px;
				}
		
				.person_ld_5_0_0_title br {
					display: none;
				}
		
				.person_ld_5_0_0_title p {
					font-size: 16px;
				}
		
				.person_ld_5_0_0_item {
					padding: 20px 12px;
					font-size: 14px;
				}
		
				.person_ld_5_0_0_item-left {
					display: none;
				}
		
				.person_ld_5_0_0_item-sub {
					font-size: 11px;
				}
		
				.person_ld_5_0_0_regist {
					width: 250px;
				}
		
				.person_ld_5_0_0_regist a {
					font-size: 18px;
				}
			}
		
			@media (max-width: 375px) {
				.person_ld_5_0_0_item {
					font-size: 13px;
				}
			}
		
			@media (max-width: 320px) {
				.person_ld_5_0_0_title {
					font-size: 20px;
				}
		
				.person_ld_5_0_0_item {
					font-size: 11px;
				}
		
				.person_ld_5_0_0_item__text {
					height: 55px;
				}
			}
		
			/*# sourceMappingURL=person_ld_5_0_0.css.map */
		</style>		
		';	
		
		$js_inline .='
			<script>
			var person_ld_5_0_0_box=tns({container:".person_ld_5_0_0_box",items:1,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,mouseDrag:!0,lazyload:!0,lazyloadSelector:".tns-lazy",gutter:10,navPosition:"bottom",controls:!1});
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

<div class="person_ld_5_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_5_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->