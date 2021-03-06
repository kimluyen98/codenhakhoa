
<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module_v2/Popup/popup_call_1_1_0/';
?>

<style>
    .popup_call_1_1_0 .popup_call_1_1_0_overlay {
        background: rgba(0, 0, 0, 1);
    }
    
    .popup_call_1_1_0_box #popup_call_1_1_0_closePopup {
        color: #fff;
       font-size: 24px;
       font-weight: 500;
    }
    
    .popup_call_1_1_0 {
        font-size: 14px;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        display: none;
        position: fixed;
        z-index: 16;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }
    .popup_call_1_1_0_block{
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
       
    }
    
    .popup_call_1_1_0 input,
    .popup_call_1_1_0 textarea {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    
    .popup_call_1_1_0 .overlay_form {
        font-size: 14px;
    }
    
    .popup_call_1_1_0 .popup_call_1_1_0_overlay {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 10;
        opacity: 0.7;
    }
    
    .popup_call_1_1_0_pop-note {
        padding: 20px 0 10px;
        color: #666;
        font-weight: 600;
        font-style: italic;
    }
    
    .popup_call_1_1_0_pop-call {
        background: #ea3b41;
        color: #fff;
        text-transform: uppercase;
        display: block;
        padding: 12px 0;
        border-radius: 4px;
        font-weight: bold;
        text-transform: uppercase;
        text-decoration: none;
        width: 100%;
        margin: 0 auto;
    }
    
    .popup_call_1_1_0_pop-call .pop-call-icon {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAABmElEQVQ4jZXVvY8OURTH8bMv2Qg6UdKplYhEiEahEaKgsAqFyGYT0WkV/ANeIkFhI5JFotpGqZOgWCvbECpReCtEeHwUcyd7n3Fnnplfcoo595zv3Dnn3jNTiAFaiYhNEfEsIu5FxMfWSAyx5zY0wgPsLMXmD/N4i+uY64Bvx0KKhe842QY+b1xPJ8ADs7iIXylnsQmeV1YJfgVHMJ359uNzyjmVg9+3gOFuBtiW+ddxOFvbh5/4gR01uEvfsuS5tNv7+Ktq3rlsfSHlLNfgLx3gq8r1PZjyRjiUfNN4nV66K/CkBXoDUy3gSEBYs1Hzs8l3LVQFb+rNBGhtD1N8Xe+t+IMXde0+FeB7eoCP4pXxc3wZF+qHxQJ4FZt7wIuWd3ytAF82fmYHgwN7VV1uqquJrX1oOi4VwPAYW7K4GdzEbywpXP/SDu60wNdxIEGXGmv/Xf/SZ8zgUQuc9hEwBu+aXLc74G26NQlcWz4W+2i1LziwGy97QEc4PgQcqrN8Bh86oKfznKEHfxYnVP+6d/iqmivHmrH/ADdEJoDDSk+YAAAAAElFTkSuQmCC") 0 0 no-repeat;
        width: 22px;
        height: 22px;
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
    }
    
    .popup_call_1_1_0_box article {
        background: #fff;
        z-index: 10;
        margin: 50px auto;
        padding: 20px 0;
        width: 350px;
        position: relative;
        border-radius: 4px;
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
    }
    
    @media (max-width: 320px) {
        .popup_call_1_1_0_box article {
            width: 300px;
        }
    }
    
    .popup_call_1_1_0_box #popup_call_1_1_0_closePopup {
        background-position: 0 0;
        background-repeat: no-repeat;
        position: absolute;
        top: -28px;
        right: -24px;
        transition: all 0.5s ease 0s;
        font-family: arial;
    }
    
    @media (max-width: 375px) {
        .popup_call_1_1_0_box #popup_call_1_1_0_closePopup {
            top: -40px;
            right: 10px;
        }
    }
    
    .popup_call_1_1_0_box #popup_call_1_1_0_closePopup:hover {
        transform: rotate(360deg);
    }
    
    .popup_call_1_1_0_header {
        text-align: center;
        position: relative;
        padding: 0 20px;
    }
    
    .popup_call_1_1_0_header-note {
        padding: 20px 0 10px;
        color: #777;
        font-weight: 600;
        font-style: italic;
    }
    
    .popup_call_1_1_0_header img {
        display: block;
        padding: 0 0 20px;
        margin: 0 auto;
    }
    
    .popup_call_1_1_0_content {
        padding: 5px 20px 1px;
    }
    
    .popup_call_1_1_0_content input,
    .popup_call_1_1_0_content textarea {
        padding: 9px 12px;
    }
    
    .popup_call_1_1_0_content>div:nth-child(1) input,
    .popup_call_1_1_0_content>div:nth-child(1) textarea {
        background: #fff;
        border: 1px solid #b7b7b7;
        border-radius: 4px;
    }
    
    .popup_call_1_1_0_content>div:nth-child(1) input {
        width: 100%;
        margin-bottom: 4px;
        font-size: 14px;
        padding: 15px 0;
        text-align: center;
        color: #333;
    }
    
    .popup_call_1_1_0_content>div:nth-child(1) select {
        width: 100%;
        margin-bottom: 5px;
        padding: 5px 8px;
        background: #ddd;
        border: 1px solid #adadad;
        color: #444;
        cursor: pointer;
    }
    
    .popup_call_1_1_0_content>div:nth-child(1) textarea {
        width: 100%;
        font-family: arial;
        font-size: 13px;
        margin-bottom: 4px;
        resize: none;
        height: 96px;
    }
    
    .popup_call_1_1_0_content>div:nth-child(2) input {
        width: 100%;
        background: #3491cc;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 14px;
        margin-top: 0;
        border-radius: 4px;
        padding: 15px 0;
    }
    
    .popup_call_1_1_0 .popup_call_1_1_0_clickPopup2 {
        color: #fff;
        width: 100px;
        height: 20px;
        padding: 10px;
        background-color: #6e2daa;
    }
    
    .popup_call_1_1_0 .popup_call_1_1_0_clickPopup2:hover {
        background-color: #00abe2;
        cursor: pointer;
    }
    
    @media (max-width: 414px) {
        .popup_call_1_1_0 .popup_call_1_1_0_box {
            top: 50px;
        }
    }
    
    @media screen and (max-width: 375px) {
        .popup_call_1_1_0 .pop_box article {
            width: 345px;
        }
        .popup_call_1_1_0 .pop_box #close {
            top: 12px;
            right: 12px;
        }
        .popup_call_1_1_0 .pop_box #close {
            background: url(images/pucb-close2.png) center center no-repeat;
        }
    }
    
    @media screen and (max-width: 360px) {
        .popup_call_1_1_0 .pop_box article {
            width: 325px;
        }
    }
    
    @media screen and (max-width: 320px) {
        .popup_call_1_1_0 .pop_box article {
            width: 300px;
        }
        .popup_call_1_1_0 .pop_fr>div:nth-child(2) .sol p {
            margin: 3px 0;
        }
        .popup_call_1_1_0 .pop_fr {
            padding: 8px 10px 10px;
        }
        .popup_call_1_1_0 .pop_tt p {
            padding: 2px 30px 14px;
            background: none;
        }
        .popup_call_1_1_0 .pop_fr>div:nth-child(2) .note {
            display: none;
        }
        .popup_call_1_1_0 .pop_fr>div:nth-child(1) textarea {
            height: 70px;
        }
    }
