<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module_v2/Popup/popup_regist_1_0_8/';
?>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){

    const notiprice = document.getElementsByClassName("notiprice");
    const popup_regist_1_0_8 = document.getElementById("popup_regist_1_0_8");
    const popup_regist_1_0_8_overlayClickForm = document.getElementById("popup_regist_1_0_8_overlayClickForm");
    const popup_regist_1_0_8_overlay = document.getElementById("popup_regist_1_0_8_overlay");
    const close_form = document.getElementById("close-form");

    for ( const regist of notiprice ){
    regist.addEventListener("click", function(){
        popup_regist_1_0_8.style.display = "block";
        popup_regist_1_0_8_overlayClickForm.style.display = "block";
        popup_regist_1_0_8_overlay.style.display = "block";
    });
    }

    close_form.addEventListener("click", function(){
        popup_regist_1_0_8.style.display = "none";
    popup_regist_1_0_8_overlayClickForm.style.display = "none";
    popup_regist_1_0_8_overlay.style.display = "none";
    });

    popup_regist_1_0_8_overlay.addEventListener("click", function(){
    popup_regist_1_0_8_overlayClickForm.style.display = "none";
    popup_regist_1_0_8_overlay.style.display = "none";
    popup_regist_1_0_8.style.display = "none";
    });

    });
</script>

