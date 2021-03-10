<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_4_1_0';
	$content .= '
    <section id="" class="intro_ld_4_1_0">
        <div class="intro_ld_4_1_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_4_1_0-bg.jpg">
                <img src="images/intro_ld_4_1_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_4_1_0_box">
                <div class="intro_ld_4_1_0_box1">
                    <div class="intro_ld_4_1_0_title">
                        <picture>
                            <source media="(min-width:600px)" srcset="images/intro_ld_4_1_0-title.png">
                            <img src="images/intro_ld_4_1_0-title.png" alt="">
                        </picture>
                    </div>
                    <div class="intro_ld_4_1_0_regist">
                        <a href="">Đăng ký tư vấn miễn phí</a>
                    </div>
                </div>
                <div class="intro_ld_4_1_0_box2">
                    <div>
                        <div class="intro_ld_4_1_0_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_0-icon1.png" alt="">
                            </div>
                            <div class="text">Hệ thống tiêu chuẩn<br> Pháp toàn quốc</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_0_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_0-icon2.png" alt="">
                            </div>
                            <div class="text">Chuyên gia Pháp - Việt<br> 30 năm kinh nghiệm</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_0_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_0-icon3.png" alt="">
                            </div>
                            <div class="text">Công nghệ hiện đại</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_0_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_0-icon4.png" alt="">
                            </div>
                            <div class="text">Dịch vụ chuyên nghiệp</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_0_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_0-icon5.png" alt="">
                            </div>
                            <div class="text">Bảo hành trọn đời</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>