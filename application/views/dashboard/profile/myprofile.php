<style>
    ul.contact li label{ margin-right: 20px;}
    ul.contact{margin: 0px; padding: 0px;}
    ul.contact li{ margin-bottom: 10px;}
    .contact input[type="text"]{height: 30px;}
</style>
<script>
    $(document).ready(function() {
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
    });
</script>
<script type='text/javascript'>

    $(function() {
        var overlay = $('<div id="overlay"></div>');

        $('#click1').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><h2>Upload Your Picture</h2><b>Select Picture: &nbsp;</b><input type="file" class="rounded" name="dp"/>' +
                    '<br><br>Do you want to participate <input type="radio" name="gen"  value="m"/>Yes <input type="radio" name="gen"  value="m"/>No <br><br><input type="submit" class="rounded" value="Upload"/></form>');
            $('.popup').show();
            return false;
        });



        $('#click2').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form method="post"><ul><li><label>Patronumic* : <select><option selected=selected><?php echo $profiledata[1]->cl_patronymic; ?></option><option>Mr.</option><option>Mrs.</option></select></li>' +
                    '<li><label>First Name* : <input type="text" name="fname" value="<?php echo $profiledata[1]->cl_first_name; ?>"></li>' +
                    '<li><label>Last Name* : <input type="text" name="lname" value="<?php echo $profiledata[1]->cl_last_name; ?>"></li>' +
                    '<li><label>Native Language* : <select><option selected=selected><?php echo $profiledata[1]->cl_native_language; ?></option><option>English</option><option>French</option><option>German</option></select></li>' +
                    '<li><input type="submit" id="edit2" name="edit2" class="rounded" value="Save"></li></ul></form>');
            $('.popup').show();
            return false;
        });
        
        $('#click3about').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><li><h2>About Me:</h2></li><li>'+
                    '<textarea rows="5" style="width:435px;"><?php echo $profiledata[1]->cl_about; ?></textarea></li>'+
                    '<li><input type="submit" class="rounded" value="Save"/></li></form>');
            $('.popup').show();
            return false;
        });

        $('#click3').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').css("top", "100px");
            $('.popupContent').css("width", "690px");
            $('.formfields').html('<h2>Contact Details: </h2>'+
                    '<span class="col_2">'+
                    '<ul class="contact">'+
                    '<li><label for="zipcd">Date Of Birth*:</label><input id="datepick1" name="dob" class="text1" value="<?php $dob = $profiledata[1]->cl_dob; echo date('j-m-Y',strtotime($dob)); ?>"/></li>' +
                    '<li><label for="zipcd">Address:</label><input id="add" name="add" class="text1" value="<?php echo $profiledata[1]->cl_address; ?>"/></li>' +
                    '<li><label for="zipcd">City:</label><input id="city" name="city" class="text1" value="<?php echo $profiledata[1]->cl_city; ?>"/></li>' +
                    '<li><label for="zipcd">Country:</label><select><option selected=selected><?php echo $profiledata[1]->cl_country; ?></option><option>Algeria</option><option>India</option><option>German</option></select></li>' +
                    '<li><label for="zipcd">Zipcode:</label><input id="zipcode" name="zipcode" class="text1" value="<?php echo $profiledata[1]->cl_zipcode; ?>"/></li>' +
                    '</ul>'+
                    '</span>'+
                    '<span class="col_2">'+
                    '<ul class="contact">'+
                    '<li><label for="zipcd">Email 1*:</label><input id="pemail" name="pemail" class="text1" value="<?php echo $profiledata[1]->cl_primary_email; ?>"/></li>' +
                    '<li><label for="zipcd">Email 2:</label><input id="semail" name="semail" class="text1" value="<?php echo $profiledata[1]->cl_secondary_email; ?>"/></li>' +
                    '<li><label for="zipcd">Contact 1*:</label><input id="pphone" name="pphone" class="text1" value="<?php echo $profiledata[1]->cl_primary_contact; ?>"/></li>' +
                    '<li><label for="zipcd">Contact 2:</label><input id="sphone" name="sphone" class="text1" value="<?php echo $profiledata[1]->cl_secondary_contact; ?>"/></li>' +
                    '<li><label for="zipcd">Fax:</label><input id="fax" name="fax" class="text1" value="<?php echo $profiledata[1]->cl_fax; ?>"/></li>' +
                    '</ul>'+
                    '</span><br><p style="float:right; margin-right:40px;"><input type="submit" class="rounded" name="save" value="Save"></p><div class="clr"></div>');
            $('.popup').show();
            return false;
        });

        $('#click4').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popupContent').css("width", "480px");
            $('.formfields').html('<form><h2>Payment Details: </h2><ul>' +
                    '<li><label for="crdnum">Credit Card Number:</label><input id="name" name="name" class="text1" value="1000210001"/></li>' +
                    '<li><label for="crdhnm">Card Holder Name:</label><input id="name" name="name" class="text1" value="John Smith"/></li>' +
                    '<li><label for="acnum">Banker Account Number:</label><input id="name" name="name" class="text1" value="1100022225"/></li>' +
                    '<li><label for="acnm">Account Holder Name:</label><input id="name" name="name" class="text1" value="John Smith"/></li>' +
                    '<li><input type="submit" class="rounded" value="Save"/></li></ul></form>');
            $('.popup').show();
            return false;
        });

        $('.x').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script>
