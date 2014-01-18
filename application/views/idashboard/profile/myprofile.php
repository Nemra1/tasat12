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
            $('.formfields').html('<form><ul><li><label>First Name* : <input type="text" name="fname" value="John"></li>'+
                    '<li><label>Last Name* : <input type="text" name="lname" value="Smith"></li>'+
                    '<li><label>Patronumic* : <select><option>Mr.</option><option>Mrs.</option></select></li>'+
                    '<li><label>Native Language* : <select><option>English</option><option>French</option><option>German</option></select></li>'+
                    '<li><input type="submit" class="rounded" value="Save"></li></ul></form>');
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
        <?php 
            if($profiledata[1]->it_profile_picture == "NULL" || empty($profiledata[1]->it_profile_picture)){ 
                if($profiledata[1]->it_patronymic == "Mr.") $dp = IMG_PATH.'images/dpm.jpg';
                else  $dp = IMG_PATH.'images/dpf.jpg';
            }
            else  $dp = IMG_PATH.$profiledata[1]->it_profile_picture;
        ?>
        <span class='pr_info_img'>
            <img id="profileimg" class="profile_img" src="<?php echo $dp; ?>"/>
            <p><input id="click1" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        </span>
        <span class='pr_info'>
            <h2>Mr. John Smith</h2>
            <p><input id="click2" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
            <p><b><u><a href='<?php echo WEB_URL; ?>translator/Change_Password'>Change Password</a></u></b></p>
            <p><b>Native Language: </b><span>English</span> </p>
            <p><b>Member Since: </b><span>February, 2013</span> </p>
            <p><b>No. of Projects Completed: </b><span>15</span> </p>
            <p><b>Total Earnings: </b><span>$500</span> </p>
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
        <p>Are You looking for an experienced, professional company to do your writing and translation tasks? Then Desource with its 5 years of experience in high quality services is the right partner. To match our guiding principle "we work until our client's satisfaction",we offer multiple communication channels like Video Chat, E-Mail and even Skype to enable you to give feedback on every stage and refine your requirements any time.</p>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_skills'>
        <h2 class='blk_head'>Skills and Expertise</h2>
        <p><input id="click4" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_3">
            <p><b>My Skills: </b></p>
            <p><b><u>Expertise:</u> </b><span>Written Translation</span> </p>
            <table>
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
                    <tr>
                    <td>1</td>
                    <td>Oil and Gas</td>
                    <td>English - German</td>
                    <td>$8</td>
                    <td>$3</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Oil and Gas</td>
                    <td>English - French</td>
                    <td>$10</td>
                    <td>$5</td>
                    </tr>
                </tbody>
            </table>
            <p><b><u>Expertise:</u> </b><span>Simultaneous Translation</span> </p>
            <table>
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
                    <tr>
                    <td>1</td>
                    <td>Oil and Gas</td>
                    <td>English - German</td>
                    <td>$8</td>
                    <td>$3</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_contact'>
        <h2 class='blk_head'>Contact Details</h2>
        <p><input id="click5" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_2">
            <p><b>Address: </b><span>#29, Wood Street</span> </p>
            <p><b>City: </b><span>San Fransisco</span> </p>
            <p><b>Country: </b><span>U.S.A</span> </p>
            <p><b>Zipcode: </b><span>123456</span> </p>
        </div>
        <div class="col_2">
            <p><b>Email: </b><span>peter@tasat.com</span> </p>
            <p><b>Mobile: </b><span>+88 888 888 8888</span> </p>
            <p><b>Phone: </b><span>+88 8888888</span> </p>
            <p><b>FAX: </b><span>8888888888</span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_payment'>
        <h2 class='blk_head'>Payment Details</h2>
        <p><input id="click6" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_2">
            <p><b>Credit Card Number: </b><span>64598765215</span> </p>
            <p><b>Card Holder Name: </b><span>Peter John</span> </p>
        </div>
        <div class="col_2">
            <p><b>Bank Account Number: </b><span>25222255111</span> </p>
            <p><b>Account Holder Name: </b><span>Peter John</span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>  
    <div class='cl_profile_docs'>
        <h2 class='blk_head'>Resume and Other Credentials</h2>
        Files Uploaded: <a href="#">resume.pdf</a>
        <form>
            <b>Upload Files:</b> <input type="file">
        </form>
        <div class='clearfixit'> </div>
    </div>      
    <div class='cl_profile_emp'>
        <h2 class='blk_head'>Employee Details</h2>
        <p><input id="click7" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_2">
            <h3>Mr. Micheal Devgan</h3>
            <p><b>Designation: </b><span>Deputy Manager</span> </p>
            <p><b>Mobile: </b><span>9876543215</span> </p>
            <p><b>Email: </b><span>micheal@tasat.com</span> </p>
        </div>
        <div class="col_2">
            <h3>Mr. Jane Smith</h3>
            <p><b>Designation: </b><span>Assistant Manager</span> </p>
            <p><b>Mobile: </b><span>54543215</span> </p>
            <p><b>Email: </b><span>jane@tasat.com</span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>  
    
</div> 

