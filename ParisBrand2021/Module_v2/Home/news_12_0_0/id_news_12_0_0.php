<?php
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

?>