<?php
$path = get_template_directory_uri();
$path = $path . '/Module_v2/Popup/regist_ft_1_0_0/';
?>
<style>
    .regist_ft_1_0_0 {
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }
    
    .regist_ft_1_0_0 {
        display: -webkit-flex;
        -ms-flex: 1;
        width: 100%;
        height: 70px;
        position: fixed;
        background: #0c39ac;
        left: 0;
        bottom: 0;
        z-index: 15;
        display: none;
    }
    
    .regist_ft_1_0_0 a {
        text-align: center;
        flex: 1;
        color: #fff;
        border-radius: 4px;
        font-size: 12px;
        font-weight: normal;
        text-transform: uppercase;
        justify-content: center;
        text-decoration: none;
        display: block;
       
    }
    .regist_ft_1_0_0 a img{
        margin-right: 3px;
    }
    .regist_ft_1_0_0 .btnkm{
        background: #e23d3a;
        padding: 6px 5px;
        border-radius: 30px;
        font-size: 14px;
    }
    .regist_ft_1_0_0 a i {
        font-size: 20px;
    }
    .regist_ft_1_0_0_modal .modal-body{
        background: #e8f9ff;
        color: #000;
        border-radius: 8px;
    }
    .regist_ft_1_0_0_modal .modal-body ul{
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .regist_ft_1_0_0_modal .modal-body ul b{
        text-transform: uppercase;
    }
    .regist_ft_1_0_0_modal .modal-close{
        padding: 10px;
        opacity: 1;
    }

    
    @media (max-width: 414px) {
        .regist_ft_1_0_0 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 5px 5px 0;
            align-items: center;
        }
        .regist_ft_1_0_0 div{
            width: 20%;
        }
        .regist_ft_1_0_0 div:last-child{
            width: 40%;
        }
    }
    
    @media (max-width: 320px) {
        .regist_ft_1_0_0 a {
            font-size: 13px;
            padding-left: 10px;
        }
        .regist_ft_1_0_0 a i {
            font-size: 16px;
        }
        .regist_ft_1_0_0 .btnkm{
            font-size: 11px;
        }
        .regist_ft_1_0_0 a{
            font-size: 9px;
        }
    }
</style>



<div class="regist_ft_1_0_0 lvc_sm" id="regist_ft_1_0_0">
    <div>
        <a href="tel:19006466" class="btncallme ClickCall popup_caller">
            <img src="<?php echo $path?>/images/icon_call.png" alt=""><br>
            G???i t?? v???n
        </a>
    </div>
    <div>
        <a class="diachi modal-btn" data-modal="modal-diachi">
            <img src="<?php echo $path?>/images/icon_address.png" alt=""><br>
            ?????a ch???
        </a>
    </div>
    <div>
        <!-- <a href="https://www.messenger.com/t/NhaKhoaParis"target="_blank" rel="nofollow" class="mess">
            <img src="<?php //echo $path?>/images/icon_mess.png" alt=""><br>
            Inbox
        </a> -->
    </div>
    <div>
        <a class="btnkm notiprice">
            Nh???n khuy???n m??i
        </a>
    </div>
</div>
<div class="modal regist_ft_1_0_0_modal" id="modal-diachi" style="display:none;">
    <div class="modal-bg"></div>
    <div class="modal-box animate-pop">
        <div class="modal-close">??</div>
        <div class="modal-body">
            <ul>
                <li>
                    <b>H?? N???i</b><br>
                    ??? S??? 39 Quang Trung, Ho??n Ki???m<br>
                    ??? S??? 12 Th??i Th???nh, ?????ng ??a, H?? N???i
                </li>
                <li>
                    <b>H???i Ph??ng</b><br>
                    ??? S??? 12 Th??i Th???nh, ?????ng ??a, H?? N???i
                </li>
                <li>
                    <b>Qu???ng Ninh</b><br>
                    ??? Shop House 6-7, K??T Times Garden, L?? Th??nh T??ng, B???ch ?????ng
                </li>
                <li>
                    <b>TP Vinh</b><br>
                    ??? S??? 143, Nguy???n V??n C???, TP Vinh
                </li>
                <li>
                    <b>???? N???ng</b><br>
                    ??? S??? 52 L?? ????nh L??, P. Th???c Gi??n, Qu???n Thanh Kh??, ???? N???ng
                </li>
                <li>
                    <b>B??nh D????ng</b><br>
                    ??? 688 A ???????ng C??ch M???ng Th??ng 8, Ch??nh Ngh??a
                </li>
                <li>
                    <b>TP HCM</b><br>
                    ??? S??? 179C, ???????ng 3/2, P11, Q10<br>
                    ??? S??? 97 C???ng H??a, P4, Q.T??n B??nh<br>
                    ??? 87 Nguy???n Th??i H???c, P. C???u ??ng L??nh, Q. 1, TP HCM
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- <script>
     if (window.screen.width < 600) {
        setTimeout(() => {
            document.getElementById('regist_ft_1_0_0').style.display = 'flex';
        },6000);
    }
</script> -->