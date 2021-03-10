<?php
    $module_id =  get_option('mfpd_option_name');

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$slug = str_replace('/','',parse_url($actual_link)['path']);
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$cat_item =  get_category_by_slug($slug); 
	// var_dump($cat_item);
	$id_category =  $cat_item->term_id;	
    $sidebar = get_field('group_page_field',$module_id);
    $sidebar_cate = get_field('group_page_field','category_'.$category_id);


    // Json Build
    $json = new BuildJson;

    $css_inline = '';
    if ($sidebar_cate["sidebar_custom"]):
        $page_json = json_decode($json->read('page-term_'.$category_id));
        
        foreach($sidebar_cate as $sidebar_cate_0):
            foreach($sidebar_cate_0 as $sidebar_cate_1):
                foreach($sidebar_cate_1 as  $sidebar_cate_2):
                foreach($sidebar_cate_2 as  $field):
                    $name = $field['acf_fc_layout'];
                    if(in_array($name,$arrcheck)):
                        $check = 1;
                    else:
                        array_push($arrcheck,$name);
                        $check = 0;
                    endif;                   
                    include(locate_template('template-sidebar_v2/content-'.$name.'.php'));

                endforeach;
                endforeach;
            endforeach;
        endforeach;
        echo $css_inline;
    else:
        $page_json = json_decode($json->read('page-'.$module_id)); 
        foreach($sidebar as $field_1):
            foreach($field_1 as $field_2):
                foreach($field_2 as $field_3):
                    foreach($field_3 as $key => $field):
                        $name = $field['acf_fc_layout'];
                
                        if(in_array($name,$arrcheck)):
                            $check = 1;
                        else:
                            array_push($arrcheck,$name);
                            $check = 0;
                        endif;
                       
                        include(locate_template('template-sidebar_v2/content-'.$name.'.php'));

                    endforeach;
                endforeach;
            endforeach;
        endforeach;
        echo $css_inline;

    endif;
    
?>
