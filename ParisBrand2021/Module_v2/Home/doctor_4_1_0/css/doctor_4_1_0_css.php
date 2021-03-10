<style>
.doctor_4_1_0__Title {
    position: absolute;
    font-size: 26px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding-left: 40px;
    padding-top: 0px;
}

.doctor_4_1_0__Title,
.doctor_4_1_0 {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
}

.doctor_4_1_0 {
    padding: 30px 0 140px;
    min-height: 768px;
}

.mb {
    display: none;
}

.doctor_4_1_0__box {
    background: #fff;
    box-shadow: 0px 0px 10px #ccc;
    padding: 20px 0;
    min-height: 700px;
    position: relative;
}

.doctor_4_1_0__box.img-bg:before {
    content: "";
    display: block;
    background: url('.$path.'/images/line.png) center 0 no-repeat;
    position: absolute;
    left: 0;
    top: -15px;
    width: 100%;
    height: 50px;
    background-size: 100%;
}
.slide_thumb img {
    width: 100%;
    height: 100%;
    display: block;
}

.doctor_4_1_0__name {
    text-transform: uppercase;
    font-size: 20px;
    color: #6DCFF6;
}

.doctor_4_1_0__mb {
    padding: 20px 30px 20px 60px;
    color: #000;
    border-radius: 8px;
    text-align: left;
    margin-top: 80px;
}

.doctor_4_1_0__mb ul {
    padding: 0;
    list-style: none;
}

.doctor_4_1_0__mb li {
    padding-bottom: 5px;
}

.doctor_4_1_0__button {
    padding-top: 20px;
    display: block;
}

.doctor_4_1_0__button span {
    padding: 10px 10px 10px 0;
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    border-radius: 30px;
    background: #E43D3B;
}

.doctor_4_1_0__button b {
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    border-radius: 30px;
    background: #0055A4;
    padding: 10px 15px;
}

.doctor_4_1_0__button i {
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    border-radius: 30px;
}

.doctor_4_1_0__tab {
    width: 90%;
    margin: -150px auto;
    /* display: flex; */
}

.doctor_4_1_0__tab .thumbnails li {
    border: none !important;
}

#thumbnails-ow:focus {
    outline: none;
}

#thumbnails {
    padding-left: 0;
}

#thumbnails:focus {
    outline: unset;
}

.doctor_4_1_0 .tns-nav {
    display: none;
}

.doctor_4_1_0 .tns-outer {
    position: relative;
}

.doctor_4_1_0 .tns-controls [aria-controls] {
    position: absolute;
    top: 25%;
    background: none;
    font-size: 36px;
    margin: 0;
    padding: 0;
    color: #BABABA;
}

.doctor_4_1_0 .tns-controls [aria-controls]:nth-child(1) {
    left: -20px;
}

.doctor_4_1_0 .tns-controls [aria-controls]:nth-child(2) {
    right: -20px;
}

.doctor_4_1_0 .tns-nav-active {
    border: none;
}

.doctor_4_1_0 .thumbnails li .tab-item {
    background: #fff;
    padding: 10px;
    text-align: center;
    display: block;
    box-shadow: 0px 0px 10px #ccc;
    border: 0.2px solid #eee;
}

.thumbnails li:focus {
    outline: unset;
}

.doctor_4_1_0__tab__item img {
    width: 100%;
    max-height: 100%;
    margin: 0 auto;
    border: 3px solid #E6E6E6;
    border-radius: 100%;
    border: 2px solid #fff;
}

.doctor_4_1_0__tab__item p {
    padding: 15px 0 0;
    font-size: 13px;
}

.doctor_4_1_0__tab__item p span {
    text-transform: uppercase;
    font-weight: 600;
}

.doctor_4_1_0__tab__item.tns-nav-active img {
    border: 2px solid #6DCFF6;
}

