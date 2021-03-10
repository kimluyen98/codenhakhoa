<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Other/checking_site_1_0_0';
	$domain  =   parse_url($_SERVER['HTTP_REFERER'])['host'];
	// echo $field['data'];   
	// echo $js_inline;
?>

<script>
/* ------------ Load Muc tieu Ontime 30s + Scroll -------------------*/

var scroll = 0;
var time = 0;
var lead = 0;	
var scroll_class = $(".scroll_check"); //Class tính Scroll
if(scroll_class.length){
	$(document).bind('scroll', function(){
		//Check điểm cuối của content
		var endcontent = scroll_class.offset().top + scroll_class.innerHeight();
		//Check scroll top + chiều rộng màn hình = Điểm cuối scroll
		var bottom_position = $(window).scrollTop() + $(window).outerHeight(true);
		// console.log(bottom_position + '-' + endcontent);
		//Điêm cuối scroll > điểm cuối bài viết => Hoàn thành
		if(bottom_position >= endcontent){
			scroll = 1;
			console.log('SCROLL END'); 
		}
    });
}

var auto_refresh = setInterval(
    function (){
		time++;
		// console.log(time);
		check_dk(time,scroll);
    }, 1000);

function check_dk(time,scroll){
	if(time>20 && scroll == 1 && lead == 0){ //Thỏa mãn 2 điều kiện với call Hàm
		lead = 1; //Đánh dấu đã lead cho bài viết này
		console.log('DONE'); 
		//Call tới Analytics
		gtag('event','Read', {event_category: 'Content',event_label: 'Completed'});
		ga('send', 'event', 'Content', 'Read', 'Completed');
	}
}

/* ------------END Load Muc tieu Ontime 30s + Scroll -------------------*/	
</script>
	
<!-- Facebook Pixel Code -->
<script>
	! function(f, b, e, v, n, t, s) {
		if (f.fbq) return;
		n = f.fbq = function() {
			n.callMethod ?
				n.callMethod.apply(n, arguments) : n.queue.push(arguments)
		};
		if (!f._fbq) f._fbq = n;
		n.push = n;
		n.loaded = !0;
		n.version = '2.0';
		n.queue = [];
		t = b.createElement(e);
		t.async = !0;
		t.src = v;
		s = b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t, s)
	}(window,
		document, 'script', '//connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1216077185086864');
	fbq('track', "PageView");
</script>

<!-- FB Pixel -->
<?php if ( is_page(12229) ):?>

<script> fbq('track', "CompleteRegistration");</script>

<?php endif;?>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1216077185086864&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Eclick -->
<script type="text/javascript">
	(function() {
		var a = window._eclickq || (window._eclickq = []);
		if (!a.loaded) {
			var b = document.createElement("script");
			b.async = !0;
			b.src = ("https:" == document.location.protocol ? "https:" : "http:") + "//s.eclick.vn/delivery/retargeting.js";
			var c = document.getElementsByTagName("script")[0];
			c.parentNode.insertBefore(b, c);
			a.loaded = !0
		}
		a.push(["addPixelId", 12147])
	})();
	window._eclickq = window._eclickq || [];
	window._eclickq.push(["track", "PixelInitialized", {}]);
</script>

<!-- Global site tag (gtag.js) - Google Ads: 935780521 -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-935780521"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'AW-935780521');
</script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78889312-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-78889312-1', {
		'optimize_id': 'GTM-WGSB5CL'
	});
</script> -->

<!-- Global site tag (gtag.js) - Google Ads: 935780521 -->
<script async src="https://www.googletagmanager.com/gtag/js"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'AW-935780521');
	gtag('config', 'UA-78889312-1');
</script>
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
	FB.init({
		xfbml            : true,
		version          : 'v3.3'
	});
	};
	setTimeout(() => {
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
		
	}, 5000);
</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
	attribution=setup_tool
	page_id="185061704983484"
	greeting_dialog_display=hide
	logged_in_greeting="Chào bạn! Nha khoa Paris có thể giúp gì được cho bạn?"
	logged_out_greeting="Chào bạn! Nha khoa Paris có thể giúp gì được cho bạn?">
</div>
<style>
     @media (max-width:414px){
        #fb-root .fb_dialog iframe{
            bottom: 4px !important;
			right: 172px !important;
			/* width: 50px!important;
			height: 50px!important; */
        }
     }
     @media (max-width:392px){
        #fb-root .fb_dialog iframe{
			right: 160px !important;
        }
     }
     @media (max-width:375px){
        #fb-root .fb_dialog iframe{
			right: 145px !important;
        }
     }
     @media (max-width:320px){
        #fb-root .fb_dialog iframe{
			right: 122px !important;
        }
     }
</style>