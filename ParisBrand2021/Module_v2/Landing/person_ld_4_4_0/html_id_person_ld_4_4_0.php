<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/person_ld_4_4_0';
	$content .= '
    <section id="" class="person_ld_4_4_0">
        <div class="container">
            <div class="person_ld_4_4_0_title">
                Hệ thống chuỗi nha khoa<br> tiêu chuẩn pháp 8 cơ sở toàn quốc
                <p>Hơn 15.000 khách hàng thực hiện<br> thay đổi nụ cười đón chào cuộc sống mới</p>
            </div>
            <div class="person_ld_4_4_0_regist">
                <a class="btnReg" href="#pageReg">>> Nhận ưu đãi ngay >>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>