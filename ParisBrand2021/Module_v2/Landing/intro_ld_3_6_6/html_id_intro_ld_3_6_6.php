<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_6';
	$content .= '
    <section id="" class="intro_ld_3_6_6">
        <div class="intro_ld_3_6_6_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_6-bg.jpg">
                <img src="images/intro_ld_3_6_6-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_6_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_6_6_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_6-title.png">
                                <img src="images/intro_ld_3_6_6-title-m.png" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li>Phục hình mọi loại răng xấu</li>
                            <li>Ăn nhai thoải mái</li>
                            <li>Răng sứ tự nhiên, thật hơn răng thật</li>
                        </ul>
                        <div class="intro_ld_3_6_6_regist">
                            <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn miễn phí >><br>
                               <i>Trực tiếp chuyên gia 30 năm kinh nghiệm tư vấn</i>
                            </a>
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