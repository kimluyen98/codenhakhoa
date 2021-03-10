<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/regist_ld_4_1_0';
	$content .= '
    <section id="" class="regist_ld_4_1_0">
        <div class="regist_ld_4_1_0_bg">
            <img class="lazy" data-src="images/regist_ld_4_1_0-bg.jpg" alt="">
        </div>
        <div class="container">
            <div class="regist_ld_4_1_0_box">
                <div class="row">
                    <div class="col-md-7"></div>
                    <div class="col-md-5">
                        <div class="regist_ld_4_1_0_title">
                            <img class="lazy" data-src="images/regist_ld_4_1_0-title.png" alt="">
                        </div>
                        <div class="form">
                            <article>
                                <h3>Đăng ký nhận ưu đãi</h3>
                                <div class="fct">
                                    <input id="iname" name="iname" type="text" required placeholder="*Họ và tên:...">
                                    <input type="hidden" id="gclid_field" name="gclid_field" value="">
                                    <input type="hidden" id="code_campaign" name="code_campaign" value="584128457">
                                    <input type="hidden" id="name_campaign" name="name_campaign"
                                        value="[Paris] Cấy ghép Implant 4S">
                                    <input id="imob" name="imob" type="text" required placeholder="*Số điện thoại:...">
                                    <input id="iemail" name="iemail" type="email" placeholder="Email:" style="display:none">
                                    <div class="dkbt target fbt bmk submit_s">
                                        <button type="button" onclick="ants_send_contact(this)" value="">Nhận ưu đãi ngay</button>
                                        <i>Chỉ áp dụng cho 50 suất cho KH đầu tiên</i>
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