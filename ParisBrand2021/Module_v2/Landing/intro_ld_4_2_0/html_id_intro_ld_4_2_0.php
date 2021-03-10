<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_4_2_0';
	$content .= '
    <section id="" class="intro_ld_4_2_0">
        <div class="intro_ld_4_2_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_4_2_0-bg.jpg">
                <img src="images/intro_ld_4_2_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_4_2_0_box">
                <div class="intro_ld_4_2_0_title">
                    <picture>
                        <source media="(min-width:600px)" srcset="images/intro_ld_4_2_0-title.png">
                        <img src="images/intro_ld_4_2_0-title-m.png" alt="">
                    </picture>
                </div>
                <div class="intro_ld_4_2_0_regist">
                    <a class="btnReg" href="#pageReg">Nhận ngay ưu đãi >></a>
                </div>
                <div class="intro_ld_4_2_0_box2">
                    <div class="intro_ld_4_2_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_2_0-icon1.png" alt="">
                        </div>
                        <div class="text">Ăn nhai tốt hơn</div>
                    </div>
                    <div class="intro_ld_4_2_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_2_0-icon2.png" alt="">
                        </div>
                        <div class="text">Ngăn ngừa<br> tiêu xương</div>
                    </div>
                    <div class="intro_ld_4_2_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_2_0-icon3.png" alt="">
                        </div>
                        <div class="text">Tồn tại độc lập</div>
                    </div>
                    <div class="intro_ld_4_2_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_2_0-icon4.png" alt="">
                        </div>
                        <div class="text">Bền chắc hơn<br> 25 năm</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>