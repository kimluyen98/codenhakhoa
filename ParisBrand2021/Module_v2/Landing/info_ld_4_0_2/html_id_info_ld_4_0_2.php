<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/info_ld_4_0_2';
	$content .= '
    <section id="" class="info_ld_4_0_2">
        <div class="container">
            <div class="info_ld_4_0_2_title">
                TẠI SAO NÊN CHỌN NIỀNG RĂNG TẠI PARIS?
            </div>
            <div class="info_ld_4_0_2_box">
                <div class="info_ld_4_0_2__item">
                    <div class="info_ld_4_0_2__li info_ld_4_0_2__li1">
                        <div class="info_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/info_ld_4_0_2-pic1.jpg">
                        </div>
                        <div class="info_ld_4_0_2__desc">
                            Hội đồng cố vấn Pháp - Việt giàu kinh nghiệm
                        </div>
                    </div>
                    <div class="info_ld_4_0_2__li info_ld_4_0_2__li1">
                        <div class="info_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/info_ld_4_0_2-pic2.jpg">
                        </div>
                        <div class="info_ld_4_0_2__desc">
                            100% bác sĩ là thành viên của Hiệp Hội Nha Khoa Thẩm Mỹ Châu Âu
                        </div>
                    </div>
                    <div class="info_ld_4_0_2__li">
                        <div class="info_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/info_ld_4_0_2-pic3.jpg">
                        </div>
                        <div class="info_ld_4_0_2__desc">
                            Công nghệ chuyển giao độc quyền chuẩn Pháp
                        </div>
                    </div>
                </div>
                <div class="info_ld_4_0_2__item">
                    <div class="info_ld_4_0_2__li info_ld_4_0_2__li1">
                        <div class="info_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/info_ld_4_0_2-pic11.jpg">
                        </div>
                        <div class="info_ld_4_0_2__desc">
                            Phác đồ điều trị 3 bước nhìn trước kết quả sau 7 ngày
                        </div>
                    </div>
                    <div class="info_ld_4_0_2__li info_ld_4_0_2__li1">
                        <div class="info_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/info_ld_4_0_2-pic22.jpg">
                        </div>
                        <div class="info_ld_4_0_2__desc">
                            Mô phỏng cấu trúc 3D - răng dịch chuyển chính xác 100%
                        </div>
                    </div>
                    <div class="info_ld_4_0_2__li">
                        <div class="info_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/info_ld_4_0_2-pic33.jpg">
                        </div>
                        <div class="info_ld_4_0_2__desc">
                            Niềng răng 3 giai đoạn - rút ngắn tới 6 tháng niềng
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_ld_4_0_2_regist">
                <a href="">Nhận tư vấn miễn phí
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>