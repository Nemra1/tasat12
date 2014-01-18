
<div class="content" style="height:auto;">
    <div class="main_content_box_5">
        <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Registering as Client.</strong>
        <hr />
        <div class="left box">
            <div class="webwidget_scroller_tab" id="webwidget_scroller_tab">
                <div class="tabContainer">
                    <ul class="tabHead">
                        <li class="currentBtn"><a href="<?php echo WEB_URL; ?>registration" onclick="return false;"> Registration </a></li>
                        <li><a href="<?php echo WEB_URL; ?>registration/personalinfo" onclick="return false;"> Profile Details</a></li>
                    </ul>
                </div>
                <div class="tabBody" style="height:100%;">
                    <!--ul>	<li class="tabCot"-->
                    <form action="<?php echo WEB_URL; ?>registration/logindetails" method="post" id="contactform">
                        <ol>
                            <li>
                            <label for="patr">Patronymic*</label>
                            <select name="patr" style="padding:3px;">
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                            </select>
                            </li>
                            <li>
                            <label for="fname">First Name*</label>
                            <input id="fname" name="fname" class="text" value="<?php echo set_value('fname'); ?>" size="50" />
                            <?php echo form_error('fname'); ?>
                            </li>
                            <li>
                            <label for="lname">Last Name*</label>
                            <input id="lname" name="lname" class="text" value="<?php echo set_value('lname'); ?>" size="50" />
                            <?php echo form_error('lname'); ?>
                            </li>
                            <li>
                            <label for="uname">User Name*</label>
                            <input id="uname" name="uname" class="text" value="<?php echo set_value('uname'); ?>" size="50" />
                            <p id="unique_uname"> </p>
                            <?php echo form_error('uname'); ?>
                            </li>
                            <li>
                            <label for="password">Desired Password*</label>
                            <input type="password" id="pswd" name="pswd" class="text" value="<?php echo set_value('pswd'); ?>" size="50" />
                            <?php echo form_error('pswd'); ?>
                            </li>
                            <li>
                            <label for="re-password">Confirm Password*</label>
                            <input type="password" id="pass" name="pass" class="text" value="<?php echo set_value('pass'); ?>" size="50"  />
                            <?php echo form_error('pass'); ?>
                            </li>
                            <li>
                            <label for="email">Email*</label>
                            <input id="pemail" name="pemail" class="text" value="<?php echo set_value('pemail'); ?>" size="50" />
                            <?php echo form_error('pemail'); ?>
                            </li>
                            <li>
                            <label for="captcha"></label>
                            <?php echo $image;?>
                            </li>
                            <li>
                            <label for="captcha">Enter the Verification Code</label>
                            <input id="captcha" name="captcha" class="text" value="" />
                            <?php echo form_error('captcha'); ?>
                            </li>
                            <li>
                            <span style="color:red;margin-left:25%;font-size:11px;">Please provide all the fields marked with (*)</span>
                            </li>
                            <li>
                            <label for="login"></label>
                            <input type="submit" value="Register" class="rounded"/>
                            <p>
                                <span><input type="hidden" name="usertype" value="1" /></span>
                                <span><input type="hidden" name="regdate" value="<?php echo date("Y-m-d"); ?>" /></span> 
                                
                            </p>
                            </li>
                            <li class="buttons">
                                <div class="clr"></div>
                            </li>
                        </ol>
                  </form>	<!--/li> <li class="tabCot"> <p>tab2 content</p> </li> <li class="tabCot">
                <p>tab3 content</p> </li> </ul-->
                    <div style="clear:both"></div>
                </div>
                <div class="modBottom">
                    <span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
                </div>
            </div>
        </div>
        <br /><br />
    </div>
    <script>
    $(document).ready(function() {
        //$('#unique_uname').css( "background", "url('<?php echo IMG_PATH; ?>images/active.png') no-repeat" ); 
        $('#uname').blur(function() {
            //$('#unique_uname').css( "background", "url('<?php echo IMG_PATH; ?>images/inactive.png') no-repeat" ); 
            username = $('#uname').val();
            
                $.post("<?php echo WEB_URL; ?>login/unamecheck", {uname: username},
                function(data, success) {
                    //alert(data);
                    if (data == "correct") {
                      $('#unique_uname').css( "background", "url('<?php echo IMG_PATH; ?>images/inactive.png') no-repeat" ); 
                      //$('#unique_uname').text('Username Not Available');
                    } else {
                       $('#unique_uname').css( "background", "url('<?php echo IMG_PATH; ?>images/active.png') no-repeat" ); 
                       //$('#unique_uname').text('Username Available');
                    }
                });
                
                //alert('you are here');
        });
    });
    </script>