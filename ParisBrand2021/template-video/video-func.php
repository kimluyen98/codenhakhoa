<?php 

/* customfield video*/



if(function_exists("register_field_group"))

{

	register_field_group(array (

		'id' => 'acf_template-video',

		'title' => 'Template video',

		'fields' => array (

			array (

				'key' => 'field_5aa23b28ca262',

				'label' => 'Video nổi bật',

				'name' => '',

				'type' => 'tab',

			),

			array (

				'key' => 'field_5aa239a88b980',

				'label' => 'Link video nổi bật',

				'name' => 'link-video-nb',

				'type' => 'textarea',

				'instructions' => 'Copy link video vào đây, mỗi dòng là 1 video ',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa239e98b981',

				'label' => 'Title video nổi bật',

				'name' => 'title-nb',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 title để gắn với video',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa23a098b982',

				'label' => 'Link ảnh nổi bật',

				'name' => 'link-anh-nb',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 hình ảnh để gắn với video + title',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa23b4eca263',

				'label' => 'List video 1',

				'name' => '',

				'type' => 'tab',

			),

			array (

				'key' => 'field_5aa33c3946f5e',

				'label' => 'Tiêu đề chuyên mục 1',

				'name' => 'tieu-de-1',

				'type' => 'text',

				'default_value' => '',

				'placeholder' => '',

				'prepend' => '',

				'append' => '',

				'formatting' => 'html',

				'maxlength' => '',

			),

			array (

				'key' => 'field_5aa23b9fc2144',

				'label' => 'Title video 1',

				'name' => 'title-video-1',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 title để gắn với video',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa23b86c2143',

				'label' => 'List link video 1',

				'name' => 'list-link-1',

				'type' => 'textarea',

				'instructions' => 'Copy link video vào đây, mỗi dòng là 1 video ',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa23bb8c2145',

				'label' => 'List link ảnh 1',

				'name' => 'list-anh-1',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 hình ảnh để gắn với video + title',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa33d1446f5f',

				'label' => 'List video 2',

				'name' => '',

				'type' => 'tab',

			),

			array (

				'key' => 'field_5aa340ca02dcb',

				'label' => 'Tiêu đề chuyên mục 2',

				'name' => 'tieu-de-2',

				'type' => 'text',

				'default_value' => '',

				'placeholder' => '',

				'prepend' => '',

				'append' => '',

				'formatting' => 'html',

				'maxlength' => '',

			),

			array (

				'key' => 'field_5aa34af7bc5f7',

				'label' => 'Title video 2',

				'name' => 'title-video-2',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 title để gắn với video',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa34b99e48b7',

				'label' => 'List link video 2',

				'name' => 'list-link-2',

				'type' => 'textarea',

				'instructions' => 'Copy link video vào đây, mỗi dòng là 1 video ',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa342b26d885',

				'label' => 'List link ảnh 2',

				'name' => 'list-anh-2',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 hình ảnh để gắn với video + title',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa33d1746f60',

				'label' => 'List video 3',

				'name' => '',

				'type' => 'tab',

			),

			array (

				'key' => 'field_5aa340d202dcc',

				'label' => 'Tiêu đề chuyên mục 3',

				'name' => 'tieu-de-3',

				'type' => 'text',

				'default_value' => '',

				'placeholder' => '',

				'prepend' => '',

				'append' => '',

				'formatting' => 'html',

				'maxlength' => '',

			),

			array (

				'key' => 'field_5aa34b0426d11',

				'label' => 'Title video 3',

				'name' => 'title-video-3',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 title để gắn với video',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa34ba41028f',

				'label' => 'List link video 3',

				'name' => 'list-link-3',

				'type' => 'textarea',

				'instructions' => 'Copy link video vào đây, mỗi dòng là 1 video ',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa342e6983d4',

				'label' => 'List link ảnh 3',

				'name' => 'list-anh-3',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 hình ảnh để gắn với video + title',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa33d1b46f61',

				'label' => 'List video 4',

				'name' => '',

				'type' => 'tab',

			),

			array (

				'key' => 'field_5aa340db02dcd',

				'label' => 'Tiêu đề chuyên mục 4',

				'name' => 'tieu-de-4',

				'type' => 'text',

				'default_value' => '',

				'placeholder' => '',

				'prepend' => '',

				'append' => '',

				'formatting' => 'html',

				'maxlength' => '',

			),

			array (

				'key' => 'field_5aa34b0f4e8e6',

				'label' => 'Title video 4',

				'name' => 'title-video-4',

				'type' => 'textarea',

				'instructions' => 'Mỗi dòng là 1 title để gắn với video',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa34baee685e',

				'label' => 'List link video 4',

				'name' => 'list-link-4',

				'type' => 'textarea',

				'instructions' => 'Copy link video vào đây, mỗi dòng là 1 video ',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

			array (

				'key' => 'field_5aa360179cdc0',

				'label' => 'List ảnh 4',

				'name' => 'list-img-4',

				'type' => 'textarea',

				'default_value' => '',

				'placeholder' => '',

				'maxlength' => '',

				'rows' => '',

				'formatting' => 'none',

			),

		),

		'location' => array (

			array (

				array (

					'param' => 'page_template',

					'operator' => '==',

					'value' => 'template-video/video-template-pr.php',

					'order_no' => 0,

					'group_no' => 0,

				),

			),

		),

		'options' => array (

			'position' => 'normal',

			'layout' => 'no_box',

			'hide_on_screen' => array (

			),

		),

		'menu_order' => 0,

	));

}

  

  

?>