<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/info_ld_4_1_1';
	$content .= '
    <section id="" class="info_ld_4_1_1">
        <div class="container">
            <div class="info_ld_4_1_1_title">
                CÔNG NGHỆ BỌC RĂNG SỨ NANO 5S<br> TIÊU CHUẨN PHÁP
            </div>
            <div class="info_ld_4_1_1_box">
                <div class="info_ld_4_1_1__item">
                    <div class="info_ld_4_1_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_1_1-pic1.jpg">
                    </div>
                    <div class="info_ld_4_1_1__ct">
                        <div class="info_ld_4_1_1__number">
                            1
                        </div>
                        <p> Shining</p> (Trắng sáng, tự nhiên)
                    </div>
                </div>
                <div class="info_ld_4_1_1__item">
                    <div class="info_ld_4_1_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_1_1-pic2.jpg">
                    </div>
                    <div class="info_ld_4_1_1__ct">
                        <div class="info_ld_4_1_1__number">
                            2
                        </div>
                        <p> Safe</p> (An toàn, không đau nhức)
                    </div>
                </div>
                <div class="info_ld_4_1_1__item">
                    <div class="info_ld_4_1_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_1_1-pic3.jpg">
                    </div>
                    <div class="info_ld_4_1_1__ct">
                        <div class="info_ld_4_1_1__number">
                            3
                        </div>
                        <p> Strong</p> (Bền chắc gấp 20 lần<br> răng thật)
                    </div>
                </div>
                <div class="info_ld_4_1_1__item">
                    <div class="info_ld_4_1_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_1_1-pic4.jpg">
                    </div>
                    <div class="info_ld_4_1_1__ct">
                        <div class="info_ld_4_1_1__number">
                            4
                        </div>
                        <p>Silver</p> (Phân tử bạc diệt khuẩn<br> khử mùi hôi miệng)
                    </div>
                </div>
                <div class="info_ld_4_1_1__item">
                    <div class="info_ld_4_1_1__pic">
                        <img class="lazy" data-src="images/info_ld_4_1_1-pic5.jpg">
                    </div>
                    <div class="info_ld_4_1_1__ct">
                        <div class="info_ld_4_1_1__number">
                            5
                        </div>
                        <p> Sparking</p>(Sống động đến<br> từng vân răng, rìa cắn)
                    </div>
                </div>
            </div>
            <div class="info_ld_4_1_1_regist">
                <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí<br>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>