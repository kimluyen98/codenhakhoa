<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/video_ld_2_0_0';
	$content .= '
    <section id="" class="video_ld_2_0_0">
        <div class="container">
            <div class="video_ld_2_0_0_box">
                <div class="video_ld_2_0_0_left">
                    <div class="video_ld_2_0_0_left_image">
                        <img class="lazy" data-src="images/video_ld_2_0_0-pic1.jpg" alt="">
                    </div>
                    <div class="video_ld_2_0_0_left_bottom modal-clip" data-video="">
                        <i class="icon-right-dir">▶</i><br>
                        <span>Xem video</span>
                    </div>
                    <div class="video_ld_2_0_0_left_name">
                        <p>Kh: Đức Dương</p>
                        <span>Phục hình hàm răng</span>
                    </div>
                </div>
                <div class="video_ld_2_0_0_right">
                    <div class="video_ld_2_0_0_title">
                        Khách hàng cấy ghép <br> implant thành công
                    </div>
                    <div class="video_ld_2_0_0_right_ct">
                        <div class="video_ld_2_0_0_right_item">
                            <div class="item_video modal-clip" data-video="">
                                <img class="lazy" data-src="images/video_ld_2_0_0-pic2.jpg" alt="">
                            </div>
                            <div class="item_name">
                                <p>Kh: Đức Dương</p>
                                <span>Phục hình răng hàm 56, 57</span>
                            </div>
                        </div>
                        <div class="video_ld_2_0_0_right_item">
                            <div class="item_video modal-clip" data-video="">
                                <img class="lazy" data-src="images/video_ld_2_0_0-pic2.jpg" alt="">
                            </div>
                            <div class="item_name">
                                <p>Kh: Đức Dương</p>
                                <span>Phục hình răng hàm 56, 57</span>
                            </div>
                        </div>
                        <div class="video_ld_2_0_0_right_item">
                            <div class="item_video modal-clip" data-video="">
                                <img class="lazy" data-src="images/video_ld_2_0_0-pic2.jpg" alt="">
                            </div>
                            <div class="item_name">
                                <p>Kh: Đức Dương</p>
                                <span>Phục hình răng hàm 56, 57</span>
                            </div>
                        </div>
                        <div class="video_ld_2_0_0_right_item">
                            <div class="item_video modal-clip" data-video="">
                                <img class="lazy" data-src="images/video_ld_2_0_0-pic2.jpg" alt="">
                            </div>
                            <div class="item_name">
                                <p>Kh: Đức Dương</p>
                                <span>Phục hình răng hàm 56, 57</span>
                            </div>
                        </div>
                    </div>
                    <div class="video_ld_2_0_0_regist">
                        <a href="">Đăng ký tư vấn >></a>
                        <i>Trò chuyện cùng chuyên gia để hiểu rõ<br> hơn về tình trạng răng miệng</i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>