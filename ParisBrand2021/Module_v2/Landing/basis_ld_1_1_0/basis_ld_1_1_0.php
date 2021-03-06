<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/basis_ld_1_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			.basis_ld_1_1_0 {
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			}

			.basis_ld_1_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.basis_ld_1_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.basis_ld_1_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.basis_ld_1_1_0 {
				padding: 30px 0 0;
				background: url('.$path.'/images/basis_ld_1_1_0-bg.jpg) center 0 no-repeat;
			}

			.basis_ld_1_1_0_title {
				font-size: 36px;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 0 30px;
				text-align: center;
				color: #2f549a;
			}

			.basis_ld_1_1_0_title span {
				display: block;
				font-size: 24px;
				color: #000;
			}

			.basis_ld_1_1_0_title span br {
				display: none;
			}

			.basis_ld_1_1_0_title br {
				display: none;
			}

			.basis_ld_1_1_0_textOr {
				justify-content: flex-end;
				order: 2;
				text-align: right;
				width: 50%;
				padding-right: 20px;
			}

			.basis_ld_1_1_0_textOr::before {
				left: -20px;
				transform: rotate(180deg);
			}

			.basis_ld_1_1_0_text {
				background-color: #fff;
				width: 50%;
				font-size: 24px;
				color: #4a83fb;
				position: relative;
				padding-left: 20px;
				display: flex;
				flex-wrap: wrap;
				align-items: center;
				text-transform: uppercase;
			}

			.basis_ld_1_1_0_text::before {
				content: "";
				width: 0;
				height: 0;
				border-top: 20px solid transparent;
				border-bottom: 20px solid transparent;
				border-left: 20px solid #fff;
				position: absolute;
				right: -20px;
				top: 53px;
			}

			.basis_ld_1_1_0_text p {
				color: #000;
				text-transform: initial;
			}

			.basis_ld_1_1_0_pic {
				line-height: 0;
				width: 50%;
			}

			.basis_ld_1_1_0_pic img {
				width: 100%;
			}

			.basis_ld_1_1_0_item {
				display: flex;
				flex-wrap: wrap;
			}

			.basis_ld_1_1_0_item:hover .basis_ld_1_1_0_text {
				background-color: #de5259;
				color: #fff;
			}

			.basis_ld_1_1_0_item:hover .basis_ld_1_1_0_text::before {
				border-left: 20px solid #de5259;
			}

			.basis_ld_1_1_0_item:hover .basis_ld_1_1_0_text p {
				color: #fff;
			}

			@media (max-width: 1024px) {
				.basis_ld_1_1_0_title {
					font-size: 28px;
				}

				.basis_ld_1_1_0_text {
					font-size: 18px;
				}

				.basis_ld_1_1_0_text::before {
					top: 42px;
				}
			}

			@media (max-width: 812px) {
				.basis_ld_1_1_0_text {
					font-size: 16px;
				}

				.basis_ld_1_1_0_text::before {
					top: 27px;
				}
			}

			@media (max-width: 414px) {
				.basis_ld_1_1_0 {
					background: url('.$path.'/images/basis_ld_1_1_0-bg-m.jpg) center 0 no-repeat;
				}

				.basis_ld_1_1_0_title {
					padding: 0 0 10px;
					font-size: 24px;
				}

				.basis_ld_1_1_0_picOr {
					order: 1;
				}

				.basis_ld_1_1_0_textOr {
					justify-content: flex-start;
					text-align: left;
				}

				.basis_ld_1_1_0_text {
					order: 2;
					width: 70%;
					padding: 10px;
				}

				.basis_ld_1_1_0_text::before {
					display: none;
				}

				.basis_ld_1_1_0_item {
					margin-bottom: 5px;
				}

				.basis_ld_1_1_0_pic {
					width: 30%;
				}
			}

			@media (max-width: 375px) {
				.basis_ld_1_1_0_text {
					font-size: 15px;
				}
			}

			@media (max-width: 360px) {
				.basis_ld_1_1_0_text {
					font-size: 13px;
				}
			}

			/*# sourceMappingURL=basis_ld_1_1_0.css.map */
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

<div class="basis_ld_1_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_basis_ld_1_1_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->