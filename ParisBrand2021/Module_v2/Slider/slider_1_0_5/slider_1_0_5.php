<?php
    if($check == 0){
        include(locate_template("Module_v2/Slider/slider_1_0_5/css/slider_1_0_5_css.php"));

        add_action( 'theme_js', 'slider_1_0_5_js' );
        function slider_1_0_5_js(){
            echo '
                <script>
                    var slider_1_0_5_slide=tns({container:".slider_1_0_5_slide",items:2,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,mouseDrag:!0,lazyload:!0,gutter:10,lazyloadSelector:".tns-lazy",navPosition:"bottom",controlsPosition:"bottom",gutter:10,slideBy:1,loop:!1,controls:!0,nav:!1,responsive:{0:{items:1},768:{items:1}}});
                </script>
            ';
        }

    }
?>

<?php
foreach($page_json as $field): 
    if($field->acf_fc_layout == 'slider'):
    foreach($field->slider_sub_fields as $slider_data): 
        if($slider_data->acf_fc_layout == 'slider_1_0_5'):

        $slider_pc = $slider_data->slide_pc;
        $slider_mobile = $slider_data->slide_mb;
        echo '<section class="slider_1_0_5"><div class="slider_1_0_5_slide">';
        foreach($slider_pc as $key => $value):
            echo '<div class="slider_1_0_5__item"><a rel="nofollow" href="'.$value->description.'" class="slider_2_0_0_item">
                <picture>
                    <source media="(min-width:600px)"  class="tns-lazy" data-srcset="'.$value->url.'">
                    <img  class="tns-lazy" data-src="'.$slider_mobile[$key]->url.'" alt="'.$value->alt.'" title="'.$value->title.'">
                </picture>
            </a></div>';
        endforeach;
        echo '</div></section>';

    endif; endforeach;
endif; endforeach;
?>  