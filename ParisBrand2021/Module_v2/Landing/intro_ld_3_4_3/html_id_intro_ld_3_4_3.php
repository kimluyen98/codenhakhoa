<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_3';
	$content .= '
    <section id="" class="intro_ld_3_4_3">
        <div class="intro_ld_3_4_3_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_3-bg.jpg">
                <img src="images/intro_ld_3_4_3-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_4_3_box">
                <div class="intro_ld_3_4_3_title">
                    <img src="images/intro_ld_3_4_3-title.png" alt="">
                </div>
                <div class="intro_ld_3_4_3_sub">
                    <p>6 tháng<br> Thay đổi rõ rệt</p>
                    <p>Trả góp<br> Lãi suất 0%</p>
                    <p>Biết kết quả<br> Sau 7 ngày</p>
                </div>
                <div class="intro_ld_3_4_3_regist">
                    <a class="btnReg" href="#pageReg">>> Nhận ưu đãi >><br>
                        <i>Duy nhất 15 người đăng ký tại đây</i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>