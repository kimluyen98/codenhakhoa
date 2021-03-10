<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_4_0_0';
	$content .= '
    <section id="" class="price_ld_4_0_0">
        <div class="container">
            <div class="price_ld_4_0_0_title">
                Bảng giá niềng răng tốt nhất năm 2020
                <div class="price_ld_4_0_0_pic mb">
                    <img class="lazy" data-src="images/price_ld_4_0_0-icon_sale.png" alt="">
                </div>
            </div>
            <div class="price_ld_4_0_0_box">
                <table class="pc">
                    <tr>
                        <th>Dịch vụ</th>
                        <th>Giá Gốc</th>
                        <th>Ưu đãi</th>
                    </tr>
                    <tr>
                        <td>Nhổ chân răng, răng một chân</td>
                        <td>500.000</td>
                        <td>350.000</td>
                    </tr>
                    <tr>
                        <td>Nhổ chân răng, răng nhiều chân</td>
                        <td>700.000</td>
                        <td>490.000</td>
                    </tr>
                    <tr>
                        <td>Nhổ răng hàm nhỏ, lớn (4,5,6,7)</td>
                        <td>1.000.000</td>
                        <td>700.000</td>
                    </tr>
                    <tr>
                        <td>Nhổ răng khôn mọc thẳng</td>
                        <td>1.500.000</td>
                        <td>1.050.000</td>
                    </tr>
                    <tr>
                        <td>Nhổ răng khôn mọc lệch (tiểu phẫu ca khó) mức 1</td>
                        <td>2.000.000</td>
                        <td>1.400.000</td>
                    </tr>
                    <tr>
                        <td>Nhổ răng khôn mọc lệch (tiểu phẫu ca khó) mức 2</td>
                        <td>3.000.000</td>
                        <td>2.100.000</td>
                    </tr>
                    <tr>
                        <td>Nhổ răng khôn mọc ngầm tiểu phẫu (ca khó mức 3)</td>
                        <td>5.000.000</td>
                        <td>3.500.000</td>
                    </tr>
                </table>
                <ul class="mb">
                    <li>
                        <p>Nhổ chân răng, răng một chân</p>
                        <p><i>500.000</i> <span>--></span> 350.000</p>
                    </li>
                    <li>
                        <p>Nhổ chân răng, răng nhiều chân</p>
                        <p><i>700.000</i> <span>--></span> 490.000</p>
                    </li>
                    <li>
                        <p>Nhổ răng hàm nhỏ, lớn (4,5,6,7)</p>
                        <p><i>500.000</i> <span>--></span> 350.000</p>
                    </li>
                    <li>
                        <p>Nhổ răng khôn mọc thẳng</p>
                        <p><i>1.500.000</i> <span>--></span> 1.050.000</p>
                    </li>
                    <li>
                        <p>Nhổ răng khôn mọc lệch (tiểu phẫu ca khó) mức 1</p>
                        <p><i>2.000.000</i> <span>--></span> 1.400.000</p>
                    </li>
                    <li>
                        <p>Nhổ răng khôn mọc lệch (tiểu phẫu ca khó) mức 2</p>
                        <p><i>3.000.000</i> <span>--></span> 2.100.000</p>
                    </li>
                    <li>
                        <p>Nhổ răng khôn mọc ngầm tiểu phẫu (ca khó mức 3)</p>
                        <p><i>5.000.000</i> <span>--></span> 3.500.000</p>
                    </li>
                </ul>
            </div>
            <div class="price_ld_4_0_0_regist">
                <a class="btnReg" href="#pageReg">>> Nhận ưu đãi >><br>
                    <i>Chỉ 50 suất cho KH đầu tiên</i>
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>