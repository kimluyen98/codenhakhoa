<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_2';
	$content .= '
    <section id="" class="intro_ld_3_4_2">
        <div class="intro_ld_3_4_2_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_2-bg.jpg">
                <img src="images/intro_ld_3_4_2-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_4_2_box">
                <div class="intro_ld_3_4_2_title">
                    <img src="images/intro_ld_3_4_2-title.png" alt="">
                </div>
                <div class="intro_ld_3_4_2_sub">
                    <ul>
                        <li><i class="icon-ok-circled2"></i> Khay trong Kline Đức</li>
                        <li>* Sai lệch khớp cắn nhẹ</li>
                        <li>* Chỉ từ 34 Triệu</li>
                    </ul>
                    <ul>
                        <li><i class="icon-ok-circled2"></i> Invisalign Mỹ</li>
                        <li>* Sai lệch mức độ nặng</li>
                        <li>* Chỉ từ 64 Triệu</li>
                    </ul>
                </div>
                <div class="intro_ld_3_4_2_regist">
                    <a href="">>> Nhận ưu đãi >><br>
                        <i>Duy nhất 15 người đăng ký tại đây</i>
                    </a>
                </div>
            </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>