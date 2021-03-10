<?php
	$path = get_template_directory_uri();
	$domain  =   parse_url($_SERVER['HTTP_REFERER'])['host'];
	if($check == 0){
		$js_inline .='
			<script>
				
				(function(){
					var link = document.createElement("link");
					  link.type = "image/x-icon";
					  link.rel = "shortcut icon";
					  link.href = "https://nhakhoaparis.vn/wp-content/themes/ParisBrand2019/favicon.png";
					
					var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(link,t)})();
			</script>
			
			<script type="text/javascript" src="https://nhakhoaparis.vn/quangcao247/contact/template/js/js.js?t=11235"></script>
			<script type="text/javascript" src="https://nhakhoaparis.vn/css/custom_v2.js"></script>
	
			<!-- Global site tag (gtag.js) - Google Ads: 935780521 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-935780521"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "AW-935780521");
</script>	
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78889312-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "UA-78889312-1");
</script>

<!-- Facebook Pixel Code -->
	<script>
		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
				n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			}; if (!f._fbq) f._fbq = n;
			n.push = n; n.loaded = !0; n.version = "2.0"; n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
		}(window,
			document, "script", "//connect.facebook.net/en_US/fbevents.js");

		fbq("init", "1216077185086864");
		fbq("track", "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1216077185086864&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->	

			<script>
				setTimeout(function () {

					!function (f, b, e, v, n, t, s) {
						if (f.fbq) return; n = f.fbq = function () {
							n.callMethod ?
							n.callMethod.apply(n, arguments) : n.queue.push(arguments)
						}; if (!f._fbq) f._fbq = n;
						n.push = n; n.loaded = !0; n.version = "2.0"; n.queue = []; t = b.createElement(e); t.async = !0;
						t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
					}(window,
						document, "script", "//connect.facebook.net/en_US/fbevents.js");

					fbq("init", "1216077185086864");
					fbq("track", "PageView");
				}, 5000)
			</script>


		';
		
	}

	echo $field['data'];   
	echo $js_inline;   
?>





