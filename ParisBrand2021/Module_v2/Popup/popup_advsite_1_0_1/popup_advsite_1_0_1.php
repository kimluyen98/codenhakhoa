<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Popup/popup_advsite_1_0_1';

	if($check == 0){
		$css_inline .= "
            <style>
                .pop-animate-zoom {
                    animation: animatezoom 0.6s
                }
                
                @keyframes animatezoom {
                    from {
                        transform: scale(0)
                    }
                    to {
                        transform: scale(1)
                    }
                }
                
                .pop-modal {
                    z-index: 12;
                    display: none;
                    padding-top: 150px;
                    position: fixed;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    overflow: auto;
                    background-color: rgb(59, 62, 64, 0.6);
                }
                
                .pop-modal-content {
                    margin: auto;
                    position: relative;
                    padding: 0;
                    outline: 0;
                    max-width: 600px
                }
                
                .popBox {
                    position: relative;
                }
                
                .popBox img {
                    display: block;
                    max-width: 100%;
                }
                
                .open {
                    display: block;
                }
                
                .closeBox {
                    background: red;
                    width: 20px;
                    height: 20px;
                    color: #fff;
                    font-weight: bold;
                    position: absolute;
                    top: 0;
                    right: 0;
                    z-index: 99;
                    text-align: center;
                    line-height: 20px;
                }
                
                @media screen and (max-width:414px) {
                    .pop-modal-content {
                        max-width: 90%;
                    }
                }
            </style>
        ";
        
		add_action('wp_footer', 'popup_advsite_1_0_1');
		function popup_advsite_1_0_1(){ 
			echo '
                <script>
                const popup_advsite_1_0_1__close=document.getElementById("popup_advsite_1_0_1__close"),popup_advsite_1_0_1=document.getElementById("popup_advsite_1_0_1");function getCookie(e){var o=document.cookie.match("(^|;) ?"+e+"=([^;]*)(;|$)");return o?o[2]:null}function setCookie(e,o,p){var _=new Date;_.setTime(_.getTime()+864e5*p),document.cookie=e+"="+o+";path=/;expires="+_.toGMTString()}var pop_cookie=getCookie("popup");popup_advsite_1_0_1__close.addEventListener("click",function(){setCookie("popup","1","1"),popup_advsite_1_0_1.style.display="none"}),null==pop_cookie||""==pop_cookie?(console.log("Hien"),setTimeout(function(){popup_advsite_1_0_1.classList.add("open")},5e3)):(console.log("An"),popup_advsite_1_0_1.style.display="none");
                </script>
			';           
		};		
	}
	
?>

<div class="popup_advsite_1_0_1 pop-modal" id="popup_advsite_1_0_1">
    <div class="pop-modal-content pop-animate-zoom popBox">
        <span class="closeBox popup_advsite_1_0_1__close" id="popup_advsite_1_0_1__close">&times;</span>
        <?php
            $data = explode("\n",  $field["data"]);
            echo '
                <a target="_blank" rel="nofollow" href="'.$data[2].'">
                    <img style="width:100%" src="'.$data[1].'" title="'.$data[0].'">
                </a>
            ';
        ?>
    </div>
</div>

    
