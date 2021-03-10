<?php
$path = get_template_directory_uri();
$path = $path.'/Module_v2/Landing/step_ld_4_0_3';
  if($check == 0){
    $css_inline .= "
	<style>
		a {
		text-decoration: none;
		}
		
		.step_ld_4_0_3 {
		font-family: 'Roboto Condensed', sans-serif;
		}
		.step_ld_4_0_3.copy {
			text-align: center;
			padding: 20px 0;
		}
		.step_ld_4_0_3.copy a {
			background: #F36B44;
			color: #fff;
			text-transform: uppercase;
			padding: 10px 30px;
			border-radius: 20px;
			border: 1px solid #fff;
			outline: none;
			cursor: pointer;
		}
		.step_ld_4_0_3 {
		background: url($path/images/step_ld_4_0_3-bg.jpg) center 0 no-repeat;
		padding: 30px 0;
		}
		.step_ld_4_0_3_title {
		text-transform: uppercase;
		text-align: center;
		font-size: 36px;
		color: #3056a0;
		}
		.step_ld_4_0_3_title br {
		display: none;
		}
		.step_ld_4_0_3_box {
		padding-top: 30px;
		display: flex;
		flex-wrap: wrap;
		position: relative;
		justify-content: center;
		}
		.step_ld_4_0_3_box::before {
		content: '';
		position: absolute;
		width: 917px;
		height: 5px;
		top: 0;
		left: 112px;
		background-color: #fff;
		}
		.step_ld_4_0_3_boxMB {
		display: none;
		}
		.step_ld_4_0_3__pic img {
		width: 100%;
		}
		.step_ld_4_0_3__item {
		position: relative;
		padding: 0 3px;
		width: 16%;
		padding-top: 40px;
		}
		.step_ld_4_0_3__item:hover .step_ld_4_0_3__pic {
		transition: 0.5s;
		}
		.step_ld_4_0_3__item:hover .step_ld_4_0_3__pic img {
		transform: scale(0.95);
		transition: 0.5s;
		}
		.step_ld_4_0_3__bgText1 {
		background-color: #75ddfa;
		}
		.step_ld_4_0_3__bgText2 {
		background-color: #2ebcfc;
		}
		.step_ld_4_0_3__bgText3 {
		background-color: #00a1ff;
		}
		.step_ld_4_0_3__bgText4 {
		background-color: #0083d4;
		}
		.step_ld_4_0_3__bgText5 {
		background-color: #025ac7;
		}
		.step_ld_4_0_3__bgText6 {
		background-color: #003aa4;
		}
		.step_ld_4_0_3__number {
		position: absolute;
		top: 0px;
		left: 52px;
		width: 80px;
		height: 80px;
		border-radius: 100%;
		border: 5px solid #fff;
		z-index: 2;
		}
		.step_ld_4_0_3__number span {
		font-size: 30px;
		height: 80px;
		color: #fff;
		display: flex;
		align-items: center;
		justify-content: center;
		position: relative;
		}
		.step_ld_4_0_3__number span::before {
		content: '';
		position: absolute;
		width: 5px;
		height: 30px;
		top: -30px;
		background-color: #fff;
		}
		.step_ld_4_0_3__pic img {
		border-radius: 0 0 110px 110px;
		}
		.step_ld_4_0_3__ct {
		border: 5px solid #fff;
		font-size: 22px;
		display: flex;
		justify-content: center;
		height: 180px;
		text-align: center;
		padding: 40px 10px 0;
		color: #fff;
		position: relative;
		}
		.step_ld_4_0_3__ct p::after {
		content: '';
		width: 120px;
		height: 2px;
		background-color: #fff;
		position: absolute;
		bottom: 20px;
		left: 25px;
		}
		.step_ld_4_0_3_regist {
		background-color: #ff5159;
		color: #fff;
		padding: 6px 0 0px;
		border-radius: 40px;
		text-align: center;
		width: 300px;
		margin: 20px auto 0;
		}
		.step_ld_4_0_3_regist:hover {
		box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
		border-radius: 40px;
		transition: 0.4s;
		}
		.step_ld_4_0_3_regist a {
		display: block;
		color: #fff;
		text-transform: uppercase;
		font-size: 24px;
		padding: 8px 10px;
		}
		.step_ld_4_0_3_regist i {
		font-style: normal;
		}
		
		@media (max-width: 1024px) {
		.step_ld_4_0_3 {
			background: #f2efef;
		}
		.step_ld_4_0_3_title {
			font-size: 30px;
		}
		.step_ld_4_0_3_title p {
			font-size: 20px;
		}
		.step_ld_4_0_3_box::before {
			width: 626px;
			left: 157px;
		}
		.step_ld_4_0_3__number {
			left: 115px;
		}
		.step_ld_4_0_3__ct {
			font-size: 18px;
			height: 130px;
			padding: 40px 10px 0;
		}
		.step_ld_4_0_3__ct p::after {
			left: 70px;
		}
		.step_ld_4_0_3__item {
			width: 33%;
			padding: 0 20px;
			padding-top: 40px;
		}
		.step_ld_4_0_3__pic img {
			border-radius: 0 0 130px 130px;
		}
		.step_ld_4_0_3__mar {
			margin-top: 10px;
		}
		.step_ld_4_0_3_regist {
			width: 250px;
		}
		.step_ld_4_0_3_regist a {
			font-size: 20px;
		}
		}
		@media (max-width: 812px) {
		.step_ld_4_0_3 {
			background: #f2efef;
		}
		.step_ld_4_0_3_box::before {
			width: 480px;
			left: 118px;
		}
		.step_ld_4_0_3__number {
			left: 80px;
		}
		.step_ld_4_0_3__ct p::after {
			left: 50px;
		}
		.step_ld_4_0_3__item {
			padding: 40px 5px 0 5px;
		}
		.step_ld_4_0_3__pic img {
			border-radius: 0 0 130px 130px;
		}
		}
		@media (max-width: 414px) {
		.step_ld_4_0_3 {
			padding-bottom: 20px;
			background-color: #ebedec;
		}
		.step_ld_4_0_3_title {
			font-size: 24px;
		}
		.step_ld_4_0_3_title br {
			display: block;
		}
		.step_ld_4_0_3_title p {
			font-size: 16px;
		}
		.step_ld_4_0_3_title span {
			display: none;
		}
		.step_ld_4_0_3_box {
			display: none;
		}
		.step_ld_4_0_3_boxMB {
			margin-top: 20px;
			display: flex;
			flex-wrap: wrap;
		}
		.step_ld_4_0_3__mar {
			margin-top: 5px;
		}
		.step_ld_4_0_3__icon {
			position: absolute;
			top: 0px;
			left: 29px;
			z-index: 2;
		}
		.step_ld_4_0_3__icon img {
			border-radius: 100%;
			width: 100%;
		}
		.step_ld_4_0_3__bgNum img {
			width: 100%;
			border-radius: 0 0 110px 110px;
		}
		.step_ld_4_0_3__item {
			padding: 40px 3px 0 3px;
		}
		.step_ld_4_0_3__ct {
			border: 4px solid #fff;
			border-bottom: none;
			font-size: 16px;
			display: flex;
			justify-content: center;
			height: 80px;
			text-align: center;
			padding: 40px 10px 0;
			color: #fff;
			position: relative;
		}
		.step_ld_4_0_3__ct p::after {
			width: 100px;
			bottom: auto;
			top: 35px;
			left: 5px;
		}
		.step_ld_4_0_3__bgText1 {
			background-color: #00defb;
		}
		.step_ld_4_0_3__bgText2 {
			background-color: #00bdfe;
		}
		.step_ld_4_0_3__bgText3 {
			background-color: #00a2ff;
		}
		.step_ld_4_0_3__bgText4 {
			background-color: #00bdfe;
		}
		.step_ld_4_0_3__bgText5 {
			background-color: #00bdfe;
		}
		.step_ld_4_0_3__bgText6 {
			background-color: #00a2ff;
		}
		.step_ld_4_0_3_regist {
			margin: 10px auto 0;
			width: 240px;
		}
		.step_ld_4_0_3_regist a {
			font-size: 17px;
		}
		}
		@media (max-width: 375px) {
		.step_ld_4_0_3__number {
			left: 45px;
		}
		.step_ld_4_0_3__ct p::after {
			width: 90px;
		}
		.step_ld_4_0_3__icon {
			left: 25px;
		}
		.step_ld_4_0_3__icon img {
			width: 90%;
		}
		.step_ld_4_0_3__ct {
			font-size: 15px;
			height: 80px;
		}
		.step_ld_4_0_3__item {
			padding: 30px 3px 0 3px;
		}
		}
		@media (max-width: 320px) {
		.step_ld_4_0_3_title {
			font-size: 20px;
		}
		.step_ld_4_0_3__ct {
			font-size: 13px;
			padding: 40px 5px 0;
		}
		}
		
		/*# sourceMappingURL=step_ld_4_0_3.css.map */
		
	</style>
			";
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

<div class="step_ld_4_0_3 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_4_0_3.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->