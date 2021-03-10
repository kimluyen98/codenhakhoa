<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_1_1';
	$content .= '
    <section id="" class="intro_ld_3_1_1">
        <div class="intro_ld_3_1_1_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_1_1-bg.jpg">
                <img src="images/intro_ld_3_1_1-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_1_1_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_1_1_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_1_1-title.png">
                                <img src="images/intro_ld_3_1_1-title.png" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li><i class="icon-ok-circled2"></i> Răng giả chắc khỏe</li>
                            <li><i class="icon-ok-circled2"></i> Ngăn ngừa tiêu xương</li>
                            <li><i class="icon-ok-circled2"></i> Độ bền cao, thẩm mỹ tốt</li>
                        </ul>
                        <div class="intro_ld_3_1_1_mau mb">
                            <img src="images/intro_ld_3_1_1-mau.png" alt="">
                        </div>
                        <div class="intro_ld_3_1_1_regist">
                            <a class="btnReg" href="#pageReg">Nhận ưu đãi ngay >></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="intro_ld_3_1_1_mau pc">
                            <img src="images/intro_ld_3_1_1-mau.png" alt="">
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