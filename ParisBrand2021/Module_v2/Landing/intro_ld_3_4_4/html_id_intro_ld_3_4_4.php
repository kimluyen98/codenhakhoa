<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_4';
	$content .= '
    <section id="" class="intro_ld_3_4_4">
        <div class="intro_ld_3_4_4_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_4-bg.jpg">
                <img src="images/intro_ld_3_4_4-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_4_4_box">
                <div class="intro_ld_3_4_4_title">
                    <img src="images/intro_ld_3_4_4-title.png" alt="">
                </div>
                <ul>
                    <li><i class="icon-ok-circled2"></i> Biết trước kết quả sau 7 ngày</li>
                    <li><i class="icon-ok-circled2"></i> Răng đều đẹp chuẩn khớp cắn</li>
                    <li><i class="icon-ok-circled2"></i> Phác đồ từ chuyên gia 30 năm KN</li>
                </ul>
                <div class="intro_ld_3_4_4_regist">
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