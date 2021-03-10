<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_1';
	$content .= '
    <section id="" class="intro_ld_3_4_1">
        <div class="intro_ld_3_4_1_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_1-bg.jpg">
                <img src="images/intro_ld_3_4_1-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_4_1_box">
                <div class="intro_ld_3_4_1_title">
                    <img src="images/intro_ld_3_4_1-title.png" alt="">
                </div>
                <ul>
                    <li><i class="icon-ok-circled2"></i> 100% khí cụ nhập khẩu chính hãng Hoa Kỳ</li>
                    <li><i class="icon-ok-circled2"></i> Công nghệ 3D biết trước kết quả</li>
                    <li><i class="icon-ok-circled2"></i> Phác đồ điều trị từ chuyên gia 30 năm kinh nghiệm</li>
                </ul>
                <div class="intro_ld_3_4_1_regist">
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