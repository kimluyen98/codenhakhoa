<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5da6d2fa826bb',
	'title' => 'Cấu Hình Module',
	'fields' => array(
		array(
			'key' => 'field_5da6d3a2c1f03',
			'label' => 'Page Field',
			'name' => 'page_field',
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
                /*BẮT ĐẦU MODULE*/

                /*HEADER*/
                'header' => array(
                    'key' => 'header',
                    'name' => 'header',
                    'label' => 'Header Module',
                    'display' => 'block',
                    'sub_fields' => array(
                        
                        array(
                            'key' => 'header_sub',
                            'label' => '',
                            'name' => 'header_sub',
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

                                     /*HEADER 6.0.0*/
                                    'id_header_6_0_0' => array(
                                        'key' => 'id_header_6_0_0',
                                        'name' => 'header_6_0_0',
                                        'label' => 'Header 6.0.0',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            array(
                                                'key' => 'id_slider_6_0_0_tab1',
                                                'label' => 'Thông Tin Chung',
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
                                                'key' => 'id_slider_6_0_0_tab1_sub1',
                                                'label' => 'Thông tin chung',
                                                'name' => 'about',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1 : Slogan Desktop <br>
                                                    Dòng 2 : Slogan Mobile <br>
                                                    Dòng 3 : Link liên kết facebook <br>
                                                    Dòng 4 : Link liên kết youtube <br>
                                                    Dòng 5 : Link liên kết zalo <br>
                                                    Dòng 6 : Link liên kết instagram <br>
                                                    Dòng 7 : Thuộc tính link (vd: nofollow)
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
                                                'rows' => 7,
                                                'new_lines' => '',
                                            ),
                                            array(
                                                'key' => 'id_header_6_0_0_tab1_sub1',
                                                'label' => 'Thời gian',
                                                'name' => 'col1',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1: Giờ mở cửa <br>
                                                    Dòng 2: Các ngày làm việc trong tuần
                                                ',
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
                                                'rows' => 2,
                                            ),
                                            array(
                                                'key' => 'id_header_6_0_0_tab1_sub2',
                                                'label' => 'Tư vấn',
                                                'name' => 'col2',
                                                'type' => 'textarea',
                                                'instructions' => '
                                                    Dòng 1: Tiêu đề tư vấn <br>
                                                    Dòng 2: Số điện thoại liên hệ 
                                                ',
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
                                                'rows' => 2,
                                            ),
                                            array(
                                                'key' => 'id_slider_6_0_0_tab2',
                                                'label' => 'Cài Đặt Menu',
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
                                                'key' => 'id_header_6_0_0_sub1',
                                                'label' => 'Menu',
                                                'name' => 'id_header_6_0_0_sub1',
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
                                                    'id_header_6_0_0_sub1_layout1' => array(
                                                        'key' => 'id_header_6_0_0_sub1_layout1',
                                                        'name' => 'menu_don',
                                                        'label' => 'Menu Đơn',
                                                        'display' => 'row',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_header_6_0_0_sub1_layout1_sub',
                                                                'label' => 'Tên Menu',
                                                                'name' => 'title',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                Dòng 1:  Tên Menu <br>
                                                                Dòng 2: Link <br>
                                                                Dòng 3: Thuộc tính link (vd: nofollow)
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
                                                        ),
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    'id_header_6_0_0_sub1_layout2' => array(
                                                        'key' => 'id_header_6_0_0_sub1_layout2',
                                                        'name' => 'menu_sub_full',
                                                        'label' => 'Mega Menu',
                                                        'display' => 'row',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_header_6_0_0_sub1_layout2_sub1',
                                                                'label' => 'Menu cha',
                                                                'name' => 'title',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tên menu <br>
                                                                    Dòng 2 : Link <br>
                                                                    Dòng 3 : Số cột <br>
                                                                    Dòng 4: Thuộc tính link (vd: nofollow)
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
                                                                'rows' => 4,
                                                                'new_lines' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_header_6_0_0_sub1_layout2_sub2',
                                                                'label' => 'Sub Menu',
                                                                'name' => 'col1',
                                                                'type' => 'wysiwyg',
                                                                'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
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
                                                ),
                                                'button_label' => 'Thêm Menu',
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*END HEADER 6.0.0*/            
                                
                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END HEADER*/
                
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

                                /*SLIDER 1.0.5*/
                                'slider_1_0_5' => array(
                                    'key' => 'slider_1_0_5',
                                    'name' => 'slider_1_0_5',
                                    'label' => 'Slider 1.0.5',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        // Bat dau Field
                                        array(
                                            /* Tab Slider Desktop*/
                                            'key' => 'id_slider_1_0_5_tab1',
                                            'label' => 'Slider Desktop',
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
                                            'key' => 'id_slider_1_0_5_sub1',
                                            'label' => 'Slide Desktop',
                                            'name' => 'slide_pc',
                                            'type' => 'gallery',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'return_format' => 'array',
                                            'preview_size' => 'medium',
                                            'insert' => 'append',
                                            'library' => 'all',
                                            'min' => '',
                                            'max' => '',
                                            'min_width' => '',
                                            'min_height' => '',
                                            'min_size' => '',
                                            'max_width' => '',
                                            'max_height' => '',
                                            'max_size' => '',
                                            'mime_types' => '',
                                        ),
                                        array(
                                            /* Tab Slider Mobile*/
                                            'key' => 'id_slider_1_0_5_tab2',
                                            'label' => 'Slider Mobile',
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
                                            'key' => 'id_slider_1_0_5_sub2',
                                            'label' => 'Slide Mobile',
                                            'name' => 'slide_mb',
                                            'type' => 'gallery',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'return_format' => 'array',
                                            'preview_size' => 'medium',
                                            'insert' => 'append',
                                            'library' => 'all',
                                            'min' => '',
                                            'max' => '',
                                            'min_width' => '',
                                            'min_height' => '',
                                            'min_size' => '',
                                            'max_width' => '',
                                            'max_height' => '',
                                            'max_size' => '',
                                            'mime_types' => '',
                                        ),
                                       
                                        // End Field Base                       
                                    ),
                                    'min' => '',
                                    'max' => '',
                                ),
                                 /*END SLIDER 1.0.5*/
                                 

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END SLIDER*/           
                
                /*DOCTOR*/
                'doctor' => array(
                    'key' => 'doctor',
                    'name' => 'doctor',
                    'label' => 'Doctor Module',
                    'display' => 'block',
                    'sub_fields' => array(
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

                                /*DOCTOR 4.1.0*/
                                'id_doctor_4_1_0' => array(
                                    'key' => 'id_doctor_4_1_0',
                                    'name' => 'doctor_4_1_0',
                                    'label' => 'Doctor_4_1_0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab tiêu đề*/
                                            'key' => 'id_doctor_4_1_0_tab1',
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
                                            'key' => 'id_doctor_4_1_0_tab1_sub1',
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
                                            /* Tab Basis*/
                                            'key' => 'id_doctor_4_1_0_tab2',
                                            'label' => 'Thông tin chi tiết về bác sĩ',
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
                                            'key' => 'id_doctor_4_1_0_tab2_sub1',
                                            'label' => '',
                                            'name' => 'info1',
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
                                                    'key' => 'id_doctor_4_1_0_tab2_sub1_layout1',
                                                    'name' => 'layout',
                                                    'label' => 'Thông bác sĩ',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        // Bat dau Field
                                                        array(
                                                            'key' => 'id_doctor_4_1_0_tab2_sub1_layout1_sub',
                                                            'label' => '',
                                                            'name' => 'info1_ct',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1: Chức danh <br>
                                                                Dòng 2: Tên bác sĩ <br>
                                                                Dòng 3: Link ảnh desktop (750 x 624) <br>
                                                                Dòng 4: Link ảnh mobile (750 x 624) <br>
                                                                Dòng 5: Link ảnh thumb (117 x 118) <br>
                                                                Dòng 6: Link đăng ký
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
                                                            'rows' => 7,
                                                            'new_lines' => '',
                                                        ),
                                                        array(
                                                            'key' => 'id_doctor_4_1_0_tab2_sub1_layout1_sub1',
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
                                /*END DOCTOR 4.1.0*/

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END DOCTOR*/    

                /*SERVICE*/
                'service' => array(
                    'key' => 'service',
                    'name' => 'service',
                    'label' => 'Service Module',
                    'display' => 'block',
                    'sub_fields' => array(
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

                                    /*SERVICE 8.0.0*/
                                    'id_service_8_0_0' => array(
                                        'key' => 'id_service_8_0_0',
                                        'name' => 'service_8_0_0',
                                        'label' => 'Service 8.0.0',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            /*Bắt đầu field*/
                                            array(
                                                /* Tab tiêu đề*/
                                                'key' => 'id_service_8_0_0_tab1',
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
                                                'key' => 'id_service_8_0_0_tab1_sub1',
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
                                                /* Tab service*/
                                                'key' => 'id_service_8_0_0_tab2',
                                                'label' => 'Dịch Vụ Tại Nha Khoa Paris',
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
                                                'key' => 'id_service_8_0_0_tab2_sub1',
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
                                                        'key' => 'id_service_8_0_0_tab2_sub1_layout1',
                                                        'name' => 'info_service',
                                                        'label' => 'Dịch vụ',
                                                        'display' => 'block',
                                                        'sub_fields' => array(
                                                            // Bat dau Field
                                                            array(
                                                                'key' => 'id_service_8_0_0_tab2_sub1_layout1_sub1',
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
                                                                'key' => 'id_service_8_0_0_tab2_sub1_layout1_sub2',
                                                                'label' => '',
                                                                'name' => 'info_service_data',
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
                                                                        'key' => 'id_service_8_0_0_tab2_sub1_layout1_sub2_layout1',
                                                                        'name' => 'info_service_ct',
                                                                        'label' => 'Thông tin',
                                                                        'display' => 'block',
                                                                        'sub_fields' => array(
                                                                            // Bat dau Field
                                                                            array(
                                                                                'key' => 'id_service_8_0_0_tab1_sub2_layout1_sub2_layout1_sub',
                                                                                'label' => 'Nội dung',
                                                                                'name' => 'content',
                                                                                'type' => 'textarea',
                                                                                'instructions' => '
                                                                                    Dòng 1: Tên dịch vụ <br>
                                                                                    Dòng 2: Mức giá sale off <br>
                                                                                    Dòng 3: Thêm mô tả (Bôi đậm mức giá) <br>
                                                                                    Dòng 4: Link ảnh nền cho dịch vụ <br>
                                                                                    Dòng 5: Link liên kết <br>
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
                                                                            array(
                                                                                'key' => 'id_service_8_0_0_tab1_sub2_layout1_sub2_layout1_sub_sub1',
                                                                                'label' => 'Quy trình thực hiện',
                                                                                'name' => 'about_des',
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
                                    /*END SERVICE 8.0.0*/

                                    /*SERVICE 8.1.0*/
                                    'id_service_8_1_0' => array(
                                        'key' => 'id_service_8_1_0',
                                        'name' => 'service_8_1_0',
                                        'label' => 'Service 8.1.0',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            /*Bắt đầu field*/
                                            array(
                                                /* Tab tiêu đề*/
                                                'key' => 'id_service_8_1_0_tab1',
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
                                                'key' => 'id_service_8_1_0_tab1_sub1',
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
                                                /* Tab service*/
                                                'key' => 'id_service_8_1_0_tab2',
                                                'label' => 'Dịch Vụ Tại Nha Khoa Paris',
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
                                                'key' => 'id_service_8_1_0_tab2_sub1',
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
                                                        'key' => 'id_service_8_1_0_tab2_sub1_layout1',
                                                        'name' => 'info_service',
                                                        'label' => 'Dịch vụ',
                                                        'display' => 'block',
                                                        'sub_fields' => array(
                                                            // Bat dau Field
                                                            array(
                                                                'key' => 'id_service_8_1_0_tab2_sub1_layout1_sub1',
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
                                                                'key' => 'id_service_8_1_0_tab2_sub1_layout1_sub2',
                                                                'label' => '',
                                                                'name' => 'info_service_data',
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
                                                                        'key' => 'id_service_8_1_0_tab2_sub1_layout1_sub2_layout1',
                                                                        'name' => 'info_service_ct',
                                                                        'label' => 'Thông tin',
                                                                        'display' => 'block',
                                                                        'sub_fields' => array(
                                                                            // Bat dau Field
                                                                            array(
                                                                                'key' => 'id_service_8_1_0_tab1_sub2_layout1_sub2_layout1_sub',
                                                                                'label' => 'Nội dung',
                                                                                'name' => 'content',
                                                                                'type' => 'textarea',
                                                                                'instructions' => '
                                                                                    Dòng 1: Link ảnh dịch vụ <br>
                                                                                    Dòng 2: Link liên kết
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
                                                                                'rows' => 2,
                                                                                'new_lines' => '',
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
                                    /*END SERVICE 8.1.0*/

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END SERVICE*/ 

                /*VIDEO*/
                'video' => array(
                    'key' => 'video',
                    'name' => 'video',
                    'label' => 'Video Module',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'video_sub_fields',
                            'label' => '',
                            'name' => 'video_sub_fields',
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

                                /*video 4.1.0*/
                                'id_video_4_1_0' => array(
                                    'key' => 'id_video_4_1_0',
                                    'name' => 'video_4_1_0',
                                    'label' => 'Video 4.1.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab tiêu đề*/
                                            'key' => 'id_video_4_1_0_tab1',
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
                                            'key' => 'id_video_4_1_0_tab1_sub1',
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
                                            /* Tab video*/
                                            'key' => 'id_video_4_1_0_tab2',
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
                                            'key' => 'id_video_4_1_0_tab2_sub1',
                                            'label' => 'Video lớn',
                                            'name' => 'info1',
                                            'type' => 'textarea',
                                            'instructions' => '
                                                Dòng 1: Link ảnh hiển thị video lớn  (922 x 518)<br>
                                                Dòng 2: Tiêu đề video lớn <br>
                                                Dòng 3: Link youtube <br>
                                                Dòng 4: Số lượt xem

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
                                        array(
                                            'key' => 'id_video_4_1_0_tab2_sub2',
                                            'label' => 'Video nhỏ',
                                            'name' => 'info2',
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
                                                    'key' => 'id_video_4_1_0_tab2_sub2_layout1',
                                                    'name' => 'person_layout',
                                                    'label' => 'Thông tin',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        // Bat dau Field
                                                        array(
                                                            'key' => 'id_video_4_1_0_tab2_sub2_layout1_sub',
                                                            'label' => 'Nội dung',
                                                            'name' => 'content',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1: Linh ảnh hiển thị video nhỏ (200 x 112) <br>
                                                                Dòng 2: Tiêu đề video nhỏ <br>
                                                                Dòng 3: Link youtube <br>
                                                                Dòng 4: Số lượt xem
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
                                                            'rows' => 4,
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
                                /*END video 4.1.0*/

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END VIDEO*/  

                /*COMMIT*/
                'commit' => array(
                    'key' => 'commit',
                    'name' => 'commit',
                    'label' => 'Cam Kết [Commit Module]',
                    'display' => 'block',
                    'sub_fields' => array(
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

                                /*commit 1.0.0*/
                                'id_commit_1_0_0' => array(
                                    'key' => 'id_commit_1_0_0',
                                    'name' => 'commit_1_0_0',
                                    'label' => 'Commit 1.0.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab tiêu đề*/
                                            'key' => 'id_commit_1_0_0_tab1',
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
                                            'key' => 'id_commit_1_0_0_tab1_sub1',
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
                                            /* Tab commit*/
                                            'key' => 'id_commit_1_0_0_tab2',
                                            'label' => 'Cam Kết Bảo Hành',
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
                                            'key' => 'id_commit_1_0_0_tab2_sub1',
                                            'label' => '',
                                            'name' => 'info1',
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
                                                    'key' => 'id_commit_1_0_0_tab2_sub1_layout1',
                                                    'name' => 'layout',
                                                    'label' => 'Thông tin',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        // Bat dau Field
                                                        array(
                                                            'key' => 'id_commit_1_0_0_tab2_sub1_layout1_sub',
                                                            'label' => 'Nội dung',
                                                            'name' => 'content1',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1: Link ảnh icon (104 x 100) <br>
                                                                Dòng 2: Tiêu đề  <br>
                                                                Dòng 3: CTA button <br>
                                                                Dòng 4: Link ảnh nền
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
                                        array(
                                            /* Tab commit*/
                                            'key' => 'id_commit_1_0_0_tab3',
                                            'label' => 'Form Đặt Lịch',
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
                                            'key' => 'id_commit_1_0_0_tab3_sub1',
                                            'label' => 'Tiêu đề liên hệ',
                                            'name' => 'contact_title',
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
                                            'key' => 'id_commit_1_0_0_tab3_sub2',
                                            'label' => '',
                                            'name' => 'contact_info',
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
                                                    'key' => 'id_commit_1_0_0_tab3_sub2_layout1',
                                                    'name' => 'contact_city',
                                                    'label' => 'Cơ sở',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        // Bat dau Field
                                                        array(
                                                            'key' => 'id_commit_1_0_0_tab3_sub2_layout1_sub1',
                                                            'label' => 'Tên chi nhánh',
                                                            'name' => 'contact_city_name',
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
                                                            'key' => 'id_commit_1_0_0_tab3_sub2_layout1_sub2',
                                                            'label' => '',
                                                            'name' => 'contact_city_data',
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
                                                                    'key' => 'id_commit_1_0_0_tab3_sub2_layout1_sub2_layout1',
                                                                    'name' => 'contact_city_info',
                                                                    'label' => 'Thông tin',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_commit_1_0_0_tab3_sub2_layout1_sub2_layout1_sub',
                                                                            'label' => 'Nội dung',
                                                                            'name' => 'content',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1: Địa chỉ cụ thể của cơ sở <br>
                                                                                Dòng 2: Link liên kết
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
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                            ),
                                                            'button_label' => 'Thêm địa chỉ',
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
                                /*END commit 1.0.0*/

                                /*commit 3.0.0*/
                                'id_commit_3_0_0' => array(
                                    'key' => 'id_commit_3_0_0',
                                    'name' => 'commit_3_0_0',
                                    'label' => 'Commit 3.0.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab commit*/
                                            'key' => 'id_commit_3_0_0_tab3',
                                            'label' => 'Form Đặt Lịch',
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
                                            'key' => 'id_commit_3_0_0_tab3_sub1',
                                            'label' => 'Tiêu đề liên hệ',
                                            'name' => 'contact_title',
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
                                            'key' => 'id_commit_3_0_0_tab3_sub2',
                                            'label' => '',
                                            'name' => 'contact_info',
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
                                                    'key' => 'id_commit_3_0_0_tab3_sub2_layout1',
                                                    'name' => 'contact_city',
                                                    'label' => 'Cơ sở',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        // Bat dau Field
                                                        array(
                                                            'key' => 'id_commit_3_0_0_tab3_sub2_layout1_sub1',
                                                            'label' => 'Tên chi nhánh',
                                                            'name' => 'contact_city_name',
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
                                                            'key' => 'id_commit_3_0_0_tab3_sub2_layout1_sub2',
                                                            'label' => '',
                                                            'name' => 'contact_city_data',
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
                                                                    'key' => 'id_commit_3_0_0_tab3_sub2_layout1_sub2_layout1',
                                                                    'name' => 'contact_city_info',
                                                                    'label' => 'Thông tin',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_commit_3_0_0_tab3_sub2_layout1_sub2_layout1_sub',
                                                                            'label' => 'Nội dung',
                                                                            'name' => 'content',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1: Địa chỉ cụ thể của cơ sở <br>
                                                                                Dòng 2: Link liên kết
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
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                            ),
                                                            'button_label' => 'Thêm địa chỉ',
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
                                /*END commit 3.0.0*/                                

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END COMMIT*/     

                /*NEWS*/
                'news' => array(
                    'key' => 'news',
                    'name' => 'news',
                    'label' => 'Tin tức [News Module]',
                    'display' => 'block',
                    'sub_fields' => array(
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

                                /*NEWS 3.1.0*/
                                'id_news_3_1_0' => array(
                                    'key' => 'id_news_3_1_0',
                                    'name' => 'news_3_1_0',
                                    'label' => 'News 3.1.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab 1*/
                                            'key' => 'id_news_3_1_0_tab1',
                                            'label' => 'Tin Tức & Sự Kiện',
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
                                            'key' => 'id_news_3_1_0_tab1_sub1',
                                            'label' => 'Hỏi đáp nha khoa',
                                            'name' => 'title1',
                                            'type' => 'textarea',
                                            'instructions' => '
                                                Dòng 1: Tiêu đề <br>
                                                Dòng 2: Chọn ID Cate hiển thị
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
                                            'key' => 'id_news_3_1_0_tab1_sub2',
                                            'label' => 'Tin tức nổi bật',
                                            'name' => 'title2',
                                            'type' => 'textarea',
                                            'instructions' => '
                                                Dòng 1: Tiêu đề <br>
                                                Dòng 2: Chọn ID Cate hiển thị
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
                                            'key' => 'id_news_3_1_0_tab1_sub3',
                                            'label' => 'Tìm kiếm nhanh',
                                            'name' => 'title3',
                                            'type' => 'text',
                                            'instructions' => '
                                            Tên tiêu đề 
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
                                        ),
                                        array(
                                            'key' => 'id_news_3_1_0_tab1_sub3_layout1',
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
                                        // End Field Base			
                                        
                                        /*End field*/
                                    ),
                                    'min' => '',
                                    'max' => '',
                                ),
                                /*END NEWS 3.1.0*/

                                /*NEWS 12.0.0*/
                                'id_news_12_0_0' => array(
                                    'key' => 'id_news_12_0_0',
                                    'name' => 'news_12_0_0',
                                    'label' => 'News 12.0.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab 1*/
                                            'key' => 'id_news_12_0_0_tab1',
                                            'label' => 'Tin Tức & Sự Kiện',
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
                                            'key' => 'id_news_12_0_0_tab1_sub1',
                                            'label' => 'Hỏi đáp nha khoa',
                                            'name' => 'title1',
                                            'type' => 'textarea',
                                            'instructions' => '
                                                Dòng 1: Tiêu đề <br>
                                                Dòng 2: Chọn ID Cate hiển thị
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
                                            'key' => 'id_news_12_0_0_tab1_sub2',
                                            'label' => 'Tin tức nổi bật',
                                            'name' => 'title2',
                                            'type' => 'text',
                                            'instructions' => 'Tên tiêu đề ',
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
                                            'key' => 'id_news_7_0_0_tab1_sub2',
                                            'label' => 'Danh sách tin',
                                            'name' => 'content1',
                                            'type' => 'relationship',
                                            'instructions' => 'Nhập dưới 4 tin',
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
                                            'max' => '4',
                                            'return_format' => 'id',
                                        ),
                                        array(
                                            'key' => 'id_news_12_0_0_tab1_sub3',
                                            'label' => 'Tìm kiếm nhanh',
                                            'name' => 'title3',
                                            'type' => 'text',
                                            'instructions' => '
                                            Tên tiêu đề 
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
                                        ),
                                        array(
                                            'key' => 'id_news_12_0_0_tab1_sub3_layout1',
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
                                        // End Field Base			
                                        
                                        /*End field*/
                                    ),
                                    'min' => '',
                                    'max' => '',
                                ),
                                /*END NEWS 3.1.0*/

                                /*NEWS 10.1.0*/
                                'id_news_10_1_0' => array(
                                    'key' => 'id_news_10_1_0',
                                    'name' => 'news_10_1_0',
                                    'label' => 'News 10.1.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        
                                        // TAB TIN TỨC
                                        array(
                                            'key' => 'id_news_10_1_0_tab2',
                                            'label' => 'Tin Tức',
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
                                            'key' => 'id_news_10_1_0_tab2_sub1',
                                            'label' => 'Tiêu đề',
                                            'name' => 'info',
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
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'maxlength' => '',
                                            'rows' => 1,
                                            'new_lines' => '',
                                        ),
                                        array(
                                            'key' => 'id_news_10_1_0_tab2_sub2',
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
                                            'max' => 4,
                                            'return_format' => 'id',
                                        ),
                                        // END TAB TIN TỨC
                                        
                                        /*End field*/
                                    ),
                                    'min' => '',
                                    'max' => '1',
                                ),
                                /*END NEWS 10.1.0*/

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END NEWS*/     
                
                /*PERSON*/
                'person' => array(
                    'key' => 'person',
                    'name' => 'person',
                    'label' => 'Person Module',
                    'display' => 'block',
                    'sub_fields' => array(
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

                                /*PERON 4.0.0*/
                                'id_person_4_0_0' => array(
                                    'key' => 'id_person_4_0_0',
                                    'name' => 'person_4_0_0',
                                    'label' => 'Person 4.0.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*Bắt đầu field*/
                                        array(
                                            /* Tab tiêu đề*/
                                            'key' => 'id_peson_4_0_0_tab1',
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
                                            'key' => 'id_person_4_0_0_tab1_sub1',
                                            'label' => '',
                                            'name' => 'person_title',
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
                                            'key' => 'id_person_4_0_0_tab2',
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
                                            'key' => 'id_person_4_0_0_tab2_sub1',
                                            'label' => '',
                                            'name' => 'person_info',
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
                                                    'key' => 'id_person_4_0_0_tab2_sub1_layout1',
                                                    'name' => 'person_layout',
                                                    'label' => 'Thông tin',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        // Bat dau Field
                                                        array(
                                                            'key' => 'id_person_4_0_0_tab2_sub1_layout1_sub',
                                                            'label' => 'Nội dung',
                                                            'name' => 'title',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1: Hình ảnh khách hàng <br>
                                                                Dòng 2: Tên khách hàng <br>
                                                                Dòng 3: Bài đánh giá của khách hàng <br>
                                                                Dòng 4: Link xem thêm
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
                                                            'rows' => 8,
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
                                /*END PERSON 4.0.0*/

                                /*PERSON 5.0.0*/
                                    'id_person_5_0_0' => array(
                                        'key' => 'id_person_5_0_0',
                                        'name' => 'person_5_0_0',
                                        'label' => 'person 5.0.0',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            /*Bắt đầu field*/
                                            array(
                                                /* Tab Service*/
                                                'key' => 'id_person_5_0_0_tab1',
                                                'label' => 'Tiêu đề',
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
                                                'key' => 'id_person_5_0_0_tab1_sub1',
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
                                                'key' => 'id_person_5_0_0_tab2',
                                                'label' => 'Hình ảnh khách hàng',
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
                                                'key' => 'id_person_5_0_0_tab2_sub1',
                                                'label' => 'Hình Ảnh Khách Hàng Tiêu Biểu',
                                                'name' => 'tieubieu_info',
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
                                                        'key' => 'id_person_5_0_0_tab2_sub1_layout1',
                                                        'name' => 'tieubieu_info_box',
                                                        'label' => 'Khách hàng tiêu biểu',
                                                        'display' => 'block',
                                                        'sub_fields' => array(
                                                            // Bat dau Field
                                                            array(
                                                                'key' => 'id_person_5_0_0_tab2_sub1_layout1_sub1',
                                                                'label' => 'Hình ảnh banner',
                                                                'name' => 'content',
                                                                'type' => 'gallery',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'return_format' => 'array',
                                                                'preview_size' => 'medium',
                                                                'insert' => 'append',
                                                                'library' => 'all',
                                                                'min' => '',
                                                                'max' => '',
                                                                'min_width' => '',
                                                                'min_height' => '',
                                                                'min_size' => '',
                                                                'max_width' => '',
                                                                'max_height' => '',
                                                                'max_size' => '',
                                                                'mime_types' => '',
                                                            ),                               
                                                                        
                                                            // End Field Base						
                                                        ),
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'button_label' => 'Thêm khách hàng',
                                                'min' => '',
                                                'max' => '',
                                            ),

                                            
                                            /*End field*/
                                        ),
                                        'min' => '',
                                        'max' => '',
                                        ),
                                /*PERSON 5.0.0*/                                

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

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END PERSON*/ 

                /*PHOTO*/
                'photo' => array(
                    'key' => 'photo',
                    'name' => 'photo',
                    'label' => 'Photo Module',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'photo_sub_fields',
                            'label' => '',
                            'name' => 'photo_sub_fields',
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

                                    /*PHOTO 1.0.0*/
                                    'id_photo_1_0_0' => array(
                                        'key' => 'id_photo_1_0_0',
                                        'name' => 'photo_1_0_0',
                                        'label' => 'Photo 1.0.0',
                                        'display' => 'block',
                                        'sub_fields' => array(
                                            /*Bắt đầu field*/
                                            array(
                                                /* Tab Service*/
                                                'key' => 'id_photo_1_0_0_tab1',
                                                'label' => 'Tiêu đề',
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
                                                'key' => 'id_photo_1_0_0_tab1_sub1',
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
                                                'key' => 'id_photo_1_0_0_tab2',
                                                'label' => 'Hình ảnh trước sau',
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
                                                'key' => 'id_photo_1_0_0_tab2_sub',
                                                'label' => 'Danh sách Photo',
                                                'name' => 'photo_info',
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
                                                        'key' => 'id_photo_1_0_0_tab2_sub1_layout1',
                                                        'name' => 'photo_info_box',
                                                        'label' => 'Photo',
                                                        'display' => 'block',
                                                        'sub_fields' => array(
                                                            // Bat dau Field
                                                            array(
                                                                'key' => 'id_photo_1_0_0_tab2_sub1_layout1_sub1',
                                                                'label' => 'Dịch vụ',
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
                                                                'key' => 'id_photo_1_0_0_tab2_sub1_layout1_sub2',
                                                                'label' => 'Danh sách page',
                                                                'name' => 'page',
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
                                                                        'key' => 'id_photo_1_0_0_tab2_sub1_layout1_sub2_layout1',
                                                                        'name' => 'page_content',
                                                                        'label' => 'Thêm page',
                                                                        'display' => 'block',
                                                                        'sub_fields' => array(
                                                                            // Bat dau Field
                                                                            
                                                                            array(
                                                                                'key' => 'id_photo_1_0_0_tab2_sub1_layout1_sub2_layout1_sub1',
                                                                                'label' => 'Photo',
                                                                                'name' => 'content',
                                                                                'type' => 'gallery',
                                                                                'instructions' => '',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'return_format' => 'array',
                                                                                'preview_size' => 'medium',
                                                                                'insert' => 'append',
                                                                                'library' => 'all',
                                                                                'min' => '',
                                                                                'max' => '',
                                                                                'min_width' => '',
                                                                                'min_height' => '',
                                                                                'min_size' => '',
                                                                                'max_width' => '',
                                                                                'max_height' => '',
                                                                                'max_size' => '',
                                                                                'mime_types' => '',
                                                                            ),  
                                                                            // End Field Base                       
                                                                        ),
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),

                                                                ),
                                                                'button_label' => 'Add Row',
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        
                                                            // End Field Base						
                                                        ),
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'button_label' => 'Thêm Album',
                                                'min' => '',
                                                'max' => '',
                                            ),

                                            
                                            /*End field*/
                                        ),
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*PHOTO 1.0.0*/

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END PHOTO*/  

                /*CATE*/
                'cate' => array(
                    'key' => 'cate',
                    'name' => 'cate',
                    'label' => 'Cate Module',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'cate_sub_fields',
                            'label' => '',
                            'name' => 'cate_sub_fields',
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

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END CATE*/

                /*POPUP*/
                'popup' => array(
                    'key' => 'poup',
                    'name' => 'poup',
                    'label' => 'Poup Module',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'poup_sub_fields',
                            'label' => '',
                            'name' => 'poup_sub_fields',
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

                                        /*POPUP ADV RIGHT 1.0.0*/
                                        'id_popup_advright_1_0_0' => array(
                                            'key' => 'id_popup_advright_1_0_0',
                                            'name' => 'popup_advright_1_0_0',
                                            'label' => 'Popup Advright 1.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    /* Tab tiêu đề*/
                                                    'key' => 'id_popup_advright_1_0_0_tab1',
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
                                                    'key' => 'id_popup_advright_1_0_0_tab1_sub',
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
                                        /*END POPUP ADV RIGHT 1.0.0*/

                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END POPUP*/                  
                
                /*FOOTER*/
                'footer' => array(
                    'key' => 'footer',
                    'name' => 'footer',
                    'label' => 'Footer Module',
                    'display' => 'block',
                    'sub_fields' => array(
                        
                        array(
                            'key' => 'footer_sub_fields',
                            'label' => '',
                            'name' => 'footer_sub_fields',
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
                                'id_footer_2_1_0' => array(
                                    'key' => 'id_footer_2_1_0',
                                    'name' => 'footer_2_1_0',
                                    'label' => 'Footer 2.1.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /* Code */
                                        array(
                                            'key' => 'id_footer_2_1_0_sub',
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
                                /*END FOOTER 2.1.0*/

                                
                                // End Module
                            ),
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END FOOTER*/
				
				
				/*KẾT THÚC MODULE*/
			),
			'button_label' => 'Section Mới',
			'min' => '',
			'max' => '',
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