<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_5_0';
	$content .= '
    <section id="" class="intro_ld_3_5_0">
        <div class="intro_ld_3_5_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_5_0-bg.jpg">
                <img src="images/intro_ld_3_5_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_5_0_box">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="intro_ld_3_5_0_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_5_0-title.png">
                                <img src="images/intro_ld_3_5_0-title-m.png" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li><i class="icon-ok-circled2"></i> Phục hình nhanh chóng</li>
                            <li><i class="icon-ok-circled2"></i> Ăn nhai thoải mái</li>
                            <li><i class="icon-ok-circled2"></i> Bền chắc vĩnh viễn</li>
                            <li><i class="icon-ok-circled2"></i> An toàn với cơ thể</li>
                        </ul>
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
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>