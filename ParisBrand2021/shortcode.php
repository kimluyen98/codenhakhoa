<?php 
/*Short Code nhakhoa*/

/*popup video*/
include ('Module_v2/Popup/popup_video_2_0_0/popup_video_2_0_0.php');
// function youtube_shortcode($att,$content=null){
// 	$url = $att['url'];
//   	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);
// 	if (!empty($matches)) {
// 		$img = $att['img'];
// 		$alt = $att['alt'];
// 		return '<a href="https://www.youtube.com/embed/'.$matches[1].'" class="fancybox-media popClip" rel="nofollow"><img src="'.$img.'" alt="'.$alt.'" class="aligncenter"></a>';
// 	}
// 	if(isset($_GET['test'])){
// 		echo "111111111";
// 		return $img ;
// 	}
// }
// add_shortcode('youtube','youtube_shortcode');
/*End Popup video*/

//Add custom styles to the WordPress editor
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles
        array(  
            'title' => 'Ghi chú',  
            'block' => 'div',  
            'classes' => 'post_note',
            'wrapper' => true,
        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

?>