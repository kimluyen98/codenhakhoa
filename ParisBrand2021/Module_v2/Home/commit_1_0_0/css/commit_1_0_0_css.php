<style>
.commit_1_0_0__title,
.commit_1_0_0__box3 h3,
.commit_1_0_0__box3tt,
.commit_1_0_0,h3,
.commit_1_0_0__box3 .form .dkbt input {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
}

.container.img-lazy:before {
    content: "";
    display: block;
    background: url(<?php echo $path ?>/images/line.png) center 0 no-repeat;
    position: absolute;
    left: 0;
    top: 0px;
    width: 100%;
    height: 50px;
    background-size: 100%;
}

.commit_1_0_0__title {
    font-size: 26px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding: 40px 0 25px;
    text-align: left;
}

.commit_1_0_0__box1 .tabs {
    display: flex;
    justify-content: space-between;
}

.commit_1_0_0__box1 li {
    border: 1px solid #ccc;
    padding: 24.3px;
}

.commit_1_0_0__box1 .tab {
    width: 20%;
    margin: 0;
}

.commit_1_0_0__box1 img {
    width: 100%;
    height: 100%;
}

.commit_1_0_0__box1 .tabs li:focus {
    outline: unset;
}

.commit_1_0_0__box1 .tabs li.tns-nav-active {
    background: #F5F5F5;
    border: none;
}

.commit_1_0_0__box2__item {
    display: none;
}

.commit_1_0_0__box2__pic {
    position: relative;
}

.commit_1_0_0__box2__pic img {
    width: 100%;
    height: 100%;
}

.commit_1_0_0__box2__ct {
    position: absolute;
    top: 10%;
    width: 10%;
    padding-left: 20px;
}

.commit_1_0_0__box2__ct .tt {
    margin-bottom: 10px;
    font-size: 30px;
    color: #000;
    padding-right: 30px;
    padding-top: 0px;
}

.commit_1_0_0__box2__more {
    padding-top: 15px;
    display: block;
    color: #000;
}

.commit_1_0_0__box2__more span {
    padding: 10px 10px 10px 0;
}

.commit_1_0_0__box2__more b,
.commit_1_0_0__box2__more span,
.commit_1_0_0__box2__more i {
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    border-radius: 30px;
}

.commit_1_0_0__box2__more span {
    background: #E43D3B;
}

.commit_1_0_0__box2__more b {
    background: #0055A4;
    padding: 10px 15px;
}

.commit_1_0_0__box3 {
    background: #0165CD;
    min-height: 450px;
    margin-top: 70px;
    padding: 20px;
    border-radius: 8px;
    color: #fff;
}

.commit_1_0_0__box3 h3,
.commit_1_0_0__box3tt {
    text-transform: uppercase;
    font-size: 20px;
    margin-top: 0;
    text-align: center;
}

.commit_1_0_0__box3 select {
    width: 100%;
    text-align: center;
    text-align-last: center;
    padding: 5px;
    background-color: #6DCFF6;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    font-weight: 600;
}

.commit_1_0_0__box3 option {
    text-align: left;
}

.commit_1_0_0__box3 .form {
    padding: 5px 0;
}

.commit_1_0_0__box3 .form input {
    border: none;
    margin: 4px 0;
    padding: 10px 12px;
    width: 100%;
    border-radius: 8px;
}

.commit_1_0_0__box3 .form .dkbt {
    text-align: center;
}

.commit_1_0_0__box3 .form .dkbt input {
    width: 55%;
    margin-top: 10px;
    text-transform: uppercase;
    background: #e43d3b;
    color: #fff;
    outline: unset;
    font-size: 16px;
    padding: 6px 0;
    border-radius: 25px;
    transition: 0.4s;
}

.commit_1_0_0__box3 .form .dkbt input:hover {
    box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 225, 225, 0.1), 0 0 1px 20px rgba(255, 225, 225, 0.1);
    border-radius: 25px;
    transition: 0.4s;
    cursor: pointer;
}

.commit_1_0_0__box3__item {
    background-color: #fff;
    margin-top: 10px;
    min-height: 190px;
    border-radius: 6px;
    padding: 10px;
}

.commit_1_0_0__box3__item .scrollbar {
    float: left;
    height: 130px;
    width: 100%;
    overflow-y: scroll;
}

