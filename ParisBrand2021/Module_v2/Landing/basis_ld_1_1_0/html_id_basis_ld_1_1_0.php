<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/basis_ld_1_1_0';
	$content .= '
    <div class="basis_ld_1_1_0">
		<div class="container">
			<div class="basis_ld_1_1_0_title">5 lý do bạn nên lựa chọn<br> nha khoa paris
			</div>
			<div class="basis_ld_1_1_0_box">
				<div class="basis_ld_1_1_0_item">
					<div class="basis_ld_1_1_0_text">
						<span>Quy mô rộng khắp cả nước
							<p>8 chi nhánh tại Hà Nội, Hải Phòng, Vinh, Đà Nẵng, TP.HCM</p>
						</span>
					</div>
					<div class="basis_ld_1_1_0_pic basis_ld_1_1_0_picOr">
						<picture>
							<source media="(min-width:600px)" class="lazy" data-srcset="images/basis_ld_1_1_0-pic1.jpg">
							<img class="lazy" data-src="images/basis_ld_1_1_0-pic1mb.jpg" alt="">
						</picture>
					</div>
				</div>
				<div class="basis_ld_1_1_0_item">
					<div class="basis_ld_1_1_0_text basis_ld_1_1_0_textOr">
						<span>Đội ngũ bác sĩ chuyên môn cao
							<p>100% bác sĩ được đào tạo chuyên sâu, giàu kinh nghiệm</p>
						</span>
					</div>
					<div class="basis_ld_1_1_0_pic">
						<picture>
							<source media="(min-width:600px)" class="lazy" data-srcset="images/basis_ld_1_1_0-pic2.jpg">
							<img class="lazy" data-src="images/basis_ld_1_1_0-pic2mb.jpg" alt="">
						</picture>
					</div>
				</div>
				<div class="basis_ld_1_1_0_item">
					<div class="basis_ld_1_1_0_text">
						<span>Công nghệ thẩm mỹ răng hiện đại bậc nhất
							<p>Xem trước kết quả - An toàn - Chắc khỏe - Thẩm mỹ cao</p></span>
					</div>
					<div class="basis_ld_1_1_0_pic basis_ld_1_1_0_picOr">
						<picture>
							<source media="(min-width:600px)" class="lazy" data-srcset="images/basis_ld_1_1_0-pic3.jpg">
							<img class="lazy" data-src="images/basis_ld_1_1_0-pic3mb.jpg" alt="">
						</picture>
					</div>
				</div>
				<div class="basis_ld_1_1_0_item">
					<div class="basis_ld_1_1_0_text basis_ld_1_1_0_textOr">
						<span>Làm một lần, đẹp trọn đời
							<p>Phác đồ chuẩn xác, rút ngắn thời gian tối đa</p></span>
					</div>
					<div class="basis_ld_1_1_0_pic">
						<picture>
							<source media="(min-width:600px)" class="lazy" data-srcset="images/basis_ld_1_1_0-pic4.jpg">
							<img class="lazy" data-src="images/basis_ld_1_1_0-pic4mb.jpg" alt="">
						</picture>
					</div>
				</div>
				<div class="basis_ld_1_1_0_item">
					<div class="basis_ld_1_1_0_text">
						<span> Bảo hành chính hãng
							<p>Nhận thẻ bảo hành quốc tế và bảo hành uy tín đến trọn đời</p></span>
					</div>
					<div class="basis_ld_1_1_0_pic basis_ld_1_1_0_picOr">
						<picture>
							<source media="(min-width:600px)" class="lazy" data-srcset="images/basis_ld_1_1_0-pic5.jpg">
							<img class="lazy" data-src="images/basis_ld_1_1_0-pic5mb.jpg" alt="">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>