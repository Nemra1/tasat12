<script>
//define function to be executed on document ready
    var pickerOpts = {
        changeFirstDay: true,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        yearRange: '1910:2021',
        constrainInput: false
    };

    $(function() {
//create the date picker

        $("#datepick1").datepicker(pickerOpts);
    });
   
</script>
<div class="content" style="height:auto;">
    <div class="main_content_box_5">
        <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Registering as Client. </strong><hr />
        <p style="font-weight: bold;">Hi <span><?php echo $suname; ?></span>. You have successfully registered. <br>Kindly click the activation link sent on <span><?php echo $suemail; ?></span> to activate your profile</p>
        <div class="webwidget_scroller_tab" id="webwidget_scroller_tab">
            <div class="tabContainer">
               <ul class="tabHead">
                        <li><a href="<?php echo WEB_URL; ?>registration" onclick="return false;" > Registration </a></li>
                        <li class="currentBtn"><a href="<?php echo WEB_URL; ?>registration/personalinfo"  onclick="return false;"> Profile Details</a></li>
                    </ul>
            </div>
            <div class="tabBody" style="">
            <!--ul>	<li class="tabCot">	</li>	<li class="tabCot">	<p-->           
                <form action="<?php echo WEB_URL; ?>registration/personalinfo" method="post" id="contactform" enctype="multipart/form-data">
                    <ol>
                        <li>
                        <label for="about">About*</label>
                        <textarea name="about" cols="15" rows="3" class="text1"><?php echo set_value('about'); ?></textarea>
                        <?php echo form_error('about'); ?>
                        </li>
                        <li>
                        <label for="dob">Date of Birth*</label>
                        <input type="text" name="dob" id="datepick1" class="text">
                        <?php echo form_error('dob'); ?>
                        </li>
                        <li>
                        <label for="email">Native Language</label>
                        <select name="native" style="padding:3px;">
                            <option value="English">English</option>
                            <option value="English">Russian</option>
                            <option value="English">Chinese</option>
                            <option value="English">Spanish</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Italian">Italian</option>
                            <option value="German">German</option>
                            <option value="French">French</option>
                            <option value="Japanese">Japanese</option>
                        </select>
                        </li>
                        <li>
                            <label for="country">Country*</label>  
                            <select id="country" name="country">
                                <option value=""  selected="selected">Select Country</option>
		                <?php if(!empty($countylist)){
                                foreach($countylist as $cl){						
                                ?>
                                <option value="<?php echo $cl->ctrycode;?>"><?php echo $cl->country_name;?></option>
                                <?php }}else{ ?>
                                 <option value="0">No Country found</option>
                                <?php } ?>
                            </select>                          
                        <?php echo form_error('country'); ?>
                        </li>
                        <li>
                        <label for="address">Address</label>
                        <textarea name="address" cols="15" rows="3" class="text1"><?php echo set_value('address'); ?></textarea>
                        </li>
                        <li>
                        <label for="city">City</label>
                        <input id="city" name="city" class="text" value="<?php echo set_value('city'); ?>" />
                        </li>
                        <li>
                        <label for="zipcode">Zip Code</label>
                        <input id="zipcode" name="zipcode" class="text"  value="<?php echo set_value('zipcode'); ?>"/>
                        <?php echo form_error('zipcode'); ?>
                        </li>
                        <li>
                        <label for="smail">Alternative Email</label>
                        <input id="smail" name="smail" class="text" value="<?php echo set_value('smail'); ?>" />
                        <?php echo form_error('smail'); ?>
                        </li>
                        <li>
                        <label for="pcontact">Primary Contact*</label>
                        <input id="pcontact" name="pcontact" class="text" value="<?php echo set_value('pcontact'); ?>" />
                        <?php echo form_error('pcontact'); ?>
                        </li>
                        <li>
                        <label for="scontact">Alternative Contact</label>
                        <input id="scontact" name="scontact" class="text" value="<?php echo set_value('scontact'); ?>" />
                        <?php echo form_error('scontact'); ?>
                        </li>
                        <li>
                        <label for="fax">FAX</label>
                        <input id="fax" name="fax" class="text" value="<?php echo set_value('fax'); ?>" />
                        <?php echo form_error('fax'); ?>
                        </li>
                        <li>
                        <label for="email">Upload Profile Picture</label>
                        <input type="file" name="profilepic" id="profilepic" /><em>(max file size 2MB)</em>
                        <?php echo form_error('profilepic'); ?>
                        </li>
                        <li>
                        <label for="email">Upload Profile Document</label>
                        <input type="file" name="profiledoc" id="profiledoc" /><em>(max file size 5MB)</em>
                        <?php echo form_error('profiledoc'); ?>
                        </li>
                        <li class="buttons">
                            <div class="clr"></div>
                        </li>
                        <li>
                        <span style="color:red;margin-left:27%;font-size:11px;">Please provide all the fields marked with (*)</span>
                        </li>
                            <li>
                            <label for="login"></label>
                            <input type="hidden" value="<?php echo $suid; ?>" name="suid">
                            <input type="hidden" value="<?php echo $suname; ?>" name="suname">
                            <input type="submit" value="Save and Continue" class="rounded" onClick="confirm('You can now view your details once you activate your profile.');"/>                        
                        </li>
                    </ol>
                </form>	<!--/p>	</li>	<li class="tabCot">	<p></p>		</li>	</ul-->
                <div style="clear:both"></div>
            </div>
            <div class="modBottom">
                <span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
            </div>
        </div>
        <br /><br />
    </div>