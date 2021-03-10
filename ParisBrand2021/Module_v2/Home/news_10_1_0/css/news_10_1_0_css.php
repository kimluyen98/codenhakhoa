<style>
.news_10_1_0 {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
    padding: 30px 0;
}

.news_10_1_0.loaded .container::before {
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

.news_10_1_0__title h2 {
    /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
    font-family: Quicksand medium,Arial,Helvetica;
    font-size: 25px;
    font-weight: 600;
    color: #0055A4;
    text-transform: uppercase;
    padding: 40px 0 25px;
    text-align: center;
    display: none;
}

.news_10_1_0_box {
    padding-top: 50px;
}

.news_10_1_0_box .box_title {
    font-weight: 600;
    font-size: 24px;
    margin-bottom: 15px;
    position: relative;
}

.news_10_1_0_box .box_title::after {
    content: "";
    border-bottom: 1px solid #9f9f9f;
    position: absolute;
    width: 65%;
    right: 0;
    top: 25px;
}

.news_10_1_0_box .box2 a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 10px;
}

.news_10_1_0_box .box2 a:hover {
    cursor: pointer;
}

.news_10_1_0_box .box2 a:hover p {
    color: #0157a4;
}

.news_10_1_0_box .box2 .pic {
    width: 18%;
}

.news_10_1_0_box .box2 .pic img {
    width: 100%;
    height: 100%;
    display: block;
}

.news_10_1_0_box .box2 .text {
    width: 82%;
    padding-left: 10px;
    flex: 1;
}

.news_10_1_0_box .box2 .text p {
    color: #2C4B92;
    font-weight: 600;
    font-size: 18px;
    line-height: 1.3;
    margin-bottom: 0
}

.news_10_1_0_box .box2 .text .info {
    margin-bottom: 5px;
    font-size: 13px;
    font-style: italic;
    font-weight: 600;
}

.news_10_1_0_box .box2 .text .info span {
    padding-right: 20px;
    color: #565656;
}

.news_10_1_0_box .box2 .text .info i {
    color: #F79421;
    margin: 0 10px 0 0;
}

.news_10_1_0_box .box1 a {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-bottom: 20px;
}

.news_10_1_0_box .box1 a:hover {
    cursor: pointer;
}

.news_10_1_0_box .box1 a:hover p {
    color: #0157a4;
}

.news_10_1_0_box .box1 .pic {
    width: 40%;
}

.news_10_1_0_box .box1 .pic img {
    width: 100%;
    height: 100%;
    display: block;
}

.news_10_1_0_box .box1 .text {
    width: 60%;
    padding-left: 10px;
}

.news_10_1_0_box .box1 .text p {
    color: #2C4B92;
    margin: 0;
    font-weight: 600;
    font-size: 18px;
}

.news_10_1_0_box .box1 .text .info {
    margin-bottom: 10px;
}

.news_10_1_0_box .box1 .text .info span {
    padding-right: 20px;
    color: #565656;
}

.news_10_1_0_box .box1 .text .info i {
    color: #F79421;
    margin: 0 10px 0 0;
}
@media (max-width: 1024px) {
    .news_10_1_0_box .box_title {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .news_10_1_0_box .box_title::after {
        top: 22px;
    }

    .news_10_1_0_box .box1 .text p {
        font-size: 17px;
    }

    .news_10_1_0_box .box1 .text .info span {
        padding-right: 5px;
    }
    .news_10_1_0_box .box2 .text{
        font-size: 14px;
    }
    .news_10_1_0_box .box1 .text .info i {
        margin: 0 3px 0 0;
    }

    .news_10_1_0_box .box2 .text p {
        font-size: 14px;
        margin-bottom: 0;
    }
    .news_10_1_0_box .box2 .text .info{
        display: none;
    }
    .news_10_1_0_box .box2 .text .info span {
        padding-right: 5px;

    }

    .news_10_1_0_box .box2 .text .info i {
        margin: 0 3px 0 0;
    }
}

@media (max-width: 812px) {
    .news_10_1_0_box .box_title {
        font-size: 20px;
    }

    .news_10_1_0_box .box_title::after {
        width: 55%;
        top: 18px;
    }

    .news_10_1_0_box .text span {
        display: none;
    }
}

@media (max-width: 414px) {
    .news_10_1_0 {
        padding: 0 0 10px;
    }

    .news_10_1_0__title h2 {
        display: block;
        padding: 10px 0 15px;
    }

    .news_10_1_0_box {
        padding-top: 0px;
    }

    .news_10_1_0_box .box_title::after {
        width: 60%;
    }

    .news_10_1_0_box .box1 {
        width: 100%;
    }

    .news_10_1_0_box .box1 .pic {
        width: 18%;
    }

    .news_10_1_0_box .box1 .text {
        width: 82%;
        text-align: justify;
    }

    .news_10_1_0_box .box1 .text p {
        font-size: 14px;
    }

    .news_10_1_0_box .box1 .text span {
        display: none;
        font-size: 13px;
    }

    .news_10_1_0_box .box1 .text .info {
        margin: 5px 0;
        display: flex;
        display: none;
    }

    .news_10_1_0_box .box1 .text .info span {
        display: block;
        font-size: 12px;
    }

    .news_10_1_0_box .box2 {
        width: 100%;
    }

    .news_10_1_0_box .box2 .text {
        text-align: justify;
    }

    .news_10_1_0_box .box2 .text span {
        display: none;
        font-size: 13px;
    }

    .news_10_1_0_box .box2 .text p {
        font-size: 14px;
    }

    .news_10_1_0_box .box2 .text .info {
        margin: 5px 0;
        display: flex;
        display: none;
    }

    .news_10_1_0_box .box2 .text .info span {
        display: none;
        font-size: 12px;
    }
}

@media (max-width: 360px) {
    .news_10_1_0_box .box_title::after {
        width: 50%;
    }
}

@media (max-width: 320px) {
    .news_10_1_0__title h2 {
        font-size: 20px;
    }
}
</style>