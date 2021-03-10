<style>
    .breadcrumb_1_1_0 {
       
        width: 100%;
        height: auto;
        padding: 10px 0 10px 0px;
        font-size: 14px;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        margin-bottom: 30px;
    }
    .breadcrumb_1_1_0 p {
        margin: 0;
    }
    .breadcrumb_1_1_0 span {
        color: #333;
        font-family: Quicksand, Arial, Helvetica;
    }
    .breadcrumb_1_1_0 a {
       font-family: Quicksand, Arial, Helvetica;
       font-weight: 600;
        color: #333;
        text-decoration: none;
    }
    @media (max-width: 414px){
        .breadcrumb_1_1_0{
            margin-bottom: 15px;
        }
    }
</style>

<div class="breadcrumb_1_1_0">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
	</div>
</div>
