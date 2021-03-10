
<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module_v2/Popup/commit_3_0_0/';
?>
<style>
   
    .commit_3_0_0,
    .commit_3_0_0__box h3, .commit_3_0_0__boxtt  {
           /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
           font-family: Quicksand medium,Arial,Helvetica;
    }
    
    .commit_3_0_0 .commit_3_0_0_overlay {
        background: rgba(0, 0, 0, 1);
    }
    
    .commit_3_0_0_box #commit_3_0_0_closePopup {
        color: #fff;
       font-size: 24px;
       font-weight: 500;
    }
    .commit_3_0_0 {
        font-size: 14px;
           /* font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; */
           font-family: Quicksand medium,Arial,Helvetica;
        display: none;
        position: fixed;
        z-index: 16;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }
    
    .commit_3_0_0_block {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .commit_3_0_0 .commit_3_0_0_overlay {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 10;
        opacity: 0.7;
    }
    
    .commit_3_0_0_box article {
        z-index: 10;
        margin: 0px auto;
        width: 400px;
        position: relative;
        border-radius: 4px;
    }
    
    @media (max-width: 1024px) {
        .commit_3_0_0_box article {
            width: 350px;
        }
    }
    
    @media (max-width: 320px) {
        .commit_3_0_0_box article {
            width: 300px;
        }
    }
    
    .commit_3_0_0_box #commit_3_0_0_closePopup {
        background-position: 0 0;
        background-repeat: no-repeat;
        position: absolute;
        top: -28px;
        right: -24px;
        transition: all 0.5s ease 0s;
        font-family: arial;
    }
    
    @media (max-width: 414px) {
        .commit_3_0_0_box #commit_3_0_0_closePopup {
            right: -10px;
        }
    }
    
    @media (max-width: 375px) {
        .commit_3_0_0_box #commit_3_0_0_closePopup {
            right: 0px;
            top: -30px;
        }
    }
    
    .commit_3_0_0_box #commit_3_0_0_closePopup:hover {
        transform: rotate(360deg);
    }
    
    .commit_3_0_0 {
        display: none;
        z-index: 16;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }
    
    .commit_3_0_0__box {
        background: #0165CD;
        padding: 20px 20px 30px;
        border-radius: 8px;
        color: #fff;
        height: auto;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .commit_3_0_0__box h3, .commit_3_0_0__boxtt {
        text-transform: uppercase;
        font-size: 30px;
        margin-top: 0;
        text-align: center;
        line-height: 1.3;
    }
    
    .commit_3_0_0__box select {
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
    
    .commit_3_0_0__box option {
        text-align: left;
    }
    
    .commit_3_0_0__box__item {
        background-color: #fff;
        margin-top: 10px;
        min-height: 350px;
        border-radius: 6px;
        padding: 20px;
    }
    
    .commit_3_0_0__box__item .scrollbar {
        float: left;
        height: 220px;
        width: 300px;
        overflow-y: scroll;
    }
    
    .commit_3_0_0__box__item .force-overflow {
        min-height: 320px;
    }
    
    .commit_3_0_0__box__item #style-1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 15px;
        background-color: #F5F5F5;
    }
    
    .commit_3_0_0__box__item #style-1::-webkit-scrollbar {
        width: 5px;
        background-color: #F5F5F5;
    }
    
    .commit_3_0_0__box__item #style-1::-webkit-scrollbar-thumb {
        border-radius: 15px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #0055A4;
    }
    
    .commit_3_0_0__box__sub {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }
    
    .commit_3_0_0__box__sub a:hover {
        color: #0055A4;
    }
    
    .commit_3_0_0__box__sub .address {
        width: 50%;
    }
    
    .commit_3_0_0__box__sub .icon__call,
    .commit_3_0_0__box__sub .icon__time {
        width: 24%;
        padding-top: 22px;
        position: relative;
    }
    
    .commit_3_0_0__box__sub .icon__call::before {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAMAAABY1h8eAAAAilBMVEUAAAAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyAjHyB0XzFUAAAALXRSTlMAHQT56dwrSpxvXcGU8u3jVjINypFBJyPUr0U3z7qniHxi2LSsEmQ8FxG5oWgYWmyIAAABTElEQVQoz2WS2WKDIBBFr4DgGrdEszdp1i73/3+vMok1recNjoPDZfDLYt7kZN7MF/hPEpJ6u9ttNRkmf1SQUkcLhR61iDTTYHSV4eplGaxoKjyxM8Z4cF7uEwXEnFkIdcgEUJVDv7svaPpVwrAWmfENcDP68uN3e0sZKbxx7l2n3xWsJmkUTmRqD8yg3nUnhSUQ0XMDPq6Fdod+q5RS0xdg6Z3eAL1Oc9uEShkD1Iwg0qxrCBdzcnSIWCPgEcCezDs8iRnMMhwZoOUagCMZDjl0LD9TrNnCUsI4vVi1cvEcG9pnJS6+paLDiGMr//QExbPWNZF0feBduh0SFvtF+siw1epxT2GT+5MT/03jTz0PCY1WyHAvaIdsH9iCgq7aJQ/jqzy4nEWu9prZy3sOrFPRYTmZBCEo42uFyQxNmEzfyGRu46kZJ36HV34ACq0lLm3MlDMAAAAASUVORK5CYII=") center 0 no-repeat;
        background-size: 100%;
        position: absolute;
        top: 0px;
        left: 10px;
        display: block;
        content: '';
        width: 23px;
        height: 23px;
    }
    
    .commit_3_0_0__box__sub .icon__call:hover::before {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAMAAABY1h8eAAAAflBMVEUAAAAAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQ4jNU4AAAAKXRSTlMABB352+krJkqcb11B0sGU8uPLVjIN7a2RujeniHxktBKwYkU8FxGhaI68XzgAAAFKSURBVCjPZZLZdoMwEEPlDQyEHUL2tFna6v9/sGYCh7Tct7GQjpEHM2qzayqyanYbhX9kljT5fp8b0mZ/JF3QJMEhCYlhoRetcxzeRj3QdfMQbZnixZAfsxCQchtB6C2zENd5hNNjTRemjLYXseQJ8I6j/fYTPwomCifuEIiNVYgMSadwJYvozBLKmliMLZBw5AF8XWrjz+GoFasLBuQMmAMQ5KKKGquUc0DPBCK6ew/hw109fQjroXkJB0eyijGRUm9LXKgRcxNmT9LquQS2+wIbxogoZVzfVPXp0x0OjCYnPnKSdYwFH5yat1dWPXl9k8itz3zKbeeGRf0meQpzY9TrP4VDNSZn4zfNmDrMDS2qUOJZM5q7nZJrCqaLc56XV5nKGUT8PBqWb+85cy9Etu1qEwTdppcOqx1asdq+hdXepmtl2fg93vkFd3ohwQqMlhAAAAAASUVORK5CYII=") center 0 no-repeat;
        content: '';
        background-size: 100%;
        position: absolute;
        top: 0px;
        left: 10px;
        display: block;
        width: 23px;
        height: 23px;
    }
    
    .commit_3_0_0__box__sub .icon__time::before {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAdCAMAAAB/hKeOAAAAmVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAjHWqVAAAAMnRSTlMAQICw4dBwUDDwH/ygD8EW+OrUj3UE87SpDOTax5aJYFpNPjgrEwi8pJuTamRVSBuEaZANRuwAAAEDSURBVCjPZc/pcoMgFIbhD4JaBIxb1OyLS/ak5f4vrtCQqu07/GCegZlz4Mr5kmDcU2/Xy5FMN6W+Z7H0Z28Iw6OXVYKvLwkNQ2Voo01boJsB0lzjAIh3SjFv8hM7KbUuAU2AO3XVAI2szc/eoCR5GPMX/jCZGKMTYGbPK6JfdtHME950aI0Otv4h/ZyfpcydBQlMWdVtsuzm7BFbk9LuNHc2FWSfq8VXq7VeOcMp1TzlavgOT3a8id14FuD/fA2xhWgGlnKbbBddb329HQLbAagJ8Z1FzLbCVXAuivFfGmEf07+2EysYy5fBu6oQaWStLdlv3p4aK/KPUVUJXAs9itX4BrT6HVEWJdgIAAAAAElFTkSuQmCC") center 0 no-repeat;
        background-size: 100%;
        position: absolute;
        top: 0px;
        left: 18px;
        display: block;
        content: '';
        width: 16px;
        height: 25px;
    }
    
    .commit_3_0_0__box__sub .icon__time:hover::before {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAdCAMAAAB/hKeOAAAAilBMVEUAAAAAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaQAVaRd3ZgyAAAALXRSTlMAQICwT+BwMND78R/AoBcPBu7jqJFzYQvUzYpa9tnHaT44KxPotpuWlXpUSIS7SVg/AAAA/klEQVQoz2XQ13KEIBSA4aOLRlBExd7L9g3v/3o5ZEmU5B8vnG/oYCpSzwG7UJX3wZK4vahnS3mR/EAYRkEuaXrLUzcMBVKrsBIgwTEcfykBoJ0QWXP6LpNC3C4ACrfrXNMC4EbaqmsT7J3TF5qf+cd4iuaecAf9vXPU2+4qa2gQH21VpPTn+rO6cv4wRs6A5TJp87w09uq1ca7vVBmLqUMKkU0b3mM0BnJQac3EcRzEXlTSzj4L9u98q6MLYT1YzXR8y6rd9nabiW4GWBzHNxZ5uhEmyhjt7bn4oKR//LWOjoBWDE9ikozWkbbt5P3WEBeNFR9WEleamLLyFvgCk2Aa9ErwR34AAAAASUVORK5CYII=") center 0 no-repeat;
        background-size: 100%;
        position: absolute;
        top: 0px;
        left: 18px;
        display: block;
        content: '';
        width: 16px;
        height: 25px;
    }
    
    @media (max-width: 1024px) {
        .commit_3_0_0__box article {
            width: 350px;
        }
        .commit_3_0_0__box h3, .commit_3_0_0__boxtt {
            font-size: 28px;
        }
        .commit_3_0_0__box__item {
            min-height: 300px;
        }
        .commit_3_0_0__box__item .scrollbar {
            width: 265px;
        }
        .commit_3_0_0__box__item #style-1::-webkit-scrollbar {
            width: 3px;
        }
        .commit_3_0_0__box__sub {
            margin-bottom: 20px;
        }
        .commit_3_0_0__box__sub .address {
            width: 100%;
        }
        .commit_3_0_0__box__sub .icon__call,
        .commit_3_0_0__box__sub .icon__time {
            width: 50%;
            text-align: center;
        }
        .commit_3_0_0__box__sub .icon__call::before,
        .commit_3_0_0__box__sub .icon__time::before {
            left: 40%;
        }
        .commit_3_0_0__box__sub .icon__call:hover::before,
        .commit_3_0_0__box__sub .icon__time:hover::before {
            left: 40%;
        }
    }
    
    @media (max-width: 812px) {
        .commit_3_0_0__box select {
            padding: 4px;
            font-size: 14px;
        }
        .commit_3_0_0__box__item {
            min-height: 300px;
        }
        .commit_3_0_0__box__item .scrollbar {
            width: 230px;
            height: 180px;
        }
        .commit_3_0_0__box__sub {
            font-size: 13px;
        }
    }
    
    @media (max-width: 414px) {
        .commit_3_0_0__box {
            width: 100%;
            margin: 30px auto;
        }
        .commit_3_0_0__box h3, .commit_3_0_0__boxtt {
            font-size: 25px;
        }
        .commit_3_0_0__box select {
            padding: 8px;
            font-size: 18px;
        }
        .commit_3_0_0__box__item {
            min-height: 260px;
        }
        .commit_3_0_0__box__item .scrollbar {
            width: 100%;
            height: 200px;
        }
        .commit_3_0_0__box__sub {
            font-size: 14px;
        }
        .commit_3_0_0__box__sub .address {
            width: 40%;
        }
        .commit_3_0_0__box__sub .icon__call,
        .commit_3_0_0__box__sub .icon__time {
            width: 30%;
            text-align: center;
        }
        .commit_3_0_0__box__sub .icon__call::before,
        .commit_3_0_0__box__sub .icon__time::before {
            left: 40%;
        }
        .commit_3_0_0__box__sub .icon__call:hover::before,
        .commit_3_0_0__box__sub .icon__time:hover::before {
            left: 40%;
        }
    }
    
    @media (max-width: 375px) {
        .commit_3_0_0__box select {
            padding: 5px;
            font-size: 16px;
        }
    }
    
    @media (max-width: 360px) {
        .commit_3_0_0__box__item {
            min-height: 300px;
        }
    }
    
    @media (max-width: 320px) {
        .commit_3_0_0__box h3, .commit_3_0_0__boxtt {
            font-size: 25px;
        }
        .commit_3_0_0__box__item {
            min-height: 250px;
        }
    }
