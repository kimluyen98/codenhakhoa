<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/info_ld_4_1_0';
	$content .= '
    <section id="" class="info_ld_4_1_0">
        <div class="container">
            <div class="info_ld_4_1_0_title">
                CÔNG NGHỆ BỌC RĂNG SỨ NANO 5S<br> TIÊU CHUẨN PHÁP
            </div>
            <div class="info_ld_4_1_0_box">
                <div>
                    <div class="info_ld_4_1_0__item">
                        <div class="info_ld_4_1_0__pic">
                            <img class="lazy" data-src="images/info_ld_4_1_0-pic1.jpg">
                        </div>
                        <div class="info_ld_4_1_0__ct">
                            <div class="info_ld_4_1_0__number">
                                1
                            </div>
                            <p> Shining</p> (Trắng sáng, tự nhiên)
                        </div>
                    </div>
                </div>
                <div>
                    <div class="info_ld_4_1_0__item">
                        <div class="info_ld_4_1_0__pic">
                            <img class="lazy" data-src="images/info_ld_4_1_0-pic2.jpg">
                        </div>
                        <div class="info_ld_4_1_0__ct">
                            <div class="info_ld_4_1_0__number">
                                2
                            </div>
                            <p> Safe</p> (An toàn, không đau nhức)
                        </div>
                    </div>
                </div>
                <div>
                    <div class="info_ld_4_1_0__item">
                        <div class="info_ld_4_1_0__pic">
                            <img class="lazy" data-src="images/info_ld_4_1_0-pic3.jpg">
                        </div>
                        <div class="info_ld_4_1_0__ct">
                            <div class="info_ld_4_1_0__number">
                                3
                            </div>
                            <p> Strong</p> (Bền chắc gấp 20 lần<br> răng thật)
                        </div>
                    </div>
                </div>
                <div>
                    <div class="info_ld_4_1_0__item">
                        <div class="info_ld_4_1_0__pic">
                            <img class="lazy" data-src="images/info_ld_4_1_0-pic4.jpg">
                        </div>
                        <div class="info_ld_4_1_0__ct">
                            <div class="info_ld_4_1_0__number">
                                4
                            </div>
                            <p>Silver</p> (Phân tử bạc diệt khuẩn<br> khử mùi hôi miệng)
                        </div>
                    </div>
                </div>
                <div>
                    <div class="info_ld_4_1_0__item">
                        <div class="info_ld_4_1_0__pic">
                            <img class="lazy" data-src="images/info_ld_4_1_0-pic5.jpg">
                        </div>
                        <div class="info_ld_4_1_0__ct">
                            <div class="info_ld_4_1_0__number">
                                5
                            </div>
                            <p> Sparking</p>(Sống động đến<br> từng vân răng, rìa cắn)
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_ld_4_1_0_regist">
                <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí<br>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>