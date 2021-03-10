<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_6_1_0';
	$content .= '
    <section class="person_ld_6_1_0">
        <div class="container">
            <div class="person_ld_6_1_0__title">
                Trường hợp nào nên thẩm mỹ và điều trị nha khoa?
            </div>
            <div class="person_ld_6_1_0__box">
                <ul class="person_ld_6_1_0__tab" id="person_ld_6_1_0__tab">
                    <li class="tab">Thẩm mỹ</li>
                    <li class="tab">Điều trị nha khoa</li>
                </ul>
                <div class="person_ld_6_1_0__img">
                    <div class="per61">
                        <div class="item">
                            <div class="per61-child">
                                <div class="item-child">
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-1.jpg" alt="">
                                        </div>
                                        <div class="text">Răng hô</div>
                                    </div>
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-2.jpg" alt="">
                                        </div>
                                        <div class="text">Cười hở lợi</div>
                                    </div>
                                </div>
                                <div class="item-child">
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-3.jpg" alt="">
                                        </div>
                                        <div class="text">Răng thưa, sứt mẻ</div>
                                    </div>
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-4.jpg" alt="">
                                        </div>
                                        <div class="text">Răng khấp khểnh</div>
                                    </div>
                                </div>
                                <div class="item-child">
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-5.jpg" alt="">
                                        </div>
                                        <div class="text">Răng xỉn màu</div>
                                    </div>
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-6.jpg" alt="">
                                        </div>
                                        <div class="text">Hình thể răng xấu</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="per61-child">
                                <div class="item-child">
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-1.jpg" alt="">
                                        </div>
                                        <div class="text">Răng hô</div>
                                    </div>
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-2.jpg" alt="">
                                        </div>
                                        <div class="text">Cười hở lợi</div>
                                    </div>
                                </div>
                                <div class="item-child">
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-3.jpg" alt="">
                                        </div>
                                        <div class="text">Răng thưa, sứt mẻ</div>
                                    </div>
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-4.jpg" alt="">
                                        </div>
                                        <div class="text">Răng khấp khểnh</div>
                                    </div>
                                </div>
                                <div class="item-child">
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-5.jpg" alt="">
                                        </div>
                                        <div class="text">Răng xỉn màu</div>
                                    </div>
                                    <div class="box">
                                        <div class="pic">
                                            <img class="lazy" data-src="images/per61-6.jpg" alt="">
                                        </div>
                                        <div class="text">Hình thể răng xấu</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="person_ld_6_1_0__regist">
                <a href="#pageReg">Đăng ký tư vấn miễn phí</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>