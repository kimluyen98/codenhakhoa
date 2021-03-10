<?php
    /*POPUP ADV SITE 1.0.1*/
    'id_popup_advsite_1_0_1' => array(
        'key' => 'id_popup_advsite_1_0_1',
        'name' => 'popup_advsite_1_0_1',
        'label' => 'Popup Advsite 1.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_popup_advsite_1_0_1_tab1',
                'label' => 'Popup Site',
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
                'key' => 'id_popup_advsite_1_0_1_tab1_sub',
                'label' => 'Cập nhật POPUP theo chỉ dẫn',
                'name' => 'data',
                'type' => 'textarea',
                'instructions' => '
                    Dòng 1 : Tiêu đề Popup <br>
                    Dòng 2 : Link ảnh hiển thị (600px x 400px) <br>
                    Dòng 3 : Link Popup
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
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END POPUP ADV SITE 1.0.1*/
?>