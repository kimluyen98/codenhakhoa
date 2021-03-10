<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_4_1_1';
	$content .= '
    <section id="" class="intro_ld_4_1_1">
        <div class="intro_ld_4_1_1_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_4_1_1-bg.jpg">
                <img src="images/intro_ld_4_1_1-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_4_1_1_box">
                <div class="intro_ld_4_1_1_box1">
                    <div class="intro_ld_4_1_1_title">
                        <picture>
                            <source media="(min-width:600px)" srcset="images/intro_ld_4_1_1-title.png">
                            <img src="images/intro_ld_4_1_1-title-m.png" alt="">
                        </picture>
                    </div>
                    <div class="intro_ld_4_1_1_sub">
                        >> Không cần đặt cọc - Nhận ngay ưu đãi khủng <<
                    </div>
                    <div class="intro_ld_4_1_1_regist">
                        <a class="btnReg" href="#pageReg">>> Đăng ký ngay >> <br> 
                            <i>Chỉ còn 45 suất cuối cùng</i>
                        </a>
                    </div>
                </div>
                <div class="intro_ld_4_1_1_box2">
                    <div>
                        <div class="intro_ld_4_1_1_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_1-icon1.png" alt="">
                            </div>
                            <div class="text">Răng trắng đều</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_1_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_1-icon2.png" alt="">
                            </div>
                            <div class="text">Ăn nhai tốt</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_1_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_1-icon3.png" alt="">
                            </div>
                            <div class="text">An toàn</div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_1_1_box2__item">
                            <div class="pic">
                                <img src="images/intro_ld_4_1_1-icon4.png" alt="">
                            </div>
                            <div class="text">Bền chắc</div>
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