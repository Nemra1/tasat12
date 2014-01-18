<div class="adminlogin">
   <div class="right_tittle">ADMIN LOGIN</div>
   <div class="login_form" style="width: 290px;"> 
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
                    <p id="inactiveuser"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Activate your account to login.</p>
                    <div id="spacer" style="display: block; padding: 1px 5px;">
                        <span id="ajaxloader" style="margin-left: 95px;"><img src="<?php echo IMG_PATH; ?>images/loader-login.gif"></span>
                        <p id="default_text" style="padding: 9px 0px;">Enter Username &amp; Password to Login.</p>
                    </div>
                </li>
                <li>
                    <p style="margin-left: 80px;"><input type="button" value="Login" id="login" name="login" class="button_go" style="float: left; margin-right: 15px;"/></p>
<!--                    <p><a href="<?php echo WEB_URL; ?>home/forgotPassword">Forgot Password ?</a></p>-->
                </li>
            </ul>
        </form>
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
                $.post("<?php echo WEB_URL; ?>adminlogin/loginAdmin", {uname: username, pwd: password},
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
                    else if (data == "0") {
                       //alert("<?php echo $url=$this->session->userdata('uri'); ?>");                    
                       window.location.href = "<?php echo WEB_URL;?>admin";
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