<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_6_0_0';
	$content .= '
    <section class="person_ld_6_0_0">
        <div class="container">
            <div class="person_ld_6_0_0__title">
                15.000 khách hàng sở hữu hàm răng khỏe - đẹp <br> tại nha khoa paris mỗi năm
            </div>
            <div class="person_ld_6_0_0__box">
                <div class="person_ld_6_0_0__tab pc" id="customize-thumbnails">
                    <a class="tab">KH. Niềng răng 3d speed</a>
                    <a class="tab">KH. bọc răng sứ nano 5s</a>
                    <a class="tab">KH. trồng răng implant</a>
                    <a class="tab">KH. hàn trám răng</a>
                    <a class="tab">KH. tẩy trắng răng</a>
                    <a class="tab">KH. phẫu thuật cười hở lợi</a>
                    <a class="tab">KH. chỉnh hàm hô móm</a>
                </div>
                <div class="person_ld_6_0_0__tab mb" id="customize-thumbnails1">
                    <a class="tab">Niềng răng</a>
                    <a class="tab">Bọc răng sứ</a>
                    <a class="tab">Trồng răng</a>
                    <a class="tab">Hàn trám răng</a>
                    <a class="tab">Tẩy trắng răng</a>
                    <a class="tab">Cười hở lợi</a>
                    <a class="tab">Chỉnh hàm hô móm</a>
                </div>
                <div class="person_ld_6_0_0__img">
                    <div class="owl-carousel person_ld_6_0_0__slider">
                        <div>
                            <div class="item">
                                <div class="pic">
                                    <img class="lazy" data-src="images/per6-1.jpg" alt="">
                                </div>
                                <div class="text">Anh Hoàng - Mất 2 răng cửa - Trồng Implant 2 răng</div>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <div class="pic">
                                    <img class="lazy" data-src="images/per6-1.jpg" alt="">
                                </div>
                                <div class="text">Anh Hoàng - Mất 2 răng cửa - Trồng Implant 2 răng</div>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <div class="pic">
                                    <img class="lazy" data-src="images/per6-1.jpg" alt="">
                                </div>
                                <div class="text">Anh Hoàng - Mất 2 răng cửa - Trồng Implant 2 răng</div>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <div class="pic">
                                    <img class="lazy" data-src="images/per6-1.jpg" alt="">
                                </div>
                                <div class="text">Anh Hoàng - Mất 2 răng cửa - Trồng Implant 2 răng</div>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <div class="pic">
                                    <img class="lazy" data-src="images/per6-1.jpg" alt="">
                                </div>
                                <div class="text">Anh Hoàng - Mất 2 răng cửa - Trồng Implant 2 răng</div>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <div class="pic">
                                    <img class="lazy" data-src="images/per6-1.jpg" alt="">
                                </div>
                                <div class="text">Anh Hoàng - Mất 2 răng cửa - Trồng Implant 2 răng</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="person_ld_6_0_0__regist">
                <a href="#pageReg">Đăng ký tư vấn miễn phí</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>