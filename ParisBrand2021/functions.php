<?php
//Thêm Page Field
include "options/group_page_field.php";
include "options/page_field.php";
include_once 'Ads_category.php';
include_once 'shortcode.php';
require_once 'template-video/video-func.php';
// add_filter( 'wpseo_breadcrumb_single_link', 'ss_breadcrumb_single_link', 10, 2 );

add_filter('use_block_editor_for_post', '__return_false');

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

function add_sapo_to_content($text){
	global $post;
	$sapo = get_field('sapo',$post->ID);
	if($sapo != ''){
		$text = '<div class="sapo">'.$sapo.'</div>'.$text;
	}
	
	return $text;
}

add_filter('the_content', 'add_sapo_to_content');
 
 //FUNCTION TEXT REPLACE 
function replace_text_wps($text){
	// check if the repeater field has rows of data
	if( have_rows('tool_replace','option') ):

		// loop through the rows of data
		while ( have_rows('tool_replace','option') ) : the_row();

			// display a sub field value
			$textcu = get_sub_field('noi_dung_cu');
			$textmoi = get_sub_field('noi_dung_thay_the');
			$text = str_replace($textcu, $textmoi, $text);
		endwhile;
		return $text;
	else :
		return $text;
	endif;
}


add_filter('the_content', 'replace_text_wps');
add_filter('the_excerpt', 'replace_text_wps');
add_filter('the_title', 'replace_text_wps');


//END TEXT REPLACE 
// video covert ID
function getIDvideo($url) {
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];  
}
 
function rd301(){
	global $wp;
	$crequest = home_url( $wp->request );	
	$userrequest = str_replace(get_option('home'), '', $crequest);  
	$userrequest = rtrim($userrequest,'/');

 
	if( have_rows('tool_redirect','option') ):
		while ( have_rows('tool_redirect','option') ) : the_row();
			
			$oldLink = get_sub_field('link_cu');
			$newLink = get_sub_field('link_thay_the');
			
			$oldLink = str_replace(get_option('home'),'',$oldLink);
			$oldLink = rtrim($oldLink,'/');
			if($userrequest == $oldLink){
				wp_redirect( $newLink, 301 );
				
			}
		endwhile;		
	endif;
}
add_action( 'template_redirect', 'rd301' );
 
function ss_breadcrumb_single_link( $link_output, $link ) {
    $element = 'span';
    $element = esc_attr( apply_filters( 'wpseo_breadcrumb_single_link_wrapper', $element ) );
    $link_output = '<' . $element . ' typeof="v:Breadcrumb">';
    if ( isset( $link['url'] ) && ( $i < ( count( $links ) - 1 ) || $paged ) ) {
        $link_output .= '<a href="' . esc_url( $link['url'] ) . '" property="v:title">' . esc_html( $link['text'] ) . '</a>';
    } else {
        if ( isset( $opt['breadcrumbs-boldlast'] ) && $opt['breadcrumbs-boldlast'] ) {
            $link_output .= '<strong class="breadcrumb_last" property="v:title">' . esc_html( $link['text'] ) . '</strong>';
        } else {
            $link_output .= '<li class="breadcrumb_last" property="v:title">' . esc_html( $link['text'] ) . '</li>';
        }
    }
    $link_output .= '</' . $element . '>';
    return $link_output;
}
 
function catch_that_image($id = null)
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    if ($id != '') {
        $post_content = get_post_field('post_content', $id);
        $output       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
    } elseif (is_single()) {
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $posts['0']->post_content, $matches);
    } else {
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    }
    $first_img = $matches [1] [0];

    if (empty($first_img)) {
        $first_img = get_template_directory_uri() . "/media/images/logo.png";
    }
    return $first_img;
}

