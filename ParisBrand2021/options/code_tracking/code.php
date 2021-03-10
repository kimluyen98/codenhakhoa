
<?php 

// Code checking
if( have_rows('code_checking_ft','option') ):
	while ( have_rows('code_checking_ft','option') ) : the_row();
		if( get_row_layout() == 'textarea' ): 

			$textcode = get_sub_field('textcode');
			if($textcode) : 
				echo $textcode;
			endif;
			
		endif;
		if( get_row_layout() == 'sideid' ): 

			$sideid_text = get_sub_field('sideid_text');
			if($sideid_text) : ?>

				<!-- Ants Insight script --> 
				<!-- <script type="text/javascript">
				var _siteId="<?php echo $sideid_text; ?>";
				(function(){
				var w = window;
				if (w.admp_event) return;
				var a = window.admp_event =  function() {a.queue.push(arguments);}  
				a.siteId = _siteId;
				a.track = a; 
				a.queue = [];
				var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//st-a.anthill.vn/insight.js";
				var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
				</script> -->
				<!-- End of Ants Insight script -->

			<?php endif;
			
		endif;
	endwhile;
else :
	// no layouts found
endif;
?>	


<!-- <script type="text/javascript">
	var ccp = "558803148";
	var ncp = "[Paris] Thương Hiệu";
	
   var div = "ants_nktv_free";
   var campaign = "[nhakhoatuvan]";
   var temp = "nktvfree";
   document.write("<div id='" + div + "' ></div>"); 
   var script = document.createElement("script");
   script.type = "text/javascript";
   script.async=!0;
   script.src = "https://nhakhoaparis.vn/quangcao247/contact/c.js?zn=" + div + "&g="+ escape(campaign) + "&t=" + temp;
   document.getElementsByTagName("head")[0].appendChild(script);  

   var div = "ants_nkkm2";
   var campaign = "[NKKM]";
   var temp = "nkkm2";
   document.write("<div id='" + div + "' ></div>"); 
   var script = document.createElement("script");
   script.type = "text/javascript";
   script.async=!0;
   script.src = "https://nhakhoaparis.vn/quangcao247/contact/c.js?zn=" + div + "&g="+ escape(campaign) + "&t=" + temp;
   document.getElementsByTagName("head")[0].appendChild(script);  

   var div = "ants_nkhl";
   var campaign = "[nhakhoahotline]";
   var temp = "nkhl";
   document.write("<div id='" + div + "' ></div>"); 
   var script = document.createElement("script");
   script.type = "text/javascript";
   script.async=!0;
   script.src = "https://nhakhoaparis.vn/quangcao247/contact/c.js?zn=" + div + "&g="+ escape(campaign) + "&t=" + temp;
   document.getElementsByTagName("head")[0].appendChild(script);  
</script> -->
<script>
  var ref = document.referrer;
  //set cookies
  function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  //get cookies    
  function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
  }

  //Tách chuỗi link
  function locurl(url) {
      var parse_url = /^(?:([A-Za-z]+):)?(\/{0,3})([0-9.\-A-Za-z]+)(?::(\d+))?(?:\/([^?#]*))?(?:\?([^#]*))?(?:#(.*))?$/;
      var result = parse_url.exec(url);
      var res = result[3].replace(/www./gi, '');
      return res;
  }
  if(ref.length){
      var ref_host = locurl(ref);
      var landing_url =  document.URL;
      var home_url = locurl(landing_url);
      if(ref_host != home_url){
          var first_url = landing_url;
          var refer = ref;
          setCookie('ref', refer, 30);
          setCookie('first_url', first_url, 30);
      }else{
          var refer = getCookie('ref');
          var first_url = getCookie('first_url');
      }
      console.log(refer);
      console.log(first_url);
  }
</script>


<!-- Tool bar right -->
<?php if(is_front_page()): else: ?>

  <div class="tool">
  <a rel="nofollow" href="#" class="tool__item tool__item-1 btnnktv">ĐĂNG KÝ</a>
  <a target="_blank" rel="nofollow" href="<?php the_field('facebook_message','option') ?>" class="tool__item tool__item-2">MESSENGER</a>
  <div class="location">
    <a rel="nofollow" href="#" class="tool__item tool__item-3 "> << Địa chỉ </a>
    <div class="diadiem">
      <div class="img">
        <img src="<?php echo get_template_directory_uri(); ?>/media/images/adm-beauty/home/location.jpg" alt="">
        <div class="address">
          <?php the_field('chi_nhanh','option'); ?>          
        </div>
      </div>
    </div>
  </div>
  <a rel="nofollow" href="javascript:void(0)" class="tool__item tool__item-4 btnnkhotline"></a>
</div> 

<?php endif; ?>
<!--End Tool bar right -->

<!-- Code tracking HM -->
<script type="text/javascript" src="http://nhakhoaparis.vn/quangcao247/code_tracking/ver2/HM_Code-new.js"></script>
<!-- FB Pixel -->
<?php if ( is_page(12229) ):?>

  <script> fbq('track', "CompleteRegistration");</script>

<?php endif;?>

<?php 
  $cate = get_the_category();
  $id= $cate[0]->cat_ID;


  if(is_category() || is_single() && get_field('bndk','category_'.$id) !=''){

      echo '
      <div class="bannerRight">
        <div class="dbx btn_show" >Ưu đãi</div>
        <div class="pppdk" id="popupleft">
          <div class="dbx btn_close" style="z-index:9999;">X</div>
          <div class="dbdesc">
            <div>
			  	<a target="_blank" rel="nofollow" href="'.get_field('lbn','category_'.$id).'">
					<picture>
						<source media="(min-width:600px)" srcset="'.get_field('bndk','category_'.$id).'" >
						<img  src="/rs/?w=320&h=50&src='.get_field('bnmb','category_'.$id).'">
					</picture>
				</a>
            </div>
          </div>
        </div>
      </div>
      ';
      if (isset($_GET['test'])){
        echo get_field('bndk','category_'.$id) ;
        echo($id);
      }
  }else{
    echo '
    <div class="bannerRight">
      	<div class="dbx btn_show" style="display:none;" >Ưu đãi</div>
	  	<div class="pppdk" id="popupleft">
			<div class="dbx btn_close">X</div>
			<div class="dbdesc">
	';

	// if(isset($_GET['test'])){
		if( have_rows('adv','option') ):
			while ( have_rows('adv','option') ) : the_row();
				if( get_row_layout() == 'adv_right' ):
					echo '
						<a target="_blank" rel="nofollow" href="'.get_sub_field('adv_link').'">
							<picture>
								<source media="(max-width:600px)" srcset="'.get_sub_field('adv_mb').'" >
								<img  src="/rs/?w=300&h=250&src='.get_sub_field('adv_pc').'">
							</picture>
						</a>
					';
				endif;
			endwhile;
		endif;

	// }else{ 
	// 	echo'<div id="polyad_ads_zone2"></div>';
	// }

	echo '			
				<a target="_blank" href="'.get_field('lbn','category_'.$id).'"><img src="'.get_field('bndk','option').'"></a>
			</div>
		</div>
    </div>
    ';
  }
?>
<script type="text/javascript" src="https://nhakhoaparis.vn/quangcao247/contact/template/js/js.js?t=12234"></script>
<script src="<?php echo get_template_directory_uri(); ?>/media/js/stickbn_NK.js"></script>