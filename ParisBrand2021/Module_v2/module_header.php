<?php
    $module_id =  get_option('mfpd_option_name');

    // Json Build
    $json = new BuildJson;
    $page_json = json_decode($json->read('page-'.$module_id));    

    $page_field = get_field('page_field',$module_id);
    // Đường dẫn đến theme
    $path = get_template_directory_uri();
    $arrcheck = array();
    $css_inline = '';
    $js_inline = '';

    foreach( $page_field as $field_0):  
    	foreach( $field_0 as $field_1):  
    		foreach( $field_1 as $field):   
                $name = $field['acf_fc_layout'];

                if(in_array($name,$arrcheck)){
                    $check = 1;
                }else{
                    array_push($arrcheck,$name);
                    $check = 0;
                }
                include(locate_template('tmp-header_v2/content-'.$name.'.php'));					
    		endforeach;
    	endforeach;
    endforeach;    

?>

