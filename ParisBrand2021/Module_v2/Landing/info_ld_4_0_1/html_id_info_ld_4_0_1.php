<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/info_ld_4_0_1';
	$content .= '
    <section id="" class="info_ld_4_0_1">
        <div class="container">
            <div class="info_ld_4_0_1_title">
                ỨNG DỤNG CÔNG NGHỆ<br> NIỀNG RĂNG 4.0
                <p>Sở hữu nụ cười chuẩn khớp cắn nhanh hơn 6 tháng</p>
            </div>
            <div class="info_ld_4_0_1_box">
                <div class="info_ld_4_0_1__item">
                    <div class="info_ld_4_0_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_0_1-pic1.jpg">
                    </div>
                    <div class="info_ld_4_0_1__ct">
                        <span>CT CONE BEAM</span> Phân tích cấu trúc hàm mặt
                    </div>
                </div>
                <div class="info_ld_4_0_1__item">
                    <div class="info_ld_4_0_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_0_1-pic2.jpg">
                    </div>
                    <div class="info_ld_4_0_1__ct">
                        <span>SCAN DẤU HÀM 3D</span> Phân tích khớp cắn & hình thể răng
                    </div>
                </div>
                <div class="info_ld_4_0_1__item">
                    <div class="info_ld_4_0_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_0_1-pic3.jpg">
                    </div>
                    <div class="info_ld_4_0_1__ct">
                        <span>THIẾT KẾ NỤ CƯỜI DSD </span> Nụ cười chuẩn tỷ lệ vàng<br> Chính xác từng nanomet
                    </div>
                </div>
                <div class="info_ld_4_0_1__item">
                    <div class="info_ld_4_0_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_0_1-pic4.jpg">
                    </div>
                    <div class="info_ld_4_0_1__ct">
                        <span>3D SPEED</span>Biết trước kết quả<br> Rút ngắn 6 tháng niềng
                    </div>
                </div>
            </div>
            <div class="info_ld_4_0_1_regist">
                <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí<br>
                <i>Công nghệ này có phù hợp với bạn?</i>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>