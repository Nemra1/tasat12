<script type='text/javascript'>
    
    $(function() {
        var overlay = $('<div id="overlay"></div>');

        $('#click1').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><h2>Upload Your Picture</h2><b>Select Picture: &nbsp;</b><input type="file" class="rounded" name="dp"/>'+
                    '<br><br><input type="submit" class="rounded" value="Upload"/></form>');
            $('.popup').show();
            return false;
        });

        $('#click2').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form method="post" id="form2"><ul><li><label>Company Name* : <input type="text" id="modfname" name="fname" value="<?php echo $profiledata[1]->tc_first_name; ?>"></li>'+
                    '<li><label>Website : <input type="text" id="url" name="url" value="<?php echo $profiledata[1]->tc_url; ?>"></li>'+
                    '<li><label>Registration Id* : <input type="text" id="regid" name="regid" value="<?php echo $profiledata[1]->tc_registration_number; ?>"></li>'+
                    '<li><input type="button" id="chk2" class="rounded" value="Save" onclick="update22();"></li></ul></form>');
            $('.popup').show();
            return false;
        });


        $('#click3').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><li><h2>About Me:</h2></li><li>'+
                    '<textarea rows="5" style="width:435px;" >Are You looking for an experienced, professional company to do your writing and translation tasks? Then Desource with its 5 years of experience in high quality services is the right partner. To match our guiding principle "we work until our clients satisfaction",we offer multiple communication channels like Video Chat, E-Mail and even Skype to enable you to give feedback on every stage and refine your requirements any time</textarea></li>'+
                    '<li><input type="submit" class="rounded" value="Save"/></li></form>');
            $('.popup').show();
            return false;
        });

        $('#click4').click(function() {
            //test="test";
            overlay.show();    
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "700px");
            $('.formfields').html('<h2>Expertise: </h2><p><input type="checkbox" checked="checked"><span>Consequential Translation </span>'+
                    '<input type="checkbox"><span>Simultaneous Translation </span>'+
                    '<input type="checkbox"><span>Written Translation </span>'+
                    '<input type="checkbox"><span>Online Interpretation (Live Chat) </span><p>'+
                '<form action="Interpretersuccessful.html" name="interpreter">'+
                        '<table class="dynatable" width="100%" border="0" id="PDetailsTable" bgcolor="#97D4EE" style="margin:5px;">'+
                            '<thead>'+
                                '<tr>'+
                                '<th width="18">ID</th>'+
                                '<th width="100">Domain</th>'+
                                '<th width="130">Source Language</th>'+
                                '<th width="130">Target Language</th>'+
                                '<th width="200">Rate per min</th>'+
                                '<th width="200">Rate per word</th>'+
                                '<th  width="0"><img src="../../images/add_icon.png" title="Add"  class="btnAdd2" onclick="addrow();" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/> </th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody>'+
                                '<tr class="prototype">'+
                                '<td><input type="text" name="id[]" value="1" class="id" style="width:15px;"  /></td>'+
                                '<td>'+
                                    '<select style="width:80px;">'+ 
                                       
                                            '<option>Legal</option>'+
                                            '<option>Finance</option>'+
                                            '<option>Oil & Gas</option>'+
                                            '<option>IT & Communication</option>'+
                                            '<option>Political</option>'+                                        
                                            '</select></td><td><select>'+                                  
                                            '<option>English</option>'+
                                                '<option>Russian</option>'+
                                                '<option>Chinese</option>'+
                                                '<option>Spanish</option>'+
                                                '<option>Arabic</option>'+
                                                '<option>Italian</option>'+
                                                '<option>German</option>'+
                                                '<option>French</option>'+
                                                '<option>Japanese</option>'+                                    
                                            '</select></td><td><select>'+ 
                                                '<option>English</option>'+
                                                '<option>Russian</option>'+
                                                '<option>Chinese</option>'+
                                                '<option>Spanish</option>'+
                                                '<option>Arabic</option>'+
                                                '<option>Italian</option>'+
                                                '<option>German</option>'+
                                                '<option>French</option>'+
                                                '<option>Japanese</option>'+                                   
                                    '</select></td>'+
                                '<td>'+
                                    '<select style="width:100px;">'+
                                        '<option>US Dollars($)</option>'+
                                        '<option>Euros(€)</option>'+
                                    '</select> '+
                                    '<input type="text" value="30" maxlength="10" style="width:15px;" />'+
                                '</td><td>'+
                                    '<select style="width:100px;">'+
                                        '<option>US Dollars($)</option>'+
                                        '<option>Euros(€)</option>'+
                                    '</select> '+
                                    '<input type="text" value="30" maxlength="10" style="width:15px;" />'+
                                '</td>'+
                                '<td><img src="../../images/minus-icon.gif" style="margin-left:0px ;" title="Remove" id="Remove" onclick="alert('+"test"+');" class="remove2" alt="HTML tutorial" width="23" height="22"/></td>'+
                                '</tr>'+
                        '</table>'+
                    '</form>');
            $('.popup').show();
            return false;
        });

        $('#click5').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').css("top", "100px");
            $('.popupContent').css("width", "357px");
            $('.formfields').html('<form><h2>Contact Details: </h2><ul><li><label>Address* :</label> <textarea name="Adress" cols="15" rows="6" class="text1">#29, Wood Street</textarea></li>'+
                    '<li><label for="county">Country</label><select><option>USA</option><option>Australia</option><option>Germany</option></select></li>'+
                    '<li><label for="city">City</label><select><option>San Fransisco</option><option>Washington DC</option><option>Mexico City</option></select></li>'+
                    '<li><label for="zipcd">Zip Code</label><input id="name" name="name" class="text1" value="123456"/></li>'+
                    '<li><label for="email">Email*</label><input id="name" name="name" class="text1" value="peter@tasat.com"/></li>'+
                    '<li><label for="mob"> Mobile</label><input id="name" name="name" class="text1" value="+88 888 888 8888"/></li>'+
                    '<li><label for="phone">Phone</label><input id="name" name="name" class="text1" value="+88 8888888"/></li>'+
                    '<li><label for="fax">FAX</label><input id="name" name="name"  class="text1" value="8888888888"/></li>'+
                    '<li><input type="submit" class="rounded" value="Save"/></li></ul></form>');
            $('.popup').show();
            return false;
        });

        $('#click6').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><h2>Payment Details: </h2><ul>'+
                    '<li><label for="crdnum">Credit Card Number:</label><input id="name" name="name" class="text1" value="1000210001"/></li>'+
                    '<li><label for="crdhnm">Card Holder Name:</label><input id="name" name="name" class="text1" value="John Smith"/></li>'+
                    '<li><label for="acnum">Banker Account Number:</label><input id="name" name="name" class="text1" value="1100022225"/></li>'+
                    '<li><label for="acnm">Account Holder Name:</label><input id="name" name="name" class="text1" value="John Smith"/></li>'+
                    '<li><input type="submit" class="rounded" value="Save"/></li></ul></form>');
            $('.popup').show();
            return false;
        });

        $('#click7').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><h2>Employee Details: </h2><ul><li><label>First Name* : <input type="text" name="fname" value="Micheal"></li>'+
                    '<li><label>Last Name* : <input type="text" name="lname" value="Peterson"></li>'+
                    '<li><label>Patronumic* : <select><option>Mr.</option><option>Mrs.</option></select></li>'+
                    '<li><label>Designation* : <input type="text" name="mob" value="Deputy Manager"></li>'+
                    '<li><label>Mobile* : <input type="text" name="mob" value="9876543215"></li>'+
                    '<li><label>Email* : <input type="text" name="email" value="micheal@tasat.com"></li>'+
                    '<li><input type="submit" class="rounded" value="Save"><input type="submit" class="rounded" value="Delete"></li></ul></form>');
            $('.popup').show();
            return false;
        });

        $('.x').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
    
    ///////****///////
         
        var id = 1;
        function addrow(){
        // Add button functionality

        $("img.btnAdd2").click(function() {
            id++;
            var master = $(this).parents("table.dynatable");

            // Get a new row based on the prototype row
            var prot = master.find(".prototype").clone();
            prot.attr("class", "");
            prot.find(".id").attr("value", id);

            master.find("tbody").append(prot);
            //alert("test");
        });
        }
        function rmvrow(){
        // Remove button functionality
        $("table.dynatable img.remove2").live("click", function() {
            $(this).parents("tr").remove();

        });
        }
   ///////****///////
