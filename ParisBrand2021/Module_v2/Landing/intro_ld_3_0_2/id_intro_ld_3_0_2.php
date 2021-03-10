<?php
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
?>