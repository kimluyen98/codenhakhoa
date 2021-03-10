<?php
    $type = 'Popup';
    $link_module = 'Module_v2/'.$type;
    $path = get_template_directory_uri();
	$path = $path.'/'.$link_module;
    // include(locate_template('/'.$link_module.'/'.$name.'.php')); 
    include(locate_template('/'.$link_module.'/popup_advright_1_0_0/popup_advright_1_0_0.php')); 
    echo '112222222222222222';
?>