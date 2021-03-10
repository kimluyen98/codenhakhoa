<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/service_ld_3_0_0';
	$content .= '
    <section id="page" class="service_ld_3_0_0">
        <div class="container">
            <div class="service_ld_3_0_0_title">
                Công nghệ trồng răng implant 4s
                <p>Giải pháp hoàn hảo cho tình trạng mất răng</p>
            </div>
            <div class="service_ld_3_0_0_box">
                <div class="service_ld_3_0_0_box_left">
                    <div class="service_ld_3_0_0_box__item">
                        <div class="pic">
                            <picture>
                                <source media="(min-width:600px)" class="lazy" data-srcset="images/service_ld_3_0_0-pic1.png">
                                <img class="lazy" data-src="images/service_ld_3_0_0-pic1-m.jpg" alt="">
                            </picture>
                        </div>
                        <div class="sub">
                            <p>Thực hiện nhanh chóng chỉ trong vòng 15 phút</p>
                            <span>Áp dụng máy chụp CT Cone Beam, máng hướng dẫn đặt Implant giúp định vị chính xác</span>
                        </div>
                    </div>
                </div>
                <div class="service_ld_3_0_0_box_right">
                    <div class="service_ld_3_0_0_box__item">
                        <div class="sub">
                            <p>Hạn chế xâm lấn, không cần rạch nướu</p>
                            <span>An toàn, không xâm lấn, rạch nướu bởi có sự hỗ trợ của máy cáy ghép Implant Surgic XT Plus</span>
                        </div>
                        <div class="pic">
                            <picture>
                                <source media="(min-width:600px)" class="lazy" data-srcset="images/service_ld_3_0_0-pic2.png">
                                <img class="lazy" data-src="images/service_ld_3_0_0-pic2-m.jpg" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="service_ld_3_0_0_box__item">
                        <div class="sub">
                            <p>Rút ngắn thời gian lành thương</p>
                            <span>- Quá trình cấy ghép được bổ sung huyết tương PRP</span><br>
                            <span>- Trụ làm bằng Titan cao cấp an toàn với cơ thể, lành thương</span>
                        </div>
                        <div class="pic">
                            <picture>
                                <source media="(min-width:600px)" class="lazy" data-srcset="images/service_ld_3_0_0-pic3.png">
                                <img class="lazy" data-src="images/service_ld_3_0_0-pic3-m.jpg" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_ld_3_0_0_regist">
                <i>Công nghệ này có phù hợp với bạn?</i>
                <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn >></a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>