</style>

<div class="commit_3_0_0" id="commit_3_0_0">
    <div class="commit_3_0_0_block">
        <div class="commit_3_0_0_overlay" id="commit_3_0_0_overlay" style="display:none"></div>
        <div id="commit_3_0_0_overlayClickform" class="overlay_form">
            <div class="commit_3_0_0_box">
                <article>
                    <div class="commit_3_0_0__box">
                        <div class="commit_3_0_0__box__tt">
                            <div class="commit_3_0_0__boxtt"><?php echo $field['contact_title']; ?></div>
                            <select id="select-box3" onchange="showHide3()" class="commit_3_0_0__box3__select">
                                <?php
                                    $i = 1;
                                    foreach($field['contact_info'] as $key => $value):
                                        echo'
                                            <option value="val'.$i.'">'.$value['contact_city_name'].'</option>
                                        ';
                                        $i++;
                                    endforeach;
                                ?>
                            </select>
                            <div class="commit_3_0_0__box__list">
                            <?php
								$i = 1;
								
                                foreach($field['contact_info'] as $key => $value_0):
                                    if($key == 0):
                                        $style = "style='display:block'";
                                    else: 
                                        $style = "style='display:none'";
                                    endif;
									echo'
									<div class="commit_3_0_0__box__item" id="val'.$i.'" '.$style.'>
                                    	<div class="scrollbar" id="style-1">
                                        	<div class="force-overflow">
									';
											
												foreach($value_0 as $value_1):
													foreach($value_1 as $key => $value):
													$data2 = explode("\n",  $value["content"]);
													$x = $data2[0];
													echo'
														
														<div class="commit_3_0_0__box__sub">
															<a href="'.$data2[1].'" class="address">'.$x.'</a>
															<a class="icon__call popup_caller"> Hotline</a>
															<a class="icon__time btnnktv" onclick="myFunction(document.getElementById(\'local-'.$i.$key.'\').textContent)"> Lịch hẹn</a>
														</div>
														<script>
														function myFunction(text) {
														  document.getElementById("itext").innerHTML = "Đặt lịch hẹn tại: "+text;
														}
														</script>
													';
												endforeach;
											endforeach;
									echo'
											</div>
											</div>
										</div>
									';
									$i++;
								
								endforeach;
							?>

                            </div>
                        </div>
                    </div>
                    <a id="commit_3_0_0_closePopup">✖</a>
                </article>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded",function(){const e=document.getElementsByClassName("popup_call"),t=document.getElementById("commit_3_0_0"),n=document.getElementById("commit_3_0_0_overlayClickform"),o=document.getElementById("commit_3_0_0_overlay"),l=document.getElementById("commit_3_0_0_closePopup");iconCall=document.getElementsByClassName("icon__call"),iconTime=document.getElementsByClassName("icon__time");for(const l of e)l.addEventListener("click",function(){t.style.display="block",n.style.display="block",o.style.display="block"});l.addEventListener("click",function(){t.style.display="none",n.style.display="none",o.style.display="none"}),o.addEventListener("click",function(){t.style.display="none",n.style.display="none",o.style.display="none"});for(const e of iconCall)e.addEventListener("click",function(){t.style.display="none"});for(const e of iconTime)e.addEventListener("click",function(){t.style.display="none"})});var commit3=document.querySelector("#select-box3"),commit3_item=document.getElementsByClassName("commit_3_0_0__box__item");function showHide3(){for(var e of commit3_item){"block"===e.style.display&&(e.style.display="none");var t=commit3.value;if(t){var n=document.querySelector("#"+t);n.style.display="block",e=n}}}
</script>

