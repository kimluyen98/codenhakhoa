<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_4_0_0';
	$content .= '
    <section id="" class="intro_ld_4_0_0">
        <div class="intro_ld_4_0_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_4_0_0-bg.jpg">
                <img src="images/intro_ld_4_0_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_4_0_0_box">
                <div class="intro_ld_4_0_0_box1">
                    <div class="intro_ld_4_0_0_title">
                        <picture>
                            <source media="(min-width:600px)" srcset="images/intro_ld_4_0_0-title.png">
                            <img src="images/intro_ld_4_0_0-title.png" alt="">
                        </picture>
                    </div>
                    <div class="mb">
                        <div class="intro_ld_4_0_0_box2">
                            <div class="intro_ld_4_0_0_box2__item">
                                <div class="pic">
                                    <img src="images/intro_ld_4_0_0-icon1.png" alt="">
                                </div>
                                <div class="text">Ăn nhai như<br> răng thật</div>
                            </div>
                            <div class="intro_ld_4_0_0_box2__item">
                                <div class="pic">
                                    <img src="images/intro_ld_4_0_0-icon2.png" alt="">
                                </div>
                                <div class="text">Bền chắc lên tới<br> 25 năm</div>
                            </div>
                            <div class="intro_ld_4_0_0_box2__item">
                                <div class="pic">
                                    <img src="images/intro_ld_4_0_0-icon3.png" alt="">
                                </div>
                                <div class="text">An toàn, không tiêu<br> xương hàm</div>
                            </div>
                            <div class="intro_ld_4_0_0_box2__item">
                                <div class="pic">
                                    <img src="images/intro_ld_4_0_0-icon4.png" alt="">
                                </div>
                                <div class="text">Bảo hành trọn đời</div>
                            </div>
                        </div>
                    </div>
                    <div class="form">
                        <article>
                            <p>Đội ngũ chuyên gia<br> implant giàu kinh nghiệm</p>
                            <div class="fct">
                                <input id="iname" name="iname" type="text" required placeholder="*Họ và tên:...">
                                <input type="hidden" id="gclid_field" name="gclid_field" value="">
                                <input type="hidden" id="code_campaign" name="code_campaign" value="584128457">
                                <input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Cấy ghép Implant 4S">
                                <input id="imob" name="imob" type="text" required placeholder="*Số điện thoại:...">
                                <input id="iemail" name="iemail" type="email" placeholder="Email:" style="display: none;">
                                <textarea placeholder="Dịch vụ quan tâm: " rows="1" cols="1" id="itext" name="itext" style="display:none"></textarea>
                                <div class="dkbt target fbt bmk submit_s" >
                                    <button type="button" onclick="ants_send_contact(this)" value=""> >> Đăng ký ngay >></button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="intro_ld_4_0_0_box2 pc">
                    <div class="intro_ld_4_0_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_0_0-icon1.png" alt="">
                        </div>
                        <div class="text">Ăn nhai như<br> răng thật</div>
                    </div>
                    <div class="intro_ld_4_0_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_0_0-icon2.png" alt="">
                        </div>
                        <div class="text">Bền chắc lên tới<br> 25 năm</div>
                    </div>
                    <div class="intro_ld_4_0_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_0_0-icon3.png" alt="">
                        </div>
                        <div class="text">An toàn, không tiêu<br> xương hàm</div>
                    </div>
                    <div class="intro_ld_4_0_0_box2__item">
                        <div class="pic">
                            <img src="images/intro_ld_4_0_0-icon4.png" alt="">
                        </div>
                        <div class="text">Bảo hành trọn đời</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>