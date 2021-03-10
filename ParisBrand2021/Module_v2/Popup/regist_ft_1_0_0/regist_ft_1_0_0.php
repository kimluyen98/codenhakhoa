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
            Gọi tư vấn
        </a>
    </div>
    <div>
        <a class="diachi modal-btn" data-modal="modal-diachi">
            <img src="<?php echo $path?>/images/icon_address.png" alt=""><br>
            Địa chỉ
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
            Nhận khuyến mãi
        </a>
    </div>
</div>
<div class="modal regist_ft_1_0_0_modal" id="modal-diachi" style="display:none;">
    <div class="modal-bg"></div>
    <div class="modal-box animate-pop">
        <div class="modal-close">×</div>
        <div class="modal-body">
            <ul>
                <li>
                    <b>Hà Nội</b><br>
                    • Số 39 Quang Trung, Hoàn Kiếm<br>
                    • Số 12 Thái Thịnh, Đống Đa, Hà Nội
                </li>
                <li>
                    <b>Hải Phòng</b><br>
                    • Số 12 Thái Thịnh, Đống Đa, Hà Nội
                </li>
                <li>
                    <b>Quảng Ninh</b><br>
                    • Shop House 6-7, KĐT Times Garden, Lê Thánh Tông, Bạch Đằng
                </li>
                <li>
                    <b>TP Vinh</b><br>
                    • Số 143, Nguyễn Văn Cừ, TP Vinh
                </li>
                <li>
                    <b>Đà Nẵng</b><br>
                    • Số 52 Lê Đình Lý, P. Thạc Gián, Quận Thanh Khê, Đà Nẵng
                </li>
                <li>
                    <b>Bình Dương</b><br>
                    • 688 A Đường Cách Mạng Tháng 8, Chánh Nghĩa
                </li>
                <li>
                    <b>TP HCM</b><br>
                    • Số 179C, Đường 3/2, P11, Q10<br>
                    • Số 97 Cộng Hòa, P4, Q.Tân Bình<br>
                    • 87 Nguyễn Thái Học, P. Cầu Ông Lãnh, Q. 1, TP HCM
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