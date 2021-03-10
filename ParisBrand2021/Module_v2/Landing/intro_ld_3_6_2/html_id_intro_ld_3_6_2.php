<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_6_2';
	$content .= '
    <section id="" class="intro_ld_3_6_2">
        <div class="intro_ld_3_6_2_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_6_2-bg.jpg">
                <img src="images/intro_ld_3_6_2-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_6_2_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_6_2_title">
                            <img src="images/intro_ld_3_6_2-title.png" alt="">
                        </div>
                        <ul>
                            <li>• Răng sứ tự nhiên</li>
                            <li>• Không lo biến chứng </li>
                            <li>• Thách thức mọi loại răng xấu </li>
                            <li><b>Duy nhất tháng 5</b></li>
                        </ul>
                        <div class="intro_ld_3_6_2_regist">
                            <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn miễn phí >><br>
                               <i>Chỉ còn 45 suất ưu đãi cuối cùng</i>
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