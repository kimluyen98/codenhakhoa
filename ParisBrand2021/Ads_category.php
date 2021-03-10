<?php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_a_quan-ly-quang-cao',
		'title' => 'A_Quản lý Quảng cáo',
		'fields' => array (
			array (
				'key' => 'field_5979aed03f62d',
				'label' => 'Link banner',
				'name' => 'lbn',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5979ae403f629',
				'label' => 'Banner mobile 320x50',
				'name' => 'bnmb',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5979ae7d3f62a',
				'label' => 'Banner Deskop 300x250',
				'name' => 'bndk',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5979aea03f62b',
				'label' => 'Banner đầu bài deskop 728x90',
				'name' => 'bndb',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5979aeb63f62c',
				'label' => 'Banner deskop cuối bài 728x90',
				'name' => 'bncb',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

	
?>