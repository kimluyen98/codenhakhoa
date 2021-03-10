<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_4_3_0';
	$content .= '
    <section id="" class="person_ld_4_3_0">
        <div class="container">
            <div class="person_ld_4_3_0_title">5 lý do khách hàng<br> nên lựa chọn nha khoa Paris</div>
            <div class="person_ld_4_3_0_box">
                <div>
                    <div class="person_ld_4_3_0_item">
                        <div class="person_ld_4_3_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_3_0-pic1.jpg" alt="">
                        </div>
                        <div class="person_ld_4_3_0_item__text">
                            <p>Đội ngũ bác sĩ<br> chuyên môn cao</p>
                            <span>100% bác sĩ được đào tạo chuyên sâu, khéo léo, giàu kinh nghiệm</span>
                        </div>
                        <div class="person_ld_4_3_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_3_0-line.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_3_0_item">
                        <div class="person_ld_4_3_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_3_0-pic2.jpg" alt="">
                        </div>
                        <div class="person_ld_4_3_0_item__text">
                            <p>Công nghệ<br> bọc răng sứ nano 5s</p>
                            <span>An toàn, chắc khỏe không mài nhỏ</span>
                        </div>
                        <div class="person_ld_4_3_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_3_0-line.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_3_0_item">
                        <div class="person_ld_4_3_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_3_0-pic3.jpg" alt="">
                        </div>
                        <div class="person_ld_4_3_0_item__text">
                            <p>Miễn phí thiết kế nụ cười<br> chuẩn tỷ lệ vàng</p>
                            <span>Xem trước kết quả cải thiện tướng số</span>
                        </div>
                        <div class="person_ld_4_3_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_3_0-line.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_3_0_item">
                        <div class="person_ld_4_3_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_3_0-pic4.jpg" alt="">
                        </div>
                        <div class="person_ld_4_3_0_item__text">
                            <p>2 ngày<br> có hàm răng như ý</p>
                            <span>Labo thiết kế răng sứ đặt tại trung tâm. Tùy ý chỉnh sửa không cần nghỉ dưỡng</span>
                        </div>
                        <div class="person_ld_4_3_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_3_0-line.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="person_ld_4_3_0_item">
                        <div class="person_ld_4_3_0_item__pic">
                            <img class="lazy" data-src="images/person_ld_4_3_0-pic5.jpg" alt="">
                        </div>
                        <div class="person_ld_4_3_0_item__text">
                            <p>Bảo hành<br> chính hãng</p>
                            <span>Nhận thẻ bảo hành quốc tế và bảo hành uy tín đến trọn đời</span>
                        </div>
                        <div class="person_ld_4_3_0_item__line">
                            <img class="lazy" data-src="images/person_ld_4_3_0-line.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="person_ld_4_3_0_regist">
                <a class="btnReg" href="#pageReg">>> Đăng ký tư vấn <<</a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>