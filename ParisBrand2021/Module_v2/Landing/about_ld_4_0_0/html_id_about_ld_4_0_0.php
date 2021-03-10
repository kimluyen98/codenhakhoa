<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/about_ld_4_0_0';
    $content .= '
    
    <section id="" class="about_ld_4_0_0">
        <div class="container">
            <div class="about_ld_4_0_0_title">Tại sao nên lựa chọn<br> trồng răng tại Paris?</div>
            <div class="about_ld_4_0_0_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_ld_4_0_0_image">
                            <img class="lazy" data-src="images/about_ld_4_0_0-pic1.jpg" alt="">
                        </div>
                        <div class="about_ld_4_0_0_regist">
                            <a class="btnReg" href="#pageReg">Đăng ký tư vấn miễn phí</a>
                        </div>
                    </div>
                    <div class="col-md-6 about_ld_4_0_0_box_right">
                        <div class="about_ld_4_0_0_item">
                            <div class="about_ld_4_0_0_item__pic">
                                <img class="lazy" data-src="images/about_ld_4_0_0-pic2.jpg" alt="">
                            </div>
                            <div class="about_ld_4_0_0_item__sub">
                                <p>Hội đồng cố vấn Pháp - Việt giàu kinh nghiệm</p>
                                <span>Chuyên gia 30 năm kinh nghiệm chuyên sâu trong giảng dạy và dịch vụ</span>
                            </div>
                        </div>
                        <div class="about_ld_4_0_0_item">
                            <div class="about_ld_4_0_0_item__pic">
                                <img class="lazy" data-src="images/about_ld_4_0_0-pic3.jpg" alt="">
                            </div>
                            <div class="about_ld_4_0_0_item__sub">
                                <p>Đội ngũ bác sĩ RHM hàng đầu Việt Nam</p>
                                <span>100% bác sĩ được đào tạo chính quy, bài bản tại các trường trong và ngoài nước</span>
                            </div>
                        </div>
                        <div class="about_ld_4_0_0_item">
                            <div class="about_ld_4_0_0_item__pic">
                                <img class="lazy" data-src="images/about_ld_4_0_0-pic4.jpg" alt="">
                            </div>
                            <div class="about_ld_4_0_0_item__sub">
                                <p>Công nghệ trồng răng Implant 4S</p>
                                <span>Công nghệ chuyển giao độc quyền từ Pháp<br> An toàn, không biến chứng, mang lại kết quả tốt nhất</span>
                            </div>
                        </div>
                        <div class="about_ld_4_0_0_item">
                            <div class="about_ld_4_0_0_item__pic">
                                <img class="lazy" data-src="images/about_ld_4_0_0-pic5.jpg" alt="">
                            </div>
                            <div class="about_ld_4_0_0_item__sub">
                                <p>Cam kết bảo hành chính hãng</p>
                                <span>Trụ Implant nhập khẩu chính hãng, hỗ trợ check mã sản phẩm<br>
                                    Chế độ bảo hành trọn đời</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>