<?php
    /*CATE IMAGE 2.0.0*/
    'id_cate_image_2_0_0' => array(
        'key' => 'id_cate_image_2_0_0',
        'name' => 'cate_image_2_0_0',
        'label' => 'Cate Image 2.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                'key' => 'id_cate_image_2_0_0_tab1_sub1',
                'label' => 'Ảnh khách hàng',
                'name' => 'title',
                'type' => 'textarea',
                'instructions' => '
                    Dòng 1: Tiêu đề màn bác sĩ <br>
                    Dòng 2: Tiêu đề màn khách hàng
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
                'key' => 'id_cate_image_2_0_0_tab1_sub2',
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
                        'key' => 'id_cate_image_2_0_0_tab1_sub2_layout1',
                        'name' => 'info_doctor',
                        'label' => 'Bác sĩ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_cate_image_2_0_0_tab1_sub2_layout1_sub1',
                                'label' => 'Thông tin chi tiết',
                                'name' => 'info_doctor_content',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1: Chức danh <br>
                                    Dòng 2: Tên bác sĩ <br>
                                    Dòng 3: Link ảnh desktop (750 x 624) <br>
                                    Dòng 4: Link ảnh mobile (750 x 624) <br>
                                    Dòng 5: Link ảnh thumb (117 x 118)
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
                                'rows' => 5,
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'id_cate_image_2_0_0_tab1_sub2_layout1_sub2',
                                'label' => 'Mô tả',
                                'name' => 'sub',
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
                            array(
                                'key' => 'id_cate_image_2_0_0_tab1_sub2_layout1_sub3',
                                'label' => '',
                                'name' => 'info_image_data',
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
                                        'key' => 'id_cate_image_2_0_0_tab1_sub2_layout1_sub3_layout1',
                                        'name' => 'info_KH',
                                        'label' => 'Thông tin khách hàng',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_cate_image_2_0_0_tab1_sub2_layout1_sub3_layout1_sub',
                                                'label' => 'Khách hàng',
                                                'name' => 'info_KH_content',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1: Link ảnh hiển thị<br>
                                                    Dòng 2: Tên khách hàng <br>
                                                    Dòng 3: Dịch vụ khách hàng đã làm
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
                                                'rows' => 3,
                                                'maxlength' => '',
                                            ),
                                          
                                           
                                            // End Field Base						
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Khách hàng',
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
    /*END CATE IMAGE 2.0.0*/
?>