<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/video_ld_3_1_0';
	$content .= '
    <section id="" class="video_ld_3_1_0">
        <div class="container">
            <div class="video_ld_3_1_0_title">
                KHÁCH HÀNG NÓI GÌ VỀ NHA KHOA PARIS
            </div>
            <div class="video_ld_3_1_0_box">
                <div class="video_ld_3_1_0_boxL">
                    <a href="" class="modal-clip" data-video="">
                        <img class="lazy" data-src="images/video-1.jpg">
                    </a>
                    <p>Sở hữu nụ cười tỏa sáng cùng Leo (Zero 9)</p>
                </div>
                <div class="video_ld_3_1_0_boxR">
                    <div class="video_ld_3_1_0_item">
                        <a href="" class="modal-clip" data-video="">
                            <img class="lazy" data-src="images/video-2.jpg">
                        </a>
                        <p> Nhật ký 10 tháng niềng răng của Quân "móm"</p>
                    </div>
                    <div class="video_ld_3_1_0_item">
                        <a href="" class="modal-clip" data-video="">
                            <img class="lazy" data-src="images/video-3.jpg">
                        </a>
                        <p>Tổng hợp những ca thẩm mỹ răng thành công nhất tại nha khoa Paris</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>