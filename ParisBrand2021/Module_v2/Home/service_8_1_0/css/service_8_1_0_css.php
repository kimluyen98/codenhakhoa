<style>
a {
    text-decoration: none;
}


.service_8_1_0,
.service_8_1_0__title {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
     */
    font-family: Quicksand medium,Arial,Helvetica;
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

.service_8_1_0__title {
    font-size: 26px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding: 40px 0 50px;
    text-align: center;
}

.service_8_1_0.loaded {
    background: url(<?php echo $path ?>/images/bg.jpg) center 0 no-repeat;
    min-height: 700px;
}

.container.img-lazy:before {
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



.service_8_1_0_tabs2 {
    position: relative;
}

.tab:focus {
    outline: unset;
}

.tab.tns-nav-active .service_8_1_0__box1__item {
    background-color: #6DCFF6;
    height: 80px;
    z-index: 2;
}

.service_8_1_0_tabs2 {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.tab {
    width: 16%;
}

.service_8_1_0__box1__item {
    display: block;
    color: #000;
    font-size: 16px;
    font-weight: 600;
    position: relative;
    background-color: #F5F5F5;
    padding: 10px;
    z-index: 1;
}

.service_8_1_0__box1__item::after {
    content: "";
    position: absolute;
    right: 0;
    top: 10px;
    width: 70px;
    height: 40px;
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

.service_8_1_0__box2 {
    padding-top: 10px;
}

.service_8_1_0__box2__box .tns-controls [aria-controls] {
    display: none;
}

.service_8_1_0__box2 img {
    width: 100%;
    height: 100%;
    display: block;
}

.service_8_1_0__regist {
    text-align: center;
    padding-top: 25px;
}

.service_8_1_0__regist a {
    color: #fff;
    background-color: #c41b22;
    padding: 6px 35px;
    font-size: 18px;
    text-transform: uppercase;
    border-radius: 30px;
    transition: all 0.3s;
    cursor: pointer;
}

.service_8_1_0__regist a:hover {
    box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.2);
    outline-color: rgba(255, 255, 255, 0);
    outline-offset: 15px;
    text-shadow: 1px 1px 2px #427388;
}

@media (max-width: 1024px) {
    .service_8_1_0.loaded {
        min-height: 620px;
    }

    .s1.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s2.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s3.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s4.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s5.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s6.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s7.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s8.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .s9.img-lazy::after {
        background-size: 100%;
        width: 45px;
        height: 40px;
    }

    .service_8_1_0__box1__item {
        font-size: 14px;
    }
}

@media (max-width: 812px) {
    .service_8_1_0.loaded {
        min-height: 470px;
    }
    .service_8_1_0__box1__item {
        font-size: 12px;
    }
    .tab.tns-nav-active .service_8_1_0__box1__item{
        height: 60px;
    }
    .service_8_1_0__box1__item::after {
        display: none;
    }
    .service_8_1_0__title{
        padding: 20px 0 10px;
    }
}

@media (max-width: 414px) {
    .pc {
        display: none;
    }

    .mb {
        display: block;
    }

    .service_8_1_0.loaded {
        min-height: 680px;
        background-color: #3d92ff;
        background-position-y: -75px;
    }

    .service_8_1_0__title {
        font-size: 22px;
        color: #0055A4;
        text-transform: uppercase;
        padding: 20px 0 10px;
    }

    .service_8_1_0__box2 img {
        width: 80%;
        margin: 0 auto;
    }

    .service_8_1_0_tabs2 {
        justify-content: center;
    }

    .tab {
        width: 30%;
        margin: 0 5px;
    }

    .tab.tns-nav-active .service_8_1_0__box1__item {
        height: auto;
    }

    .mb {
        padding: 0 10px;
    }

    .service_8_1_0__box1__item {
        margin: 3px 0;
        font-size: 14px;
        padding: 12px 5px;
        text-align: center;
    }

    .service_8_1_0__box1__item br {
        display: none;
    }

    .service_8_1_0__box2 {
        padding-top: 15px;
    }

    .service_8_1_0__box2__box {
        position: relative;
    }

    .service_8_1_0__box2__box .tns-controls [aria-controls] {
        position: absolute;
        display: none;
        top: 110px;
        margin: 0;
        padding: 3px;
        background: #eee;
        color: #0146b0;
        height: auto;
        z-index: 3;
    }

    .service_8_1_0__box2__box .tns-controls [aria-controls]:nth-child(1) {
        left: 0;
    }

    .service_8_1_0__box2__box .tns-controls [aria-controls]:nth-child(2) {
        right: 0;
    }

    .service_8_1_0__regist {
        padding-top: 25px;
    }

    .service_8_1_0__regist a {
        padding: 6px 25px;
        font-size: 16px;
    }

}

@media (max-width: 375px) {

    .service_8_1_0.loaded {
        min-height: auto;
        padding-bottom: 30px;
    }

    .service_8_1_0__title {
        padding: 20px 0 0px;
    }

    .service_8_1_0__box2 img {
        width: 100%;
        margin: 0 auto;
    }

    .service_8_1_0__box1__item {
        font-size: 13px;
    }

    .service_8_1_0__box1__item br {
        display: block;
    }

    .service_8_1_0__box1__item.active {
        height: 50px;
    }
}

@media (max-width: 320px) {
    .service_8_1_0.loaded {
        background-position-y: -55px;
    }

    .tab {
        width: 30%;
        margin: 0 2px;
    }

    .service_8_1_0__box1__item {
        font-size: 12px;
        padding: 12px 2px;
    }

    .service_8_1_0__title {
        font-size: 20px;
    }

    .service_8_1_0__box2__box .tns-controls [aria-controls] {
        top: 80px;
    }
}
</style>