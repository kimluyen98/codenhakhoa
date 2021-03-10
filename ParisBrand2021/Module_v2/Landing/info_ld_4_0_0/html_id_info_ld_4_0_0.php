<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/info_ld_4_0_0';
	$content .= '
    <section id="" class="info_ld_4_0_0">
        <div class="info_ld_4_0_0_bg">
            <picture>
                <source media="(min-width:600px)" class="lazy" data-srcset="images/info_ld_4_0_0-bg.jpg">
                <img class="lazy" data-src="images/info_ld_4_0_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="info_ld_4_0_0_box">
                <div class="info_ld_4_0_0_title">
                    Trường hợp nào cần <br> trồng răng implant?
                </div>
                <ul>
                    <li><i class="icon-ok-circled2"></i> Đủ 18 tuổi trở lên</li>
                    <li><i class="icon-ok-circled2"></i> Đủ mật độ xương hàm</li>
                    <li><i class="icon-ok-circled2"></i> Sức khỏe tốt</li>
                </ul>
                <div class="info_ld_4_0_0_regist">
                    <i>Liệu bạn có phù hợp để trồng răng?</i>
                    <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí</a>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>