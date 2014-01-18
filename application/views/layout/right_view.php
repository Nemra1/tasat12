<script>
    $(document).ready(function() {
        $('.voterdetails').hide();
        $('.voterimg').hover(function() {
            $('.voterdetails').fadeToggle(500);
        });
    });
</script>
<div class="right_content">

    <div class="right_colum_1"> 
        <div class="right_tittle">LOGIN</div>
        <div class="login_form"> 
            <form method="post">
                <ul>
                    <li>
                        Username*: <input type="text" placeholder="username"  id="uname" name="username" class="rounded"/>
                    </li>
                    <li>
                        Password*: <input type="password" placeholder="password" id="password" name="password" class="rounded"/>
                    </li>
                    <li>
                        <p id="error"  style="display: none; color: #d20c0c; text-align: center;">Incorrect Username and Password.<br> Please Try again!!!</p>
                        <p id="emptyfields"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Please enter the required values.</p>
                        <p id="inactiveuser"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Activate your TASAT Account to login.</p>
                        <div id="spacer" style="display: block; padding: 1px 5px;">
                            <span id="ajaxloader" style="margin-left: 95px;"><img src="<?php echo IMG_PATH; ?>images/loader-login.gif"></span>
                            <p id="default_text" style="padding: 9px 0px;">Enter Username &amp; Password to Login.</p>
                        </div>
                    </li>
                    <li>
                        <p style="margin-left: 35px;"><input type="button" value="Login" id="login" name="login" class="button_go" style="float: left; margin-right: 15px;"/> <a href="<?php echo WEB_URL; ?>home/forgotPassword">Forgot Password ?</a></p>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <div class="right_colum_2" style="border: 1px solid #999">
        <div class="right_tittle clearleft">Vote Translator : Male <input type="radio"> Female <input type="radio"></span></div>
        <div class="votewrap clearfixit">
            <div class="voterimg">
                <img src="<?php echo IMG_PATH; ?>images/nopic.jpg" width="200" height="280">
            </div>
            <div class="voterdetails">
                <ul>
                    <li>Name: John Smith</li>
                    <li>Rank: ***</li>
                    <li>Votes: 10</li>
                </ul>
            </div>
        </div>
    </div>

</div>
</div>

<script>
    $(document).ready(function() {
               $('#ajaxloader').hide();
        $('#login').click(function() {
               $('#ajaxloader').show();
               $('#default_text').css('display', 'none');
            if ($('#uname').val()=="" || $('#password').val()=="") {
                //alert('empty');
               $('#emptyfields').css('display', 'block');
               $('#spacer').css('display', 'none');
               $('#default_text').css('display', 'none');
               $('#error').css('display', 'none');
               $('#inactiveuser').css('display', 'none');
               $('#ajaxloader').hide();
            } else {
            username = $('#uname').val();
            password = $('#password').val();
                $.post("<?php echo WEB_URL; ?>login/loginUser", {uname: username, pwd: password},
                function(data, success) {
                    //alert(data);
                    if (data == "inactive") {
                        $('#emptyfields').css('display', 'none');
                        $('#error').css('display', 'none');
                        $('#spacer').css('display', 'none');
                        $('#inactiveuser').css('display', 'block');
                        $('#default_text').css('display', 'none');
                        $('#ajaxloader').hide();
                    } 
                    else if (data == "1") {
                       //alert("<?php echo $url=$this->session->userdata('uri'); ?>");                    
                       window.location.href = "<?php echo WEB_URL;?>dashboard";
                    } 
                    else if(data == "2") {
                       //alert("<?php echo $url=$this->session->userdata('uri'); ?>");                    
                       window.location.href = "<?php echo WEB_URL;?>translator";                        
                    } 
                    else if(data == "3") {
                       //alert("<?php echo $url=$this->session->userdata('uri'); ?>");                    
                       window.location.href = "<?php echo WEB_URL;?>translator";                        
                    } 
                    else {
                        $('#emptyfields').css('display', 'none');
                        $('#error').css('display', 'block');
                        $('#spacer').css('display', 'none');
                        $('#inactiveuser').css('display', 'none');  
                        $('#default_text').css('display', 'none');
                        $('#ajaxloader').hide();
                    }
                });
                //alert('you are here');
            }
        });
    });
</script>