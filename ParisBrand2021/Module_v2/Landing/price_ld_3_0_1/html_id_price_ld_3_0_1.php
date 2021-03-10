<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_3_0_1';
	$content .= '
    <section id="" class="price_ld_3_0_1">
        <div class="container">
            <div class="price_ld_3_0_1_title">
                BẢNG GIÁ NIỀNG RĂNG<br> TỐT NHẤT NĂM
                <p>ƯU ĐÃI LÊN TỚI 25%</p>
            </div>
            <div class="price_ld_3_0_1_boxContent">
                <div class="price_ld_3_0_1_box">
                    <div class="row">
                        <div class="col-md-4 price_ld_3_0_1_item">
                            <div class="price_ld_3_0_1_item__sub price_ld_3_0_1_item__subPad">
                                <div class="price_ld_3_0_1_item__top">
                                    <span>-20%</span>
                                    <div class="pic">
                                        <img class="lazy" data-src="images/price_ld_3_0_1-pic1.png" alt="">
                                    </div>
                                </div>
                                <div class="price_ld_3_0_1_item__text">
                                    <p>Niềng răng mắc cài kim loại </p>
                                    <span>Chỉ từ 15 triệu</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 price_ld_3_0_1_item">
                            <div class="price_ld_3_0_1_item__sub price_ld_3_0_1_item__subPad">
                                <div class="price_ld_3_0_1_item__top">
                                    <span>-20%</span>
                                    <div class="pic">
                                        <img class="lazy" data-src="images/price_ld_3_0_1-pic2.png" alt="">
                                    </div>
                                </div>
                                <div class="price_ld_3_0_1_item__text">
                                    <p>Niềng răng mắc cài sứ</p>
                                    <span>Chỉ còn 30 triệu</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 price_ld_3_0_1_item">
                            <div class="price_ld_3_0_1_item__sub">
                                <div class="price_ld_3_0_1_item__top">
                                    <span>-25%</span>
                                    <div class="pic">
                                        <img class="lazy" data-src="images/price_ld_3_0_1-pic3.png" alt="">
                                    </div>
                                </div>
                                <div class="price_ld_3_0_1_item__text">
                                    <p>Niềng răng khay trong</p>
                                    <span>Chỉ còn 34 triệu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price_ld_3_0_1__box2">
                    <div class="price_ld_3_0_1__boxL">
                        <div class="price_ld_3_0_1__gia">
                            5 triệu
                        </div>
                    </div>
                    <div class="price_ld_3_0_1__boxR">
                        <div class="price_ld_3_0_1__uudai">
                            TẶNG 01 gói<br> chăm sóc răng<br> tiêu chuẩn<br> Pháp 5 triệu
                        </div>
                        <div class="price_ld_3_0_1__tragop">
                            <div class="price_ld_3_0_1__tt1 price_ld_3_0_1__tt">
                                Trả góp<br> lãi suất
                            </div>
                            <div class="price_ld_3_0_1__img">
                                <img class="lazy" data-src="images/price_ld_3_0_1-ud.png">
                            </div>
                            <div class="price_ld_3_0_1__tt2 price_ld_3_0_1__tt">
                                Chỉ từ<br> 1,25Tr/ tháng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price_ld_3_0_1_regist">
                <a class="btnReg" href="#pageReg">Đăng ký nhận ưu đãi<br>
                <i>Chỉ còn duy nhất 50 suất đăng ký</i>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>