<?php
    /*CATE VIDEO 3.0.0*/
    'id_cate_video_3_0_0' => array(
        'key' => 'id_cate_video_3_0_0',
        'name' => 'cate_video_3_0_0',
        'label' => 'Cate Video 3.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab menu*/
                'key' => 'id_cate_video_3_0_0_tab1',
                'label' => 'Menu Video',
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
                'key' => 'id_cate_video_3_0_0_tab1_sub1',
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
                        'key' => 'id_cate_video_3_0_0_tab1_sub1_layout1',
                        'name' => 'info_video',
                        'label' => 'Video dịch vụ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_cate_video_3_0_0_tab1_sub1_layout1_sub1',
                                'label' => 'Tên dịch vụ',
                                'name' => 'info_video_name',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1: Tên dịch vụ <br>
                                    Dòng 2: Số thứ tự để chọn icon
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
                                'key' => 'id_cate_video_3_0_0_tab1_sub1_layout1_sub2',
                                'label' => '',
                                'name' => 'info_video_data',
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
                                        'key' => 'id_cate_video_3_0_0_tab1_sub1_layout1_sub2_layout1',
                                        'name' => 'info_video_ct',
                                        'label' => 'Thông tin',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_cate_video_3_0_0_tab1_sub1_layout1_sub2_layout1',
                                                'label' => 'Video',
                                                'name' => 'info1',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1: Link ảnh hiển thị video lớn  (922 x 518)<br>
                                                    Dòng 2: Tiêu đề video lớn <br>
                                                    Dòng 3: Lượt xem <br>
                                                    Dòng 4: Link youtube 
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
                                                'rows' => 4,
                                                'maxlength' => '',
                                            ),
                                          
                                           
                                            // End Field Base						
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Thêm dịch vụ',
                                'min' => '',
                                'max' => '',
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
    /*END CATE VIDEO 3.0.0*/
?>