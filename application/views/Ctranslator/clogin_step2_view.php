<div class="content" style="height:auto;">
    <div class="main_content_box_5">
        <strong class="head-blue">Registering as Company Translator/Interpreter.</strong><hr />
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
                    <li><a href="<?php echo WEB_URL;?>ctranslator"  onclick="return false;">  Login Info </a></li>
                    <li class="currentBtn"><a href="<?php echo WEB_URL;?>ctranslator/companyinfo"  onclick="return false;">  Company Info </a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/contactinfo"  onclick="return false;" > Contact Details</a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/pricing"  onclick="return false;"> Language Pairs</a></li>                       
                    </ul>
                </div>
                <div class="tabBody" style="height:100%;">
                    <p style="font-weight: bold;">Hi <span><?php echo $suname; ?></span>. You have successfully registered. <br>Kindly click the activation link sent on <span><?php echo $suemail; ?></span> to activate your profile</p>
                    <!--ul>
                        <li class="tabCot"-->
                    <form action="<?php echo WEB_URL; ?>ctranslator/companyinfo" method="post" id="contactform" enctype="multipart/form-data">
                        <ol>
                             <li>
                        <label for="about">About*</label>
                        <textarea name="about" cols="15" rows="3" class="text1"></textarea>
                        <?php echo form_error('about'); ?>
                        </li>
                         <li>
                        <label for="url">Website</label>
                        <input id="url" name="url" class="text" />
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
                        <textarea name="address" cols="15" rows="3" class="text1"></textarea>
                        </li>
                         <li>
                        <label for="city">City</label>
                        <input id="city" name="city" class="text" />
                        </li>
                        <li>
                        <label for="zipcode">Zip Code</label>
                        <input id="zipcode" name="zipcode" class="text" />
                        <?php echo form_error('zipcode'); ?>
                        </li>
                        <li>
                        <label for="smail">Alternative Email</label>
                        <input id="smail" name="smail" class="text" />
                        <?php echo form_error('smail'); ?>
                        </li>
                        <li>
                        <label for="pcontact">Primary Contact*</label>
                        <input id="pcontact" name="pcontact" class="text" />
                        <?php echo form_error('pcontact'); ?>
                        </li>
                         <li>
                        <label for="scontact">Alternative Contact</label>
                        <input id="scontact" name="scontact" class="text" />
                        <?php echo form_error('scontact'); ?>
                        </li>
                        <li>
                        <label for="fax">FAX</label>
                        <input id="fax" name="fax" class="text" />
                        <?php echo form_error('fax'); ?>
                        </li>
                        <li>
                        <label for="email">Upload Profile Picture</label>
                        <input type="file" name="profilepic" />
                        </li>
                        <li>
                        <label for="email">Upload Profile</label>
                        <input type="file" name="profiledoc" />
                        </li>
<!--                        <li>
                        <label for="expertise" style="height: 60px;">Expertise</label>
                        <input type="checkbox" name="consequential" value="1" checked="checked"/>
                        Consequential Translation<br/>
                        <input type="checkbox" name="conferencesimultaneous" value="1"/>
                        Conference/Simultaneous Translation<br/>
                        <input type="checkbox" name="written" value=""/>
                        Written Translation<br/>
                        <input type="checkbox" name="written" value=""/>
                        Online Interpretation (Live Chat)
                        </li>-->
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
                    </form>
                    <!--/li>
</ul-->

                </div>

            </div>
        </div>
    </div>
    <input type="hidden" name="hiddenrowid" id="hiddenrowid" value="1"/>  
<script>
    function add()
    {
        var hiddenrowValue = document.getElementById("hiddenrowid").value;
        document.getElementById("s" + hiddenrowValue).style.display = "block";
        hiddenrowValue = parseInt(hiddenrowValue) + 1;
        document.getElementById("hiddenrowid").value = hiddenrowValue;
    }
    function removerow(rowid)
    {
        document.getElementById("s" + rowid).style.display = "none";
    }

    $("#prev").click(function() {
        var ur = "<?php echo WEB_PATH; ?>";
        window.location.href = ur + "index.php/Ctranslator/logindetails";
    });
</script>

