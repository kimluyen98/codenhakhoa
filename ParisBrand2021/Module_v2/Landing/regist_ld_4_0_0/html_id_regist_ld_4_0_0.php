<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/regist_ld_4_0_0';
	$content .= '
    <section id="" class="regist_ld_4_0_0">
        <div class="regist_ld_4_0_0_bg">
            <picture>
                <source media="(min-width:600px)" class="lazy" data-srcset="images/regist_ld_4_0_0-bg.jpg">
                <img class="lazy" data-src="images/regist_ld_4_0_0-bg-m.jpg" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="regist_ld_4_0_0_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="regist_ld_4_0_0_title">
                            <picture>
                                <source media="(min-width:600px)" class="lazy" data-srcset="images/regist_ld_4_0_0-title.png">
                                <img class="lazy" data-src="images/regist_ld_4_0_0-title-m.png" alt="">
                            </picture>
                        </div>
                        <div class="form">
                            <article>
                                <div class="fct">
                                    <h3>ĐĂNG KÝ ĐỂ NHẬN SIÊU ƯU ĐÃI</h3>
                                    <input id="iname" name="iname" type="text" required placeholder="*Họ và tên:...">
                                    <input type="hidden" id="gclid_field" name="gclid_field" value="">
                                    <input type="hidden" id="code_campaign" name="code_campaign" value="584128457">
                                    <input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Cấy ghép Implant 4S">
                                    <input id="imob" name="imob" type="text" required placeholder="*Số điện thoại:...">
                                    <input id="iemail" name="iemail" type="email" placeholder="Email:" style="display: none;">
                                    <textarea placeholder="Dịch vụ quan tâm: " rows="1" cols="1" id="itext" name="itext" style="display:none"></textarea>
                                    <div class="dkbt target fbt bmk submit_s">
                                      <button type="button" onclick="ants_send_contact(this)" value=""> >> Đăng ký ngay >></button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>