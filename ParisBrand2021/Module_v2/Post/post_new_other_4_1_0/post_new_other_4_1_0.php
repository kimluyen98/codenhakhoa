<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Post/post_new_other_4_1_0';
	if($check == 0){
		$css_inline .= '
        <style>

            .post_new_other_4_1_0 {
            font-family: Quicksand, Arial, Helvetica;
            font-weight: 500;
            }
            
            .post_new_other_4_1_0 {
            margin: 10px 0;
            border: 2px solid #e1908f;
            border-radius: 5px;
            }
            .post_new_other_4_1_0 .post_other_tt {
            text-transform: uppercase;
            font-size: 22px;
            display: flex;
            align-items: center;
            background-color: #e1908f;
            color: #fff;
            }
            .post_new_other_4_1_0 .post_other_tt svg {
            width: 35px;
            height: 35px;
            background-color: #df6666;
            fill: #ffff;
            padding: 5px 10px;
            margin-right: 10px;
            border-radius: 5px;
            }
            .post_new_other_4_1_0 a {
            color: #3e3efe;
            }
            .post_new_other_4_1_0 a:hover {
            color: #0056a4;
            }
            
            @media (max-width: 414px) {
            .post_new_other_4_1_0 {
                font-size: 14px;
            }
            .post_new_other_4_1_0 .post_other_tt {
                font-size: 18px;
            }
            }
            
            /*# sourceMappingURL=post_new_other_4_1_0.css.map */
        
        </style>
        ';
	}
	
?>
    <section class="post_new_other_4_1_0">
        <div class="container">
            <div class="post_other_tt">
            <svg id="Layer_1" enable-background="new 0 0 511.937 511.937" height="512" viewBox="0 0 511.937 511.937" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452.505 59.468c-38.349-38.348-89.335-59.468-143.568-59.468s-105.22 21.12-143.567 59.468c-38.349 38.348-59.468 89.334-59.468 143.567 0 37.061 9.869 72.603 28.353 103.635l-119.506 119.505c-19.586 19.588-19.586 51.459.001 71.048 9.489 9.488 22.104 14.714 35.523 14.714 13.42 0 26.035-5.226 35.523-14.714l119.505-119.505c31.032 18.484 66.574 28.353 103.636 28.353 54.232 0 105.219-21.12 143.567-59.468 79.164-79.164 79.164-207.972.001-287.135zm-387.921 416.541c-3.822 3.822-8.904 5.927-14.311 5.927-5.405 0-10.488-2.105-14.31-5.927-7.891-7.891-7.891-20.73-.001-28.622l70.064-70.064 28.621 28.621zm91.277-91.277-28.621-28.621 24.519-24.519c4.261 5.19 8.8 10.2 13.611 15.011s9.821 9.349 15.01 13.61zm275.431-59.342c-32.683 32.682-76.136 50.681-122.354 50.681-46.22 0-89.673-17.999-122.354-50.681-32.682-32.682-50.681-76.135-50.681-122.354s17.999-89.672 50.681-122.354c32.68-32.683 76.134-50.682 122.353-50.682s89.672 17.999 122.354 50.681c67.467 67.466 67.467 177.242.001 244.709z"/><path d="m411.525 100.446c-27.402-27.402-63.835-42.494-102.589-42.494-38.753 0-75.186 15.091-102.588 42.494s-42.494 63.835-42.494 102.589c0 38.753 15.092 75.186 42.494 102.588 27.402 27.403 63.835 42.494 102.588 42.494 38.754 0 75.187-15.091 102.589-42.494 27.402-27.402 42.494-63.835 42.494-102.588s-15.091-75.186-42.494-102.589zm-21.213 183.965c-21.736 21.736-50.636 33.707-81.376 33.707-30.739 0-59.639-11.971-81.375-33.707s-33.707-50.636-33.707-81.375c0-30.74 11.971-59.64 33.707-81.376s50.636-33.707 81.375-33.707c30.74 0 59.64 11.971 81.376 33.707s33.707 50.636 33.707 81.376c0 30.738-11.97 59.638-33.707 81.375z"/><path d="m240.873 241.098h30.002v30h-30.002z" transform="matrix(.707 -.707 .707 .707 -106.145 255.931)"/><path d="m297.121 139.959 21.213 21.214c8.95-8.95 23.515-8.95 32.465 0 4.336 4.335 6.724 10.101 6.724 16.232 0 6.132-2.388 11.897-6.724 16.233-8.95 8.949-23.513 8.951-32.465 0l-10.606-10.606-35.842 35.842 21.213 21.213 16.158-16.158c20.086 10.914 45.791 7.888 62.755-9.077 10.002-10.002 15.511-23.301 15.511-37.446s-5.509-27.443-15.511-37.445c-20.646-20.648-54.242-20.649-74.891-.002z"/></g></svg> T??m hi???u th??m
            </div>
            <div class="post_other_new">
                <ul>
                    <?php
                            // $value = $field['title2'];
                            // 	$data = explode("\n",  $value);
                            // $catz = get_the_category($post->ID);
                            // $cat=$catz[0]->term_id;
                        $i=0;
                        $my_query = new WP_Query('cat=tin-tuc&offset=0&showposts=2&orderby=desc'); 
                        while ($my_query->have_posts()) : 
                            $my_query->the_post(); 
                            global $post;
                            $do_not_duplicate[$post->ID] = $post->ID;
                                echo'
                                    <li><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></li>
                                ';
                        endwhile;
                        wp_reset_query();

                    ?>
                </ul>
            </div>
        </div>
    </section>


