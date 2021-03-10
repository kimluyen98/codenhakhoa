<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_1';
	$content .= '
    <section id="" class="intro_ld_3_6_1">
        <div class="intro_ld_3_6_1_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_1-bg.jpg">
                <img src="images/intro_ld_3_6_1-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_1_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_6_1_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_1-title.png">
                                <img src="images/intro_ld_3_6_1-title-m.png" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li> Răng sứ bền đẹp trọn đời</li>
                            <li> Đa dạng kiểu dáng & màu sắc </li>
                            <li> Miễn phí thiết kế nụ cười chuẩn nhân tướng học </li>
                        </ul>
                        <div class="intro_ld_3_6_1_regist">
                            <a class="btnReg" href="#pageReg">>> Nhận ưu đãi ngay >><br>
                               <i>Miễn phí tư vấn bởi chuyên gia 30 năm kinh nghiệm</i>
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