<p id="res"></p>
<div class="main_content_box_5" >
    <div class='cl_profile_info'>
        <?php 
            if($profiledata[1]->cl_profile_picture == "NULL" || empty($profiledata[1]->cl_profile_picture)){ 
                if($profiledata[1]->cl_patronymic == "Mr.") $dp = IMG_PATH.'images/dpm.jpg';
                else  $dp = IMG_PATH.'images/dpf.jpg';
            }
            else  $dp = IMG_PATH.$profiledata[1]->cl_profile_picture;
        ?>
        <span class='pr_info_img'>
            <img id="profileimg" class="profile_img" src="<?php echo $dp; ?>"/>
            <p><input id="click1" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        </span>
        <span class='pr_info'>
            <h2><?php echo $profiledata[1]->cl_patronymic; ?> <?php echo $profiledata[1]->cl_first_name; ?> <?php echo $profiledata[1]->cl_last_name; ?></h2>
            <p><input id="click2" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
            <p><b><u><a href='<?php echo WEB_URL; ?>dashboard/Change_Password'>Change Password</a></u></b></p>
            <p><b>Native Language: </b><span><?php echo $profiledata[1]->cl_native_language; ?></span> </p>
            <p><b>Member Since: </b><span><?php $joindate = $profiledata[0]->user_registrations_date; echo date('d-m-Y',strtotime($joindate)); ?></span> </p>
            <p><b>No. of Projects Posted: </b><span> </span> </p>
            <p><b>Total Earnings: </b><span> </span> </p>
        </span>
        <span class='pr_progressbar'>
            <p><b>Your Profile is <span>73%</span> Complete</b></p>
            <img src='<?php echo IMG_PATH; ?>images/progressbar.png'>
        </span>
        <div class='clearfixit'> </div>
    </div>
    <div class='cl_profile_about'>
        <h2 class='blk_head'>About</h2>
        <p><input id="click3about" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <p><?php echo $profiledata[1]->cl_about; ?></p>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_contact'>
        <h2 class='blk_head'>Personal Details</h2>
        <p><input id="click3" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_2">
            <p><b>Date Of Birth: </b><span><?php $dob = $profiledata[1]->cl_dob; echo date('j-m-Y',strtotime($dob)); ?></span> </p>
            <p><b>Address: </b><span><?php echo $profiledata[1]->cl_address; ?></span> </p>
            <p><b>City: </b><span><?php echo $profiledata[1]->cl_city; ?></span> </p>
            <p><b>Country: </b><span><?php echo $profiledata[1]->cl_country; ?></span> </p>
            <p><b>Zipcode: </b><span><?php echo $profiledata[1]->cl_zipcode; ?></span> </p>
        </div>
        <div class="col_2">
            <p><b>Email 1: </b><span><?php echo $profiledata[1]->cl_primary_email; ?></span> </p>
            <p><b>Email 2: </b><span><?php echo $profiledata[1]->cl_secondary_email; ?></span> </p>
            <p><b>Contact 1: </b><span><?php echo $profiledata[1]->cl_primary_contact; ?></span> </p>
            <p><b>Contact 2: </b><span><?php echo $profiledata[1]->cl_secondary_contact; ?></span> </p>
            <p><b>FAX: </b><span><?php echo $profiledata[1]->cl_fax; ?></span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>   
    <div class='cl_profile_payment'>
        <h2 class='blk_head'>Payment Details</h2>
        <p><input id="click4" class="myButton editinfo" type="BUTTON" value="EDIT X"></p>
        <div class="col_2">
            <p><b>Credit Card Number: </b><span><?php echo $profiledata[1]->cl_card_number; ?></span> </p>
            <p><b>Card Holder Name: </b><span><?php echo $profiledata[1]->cl_cardholder_name; ?></span> </p>
        </div>
        <div class="col_2">
            <p><b>Bank Account Number: </b><span><?php echo $profiledata[1]->cl_account_number; ?></span> </p>
            <p><b>Account Holder Name: </b><span><?php echo $profiledata[1]->cl_accountholder_name; ?></span> </p>
        </div>
        <div class='clearfixit'> </div>
    </div>  
    <?php if($profiledata[2]->user_doc_path == "NULL" || empty($profiledata[2]->user_doc_path)) $docpath = "No File Found."; else $docpath = WEB_PATH.$profiledata[2]->user_doc_path; ?>
    <?php
     $filename = explode('/',$profiledata[2]->user_doc_path);
     //print_r($filename);
     //echo $filename[2];
    ?>
    <div class='cl_profile_docs'>
        <h2 class='blk_head'>Documents</h2>
        Files Uploaded: <a href="<?php echo $docpath; ?>" target="_blank"><?php echo $filename[2]; ?></a>
        <form>
            <b>Upload Files:</b> <input type="file">
        </form>
        <div class='clearfixit'> </div>
    </div>    
</div> 
<div class='popup'>
    <div class='popupContent'>
        <img src='<?php echo IMG_PATH; ?>images/x.png' alt='quit' class='x' id='x' />
        <div class="formfields"> </div>
    </div>
</div>

<script>
    $(document).ready(function() {
             $('#edit2').click(function(){
                username = $('#uname').val();
                password = $('#password').val();
                //alert(username+pass);
             });
    });
</script>