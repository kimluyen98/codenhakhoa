<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_0';
	$content .= '
    <section id="" class="intro_ld_3_6_0">
        <div class="intro_ld_3_6_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_0-bg.jpg">
                <img src="images/intro_ld_3_6_0-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_0_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_6_0_title">
                            <img src="images/intro_ld_3_6_0-title.png" alt="">
                        </div>
                        <ul>
                            <li> Siêu mỏng nhẹ</li>
                            <li> Đẹp tự nhiên </li>
                            <li> Bảo tồn răng gốc </li>
                        </ul>
                        <div class="intro_ld_3_6_0_regist">
                            <a class="btnReg" href="#pageReg">>> Nhận ưu đãi ngay >><br>
                               <i> Duy nhất cho 50 KH đầu tiên</i>
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