.commit_1_0_0__box3__item .force-overflow {
    min-height: 320px;
}

.commit_1_0_0__box3__item #style-1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 15px;
    background-color: #F5F5F5;
}

.commit_1_0_0__box3__item #style-1::-webkit-scrollbar {
    width: 5px;
    background-color: #F5F5F5;
}

.commit_1_0_0__box3__item #style-1::-webkit-scrollbar-thumb {
    border-radius: 15px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #0055A4;
}

.commit_1_0_0__box3__sub {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 10px;
}

.commit_1_0_0__box3__sub a:hover {
    color: #0055A4;
}

.commit_1_0_0__box3__sub .address {
    width: 50%;
}

.commit_1_0_0__box3__sub .icon__call,
.commit_1_0_0__box3__sub .icon__time {
    width: 24%;
    padding-top: 22px;
    position: relative;
}

.commit_1_0_0.loaded .commit_1_0_0__box3__sub .icon__call::before {
    background: url(<?php echo $path ?>/images/call.png) center 0 no-repeat;
    background-size: 100%;
    position: absolute;
    top: 0px;
    left: 10px;
    display: block;
    content: "";
    width: 23px;
    height: 23px;
}

.commit_1_0_0.loaded .commit_1_0_0__box3__sub .icon__call:hover::before {
    background: url(<?php echo $path ?>/images/call1.png) center 0 no-repeat;
    content: "";
    background-size: 100%;
    position: absolute;
    top: 0px;
    left: 10px;
    display: block;
    width: 23px;
    height: 23px;
}

.commit_1_0_0.loaded .commit_1_0_0__box3__sub .icon__time::before {
    background: url(<?php echo $path ?>/images/lich.png) center 0 no-repeat;
    background-size: 100%;
    position: absolute;
    top: 0px;
    left: 18px;
    display: block;
    content: "";
    width: 16px;
    height: 25px;
}

.commit_1_0_0.loaded .commit_1_0_0__box3__sub .icon__time:hover::before {
    background: url(<?php echo $path ?>/images/lich1.png) center 0 no-repeat;
    background-size: 100%;
    position: absolute;
    top: 0px;
    left: 18px;
    display: block;
    content: "";
    width: 16px;
    height: 25px;
}
@media (max-width: 1280px){
    .commit_1_0_0__box3__sub .icon__call, .commit_1_0_0__box3__sub .icon__time{
        font-size:12px;
    }
    .commit_1_0_0__box3__sub .address{
        font-size:12px;
    }
}
@media (max-width: 1024px) {
    .commit_1_0_0__box1 .tabs li {
        text-align: center;
        padding: 10px;
    }

    .commit_1_0_0__box1 .tabs li img {
        width: 60%;
    }

    .commit_1_0_0__box2__ct .tt {
        font-size: 24px;
    }

    .commit_1_0_0__box3 {
        min-height: 400px;
        margin-top: 60px;
        padding: 10px 20px 10px;
    }

    .commit_1_0_0__box3__item {
        min-height: 160px;
    }

    .commit_1_0_0__box3 .form input {
        margin: 3px 0;
        padding: 5px 12px;
    }

    .commit_1_0_0__box3 .form .dkbt input {
        font-size: 15px;
        width: 85%;
        padding: 5px 0;
    }

    .commit_1_0_0__box3__item .scrollbar {
        width: 100%;
        height: 150px;
    }

    .commit_1_0_0__box3__item #style-1::-webkit-scrollbar {
        width: 3px;
    }

    .commit_1_0_0__box3__sub {
        margin-bottom: 20px;
    }

    .commit_1_0_0__box3__sub .address {
        width: 100%;
    }

    .commit_1_0_0__box3__sub .icon__call,
    .commit_1_0_0__box3__sub .icon__time {
        width: 50%;
    }

    .commit_1_0_0__box3__sub .icon__call::before,
    .commit_1_0_0__box3__sub .icon__time::before {
        left: 40%;
    }

    .commit_1_0_0__box3__sub .icon__call:hover::before,
    .commit_1_0_0__box3__sub .icon__time:hover::before {
        left: 40%;
    }
}
@media (max-width: 992px){
    .commit_1_0_0__box2__ct{
        top: 5px;
        width: 10%;
        font-size: 11px;
    }
    .commit_1_0_0__box2__ct .tt{
        font-size: 16px;
        padding-right: 0;
        margin: 10px 0 0;
    }
}

