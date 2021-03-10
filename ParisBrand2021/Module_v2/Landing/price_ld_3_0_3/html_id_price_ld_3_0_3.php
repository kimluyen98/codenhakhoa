<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_3_0_3';
	$content .= '
    <section id="" class="price_ld_3_0_3">
        <div class="container">
            <div class="price_ld_3_0_3_title">
                Flash sale <p>Nhổ răng khôn CHỈ 1 TRIỆU ĐỒNG</p>
            </div>
            <div class="price_ld_3_0_3_box">
                <div class="price_ld_3_0_3_box__text">
                    <ul>
                        <li>Dịch vụ</li>
                        <li>Nhổ răng khôn mọc thẳng</li>
                        <li>Nhổ răng khôn mọc lệch<br> (Tiểu phẫu ca khó) mức 1</li>
                        <li>Nhổ răng khôn mọc lệch<br> (Tiểu phẫu ca khó) mức 2</li>
                        <li>Nhổ răng khôn mọc ngầm<br> tiểu phẫu (ca khó mức 3)</li>
                    </ul>
                </div>
                <div class="price_ld_3_0_3_box__pic">
                    <img class="lazy" data-src="images/price_ld_3_0_3-sale.png" alt="">
                </div>
            </div>
            <div class="price_ld_3_0_3_regist">
                <a class="btnReg" href="#pageReg">>> Nhận ưu đãi >><br>
                    <i>Duy nhất thứ 3 và thứ 4 trong tháng 6</i>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>