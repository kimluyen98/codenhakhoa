
<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module/Popup/popup_regist_1_0_1/';
  
  add_action('wp_footer', 'popup_regist_1_0_1');
		function popup_regist_1_0_1(){ 
			echo '
				<script>
                $(document).ready(function() {
                    $(".popup_regist").click(function() {
                        $(".popup_regist_1_0_1").fadeIn(5);
                        $(".popup_regist_1_0_1 .popup_regist_1_0_1_overlay").fadeIn(500);
                    });
                    $(".popup_regist_1_0_1 #popup_regist_1_0_1_closePopup, .popup_regist_1_0_1 .popup_regist_1_0_1_overlay").click(function() {
                        $(".popup_regist_1_0_1").fadeOut(500);
                        $(".popup_regist_1_0_1 .popup_regist_1_0_1_overlay").fadeOut(500);
                        location.reload();
                    });
                });
				</script>
			';           
		};
?>
<style>
    .popup_regist_1_0_1 .popup_regist_1_0_1_overlay {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeBAMAAADJHrORAAAAMFBMVEX///8HBwcICAgUFBQXFxcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABuanbkAAAAQUlEQVR4nOzOoQ0AIBDF0K5QNiC3wYUN2H8nJPkai6l5prSOdcPU2jckN8mTZEmWZEmW5EFy8f+e/g4AAAD//wMAKnM4yCLdBHkAAAAASUVORK5CYII=);
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv #popup_regist_1_0_1_closePopup {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBJREFUeNqc0z0KAjEQhuFx8E5qrqFeQdBCu0WwF2zsxd7fG+QCC+reyW8kgRjza+DdIksedgLb01rfiWiPWqpfA9QwHjt0QaM/gJucF+SFxpWQBabowWbTQucC6AuQDXZeCjTJQD+Aj+SgIBBCfEjlgBjiQie0SAGy+okLFGiLDmgeA1JfYkfYoBlaO6MVI0Mzgox0dEZTpYgAV3PwGbgjlUNCAOUgLgSSEFcAUYgrAfL+tQ8kyKoSsKsz0PItwAC6cz7Ubz7EKgAAAABJRU5ErkJggg==);
    }
    
    .popup_regist_1_0_1 {
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
    .popup_regist_1_0_1_block{
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .popup_regist_1_0_1 input,
    .popup_regist_1_0_1 textarea {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_overlayForm {
        font-size: 14px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_overlay {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 10;
        opacity: 0.7;
    }
    
    /* .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv {
		position: fixed;
		width: 100%;
		top: 150px;
		z-index: 12;
    } */
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv article {
        background: #fff;
        z-index: 11;
        margin: 50px auto;
        width: 350px;
        position: relative;
        border-radius: 4px;
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_headerBox {
        text-align: center;
        position: relative;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_headerBox_tt {
        background: #286C9D;
        margin: 0 0 8px;
        padding: 13px 30px 12px 30px;
        font-size: 18px;
        text-transform: uppercase;
        display: block;
        color: #fff;
    }
    @media (max-width: 414px) {
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv {
            top: 50px;
        }
    }
    @media (max-width: 375px) {
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_headerBox_tt {
            font-size: 15px;
        }
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_headerBox img {
        display: block;
        padding: 20px 0;
        margin: 0 auto;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox {
        padding: 5px 20px 1px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox input,
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox textarea {
        padding: 9px 12px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(1) input,
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(1) textarea {
        background: #ddd;
        border: none;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(1) input {
        width: 100%;
        margin-bottom: 4px;
        font-size: 13px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(1) select {
        width: 100%;
        margin-bottom: 5px;
        padding: 5px 8px;
        background: #ddd;
        border: 1px solid #adadad;
        color: #444;
        cursor: pointer;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(1) textarea {
        width: 100%;
        font-family: arial;
        font-size: 13px;
        margin-bottom: 4px;
        resize: none;
        height: 96px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) input {
        width: 100%;
        background: #DD4A39;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 14px;
        margin-bottom: 5px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) input#popup_regist_1_0_1_clickSent {
        font-weight: bold;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) .note {
        text-align: center;
        display: block;
        padding: 5px;
        font-size: 11px;
        color: #999;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) .note i {
        background: url(images/icon-lock.png) 0 5px no-repeat;
        display: inline-block;
        width: 13px;
        height: 14px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) .popup_regist_1_0_1_contact {
        text-align: center;
        color: #696969;
        font-size: 13px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) .popup_regist_1_0_1_contact p {
        margin: 6px 0 12px;
        font-size: 12px;
        font-style: italic;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) .popup_regist_1_0_1_contact p a {
        color: #cc431d;
        text-decoration: none;
        font-weight: bold;
        font-size: 13px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv .popup_regist_1_0_1_contentBox>div:nth-child(2) .popup_regist_1_0_1_contact img {
        margin: 0 5px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv #popup_regist_1_0_1_closePopup {
        background-position: 0 0;
        background-repeat: no-repeat;
        width: 17px;
        height: 17px;
        position: absolute;
        top: -18px;
        right: -24px;
        transition: all 0.5s ease 0s;
        font-family: arial;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv #popup_regist_1_0_1_closePopup:hover {
        transform: rotate(360deg);
    }
    
    @media (max-width: 375px) {
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv #popup_regist_1_0_1_closePopup {
            top: 10px;
            right: 10px;
        }
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_clickPopup {
        background-color: red;
        text-decoration: underline;
        color: white;
        padding: 10px;
        width: 150px;
        height: 30px;
    }
    
    .popup_regist_1_0_1 .popup_regist_1_0_1_clickPopup:hover {
        cursor: pointer;
        background-color: #0192cd;
    }
    
    @media screen and (max-width: 375px) {
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv article {
            width: 345px;
        }
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv #close {
            top: 12px;
            right: 12px;
        }
    }
    
    @media screen and (max-width: 360px) {
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv article {
            width: 325px;
        }
    }
    
    @media screen and (max-width: 320px) {
        .popup_regist_1_0_1 .popup_regist_1_0_1_boxTv article {
            width: 300px;
        }
        .popup_regist_1_0_1 .popup_regist_1_0_1_contentBox>div:nth-child(2) .popup_regist_1_0_1_contact p {
            margin: 3px 0;
        }
        .popup_regist_1_0_1 .popup_regist_1_0_1_contentBox {
            padding: 8px 10px 10px;
        }
        .popup_regist_1_0_1 .pop_tt p {
            padding: 2px 30px 14px;
            background: none;
        }
        .popup_regist_1_0_1 .popup_regist_1_0_1_contentBox>div:nth-child(2) .note {
            display: none;
        }
        .popup_regist_1_0_1 .popup_regist_1_0_1_contentBox>div:nth-child(1) textarea {
            height: 70px;
        }
    }
    /*# sourceMappingURL=popup_regist_1_0_1.css.map */
</style>
<div class="popup_regist_1_0_1">
	<div class="popup_regist_1_0_1_block">
        <div class="popup_regist_1_0_1_overlay" style="display:none"></div>
        <div id="popup_regist_1_0_1_overlayClickForm" class="popup_regist_1_0_1_overlayForm">
            <div class="popup_regist_1_0_1_boxTv">
                <article>
                    <div class="popup_regist_1_0_1_headerBox">
                        <img src="<?php echo $path ?>/images/logo.png" alt="">
                        <p class="popup_regist_1_0_1_headerBox_tt">Đăng kí tư vấn miễn phí</p>
                    </div>
                    <div class="popup_regist_1_0_1_contentBox">
                        <div>
                            <input id="iname" name="iname" type="textbox" required placeholder="Họ tên*:">
                            <input id="imob" name="imob" type="textbox" required placeholder="Điện thoại*:">
                            <input id="iemail" name="iemail" type="textbox" placeholder="Email:">
                            <textarea id="itext" type="hidden" name="itext" value="" placeholder="Nhu cầu tư vấn"></textarea>
                        </div>
                        <div>
                            <input id="popup_regist_1_0_1_clickSent" type="button" value="HOÀN THÀNH">
                            <div class="popup_regist_1_0_1_contact">
                                <p>Tư vấn trực tiếp 24/7: <a href="tel:1900.633.988">1900.6900</a></p>
                            </div>
                        </div>
                    </div>
                    <a id="popup_regist_1_0_1_closePopup"></a>
                </article>
            </div>
        </div>
    </div>
</div>
