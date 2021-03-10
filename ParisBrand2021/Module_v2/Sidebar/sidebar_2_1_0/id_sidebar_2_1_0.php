<?php

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
                                    Dòng 1: Link liên kết <br>
                                    Dòng 2: Tên tiêu đề chuyên mục
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

?>