<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_4_1_0';
	$content .= '
    <section id="" class="person_ld_4_1_0">
        <div class="container">
            <div class="person_ld_4_1_0_title">
                Hơn 30.000 khách hàng<br> niềng răng ở Paris thành công
            </div>
            <div class="person_ld_4_1_0_box">
                <div class="person_ld_4_1_0_box_pc">
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic1.jpg" alt="">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic4.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic2.jpg" alt="">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic5.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic3.jpg" alt="">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic6.jpg" alt="">
                    </div>
                </div>
                <div class="person_ld_4_1_0_box_mb">
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic1.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic2.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic3.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic4.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic5.jpg" alt="">
                    </div>
                    <div class="person_ld_4_1_0_item">
                        <img class="lazy" data-src="images/person_ld_4_1_0-pic6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="person_ld_4_1_0_regist">
                <a href="">
                    <i>Họ đã niềng răng thành công - đến lượt bạn</i><br> Đăng ký ngay
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>