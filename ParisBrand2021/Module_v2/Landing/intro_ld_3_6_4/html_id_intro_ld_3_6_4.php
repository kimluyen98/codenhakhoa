<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_4';
	$content .= '
    <section id="" class="intro_ld_3_6_4">
        <div class="intro_ld_3_6_4_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_4-bg.jpg">
                <img src="images/intro_ld_3_6_4-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_4_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_6_4_title">
                            <img src="images/intro_ld_3_6_4-title.png" alt="">
                        </div>
                        <ul>
                            <li>Không mài nhỏ răng</li>
                            <li>Công nghệ gây tê 4.0 không ê buốt</li>
                            <li>Bảo hành uy tín trọn đời</li>
                        </ul>
                        <div class="intro_ld_3_6_4_regist">
                            <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn miễn phí >><br>
                               <i>Trực tiếp chuyên gia Pháp - Việt thăm khám và tư vấn</i>
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