<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/step_ld_5_0_0';
	$content .= '
    <section id="" class="step_ld_5_0_0">
        <div class="container">
            <div class="step_ld_5_0_0_title">
                QUY TRÌNH NHA KHOA AN TOÀN
                <p>Không đau - Không biến chứng</p>
            </div>
            <div class="step_ld_5_0_0_box1">
                <div class="step_ld_5_0_0__item">
                    <div class="step_ld_5_0_0__pic">
                        <picture>
                            <source media="(min-width:600px)" class="lazy" data-srcset="images/step_ld_5_0_0-pic1.jpg">
                            <img class="lazy" data-src="images/step_ld_5_0_0-pic1m.jpg" alt="">
                        </picture>
                    </div>
                    <div class="step_ld_5_0_0__number step_ld_5_0_0__number">
                        <span>1</span>
                        <div class="step_ld_5_0_0__line"></div>
                    </div>
                    <div class="step_ld_5_0_0__name">
                        ĐIỀU TRỊ VÔ TRÙNG
                    </div>
                    <div class="step_ld_5_0_0__des">
                        Hệ thống đèn khử trùng<br>
                        Tạo môi trường vô khuẩn<br>
                        Vô trùng đạt chuẩn Bộ Y Tế<br>
                        Dụng cụ, Thiết bị, Thao tác
                    </div>
                </div>
                <div class="step_ld_5_0_0__item">
                    <div class="step_ld_5_0_0__pic">
                        <picture>
                            <source media="(min-width:600px)" class="lazy" data-srcset="images/step_ld_5_0_0-pic2.jpg">
                            <img class="lazy" data-src="images/step_ld_5_0_0-pic2m.jpg" alt="">
                        </picture>
                    </div>
                    <div class="step_ld_5_0_0__number step_ld_5_0_0__number">
                        <span>2</span>
                        <div class="step_ld_5_0_0__line"></div>
                    </div>
                    <div class="step_ld_5_0_0__name">
                        CAM KẾT KHÔNG ĐAU
                    </div>
                    <div class="step_ld_5_0_0__des">
                        Gây tê 2 bước<br>
                        Gây tê mô mềm trước tiêm tê<br>
                        - Không đau buốt với áp lực tiêm<br>
                        - Quá trình làm không cảm giác
                    </div>
                </div>
                <div class="step_ld_5_0_0__item">
                    <div class="step_ld_5_0_0__pic">
                        <picture>
                            <source media="(min-width:600px)" class="lazy" data-srcset="images/step_ld_5_0_0-pic3.jpg">
                            <img class="lazy" data-src="images/step_ld_5_0_0-pic3m.jpg" alt="">
                        </picture>
                    </div>
                    <div class="step_ld_5_0_0__number step_ld_5_0_0__number">
                        <span>3</span>
                        <div class="step_ld_5_0_0__line"></div>
                    </div>
                    <div class="step_ld_5_0_0__name">
                        LÀNH THƯƠNG NHANH CHÓNG
                    </div>
                    <div class="step_ld_5_0_0__des">
                        Máy siêu âm Piezotome<br>
                        - Hạn chế cắt rạch, tổn thương mô mềm<br>
                        - Hết tê không gây đau đớn<br>
                        Cấy huyết tương giàu tiểu cầu PRP.<br>
                        Kích thích tăng sinh tế bào hồi phục nhanh
                    </div>
                </div>
            </div>
            <!-- <div class="step_ld_5_0_0_regist">
                <a href="">Click tư vấn miễn phí
                </a>
            </div> -->
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>