@media (max-width: 812px) {
    .commit_1_0_0 .col-md-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }

    .commit_1_0_0 .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .commit_1_0_0__box2__ct .tt {
        margin-bottom: 5px;
        font-size: 14px;
        padding-top: 0px;
    }

    .commit_1_0_0__box2__ct i {
        font-size: 13px;
    }

    .commit_1_0_0__box3 {
        min-height: 300px;
        padding: 10px;
    }

    .commit_1_0_0__box3 h3,
    .commit_1_0_0__box3tt {
        font-size: 15px;
    }

    .commit_1_0_0__box3 select {
        padding: 4px;
        font-size: 14px;
    }

    .commit_1_0_0__box3__item {
        min-height: 200px;
    }
    .commit_1_0_0__box3__item .force-overflow{
        min-height: 160px;
    }
    .commit_1_0_0__box3__item .scrollbar {
        height: 100%;
    }

    .commit_1_0_0__box3__sub {
        font-size: 13px;
    }
}
@media (max-width: 414px) {
    .commit_1_0_0 .col-md-8 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .commit_1_0_0 .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .commit_1_0_0__title {
        font-size: 22px;
        padding: 20px 0 5px;
        text-align: center;
    }

    .commit_1_0_0__box1 .tabs li {
        padding: 10px;
    }

    .commit_1_0_0__box1 .tabs li img {
        width: 100%;
        display: block;
    }

    .commit_1_0_0__box2__ct {
        position: relative;
        top: auto;
        left: auto;
        width: 100%;
        text-align: center;
        padding-bottom: 10px;
    }

    .commit_1_0_0__box2__ct .tt {
        text-align: left;
        padding-left: 15px;
        width: 50%;
        margin-top: -110px;
        margin-bottom: 0px;
        height: 120px;
        font-size: 14px;
    }

    .commit_1_0_0__box3 {
        width: 90%;
        margin: 30px auto;
    }

    .commit_1_0_0__box3 h3,
    .commit_1_0_0__box3tt {
        font-size: 20px;
    }

    .commit_1_0_0__box3 select {
        padding: 8px;
        font-size: 18px;
    }

    .commit_1_0_0__box3 .form input {
        padding: 10px 12px;
    }

    .commit_1_0_0__box3__item {
        min-height: 200px;
    }

    .commit_1_0_0__box3__item .scrollbar {
        width: 100%;
        height: 160px;
    }

    .commit_1_0_0__box3__sub {
        font-size: 14px;
    }

    .commit_1_0_0__box3__sub .address {
        width: 40%;
    }

    .commit_1_0_0__box3__sub .icon__call,
    .commit_1_0_0__box3__sub .icon__time {
        width: 30%;
        text-align: center;
    }

    .commit_1_0_0__box3__sub .icon__call::before,
    .commit_1_0_0__box3__sub .icon__time::before {
        left: 40%;
    }

    .commit_1_0_0__box3__sub .icon__call:hover::before,
    .commit_1_0_0__box3__sub .icon__time:hover::before {
        left: 40%;
    }

    .commit_1_0_0__box3 .form .dkbt input {
        width: 65%;
    }
}

@media (max-width: 375px) {

    .commit_1_0_0__box2__more span,
    .commit_1_0_0__box2__more b {
        font-size: 14px;
    }

    .commit_1_0_0__box3 select {
        padding: 5px;
        font-size: 16px;
    }
}

@media (max-width: 360px) {
    .commit_1_0_0__box2__ct .tt {
        width: 60%;
        font-size: 15px;
    }

    .commit_1_0_0__box3__item {
        min-height: 180px;
    }
}

@media (max-width: 320px) {
    .commit_1_0_0__title {
        font-size: 18px;
    }

    .commit_1_0_0__box2__ct .tt {
        font-size: 14px;
        margin-top: -100px;
        height: 100px;
    }

    .commit_1_0_0__box3 h3,
    .commit_1_0_0__box3tt {
        font-size: 18px;
    }

    .commit_1_0_0__box3__item {
        min-height: 170px;
    }
}
</style>