</script>
<div class="main_content_box_5" >
    <div class='cl_profile_info'>
        <span class='pr_info_img'>
            <img id="profileimg" class="profile_img" src="<?php echo WEB_PATH; ?>images/dpm.jpg"/>
            <p><input id="click1" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        </span>
        <span class='pr_info'>
            <h2><?php echo $profiledata[1]->tc_first_name; ?></h2>
            <p><input id="click2" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
            <p><b><u><a href='<?php echo WEB_URL; ?>translator/Change_Password'>Change Password</a></u></b></p>
            <?php $url = $profiledata[1]->tc_url; ?>
            <p><b>Website:</b> <a href="http://<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a></p>
            <p><b>Reg. No.:</b> <span><?php echo $profiledata[1]->tc_registration_number; ?></span></p>
            <p><b>Member Since: </b><span><?php $joindate = $profiledata[0]->user_registrations_date; echo date('d-m-Y',strtotime($joindate)); ?></span> </p>
            <p><b>No. of Projects Completed: </b><span></span> </p>
            <p><b>Total Earnings: </b><span></span> </p>
        </span>
        <span class='pr_progressbar'>
            <p><b>Your Profile is <span>53%</span> Complete</b></p>
            <img src='<?php echo IMG_PATH; ?>images/progressbar.png'>
        </span>

        <div class='popup'>
            <div class='popupContent'>
                <img src='<?php echo IMG_PATH; ?>images/x.png' alt='quit' class='x' id='x' />
                <div class="formfields"> </div>
            </div>
        </div>

        <div class='clearfixit'> </div>
    </div>
    <div class='cl_profile_about'>
        <h2 class='blk_head'>About</h2>
        <p><input id="click3" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <p><?php echo $profiledata[1]->tc_about; ?></p>
        <div class='clearfixit'> </div>
    </div>  
    <?php
        //print_r($expdatawt);
    ?>
    <div class='cl_profile_skills'>
        <h2 class='blk_head'>Skills and Expertise</h2>
        <p><input id="click4" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_3">
            <p><b>My Skills: </b></p>
            
            <p class="wt"><b><u>Expertise:</u> </b><span>Written Translation</span> </p>
            <table class="wt">
                <thead>
                    <tr>
                    <td>Sl. No.</td>
                    <td>
                        Discipline
                    </td>
                    <td>
                        Language Pair
                    </td>
                    <td>
                        Rate per min
                    </td>
                    <td>
                        Rate per Word
                    </td>
                    </tr>
                </thead>
                <tbody>
                    <?php $a=1;
                    foreach ($expdatawt as $keyvalue) {
                            ?>
                    <tr>
                    <td><?php echo $a;?></td>
                    <td><?php echo $keyvalue['expertise_domain'];?></td>
                    <td><?php echo $keyvalue['expertise_source'];?> - <?php echo $keyvalue['expertise_target'];?></td>
                    <td><?php echo $keyvalue['expertise_ratepermin'];?></td>
                    <td><?php echo $keyvalue['expertise_rateperword'];?></td>
                    </tr>
                    <?php $a++;}?>
                </tbody>
            </table>
        
            <p class="ct"><b><u>Expertise:</u> </b><span>Consequential Translation</span> </p>
            <table class="ct">
                <thead>
                    <tr>
                    <td>Sl. No.</td>
                    <td>
                        Discipline
                    </td>
                    <td>
                        Language Pair
                    </td>
                    <td>
                        Rate per min
                    </td>
                    <td>
                        Rate per Word
                    </td>
                    </tr>
                </thead>
                <tbody>
                    <?php $b=1;
                    foreach ($expdatact as $keyvaluect) {
                            ?>
                    <tr>
                    <td><?php echo $b;?></td>
                    <td><?php echo $keyvaluect['expertise_domain'];?></td>
                    <td><?php echo $keyvaluect['expertise_source'];?> - <?php echo $keyvaluect['expertise_target'];?></td>
                    <td><?php echo $keyvaluect['expertise_ratepermin'];?></td>
                    <td><?php echo $keyvaluect['expertise_rateperword'];?></td>
                    </tr>
                    <?php $b++;}?>
                </tbody>
            </table>
            <p class="st"><b><u>Expertise:</u> </b><span>Simultaneous Translation</span> </p>
            <table class="st">
                <thead>
                    <tr>
                    <td>Sl. No.</td>
                    <td>
                        Discipline
                    </td>
                    <td>
                        Language Pair
                    </td>
                    <td>
                        Rate per min
                    </td>
                    <td>
                        Rate per Word
                    </td>
                    </tr>
                </thead>
                <tbody>
                   <?php $c=1;
                    foreach ($expdatast as $keyvaluest) {
                            ?>
                    <tr>
                    <td><?php echo $c;?></td>
                    <td><?php echo $keyvaluest['expertise_domain'];?></td>
                    <td><?php echo $keyvaluest['expertise_source'];?> - <?php echo $keyvaluest['expertise_target'];?></td>
                    <td><?php echo $keyvaluest['expertise_ratepermin'];?></td>
                    <td><?php echo $keyvaluest['expertise_rateperword'];?></td>
                    </tr>
                    <?php $c++;}?>
                </tbody>
            </table>
            <p class="lc"><b><u>Expertise:</u> </b><span>Live Chat</span> </p>
            <table class="lc">
                <thead>
                    <tr>
                    <td>Sl. No.</td>
                    <td>
                        Discipline
                    </td>
                    <td>
                        Language Pair
                    </td>
                    <td>
                        Rate per min
                    </td>
                    <td>
                        Rate per Word
                    </td>
                    </tr>
                </thead>
                <tbody>
                    <?php $d=1;
                    foreach ($expdataoi as $keyvalueoi) {
                            ?>
                    <tr>
                    <td><?php echo $d;?></td>
                    <td><?php echo $keyvalueoi['expertise_domain'];?></td>
                    <td><?php echo $keyvalueoi['expertise_source'];?> - <?php echo $keyvalueoi['expertise_target'];?></td>
                    <td><?php echo $keyvalueoi['expertise_ratepermin'];?></td>
                    <td><?php echo $keyvalueoi['expertise_rateperword'];?></td>
                    </tr>
                    <?php $d++;}?>
                </tbody>
            </table>
        </div>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_contact'>
        <h2 class='blk_head'>Contact Details</h2>
        <p><input id="click5" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
       <div class="col_2">
            <p><b>Address: </b><span><?php echo $profiledata[1]->tc_address; ?></span> </p>
            <p><b>City: </b><span><?php echo $profiledata[1]->tc_city; ?></span> </p>
            <p><b>Country: </b><span><?php echo $profiledata[1]->tc_country; ?></span> </p>
            <p><b>Zip-code: </b><span><?php echo $profiledata[1]->tc_zipcode; ?></span> </p>
        </div>
        <div class="col_2">
            <p><b>Email 1: </b><span><?php echo $profiledata[1]->tc_primary_email; ?></span> </p>
            <p><b>Email 2: </b><span><?php echo $profiledata[1]->tc_secondary_email; ?></span> </p>
            <p><b>Contact 1: </b><span><?php echo $profiledata[1]->tc_primary_contact; ?></span> </p>
            <p><b>Contact 2: </b><span><?php echo $profiledata[1]->tc_secondary_contact; ?></span> </p>
            <p><b>FAX: </b><span><?php echo $profiledata[1]->tc_fax; ?></span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_payment'>
        <h2 class='blk_head'>Payment Details</h2>
        <p><input id="click6" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
         <div class="col_2">
            <p><b>Credit Card Number: </b><span><?php echo $profiledata[1]->tc_card_number; ?></span> </p>
            <p><b>Card Holder Name: </b><span><?php echo $profiledata[1]->tc_cardholder_name; ?></span> </p>
        </div>
        <div class="col_2">
            <p><b>Bank Account Number: </b><span><?php echo $profiledata[1]->tc_account_number; ?></span> </p>
            <p><b>Account Holder Name: </b><span><?php echo $profiledata[1]->tc_accountholder_name; ?></span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>  
    <?php if($profiledata[2]->user_doc_path == "NULL" || empty($profiledata[2]->user_doc_path)) $docpath = "No File Found."; else $docpath = WEB_PATH.$profiledata[2]->user_doc_path; ?>
    <?php
     $filename = explode('/',$profiledata[2]->user_doc_path);
     print_r($filename);
     //echo $filename[2];
    ?>
    <div class='cl_profile_docs'>
        <h2 class='blk_head'>Resume and Other Credentials</h2>
        Files Uploaded: <a href="<?php echo $docpath; ?>" target="_blank"><?php echo $filename[2]; ?></a>
        <form>
            <b>Upload Files:</b> <input type="file">
        </form>
        <div class='clearfixit'> </div>
    </div>  
    <?php 
        //print_r($profiledata); 
        $empcnt = $profiledata[3];
        echo $empcnt;
    ?>
    <div class='cl_profile_emp'>
        <h2 class='blk_head'>Employee Details</h2>
        <p><input id="click7" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <?php for($i=0;$i<$empcnt;$i++){ ?>
        <div class="col_2" id="emp<?php echo $profiledata[4][$i]->tc_emp_record_id_pk; ?>">
            <p id="empid"><?php echo $profiledata[4][$i]->tc_emp_record_id_pk; ?></p>
            <h3><?php echo $profiledata[4][$i]->tc_emp_patronymic." ".$profiledata[4][$i]->tc_emp_first_name." ".$profiledata[4][$i]->tc_emp_last_name; ?></h3>
            <p><b>Designation: </b><span><?php echo $profiledata[4][$i]->tc_emp_designation; ?></span> </p>
            <p><b>Mobile: </b><span><?php echo $profiledata[4][$i]->tc_emp_mobile; ?></span> </p>
            <p><b>Email: </b><span><?php echo $profiledata[4][$i]->tc_emp_email; ?></span> </p>
        <span id="editbuttons"><input type="button" id="edit" value="" title="Edit">
            <input type="button" class="can" id="close" value="<?php echo $profiledata[4][$i]->tc_emp_record_id_pk; ?>" title="Delete"></span>
        </div>
        <?php } ?>
        <div class='clearfixit'> </div>
    </div>  
