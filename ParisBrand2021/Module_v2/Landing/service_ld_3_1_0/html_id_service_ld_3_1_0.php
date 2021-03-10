<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/service_ld_3_1_0';
	$content .= '
    <section id="" class="service_ld_3_1_0">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="service_ld_3_1_0_title">
                        Niềng răng 3D speed
                        <p>Khắc phục toàn diện răng <br> Hô - móm - thưa - khấp khểnh</p>
                    </div>
                    <div class="service_ld_3_1_0_regist pc">
                        <a class="btnReg" href="#pageReg">Mô tả tình trạng răng<br>
                        <i>Chuyên gia 30 năm KN tư vấn miễn phí</i>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="service_ld_3_1_0_box">
                        <div class="service_ld_3_1_0_item">
                            <div class="service_ld_3_1_0_item__sub">
                                <div class="service_ld_3_1_0_item__pic">
                                    <img class="lazy" data-src="images/service_ld_3_1_0-pic1.jpg" alt="">
                                </div>
                                <p>Răng hô</p>
                            </div>
                            <div class="service_ld_3_1_0_item__sub">
                                <div class="service_ld_3_1_0_item__pic">
                                    <img class="lazy" data-src="images/service_ld_3_1_0-pic3.jpg" alt="">
                                </div>
                                <p>Răng thưa</p>
                            </div>
                        </div>
                        <div class="service_ld_3_1_0_item">
                            <div class="service_ld_3_1_0_item__sub">
                                <div class="service_ld_3_1_0_item__pic">
                                    <img class="lazy" data-src="images/service_ld_3_1_0-pic2.jpg" alt="">
                                </div>
                                <p>Răng móm</p>
                            </div>
                            <div class="service_ld_3_1_0_item__sub">
                                <div class="service_ld_3_1_0_item__pic">
                                    <img class="lazy" data-src="images/service_ld_3_1_0-pic4.jpg" alt="">
                                </div>
                                <p>Răng khấp khểnh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service_ld_3_1_0_regist mb">
                    <a class="btnReg" href="#pageReg">Mô tả tình trạng răng<br>
                    <i>Chuyên gia 30 năm KN tư vấn miễn phí</i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>