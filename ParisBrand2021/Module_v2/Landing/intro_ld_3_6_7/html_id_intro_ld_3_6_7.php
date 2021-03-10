<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_7';
	$content .= '
    <section id="" class="intro_ld_3_6_7">
        <div class="intro_ld_3_6_7_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_7-bg.jpg">
                <img src="images/intro_ld_3_6_7-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_7_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_6_7_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_7-title.png">
                                <img src="images/intro_ld_3_6_7-title-m.png" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li>Trả góp lãi suất 0% chỉ từ 425k/ tháng</li>
                            <li>Răng sứ tự nhiên, bền chắc trọn đời</li>
                            <li>Miễn phí thiết kế nụ cười chuẩn nhận tướng học</li>
                        </ul>
                        <div class="intro_ld_3_6_7_regist">
                            <a class="btnReg" href="#pageReg">>> Nhận ưu đãi >><br>
                                <i>Cơ hội cho 50 KH đăng ký sớm nhất</i>
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