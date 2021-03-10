<style>
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

    .aligncenter {
        text-align: center;
        margin: 0 auto;
        display: block;
        max-width: 100%;
        height: auto;
    }
    h1,
    h2,
    h3 {
        font-family: Quicksand Medium, Arial, Helvetica !important;
    }
    .post_2_0_0{
        font-family: Quicksand, Arial, Helvetica !important;
        font-weight: 500;
    }
    .sapo{
		font-family: 'Quicksand Medium';
	}
	.post .item-7 {
		top: 30px;
	}
	#toc_container{
		margin: 0 auto;
	}
	.post__right .pcm__main article{
		width: 100%;
	}
	.breadcrum{
		margin: 195px 0 20px;
	}
    .post_info_box img{
        width: 17px;
        height: 17px;
    }
    .post_2_0_0 {
        margin: 0px 0 20px;
        font-size: 18px;
        color: #000;
    }
    .quang-cao{
        padding: 0 0px 20px;
    }
    .advtop img{
        width: 100%;
        display: block;
    }

    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        font-size: 18px;
        margin-bottom: 5px;
    }

    table td:first-child {
        padding-left: 16px;
    }

    table th,
    table td {
        padding: 8px 8px;
        display: table-cell;
        text-align: left;
        vertical-align: top;
    }

    table tr:nth-child(odd) {
        background-color: #fff;
    }

    table tr:nth-child(even) {
        background-color: #f1f1f1;
    }

    .post_2_0_0__right {
        padding: 0;
    }

    .post_2_0_0__right_quang-cao {
        text-align: center;
    }

    .post_2_0_0__right_quang-cao img {
        width: 100%;
        display: block;
    }

    .post_2_0_0__right_title-post {
        text-transform: uppercase;
        font-size: 22px;
        color: #0154A2;
        font-weight: bold;
        padding: 0px 0px 10px 0px;
        margin: 0;
    }

    .post_2_0_0__right .sapo {
        background-color: #E4F0FB;
        padding: 10px 20px;
        border: 3px solid #C2DFF9;
        border-radius: 4px;
        margin: 20px 0px;
        text-align: justify;
    }

    .post_2_0_0__right .sapo {
        font-weight: bold;
        font-size: 18px;
    }

    .post_2_0_0__right .sapo::before {
        content: "";
        background-image: url(<?php echo $path ?>/images/sapo_before.png);
        display: block;
        width: 32px;
        height: 26px;
        float: left;
        margin-right: 20px;
        display: none;
    }

    .post_2_0_0__right .sapo::after {
        content: "";
        background-image: url(<?php echo $path ?>/images/sapo_after.png);
        display: block;
        width: 32px;
        height: 26px;
        float: right;
        display: none;
    }

    .post_2_0_0__right .list-menu {
        border: 1px solid #ccc;
        padding: 20px 20px;
        margin-top: 20px;
        width: 60%;
        background-color: #F9F9F9;
        font-weight: 500;
        font-size: 14px;
    }

    .post_2_0_0__right .list-menu .title-list {
        text-align: center;
    }

    .post_2_0_0__right .list-menu .main-list a {
        display: block;
        text-decoration: underline;
        margin-bottom: 5px;
    }

    .post_2_0_0__right .list-menu .main-list ul {
        list-style: none;
        padding-left: 10px;
    }
    .post_2_0_0__right_chi-tiet p a{
        color: #0000ff;
    }
    .post_2_0_0__right_chi-tiet {
        padding: 0;
    }
    .post_2_0_0__right_chi-tiet h2, .post_2_0_0__right_chi-tiet h2 span {
        color: #0154A2;
        align-items: center;
        display: flex;
        min-height: 46px;
        border-radius: 5px;
        font-weight: 600;
        font-size: 22px;
        padding: 0;
        position: relative;
        text-transform: uppercase;
    }

    .post_2_0_0__right_chi-tiet h2::before {
        content: "";
        position: absolute;
        width: 200px;
        height: 4px;
        border-bottom: 4px solid #EF482A;
        left: 0px;
        bottom: 4px;
        padding: 2px 10px;
        z-index: 1;
    }

    .post_2_0_0__right_chi-tiet h2::after {
        content: "";
        position: absolute;
        width: 90%;
        height: 1px;
        border-bottom: 1px solid #05ADE6;
        left: 0px;
        bottom: 5px;
    }

    .post_2_0_0__right_chi-tiet h2 span {
        color: #0154A2 !important;
    }

    .post_2_0_0__right_chi-tiet h5 {
        font-weight: 600;
        color: #000;
        margin: 20px 0 0;
    }

    .post_2_0_0__right_chi-tiet p {
        text-align: justify;
    }

    .post_2_0_0__right_chi-tiet .post_info {
        display: block;
        font-size: 18px;
        justify-content: space-between;
    }

    .post_2_0_0__right_chi-tiet .post_info span {
        font-weight: bold;
    }

    .post_2_0_0__right_chi-tiet .post_info a {
        font-weight: 600;
    }

    .post_2_0_0__right_chi-tiet .post_info a:hover {
        color: #FF706F;
        text-decoration: underline;
    }

    .post_2_0_0__right_chi-tiet .post_info_box {
        display: flex;
    }
    .post_note{
        padding-right: 10px;
    }
    .post_2_0_0__right_chi-tiet .post_info_box p {
       
        margin: 0;
        display: flex;
        align-items: center;
    }
    .post_2_0_0__right_chi-tiet .post_info_box span{
        margin-left: 3px;
    }

    .post_2_0_0__right .image {
        text-align: center;
    }

    .post_2_0_0__right .image img {
        max-width: 100%;
    }

    .post_2_0_0__right .dang-ky {
        text-align: center;
        display: block;
    }

    .post_2_0_0__right .dang-ky img {
        max-width: 100%;
    }

    .post_2_0_0__right .more {
        margin: 20px 10px;
    }

    .post_2_0_0__right .more .nd-more {
        /* display: none; */
    }

    .post_2_0_0__right .more h2 {
        background-color: #E29190;
        color: #fff;
        align-items: center;
        /* display: none; */
        min-height: 46px;
        border-radius: 5px;
        text-transform: uppercase;
        font-size: 18px;
        margin-bottom: 0;
        margin: 20px 0 0;
        padding-left: 70px;
    }

    .post_2_0_0__right .more h2::before {
        content: "";
        background-image: url(<?php echo $path ?>/images/post-icon-search.png);
        display: block;
        background-repeat: no-repeat;
        width: 58px;
        background-position: center;
        height: 46px;
        padding: 5px 10px;
        margin-right: 15px;
        background-color: #E06767;
        border-radius: 5px;
        bottom: 0;
    }

    .post_2_0_0__right .more h2::after {
        display: none;
    }

    .post_2_0_0__right .more h5 {
        font-weight: 600;
        color: #000;
        margin: 20px 20px;
    }

    .post_2_0_0__right .more p {
        margin: 0 20px 20px;
    }

    .post_2_0_0__right .more .nd-more {
        padding: 15px;
        border: 2px solid #E29090;
        border-top: none;
        margin: -3px auto 0;
    }

    .post_2_0_0__right .more .nd-more p {
        margin: 0;
    }

    .post_2_0_0__right .more .nd-more a {
        color: #007EFE;
        font-size: 17px;
    }
    @media (max-width: 1024px){
        .post_2_0_0__right_chi-tiet .post_info{
            display:block;
        }
        .post_2_0_0__right_chi-tiet .post_info_box{
            padding-left: 0;
            justify-content: space-between;
            width: 50%;
            margin-top: 5px;
        }
        .post_2_0_0__right_chi-tiet .post_info_box p{
            padding-left: 0
        }
    }
    @media (max-width: 812px) {
        .post_2_0_0 {
            width: 100%;
        }

        .post_2_0_0 .row .col-md-9 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .post_2_0_0__right_chi-tiet h2::after {
            bottom: 2px;
        }
        .post_2_0_0__right_chi-tiet h2::before{
            bottom: 1px;
        }
        .post_2_0_0__right_quang-cao img {
            width: 100%;
        }
    }

    @media (max-width: 414px) {
        .modal-box-video{
            margin: 170px auto;
        }
        .post_2_0_0 {
            font-size: 16px;
        }
        .post_2_0_0__right_chi-tiet .post_info_box p{
            padding-left: 10px;
        }
        .post_2_0_0__right .sapo {
            font-size: 15px;
            margin: 13px 0;
            padding: 5px 10px;
        }

        .post_2_0_0__right {
            border: none;
            padding: 0;
        }

        .post_2_0_0__right_title-post {
            font-size: 16px;
            padding: 0;
        }

        .post_2_0_0__right_chi-tiet {
            padding: 0;
        }

        .post_2_0_0__right_chi-tiet h2::before {
            bottom: -3px;
        }

        .post_2_0_0__right_chi-tiet h2::after {
            bottom: -2px;
        }

        .post_2_0_0__right_chi-tiet h2 {
            font-size: 16px;
        }

        .post_2_0_0__right .post_info_box {
            justify-content: flex-end;
            width: 100%;
            font-size: 12px;
        }
    }

    @media (max-width: 320px) {
        .post_2_0_0__right .sapo {
            font-size: 12px;
        }

        .post_2_0_0__right_chi-tiet h2 {
            font-size: 14px;
        }

        .post_2_0_0__right_chi-tiet h5 {
            font-size: 14px;
        }

        .post_2_0_0__right_chi-tiet p {
            font-size: 13px;
        }

        .post_2_0_0__right .dang-ky img {
            max-width: 60%;
        }

        .post_2_0_0__right .more h2 {
            font-size: 16px;
        }

        .post_2_0_0__right .more .nd-more a {
            font-size: 14px;
        }
    }
</style>