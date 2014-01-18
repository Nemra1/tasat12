<div class="content" style="height:auto;">
  <div class="main_content_box_5">
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Registering as Company Translator/Interpreter.</strong>
  <hr />
	<div class="reg-rules">
		<ul>
			<li>
				STEP 1: You would be entering Username & Password along with the company details and its expertise.
			</li>
			<li>
				STEP 2: You would be entering details about the contact person(s) in your company.
			</li>	
			<li>	
				STEP 3: You would be selecting Source & Target language expertise. Also, you would even enter price per hour & per word.
			</li>	
			<li>	
				REGISTRATION SUCCESSFUL : A FEE of $50 to be paid towards registration for evaluation and elibility to get project reqruirements and to bid for the projects posted. 
			</li>
		</ul>		
	</div>

	<div class="left box">
		<div class="webwidget_scroller_tab" id="webwidget_scroller_tab">
            <div class="tabContainer">
                <ul class="tabHead">
                    <li class="currentBtn"><a href="<?php echo WEB_URL;?>ctranslator"   onclick="return false;">  Login Info </a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/companyinfo"  onclick="return false;">  Company Info </a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/contactinfo"  onclick="return false;" > Contact Details</a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/pricing"  onclick="return false;"> Language Pairs</a></li>                 
                </ul>
            </div>
            <div class="tabBody" style="height:100%;" >
            	<form action="<?php echo WEB_URL;?>ctranslator/logindetails" method="post" id="contactform">
				<ol>
                                    <li>
                                    <label for="fname">Company Name*</label>
                                    <input id="fname" name="fname" class="text" value="<?php echo set_value('fname'); ?>" size="50" />
                                    <?php echo form_error('fname'); ?>
                                    </li>
                                    <li>
                                    <label for="lname">Registration No.*</label>
                                    <input id="lname" name="regno" class="text" value="<?php echo set_value('regno'); ?>" size="50" />
                                    <?php echo form_error('regno'); ?>
                                    </li>
                                    <li>
                                    <label for="uname">User Name*</label>
                                    <input id="uname" name="uname" class="text" value="<?php echo set_value('uname'); ?>" size="50" />
                                    <?php echo form_error('uname'); ?>
                                    <p id="unique_uname"> </p>
                                    </li>
                                    <li>
                                    <label for="password">Desired Password*</label>
                                    <input id="pswd" type="password" name="pswd" class="text" value="<?php echo set_value('pswd'); ?>" size="50" />
                                    <?php echo form_error('pswd'); ?>
                                    </li>
                                    <li>
                                    <label for="re-password">Confirm Password*</label>
                                    <input id="pass" type="password" name="pass" class="text" value="<?php echo set_value('pass'); ?>" size="50"  />
                                    <?php echo form_error('pass'); ?>
                                    </li>
                                    <li>
                                    <label for="email">Email*</label>
                                    <input id="pemail" type="text" name="pemail" class="text" value="<?php echo set_value('pemail'); ?>" size="50" />
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
                                        <span><input type="hidden" name="usertype" value="3" /></span>
                                        <span><input type="hidden" name="regdate" value="<?php echo date("Y-m-d"); ?>" /></span> 

                                    </p>
                                    </li>
                                    <li class="buttons">
                                        <div class="clr"></div>
                                    </li>
                                </ol>
				</form>
				<div style="clear:both"></div>
            </div>
            <div class="modBottom">
                <span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
            </div>
        </div>
    </div>
	<br/><br/>
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