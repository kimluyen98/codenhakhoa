<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_4_4_0';
	$content .= '
    <section id="" class="intro_ld_4_4_0">
        <div class="intro_ld_4_4_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_4_4_0-bg.jpg">
                <img src="images/intro_ld_4_4_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_4_4_0_box">
                <div class="intro_ld_4_4_0_top">
                    <div class="intro_ld_4_4_0_title">
                        <img src="images/intro_ld_4_4_0-title.png" alt="">
                    </div>
                    <div class="intro_ld_4_4_0_regist">
                        <a class="btnReg" href="#pageReg">>> Đăng ký ngay >></a>
                        <i>OFF 25% duy nhất tháng 5</i>
                    </div>
                </div>
                <div class="intro_ld_4_4_0_box1">
                    <div>
                        <div class="intro_ld_4_4_0_item">
                            <div class="intro_ld_4_4_0_item__pic">
                                <img src="images/intro_ld_4_4_0-pic1.jpg" alt="">
                            </div>
                            <div class="intro_ld_4_4_0_item__sub">
                                Phác đồ 3 bước, biết trước<br> kết quả sau 7 ngày
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_4_0_item">
                            <div class="intro_ld_4_4_0_item__pic">
                                <img src="images/intro_ld_4_4_0-pic2.jpg" alt="">
                            </div>
                            <div class="intro_ld_4_4_0_item__sub">
                                Điều trị 3 giai đoạn<br> Rút ngắn 6 tháng niềng răng
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="intro_ld_4_4_0_item">
                            <div class="intro_ld_4_4_0_item__pic">
                                <img src="images/intro_ld_4_4_0-pic3.jpg" alt="">
                            </div>
                            <div class="intro_ld_4_4_0_item__sub">
                                100% mắc cài & khay trong<br> nhập khẩu chính hãng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>