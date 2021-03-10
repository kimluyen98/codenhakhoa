<style>
.person_2_5_0__title {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
    font-size: 26px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding: 40px 0 25px;
    text-align: center;
}

.person_2_5_0 {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
    background: #F5F5F5;
    padding: 0 0 20px;
}

.container.img-lazy:before {
    content: "";
    display: block;
    background: url(<?php echo $path ?>/images/line.png) center 0 no-repeat;
    position: absolute;
    left: 0;
    top: -14px;
    width: 100%;
    height: 50px;
    background-size: 100%;
}

.person_2_5_0_box {
    position: relative;
}

.person_2_5_0_box .tns-controls [aria-controls] {
    position: absolute;
    top: 35%;
    color: #939393;
    background: none;
    font-size: 40px;
    padding: 0;
    margin: 0;
}

.person_2_5_0_box .tns-controls [aria-controls]:nth-child(1) {
    left: -40px;
}

.person_2_5_0_box .tns-controls [aria-controls]:nth-child(2) {
    right: -40px;
}

.person_2_5_0__item {
    text-align: center;
}

.person_2_5_0__item img {
    width: 100%;
    height: 100%;
    display: block;
}

.person_2_5_0__ct {
    padding: 15px 0;
}

.person_2_5_0__ct b {
    font-size: 18px;
}

@media (max-width: 1440px) {
    .person_2_5_0_box {
        width: 75%;
        margin: 0 auto;
    }
}

@media (max-width: 812px) {
    .person_2_5_0 .container::before {
        top: -10px;
    }

    .person_2_5_0_box {
        width: 90%;
    }
    .person_2_5_0__title{
        padding: 20px 0 5px;
    }
}

@media (max-width: 414px) {
    .container.img-lazy::before {
        top: -4px;
    }

    .person_2_5_0__title {
        font-size: 22px;
        padding: 30px 0 5px;
    }

    .person_2_5_0_box .tns-controls [aria-controls] {
        top: 30%;
        font-size: 20px;
    }

    .person_2_5_0_box .tns-controls [aria-controls]:nth-child(1) {
        left: -15px;
    }

    .person_2_5_0_box .tns-controls [aria-controls]:nth-child(2) {
        right: -15px;
    }
}

@media (max-width: 360px) {
    .person_2_5_0__title {
        font-size: 18px;
    }

    .person_2_5_0__ct {
        font-size: 14px;
    }

    .person_2_5_0__ct b {
        font-size: 16px;
    }
}
</style>