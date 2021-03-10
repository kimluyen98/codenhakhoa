<?php 
	if($check == 0){
    include(locate_template("Module_v2/Popup/popup_advright_1_0_0/css/popup_advright_1_0_0_css.php"));    
    
    add_action( 'theme_js', 'popup_advright_1_0_0_js' );
    function popup_advright_1_0_0_js(){
        echo '
          <script>
            const popup_advright_1_0_0_close = document.getElementsByClassName("popup_advright_1_0_0_close");
            const popup_advright_1_0_0_box = document.getElementById("popup_advright_1_0_0_box");
            for ( const closeAdvR of popup_advright_1_0_0_close ){
              closeAdvR.addEventListener("click", function(){
                popup_advright_1_0_0_box.style.display = "none";
              });
            }
          </script>
        ';
    }
	}  
?>

<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'poup'):
    	foreach($field->poup_sub_fields as $poup_data): 
			if($poup_data->acf_fc_layout == 'popup_advright_1_0_0'): 
			$data = explode("\n", $poup_data->data) ?>

<div class="popup_advright_1_0_0_box" id="popup_advright_1_0_0_box">
  <div class="popup_advright_1_0_0_close">
      x
  </div>
  <div class="popup_advright_1_0_0_desc">
      <?php
          echo '
              <a target="_blank" rel="nofollow" href="'.$data[1].'" title="'.$data[0].'">
                  <picture>
                    <source media="(max-width:600px)" class="lazy" data-srcset="'.$data[3].'" alt="'.$data[0].'">
                    <img class="lazy" data-src="'.$data[2].'" alt="'.$data[0].'">
                  </picture>
              </a>
          ';
      ?>
  </div>
</div>

<?php endif; endforeach;
endif; endforeach; ?>