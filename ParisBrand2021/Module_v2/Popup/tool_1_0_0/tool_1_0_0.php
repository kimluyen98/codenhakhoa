<?php
$path = get_template_directory_uri();
$path = $path . '/Module_v2/Popup/tool_1_0_0/';
?>
<style>
    .tool {
        position: fixed;
        width: 80px;
        top: 142px;
        right: 0;
        z-index: 2;
        background: #fff;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        border-top: 2px solid #002C96;
    }

    @media screen and (max-width: 1440px) {
        .tool {
            top: 146px;
        }
    }
    

    @media screen and (max-width: 1275px) {
        .tool {
            display: none;
        }
    }

    .tool__item {
        display: block;
        padding: 10px 0 0;
        text-align: center;
        font-size: 11px;
        font-weight: 600;
        line-height: 17px;
        text-transform: uppercase;
    }

    @media screen and (max-width: 1440px) {
        .tool__item {
            padding: 10px 0 1px;
            font-size: 10px;
        }
    }

    .tool__item::before {
        content: "";
        background-position: center 0;
        background-repeat: no-repeat;
        display: block;
        margin: 0 auto 10px;
    }

    @media screen and (max-width: 1440px) {
        .tool__item::before {
            margin: 0 auto 3px;
        }
    }

    .tool__item-1::before {
        background-image: url("<?php echo $path; ?>/images/tool-1.png");
        width: 44px;
        height: 48px;
        background-size: 100%;
    }

    @media screen and (max-width: 1440px) {
        .tool__item-1::before {
            width: 46px;
            height: 47px;;
        }
    }

    .tool__item-2::before {
        background-image: url("<?php echo $path; ?>/images/tool-2.png");
        width: 42px;
        height: 42px;
        background-size: 100%;
    }

    @media screen and (max-width: 1440px) {
        .tool__item-2::before {
            width: 46px;
            height: 47px;
        }
    }

    .tool__item-3::before {
        background-image: url("<?php echo $path; ?>/images/tool-3.png");
        width: 48px;
        height: 57px;
        background-size: 100%;
    }

    @media screen and (max-width: 1440px) {
        .tool__item-3::before {
            width: 46px;
            height: 55px;
        }
    }

    .tool__item-4::before {
        background-image: url("<?php echo $path; ?>/images/tool-4.png");
        width: 46px;
        height: 95px;
        background-size: 100%;
    }

    @media screen and (max-width: 1440px) {
        .tool__item-4::before {
            width: 40px;
            height: 82px;
        }
    }

    .tool__item-4 {
        background: #002C96;
    }

    .tool .location {
        position: relative;
        z-index: 1;
    }

    .tool .location .diadiem {
        transform: translateY(100%);
        transition: ease-in-out 0.4s;
        position: absolute;
        z-index: 0;
        top: -166px;
        right: 85px;
        z-index: 0;
        visibility: hidden;
        opacity: 0;
    }

    @media screen and (max-width: 1440px) {
        .tool .location .diadiem {
            top: -136px;
            font-size: 12px;
            overflow-x:hidden;
            overflow-y:auto;
            width: 260px;
            height: 410px;
        }
    }
    @media screen and (max-width: 1366px) {
        .tool .location .diadiem {
            top: -138px;
            right: 70px
        }
    }

    .tool .location .diadiem .img {
        position: relative;
    }

    .tool .location .diadiem .img img {
        border-radius: 5px;
    }

    .tool .location .diadiem .address {
        position: absolute;
        top: 0;
        color: #000;
        width: 100%;
    }

    .tool .location .diadiem .address .city {
        padding-left: 20px;
        padding-top: 0;
        margin-bottom: 5px;
        text-transform: uppercase;
        font-weight: bold;
        margin-top: 8px;
    }

    .tool .location .diadiem .address ul {
        margin: 5px;
        font-size: 13px;
    }

    @media screen and (max-width: 1440px) {
        .tool .location .diadiem .address ul {
            padding: 0 0px 0 35px;
            margin: 0 0 0px 0px;
        }
    }
    @media (max-width:1366px){
        .tool{
            width:66px;
        }
        .tool__item{
            font-size:8px;
        }
    }
    .tool .location{
        border-left: 2px solid #ffff;
    }
    .tool .location:hover{
        border-left: 2px solid #ff706f;
    }
    .tool .location:hover .diadiem {
        visibility: visible;
        transform: translateY(0%);
        opacity: 1;
        transition: ease-in-out 0.4s;
    }
</style>

<div class="tool">
    <a rel="nofollow" href="#" class="tool__item tool__item-1 btnnktv">????NG K??</a>
    <a target="_blank" rel="nofollow" href="https://www.facebook.com/messages/t/NhaKhoaParis" class="tool__item tool__item-2">MESSENGER</a>
    <div class="location">
        <a rel="nofollow" href="#" class="tool__item tool__item-3 "> &lt;&lt; ?????a ch??? </a>
        <div class="diadiem">
            <div class="img">
                <img src="<?php echo $path ?>/images/location.jpg" alt="">
                <div class="address">
                    <h6 class="city">h?? n???i</h6>
                    <ul>
                        <li>S??? 39 Quang Trung, Ho??n Ki???m</li>
                        <li>S??? 12 Th??i Th???nh, ?????ng ??a, H?? N???i</li>
                    </ul>
                    <h6 class="city">h???i ph??ng</h6>
                    <ul>
                        <li>S??? 314 T?? Hi???u, L?? Ch??n</li>
                    </ul>
                    <h6 class="city">Qu???ng Ninh</h6>
                    <ul>
                        <li>Shop House 6-7, K??T Times Garden,<br> L?? Th??nh T??ng, B???ch ?????ng</li>
                    </ul>
                    <h6 class="city">TP vinh</h6>
                    <ul>
                        <li>S??? 143, Nguy???n V??n C???, TP Vinh</li>
                    </ul>
                    <h6 class="city">???? n???ng</h6>
                    <ul>
                        <li>S??? 52 L?? ????nh L??, P. Th???c Gi??n,<br>
                            Qu???n Thanh Kh??, ???? N???ng</li>
                    </ul>
                    <h6 class="city">B??nh D????ng</h6>
                    <ul>
                        <li>688A ???????ng C??ch M???ng Th??ng 8,<br>
                            Ch??nh Ngh??a</li>
                    </ul>
                    <h6 class="city">tp hcm</h6>
                    <ul>
                        <li>S??? 179C, ???????ng 3/2, P11, Q10</li>
                        <li>S??? 97 C???ng H??a, P4, Q.T??n B??nh</li>
                        <li>87 Nguy???n Th??i H???c,<br>
                            P. C???u ??ng L??nh, Q. 1, TP HCM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a rel="nofollow" href="javascript:void(0)" class="tool__item tool__item-4 btnnkhotline popup_caller"></a>
</div>