<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/service_ld_3_3_0';
	$content .= '
    <section id="" class="service_ld_3_3_0">
        <div class="container">
            <div class="service_ld_3_3_0_title">
                Ứng dụng công nghệ 3D chuyển giao từ Pháp
                <p>Thiết kế nụ cười chuẩn tỷ lệ vàng Chính xác từng Nanomet</p>
            </div>
            <div class="service_ld_3_3_0_box">
                <div>
                    <div class="service_ld_3_3_0_item">
                        <div class="service_ld_3_3_0_pic">
                            <img class="lazy" data-src="images/service_ld_3_3_0-pic1.png">
                        </div>
                        <div class="service_ld_3_3_0-ct">
                            SCAN DẤU HÀM 3D
                            <span>Phân tích dữ liệu khớp cắn & hình thể răng</span>
                        </div>
                        <div class="service_ld_3_3_0-pic2">
                            <img class="lazy" data-src="images/service_ld_3_3_0-pic11.jpg">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service_ld_3_3_0_item">
                        <div class="service_ld_3_3_0_pic">
                            <img class="lazy" data-src="images/service_ld_3_3_0-pic2.png">
                        </div>
                        <div class="service_ld_3_3_0-ct">
                            SCAN DẤU HÀM 3D
                            <span>Phân tích dữ liệu khớp cắn & hình thể răng</span>
                        </div>
                        <div class="service_ld_3_3_0-pic2">
                            <img class="lazy" data-src="images/service_ld_3_3_0-pic22.jpg">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service_ld_3_3_0_item">
                        <div class="service_ld_3_3_0_pic">
                            <img class="lazy" data-src="images/service_ld_3_3_0-pic3.png">
                        </div>
                        <div class="service_ld_3_3_0-ct">
                            SCAN DẤU HÀM 3D
                            <span>Phân tích dữ liệu khớp cắn & hình thể răng</span>
                        </div>
                        <div class="service_ld_3_3_0-pic2">
                            <img class="lazy" data-src="images/service_ld_3_3_0-pic33.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_ld_3_3_0_regist mb">
                <a href="">Đăng ký tư vấn
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>