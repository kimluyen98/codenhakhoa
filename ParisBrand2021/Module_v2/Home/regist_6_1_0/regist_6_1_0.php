<?php
	$path = get_template_directory_uri();
    $path = $path.'/Module_v2/Home/regist_6_1_0';
    if($check == 0){
		echo "
        <style>
            .regist_6_1_0 {
                font-family: -apple-system, system-ui, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
                padding: 20px 0;
                background: url($path/images/reg-bg.jpg) center 0 no-repeat;
                min-height: 460px;
                min-height: 460px;
                background-color: #fff;
                position: relative;
            }
            .regist_6_1_0_box {

                width: 50%;
                float: right;
                margin-top: 50px;
            }
            .regist_6_1_0_box h4 {
                text-transform: uppercase;
                text-align: center;
                font-weight: 700;
            }
            .regist_6_1_0_box .form {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 0 auto;
            }
            .regist_6_1_0_box .form input {
                line-height: inherit;
                padding: 10px;
                margin-top: 10px;
                border: none;
                background-color: #eee;
                border-radius: 5px;
            }
            .regist_6_1_0_regist {
                text-align: center;
                margin-top: 40px;
            }
            .regist_6_1_0_regist a {
                background-color: #0055BC;
                color: #fff;
                padding: 10px 20px;
                font-weight: 600;
                border-radius: 5px;
            }
            
            @media (max-width: 812px) {
                .regist_6_1_0{
                background-size: 1550px;
                }
                .regist_6_1_0_box {
                width: 65%;
                margin-top: 30px;
                }
            }
            @media (max-width: 414px) {
                .regist_6_1_0 {
                background: #fff;
                padding: 20px 0;
                }
                .regist_6_1_0_box {
                width: 100%;
                margin-top: 0;
                }
                .regist_6_1_0_box h4 {
                font-size: 17px;
                }
                .regist_6_1_0_box .form {
                width: 100%;
                }
                .regist_6_1_0_regist {
                margin-top: 25px;
                }
            }
            @media (max-width: 320px) {
                .regist_6_1_0_box h4 {
                font-size: 15px;
                }
            }
            
          
        </style>
		";	
			
	}
?>
<section class="regist_6_1_0">
    <div class="container">
        <div class="regist_6_1_0_box">
            <h4>miễn phí tư vấn cùng chuyên gia</h4>
            <div class="form"> 
                <input id="iname" name="iname" type="textbox" placeholder="Họ tên*:"> 
                <input id="imob" name="imob" type="textbox" placeholder="Điện thoại*:"> 
                <input id="iemail" name="iemail" type="textbox" placeholder="Email:">
            </div>
            <div class="regist_6_1_0_regist"> 
                <a onclick="ants_send_contact(this);save_form();">Đăng ký ngay &gt;&gt;</a>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/core/dist/jquery.min.js"></script>
