<style>
li.recentcomments {
    list-style: none;
    border-bottom: 1px #ccc solid;
    background-color: #f7f7f7;
    padding: 10px;
}

span.comment-content {
    width: 100%;
    display: inline-block;
    padding: 10px;
    border-radius: 10px;
    font-style: italic;
}

ul#recentcomments {
    padding-left: 0;
}

.more-comment {
    color: #20847f;
    float: right;
    font-size: 12px;
    font-style: initial;
    width: 100%;
    text-align: right;
    margin-top: 5px;
}
</style>
<?php
			
			function short($content,$limit) {
				$content = explode(' ', $content, $limit);

				if (count($content) >= $limit) {
					array_pop($content);
					$content = implode(" ", $content) . '...';
				} else {
					$content = implode(" ", $content);
				}

				$content = preg_replace('/\[.+\]/','', $content);
				// $content = apply_filters('the_content', $content); 
				$content = str_replace(']]>', ']]&gt;', $content);

				return $content;
			}
										
			$comments = get_comments(array(
				'number'      => 5,
				'status'      => 'approve',
				'post_status' => 'publish'
			));
			
			// var_dump($comments);
			
			$output = '<ul id="recentcomments">';
			if ( is_array( $comments ) && $comments ) {
				$post_ids = array_unique( wp_list_pluck( $comments, 'comment_post_ID' ) );
				_prime_post_caches( $post_ids, strpos( get_option( 'permalink_structure' ), '%category%' ), false );

				foreach ( (array) $comments	 as $comment ) {

					$output .= '<li class="recentcomments">';
					$output .= sprintf( _x( '%1$s on %2$s', 'widgets' ),
						'<span class="comment-author"><b>'. $comment->comment_author.'</b></span>',
						'<a style="color:#136fa7;font-weight:600;" href="' . esc_url( get_comment_link( $comment ) ) . '">' . get_the_title( $comment->comment_post_ID ) . '</a><span class="comment-content">' .short($comment->comment_content,15).'<a href="' . esc_url( get_comment_link( $comment ) ) . '" class="more-comment">Xem thêm >></a></span>'
					);
					$output .= '</li>';
				}
			}
			$output .= '</ul>';
			
			echo $output;
		?>