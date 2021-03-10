<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/service_ld_3_2_0';
	$content .= '
    <section id="" class="service_ld_3_2_0">
        <div class="container">
            <div class="service_ld_3_2_0_sub">
                <div class="service_ld_3_2_0_title">Ứng dụng công nghệ 3D
                    <br> chuyển giao từ pháp
                    <p>Thiết kế nụ cười chuẩn tỷ lệ vàng<br> chính xác từng
                        nanomet</p>
                </div>
                <ul>
                    <li>- Scan dấu hàm 3D phân tích dữ liệu, khớp cắn và
                        hình thể răng</li>
                    <li>- CT Cone Beam phân tích cấu trúc răng hàm mặt</li>
                    <li>- Thiết kế tự động hóa răng sứ, niềng răng, implant</li>
                </ul>
                <div class="service_ld_3_2_0_pic mb">
                    <img class="lazy" data-src="images/service_ld_3_2_0-pic-mb.jpg" alt="">
                </div>
                <div class="service_ld_3_2_0_regist">
                    <a class="btnReg" href="#pageReg">Đăng ký tư vấn</a>
                </div>
            </div>
            <div class="service_ld_3_2_0_pic pc">
                <img class="lazy" data-src="images/service_ld_3_2_0-pic.jpg" alt="">
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>