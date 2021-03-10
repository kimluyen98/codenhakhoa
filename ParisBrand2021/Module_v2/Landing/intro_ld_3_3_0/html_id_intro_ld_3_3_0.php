<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_3_0';
	$content .= '
    <section id="" class="intro_ld_3_3_0">
        <div class="intro_ld_3_3_0_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_3_0-bg.jpg">
                <img src="images/intro_ld_3_3_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_3_0_box">
                <div class="intro_ld_3_3_0_title">
                    <picture>
                        <source media="(min-width:600px)" srcset="images/intro_ld_3_3_0-title.png">
                        <img src="images/intro_ld_3_3_0-title.png" alt="">
                    </picture>
                </div>
                <ul>
                    <li><i class="icon-ok-circled2"></i>Ăn nhai thoải mái</li>
                    <li><i class="icon-ok-circled2"></i>Hạn chế tiêu xương</li>
                    <li><i class="icon-ok-circled2"></i>Thẩm mỹ cao, vệ sinh tốt</li>
                </ul>
                <div class="form">
                    <article>
                        <div class="fct">
                            <input id="iname" name="iname" type="text" required placeholder="*Họ và tên:...">
                            <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <input type="hidden" id="code_campaign" name="code_campaign" value="584128457">
                            <input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Cấy ghép Implant 4S">
                            <input id="imob" name="imob" type="text" required placeholder="*Số điện thoại:...">
                            <input id="iemail" name="iemail" type="email" placeholder="Email:" style="display: none;">
                            <textarea placeholder="Dịch vụ quan tâm: " rows="1" cols="1" id="itext" name="itext" style="display:none"></textarea>
                            <div class="dkbt target fbt bmk submit_s" >
                                <button type="button" onclick="ants_send_contact(this)" value=""> >> Đăng ký ngay >><br><i>Chuyên gia 30 năm kinh nghiệm tư vấn</i></button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>