<?php 
    $path = '/wp-content/themes/ParisBrand2019';
    $path = $path.'/Module_v2/Landing/regist_ft_1_0_0';
	$content .= '
	<div class="regist_ft_1_0_0">
        <a href="#" class="btncallme ClickCall popup_caller">
            <i class="icon-phone-1"></i> Gọi tư vấn</a>
        <a class="btnReg" href="#pageReg">
            <i class="icon-edit"></i> Nhận ưu đãi </a>
    </div>
    ';
    $html1 = str_replace('src="','src="'.$path.'/',$content);
    echo $html = str_replace('srcset="','srcset="'.$path.'/',$html1);
?>