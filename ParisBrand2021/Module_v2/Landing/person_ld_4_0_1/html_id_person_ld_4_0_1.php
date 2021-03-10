<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_4_0_1';
	$content .= '
    <section id="" class="person_ld_4_0_1">
        <div class="container">
            <div class="person_ld_4_0_1_title">
                HƠN 15.000 KHÁCH HÀNG<br> SỞ HỮU HÀM RĂNG ĐẸP TẠI NHA KHOA PARIS
            </div>
            <div class="person_ld_4_0_1_box">
                <div class="">
                    <div class="person_ld_4_0_1__item person_ld_4_0_1__item1">
                        <div class="person_ld_4_0_1__pic">
                            <img class="lazy" data-src="images/person_ld_4_0_1-pic1.jpg">
                        </div>
                        <div class="person_ld_4_0_1__ct">
                            <span>Bọc răng sứ </span> cho răng sứt mẻ, gãy vỡ
                        </div>
                    </div>
                    <div class="person_ld_4_0_1__item">
                        <div class="person_ld_4_0_1__pic">
                            <img class="lazy" data-src="images/person_ld_4_0_1-pic4.jpg">
                        </div>
                        <div class="person_ld_4_0_1__ct">
                            <span>Bọc răng sứ </span>cho răng khấp khểnh
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="person_ld_4_0_1__item person_ld_4_0_1__item1">
                        <div class="person_ld_4_0_1__pic">
                            <img class="lazy" data-src="images/person_ld_4_0_1-pic2.jpg">
                        </div>
                        <div class="person_ld_4_0_1__ct">
                            <span>Bọc răng sứ</span>cho răng sâu
                        </div>
                    </div>
                    <div class="person_ld_4_0_1__item">
                        <div class="person_ld_4_0_1__pic">
                            <img class="lazy" data-src="images/person_ld_4_0_1-pic5.jpg">
                        </div>
                        <div class="person_ld_4_0_1__ct">
                            <span>Bọc răng sứ</span> cho răng hô
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="person_ld_4_0_1__item person_ld_4_0_1__item1">
                        <div class="person_ld_4_0_1__pic">
                            <img class="lazy" data-src="images/person_ld_4_0_1-pic3.jpg">
                        </div>
                        <div class="person_ld_4_0_1__ct">
                            <span>Bọc răng sứ</span> cho răng xỉn màu
                        </div>
                    </div>
                    <div class="person_ld_4_0_1__item">
                        <div class="person_ld_4_0_1__pic">
                            <img class="lazy" data-src="images/person_ld_4_0_1-pic6.jpg">
                        </div>
                        <div class="person_ld_4_0_1__ct">
                            <span>Bọc răng sứ</span>cho răng móm
                        </div>
                    </div>
                </div>
            </div>
            <div class="person_ld_4_0_1_regist">
                <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn >></a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>