<?php 
/* Template Name: Langding Page 
* Template Post Type: post
*/
//wp_head();

if (current_user_can('administrator') || current_user_can('editor')) {
 wp_admin_bar_render();
 $addcode = '<meta name="robots" content="noindex,nofollow"/>
 <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/admin-bar.min.css?ver=4.9.10" />
 <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/dashicons.min.css?ver=4.9.10" />
 </head>';
}else{
	$addcode = '
	<meta name="robots" content="noindex,nofollow"/>
	</head>';
}

global $post;
 ?>
<?php
	$field_html = get_post_meta($post->ID,'html_code',true);
	if($field_html != ''){
		$html = str_replace('"media/','"'.get_post_meta($post->ID,'lp_link',true).'media/',$field_html);
		echo $html = str_replace('</head>',$addcode,$html);
	}else{
		echo '<html><head>'.$addcode.'<body><h3 style="margin-top:200px;text-align:center">MISSING HTML CODE</h3></body></html>';
	}
    
	
?>
<?php //wp_footer(); ?>
