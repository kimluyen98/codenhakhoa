<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/video_ld_2_1_0';
	$content .= '
    <section id="" class="video_ld_2_1_0">
        <div class="container">
            <div class="video_ld_2_1_0_box">
                <div class="video_ld_2_1_0_title1">
                    VIDEO HÀNH TRÌNH SỞ HỮU<br> NỤ CƯỜI VẠN NGƯỜI MÊ TẠI PARIS
                </div>
                <div class="video_ld_2_1_0_left">
                    <div class="video_ld_2_1_0_left_image">
                        <picture>
                            <source media="(min-width:600px)" class="lazy" data-srcset="images/video_ld_2_1_0-pic1.jpg">
                            <img class="lazy" data-src="images/video_ld_2_1_0-pic1m.jpg" alt="">
                        </picture>
                    </div>
                    <div class="video_ld_2_1_0_left_bottom modal-clip" data-video="">
                        <i class="icon-right-dir">▶</i><br>
                        <span>Xem video</span>
                    </div>
                    <div class="video_ld_2_1_0_left_name">
                        <p>KH: HotFace Thùy Linh</p>
                        <span>12 tháng niềng răng 9630</span>
                    </div>
                </div>
                <div class="video_ld_2_1_0_right">
                    <div class="video_ld_2_1_0_title">
                        VIDEO HÀNH TRÌNH SỞ HỮU<br> NỤ CƯỜI VẠN NGƯỜI MÊ TẠI PARIS
                    </div>
                    <div class="video_ld_2_1_0_right_ct">
                        <div class="video_ld_2_1_0_right_item">
                            <div class="item_video modal-clip" data-video="">
                                <img class="lazy" data-src="images/video_ld_2_1_0-pic2.jpg" alt="">
                            </div>
                            <div class="item_name">
                                <p>KH: Hồng Quân</p>
                                <span>12 tháng niềng răng móm</span>
                            </div>
                        </div>
                        <div class="video_ld_2_1_0_right_item">
                            <div class="item_video modal-clip" data-video="">
                                <img class="lazy" data-src="images/video_ld_2_1_0-pic3.jpg" alt="">
                            </div>
                            <div class="item_name">
                                <p>KH: Gia Bảo</p>
                                <span>Hành trình niềng mắc cài sứ tự buộc</span>
                            </div>
                        </div>
                    </div>
                    <div class="video_ld_2_1_0_regist">
                        <a href="">ĐĂNG KÝ TƯ VẤN  >><br>
                        <i>Họ đã niềng răng thành công – đến lượt bạn </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>