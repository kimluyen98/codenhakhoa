<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_7_0';
	$content .= '
    <section id="" class="intro_ld_3_7_0">
        <div class="intro_ld_3_7_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_7_0-bg.jpg">
                <img src="images/intro_ld_3_7_0-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_7_0_box">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Hết xỉn màu, hô, móm</li>
                            <li>Răng sáng đẹp không tì vết</li>
                            <li>Cứng chắc gấp 20 lần răng thật</li>
                        </ul>
                        <div class="intro_ld_3_7_0_regist">
                            <a class="btnReg" href="#pageReg">>> Đăng ký ngay >><br>
                               <i>Chỉ còn 45 suất cuối cùng</i>
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