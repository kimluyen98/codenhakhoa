<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/step_ld_4_1_0';
	$content .= '
    <section id="" class="step_ld_4_1_0">
        <div class="container">
            <div class="step_ld_4_1_0_title">
                Quy trình niềng răng khay trong <br> tiêu chuẩn pháp
                <p>Phác đồ điều trị chuẩn xác từ chuyên gia</p>
            </div>
            <div class="step_ld_4_1_0_box">
                <div class="step_ld_4_1_0_item">
                    <div class="step_ld_4_1_0_item__pic">
                        <img class="lazy" data-src="images/step_ld_4_1_0-pic1.png" alt="">
                    </div>
                    <div class="step_ld_4_1_0_item__text">
                        Tư vấn, thăm khám, chụp CT tình trạng răng
                    </div>
                </div>
                <div class="step_ld_4_1_0_item">
                    <div class="step_ld_4_1_0_item__pic">
                        <img class="lazy" data-src="images/step_ld_4_1_0-pic2.png" alt="">
                    </div>
                    <div class="step_ld_4_1_0_item__text">
                        Lấy dấu hàm và gửi dữ liệu Labo
                    </div>
                </div>
                <div class="step_ld_4_1_0_item">
                    <div class="step_ld_4_1_0_item__pic">
                        <img class="lazy" data-src="images/step_ld_4_1_0-pic3.png" alt="">
                    </div>
                    <div class="step_ld_4_1_0_item__text">
                        Tạo lập dữ liệu, phân tích và xây dựng phác đồ điều trị
                    </div>
                </div>
                <div class="step_ld_4_1_0_item">
                    <div class="step_ld_4_1_0_item__pic">
                        <img class="lazy" data-src="images/step_ld_4_1_0-pic4.png" alt="">
                    </div>
                    <div class="step_ld_4_1_0_item__text">
                        Giao khay niềng
                    </div>
                </div>
                <div class="step_ld_4_1_0_item">
                    <div class="step_ld_4_1_0_item__pic">
                        <img class="lazy" data-src="images/step_ld_4_1_0-pic5.png" alt="">
                    </div>
                    <div class="step_ld_4_1_0_item__text">
                        Thăm khám, kiểm tra định kỳ
                    </div>
                </div>
            </div>
            <div class="step_ld_4_1_0_regist">
                <a href="">Nhận khám miễn phí</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>