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
        <div class="right_tittle">Forgot Password</div>
        <div class="login_form" style="text-align: center;"> 
             <form method="post"  action="<?php echo WEB_URL; ?>home/forgotPassword">
                <ul>
                    <li>
                        Username*: <input type="text" placeholder="username" name="username"  id="uname" value="<?php echo set_value('username'); ?>" class="rounded"/>
                    </li>
                    <li>
                        Email Id*: <input type="text" placeholder="email id" name="resetid" id="resetid"  value="<?php echo set_value('forgotpswd'); ?>" class="rounded"/>
                    </li>
                    <li>
                        <p id="error"  style="display: none; color: #d20c0c; text-align: center;">Incorrect Username and Email ID.<br> Please Try again!!!</p>
                        <p id="emptyfields"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Please enter the required values.</p>
                        <p id="servererror"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Some error occurred. Please Try again!!!</p>
                        <p id="resetmailsent"  style="display: none; color: #1D71A8; text-align: center; padding: 9px 0px;">Reset Password with the link sent.</p>
                        <div id="spacer" style="display: block; padding: 1px 5px;">
                            <span id="ajaxloader"><img src="<?php echo IMG_PATH; ?>images/loader-login.gif"></span>
                            <p id="default_text" style="padding: 9px 0px;">Enter Username &amp; Email.</p>
                        </div>
                    </li>
                    <li>
                        <p style="margin-left: 75px;"><input type="button" value="Continue" id="forgotpswd" name="forgotpswd" class="button_go" style="width:75px;"/></p>
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

<!--            <h5>Please enter your email address to reset your Password.</h5>
            <table>
            <form action="<?php echo WEB_URL; ?>home/forgotPassword" method="post">
                <tr><td><input type="text" class="rounded" name="forgotpswd" id="forgotpswd"  value="<?php echo set_value('forgotpswd'); ?>"></td>
                <td><input type="submit" class="button" value="Continue"></td></tr>
                <tr><td colspan="2"><?php echo form_error('forgotpswd'); ?></td></tr>
            </form>
            </table>   -->

<script>
    $(document).ready(function() {
               $('#ajaxloader').hide();
        $('#forgotpswd').click(function() {
               $('#ajaxloader').show();
               $('#default_text').css('display', 'none');
            if ($('#uname').val()=="" || $('#resetid').val()=="") {
                //alert('empty');
               $('#emptyfields').css('display', 'block');
               $('#spacer').css('display', 'none');
               $('#error').css('display', 'none');
               $('#resetmailsent').css('display', 'none');
               $('#servererror').css('display', 'none');
               $('#ajaxloader').hide();
            } else {
            username = $('#uname').val();
            resetid = $('#resetid').val();
                $.post("<?php echo WEB_URL; ?>home/resetPassword", {uname: username, resetid: resetid},
                function(data, success) {
                    alert(data);
//                   if (data == "mailsent") {
//                        $('#emptyfields').css('display', 'none');
//                        $('#spacer').css('display', 'none');
//                        $('#error').css('display', 'none');
//                        $('#resetmailsent').css('display', 'block');
//                        $('#servererror').css('display', 'none');
//                        $('#ajaxloader').hide();
//                    } 
//                    else if(data == "resetfail") {
//                        $('#emptyfields').css('display', 'none');
//                        $('#spacer').css('display', 'none');
//                        $('#error').css('display', 'block');
//                        $('#resetmailsent').css('display', 'none');   
//                        $('#servererror').css('display', 'none');   
//                        $('#ajaxloader').hide();               
//                    } 
//                    else {
//                        $('#emptyfields').css('display', 'none');
//                        $('#error').css('display', 'none');
//                        $('#spacer').css('display', 'none');
//                        $('#resetmailsent').css('display', 'none');   
//                        $('#servererror').css('display', 'block');
//                        $('#ajaxloader').hide();
//                    }
                });
                //alert('you are here');
            }
        });
    });
</script>