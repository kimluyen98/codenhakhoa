<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/header_ld_4_0_0';
	$content .= '
    <header class="header_ld_4_0_0">
        <div class="container">
            <div class="siteHeader">
                <div class="siteHeader__section">
                    <div class="siteHeaderLogo">
                        <a href="#page1">
                            <img src="images/logo.png?ver=13" alt="">
                        </a>
                    </div>
                    <div class="iconMid siteHeaderNav"><i class="icon-menu"></i>☰</div>
                    <a href="#" class="iconMid siteHeaderCall btnnkhotline iconn btn">✆
                        <i class="icon-phone-squared">
                        </i>

                    </a>
                    
                </div>
                <div class="siteHeader__section siteHeaderMain">
                    <a href="#page1" class="siteHeader__item-logosb"><img src="images/logo1.png?ver=13" alt=""></a>
                    <ul class="menu">
                        <li>
                            <a href="#page1" class="siteHeader__item">Giới Thiệu </a>
                        </li>
                        <li>
                            <a href="#page2" class="siteHeader__item">Ưu đãi</a>
                        </li>
                        <li>
                            <a href="#page3" class="siteHeader__item">Khách hàng</a>
                        </li>
                        <li>
                            <a href="#page4" class="siteHeader__item">Quy trình</a>
                        </li>
                        <li>
                            <a href="#page6" class="siteHeader__item">Bác sĩ</a>
                        </li>



                        <li>
                            <a href="#page5" class="siteHeader__item">Công nghệ</a>
                        </li>
                    </ul>
                    <a href="#" class="siteHeaderPhone btn btnnkhotline"><i class="icon-phone"></i>✆ 1900.6900</a>
                    <a href="#pageReg" class="siteHeaderRegist btn">Nhận ưu đãi</a>
                </div>
                <div class="siteHeader-bg"></div>
            </div>
        </div>
    </header>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>