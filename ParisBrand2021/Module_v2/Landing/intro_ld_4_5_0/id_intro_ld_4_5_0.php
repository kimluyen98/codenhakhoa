<?php
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
?>