<?php
// Khai bao DATA
$html_id_header_ld_4_0_0 = file_get_contents("https://nhakhoaparis.vn/wp-content/themes/ParisBrand2019/Module/Landing/header_ld_4_0_0/html_id_header_ld_4_0_0.php");



// Group field
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e534d93e4dbc',
        'title' => 'Cấu hình Hệ Thống',
        'fields' => array(
            array(
                'key' => 'group_admin_control',
                'label' => '',
                'name' => 'group_admin_control',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show' => 'Hiển Thị Module',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'group_admin',
                'label' => '',
                'name' => 'group_admin',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show_header_footer' => 'Header/Footer',
                    'show_module_main' => 'Module Main',
                    'show_module_sidebar' => 'Sidebar',
                    'show_module_site' => 'WebSite',
                    'show_module_landing' => 'Landing',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_5e534e2c90dac',
                'label' => '',
                'name' => 'group_page_field',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(      
                        'key' => 'group_page_field_header',
                        'label' => 'Cài đặt Header - Footer',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'header_custom',
                        'label' => '',
                        'name' => 'header_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*HEADER*/
                            'header' => array(
                                'key' => 'header',
                                'name' => 'header',
                                'label' => 'Header Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'header_sub_fields',
                                        'label' => '',
                                        'name' => 'header_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module

                                            /*Header LD 4.0.0*/
                                            'id_header_ld_4_0_0' => array(
                                                'key' => 'id_header_ld_4_0_0',
                                                'name' => 'header_ld_4_0_0',
                                                'label' => 'Header LD 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_header_ld_4_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_header_ld_4_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Header LD 4.0.0*/                                            


                                        // End Module
                                        ),
                                        'button_label' => 'Thêm Header',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END HEADER*/ 



                            /*FOOTER*/
                            'footers' => array(
                                'key' => 'footers',
                                'name' => 'footers',
                                'label' => 'Footers Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'footers_sub_fields',
                                        'label' => '',
                                        'name' => 'footers_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*FOOTER 2.1.0*/
                                            'id_footer_ld_2_1_0' => array(
                                                'key' => 'id_footer_ld_2_1_0',
                                                'name' => 'footer_ld_2_1_0',
                                                'label' => 'Footer LD 2.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_ld_2_1_0_sub',
                                                        'label' => 'Thông Tin',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER LD 2.1.0*/   
                                            
                                            /*Regist_FT 1.0.0*/
                                            'id_regist_ft_1_0_0' => array(
                                                'key' => 'id_regist_ft_1_0_0',
                                                'name' => 'regist_ft_1_0_0',
                                                'label' => 'Regist_FT 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_ft_1_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_regist_ft_1_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist_FT 1.0.0*/

                                           

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Footer',
                                        'min' => '',
                                        'max' => '2',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END FOOTER*/ 
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                    array(      
                        'key' => 'group_page_field_body',
                        'label' => 'Cài đặt Module Main',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                
                    array(
                        'key' => 'body_custom',
                        'label' => '',
                        'name' => 'body_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module
                           
                            /*SLIDER*/
                            'slider' => array(
                                'key' => 'slider',
                                'name' => 'slider',
                                'label' => 'Slider Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'slider_sub_fields',
                                        'label' => '',
                                        'name' => 'slider_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Slider',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SLIDER*/ 
                            
                            /*SERVICE*/
                            'service' => array(
                                'key' => 'service',
                                'name' => 'service',
                                'label' => 'Service Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'service_sub_fields',
                                        'label' => '',
                                        'name' => 'service_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Service',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SERVICE*/                                     

                            /*BASIS*/
                            'basis' => array(
                                'key' => 'basis',
                                'name' => 'basis',
                                'label' => 'Basis Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'basis_sub_fields',
                                        'label' => '',
                                        'name' => 'basis_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Basis',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END BASIS*/   

                            /*DOCTOR*/
                            'doctor' => array(
                                'key' => 'doctor',
                                'name' => 'doctor',
                                'label' => 'Doctor Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'doctor_sub_fields',
                                        'label' => '',
                                        'name' => 'doctor_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Doctor',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END DOCTOR*/  

                            /*COMMIT*/
                            'commit' => array(
                                'key' => 'commit',
                                'name' => 'commit',
                                'label' => 'Commit Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'commit_sub_fields',
                                        'label' => '',
                                        'name' => 'commit_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Commit',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END COMMIT*/   

                            /*PERSON*/
                            'person' => array(
                                'key' => 'person',
                                'name' => 'person',
                                'label' => 'Person Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'person_sub_fields',
                                        'label' => '',
                                        'name' => 'person_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Person',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PERSON*/ 

                            /*INFO*/
                            'info' => array(
                                'key' => 'info',
                                'name' => 'info',
                                'label' => 'Info Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'info_sub_fields',
                                        'label' => '',
                                        'name' => 'info_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Info',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END INFO*/     

                            /*NEWS*/
                            'news' => array(
                                'key' => 'news',
                                'name' => 'news',
                                'label' => 'News Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'news_sub_fields',
                                        'label' => '',
                                        'name' => 'news_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module


                                        // End Module
                                        ),
                                        'button_label' => 'Thêm News',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END NEWS*/

                            /*PARTNER*/
                            'partner' => array(
                                'key' => 'partner',
                                'name' => 'partner',
                                'label' => 'Partner Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'partner_sub_fields',
                                        'label' => '',
                                        'name' => 'partner_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Partner',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PARTNER*/  

                            /*REGIST*/
                            'regist' => array(
                                'key' => 'regist',
                                'name' => 'regist',
                                'label' => 'Regist Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'regist_sub_fields',
                                        'label' => '',
                                        'name' => 'regist_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Regist',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END REGIST*/                                     
                        
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                      
                    array(      
                        'key' => 'group_page_field_sidebar',
                        'label' => 'Cài đặt Sidebar',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'sidebar_custom',
                        'label' => '',
                        'name' => 'sidebar_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*SIDEBAR*/
                            'sidebar' => array(
                                'key' => 'sidebar',
                                'name' => 'sidebar',
                                'label' => 'Sidebar Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'sidebar_sub_fields',
                                        'label' => '',
                                        'name' => 'sidebar_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*SIDEBAR 2.1.0*/
                                            'id_sidebar_2_1_0' => array(
                                                'key' => 'id_sidebar_2_1_0',
                                                'name' => 'sidebar_2_1_0',
                                                'label' => 'Sidebar 2.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_sidebar_2_1_0_sub',
                                                        'label' => 'Sidebar',
                                                        'name' => 'sidebar',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'id_sidebar_2_1_0_sub_layout1' => array(
                                                                'key' => 'id_sidebar_2_1_0_sub_layout1',
                                                                'name' => 'sidebar_title',
                                                                'label' => 'Tiêu Đề SideBar',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_sidebar_2_1_0_sub_layout1_sub1',
                                                                        'label' => 'Tiêu đề chuyên mục',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1: Tên tiêu đề chuyên mục <br>
                                                                            Dòng 2: Thêm "none" để sticky tiêu đề ( chỉ bổ sung phần tin tức)
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 2,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_sidebar_2_1_0_sub_layout2' => array(
                                                                'key' => 'id_sidebar_2_1_0_sub_layout2',
                                                                'name' => 'sidebar_sv',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_sidebar_2_1_0_sub_layout2_sub',
                                                                        'label' => 'Danh Sách DV',
                                                                        'name' => 'content',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_sidebar_2_1_0_sub_layout3' => array(
                                                                'key' => 'id_sidebar_2_1_0_sub_layout3',
                                                                'name' => 'sidebar_new',
                                                                'label' => 'Tin tức',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_sidebar_2_1_0_sub_layout3_sub',
                                                                        'label' => 'Tin Được Xem Nhiều',
                                                                        'name' => 'content',
                                                                        'type' => 'relationship',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'post_type' => '',
                                                                        'taxonomy' => '',
                                                                        'filters' => array(
                                                                            0 => 'search',
                                                                            1 => 'post_type',
                                                                            2 => 'taxonomy',
                                                                        ),
                                                                        'elements' => '',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                        'return_format' => 'object',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_sidebar_2_1_0_sub_layout4' => array(
                                                                'key' => 'id_sidebar_2_1_0_sub_layout4',
                                                                'name' => 'sidebar_img',
                                                                'label' => 'Hình Ảnh Trước Sau',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_sidebar_2_1_0_sub_layout4_sub1',
                                                                        'label' => 'Nội dung',
                                                                        'name' => 'sidebar_sub',
                                                                        'type' => 'repeater',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'collapsed' => '',
                                                                        'min' => 0,
                                                                        'max' => 0,
                                                                        'layout' => 'table',
                                                                        'button_label' => '',
                                                                        'sub_fields' => array(
                                                                            array(
                                                                                'key' => 'id_sidebar_2_1_0_sub_layout4_sub1_sub1',
                                                                                'label' => 'Link ảnh khách hàng',
                                                                                'name' => 'sidebar_pic',
                                                                                'type' => 'text',
                                                                                'instructions' => '
                                                                                
                                                                                ',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                            ),
                                                                            array(
                                                                                'key' => 'id_sidebar_2_1_0_sub_layout4_sub1_sub2',
                                                                                'label' => 'Thông tin khách hàng',
                                                                                'name' => 'sidebar_info',
                                                                                'type' => 'textarea',
                                                                                'instructions' => '
                                                                                    Dòng 1: Tên khách hàng <br>
                                                                                    Dòng 2: Dịch vụ khách hàng sử dụng
                                                                                ',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                                'rows' => 2,
                                                                            ),
                                                                        ),
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_sidebar_2_1_0_sub_layout5' => array(
                                                                'key' => 'id_sidebar_2_1_0_sub_layout5',
                                                                'name' => 'sidebar_banner',
                                                                'label' => 'Chương trình ưu đãi',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_sidebar_2_1_0_sub_layout5_sub1',
                                                                        'label' => 'Thông tin',
                                                                        'name' => 'sb_banner',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1: Link ảnh <br>
                                                                            Dòng 2: Link liên kết <br>
                                                                            Dòng 3: Mô tả ngắn
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SIDEBAR 2.1.0*/       


                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Sidebar',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SIDEBAR*/ 

                        
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                               
                    

                    array(      
                        'key' => 'group_page_field_landing',
                        'label' => 'Cài đặt Landing',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_landing',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),

                    array(
                        'key' => 'landing_custom',
                        'label' => '',
                        'name' => 'landing_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_landing',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*INTRO LANDING*/
                            'intro_ld' => array(
                                'key' => 'intro_ld',
                                'name' => 'intro_ld',
                                'label' => 'Intro Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'intro_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'intro_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Intro LD 3.0.0*/
                                            'id_intro_ld_3_0_0' => array(
                                                'key' => 'id_intro_ld_3_0_0',
                                                'name' => 'intro_ld_3_0_0',
                                                'label' => 'Intro LD 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.0.0*/

                                            /*Intro LD 3.0.1*/
                                            'id_intro_ld_3_0_1' => array(
                                                'key' => 'id_intro_ld_3_0_1',
                                                'name' => 'intro_ld_3_0_1',
                                                'label' => 'Intro LD 3.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_0_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_0_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.0.1*/

                                            /*Intro LD 3.0.2*/
                                            'id_intro_ld_3_0_2' => array(
                                                'key' => 'id_intro_ld_3_0_2',
                                                'name' => 'intro_ld_3_0_2',
                                                'label' => 'Intro LD 3.0.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_0_2_sub1',
                                                        'label' => 'Ảnh nền',
                                                        'name' => 'data_img',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Link ảnh pc (1920 x 700)<br>
                                                            Dòng 2: Link ảnh mb (414 x 695)
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' =>'',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_intro_ld_3_0_2_sub2',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_0_2,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.0.2*/
                                            
                                            /*Intro LD 3.1.0*/
                                            'id_intro_ld_3_1_0' => array(
                                                'key' => 'id_intro_ld_3_1_0',
                                                'name' => 'intro_ld_3_1_0',
                                                'label' => 'Intro LD 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.1.0*/
                                            
                                            /*Intro LD 3.1.1*/
                                            'id_intro_ld_3_1_1' => array(
                                                'key' => 'id_intro_ld_3_1_1',
                                                'name' => 'intro_ld_3_1_1',
                                                'label' => 'Intro LD 3.1.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_1_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_1_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.1.1*/
                                            
                                            /*Intro LD 3.1.2*/
                                            'id_intro_ld_3_1_2' => array(
                                                'key' => 'id_intro_ld_3_1_2',
                                                'name' => 'intro_ld_3_1_2',
                                                'label' => 'Intro LD 3.1.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_1_2_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_1_2,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.1.2*/
                                            
                                            /*Intro LD 3.2.0*/
                                            'id_intro_ld_3_2_0' => array(
                                                'key' => 'id_intro_ld_3_2_0',
                                                'name' => 'intro_ld_3_2_0',
                                                'label' => 'Intro LD 3.2.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_2_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_2_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.2.0*/
                                            
                                            /*Intro LD 3.3.0*/
                                            'id_intro_ld_3_3_0' => array(
                                                'key' => 'id_intro_ld_3_3_0',
                                                'name' => 'intro_ld_3_3_0',
                                                'label' => 'Intro LD 3.3.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_3_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_3_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.3.0*/
                                            
                                            /*Intro LD 3.4.0*/
                                            'id_intro_ld_3_4_0' => array(
                                                'key' => 'id_intro_ld_3_4_0',
                                                'name' => 'intro_ld_3_4_0',
                                                'label' => 'Intro LD 3.4.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.0*/

                                            /*Intro LD 3.4.1*/
                                            'id_intro_ld_3_4_1' => array(
                                                'key' => 'id_intro_ld_3_4_1',
                                                'name' => 'intro_ld_3_4_1',
                                                'label' => 'Intro LD 3.4.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.1*/

                                            /*Intro LD 3.4.2*/
                                            'id_intro_ld_3_4_2' => array(
                                                'key' => 'id_intro_ld_3_4_2',
                                                'name' => 'intro_ld_3_4_2',
                                                'label' => 'Intro LD 3.4.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_2_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_2,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.2*/

                                            /*Intro LD 3.4.3*/
                                            'id_intro_ld_3_4_3' => array(
                                                'key' => 'id_intro_ld_3_4_3',
                                                'name' => 'intro_ld_3_4_3',
                                                'label' => 'Intro LD 3.4.3',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_3_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_3,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.3*/

                                            /*Intro LD 3.4.4*/
                                            'id_intro_ld_3_4_4' => array(
                                                'key' => 'id_intro_ld_3_4_4',
                                                'name' => 'intro_ld_3_4_4',
                                                'label' => 'Intro LD 3.4.4',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_4_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_4,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.4*/

                                            /*Intro LD 3.4.5*/
                                            'id_intro_ld_3_4_5' => array(
                                                'key' => 'id_intro_ld_3_4_5',
                                                'name' => 'intro_ld_3_4_5',
                                                'label' => 'Intro LD 3.4.5',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_5_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_5,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.5*/
                                            
                                            /*Intro LD 3.5.0*/
                                            'id_intro_ld_3_5_0' => array(
                                                'key' => 'id_intro_ld_3_5_0',
                                                'name' => 'intro_ld_3_5_0',
                                                'label' => 'Intro LD 3.5.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_5_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_5_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.5.0*/

                                            /*Intro LD 3.4.6*/
                                            'id_intro_ld_3_4_6' => array(
                                                'key' => 'id_intro_ld_3_4_6',
                                                'name' => 'intro_ld_3_4_6',
                                                'label' => 'Intro LD 3.4.6',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_4_6_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_4_6,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.4.6*/

                                            /*Intro LD 3.6.0*/
                                            'id_intro_ld_3_6_0' => array(
                                                'key' => 'id_intro_ld_3_6_0',
                                                'name' => 'intro_ld_3_6_0',
                                                'label' => 'Intro LD 3.6.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.0*/

                                            /*Intro LD 3.6.1*/
                                            'id_intro_ld_3_6_1' => array(
                                                'key' => 'id_intro_ld_3_6_1',
                                                'name' => 'intro_ld_3_6_1',
                                                'label' => 'Intro LD 3.6.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.1*/

                                            /*Intro LD 3.6.2*/
                                            'id_intro_ld_3_6_2' => array(
                                                'key' => 'id_intro_ld_3_6_2',
                                                'name' => 'intro_ld_3_6_2',
                                                'label' => 'Intro LD 3.6.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_2_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_2,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.2*/

                                            /*Intro LD 3.6.3*/
                                            'id_intro_ld_3_6_3' => array(
                                                'key' => 'id_intro_ld_3_6_3',
                                                'name' => 'intro_ld_3_6_3',
                                                'label' => 'Intro LD 3.6.3',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_3_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_3,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.3*/

                                            /*Intro LD 3.6.4*/
                                            'id_intro_ld_3_6_4' => array(
                                                'key' => 'id_intro_ld_3_6_4',
                                                'name' => 'intro_ld_3_6_4',
                                                'label' => 'Intro LD 3.6.4',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_4_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_4,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.4*/

                                            /*Intro LD 3.6.5*/
                                            'id_intro_ld_3_6_5' => array(
                                                'key' => 'id_intro_ld_3_6_5',
                                                'name' => 'intro_ld_3_6_5',
                                                'label' => 'Intro LD 3.6.5',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_5_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_5,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.5*/

                                            /*Intro LD 3.6.6*/
                                            'id_intro_ld_3_6_6' => array(
                                                'key' => 'id_intro_ld_3_6_6',
                                                'name' => 'intro_ld_3_6_6',
                                                'label' => 'Intro LD 3.6.6',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_6_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_6,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.6*/

                                            /*Intro LD 3.6.7*/
                                            'id_intro_ld_3_6_7' => array(
                                                'key' => 'id_intro_ld_3_6_7',
                                                'name' => 'intro_ld_3_6_7',
                                                'label' => 'Intro LD 3.6.7',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_6_7_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_6_7,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.6.7*/

                                            /*Intro LD 3.7.0*/
                                            'id_intro_ld_3_7_0' => array(
                                                'key' => 'id_intro_ld_3_7_0',
                                                'name' => 'intro_ld_3_7_0',
                                                'label' => 'Intro LD 3.7.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_7_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_7_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.7.0*/

                                            /*Intro LD 3.8.0*/
                                            'id_intro_ld_3_8_0' => array(
                                                'key' => 'id_intro_ld_3_8_0',
                                                'name' => 'intro_ld_3_8_0',
                                                'label' => 'Intro LD 3.8.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_3_8_0_sub1',
                                                        'label' => 'Ảnh nền',
                                                        'name' => 'data_img',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Link ảnh pc (1920 x 700)<br>
                                                            Dòng 2: Link ảnh mb (414 x 695)
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' =>'',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_intro_ld_3_8_0_sub2',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_3_8_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 3.8.0*/
                                            
                                            /*Intro LD 4.0.0*/
                                            'id_intro_ld_4_0_0' => array(
                                                'key' => 'id_intro_ld_4_0_0',
                                                'name' => 'intro_ld_4_0_0',
                                                'label' => 'Intro LD 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.0.0*/
                                            
                                            /*Intro LD 4.1.0*/
                                            'id_intro_ld_4_1_0' => array(
                                                'key' => 'id_intro_ld_4_1_0',
                                                'name' => 'intro_ld_4_1_0',
                                                'label' => 'Intro LD 4.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.1.0*/

                                            /*Intro LD 4.1.1*/
                                            'id_intro_ld_4_1_1' => array(
                                                'key' => 'id_intro_ld_4_1_1',
                                                'name' => 'intro_ld_4_1_1',
                                                'label' => 'Intro LD 4.1.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_1_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_1_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.1.1*/
                                            
                                            /*Intro LD 4.2.0*/
                                            'id_intro_ld_4_2_0' => array(
                                                'key' => 'id_intro_ld_4_2_0',
                                                'name' => 'intro_ld_4_2_0',
                                                'label' => 'Intro LD 4.2.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_2_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_2_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.2.0*/    

                                            /*Intro LD 4.3.0*/
                                            'id_intro_ld_4_3_0' => array(
                                                'key' => 'id_intro_ld_4_3_0',
                                                'name' => 'intro_ld_4_3_0',
                                                'label' => 'Intro LD 4.3.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_3_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_3_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.3.0*/

                                            /*Intro LD 4.4.0*/
                                            'id_intro_ld_4_4_0' => array(
                                                'key' => 'id_intro_ld_4_4_0',
                                                'name' => 'intro_ld_4_4_0',
                                                'label' => 'Intro LD 4.4.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_4_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_4_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.4.0*/

                                            /*Intro LD 4.5.0*/
                                            'id_intro_ld_4_5_0' => array(
                                                'key' => 'id_intro_ld_4_5_0',
                                                'name' => 'intro_ld_4_5_0',
                                                'label' => 'Intro LD 4.5.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_intro_ld_4_5_0_sub1',
                                                        'label' => 'Ảnh nền',
                                                        'name' => 'data_img',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Link ảnh pc (1920 x 700)<br>
                                                            Dòng 2: Link ảnh mb (414 x 695)
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' =>'',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_intro_ld_4_5_0_sub2',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_intro_ld_4_5_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Intro LD 4.5.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Intro',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END INTRO LANDING*/                         

                            /*PERSON LANDING*/
                            'person_ld' => array(
                                'key' => 'person_ld',
                                'name' => 'person_ld',
                                'label' => 'Person Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'person_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'person_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Person LD 4.0.0*/
                                            'id_person_ld_4_0_0' => array(
                                                'key' => 'id_person_ld_4_0_0',
                                                'name' => 'person_ld_4_0_0',
                                                'label' => 'Person LD 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.0.0*/

                                            /*Person LD 4.0.1*/
                                            'id_person_ld_4_0_1' => array(
                                                'key' => 'id_person_ld_4_0_1',
                                                'name' => 'person_ld_4_0_1',
                                                'label' => 'Person LD 4.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_0_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_0_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.0.1*/

                                            /*Person LD 4.1.0*/
                                            'id_person_ld_4_1_0' => array(
                                                'key' => 'id_person_ld_4_1_0',
                                                'name' => 'person_ld_4_1_0',
                                                'label' => 'Person LD 4.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.1.0*/

                                            /*Person LD 4.3.0*/
                                            'id_person_ld_4_3_0' => array(
                                                'key' => 'id_person_ld_4_3_0',
                                                'name' => 'person_ld_4_3_0',
                                                'label' => 'Person LD 4.3.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_3_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_3_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.3.0*/

                                            /*Person LD 4.2.0*/
                                            'id_person_ld_4_2_0' => array(
                                                'key' => 'id_person_ld_4_2_0',
                                                'name' => 'person_ld_4_2_0',
                                                'label' => 'Person LD 4.2.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_2_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_2_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.2.0*/

                                            /*Person LD 4.4.0*/
                                            'id_person_ld_4_4_0' => array(
                                                'key' => 'id_person_ld_4_4_0',
                                                'name' => 'person_ld_4_4_0',
                                                'label' => 'Person LD 4.4.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_4_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_4_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.4.0*/

                                            /*Person LD 4.5.0*/
                                            'id_person_ld_4_5_0' => array(
                                                'key' => 'id_person_ld_4_5_0',
                                                'name' => 'person_ld_4_5_0',
                                                'label' => 'Person LD 4.5.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_4_5_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_4_5_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 4.5.0*/
                                            
                                            /*Person LD 5.0.0*/
                                            'id_person_ld_5_0_0' => array(
                                                'key' => 'id_person_ld_5_0_0',
                                                'name' => 'person_ld_5_0_0',
                                                'label' => 'Person LD 5.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_5_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_5_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 5.0.0*/

                                             /*Person LD 6.0.0*/
                                            'id_person_ld_6_0_0' => array(
                                                'key' => 'id_person_ld_6_0_0',
                                                'name' => 'person_ld_6_0_0',
                                                'label' => 'Person LD 6.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_6_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_6_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 6.0.0*/
                                            
                                            /*Person LD 6.1.0*/
                                            'id_person_ld_6_1_0' => array(
                                                'key' => 'id_person_ld_6_1_0',
                                                'name' => 'person_ld_6_1_0',
                                                'label' => 'Person LD 6.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_ld_6_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_person_ld_6_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person LD 6.1.0*/
                                            
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Person',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PERSON LANDING*/ 

                            /*INFO LANDING*/
                            'info_ld' => array(
                                'key' => 'info_ld',
                                'name' => 'info_ld',
                                'label' => 'Info Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'info_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'info_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                                /*Info LD 4.0.0*/
                                                'id_info_ld_4_0_0' => array(
                                                    'key' => 'id_info_ld_4_0_0',
                                                    'name' => 'info_ld_4_0_0',
                                                    'label' => 'Info LD 4.0.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_info_ld_4_0_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_info_ld_4_0_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Info LD 4.0.0*/

                                                /*Info LD 4.0.1*/
                                                'id_info_ld_4_0_1' => array(
                                                    'key' => 'id_info_ld_4_0_1',
                                                    'name' => 'info_ld_4_0_1',
                                                    'label' => 'Info LD 4.0.1',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_info_ld_4_0_1_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_info_ld_4_0_1,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Info LD 4.0.1*/

                                                /*Info LD 4.0.2*/
                                                'id_info_ld_4_0_2' => array(
                                                    'key' => 'id_info_ld_4_0_2',
                                                    'name' => 'info_ld_4_0_2',
                                                    'label' => 'Info LD 4.0.2',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_info_ld_4_0_2_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_info_ld_4_0_2,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Info LD 4.0.2*/

                                                /*Info LD 4.0.3*/
                                                'id_info_ld_4_0_3' => array(
                                                    'key' => 'id_info_ld_4_0_3',
                                                    'name' => 'info_ld_4_0_3',
                                                    'label' => 'Info LD 4.0.3',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_info_ld_4_0_3_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_info_ld_4_0_3,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Info LD 4.0.3*/

                                                /*Info LD 4.1.0*/
                                                'id_info_ld_4_1_0' => array(
                                                    'key' => 'id_info_ld_4_1_0',
                                                    'name' => 'info_ld_4_1_0',
                                                    'label' => 'Info LD 4.1.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_info_ld_4_1_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_info_ld_4_1_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Info LD 4.1.0*/

                                                /*Info LD 4.1.1*/
                                                'id_info_ld_4_1_1' => array(
                                                    'key' => 'id_info_ld_4_1_1',
                                                    'name' => 'info_ld_4_1_1',
                                                    'label' => 'Info LD 4.1.1',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_info_ld_4_1_1_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_info_ld_4_1_1,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Info LD 4.1.1*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Info',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END INFO LANDING*/ 

                            /*COUNTDOWN LANDING*/
                            'countdown_ld' => array(
                                'key' => 'countdown_ld',
                                'name' => 'countdown_ld',
                                'label' => 'Countdown Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'countdown_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'countdown_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Countdown',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END COUNTDOWN LANDING*/ 

                            /*VIDEO LANDING*/
                            'video_ld' => array(
                                'key' => 'video_ld',
                                'name' => 'video_ld',
                                'label' => 'Video Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'video_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'video_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Video LD 2.0.0*/
                                            'id_video_ld_2_0_0' => array(
                                                'key' => 'id_video_ld_2_0_0',
                                                'name' => 'video_ld_2_0_0',
                                                'label' => 'Video LD 2.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_ld_2_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_video_ld_2_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Video LD 2.0.0*/

                                            /*Video LD 2.1.0*/
                                            'id_video_ld_2_1_0' => array(
                                                'key' => 'id_video_ld_2_1_0',
                                                'name' => 'video_ld_2_1_0',
                                                'label' => 'Video LD 2.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_ld_2_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_video_ld_2_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Video LD 2.1.0*/

                                            /*Video LD 2.2.0*/
                                            'id_video_ld_2_2_0' => array(
                                                'key' => 'id_video_ld_2_2_0',
                                                'name' => 'video_ld_2_2_0',
                                                'label' => 'Video LD 2.2.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_ld_2_2_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_video_ld_2_2_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Video LD 2.2.0*/

                                            /*Video LD 3.0.0*/
                                            'id_video_ld_3_0_0' => array(
                                                'key' => 'id_video_ld_3_0_0',
                                                'name' => 'video_ld_3_0_0',
                                                'label' => 'Video LD 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_ld_3_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_video_ld_3_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Video LD 3.0.0*/
                                            /*Video LD 3.1.0*/
                                            'id_video_ld_3_1_0' => array(
                                                'key' => 'id_video_ld_3_1_0',
                                                'name' => 'video_ld_3_1_0',
                                                'label' => 'Video LD 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_ld_3_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_video_ld_3_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Video LD 3.1.0*/
                                            
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm video',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END VIDEO LANDING*/ 

                            /*STEP LANDING*/
                            'step_ld' => array(
                                'key' => 'step_ld',
                                'name' => 'step_ld',
                                'label' => 'step Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'step_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'step_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                                /*Step LD 4.0.0*/
                                                'id_step_ld_4_0_0' => array(
                                                    'key' => 'id_step_ld_4_0_0',
                                                    'name' => 'step_ld_4_0_0',
                                                    'label' => 'Step LD 4.0.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_4_0_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_4_0_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Step LD 4.0.0*/

                                                /*Step LD 4.0.1*/
                                                'id_step_ld_4_0_1' => array(
                                                    'key' => 'id_step_ld_4_0_1',
                                                    'name' => 'step_ld_4_0_1',
                                                    'label' => 'Step LD 4.0.1',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_4_0_1_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_4_0_1,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Step LD 4.0.1*/

                                                /*Step LD 4.0.3*/
                                                'id_step_ld_4_0_3' => array(
                                                    'key' => 'id_step_ld_4_0_3',
                                                    'name' => 'step_ld_4_0_3',
                                                    'label' => 'Step LD 4.0.3',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_4_0_3_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_4_0_3,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Step LD 4.0.3*/

                                                /*Step LD 4.0.2*/
                                                'id_step_ld_4_0_2' => array(
                                                    'key' => 'id_step_ld_4_0_2',
                                                    'name' => 'step_ld_4_0_2',
                                                    'label' => 'Step LD 4.0.2',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_4_0_2_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_4_0_2,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Step LD 4.0.2*/

                                                /*Step LD 4.1.0*/
                                                'id_step_ld_4_1_0' => array(
                                                    'key' => 'id_step_ld_4_1_0',
                                                    'name' => 'step_ld_4_1_0',
                                                    'label' => 'Step LD 4.1.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_4_1_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_4_1_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END Step LD 4.1.0*/

                                                /*step ld 5.0.0*/
                                                'id_step_ld_5_0_0' => array(
                                                    'key' => 'id_step_ld_5_0_0',
                                                    'name' => 'step_ld_5_0_0',
                                                    'label' => 'step_ld 5.0.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_5_0_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_5_0_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*end step_ld 5.0.0*/

                                                /*step ld 5.1.0*/
                                                'id_step_ld_5_1_0' => array(
                                                    'key' => 'id_step_ld_5_1_0',
                                                    'name' => 'step_ld_5_1_0',
                                                    'label' => 'step_ld 5.1.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_step_ld_5_1_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_step_ld_5_1_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*end step_ld 5.1.0*/
                                    
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm step',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END STEP LANDING*/ 

                            /*DOCTOR LANDING*/
                            'doctor_ld' => array(
                                'key' => 'doctor_ld',
                                'name' => 'doctor_ld',
                                'label' => 'Doctor Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'doctor_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'doctor_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Doctor LD 3.0.0*/
                                            'id_doctor_ld_3_0_0' => array(
                                                'key' => 'id_doctor_ld_3_0_0',
                                                'name' => 'doctor_ld_3_0_0',
                                                'label' => 'Doctor LD 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_doctor_ld_3_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_doctor_ld_3_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Doctor LD 3.0.0*/

                                            /*Doctor LD 3.1.0*/
                                            'id_doctor_ld_3_1_0' => array(
                                                'key' => 'id_doctor_ld_3_1_0',
                                                'name' => 'doctor_ld_3_1_0',
                                                'label' => 'Doctor LD 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_doctor_ld_3_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_doctor_ld_3_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Doctor LD 3.1.0*/

                                            /*Doctor LD 3.1.1*/
                                            'id_doctor_ld_3_1_1' => array(
                                                'key' => 'id_doctor_ld_3_1_1',
                                                'name' => 'doctor_ld_3_1_1',
                                                'label' => 'Doctor LD 3.1.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_doctor_ld_3_1_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_doctor_ld_3_1_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Doctor LD 3.1.1*/
                                            /*Doctor LD 5.0.0*/
                                            'id_doctor_ld_5_0_0' => array(
                                                'key' => 'id_doctor_ld_5_0_0',
                                                'name' => 'doctor_ld_5_0_0',
                                                'label' => 'Doctor LD 5.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_doctor_ld_5_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_doctor_ld_5_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Doctor LD 5.0.0*/
                                            
                                             /*Doctor LD 5.1.0*/
                                            'id_doctor_ld_5_1_0' => array(
                                                'key' => 'id_doctor_ld_5_1_0',
                                                'name' => 'doctor_ld_5_1_0',
                                                'label' => 'Doctor LD 5.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_doctor_ld_5_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_doctor_ld_5_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END doctor LD 5.1.0*/
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Doctor',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END DOCTOR LANDING*/ 

                            /*ABOUT LANDING*/
                            'about_ld' => array(
                                'key' => 'about_ld',
                                'name' => 'about_ld',
                                'label' => 'About Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'about_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'about_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*About LD 4.0.0*/
                                            'id_about_ld_4_0_0' => array(
                                                'key' => 'id_about_ld_4_0_0',
                                                'name' => 'about_ld_4_0_0',
                                                'label' => 'About LD 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_about_ld_4_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_about_ld_4_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END About LD 4.0.0*/                                            
    
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm About',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END ABOUT LANDING*/

                            /*SERVICE LANDING*/
                            'service_ld' => array(
                                'key' => 'service_ld',
                                'name' => 'service_ld',
                                'label' => 'service Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'service_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'service_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Service LD 3.0.0*/
                                            'id_service_ld_3_0_0' => array(
                                                'key' => 'id_service_ld_3_0_0',
                                                'name' => 'service_ld_3_0_0',
                                                'label' => 'Service LD 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_ld_3_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_service_ld_3_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service LD 3.0.0*/ 
                                            
                                            /*Service LD 3.1.0*/
                                            'id_service_ld_3_1_0' => array(
                                                'key' => 'id_service_ld_3_1_0',
                                                'name' => 'service_ld_3_1_0',
                                                'label' => 'Service LD 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_ld_3_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_service_ld_3_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service LD 3.1.0*/

                                            /*Service LD 3.2.0*/
                                            'id_service_ld_3_2_0' => array(
                                                'key' => 'id_service_ld_3_2_0',
                                                'name' => 'service_ld_3_2_0',
                                                'label' => 'Service LD 3.2.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_ld_3_2_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_service_ld_3_2_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service LD 3.2.0*/

                                            /*Service LD 3.3.0*/
                                            'id_service_ld_3_3_0' => array(
                                                'key' => 'id_service_ld_3_3_0',
                                                'name' => 'service_ld_3_3_0',
                                                'label' => 'Service LD 3.3.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_ld_3_3_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_service_ld_3_3_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service LD 3.3.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm service',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SERVICE LANDING*/  

                            /*REGIST LANDING*/
                            'regist_ld' => array(
                                'key' => 'regist_ld',
                                'name' => 'regist_ld',
                                'label' => 'regist Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'regist_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'regist_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Regist LD 4.0.0*/
                                            'id_regist_ld_4_0_0' => array(
                                                'key' => 'id_regist_ld_4_0_0',
                                                'name' => 'regist_ld_4_0_0',
                                                'label' => 'Regist LD 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_ld_4_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_regist_ld_4_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist LD 4.0.0*/ 
                                            
                                            /*Regist LD 4.0.1*/
                                            'id_regist_ld_4_0_1' => array(
                                                'key' => 'id_regist_ld_4_0_1',
                                                'name' => 'regist_ld_4_0_1',
                                                'label' => 'Regist LD 4.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_ld_4_0_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_regist_ld_4_0_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist LD 4.0.1*/

                                            /*Regist LD 4.0.2*/
                                            'id_regist_ld_4_0_2' => array(
                                                'key' => 'id_regist_ld_4_0_2',
                                                'name' => 'regist_ld_4_0_2',
                                                'label' => 'Regist LD 4.0.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_ld_4_0_2_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_regist_ld_4_0_2,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist LD 4.0.2*/

                                            /*Regist LD 4.1.0*/
                                            'id_regist_ld_4_1_0' => array(
                                                'key' => 'id_regist_ld_4_1_0',
                                                'name' => 'regist_ld_4_1_0',
                                                'label' => 'Regist LD 4.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_ld_4_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_regist_ld_4_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist LD 4.1.0*/

                                            /*Regist ld 4.0.3*/
                                            'id_regist_ld_4_0_3' => array(
                                                'key' => 'id_regist_ld_4_0_3',
                                                'name' => 'regist_ld_4_0_3',
                                                'label' => 'Regist ld 4.0.3',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_ld_4_0_3_sub1',
                                                        'label' => 'Ảnh nền',
                                                        'name' => 'data_img',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Link ảnh pc (1920 x 700)<br>
                                                            Dòng 2: Link ảnh mb (414 x 695)
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' =>'',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_regist_ld_4_0_3_sub2',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_regist_ld_4_0_3,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist ld 4.0.3*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm regist',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END REGIST LANDING*/                             

                            /*PRICE LANDING*/
                            'price_ld' => array(
                                'key' => 'price_ld',
                                'name' => 'price_ld',
                                'label' => 'price Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'price_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'price_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*Price LD 3.0.0*/
                                            'id_price_ld_3_0_0' => array(
                                                'key' => 'id_price_ld_3_0_0',
                                                'name' => 'price_ld_3_0_0',
                                                'label' => 'Price LD 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_3_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_3_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 3.0.0*/   
                                            
                                            /*Price LD 3.0.1*/
                                            'id_price_ld_3_0_1' => array(
                                                'key' => 'id_price_ld_3_0_1',
                                                'name' => 'price_ld_3_0_1',
                                                'label' => 'Price LD 3.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_3_0_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_3_0_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 3.0.1*/

                                            /*Price LD 3.0.3*/
                                            'id_price_ld_3_0_3' => array(
                                                'key' => 'id_price_ld_3_0_3',
                                                'name' => 'price_ld_3_0_3',
                                                'label' => 'Price LD 3.0.3',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_3_0_3_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_3_0_3,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 3.0.3*/

                                            /*Price LD 3.1.0*/
                                            'id_price_ld_3_1_0' => array(
                                                'key' => 'id_price_ld_3_1_0',
                                                'name' => 'price_ld_3_1_0',
                                                'label' => 'Price LD 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_3_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_3_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 3.1.0*/

                                            /*Price LD 3.1.1*/
                                            'id_price_ld_3_1_1' => array(
                                                'key' => 'id_price_ld_3_1_1',
                                                'name' => 'price_ld_3_1_1',
                                                'label' => 'Price LD 3.1.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_3_1_1_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_3_1_1,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 3.1.1*/

                                            /*Price LD 4.0.0*/
                                            'id_price_ld_4_0_0' => array(
                                                'key' => 'id_price_ld_4_0_0',
                                                'name' => 'price_ld_4_0_0',
                                                'label' => 'Price LD 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_4_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_4_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 4.0.0*/

                                            /*Price LD 3.0.2*/
                                            'id_price_ld_3_0_2' => array(
                                                'key' => 'id_price_ld_3_0_2',
                                                'name' => 'price_ld_3_0_2',
                                                'label' => 'Price LD 3.0.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_3_0_2_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_3_0_2,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 3.0.2*/

                                            /*Price LD 5.0.0*/
                                            'id_price_ld_5_0_0' => array(
                                                'key' => 'id_price_ld_5_0_0',
                                                'name' => 'price_ld_5_0_0',
                                                'label' => 'Price LD 5.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_5_0_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_5_0_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 5.0.0*/
                                            /*Price LD 5.1.0*/
                                            'id_price_ld_5_1_0' => array(
                                                'key' => 'id_price_ld_5_1_0',
                                                'name' => 'price_ld_5_1_0',
                                                'label' => 'Price LD 5.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_price_ld_5_1_0_sub1',
                                                        'label' => 'Code HTML',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => $html_id_price_ld_5_1_0,
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 15,
                                                        'new_lines' => '',
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Price LD 5.1.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm price',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PRICE LANDING*/   

                            /*SKILL LANDING*/
                            'skill_ld' => array(
                                'key' => 'skill_ld',
                                'name' => 'skill_ld',
                                'label' => 'Skill Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'skill_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'skill_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Skill',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SKILL LANDING*/ 

                            /*BASIS LANDING*/
                            'basis_ld' => array(
                                'key' => 'basis_ld',
                                'name' => 'basis_ld',
                                'label' => 'Basis Landing',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'basis_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'basis_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                                 /*Basis LD 1.0.0*/
                                                'id_basis_ld_1_0_0' => array(
                                                    'key' => 'id_basis_ld_1_0_0',
                                                    'name' => 'basis_ld_1_0_0',
                                                    'label' => 'Basis LD 1.0.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_basis_ld_1_0_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_basis_ld_1_0_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*Basis LD 1.1.0*/
                                                'id_basis_ld_1_1_0' => array(
                                                    'key' => 'id_basis_ld_1_1_0',
                                                    'name' => 'basis_ld_1_1_0',
                                                    'label' => 'Basis LD 1.1.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_basis_ld_1_1_0_sub1',
                                                            'label' => 'Code HTML',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => $html_id_basis_ld_1_1_0,
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 15,
                                                            'new_lines' => '',
                                                        ),

                                                    
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END basis LD 1.1.0*/
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Basis',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END BASIS LANDING*/   
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),     
                    
                    array(      
                        'key' => 'group_page_field_site',
                        'label' => 'Cài đặt Website',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),

                    array(
                        'key' => 'site_custom',
                        'label' => '',
                        'name' => 'site_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*CHECKING*/
                            'checking' => array(
                                'key' => 'checking',
                                'name' => 'checking',
                                'label' => 'Checking Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    
                                    array(
                                        'key' => 'checking_sub_fields',
                                        'label' => '',
                                        'name' => 'checking_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module                                          

                                            /*CHECKING LANDING 1.0.0*/
                                            'id_checking_ld_1_0_0' => array(
                                                'key' => 'id_checking_ld_1_0_0',
                                                'name' => 'checking_ld_1_0_0',
                                                'label' => 'Checking Landing 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_checking_ld_1_0_tab1',
                                                        'label' => 'Tiêu Đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_checking_ld_1_0_tab1_sub',
                                                        'label' => 'Code',
                                                        'name' => 'data',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 10,
                                                        'new_lines' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END CHECKING LANDING 1.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END CHECKING*/    


                            /*POPUP LANDING*/
                            'popup_ld' => array(
                                'key' => 'popup_ld',
                                'name' => 'popup_ld',
                                'label' => 'Popup',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'popup_ld_sub_fields',
                                        'label' => '',
                                        'name' => 'popup_ld_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module


   
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Popup',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END POPUP LANDING*/

                            /*POPUP ADV RIGHT 1.0.1*/
                            'id_popup_advright_1_0_1' => array(
                                'key' => 'id_popup_advright_1_0_1',
                                'name' => 'popup_advright_1_0_1',
                                'label' => 'Popup Advright 1.0.1',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        /* Tab tiêu đề*/
                                        'key' => 'id_popup_advright_1_0_1_tab1',
                                        'label' => 'Popup Right',
                                        'name' => '',
                                        'type' => 'tab',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'placement' => 'top',
                                        'endpoint' => 0,
                                    ),
                                    array(
                                        'key' => 'id_popup_advright_1_0_1_tab1_sub',
                                        'label' => 'Cập nhật POPUP theo chỉ dẫn',
                                        'name' => 'data',
                                        'type' => 'textarea',
                                        'instructions' => '
                                            Dòng 1 : Tiêu đề Popup <br>
                                            Dòng 2 : Link Popup <br>
                                            Dòng 3 : Link ảnh hiển thị Desktop (300 x 250px) <br>
                                            Dòng 4 : Link ảnh hiển thị Mobile (320px x 50px)
                                            
                                        ',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'maxlength' => '',
                                        'rows' => 6,
                                        'new_lines' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END POPUP ADV RIGHT 1.0.1*/
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),                     
                  
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-cau-hinh-website',
                ),
            ),
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;
?>