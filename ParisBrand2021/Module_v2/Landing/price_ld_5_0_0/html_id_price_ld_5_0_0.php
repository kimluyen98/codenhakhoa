<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_5_0_0';
	$content .= '
    <section id="" class="price_ld_5_0_0">
        <div class="container">
            <div class="price_ld_5_0_0_box">
                <div class="price_ld_5_0_0_boxL">
                    <img class="lazy" data-src="images/price_ld_5_0_0-bgTitle.jpg">
                    <div class="price_ld_5_0_0_tt">
                        <div class="price_ld_5_0_0_title">
                            thẩm mỹ răng<br> ưu đãi chưa - từng - có
                            <p>Duy nhất từ 1/5 - 31/5/2020</p>
                        </div>
                        <div class="price_ld_5_0_0_regist">
                            <a class="btnReg" href="#pageReg">Đăng ký tư vấn
                            </a>
                        </div>
                    </div>
                </div>
                <div class="price_ld_5_0_0_boxR">
                    <div class="price_ld_5_0_0_item">
                        <div class="price_ld_5_0_0_pic">
                            <img class="lazy" data-src="images/price_ld_5_0_0-pic1.jpg">
                        </div>
                        <div class="price_ld_5_0_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_0_0_ct">
                            <p>BỌC RĂNG SỨ<br>
                                NANO 5S
                                <span>Chỉ từ 2,5 triệu</span></p>
                        </div>
                    </div>
                    <div class="price_ld_5_0_0_item">
                        <div class="price_ld_5_0_0_pic">
                            <img class="lazy" data-src="images/price_ld_5_0_0-pic2.jpg">
                        </div>
                        <div class="price_ld_5_0_0_ud">
                            -25%
                        </div>
                        <div class="price_ld_5_0_0_ct">
                            <p>NIỀNG RĂNG<br>
                                3D SPEED
                                <span>Chỉ từ 15 triệu<br>
                                    Miễn phí tẩy trắng 2,5 triệu</span></p>
                        </div>
                    </div>
                    <div class="price_ld_5_0_0_item">
                        <div class="price_ld_5_0_0_pic">
                            <img src="images/price_ld_5_0_0-pic3.jpg">
                        </div>
                        <div class="price_ld_5_0_0_ud">
                            -30%
                        </div>
                        <div class="price_ld_5_0_0_ct">
                            <p>TRỒNG RĂNG<br>
                                IMPLANT 4S
                                <span>Chỉ từ 12 triệu<br>
                                    Miễn phí mão sứ 3,5 triệu</span></p>
                        </div>
                    </div>
                    <div class="price_ld_5_0_0_item">
                        <div class="price_ld_5_0_0_pic">
                            <img src="images/price_ld_5_0_0-pic4.jpg">
                        </div>
                        <div class="price_ld_5_0_0_ud">
                            -30%
                        </div>
                        <div class="price_ld_5_0_0_ct">
                            <p>TẨY TRẮNG RĂNG<br>
                                WHITEMAX
                                <span>Chỉ từ 1,75 triệu</span></p>
                        </div>
                    </div>
                    <div class="price_ld_5_0_0_item">
                        <div class="price_ld_5_0_0_pic">
                            <img src="images/price_ld_5_0_0-pic5.jpg">
                        </div>
                        <div class="price_ld_5_0_0_ud">
                            -30%
                        </div>
                        <div class="price_ld_5_0_0_ct">
                            <p>CHỮA CƯỜI HỞ LỢI
                                <span>Chỉ từ 12,6 triệu</span></p>
                        </div>
                    </div>
                    <div class="price_ld_5_0_0_item">
                        <div class="price_ld_5_0_0_pic">
                            <img src="images/price_ld_5_0_0-pic5.jpg">
                        </div>
                        <div class="price_ld_5_0_0_ud">
                            -15%
                        </div>
                        <div class="price_ld_5_0_0_ct">
                            <p>CHỈNH HÀM<br>
                                HÔ MÓM
                                <span>Chỉ từ 59,5 triệu</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price_ld_5_0_0_registMB">
                <a class="btnReg" href="#pageReg">Đăng ký tư vấn
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>