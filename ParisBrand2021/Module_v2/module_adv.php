
<?php
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $slug = str_replace('/','',parse_url($actual_link)['path']);
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    $cat_item =  get_category_by_slug($slug); 
    // var_dump($cat_item);
    $id_category =  $cat_item->term_id;	
    $page_field = get_field('group_page_field','category_'.$category_id);
    $js_inline = '';
    $css_inline = '';
 
    if($page_field['site_custom']):
        foreach($page_field as $field_0){
            foreach($field_0 as $field){
            }
        } 
        include(locate_template('Module_v2/Popup/popup_advright_1_0_0/popup_advright_1_0_0.php')); 
        echo $css_inline;
    endif;
?>