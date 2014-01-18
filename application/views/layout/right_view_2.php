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
        <div class="right_tittle">Reset Password</div>
        <div class="login_form" style="width: 255px;"> 
             <form method="post">
                <ul>
                    <li>                        
                    <label>New Password*:</label> <input type="password" name="newpass"  id="newpass"  class="rounded"/><input type="hidden" name="key" id="key" value="<?php echo $key; ?>">
                    </li>
                    <li>
                    <label style="margin-right: 37px;">Re-Type*:</label> <input type="password" name="newpassconf" id="newpassconf"   class="rounded"/>
                    </li>
                    <li>
                        <p id="mismatch"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Password Mismatch. Re-type Password.</p>
                        <p id="length"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Enter atleast 6 character password.</p>
                        <p id="emptyfields"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Please enter the required values.</p>
                        <p id="servererror"  style="display: none; color: #d20c0c; text-align: center; padding: 9px 0px;">Some error occurred.<br> Please Try again!!!</p>
                        <div id="spacer" style="display: block; padding: 1px 5px;">
                            <span id="ajaxloader" style="margin-left: 95px;"><img src="<?php echo IMG_PATH; ?>images/loader-login.gif"></span>
                            <p id="default_text" style="padding: 9px 0px;">Enter your Desired Password.</p>
                        </div>
                    </li>
                    <li>
                        <p style="margin-left: 75px;"><input type="button" value="Save" id="resetpass" name="resetpass" class="button_go" style="width:75px;"/></p>
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
        $('#resetpass').click(function() {
               $('#ajaxloader').show();
               $('#default_text').css('display', 'none');
         if ($('#newpass').val()=="" || $('#newpassconf').val()=="") {
                //alert('empty');
               $('#emptyfields').css('display', 'block');
               $('#spacer').css('display', 'none');
               $('#mismatch').css('display', 'none');
               $('#length').css('display', 'none');
               $('#servererror').css('display', 'none');
               $('#ajaxloader').hide();
            } 
        else if($('#newpass').val() != $('#newpassconf').val()){            
               $('#emptyfields').css('display', 'none');
               $('#spacer').css('display', 'none');
               $('#mismatch').css('display', 'block');
               $('#length').css('display', 'none');
               $('#servererror').css('display', 'none');
               $('#ajaxloader').hide();
        } 
        else if($('#newpass').val().length < 6 || $('#newpassconf').val().length < 6){            
               $('#emptyfields').css('display', 'none');
               $('#spacer').css('display', 'none');
               $('#mismatch').css('display', 'none');
               $('#length').css('display', 'block');
               $('#servererror').css('display', 'none');
               $('#ajaxloader').hide();
        } else {
            newpass = $('#newpass').val();
            newpassconf = $('#newpassconf').val();
            key = $('#key').val();
                $.post("<?php echo WEB_URL; ?>home/resetupdate", {newpass: newpass, newpassconf: newpassconf, key: key},
                function(data, success) {
                   //alert(data);
                   if (data == "resetsuccessful") {  
                        $('#emptyfields').css('display', 'none');
                        $('#spacer').css('display', 'block');
                        $('#error').css('display', 'none');
                        $('#resetmailsent').css('display', 'none');   
                        $('#servererror').css('display', 'none');   
                        $('#ajaxloader').hide();         
                        alert("Password successfully changed.");               
                        window.location.href = "<?php echo WEB_URL;?>";
                    } 
                    else if(data == "resetfail") {
                        $('#emptyfields').css('display', 'none');
                        $('#spacer').css('display', 'none');
                        $('#error').css('display', 'block');
                        $('#resetmailsent').css('display', 'none');   
                        $('#servererror').css('display', 'none');   
                        $('#ajaxloader').hide();               
                    } 
                    else {
                        $('#emptyfields').css('display', 'none');
                        $('#error').css('display', 'none');
                        $('#spacer').css('display', 'none');
                        $('#resetmailsent').css('display', 'none');   
                        $('#servererror').css('display', 'block');
                        $('#ajaxloader').hide();
                    }
                });
                //alert('you are here');
            }
        });
    });
</script>