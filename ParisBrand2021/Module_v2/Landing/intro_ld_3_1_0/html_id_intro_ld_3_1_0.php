<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_1_0';
	$content .= '
    <section id="" class="intro_ld_3_1_0">
        <div class="intro_ld_3_1_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_1_0-bg.jpg">
                <img src="images/intro_ld_3_1_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_1_0_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_1_0_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_1_0-title.png">
                                <img src="images/intro_ld_3_1_0-title.png" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li>Thực hiện trong 15 phút</li>
                            <li>Ăn nhai thoải mái</li>
                            <li>Bền chắc trọn đời</li>
                        </ul>
                        <div class="intro_ld_3_1_0_regist">
                            <a class="btnReg" href="#pageReg">Nhận ưu đãi ngay >></a>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>