<style>
    .popup_regist_1_0_8 .popup_regist_1_0_8_overlay {
    background: rgba(0, 0, 0, 0.9);
    }

    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv #popup_regist_1_0_8_closePopup {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBJREFUeNqc0z0KAjEQhuFx8E5qrqFeQdBCu0WwF2zsxd7fG+QCC+reyW8kgRjza+DdIksedgLb01rfiWiPWqpfA9QwHjt0QaM/gJucF+SFxpWQBabowWbTQucC6AuQDXZeCjTJQD+Aj+SgIBBCfEjlgBjiQie0SAGy+okLFGiLDmgeA1JfYkfYoBlaO6MVI0Mzgox0dEZTpYgAV3PwGbgjlUNCAOUgLgSSEFcAUYgrAfL+tQ8kyKoSsKsz0PItwAC6cz7Ubz7EKgAAAABJRU5ErkJggg==);
    }

    .regist_ft_1_0_8 {
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    .popup_regist_1_0_8 {
    font-size: 14px;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: fixed;
    display: none;
    z-index: 3;
    }
    .popup_regist_1_0_8_block{
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
       
    }
    .popup_regist_1_0_8 input,
    .popup_regist_1_0_8 textarea {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_overlayForm {
    font-size: 14px;
    z-index: 13;
    padding: 0 10px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_overlay {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 10;
        opacity: 0.7;
    }
    .popup_regist_1_0_8_logo {
    background: url(../images/logo.png) center 0 no-repeat;
    height: 70px;
    }
    @media (max-width: 414px) {
    .popup_regist_1_0_8_logo {
        height: 80px;
    }
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_headerBox {
    text-align: center;
    position: relative;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_headerBox_tt {
    background: #286C9D;
    margin: 0 0 8px;
    padding: 13px 30px 12px 30px;
    font-size: 18px;
    text-transform: uppercase;
    display: block;
    color: #fff;
    }
    @media (max-width: 375px) {
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_headerBox_tt {
        font-size: 15px;
    }
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_headerBox img {
    display: block;
    padding: 20px 0;
    margin: 0 auto;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox {
    padding: 5px 20px 1px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox input,
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox textarea {
    padding: 9px 12px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(1) input,
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(1) textarea {
    background: #ddd;
    border: none;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(1) input {
    width: 100%;
    margin-bottom: 4px;
    font-size: 13px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(1) select {
    width: 100%;
    margin-bottom: 5px;
    padding: 5px 8px;
    background: #ddd;
    border: 1px solid #adadad;
    color: #444;
    cursor: pointer;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(1) textarea {
    width: 100%;
    font-family: arial;
    font-size: 13px;
    margin-bottom: 4px;
    resize: none;
    height: 96px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) input {
    width: 100%;
    background: #DD4A39;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 14px;
    margin-bottom: 5px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) input#popup_regist_1_0_8_clickSent {
    font-weight: bold;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) .note {
    text-align: center;
    display: block;
    padding: 5px;
    font-size: 11px;
    color: #999;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) .note i {
    background: url(../images/icon-lock.png) 0 5px no-repeat;
    display: inline-block;
    width: 13px;
    height: 14px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) .popup_regist_1_0_8_contact {
    text-align: center;
    color: #696969;
    font-size: 13px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) .popup_regist_1_0_8_contact p {
    margin: 6px 0 12px;
    font-size: 12px;
    font-style: italic;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) .popup_regist_1_0_8_contact p a {
    color: #cc431d;
    text-decoration: none;
    font-weight: bold;
    font-size: 13px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv .popup_regist_1_0_8_contentBox > div:nth-child(2) .popup_regist_1_0_8_contact img {
    margin: 0 5px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv #popup_regist_1_0_8_closePopup {
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
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv #popup_regist_1_0_8_closePopup:hover {
    transform: rotate(360deg);
    }
    @media (max-width: 375px) {
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv #popup_regist_1_0_8_closePopup {
        top: 10px;
        right: 10px;
    }
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_clickPopup {
    background-color: red;
    text-decoration: underline;
    color: white;
    padding: 10px;
    width: 150px;
    height: 30px;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_clickPopup:hover {
    cursor: pointer;
    background-color: #0192cd;
    }
    @media screen and (max-width: 375px) {
    .popup_regist_1_0_8 .popup_regist_1_0_8_boxTv #close {
        top: 12px;
        right: 12px;
    }
    }
    @media screen and (max-width: 320px) {
    .popup_regist_1_0_8 .popup_regist_1_0_8_contentBox > div:nth-child(2) .popup_regist_1_0_8_contact p {
        margin: 3px 0;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_contentBox {
        padding: 8px 10px 10px;
    }
    .popup_regist_1_0_8 .pop_tt p {
        padding: 2px 30px 14px;
        background: none;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_contentBox > div:nth-child(2) .note {
        display: none;
    }
    .popup_regist_1_0_8 .popup_regist_1_0_8_contentBox > div:nth-child(1) textarea {
        height: 70px;
    }
    }

    .regist_ft_1_0_8 {
    display: -webkit-flex;
    -ms-flex: 1;
    width: 100%;
    height: 60px;
    position: fixed;
    background: rgba(0, 0, 0, 0.5);
    left: 0;
    bottom: 0;
    z-index: 101;
    display: none;
    }
    .regist_ft_1_0_8 .icon {
    text-align: center;
    }
    .regist_ft_1_0_8 .icon img {
    width: 60%;
    margin: 0 auto;
    display: block;
    border-radius: 100%;
    }
    .regist_ft_1_0_8__form {
    padding-bottom: 20px;
    border-bottom: 1px solid #ccc;
    z-index: 12;
    background-color: #fff;
    width: 450px;
    margin: 0 auto;
    }
    .regist_ft_1_0_8__form.show-form {
    display: block;
    animation: formMove 0.5s;
    }
    .regist_ft_1_0_8__form #close-form {
    cursor: pointer;
    }
    .regist_ft_1_0_8__form h2 {
    margin: 0;
    background: #fff;
    color: #0d4f90;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 18px;
    padding: 10px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
    }
    .regist_ft_1_0_8__form span i{
        font-style: normal;
        color: #ec220b;
        font-weight: bold;
    }
    @media (max-width: 360px) {
    .regist_ft_1_0_8__form h2 {
        font-size: 17px;
    }
    }
    .regist_ft_1_0_8__form h2 span {
    color: #0d4f90;
    padding: 5px;
    }
    .regist_ft_1_0_8__form h2 b {
    font-size: 10px;
    padding: 10px;
    }
    .regist_ft_1_0_8__form h2 img {
    width: 90px;
    }
    .regist_ft_1_0_8__form span {
    padding: 10px 15px;
    display: block;
    color: #000;
    }
    .regist_ft_1_0_8__form hr {
    border-top: 2px solid #9c9c9c;
    margin: 10px 15px;
    }
    .regist_ft_1_0_8__form article {
    margin: 20px 15px;
    }
    .regist_ft_1_0_8__form article > div {
    margin-bottom: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    }
    .regist_ft_1_0_8__form article > div label {
    width: 40%;
    color: #000;
    }
    .regist_ft_1_0_8__form article > div input {
    width: 60%;
    border-radius: 5px;
    outline: none;
    border: 1px solid #707070;
    padding: 5px 10px;
    }
    .regist_ft_1_0_8__form article > div select {
    width: 60%;
    border-radius: 5px;
    outline: none;
    border: 1px solid #707070;
    padding: 5px 10px;
    }
    .regist_ft_1_0_8__form .reg {
    text-align: center;
    }
    .regist_ft_1_0_8__form .reg input {
    background: #dd4a39;
    color: #ffff;
    border: none;
    outline: none;
    border-radius: 5px;
    padding: 5px 40px;
    font-weight: 600;
    }

    @media (max-width: 414px) {
    .regist_ft_1_0_8 {
        display: flex;
    }
    .regist_ft_1_0_8__form {
        width: 100%;
    }
    .regist_ft_1_0_8 .tns-outer {
        width: 70%;
        margin: 0 auto;
    }
    .regist_ft_1_0_8 .tns-controls button {
        background: none;
        color: #fff;
        font-size: 22px;
    }
    .regist_ft_1_0_8 .tns-controls button:nth-child(1) {
        position: absolute;
        left: 0;
        top: 5px;
    }
    .regist_ft_1_0_8 .tns-controls button:nth-child(2) {
        position: absolute;
        right: 0;
        top: 5px;
    }
    }
    @media (max-width: 375px) {
    .regist_ft_1_0_8__form h2 {
        font-size: 14px;
    }
    .regist_ft_1_0_8 .tns-controls button {
        font-size: 18px;
    }
    .regist_ft_1_0_8 .tns-controls button:nth-child(1) {
        top: 10px;
    }
    .regist_ft_1_0_8 .tns-controls button:nth-child(2) {
        top: 10px;
    }
    }
    @media (max-width: 360px) {
    .regist_ft_1_0_8 .tns-controls button:nth-child(1) {
        top: 5px;
    }
    .regist_ft_1_0_8 .tns-controls button:nth-child(2) {
        top: 5px;
    }
    }
    @media (max-width: 320px) {
    .regist_ft_1_0_8 {
        height: 50px;
    }
    .regist_ft_1_0_8__form h2 {
        font-size: 13px;
    }
    .regist_ft_1_0_8__form span {
        font-size: 12px;
    }
    }
    @keyframes formMove {
    from {
        bottom: -100px;
    }
    to {
        bottom: 60px;
    }
    }

    /*# sourceMappingURL=popup_regist_1_0_8.css.map */


</style>

<div class="popup_regist_1_0_8" id="popup_regist_1_0_8">
    <div class="popup_regist_1_0_8_block">
        <div class="popup_regist_1_0_8_overlay" id="popup_regist_1_0_8_overlay" style="display:none"></div>
        <div id="popup_regist_1_0_8_overlayClickForm" class="popup_regist_1_0_8_overlayForm">
            <div class="popup_regist_1_0_8_boxTv">
                <div class="regist_ft_1_0_8__form" id="regist_ft_1_0_8__form">
                    <h2>
                        <img width="130" height="auto" src="<?php echo $path; ?>/images/logo.png" alt="Logo Nha Khoa Paris">
                        Nhận khuyến mãi mới
                        <b id="close-form">╳</b>
                    </h2>
                    <span>* Chương trình khuyến mãi có thể kết thúc trước thời gian đã công bố (khi hết suất khuyến mãi)<br> - Hiện còn: <i>12</i> suất khuyến mãi</span>
                    <hr>
                    <article>
                        <div>
                            <label>* Tên:</label>
                            <input id="iname" name="iname" type="textbox" required>
                        </div>
                        <div>
                            <label>* Số điện thoại:</label>
                            <input id="imob" name="imob" type="textbox" required>
                        </div>
                        <div>
                            <label>* Dịch vụ quan tâm:</label>
                            <select name="icity" id="icity">
                                <option value="- Chọn -">--- Chọn ---</option>
                                <option value="Niềng răng thẩm mỹ">Niềng răng thẩm mỹ</option>
                                <option value="Bọc răng sứ">Bọc răng sứ</option>
                                <option value="Trồng răng Implant">Trồng răng Implant</option>
                                <option value="Nhổ răng">Nhổ răng</option>
                                <option value="Chỉnh hàm hô - Móm">Chỉnh hàm hô - Móm</option>
                            </select>
                        </div>
                        <input  type="hidden" style="display:none" id="iemail" name="iemail" type="textbox" placeholder="Email:">
                        <!-- <textarea id="itext" type="hidden" name="itext" value="" placeholder="Dịch vụ quan tâm"></textarea> -->
                        <input type="hidden" id="gclid_field" name="gclid_field" value="">
                        <input type="hidden" id="code_campaign" name="code_campaign" value="558803148">
                        <input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Thương hiệu Tư Vấn">
                    </article>
                    <div class="reg">
                        <input id="popup_regist_1_0_2_clickSent" onclick="ants_send_contact(this);" type="button" value="HOÀN THÀNH">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>