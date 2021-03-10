<?php
     /*PERON 6.0.0*/
     'id_person_6_0_0' => array(
        'key' => 'id_person_6_0_0',
        'name' => 'person_6_0_0',
        'label' => 'Person 6.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_person_6_0_0_tab1',
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
                'key' => 'id_person_6_0_0_tab1_sub1',
                'label' => 'Tên tiêu đề',
                'name' => 'title',
                'type' => 'text',
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
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
           
            array(
                /* Tab person*/
                'key' => 'id_person_6_0_0_tab2',
                'label' => 'Thông tin khách hàng',
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
                'key' => 'id_person_6_0_0_tab2_sub1',
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
                        'key' => 'id_person_6_0_0_tab2_sub1_layout1',
                        'name' => 'info_person',
                        'label' => 'Dịch vụ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_person_6_0_0_tab2_sub1_layout1_sub1',
                                'label' => 'Tên dịch vụ',
                                'name' => 'info_service_name',
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
                                'key' => 'id_person_6_0_0_tab2_sub1_layout1_sub2',
                                'label' => '',
                                'name' => 'info_person_data',
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
                                        'key' => 'id_person_6_0_0_tab2_sub1_layout1_sub2_layout1',
                                        'name' => 'info_person_ct',
                                        'label' => 'Thông tin',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                                'key' => 'id_person_6_0_0_tab1_sub2_layout1_sub2_layout1_sub',
                                                'label' => 'Nội dung',
                                                'name' => 'content',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1: Tên khách hàng <br>
                                                    Dòng 2: Tên dịch vụ khách hàng đã làm <br>
                                                    Dòng 3: Link ảnh khách hàng
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
                                                'rows' => 3,
                                                'new_lines' => '',
                                            ),
                                           
                                            // End Field Base						
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                ),
                                'button_label' => 'Thêm TT khách hàng',
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
    /*END PERON 6.0.0*/
?>