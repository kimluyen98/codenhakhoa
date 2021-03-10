<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_8_0';
	$content .= '
    <div id="" class="intro_ld_3_8_0">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="intro_ld_3_8_0_box">
                        <div class="intro_ld_3_8_0_title">
                            <img src="images/nho-rang-8-title.png" alt="">
                        </div>
                        <ul>
                            <li>Hết xỉn màu, hô, móm</li>
                            <li>Răng sáng đẹp không tì vết</li>
                            <li>Cứng chắc gấp 20 lần răng thật</li>
                            <li>Cứng chắc gấp 20 lần răng thật</li>
                        </ul>
                        <div class="intro_ld_3_8_0_regist">
                            <a class="btnReg" href="#pageReg">>> Đăng ký
                                ngay >><br>
                            </a>
                            <i>Chỉ còn 45 suất cuối cùng</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>