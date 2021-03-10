<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_0_2';
	$content .= '
    <div id="" class="intro_ld_3_0_2">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="intro_ld_3_0_2_box">
                        <div class="intro_ld_3_0_2_title">
                            <img src="images/intro_ld_3_0_2-title.png" alt="">
                        </div>
                        <ul>
                            <li>* GS. TS. 30 năm kinh nghiệm thực hiện</li>
                            <li>* 3 dịch vụ chuyên sâu:<br> Trồng răng implant, niềng răng, Bọc răng sứ.</li>
                            <li>* Quy trình an toàn, hiện đại, bảo hành uy tín trọn đời</li>
                        </ul>
                        <div class="form">
                            <article>
                                <h3>Đăng ký nhận ưu đãi</h3>
                                <div class="fct">
                                    <input id="iname" name="iname" type="text" required placeholder="*Họ và tên:...">
                                    <input type="hidden" id="gclid_field" name="gclid_field" value="">
                                    <input type="hidden" id="code_campaign" name="code_campaign" value="584128457">
                                    <input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Cấy ghép Implant 4S">
                                    <input id="imob" name="imob" type="text" required placeholder="*Số điện thoại:...">
                                    <input id="iemail" name="iemail" type="email" placeholder="Email:" style="display:none">
                                    <div class="dkbt target fbt bmk submit_s">
                                        <button type="button" onclick="ants_send_contact(this)" value="">Nhận ưu đãi ngay</button>
                                        <i>Trực tiếp chuyên gia RHM tư vấn miễn phí</i>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>