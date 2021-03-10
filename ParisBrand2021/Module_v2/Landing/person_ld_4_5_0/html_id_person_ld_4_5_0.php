<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_4_5_0';
	$content .= '
    <section id="" class="person_ld_4_5_0">
        <div class="container">
            <div class="person_ld_4_5_0_title">TẨY TRẮNG RĂNG WHITEMAX<span>
                    TẠI NHA KHOA PARIS</span>
                <p>GIẢI PHÁP NHANH NHẤT CHO NỤ CƯỜI TRÁNG SÁNG TỰ TIN</p>
            </div>
            <div class="person_ld_4_5_0_box">
                <div>
                    <div class="person_ld_4_5_0_item">
                        <div class="person_ld_4_5_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_5_0-pic1.jpg"
                                alt="">
                        </div>
                        <div class="person_ld_4_5_0_item__text">
                            <p>Công nghệ tẩy trắng chuyển giao độc quyền
                                chuẩn Pháp</p>
                        </div>
                        <div class="person_ld_4_5_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_5_0-line.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_5_0_item">
                        <div class="person_ld_4_5_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_5_0-pic2.jpg"
                                alt="">
                        </div>
                        <div class="person_ld_4_5_0_item__text">
                            <p>Trắng sáng tự nhiên
                                bật 3+ tone</p>
                        </div>
                        <div class="person_ld_4_5_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_5_0-line.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_5_0_item">
                        <div class="person_ld_4_5_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_5_0-pic3.jpg"
                                alt="">
                        </div>
                        <div class="person_ld_4_5_0_item__text">
                            <p>Hiệu quả nhanh
                                bền 3-5 năm</p>
                        </div>
                        <div class="person_ld_4_5_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_5_0-line.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_5_0_item">
                        <div class="person_ld_4_5_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_5_0-pic4.jpg"
                                alt="">
                        </div>
                        <div class="person_ld_4_5_0_item__text">
                            <p>Không ê buốt
                                không hại men răng</p>
                        </div>
                        <div class="person_ld_4_5_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_5_0-line.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_5_0_item">
                        <div class="person_ld_4_5_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_5_0-pic5.jpg"
                                alt="">
                        </div>
                        <div class="person_ld_4_5_0_item__text">
                            <p>Đội ngũ chuyên gia 30 năm KN trực tiếp thăm
                                khám và điều trị</p>
                        </div>
                        <div class="person_ld_4_5_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_5_0-line.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="person_ld_4_5_0_regist">
                <a class="btnReg" href="#pageReg">Đăng ký ngay</a> </div>
            <div class="person_ld_4_5_0_deal">
                Nhận tư vấn miễn phí từ chuyên gia
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>