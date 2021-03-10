<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_6';
	$content .= '
    <section id="" class="intro_ld_3_4_6">
        <div class="intro_ld_3_4_6_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/NR_tragop-bg.jpg">
                <img src="images/NR_tragop-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_4_6_box">
                <div class="intro_ld_3_4_6_title">
                    <img src="images/NR_tragop-title.png" alt="">
                </div>
                <ul>
                    <li><i class="icon-ok-circled2"></i> Công nghệ 3D biết trước kết quả</li>
                    <li><i class="icon-ok-circled2"></i> Rút ngắn 6 tháng đeo niềng</li>
                    <li><i class="icon-ok-circled2"></i> Phác đồ điều trị chuẩn quốc tế</li>
                </ul>
                <div class="intro_ld_3_4_6_regist">
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