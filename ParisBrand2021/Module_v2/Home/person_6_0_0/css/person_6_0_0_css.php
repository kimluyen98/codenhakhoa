<style>
.peron_6_0_0__title,
.peron_6_0_0 {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
}

.peron_6_0_0__title {
    font-size: 26px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding: 40px 0 25px;
    text-align: center;
}

@media (max-width: 414px) {
    .pc {
        display: none;
    }
}

.mb {
    display: none;
}

@media (max-width: 414px) {
    .mb {
        display: block;
    }
}

.container.img-bg:before {
    content: "";
    display: block;
    background: url(<?php echo $path ?>/images/line.png) center 0 no-repeat;
    position: absolute;
    left: 0;
    top: -15px;
    width: 100%;
    height: 50px;
    background-size: 100%;
}

.peron_6_0_0_tabs2 {
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.peron_6_0_0_tabs2 .tab {
    width: 16%;
}

.peron_6_0_0_tabs2 .tab:focus {
    outline: unset;
}

.tab.tns-nav-active .peron_6_0_0__box1__item {
    background-color: #6DCFF6;
    z-index: 2;
}

.peron_6_0_0__box1__item {
    display: block;
    color: #000;
    font-size: 18px;
    font-weight: 600;
    position: relative;
    background-color: #F5F5F5;
    padding: 10px;
    z-index: 1;
}

.peron_6_0_0__box1__item::after {
    content: "";
    position: absolute;
    right: 0;
    top: 10px;
    width: 50px;
    height: 30px;
    background-size: 100%;
}

.s1.img-bg::after {
    background: url(<?php echo $path ?>/images/icon1.png) center 0 no-repeat;
}

.s2.img-bg::after {
    background: url(<?php echo $path ?>/images/icon2.png) center 0 no-repeat;
}

.s3.img-bg::after {
    background: url(<?php echo $path ?>/images/icon3.png) center 0 no-repeat;
}

.s4.img-bg::after {
    background: url(<?php echo $path ?>/images/icon4.png) center 0 no-repeat;
}

.s5.img-bg::after {
    background: url(<?php echo $path ?>/images/icon5.png) center 0 no-repeat;
}

.s6.img-bg::after {
    background: url(<?php echo $path ?>/images/icon6.png) center 0 no-repeat;
}

.s7.img-bg::after {
    background: url(<?php echo $path ?>/images/icon7.png) center 0 no-repeat;
}

.s8.img-bg::after {
    background: url(<?php echo $path ?>/images/icon8.png) center 0 no-repeat;
}

.s9.img-bg::after {
    background: url(<?php echo $path ?>/images/icon9.png) center 0 no-repeat;
}

.peron_6_0_0__box2 p {
    margin-bottom: 5px;
}

.peron_6_0_0__box2__box {
    padding-top: 30px;
}

.peron_6_0_0__box2__box .tns-controls [aria-controls] {
    display: none;
}

.peron_6_0_0__box2__box__item {
    text-align: center;
}

.item__info {
    padding: 10px 0;
    color: #000;
    font-size: 18px;
    font-weight: 600;
}

.item__info span {
    font-weight: 400;
}

item__pic img {
    width: 100%;
    display: block;
}

@media (max-width: 1440px) {
    .item__info {
        font-size: 15px;
    }

}

@media (max-width: 1024px) {
    .peron_6_0_0__box1__item {
        font-size: 15px;
        padding: 7px 10px;
    }

    .item__info {
        font-size: 16px;
    }
}

@media (max-width: 812px) {
    .peron_6_0_0__title{
        padding: 20px 0 5px;
    }
    .peron_6_0_0__box1__item {
        font-size: 13px;
        padding: 10px 5px;
    }
    .peron_6_0_0__box2__box {
        padding-top: 5px;
    }

    .peron_6_0_0__box1__item::after {
        width: 30px;
        height: 30px;
        right: 2px;
        display: none;
    }

    .item__info {
        padding: 10px;
        font-size: 12px;
    }
}

@media (max-width: 414px) {

    .peron_6_0_0__title {
        font-size: 25px;
        padding: 20px 0 10px;
    }

    .peron_6_0_0_tabs2 {
        justify-content: center;
        margin: 0;
    }

    .peron_6_0_0_tabs2 .tab {
        width: 30%;
        margin: 2px 5px;
    }

    .peron_6_0_0__box1 .mb {
        padding: 0 10px;
    }
    .peron_6_0_0__box2__box {
        padding-top: 10px;
    }

    .peron_6_0_0__box1__item {
        margin: 3px 0;
        font-size: 13px;
        padding: 12px 3px;
        text-align: center;
    }

    .peron_6_0_0__box1__item:hover {
        background-color: #6dcff6;
    }

    .peron_6_0_0__box1__item br {
        display: none;
    }

    .peron_6_0_0__box2__box {
        position: relative;
        padding-top: 0;
    }

    .item__info {
        padding: 10px 0;
    }

    .item__info span {
        font-size: 16px;
    }

    .peron_6_0_0__box2__box .tns-controls [aria-controls] {
        display: block;
        position: absolute;
        top: 120px;
        z-index: 3;
        background: #eee;
        margin: 0;
        padding: 0;
        height: auto;
        color: #0146b0;
        font-size: 20px;
    }

    .peron_6_0_0__box2__box .tns-controls [aria-controls]:nth-child(1) {
        left: 0;
    }

    .peron_6_0_0__box2__box .tns-controls [aria-controls]:nth-child(2) {
        right: 0;
    }
}

@media (max-width: 375px) {
    .peron_6_0_0__box1__item {
        height: auto;
        font-size: 11px;
    }

    .peron_6_0_0__box1__item br {
        display: block;
    }

    .item__info {
        padding: 10px;
    }
}

@media (max-width: 320px) {
    .peron_6_0_0_tabs2 .tab {
        width: 28%;
        margin: 0 2px;
    }

    .item__info {
        font-size: 12px;
    }

    .peron_6_0_0__box1__item {
        font-size: 10px;
    }

    .peron_6_0_0__title {
        font-size: 20px;
    }

    .peron_6_0_0__box2__box {
        padding-top: 0;
    }

    .item__info span {
        font-size: 12px;
    }
}
</style>