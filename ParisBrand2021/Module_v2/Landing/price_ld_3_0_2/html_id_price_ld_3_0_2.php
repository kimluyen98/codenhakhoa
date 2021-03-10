<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/price_ld_3_0_2';
	$content .= '
    <section id="" class="price_ld_3_0_2">
        <div class="container">
            <div class="price_ld_3_0_2_title">
                TẨY TRẮNG RĂNG GIÁ TỐT NHẤT 2020
                <p>OFF đến 30% - Chỉ từ 1,75 tr</p>
            </div>
            <div class="price_ld_3_0_2_boxContent">
                <div class="price_ld_3_0_2_box">
                    <div class="price_ld_3_0_2_item">
                        <div class="price_ld_3_0_2_item__sub price_ld_3_0_2_item__subPad">
                            <div class="price_ld_3_0_2_item__top">
                                <span>-30%</span>
                            </div>
                            <div class="price_ld_3_0_2_item__text">
                                <p>2 ống thuốc<br>
                                    tại nhà </p>
                                <span>Chỉ còn 1.050k</span>
                            </div>
                        </div>

                    </div>
                    <div class="price_ld_3_0_2_item">
                        <div class="price_ld_3_0_2_item__sub price_ld_3_0_2_item__subPad">
                            <div class="price_ld_3_0_2_item__top">
                                <span>-30%</span>
                            </div>
                            <div class="price_ld_3_0_2_item__text">
                                <p>Công nghệ WhiteMax <br>
                                    tại nha khoa</p>
                                <span>Chỉ còn 1.750k</span>
                            </div>
                        </div>
                    </div>
                    <div class="price_ld_3_0_2_item">
                        <div class="price_ld_3_0_2_item__sub">
                            <div class="price_ld_3_0_2_item__top">
                                <span>-30%</span>
                            </div>
                            <div class="price_ld_3_0_2_item__text">
                                <p>Tẩy trắng răng tại nhà<br>
                                    + tẩy răng WhiteMax</p>
                                <span>Chỉ còn 2.450k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price_ld_3_0_2_regist">
                <a class="btnReg" href="#pageReg">Đăng ký ưu đãi
                </a>
            </div>
        </div>
    </section>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>