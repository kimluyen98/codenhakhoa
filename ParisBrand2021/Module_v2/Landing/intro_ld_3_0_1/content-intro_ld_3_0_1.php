<?php
    $type = 'Landing';
    $link_module = 'Module_v3/'.$type.'/'.$name.'/';
    $path = get_template_directory_uri();
	$path = $path.'/'.$link_module;
    include(locate_template('/'.$link_module.'/'.$name.'.php')); 
?>




 