</style>

<div class="popup_call_1_1_0" id="popup_call_1_1_0">
  
   <div class="popup_call_1_1_0_block">
    <div class="popup_call_1_1_0_overlay" id="popup_call_1_1_0_overlay" style="display:none"></div>
        <div id="popup_call_1_1_0_overlayClickform" class="overlay_form">
            <div class="popup_call_1_1_0_box">
                <article>
                    <div class="popup_call_1_1_0_header">
                        <img src="<?php echo $path ?>/images/logo.png" alt="">
                        <div class="popup_call_1_1_0_pop-note">G???i ngay ????? ???????c t?? v???n & ?????t l???ch h???n</div>
                        <a href="tel:19006900" class="popup_call_1_1_0_pop-call" onclick="gtag('event','touch', {event_category: 'call',event_label: '19006900'});"><i class="pop-call-icon"></i> 1900 6900</a>
                        <div class="popup_call_1_1_0_header">
                            <div class="popup_call_1_1_0_header-note">Ho???c ????? l???i s??? ??i???n tho???i c???a b???n<br>????? nh???n cu???c g???i t??? Nha Khoa Paris</div>
                        </div>
                    </div>
                    <div class="popup_call_1_1_0_content">
                        <div>
                            <div style="display:none">
                                <input id="iname" name="iname" type="text" required placeholder="* H??? t??n:" value="Y??u C???u G???i L???i" style="display:none">
                                <input id="iemail" name="iemail" type="email" required placeholder="* Email:" value="yeucaugoilai@cskh.vn" style="display:none">
                                <textarea placeholder="D???ch v??? quan t??m: " rows="1" cols="1" id="itext" name="itext"  value="Y??u C???u G???i l???i" style="display:none"></textarea>
                                <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            </div>
                            <input id="imob" name="imob" type="textbox" placeholder="S??? ??i???n tho???i c???a b???n*:">
                        </div>
                        <div>
                            <input id="pop_sent" onclick="ants_send_contact(this);" type="button" value="Y??u C???u G???i L???i">
                        </div>
                    </div>

                    <a id="popup_call_1_1_0_closePopup">???</a>
                </article>
            </div>
        </div>
   </div>
</div>

<script>
    // document.addEventListener("DOMContentLoaded",function(){const e=document.getElementsByClassName("popup_caller"),l=document.getElementById("popup_call_1_1_0"),n=document.getElementById("popup_call_1_1_0_overlayClickform"),t=document.getElementById("popup_call_1_1_0_overlay"),o=document.getElementById("popup_call_1_1_0_closePopup");for(const o of e)o.addEventListener("click",function(){console.log("OKKKKKKKKKKK"),l.style.display="block",n.style.display="block",t.style.display="block"});o.addEventListener("click",function(){l.style.display="none",n.style.display="none",t.style.display="none"}),t.addEventListener("click",function(){l.style.display="none",n.style.display="none",t.style.display="none"})});
    document.addEventListener("DOMContentLoaded", function () {
        const e = document.getElementsByClassName("popup_caller"),
            l = document.getElementById("popup_call_1_1_0"),
            n = document.getElementById("popup_call_1_1_0_overlayClickform"),
            t = document.getElementById("popup_call_1_1_0_overlay"),
            o = document.getElementById("popup_call_1_1_0_closePopup");
            mit = document.getElementById("commit_3_0_0");
        
        for (const o of e)
            o.addEventListener("click", function () {
                console.log("OKKKKKKKKKKK"), (l.style.display = "block"), (n.style.display = "block"), (t.style.display = "block");
        });
        o.addEventListener("click", function () {
            (l.style.display = "none"), (n.style.display = "none"), (t.style.display = "none");
            // mit.style.display = "none";
        }),
        t.addEventListener("click", function () {
            (l.style.display = "none"), (n.style.display = "none"), (t.style.display = "none");
            // mit.style.display = "none";
        });
    });

</script>
