<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_5_1_0';
	$content .= '
    <section id="" class="price_ld_5_1_0">
        <div class="price_ld_5_1_0_title">
            trồng răng implant giá tốt nhất năm 2020
            <p>ưu đãi 30% - giá chỉ từ 12 triệu</p>
        </div>
        <div class="container">
            <div class="price_ld_5_1_0_box">
                <div class="price_ld_5_1_0_item">
                    <div class="price_ld_5_1_0_pic">
                        <img class="lazy" data-src="images/price_ld_5_1_0-pic1.jpg">
                    </div>

                    <div class="price_ld_5_1_0_ct">
                        <div class="price_ld_5_1_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_1_0_des">
                            <p>bọc răng sứ<br>
                                nano 5s</p>
                            <span>Chỉ còn 2,5 triệu</span>
                        </div>

                    </div>
                </div>
                <div class="price_ld_5_1_0_item">
                    <div class="price_ld_5_1_0_pic">
                        <img class="lazy" data-src="images/price_ld_5_1_0-pic1.jpg">
                    </div>

                    <div class="price_ld_5_1_0_ct">
                        <div class="price_ld_5_1_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_1_0_des">
                            <p>bọc răng sứ<br>
                                nano 5s</p>
                            <span>Chỉ còn 2,5 triệu</span>
                        </div>

                    </div>
                </div>
                <div class="price_ld_5_1_0_item">
                    <div class="price_ld_5_1_0_pic">
                        <img class="lazy" data-src="images/price_ld_5_1_0-pic1.jpg">
                    </div>

                    <div class="price_ld_5_1_0_ct">
                        <div class="price_ld_5_1_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_1_0_des">
                            <p>bọc răng sứ<br>
                                nano 5s</p>
                            <span>Chỉ còn 2,5 triệu</span>
                        </div>

                    </div>
                </div>
                <div class="price_ld_5_1_0_item">
                    <div class="price_ld_5_1_0_pic">
                        <img class="lazy" data-src="images/price_ld_5_1_0-pic1.jpg">
                    </div>

                    <div class="price_ld_5_1_0_ct">
                        <div class="price_ld_5_1_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_1_0_des">
                            <p>bọc răng sứ<br>
                                nano 5s</p>
                            <span>Chỉ còn 2,5 triệu</span>
                        </div>

                    </div>
                </div>
                <div class="price_ld_5_1_0_item">
                    <div class="price_ld_5_1_0_pic">
                        <img class="lazy" data-src="images/price_ld_5_1_0-pic1.jpg">
                    </div>

                    <div class="price_ld_5_1_0_ct">
                        <div class="price_ld_5_1_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_1_0_des">
                            <p>bọc răng sứ<br>
                                nano 5s</p>
                            <span>Chỉ còn 2,5 triệu</span>
                        </div>

                    </div>
                </div>
                <div class="price_ld_5_1_0_item">
                    <div class="price_ld_5_1_0_pic">
                        <img class="lazy" data-src="images/price_ld_5_1_0-pic1.jpg">
                    </div>

                    <div class="price_ld_5_1_0_ct">
                        <div class="price_ld_5_1_0_ud">
                            -40%
                        </div>
                        <div class="price_ld_5_1_0_des">
                            <p>bọc răng sứ<br>
                                nano 5s</p>
                            <span>Chỉ còn 2,5 triệu</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="price_ld_5_1_0_regist">
                <a class="btnReg" href="#pageReg">Đăng ký tư vấn
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>