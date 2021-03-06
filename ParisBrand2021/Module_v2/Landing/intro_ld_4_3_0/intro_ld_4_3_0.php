<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_4_3_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_4_3_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_4_3_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_4_3_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_4_3_0 {
				margin-top: 80px;
				margin-bottom: 110px;
			}
			
			.intro_ld_4_3_0_bg {
				position: relative;
			}
			
			.intro_ld_4_3_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_4_3_0_box {
				position: absolute;
				bottom: -100px;
				left: 0;
				right: 0;
				color: #000;
			}
			
			.intro_ld_4_3_0_box1 {
				display: flex;
				justify-content: space-between;
			}
			
			.intro_ld_4_3_0_box1 ul {
				list-style: none;
				padding-left: 0;
				margin: 20px 0;
			}
			
			.intro_ld_4_3_0_box1 ul li {
				font-size: 24px;
			}
			
			.intro_ld_4_3_0_box1 .form {
				background: #fff;
				padding: 8px;
				border: 1px solid #ccc;
				width: 70%;
			}
			
			.intro_ld_4_3_0_box1 .form input {
				width: 100%;
				border: none;
				padding: 6px 12px;
				margin: 3px 0;
				background-color: #f0f0f0;
				border-radius: 8px;
			}
			
			.intro_ld_4_3_0_box1 .form .dkbt {
				color: #fff;
				background-color: #ff5159;
				text-align: center;
				transition: 0.4s;
			}
			
			.intro_ld_4_3_0_box1 .form .dkbt:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_4_3_0_box1 .form .dkbt i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_4_3_0_box1 .form .dkbt button {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				cursor: pointer;
				background: none;
				width: 100%;
				border: none;
				padding: 5px 0;
			}
			
			.intro_ld_4_3_0_box2_mb {
				display: none;
			}
			
			.intro_ld_4_3_0_box2_pc {
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
			}
			
			.intro_ld_4_3_0_item {
				width: 31%;
				text-align: center;
				background-color: #fff;
				box-shadow: 6px 8px 6px -4px #eee;
			}
			
			.intro_ld_4_3_0_item_top {
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
				align-items: center;
				color: #fff;
				padding: 5px 10px;
				border-radius: 0 0 20px 20px;
				background-color: #4db8e9;
				transition: 0.4s;
			}
			
			.intro_ld_4_3_0_item_top:hover {
				background-color: #004c9e;
				transition: 0.4s;
			}
			
			.intro_ld_4_3_0_item__pic {
				width: 40%;
			}
			
			.intro_ld_4_3_0_item__pic img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_4_3_0_item__sale {
				width: 50%;
				font-size: 70px;
			}
			
			.intro_ld_4_3_0_item__sub {
				padding: 20px 0;
				font-size: 24px;
			}
			
			.intro_ld_4_3_0_item__sub p {
				text-transform: uppercase;
				color: #0054b1;
				margin-bottom: 0px;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_4_3_0_title {
					width: 45%;
				}
				.intro_ld_4_3_0_title img {
					width: 100%;
				}
				.intro_ld_4_3_0_box1_left {
					width: 60%;
					padding-left: 100px;
				}
				.intro_ld_4_3_0_box1_right {
					width: 40%;
					padding-left: 50px;
				}
				.intro_ld_4_3_0_box1 ul {
					margin: 10px 0;
				}
				.intro_ld_4_3_0_box1 ul li {
					font-size: 20px;
				}
				.intro_ld_4_3_0_box1 .form {
					width: 60%;
				}
				.intro_ld_4_3_0_box2_pc {
					width: 82%;
					margin: 0 auto;
				}
				.intro_ld_4_3_0_item {
					width: 32%;
				}
				.intro_ld_4_3_0_item__sub {
					font-size: 20px;
				}
			}
			
			@media (max-width: 1280px) {

				.intro_ld_4_3_0 {
					margin-bottom: 140px;
				}
				.intro_ld_4_3_0_box {
					bottom: -120px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_4_3_0 {
					margin-bottom: 160px;
				}
				.intro_ld_4_3_0_title {
					width: 50%;
					margin: 0 auto;
				}
				.intro_ld_4_3_0_box {
					bottom: -140px;
				}
				.intro_ld_4_3_0_box1 {
					justify-content: space-between;
				}
				.intro_ld_4_3_0_box1_left,
				.intro_ld_4_3_0_box1_right {
					width: 50%;
					padding-left: 0;
					margin: 0 auto;
				}
				.intro_ld_4_3_0_box1 ul {
					padding-left: 130px;
				}
				.intro_ld_4_3_0_box1 ul li {
					font-size: 16px;
				}
				.intro_ld_4_3_0_box1 .form {
					margin: 0 auto;
				}
				.intro_ld_4_3_0_box2_pc {
					width: 75%;
				}
				.intro_ld_4_3_0_item__sale {
					font-size: 50px;
				}
				.intro_ld_4_3_0_item__sub {
					font-size: 16px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_4_3_0 {
					margin-bottom: 120px;
				}
				.intro_ld_4_3_0_box {
					bottom: -110px;
				}
				.intro_ld_4_3_0_box1 .form .dkbt button {
					font-size: 18px;
				}
				.intro_ld_4_3_0_box1 .form .dkbt i {
					font-size: 14px;
				}
				.intro_ld_4_3_0_box1 .form input {
					padding: 3px 12px;
					margin: 2px 0;
				}
				.intro_ld_4_3_0_box1 ul {
					padding-left: 90px;
					margin: 0;
				}
				.intro_ld_4_3_0_item__sale {
					font-size: 36px;
				}
				.intro_ld_4_3_0_item__sub {
					padding: 15px 0;
					font-size: 14px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_4_3_0 {
					margin-bottom: 50px;
				}
				.intro_ld_4_3_0_title {
					width: 65%;
					margin: 0;
				}
				.intro_ld_4_3_0_box {
					bottom: -30px;
				}
				.intro_ld_4_3_0_box1 {
					display: block;
				}
				.intro_ld_4_3_0_box1_left {
					width: 100%;
					padding-left: 20px;
				}
				.intro_ld_4_3_0_box1_right {
					width: 100%;
				}
				.intro_ld_4_3_0_box1 ul {
					padding-left: 0;
				}
				.intro_ld_4_3_0_box1 .form {
					width: 70%;
				}
				.intro_ld_4_3_0_box2_pc {
					display: none;
				}
				.intro_ld_4_3_0_box2_mb {
					display: block;
					margin: 10px 0;
				}
				.intro_ld_4_3_0_item {
					width: 70%;
					margin: 0 auto;
					background-color: unset;
					box-shadow: unset;
					display: flex;
					justify-content: space-between;
					align-items: center;
					flex-wrap: wrap;
					margin-bottom: 5px;
					border-radius: 100px 20px 20px 100px;
				}
				.intro_ld_4_3_0_item:nth-child(1),
				.intro_ld_4_3_0_item:nth-child(3) {
					border: 1px solid #4eb8e7;
				}
				.intro_ld_4_3_0_item:nth-child(2) {
					border: 1px solid #ff5159;
				}
				.intro_ld_4_3_0_item__sale {
					width: 20%;
					background-color: #4eb8e7;
					color: #fff;
					border-radius: 100%;
					font-size: 24px;
					padding: 11px 0;
				}
				.intro_ld_4_3_0_item__sale.sale_note {
					background-color: #ff5159;
				}
				.intro_ld_4_3_0_item__pic {
					width: 20%;
				}
				.intro_ld_4_3_0_item__sub {
					width: 60%;
					padding: 8px 0;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_4_3_0_box {
					bottom: -45px;
				}
				.intro_ld_4_3_0_item__sale {
					padding: 7px 0;
				}
				.intro_ld_4_3_0_item__sub {
					padding: 0;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_4_3_0_item__sale {
					font-size: 20px;
				}
				.intro_ld_4_3_0_item__sub {
					font-size: 12px;
				}
				.intro_ld_4_3_0_box1 ul li {
					font-size: 13px;
				}
				.intro_ld_4_3_0_box1 .form .dkbt {
					font-size: 13px;
				}
				.intro_ld_4_3_0_box1 .form .dkbt button {
					font-size: 16px;
				}
			}
			/*# sourceMappingURL=intro_ld_4_3_0.css.map */
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

<div class="intro_ld_4_3_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_4_3_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->