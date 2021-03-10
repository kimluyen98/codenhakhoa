<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_5_0_0';
	$content .= '
    <section id="" class="person_ld_5_0_0">
        <div class="container">
            <div class="person_ld_5_0_0_title">15.000 người sở hữu nụ cười trắng sáng<br>
                sau khi tẩy trắng răng tại nha khoa Paris
            </div>
            <div class="person_ld_5_0_0_box">
                <div>
                    <div class="person_ld_5_0_0_item">
                        <div class="person_ld_5_0_0_item-left">
                            <img class="lazy" data-src="images/person_ld_5_0_0-pic1.jpg" alt="">
                        </div>
                        <div class="person_ld_5_0_0_item-right">
                            <div class="person_ld_5_0_0_item-pic">
                                <img class="lazy" data-src="images/person_ld_5_0_0-ts1.jpg">
                            </div>
                            <div class="person_ld_5_0_0_item-sub">
                                <p>Bích Hằng (Hải Phòng)</p> <span>Tình trạng</span><br> <b>Răng bị ố vàng do ăn nhiều
                                    thực phẩm có màu, như cafe, uống chè</b><br> <span>Chỉ định dịch vụ</span><br> <b>Sử
                                    dụng công nghệ Tẩy trắng Whitemax tại phòng khám</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_5_0_0_item">
                        <div class="person_ld_5_0_0_item-left">
                            <img class="lazy" data-src="images/person_ld_5_0_0-pic2.jpg" alt="">
                        </div>
                        <div class="person_ld_5_0_0_item-right">
                            <div class="person_ld_5_0_0_item-pic">
                                <img class="lazy" data-src="images/person_ld_5_0_0-ts2.jpg">
                            </div>
                            <div class="person_ld_5_0_0_item-sub">
                                <p>Thu Giang (Đà Nẵng)</p> <span>Tình trạng</span><br> <b>Răng bị ố vàng do tuổi
                                    tác</b><br> <span>Chỉ định dịch vụ</span><br> <b>Sử dụng công nghệ Tẩy trắng
                                    Whitemax tại phòng khám</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_5_0_0_item">
                        <div class="person_ld_5_0_0_item-left">
                            <img class="lazy" data-src="images/person_ld_5_0_0-pic3.jpg" alt="">
                        </div>
                        <div class="person_ld_5_0_0_item-right">
                            <div class="person_ld_5_0_0_item-pic">
                                <img class="lazy" data-src="images/person_ld_5_0_0-ts3.jpg">
                            </div>
                            <div class="person_ld_5_0_0_item-sub">
                                <p>Khánh Chi (Hà Nội)</p> <span>Tình trạng</span><br> <b>Răng kém sáng bóng, không được
                                    trắng</b><br> <span>Chỉ định dịch vụ</span><br> <b>Sử dụng công nghệ Tẩy trắng
                                    Whitemax tại phòng khám</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_5_0_0_item">
                        <div class="person_ld_5_0_0_item-left">
                            <img class="lazy" data-src="images/person_ld_5_0_0-pic4.jpg" alt="">
                        </div>
                        <div class="person_ld_5_0_0_item-right">
                            <div class="person_ld_5_0_0_item-pic">
                                <img class="lazy" data-src="images/person_ld_5_0_0-ts4.jpg">
                            </div>
                            <div class="person_ld_5_0_0_item-sub">
                                <p>Tuyết Nhung (HCM)</p> <span>Tình trạng</span><br> <b>Răng bị nhiễm màu nhẹ, lốm đốm,
                                    không đều màu</b><br> <span>Chỉ định dịch vụ</span><br> <b>Sử dụng công nghệ Tẩy
                                    trắng Whitemax tại phòng khám kết hợp<br> với tẩy trắng răng bằng máng tại nhà</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="person_ld_5_0_0_regist">
                <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí</a> </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>