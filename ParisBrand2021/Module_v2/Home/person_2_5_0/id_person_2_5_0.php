<?php
    /*PERON 2.5.0*/
    'id_person_2_5_0' => array(
        'key' => 'id_person_2_5_0',
        'name' => 'person_2_5_0',
        'label' => 'Person 2.5.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_peson_2_5_0_tab1',
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
                'key' => 'id_person_2_5_0_tab1_sub1',
                'label' => '',
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
                /* Tab PERSON*/
                'key' => 'id_person_2_5_0_tab2',
                'label' => 'Danh Sách Thông tin',
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
                'key' => 'id_person_2_5_0_tab2_sub1',
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
                        'key' => 'id_person_2_5_0_tab2_sub1_layout1',
                        'name' => 'layout',
                        'label' => 'Thông tin',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_person_2_5_0_tab2_sub1_layout1_sub',
                                'label' => 'Thêm thông tin theo hướng dẫn',
                                'name' => 'content',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1: Tên khách hàng <br>
                                    Dòng 2: Tên dịch vụ khách hàng đã làm <br>
                                    Dòng 3: Link ảnh khách hàng <br>
                                    Dòng 4: Link liên kết
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
                                'rows' => 5,
                                'new_lines' => '',
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
    /*END PERSON 2.5.0*/
?>