</div> 
<script>
                                          
    $(document).ready(function() {
        if($(".wt tbody tr").length==0){ $(".wt").hide();}
        if($(".ct tbody tr").length==0){ $(".ct").hide();}
        if($(".st tbody tr").length==0){ $(".st").hide();}
        if($(".lc tbody tr").length==0){ $(".lc").hide();}
        
        $('.can').click(function(){  
            //alert("1233"); 
            //var a = $('.col_2').find('p#empid').text();
            var a = $(this).val();
            var action='<?php echo WEB_URL; ?>translator/rmv';
            $.post(action, {a:a},
                function(data, success) {
                    removediv(data);
                    //alert(data);
                });
        });    
        
    });
    
        function update22(){
            var web=$("#url").val();
            var fname=$("#modfname").val();
            var rid=$("#regid").val();
            var action='<?php echo WEB_URL; ?>translator/update2tc';
            $.ajax({
                type :"POST",
                url : action,
                data :{fnm:fname,regid:rid,url:web},
                success:function(response){
                    alert(response);
                }
            });
        }
        
        
        function removediv(data){
             $('#emp'+data).remove();
            //alert("test");
        }
//        
//        function update2(){
//            var fnm = $('#modfname').val();
//            var regid = $('#regid').val();
//            var url = $('#url').val();
//            //alert(fnm+regid+url);
//            //alert('<?php echo WEB_URL ?>translator/update2tc');
//            //alert(fnm);
//            var action='<?php echo WEB_URL; ?>translator/update2tc';
//            $(function(){
//            $.post(action, {fnm:fnm, regid:regid, url:url},
//                function(data, success) {
//                    alert(1);
//                    //alert(data);
//                });
//            });
//        }

</script>
