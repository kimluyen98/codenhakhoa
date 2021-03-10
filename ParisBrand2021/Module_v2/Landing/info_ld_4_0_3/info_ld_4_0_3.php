<?php
 $path = '/wp-content/themes/ParisBrand2019';
 $path = $path.'/Module_v2/Landing/info_ld_4_0_3';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			.info_ld_4_0_3.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.info_ld_4_0_3.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.info_ld_4_0_3 {
				font-family: "Roboto Condensed", sans-serif;
				background: #ffff;
				padding: 50px 0;
			}
			.info_ld_4_0_3 .mb{
				display: none;
			}
			
			.info_ld_4_0_3_title {
				text-transform: uppercase;
				text-align: left;
				font-size: 36px;
				color: #0055a4;
			}
			
			.info_ld_4_0_3_title p {
				font-size: 24px;
				color: #000;
			}
			
			.info_ld_4_0_3_box {
				display: flex;
				justify-content: space-between;
				flex-wrap:wrap;
			}
			.info_ld_4_0_3_block{
				width: 50%;
			}
			
			.info_ld_4_0_3_video{
				width: 50%;
				display: flex;
				justify-content: space-between;
			}
			.info_ld_4_0_3_video img{
				width: 100%;
				display: block;
				cursor: pointer;
			}
			.icon_vd{
				margin: 0 10px;
				text-align: center;
				position: relative;
			}
			.icon_vd::before{
				content: "";
				background-image: url('.$path.'/images/icon_vd.png);
				background-repeat: no-repeat;
				background-position: center;
				background-size: 100%;
				position: absolute;
				top: 30%;
				left: 40%;
				width: 50px;
				height: 50px;
			}
			.icon_vd p{
				margin: 10px 0 0;
				text-transform: uppercase;
				font-weight: 600;
				color: #000;
				font-size: 15px;
			}
			
			.info_ld_4_0_3_box ul {
				list-style: none;
				padding-left: 0;
			}
			
			.info_ld_4_0_3_box ul li {
				font-size: 24px;
				color: #000;
			}
			
			.info_ld_4_0_3_box ul li i {
				color: #0055a4;
			}
			
			.info_ld_4_0_3_regist {
				width: 320px;
				background-color: #ff5159;
				color: #fff;
				padding: 5px 0;
				border-radius: 40px;
				text-align: center;
			}
			
			.info_ld_4_0_3_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
			}
			@media (max-width: 1440px){
				.info_ld_4_0_3{
					padding: 30px 0;
				}
			}
			@media (max-width: 1024px) {
				.info_ld_4_0_3_title {
					font-size: 28px;
				}
				.info_ld_4_0_3_box ul {
					margin: 7px 0;
				}
				.info_ld_4_0_3_box ul li {
					font-size: 18px;
				}
				.info_ld_4_0_3_regist {
					font-size: 13px;
					width: 250px;
				}
				.info_ld_4_0_3_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.info_ld_4_0_3_title {
					font-size: 24px;
				}
				.info_ld_4_0_3_box ul li {
					font-size: 16px;
				}
				.info_ld_4_0_3_regist {
					width: 220px;
				}
				.info_ld_4_0_3_regist a {
					font-size: 17px;
				}
				.icon_vd p{
					font-size: 12px;
				}
			}
			
			@media (max-width: 414px) {
				.info_ld_4_0_3 .mb{
					display: block;
				}
				.info_ld_4_0_3 .pc{
					display: none;
				}
				.info_ld_4_0_3_title {
					padding-left: 20px;
				}
				.info_ld_4_0_3_block{
					width: 100%;
				}
				.info_ld_4_0_3_video{
					width: 100%;
					margin-top: 10px;
				}
				.icon_vd::before{
					top: 30%;
					left: 35%;
					width: 40px;
					height: 40px;
				}
				.info_ld_4_0_3_box ul {
					padding-left: 20px;
				}
				.info_ld_4_0_3_regist {
					margin: 20px auto 0;
				}
			}
			
			@media (max-width: 320px) {
				.info_ld_4_0_3_title {
					font-size: 20px;
				}
				.info_ld_4_0_3_box ul li {
					font-size: 14px;
				}
				.info_ld_4_0_3_regist a {
					font-size: 13px;
				}
				.icon_vd p{
					font-size: 10px;
				}
			}
			/*# sourceMappingURL=info_ld_4_0_3.css.map */
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

<div class="info_ld_4_0_3 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_info_ld_4_0_3.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->