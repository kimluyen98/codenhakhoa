<?php
	/*popup video*/
	function youtube_shortcode($atts,$content=null){
		$url = $atts['url'];
		$title = $atts['title'];
		static $count = 0;
        $count++;
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);
		$path = get_template_directory_uri();
		$path = $path.'/Module/Popup/popup_video_2_0_0';
		$style = '
			<style>
				.popup_video_2_0_0 {
				position: relative;
				cursor: pointer;
				background: #000;
				display:table;
				margin:15px auto 0;
				margin-top:15px;
				}
				.popup_video_2_0_0__tt{
					text-align:center;
					padding:10px;
				}
				.popup_video_2_0_0 img {
				position: relative;
				opacity: .4;
				display: block;
				transition: 0.3s;
				max-width: 100%;
				height:auto;
				}
				.popup_video_2_0_0::after {
				content: "";
				position: absolute;
				background: url('.$path.'/images/clip-icon.png) center 0 no-repeat;
				background-size: 100%;
				width: 50px;
				height: 50px;
				display: block;
				left: calc(50% - 23px);
				top: calc(50% - 23px);
				transition: 0.3s;
				-webkit-filter: grayscale(100%);
				filter: grayscale(100%);
				opacity: 1;
				}
			</style>
		';
		if ($count > 1):
            $style = '';
        endif;

		if (!empty($matches)) {
			$img = $atts['img'];
			$title = $atts['title'];
			return $style.'
				<a class="popup_video_2_0_0 modal-clip" data-video="'.$matches[1].'" rel="nofollow">
					<img src="'.$img.'" alt="'.$title.'">
				</a>
				<p class="popup_video_2_0_0__tt"><i>'.$title.'</i></p>
			';
		}
	}
	add_shortcode('youtube','youtube_shortcode');
	/*End Popup video*/
?>