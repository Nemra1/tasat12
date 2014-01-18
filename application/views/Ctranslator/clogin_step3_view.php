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
                    <li><a href="<?php echo WEB_URL;?>ctranslator/companyinfo"  onclick="return false;">  Company Info </a></li>
                    <li class="currentBtn"><a href="<?php echo WEB_URL;?>ctranslator/contactinfo"   onclick="return false;"> Contact Details</a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/pricing"  onclick="return false;"> Language Pairs</a></li>
                       
                    </ul>
                </div>
                <div class="tabBody" style="height:100%;">
                    <!--ul>
                        <li class="tabCot"-->
                    <form action="<?php echo WEB_URL; ?>ctranslator/pricing" method="post" id="contactform">
                        <ol>
                            <li>
                            <label for="name">Patronymic*</label>
                            <select id="patr" class="patronumic">
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                            </select>
                            </li>

                            <li>
                            <label for="name">First Name*</label>
                            <input id="fname" name="fname" class="text" />
                            </li>
                            <li>
                            <label for="name">Last Name*</label>
                            <input id="lname" name="lname" class="text" />
                            </li>

                            <li>
                            <label for="email">Designation*</label>
                            <input id="dsgn" name="dsgn" class="text" />
                            </li>
                            <li>
                            <label for="email">Email*</label>
                            <input id="email" name="email" class="text" />
                            </li>
                            <li>
                            <label for="email">Mobile*</label>
                            <input id="mob" name="mob" class="text" />
                            </li>

                            <li class="buttons">
                                <input type="button" id="addemp" value="Add Contact">
                                <div class="clr"></div>
                            </li>
                        </ol>
                    
                    <!--/li>
</ul-->

                 <div class='cl_profile_emp'>
                    <h2 class='blk_head'>Employee Details</h2>
                    <?php //for($i=0;$i<$empcnt;$i++){ ?>
                    <div class="showhere">
                    
                    </div>
                    <?php //} ?>
                    <div class='clearfixit'> </div>
                </div>  
                    <input type="BUTTON" value="PREVIOUS" id='prev' class="rounded" />
                    <input type="submit" value="CONTINUE" class="rounded"/>
                    <div class="modBottom">
                        <span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
                    </div>
                </div>
</form>
            </div>
        </div>
    </div>
    <input type="hidden" name="hiddenrowid" id="hiddenrowid" value="1"/>  
    
<script>
$(document).ready(function() {
    
    $("#prev").click(function() {
        var ur = "<?php echo WEB_PATH; ?>";
        window.location.href = ur + "index.php/Ctranslator/logindetails";
    });
    
    
    $('#addemp').click(function() {
       //alert("test"); 
       var patr = $('#patr').val(); 
       var fnm = $('#fname').val();
       var lnm = $('#lname').val();
       var dsgn = $('#dsgn').val();
       var email = $('#email').val();
       var mob = $('#mob').val();
       //alert(patr+fnm+lnm+dsgn+email+mob);
       $.post("<?php echo WEB_URL; ?>ctranslator/enteremp", {patr:patr, fnm:fnm, lnm:lnm, dsgn:dsgn, email:email, mob:mob},
       function(data, success) {
         //alert(data);   
         //document.write(data);
        $('.showhere').append(data);
        $("#contactform:input[type=text]").val('');
       });
    });
    
    $('.can').on("click",function(){   
        alert(123);
            //var a = $('.col_2').find('p#empid').text();
            /*var a = $(this).val();
            var action='<?php echo WEB_URL; ?>translator/rmv';
            $.post(action, {a:a},
                function(data, success) {
                    removediv(data);
                    //alert(data);
            });*/
    });   
       
    
        function removediv(data){
             $('#emp'+data).remove();
            //alert("test");
        }
});
        
</script>

