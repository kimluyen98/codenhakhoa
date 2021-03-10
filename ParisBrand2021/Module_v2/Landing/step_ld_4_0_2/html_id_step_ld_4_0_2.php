<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/step_ld_4_0_2';
	$content .= '
    <section id="" class="step_ld_4_0_2">
        <div class="container">
            <div class="step_ld_4_0_2_title">
                QUY TRÌNH BỌC RĂNG SỨ AN TOÀN VÔ KHUẨN
            </div>
            <div class="step_ld_4_0_2_block">
                <div class="step_ld_4_0_2_box">
                    <div>
                        <div class="step_ld_4_0_2__item">
                            <div class="step_ld_4_0_2__number step_ld_4_0_2__bgText1">
                                <span>01</span>
                            </div>
                            <div class="step_ld_4_0_2__ct step_ld_4_0_2__bgText1">
                                <p>Thăm khám và tư vấn</p>
                            </div>
                            <div class="step_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_2-pic1.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step_ld_4_0_2__item">
                            <div class="step_ld_4_0_2__number step_ld_4_0_2__bgText2">
                                <span>02</span>
                            </div>
                            <div class="step_ld_4_0_2__ct step_ld_4_0_2__bgText2">
                                <p>Vệ sinh răng miệng và gây tê</p>
                            </div>
                            <div class="step_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_2-pic2.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step_ld_4_0_2__item">
                            <div class="step_ld_4_0_2__number step_ld_4_0_2__bgText3 ">
                                <span>03</span>
                            </div>
                            <div class="step_ld_4_0_2__ct step_ld_4_0_2__bgText3">
                                <p>Sửa soạn cùi răng</p>
                            </div>
                            <div class="step_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_2-pic3.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step_ld_4_0_2__item">
                            <div class="step_ld_4_0_2__number step_ld_4_0_2__bgText4">
                                <span>04</span>
                            </div>
                            <div class="step_ld_4_0_2__ct step_ld_4_0_2__bgText4">
                                <p>Lấy dấu răng thật và gắn răng tạm</p>
                            </div>
                            <div class="step_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_2-pic4.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step_ld_4_0_2__item">
                            <div class="step_ld_4_0_2__number step_ld_4_0_2__bgText5">
                                <span>05</span>
                            </div>
                            <div class="step_ld_4_0_2__ct step_ld_4_0_2__bgText5">
                                <p>Tạo màng Seal
                                    Protect bảo vệ
                                    và lắp răng sứ
                                </p>
                            </div>
                            <div class="step_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_2-pic5.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step_ld_4_0_2__item">
                            <div class="step_ld_4_0_2__number step_ld_4_0_2__bgText6">
                                <span>06</span>
                            </div>
                            <div class="step_ld_4_0_2__ct step_ld_4_0_2__bgText6">
                                <p>
                                    Phủ lớp
                                    Nano Silver
                                    trắng bóng
                                </p>
                            </div>
                            <div class="step_ld_4_0_2__pic">
                            <img class="lazy" data-src="images/step_ld_4_0_2-pic6.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step_ld_4_0_2_regist btnReg" href="#pageReg">
                <a href="">Đăng ký tư vấn miễn phí</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>