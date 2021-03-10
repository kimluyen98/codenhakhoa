<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/video_ld_2_2_0';
	$content .= '
    <section id="" class="video_ld_2_2_0">
        <div class="container">
            <div class="video_ld_2_2_0_title">
                100% khách hàng hài lòng khi bọc răng sứ tại nha khoa Paris
                <p><i class="icon-left-dir-1"></i>Click xem ngay cảm nhận của khách hàng <i class="icon-right-dir-1"></i></p>
            </div>
            <div class="video_ld_2_2_0_box">
                <div class="video_ld_2_2_0_left">
                    <div class="video_ld_2_2_0_left_image">
                        <img class="lazy" data-src="images/video_ld_2_2_0-pic1.jpg" alt="">
                    </div>
                    <div class="video_ld_2_2_0_left_bottom modal-clip" data-video="">
                        <i class="icon-right-dir">▶</i><br>
                        <span>Xem video</span>
                    </div>
                    <div class="video_ld_2_2_0_left_name">Kh: Đức Dương</div>
                </div>
                <div class="video_ld_2_2_0_right">
                    <div class="video_ld_2_2_0_right_item">
                        <div class="item_video modal-clip" data-video="">
                            <img class="lazy" data-src="images/video_ld_2_2_0-pic2.jpg" alt="">
                        </div>
                        <div class="item_name"> Kh: Đức Dương </div>
                    </div>
                    <div class="video_ld_2_2_0_right_item">
                        <div class="item_video modal-clip" data-video="">
                            <img class="lazy" data-src="images/video_ld_2_2_0-pic2.jpg" alt="">
                        </div>
                        <div class="item_name"> Kh: Đức Dương </div>
                    </div>
                    <div class="video_ld_2_2_0_right_item">
                        <div class="item_video modal-clip" data-video="">
                            <img class="lazy" data-src="images/video_ld_2_2_0-pic2.jpg" alt="">
                        </div>
                        <div class="item_name"> Kh: Đức Dương </div>
                    </div>
                    <div class="video_ld_2_2_0_right_item mb">
                        <div class="item_video modal-clip" data-video="">
                            <img class="lazy" data-src="images/video_ld_2_2_0-pic2.jpg" alt="">
                        </div>
                        <div class="item_name"> Kh: Đức Dương </div>
                    </div>
                </div>
                <div class="video_ld_2_2_0_regist">
                    <a class="btnReg" href="#pageReg">Đăng ký tư vấn >></a>
                    <i>Trò chuyện cùng chuyên gia để hiểu rõ<br> hơn về tình trạng răng miệng</i>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>