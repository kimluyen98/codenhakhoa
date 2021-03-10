<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_4_5_0';
	$content .= '
    <section id="" class="intro_ld_4_5_0">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="intro_ld_4_5_0_box">
                        <div class="intro_ld_4_5_0_title">
                            <picture>
                                <source media="(min-width:600px)"
                                    srcset="images/intro_ld_4_5_0-title.png">
                                <img src="images/intro_ld_4_5_0-title-m.png"
                                    alt="">
                            </picture>
                        </div>
                        <div class="intro_ld_4_5_0_sub mb">
                            <div class="intro_ld_4_5_0_sub__item">
                                Trả góp lãi suất 0Đ <br> chỉ từ 400k/ tháng
                            </div>
                            <div class="intro_ld_4_5_0_sub__item">
                                Khắc phục mọi bệnh lý <br> thẩm mỹ răng tối
                                ưu
                            </div>
                            <div class="intro_ld_4_5_0_sub__item">
                                Quy trình an toàn 100%
                            </div>
                        </div>
                        <div class="form">
                            <article>
                                <h3>Đăng ký nhận ưu đãi</h3>
                                <div class="fct">
                                    <input id="iname" name="iname"
                                        type="text" required
                                        placeholder="*Họ và tên:...">
                                    <input type="hidden" id="gclid_field"
                                        name="gclid_field" value="">
                                    <input type="hidden" id="code_campaign"
                                        name="code_campaign"
                                        value="584128457">
                                    <input type="hidden" id="name_campaign"
                                        name="name_campaign"
                                        value="[Paris] Cấy ghép Implant 4S">
                                    <input id="imob" name="imob" type="text"
                                        required placeholder="*Số điện
                                        thoại:...">
                                    <input id="iemail" name="iemail"
                                        type="email" placeholder="Email:"
                                        style="display:none">
                                    <div class="dkbt target fbt bmk
                                        submit_s">
                                        <button type="button"
                                            onclick="ants_send_contact(this)"
                                            value="">Nhận ưu đãi
                                            ngay</button>
                                        <i>Trực tiếp chuyên gia RHM tư vấn
                                            miễn phí</i>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro_ld_4_5_0_sub pc">
                <div class="intro_ld_4_5_0_sub__item">
                    Trả góp lãi suất 0Đ <br> chỉ từ 400k/ tháng
                </div>
                <div class="intro_ld_4_5_0_sub__item">
                    Khắc phục mọi bệnh lý <br> thẩm mỹ răng tối ưu
                </div>
                <div class="intro_ld_4_5_0_sub__item">
                    Quy trình an toàn 100%
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>