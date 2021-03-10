<?php
	if($check == 0){
		$css_inline .= '
		<style>
			.regist_ft_1_0_0 {
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			}
			
			.regist_ft_1_0_0 {
				display: -webkit-flex;
				-ms-flex: 1;
				width: 100%;
				height: 60px;
				position: fixed;
				background: rgba(0, 0, 0, 0.5);
				left: 0;
				bottom: 0;
				z-index: 20 !important;
				display: none;
			}
			
			.regist_ft_1_0_0 a {
				text-align: center;
				flex: 1;
				margin: 10px 0 10px 10px;
				height: 40px;
				line-height: 40px;
				color: #fff;
				text-align: left;
				border-radius: 4px;
				font-size: 15px;
				font-weight: normal;
				text-transform: uppercase;
				padding-left: 20px;
				text-decoration: none;
			}
			
			.regist_ft_1_0_0 a:nth-child(1) {
				background: #004689;
				box-shadow: 0px 3px 0px 0px #10384A;
			}
			
			.regist_ft_1_0_0 a:nth-child(2) {
				background: #e23d3a;
				margin-right: 10px;
				box-shadow: 0px 2px 0px 0px #8f2725;
			}
			
			.regist_ft_1_0_0 a i {
				font-size: 20px;
			}
			
			@media (max-width: 414px) {
				.regist_ft_1_0_0 {
					display: flex;
				}
			}
			
			@media (max-width: 360px) {
				.regist_ft_1_0_0 a:nth-child(2) {
					margin-right: 20px;
				}
			}
			
			@media (max-width: 320px) {
				.regist_ft_1_0_0 a {
					font-size: 13px;
					padding-left: 10px;
				}
				.regist_ft_1_0_0 a i {
					font-size: 16px;
				}
			}
		</style>	
		';	
		add_action('wp_footer', 'regist_ft_1_0_0');
		function regist_ft_1_0_0(){ 
			echo '
			';           

		};
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
<!-- End Demo HTML -->