<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/intro_ld_3_4_5';
	$content .= '
    <section id="" class="intro_ld_3_4_5">
        <div class="intro_ld_3_4_5_bg">
            <picture>
                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_5-bg.jpg?ver=1">
                <img src="images/intro_ld_3_4_5-bg-m.jpg?ver=1" alt="">
            </picture>
        </div>
        <div class="container">
            <div class="intro_ld_3_4_5_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro_ld_3_4_5_title">
                            <picture>
                                <source media="(min-width:600px)" srcset="images/intro_ld_3_4_5-title.png?ver=1">
                                <img src="images/intro_ld_3_4_5-title-m.png?ver=1" alt="">
                            </picture>
                        </div>
                        <ul>
                            <li>• Trả góp lãi suất 0% trong 12 tháng</li>
                            <li>• Tặng răng sứ Titan 3,5 triệu</li>
                            <li>• Miễn phí PRP cho khách hàng</li>
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
                                    <div class="dkbt target fbt bmk submit_s">
                                    <button type="button" onclick="ants_send_contact(this)" value=""> >> Đăng ký ngay >><br> <i>Chỉ áp dụng cho 50 suất cho KH đầu tiên</i> </button>
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