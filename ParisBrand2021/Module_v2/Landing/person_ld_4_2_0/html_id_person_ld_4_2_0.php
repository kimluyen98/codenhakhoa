<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_4_2_0';
	$content .= '
    <section id="" class="person_ld_4_2_0">
        <div class="container">
            <div class="person_ld_4_2_0__content">
                <div class="person_ld_4_2_0_title">
                        NHỮNG TRƯỜNG HỢP NÀO NÊN BỌC RĂNG SỨ THẨM MỸ?
                    </div>
                    <div class="person_ld_4_2_0_box">
                        <div>
                            <div class="person_ld_4_2_0__item">
                                <div class="person_ld_4_2_0__pic">
                                    <img class="lazy" data-src="images/person_ld_4_2_0-pic1.jpg">
                                </div>
                                <div class="person_ld_4_2_0__ct">
                                    Răng thưa
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="person_ld_4_2_0__item">
                                <div class="person_ld_4_2_0__pic">
                                    <img class="lazy" data-src="images/person_ld_4_2_0-pic2.jpg">
                                </div>
                                <div class="person_ld_4_2_0__ct">
                                    Răng hô nhẹ
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="person_ld_4_2_0__item">
                                <div class="person_ld_4_2_0__pic">
                                    <img class="lazy" data-src="images/person_ld_4_2_0-pic3.jpg">
                                </div>
                                <div class="person_ld_4_2_0__ct">
                                    Răng móm nhẹ
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="person_ld_4_2_0__item">
                                <div class="person_ld_4_2_0__pic">
                                    <img class="lazy" data-src="images/person_ld_4_2_0-pic4.jpg">
                                </div>
                                <div class="person_ld_4_2_0__ct">
                                    Răng nhiễm màu, ố vàng
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="person_ld_4_2_0__item">
                                <div class="person_ld_4_2_0__pic">
                                    <img class="lazy" data-src="images/person_ld_4_2_0-pic5.jpg">
                                </div>
                                <div class="person_ld_4_2_0__ct">
                                    Răng sâu hỏng nặng
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="person_ld_4_2_0__item">
                                <div class="person_ld_4_2_0__pic">
                                    <img class="lazy" data-src="images/person_ld_4_2_0-pic6.jpg">
                                </div>
                                <div class="person_ld_4_2_0__ct">
                                    Răng gãy vỡ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="person_ld_4_2_0_regist">
                        <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn >><br>
                            <i>Nêu tình trạng để chuyên gia 30 năm kinh nghiệm tư vấn miễn phí</i>
                        </a>
                    </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>