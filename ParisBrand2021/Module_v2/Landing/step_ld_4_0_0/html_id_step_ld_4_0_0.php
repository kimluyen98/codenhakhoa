<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/step_ld_4_0_0';
	$content .= '
    <section id="" class="step_ld_4_0_0">
        <div class="container">
            <div class="step_ld_4_0_0_title">
                quy trình cấy ghép implant <span>-</span><br> 5 bước an toàn tiêu chuẩn pháp
                <p>không đau - không biến chứng - nhanh chóng</p>
            </div>
            <div class="step_ld_4_0_0_box">
                <div>
                    <div class="step_ld_4_0_0__item">
                        <div class="step_ld_4_0_0__number step_ld_4_0_0__number1">
                            <span>01</span>
                        </div>
                        <div class="step_ld_4_0_0__name">
                            thăm khám, chụp hình ct cone beam
                        </div>
                        <div class="step_ld_4_0_0__ct">
                            Kiểm tra tình trạng răng miệng và mật độ xương hàm
                        </div>
                        <div class="step_ld_4_0_0__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_0-pic1.jpg">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step_ld_4_0_0__item">
                        <div class="step_ld_4_0_0__number step_ld_4_0_0__number2">
                            <span>02</span>
                        </div>
                        <div class="step_ld_4_0_0__name">
                            Lên kế hoạch điều trị
                        </div>
                        <div class="step_ld_4_0_0__ct">
                            Lập kế hoạch cấy ghép, lập phần mềm giả định cho KH biết trước kết quả
                        </div>
                        <div class="step_ld_4_0_0__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_0-pic2.jpg">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step_ld_4_0_0__item">
                        <div class="step_ld_4_0_0__number step_ld_4_0_0__number3">
                            <span>03</span>
                        </div>
                        <div class="step_ld_4_0_0__name">
                            Cấy ghép trụ Implant vào xương hàm
                        </div>
                        <div class="step_ld_4_0_0__ct">
                            Gây tê kiểm soát bằng máy tính, không rạch nướu giúp lành thương nhanh
                        </div>
                        <div class="step_ld_4_0_0__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_0-pic3.jpg">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step_ld_4_0_0__item">
                        <div class="step_ld_4_0_0__number step_ld_4_0_0__number4">
                            <span>04</span>
                        </div>
                        <div class="step_ld_4_0_0__name">
                            Lắp mão sứ
                        </div>
                        <div class="step_ld_4_0_0__ct">
                            Sau khi trụ Implant tích hợp, bác sĩ sẽ tiến hành lắp mão sứ lên trụ
                        </div>
                        <div class="step_ld_4_0_0__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_0-pic4.jpg">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="step_ld_4_0_0__item">
                        <div class="step_ld_4_0_0__number step_ld_4_0_0__number5">
                            <span>05</span>
                        </div>
                        <div class="step_ld_4_0_0__name">
                            Hướng dẫn chăm sóc răng miệng
                        </div>
                        <div class="step_ld_4_0_0__ct">
                            Hẹn lịch tái khám
                        </div>
                        <div class="step_ld_4_0_0__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_0-pic5.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="step_ld_4_0_0_regist">
                <a href="">Đăng ký tư vấn miễn phí</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>