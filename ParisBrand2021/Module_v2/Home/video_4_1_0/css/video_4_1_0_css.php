<style>
a {
    text-decoration: none;
}

.mb {
    display: none;
}

@media (max-width: 414px) {
    .mb {
        display: block;
    }
}

.video_4_1_0 {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
    background: #F5F5F5;
    padding: 0 0 30px;
}

.video_4_1_0__title {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
    font-size: 26px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding: 40px 0 25px;
    text-align: center;
}

.container.img-lazy::before {
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

.video_4_1_0.loaded .video_4_1_0__box1 .pic::after {
    content: "";
    display: block;
    position: absolute;
    z-index: 1;
    background: url(<?php echo $path ?>/images/icon.png) center no-repeat;
    transition: 0.3s ease-out;
    background-size: 100%;
    width: 60px;
    height: 70px;
    left: calc(50% - 23px);
    top: calc(50% - 55px);
    transition: 0.3s;
}

.video_4_1_0.loaded .video_4_1_0__box2__item .pic::after {
    content: "";
    display: block;
    position: absolute;
    z-index: 1;
    background: url(<?php echo $path ?>/images/icon.png) center no-repeat;
    transition: 0.3s ease-out;
    background-size: 100%;
    width: 35px;
    height: 40px;
    left: calc(50% - 23px);
    top: calc(50% - 23px);
    transition: 0.3s;
}

.video_4_1_0__box1 .pic {
    background: #252525;
    position: relative;
    height: 432px;
}

.video_4_1_0__box1 .pic img {
    opacity: 0.5;
    width: 100%;
    height: 100%;
    transition: 0.3s;
}

.video_4_1_0__box1 .pic img:hover {
    opacity: 0.8;
    transition: 0.5s;
    cursor: pointer;
}

.video_4_1_0__box1 .text {
    font-family: sans-serif;
    width: 96.3%;
    background-color: rgba(225, 225, 255, 0.5);
    color: #000;
    position: absolute;
    bottom: 0px;
    font-size: 17px;
    padding: 6px 0px 6px 20px;
}

.video_4_1_0__box2__mb {
    display: none;
}

.video_4_1_0__box2__item a {
    display: flex;
    margin-bottom: 10px;
}

.video_4_1_0__box2__item .pic {
    background: #252525;
    position: relative;
    box-shadow: 4px 5px 5px 2px #ccc;
    position: relative;
}

.video_4_1_0__box2__item .pic img {
    opacity: 0.5;
    width: 100%;
    height: 100%;
    transition: 0.3s;
    display: block;
}

.video_4_1_0__box2__item .pic img:hover {
    opacity: 0.8;
    cursor: pointer;
    transition: 0.5s;
}

.video_4_1_0__box2__item .ct {
    padding-left: 20px;
    font-family: sans-serif;
    flex: 1;
}

.video_4_1_0__box2 .scrollbar {
    float: left;
    height: 420px;
    width: 350px;
    overflow-y: scroll;
}

.video_4_1_0__box2 .force-overflow {
    min-height: 450px;
}

.video_4_1_0__box2 #style-1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
}

.video_4_1_0__box2 #style-1::-webkit-scrollbar {
    width: 6px;
    background-color: #F5F5F5;
}

.video_4_1_0__box2 #style-1::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #154589;
}
@media (max-width: 1280px){
    .video_4_1_0__box2 .scrollbar{
        width: 100%;
    }
    .video_4_1_0__box2__item a{
        flex-wrap: wrap;
    }
    .video_4_1_0__box2__item .pic{
        width: 50%
    }
}
@media (max-width: 1024px) {
    .video_4_1_0 .row .col-md-8 {
        padding: 0 8px;
    }

    .video_4_1_0 .row .col-md-4 {
        padding: 0 8px;
    }

    .video_4_1_0__box1 .pic {
        height: 354px;
    }

    .video_4_1_0__box1 .text {
        width: 98%;
    }
    
    .video_4_1_0__box2 .scrollbar {
        height: 355px;
        width: 100%;
    }
   
    .video_4_1_0__box2__item .ct {
        padding-left: 10px;
        font-size: 12px;
    }
}

@media (max-width: 812px) {
    .video_4_1_0__title {
        padding: 20px 0 5px;
    }
    .video_4_1_0 .row .col-md-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }

    .video_4_1_0 .row .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .video_4_1_0__box1 .pic {
        height: 270px;
    }

    .video_4_1_0__box1 .text {
        font-size: 15px;
        padding: 3px 0px 3px 20px;
    }

    /* .video_4_1_0__box2__item .pic {
        width: ;
        height: 70px;
    } */

    .video_4_1_0__box2__item .pic img {
        width: 100%;
        /* height: 70px; */
    }

    .video_4_1_0 .video_4_1_0__box2__item .pic::after {
        width: 25px;
        height: 30px;
        left: calc(50% - 10px);
        top: calc(50% - 20px);
    }

    .video_4_1_0__box2 .scrollbar {
        height: 273px;
    }

    .video_4_1_0__box2 #style-1::-webkit-scrollbar {
        width: 4px;
    }
}

@media (max-width: 414px) {
    .video_4_1_0 {
        padding-bottom: 10px;
    }

    .video_4_1_0 .container::before {
        top: -6px;
    }

    .video_4_1_0 .row .col-md-8 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .video_4_1_0 .row .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .video_4_1_0 .mb {

        padding: 10px 0;
    }

    .video_4_1_0 .mb .tns-nav {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 2;
    }

    .video_4_1_0__title {
        font-size: 25px;
        padding: 30px 0 5px;
    }

    .video_4_1_0__box1 .pic {
        height: 223px;
    }

    .video_4_1_0__box1 .text {
        width: 96.2%;
    }

    .video_4_1_0.loaded .video_4_1_0__box1 .pic::after {
        width: 40px;
        height: 50px;
        left: calc(50% - 23px);
        top: calc(50% - 35px);
    }

    .video_4_1_0__box2 {
        padding-top: 20px;
    }

    .video_4_1_0__box2 .scrollbar {
        display: none;
    }

    .video_4_1_0__box2__mb {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .video_4_1_0__box2__item {
        text-align: center;
        width: 49%;
    }

    .video_4_1_0__box2__item a {
        display: block;
    }

    .video_4_1_0__box2__item .pic {
        width: 100%;
        height: auto;
    }

    .video_4_1_0__box2__item .pic img {
        width: 100%;
        height: auto;
    }

    .video_4_1_0__box2__item .ct {
        padding: 10px;
    }
}

@media (max-width: 375px) {
    .video_4_1_0__box1 .pic {
        height: 201px;
    }
}

@media (max-width: 360px) {
    .video_4_1_0__box1 .pic {
        height: 193px;
    }
}

@media (max-width: 320px) {
    .video_4_1_0__box1 .pic {
        height: 171px;
    }

    .video_4_1_0__title {
        font-size: 20px;
    }
}
</style>