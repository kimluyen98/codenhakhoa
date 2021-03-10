<?php
    /*CATE 5.0.0*/
    'id_cate_5_0_0' => array(
        'key' => 'id_cate_5_0_0',
        'name' => 'cate_5_0_0',
        'label' => 'Cate 5.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab menu*/
                'key' => 'id_cate_5_0_0_tab1',
                'label' => 'Tên chi nhánh',
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
                'key' => 'id_cate_5_0_0_tab1_sub1',
                'label' => '',
                'name' => 'info',
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
                    'layout_homeTitle' => array(
                        'key' => 'id_cate_5_0_0_tab1_sub1_layout1',
                        'name' => 'info_name',
                        'label' => 'Tab chi nhánh',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_cate_5_0_0_tab1_sub1_layout1_sub1',
                                'label' => 'Tên chi nhánh',
                                'name' => 'info_video_name',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1: Tên chi nhánh<br>
                                    Dòng 2: Ảnh slide
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
                                'rows' => 2,
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'id_cate_5_0_0_tab1_sub1_layout1_sub2',
                                'label' => 'Danh sách tin',
                                'name' => 'content1',
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
                                'elements' => array(
                                    0 => 'featured_image',
                                ),
                                'min' => '',
                                'max' => '',
                                'return_format' => 'id',
                            ),
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Thêm Thông Tin',
                'min' => '',
                'max' => '',
            ),
        
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END CATE 5.0.0*/
?>