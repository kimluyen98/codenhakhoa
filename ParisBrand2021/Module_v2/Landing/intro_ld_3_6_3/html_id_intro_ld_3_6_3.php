<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_3';
	$content .= '
    <section id="" class="intro_ld_3_6_3">
        <div class="intro_ld_3_6_3_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_3-bg.jpg">
                <img src="images/intro_ld_3_6_3-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_3_box">
                <div class="row">
                    <div class="col-md-7">
                        <div class="intro_ld_3_6_3_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_3-title.png?ver=1">
                                <img src="images/intro_ld_3_6_3-title-m.png?ver=1" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li>Hệ thống nha khoa toàn quốc</li>
                            <li>Công nghệ Nano 5S tiên tiến chuẩn Pháp</li>
                            <li>Miễn phí thiết kế nụ cười chuẩn tỷ lệ vàng</li>
                            <li>Hơn 15.0000 nụ cười đẹp được kiến tạo mỗi năm</li>
                        </ul>
                        <div class="intro_ld_3_6_3_regist">
                            <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn miễn phí >><br>
                               <i>Trực tiếp chuyên gia Pháp - Việt thăm khám và tư vấn</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>