register_sidebar(array(
 'name'          => 'Sidebar',
 'id'            => 'block-content',
 'description'   => 'Khu v?c sidebar ',
 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 'after_widget'  => '</aside>',
 'before_title'  => '<p class="title">',
 'after_title'   => '</p>'
));
add_theme_support( 'post-thumbnails' );


 function getopc($field,$cat=''){
    if($cat==''){
        if(is_category()){
            $cat=get_query_var('cat');
            $cat_desc=get_option('category_'.$cat.'_'.$field);
        }elseif(is_tag()){
            $cat=get_query_var('tag');  
            $cat_desc=get_option('category_'.$cat.'_'.$field);    
        }elseif(is_single()){
            
            global $post;
            $rep = str_replace('cat','',$field);
            if((get_field('single'.$rep,$post->ID)!='')AND(get_field('single'.$rep,$post->ID)!='-')){
                $cat_desc=html_entity_decode(get_field('single'.$rep,$post->ID));
            }else{
                $cats = get_the_category($post->ID);
                if(count($cats)>1){                    
                    foreach($cats as $c){
                        if($c->category_parent!=0){
                            $cat=$c->term_id;     
                            
                        }
                    }
                    $cat_desc=get_option('category_'.$cat.'_'.$field);
                    $cat_desc=($cat_desc!='')?$cat_desc:get_option('category_'.$cats[1]->term_id.'_'.$field); 
                }else{
                    $cat=$cats[0]->term_id;    
                    $cat_desc=get_option('category_'.$cat.'_'.$field);
                    $cat_desc=($cat_desc!='')?$cat_desc:get_option('category_'.$cats[1]->term_id.'_'.$field);                 
                }
                               
            }
            
        }
    }
        
    return $cat_desc;;
}



add_filter('get_the_excerpt', 'exc');

function wp_ffpc_redirect_callback(){}

function exc($param) {
	$excerpt = $param;
	$charlength=140;
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			return mb_substr( $subex, 0, $excut ).'[...]';
		} else {
			return $subex.'[...]';
		}
		//echo '[...]';
	} else {
		return $excerpt;
	}
    //return "Whew !".$param;
}


    
   
  
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Cấu hình Website',
		'menu_slug' 	=> 'theme-general-settings',
		// 'capability'	=> 'edit_theme_options',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Box Settings',
		'menu_title'	=> 'Trang chủ',
        'parent_slug'	=> 'theme-general-settings',
        'capability'	=> 'edit_theme_options',
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Tool Settings',
		'menu_title'	=> 'Công Cụ Hỗ Trợ',
        'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Code Checking Settings',
		'menu_title'	=> 'Code Checking',
        'parent_slug'	=> 'theme-general-settings',
        'capability'	=> 'edit_theme_options',
	));

	
}

/* Limit the number of site map entries (Yoast SEO plugin) */
function max_entries_per_sitemap() {
    return 100;
}

add_filter( 'wpseo_sitemap_entries_per_page', 'max_entries_per_sitemap' );

/*Home page*/
function restrict_page_deletion($post_ID){
    $user = get_current_user_id();

    $restricted_pageId = 59018;

    if($post_ID == $restricted_pageId)
    {
        echo "You are not authorized to delete this page.";
        exit;
    }
}
// add_action('before_delete_post', 'restrict_page_deletion', 10, 1);
add_action('wp_trash_post', 'restrict_page_deletion', 10, 1);

/** * Completely Remove jQuery From WordPress */
function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');

function wpse_284352_author_link( $author_link, $author ) {
    return $author;
}
add_filter( 'get_comment_author_link', 'wpse_284352_author_link', 10, 2 );

//TẠO JSON file
class BuildJson {
    function __construct() {}
    // Ghi file trong PHP 
    public function write($data,$name){
      $theme_dir = ABSPATH . 'wp-content/themes/ParisBrand2021/json/';
      $file = $theme_dir.$name.".json";
      $handle = fopen($file, 'a'); //w
      fwrite($handle, $data);
      fclose($handle);   
    } 
    //Đọc file trong PHP
    public function read($name)
    {
      $theme_dir = ABSPATH . 'wp-content/themes/ParisBrand2021/json/';
      $file = $theme_dir.$name.".json";
      $handle = fopen($file, 'r');
      while(!feof($handle))
      {
          return fgets($handle);
      }
      fclose($handle);
    }
    
     public function clear($name)
    {
      $theme_dir = ABSPATH . 'wp-content/themes/ParisBrand2021/json/';
      $file = $theme_dir.$name.".json";
      $handle = fopen($file, 'w');
      while(!feof($handle))
      {
          return fgets($handle);
      }
      fclose($handle);
    }
   
} 

  
  add_action( 'transition_post_status', 'some_function', 10, 3 );
  function some_function( $new, $old, $post ) {
      if ( ( $new == 'publish' ) && ( $old == 'publish' ) && ( $post->post_type == 'page' ) ) {
          $data = json_encode(get_field('page_field',$post->ID)); // Lấy Field Page
          $filename = 'page-'.$post->ID;
          $json = new BuildJson;
          $json->clear($filename);
          $json->write($data,$filename);
      } else {
          return;
      }
  }
  