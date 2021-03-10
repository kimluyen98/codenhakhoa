<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/info_ld_4_0_3';
	$content .= '
    <section id="" class="info_ld_4_0_3">
        <div class="container">
            <div class="info_ld_4_0_3_box">
                <div class="info_ld_4_0_3_block">
                    <div class="info_ld_4_0_3_title">
                        Trường hợp nào cần <br> trồng răng implant?
                    </div>
                    <ul>
                        <li><i class="icon-ok-circled2"></i> Đủ 18 tuổi trở lên</li>
                        <li><i class="icon-ok-circled2"></i> Đủ mật độ xương hàm</li>
                        <li><i class="icon-ok-circled2"></i> Sức khỏe tốt</li>
                    </ul>
                    <div class="info_ld_4_0_3_regist pc">
                        <i>Liệu bạn có phù hợp để trồng răng?</i>
                        <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí</a>
                    </div>
                </div>
                <div class="info_ld_4_0_3_video">
                    <div class="icon_vd modal-clip" data-video="">
                        <img src="images/info_ld_4_0_3-pic1.jpg" alt="">
                        <p>Xem video nhổ răng</p>
                    </div>
                    <div class="icon_vd icon_note modal-clip" data-video="">
                        <img src="images/info_ld_4_0_3-pic2.jpg" alt="">
                        <p>Xem video mới nhất</p>
                    </div>
                </div>
                <div class="info_ld_4_0_3_regist mb">
                    <i>Liệu bạn có phù hợp để trồng răng?</i>
                    <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí</a>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>