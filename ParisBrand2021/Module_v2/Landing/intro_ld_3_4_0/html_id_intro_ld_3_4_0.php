<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_0';
	$content .= '
    <section id="" class="intro_ld_3_4_0">
        <div class="intro_ld_3_4_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_0-bg.jpg">
                <img src="images/intro_ld_3_4_0-bg-m.jpg" alt="">
            </picture>
            <div class="container">
                <div class="intro_ld_3_4_0_box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="intro_ld_3_4_0_title">
                                <picture>
                                    <source media="(min-width:600px)" srcset="images/intro_ld_3_4_0-title.png">
                                    <img src="images/intro_ld_3_4_0-title.png" alt="">
                                </picture>
                            </div>
                            <ul>
                                <li><i class="icon-ok-circled2"></i> Thanh toán chỉ từ 1,2 triệu/tháng</li>
                                <li><i class="icon-ok-circled2"></i> Thời hạn 12 tháng</li>
                                <li><i class="icon-ok-circled2"></i> Thủ tục đơn giản</li>
                                <li><i class="icon-ok-circled2"></i> Tặng mão sứ trị giá 3,5 triệu</li>
                            </ul>
                            <div class="intro_ld_3_4_0_regist">
                                <a class="btnReg" href="#pageReg">Nhận ưu đãi ngay >></a>
                                <i>Tư vấn miễn phí thủ tục trả góp</i>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>