@media (max-width: 1440px) {
    .doctor_4_1_0 {
        min-height: 700px;
    }

    .doctor_4_1_0__Title {
        font-size: 23px;
        padding-top: 0px;
    }

    .doctor_4_1_0__Title div {
        font-size: 34px;
        padding-top: 0px;
    }

    .doctor_4_1_0__box {
        width: 90%;
        margin: 0 auto;
        min-height: 610px;
    }

    .doctor_4_1_0__mb {
        padding: 0px 0px 10px 60px;
    }

    .doctor_4_1_0__mb ul li {
        font-size: 14px;
    }

    .doctor_4_1_0__button {
        padding-top: 0;
    }

    .doctor_4_1_0__button span {
        font-size: 15px;
    }

    .doctor_4_1_0__button b {
        font-size: 15px;
    }

    .doctor_4_1_0__tab {
        width: 75%;
    }

    .doctor_4_1_0__tab__item p span {
        font-size: 11px;
    }
}

@media (max-width: 1024px) {
    .doctor_4_1_0__box {
        min-height: 560px;
    }

    .doctor_4_1_0__Title {
        padding-left: 27px;
        font-size: 20px;
    }

    .doctor_4_1_0__Title div {
        padding-left: 10px;
        font-size: 30px;
    }

    .doctor_4_1_0.loaded .doctor_4_1_0__box::before {
        top: -12px;
    }

    .doctor_4_1_0__mb {
        padding: 0px 0px 10px 45px;
    }

    .doctor_4_1_0__mb li {
        padding-bottom: 2px;
    }

    .doctor_4_1_0 .thumbnails li .tab-item {
        padding: 5px;
    }

    .doctor_4_1_0__tab {
        width: 85%;
    }

    .doctor_4_1_0__tab__item {
        padding: 10px 0 0;
    }

    .doctor_4_1_0__tab__item p {
        font-size: 13px;
    }

    .doctor_4_1_0__tab__item span {
        font-size: 12px;
    }
}

@media (max-width: 812px) {
    .doctor_4_1_0 {
        min-height: 600px;
        padding: 30px 0 40px;
    }

    .doctor_4_1_0 .row .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .doctor_4_1_0__Title {
        font-size: 16px;
    }

    .doctor_4_1_0__name {
        font-size: 16px;
    }

    .doctor_4_1_0__box {
        width: 100%;
        min-height: 430px;
    }

    .doctor_4_1_0__mb ul {
        margin: 0 0 8px;
    }

    .doctor_4_1_0__mb ul li {
        font-size: 12px;
    }

    .doctor_4_1_0__button b {
        font-size: 12px;
    }

    .doctor_4_1_0__button span {
        font-size: 12px;
    }

    .doctor_4_1_0__tab {
        width: 95%;
        margin: -50px auto;
    }

    .doctor_4_1_0__tab__item {
        padding: 0;
    }

    .doctor_4_1_0__tab__item p span {
        font-size: 8.5px;
    }
}

@media (max-width: 414px) {

    .doctor_4_1_0__Title {
        font-size: 18px;
        position: relative;
        padding: 0;
        text-align: center;
    }

    .doctor_4_1_0__Title div {
        font-size: 22px;
    }

    .doctor_4_1_0 .tns-controls [aria-controls] {
        top: 35%;
        font-size: 20px;
    }

    .doctor_4_1_0__box {
        min-height: auto;
        padding: 10px 10px 0;
    }

    .doctor_4_1_0 .row {
        flex-direction: column;
    }

    .doctor_4_1_0 .row .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .doctor_4_1_0 .row .col-md-6:nth-child(1) {
        order: 2;
    }

    .doctor_4_1_0__mb {
        margin-top: 15px;
        padding: 0px 0px 10px 35px;
        width: 90%;
    }

    .doctor_4_1_0__button {
        text-align: center;
    }

    .doctor_4_1_0__tab {
        width: 90%;
        margin: 0px auto;
    }

    .doctor_4_1_0 {
        padding: 7px 0 10px;
    }
}

@media (max-width: 375px) {
    .doctor_4_1_0__Title {
        font-size: 19px;
    }
}

@media (max-width: 320px) {
    .doctor_4_1_0__Title {
        font-size: 16px;
    }

    .doctor_4_1_0__name {
        font-size: 16px;
    }
}
</style>