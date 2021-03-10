<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/step_ld_5_1_0';
	$content .= '
    <section id="" class="step_ld_5_1_0">
        <div class="container">
            <div class="step_ld_5_1_0_title">
                QUY TRÌNH NHA KHOA AN TOÀN
                <p>Không đau - Không biến chứng</p>
            </div>
            <div class="step_ld_5_1_0_box">
                <div class="step_ld_5_1_0__item">
                    <div class="step_ld_5_1_0__pic">
                        <img class="lazy" data-src="images/step_ld_5_1_0-pic1.jpg">
                    </div>
                    <div class="step_ld_5_1_0__des">
                        ĐIỀU TRỊ VÔ TRÙNG
                        <ul>
                            <li> • Hệ thống đèn khử trùng
                                Tạo môi trường vô khuẩn</li>
                            <li> • Vô trùng đạt chuẩn Bộ Y Tế
                                Dụng cụ, Thiết bị, Thao tác</li>
                        </ul>
                    </div>
                    <div class="step_ld_5_1_0_bgText">
                        <img class="lazy" data-src="images/step_ld_5_1_0-pic44.jpg">
                    </div>
                </div>
                <div class="step_ld_5_1_0__item step_ld_5_1_0__itemSpec">
                    <div class="step_ld_5_1_0__pic step_ld_5_1_0__picSpec">
                        <img class="lazy" data-src="images/step_ld_5_1_0-pic2.jpg">
                    </div>
                    <div class="step_ld_5_1_0__des step_ld_5_1_0__desSpec">
                        CAM KẾT KHÔNG ĐAU
                        <ul>
                            <li>• Gây tê 2 bước </li>
                            </li>
                            <li> • Bôi tê mô mềm trước tiêm tê
                            <li>
                                - Không đau buốt với áp lực tiêm
                            </li>
                            <li>
                                - Quá trình làm không cảm giác
                            </li>
                        </ul>
                    </div>
                    <div class="step_ld_5_1_0_bgText">
                        <img class="lazy" data-src="images/step_ld_5_1_0-pic44.jpg">
                    </div>
                </div>
                <div class="step_ld_5_1_0__item">
                    <div class="step_ld_5_1_0__pic">
                        <img class="lazy" data-src="images/step_ld_5_1_0-pic3.jpg">

                    </div>
                    <div class="step_ld_5_1_0__des">
                        LÀNH THƯƠNG NHANH CHÓNG
                        <ul>
                            <li>• Máy siêu âm Piezotome</li>
                            </li>
                            <li>- Hạn chế cắt rạch, tổn thương mô mềm
                            <li>
                                - Hết tê không gây đau đớn
                            </li>
                            <li>
                                • Cấy huyết tương giàu tiểu cầu PRP. Kích thích tăng sinh tế bào hồi phục nhanh
                            </li>
                        </ul>
                    </div>
                    <div class="step_ld_5_1_0_bgText">
                        <img class="lazy" data-src="images/step_ld_5_1_0-pic55.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>