<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_3_0_0';
	$content .= '
    <section id="" class="price_ld_3_0_0">
        <div class="container">
            <div class="price_ld_3_0_0_title">
                Trồng răng implant<br> giá tốt nhất năm 2020
                <p>Ưu đãi 30% - giá chỉ từ 12 triệu</p>
            </div>
            <div class="price_ld_3_0_0_box">
                <div class="row">
                    <div class="col-md-4 price_ld_3_0_0_item">
                        <div class="price_ld_3_0_0_item__sub">
                            <div class="price_ld_3_0_0_item__top">
                                <span>-50%</span>
                                <div class="pic">
                                    <img class="lazy" data-src="images/price_ld_3_0_0-pic1.png" alt="">
                                </div>
                            </div>
                            <div class="price_ld_3_0_0_item__text">
                                <p>Trụ Hàn Quốc</p>
                                <span><i>16 triệu</i> <br>Chỉ còn 12 triệu</span>
                            </div>
                        </div>
                        <div class="price_ld_3_0_0_item__sub">
                            <div class="price_ld_3_0_0_item__top">
                                <span>-20%</span>
                                <div class="pic">
                                    <img class="lazy" data-src="images/price_ld_3_0_0-pic4.png" alt="">
                                </div>
                            </div>
                            <div class="price_ld_3_0_0_item__text">
                                <p>Trụ strawmann sla</p>
                                <span><i>30 triệu</i><br> chỉ còn 24 triệu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price_ld_3_0_0_item">
                        <div class="price_ld_3_0_0_item__sub">
                            <div class="price_ld_3_0_0_item__top">
                                <span>-20%</span>
                                <div class="pic">
                                    <img class="lazy" data-src="images/price_ld_3_0_0-pic2.png" alt="">
                                </div>
                            </div>
                            <div class="price_ld_3_0_0_item__text">
                                <p>Trụ Dentinum Mỹ</p>
                                <span><i>24 triệu</i><br> Chỉ còn 19,2 triệu</span>
                            </div>
                        </div>
                        <div class="price_ld_3_0_0_item__sub">
                            <div class="price_ld_3_0_0_item__top">
                                <span>-20%</span>
                                <div class="pic">
                                    <img class="lazy" data-src="images/price_ld_3_0_0-pic5.png" alt="">
                                </div>
                            </div>
                            <div class="price_ld_3_0_0_item__text">
                                <p>Trụ strawmann sla active</p>
                                <span><i>35 triệu</i><br> Chỉ còn 28 triệu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price_ld_3_0_0_item">
                        <div class="price_ld_3_0_0_item__sub">
                            <div class="price_ld_3_0_0_item__top">
                                <span>-30%</span>
                                <div class="pic">
                                    <img class="lazy" data-src="images/price_ld_3_0_0-pic3.png" alt="">
                                </div>
                            </div>
                            <div class="price_ld_3_0_0_item__text">
                                <p>Trụ sic</p>
                                <span><i>30 triệu</i><br> chỉ còn 21 triệu</span>
                            </div>
                        </div>
                        <div class="price_ld_3_0_0_item__sub">
                            <div class="price_ld_3_0_0_item__top">
                                <span>-20%</span>
                                <div class="pic">
                                    <img class="lazy" data-src="images/price_ld_3_0_0-pic6.png" alt="">
                                </div>
                            </div>
                            <div class="price_ld_3_0_0_item__text">
                                <p>Implant all on</p>
                                <span><i>140 triệu</i><br> Chỉ còn 112 triệu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price_ld_3_0_0_regist">
                <i>Chỉ còn 50 suất</i>
                <a class="btnReg" href="#pageReg"> Đăng ký nhận ưu đãi</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>