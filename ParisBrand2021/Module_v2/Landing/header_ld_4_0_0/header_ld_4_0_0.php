<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			#onesignal-bell-container{
				display: none;
			}
			.header_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			
			.header_ld_4_0_0 {
				position: fixed;
				z-index: 10;
				width: 100%;
				top: 0;
				background: #fff;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 {
					height: 80px;
					background: #fff;
				}
			}
			
			.header_ld_4_0_0 .siteHeader {
				display: flex;
				justify-content: space-between;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeader {
					display: block;
				}
			}
			
			.header_ld_4_0_0 .siteHeader-bg {
				background: rgba(0, 0, 0, 0.8);
				width: 100%;
				height: 100%;
				content: "";
				display: none;
				position: fixed;
				top: 0;
				left: 0;
				z-index: 2;
				animation: opac 0.4s;
			}
			
			.header_ld_4_0_0 .siteHeader-bg.active {
				display: block;
			}
			
			.header_ld_4_0_0 .siteHeader__section {
				display: flex;
				align-items: center;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeader__section {
					display: block;
					width: 100%;
				}
			}
			
			.header_ld_4_0_0 .siteHeader__item {
				padding: 35px 12px;
				font-size: 14px;
				text-transform: uppercase;
				cursor: pointer;
				color: #000;
				font-weight: 600;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeader__item {
					color: #fff;
					padding: 9px 12px;
					display: block;
					font-weight: 600;
					border-top: 1px dotted rgba(255, 255, 255, 0.2);
				}
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeader__item-menuHome {
					display: none;
				}
			}
			
			.header_ld_4_0_0 .siteHeader__item-logosb {
				display: none;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeader__item-logosb {
					display: block;
					text-align: center;
				}
			}
			
			.header_ld_4_0_0 .siteHeader__item-logosb img {
				max-width: 70%;
				margin: 20px 0 0;
			}
			
			.header_ld_4_0_0 .siteHeader__item+.header_ld_4_0_0 .siteHeader__item {
				margin-left: 5px;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderMain {
					display: none;
					width: 270px;
					background: #004689;
					position: fixed;
					height: 100%;
					left: 0;
					top: 0;
					z-index: 3;
					overflow: auto;
					padding-bottom: 20px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderMain.active {
				display: block;
				animation: animateleft 0.4s;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menu {
				display: flex;
				list-style: none;
				padding: 0;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderMain .menu {
					display: block;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSub:hover .menuSubBox {
				display: block;
				animation: opac 0.4s;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderMain .menuSub:hover .menuSubBox {
					display: none;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSub:hover>a {
				color: #e3a261;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubBox {
				display: none;
				position: absolute;
				width: 80%;
				right: 16px;
				top: 95px;
				background: #2f3d6b;
				padding: 30px 40px;
				color: #fff;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderMain .menuSubBox {
					position: inherit;
					width: 100%;
					padding: 10px 15px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubBox ul {
				list-style: none;
				padding: 0;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubBox ul li {
				border-bottom: 1px dotted rgba(255, 255, 255, 0.2);
				padding: 10px 0;
				font-size: 13px;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubBox ul li:last-child {
				border-bottom: none;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubBox a {
				color: #fff;
				transition: 0.1s;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubBox a:hover {
				color: rgba(255, 255, 255, 0.7);
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubTitle {
				text-transform: uppercase;
				font-size: 16px;
				font-weight: 600;
				position: relative;
				padding-bottom: 15px;
				margin-bottom: 10px;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderMain .menuSubTitle {
					margin-top: 10px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubTitle:after,
			.header_ld_4_0_0 .siteHeaderMain .menuSubTitle::before {
				content: "";
				display: block;
				position: absolute;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubTitle:before {
				width: 80px;
				height: 3px;
				background: #fff;
				left: 0;
				bottom: -1px;
			}
			
			.header_ld_4_0_0 .siteHeaderMain .menuSubTitle:after {
				width: 100px;
				width: 100%;
				height: 1px;
				background: rgba(255, 255, 255, 0.2);
				left: 0;
				bottom: 0;
			}
			
			.header_ld_4_0_0 .siteHeaderLogo {
				height: 90px;
				display: flex;
				align-items: center;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderLogo {
					text-align: center;
					width: 140px;
					margin: 0 auto;
					position: relative;
					display: block;
				}
			}
			
			@media (max-width: 414px) {
				.header_ld_4_0_0 .siteHeaderLogo {
					width: 125px;
					height: 80px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderLogo img {
				height: 65px;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderLogo img {
					position: absolute;
					top: 10px;
					left: 0;
					height: auto;
					max-width: 100%;
				}
			}
			
			@media (max-width: 414px) {
				.header_ld_4_0_0 .siteHeaderLogo img {
					top: 15px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderNav,
			.header_ld_4_0_0 .siteHeaderCall {
				position: absolute;
				top: 20px;
				display: none;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderNav,
				.header_ld_4_0_0 .siteHeaderCall {
					display: flex;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderphone {
				position: absolute;
				top: 20px;
				display: none;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderphone {
					display: flex;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderNav {
				font-size: 30px;
				width: 40px;
				height: 40px;
				left: 5px;
				color: #1564ab;
				padding-right: 35px;
				border-right: 1px solid #eee;
			}
			
			@media (max-width: 812px) {
				.header_ld_4_0_0 .siteHeaderNav {
					left: 20px;
				}
			}
			
			@media (max-width: 414px) {
				.header_ld_4_0_0 .siteHeaderNav {
					left: 30px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderCall {
				font-size: 42px;
				width: 40px;
				height: 40px;
				right: 0;
				line-height: 16px;
				border-radius: 4px;
				color: #1564ab;
			}
			
			@media (max-width: 812px) {
				.header_ld_4_0_0 .siteHeaderCall {
					right: 5px;
				}
			}
			
			@media (max-width: 414px) {
				.header_ld_4_0_0 .siteHeaderCall {
					font-size: 40px;
					right: 15px;
				    width: 32px;
					height: 32px;
					background: none;
					top: 25px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderphone {
				font-size: 20px;
				width: 40px;
				height: 40px;
				right: -15px;
				line-height: 16px;
				border-radius: 4px;
				color: #1564ab;
				border: 2px solid #1564ab;
				border-radius: 100%;
			}
			
			@media (max-width: 812px) {
				.header_ld_4_0_0 .siteHeaderphone {
					right: 10px;
				}
			}
			
			@media (max-width: 414px) {
				.header_ld_4_0_0 .siteHeaderphone {
					right: 15px;
					font-size: 18px;
					width: 30px;
					height: 30px;
					top: 25px;
				}
			}
			
			.header_ld_4_0_0 .siteHeader .icon-phone-11 img {
				width: 40px;
				height: 40px;
			}
			
			@media (max-width: 414px) {
				.header_ld_4_0_0 .siteHeader .icon-phone-11 img {
					width: 30px;
					height: 30px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderRegist,
			.header_ld_4_0_0 .siteHeaderPhone {
				border-radius: 25px;
				color: #fff;
				padding: 9px 15px;
				font-size: 14px;
				font-weight: 600;
				text-transform: uppercase;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderRegist,
				.header_ld_4_0_0 .siteHeaderPhone {
					margin: 0 5px;
					display: block;
					text-align: center;
					border-radius: 6px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderRegist {
				background: #ef5655;
				margin-left: 10px;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderRegist {
					margin-left: 5px;
					margin-top: 6px;
				}
			}
			
			.header_ld_4_0_0 .siteHeaderPhone {
				background: #0056a4;
				margin-left: 20px;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0 .siteHeaderPhone {
					margin-left: 5px;
				}
			}
			
			.header_ld_4_0_0.menufix {
				box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
				animation: animatetop 0.4s;
				background-color: #fff;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0.menufix {
					animation: none;
				}
			}
			
			.header_ld_4_0_0.menufix .siteHeader__item {
				padding: 35px 12px;
			}
			
			@media (max-width: 1024px) {
				.header_ld_4_0_0.menufix .siteHeader__item {
					padding: 9px 12px;
				}
			}
			
			@media (max-width: 812px) {
				.header_ld_4_0_0.menufix .siteHeader__item {
					padding: 9px 12px;
				}
			}
			
			.header_ld_4_0_0.menufix .siteHeaderLogo img {
				transition: 0.3s;
			}
			
			.header_ld_4_0_0.menufix .siteHeaderMain .menuSubBox {
				top: 65px;
			}
			/*# sourceMappingURL=header_ld_4_0_0.css.map */
		</style>	
		';	
		$js_inline .="
		<script>
			(function () {

				const smoothScroll = function (targetEl, duration) {
					const headerElHeight =  document.querySelector('.menu, .regist,.siteHeaderLogo,.siteHeaderMain').clientHeight;
					let target = document.querySelector(targetEl);
					let targetPosition = target.getBoundingClientRect().top - headerElHeight;
					let startPosition = window.pageYOffset;
					let startTime = null;
		
					const ease = function(t,b,c,d) {
						t /= d / 2;
						if (t < 1) return c / 2 * t * t + b;
						t--;
						return -c / 2 * (t * (t - 2) - 1) + b;
					};
		
					const animation = function(currentTime){
						if (startTime === null) startTime = currentTime;
						const timeElapsed = currentTime - startTime;
						const run = ease(timeElapsed, startPosition, targetPosition, duration);
						window.scrollTo(0,run);
						if (timeElapsed < duration) requestAnimationFrame(animation);
					};
					requestAnimationFrame(animation);
		
				};
		
				const scrollTo = function () {
					const links = document.querySelectorAll('.siteHeader__item, .regist a, .siteHeaderLogo a ,.siteHeaderMain a, .btnReg');
					links.forEach(each => {
						each.addEventListener('click', function () {
							const currentTarget = this.getAttribute('href');
							smoothScroll(currentTarget, 1000);
						});
					});
				};
				scrollTo();
				}()); 
		
				
		
					
		</script>
		";
	}	
	// let scrollpos = window.scrollY
	// 			const header = document.querySelector('header')
	// 			const header_height = header.offsetHeight
		
	// 			const add_class_on_scroll = () => header.classList.add('menufix')
	// 			const remove_class_on_scroll = () => header.classList.remove('menufix')
		
	// 			window.addEventListener('scroll', function() { 
	// 			scrollpos = window.scrollY;
		
	// 			if (scrollpos >= header_height) { add_class_on_scroll() }
	// 			else { remove_class_on_scroll() }
// })
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