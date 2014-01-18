
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
<script type="text/javascript" src="<?php echo WEB_PATH; ?>scripts/ui.datepicker.js"></script>
<!--<script type="text/javascript" src="http://trentrichardson.com/examples/timepicker/jquery-ui-timepicker-addon.js"></script>-->
<script type="text/javascript" src="<?php echo WEB_PATH; ?>scripts/jquery.tooltipster.js"></script>
<script type="text/javascript" src="<?php echo WEB_PATH; ?>Scripts/script.js"></script>
<script type="text/javascript" src="<?php echo WEB_PATH; ?>Scripts/jquery.smartTab.js"></script>
<script type="text/javascript" src="<?php echo WEB_PATH; ?>Scripts/bootstrap.js"></script>
<script>
    $(document).ready(function() {
        var ip_val = $('input[name="proj_type"]:checked').val();

        $('.opt').hide();
        $('.option3').show();
        $('#a1').prop('checked', 'checked');

        $('.a1').click(function() {
            var ip_val = $('input[name="proj_type"]:checked').val();
            //$('.a1').attr('checked',true);
            if (ip_val == "Written") {
                $('.opt').hide();
                $('.option3').show();
            }
            else {
                $('.option3').hide();
                $('.opt').show();
            }

        });



//  $('*').removeClass('proj_type');
//  $(this).addClass('proj_type');
//  $('.proj_type').prop('checked', 'checked');
// });
// $('.proj_type').prop('checked', 'checked');
    });


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

        $("#datepick").datepicker(pickerOpts);
        $("#datepick1").datepicker(pickerOpts);
        $("#datepick2").datepicker(pickerOpts);
        $("#datepick3").datepicker(pickerOpts);
    });
    $('#time').timepicker({
        hourMin: 8,
        hourMax: 16
    });
</script>
<form id="idForm"  action="<?php echo WEB_URL; ?>projects/insertProjectdetail" method="POST" enctype="multipart/form-data" >
    <table>
        <tr>
        <td valign="top" class="firstrow">Project Type</td>
        <td>
            <input type="radio" name="proj_type" class="a1" value="Consequential"> Consequential Translation(includes video chat) <br/>
            <input type="radio" name="proj_type"  class="a1" value="Conference/Simultaneous"> Conference/Simultaneous Translation(includes video chat) <br/>
            <input type="radio" name="proj_type"  class="a1" id="a1" value="Written" checked="checked"> Written Translation <br/>
            <input type="radio" name="proj_type"  class="a1" value="Live Video" > Live Video Translation chatting <br/>
        </td>
        <td></td>
        </tr>

    </table>

    <table cellspacing="0" cellpadding="0" border="0" class="option3">
        <tr>
        <td colspan="3">
            <hr>
        </td>	
        </tr>
        <tr>
        <td class="firstrow">Project Name*</td>
        <td><input type="text" name="projname" id="proj_name" class="text">
            <?php echo form_error('projname'); ?>
        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Project Description*</td>
        <td><textarea class="tetara" rows="3" cols="33" name="prodesc"></textarea> 
            <?php echo form_error('prodesc'); ?>
        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Translation Required From*</td>
        <td>
            <div class="lang_selection">
                <select name="lang_from" id="projlang_from" class="myselect">
                    <option value="English">English</option>
                    <option value="Russian">Russian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Italian">Italian</option>
                    <option value="German">German</option>
                    <option value="French">French</option>
                    <option value="Japanese">Japanese</option>
                </select>
                <?php echo form_error('lang_from'); ?>    
                <label style="float:left; margin:5px;">to</label>
                <select name="lang_to" id="projlang_to" class="myselect">
                    <option value="English">English</option>
                    <option value="Russian">Russian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Italian">Italian</option>
                    <option value="German">German</option>
                    <option value="French">French</option>
                    <option value="Japanese">Japanese</option>
                </select>
                <?php echo form_error('lang_to'); ?>
            </div>

        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Field /domain knowledge:*</td>
        <td>
            <select name="prodomain" id="prodomain" class="myselect" >
                <option value="select">--select--</option>
                <option value="Legal">Legal</option>
                <option value="Oil&gas">Oil&gas </option>
                <option value="Political">Political</option>
                <option value="IT&Communication">IT&Communication</option>
                <option value="Finance">Finance</option>
                <option value="Other">Other</option>
            </select>
            <?php echo form_error('prodomain'); ?>
        </td>
        <td> </td>
        </tr>
        <tr><td><input type="text" name="other" style="display:none;"/></td></tr>

        <tr>
        <td class="firstrow">Bid closure Date*</td>
        <td><input type="text" name="proj_bidclose" id="datepick" class="text"/>
            <?php echo form_error('proj_bidclose'); ?>
        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Expected Project Completion</td>
        <td><input type="text" name="proj_complete" id="datepick1" class="text">
            <?php echo form_error('proj_complete'); ?>
        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Project Budget</td>
        <td><label style="float:left; padding-top:5px; padding-right: 3px;" >$ </label><input type="text" name="proj_budget1" id="budeget" class="text" style="width:60px"> <label style="float:left; margin:7px;">to</label>
        <label style="float:left; padding-top:5px; padding-right: 3px;">$ </label><input type="text" name="proj_budget2" id="budeget" class="text" style="width:60px">
        <?php echo form_error('proj_budget2'); ?>   </td>

        </tr>

        <tr>
        <td class="firstrow">Upload Project File*</td>
        <td><input type="file" name="file" id="proj_file" class="file_text" >
            <?php echo form_error('file'); ?>
        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Show this project on the website</td>
        <td>
            <input type="radio" name="proj_showsite" value="yes"class="proj_showsite" checked> Yes &nbsp; &nbsp; &nbsp; 
            <input type="radio" name="proj_showsite" value="no" class="proj_showsite"> No </td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="submit" value="SUBMIT" id="submitId" >
            &nbsp; <input type="button" name="reset" class="reset" value="RESET" id="resetbuttonid" ></td>
        <td></td>
        </tr>

    </table>

    <table cellspacing="0" cellpadding="0" border="0" class="opt">

        <tr>
        <td colspan="3">
            <hr>
        </td>	
        </tr>
        <tr>
        <td class="firstrow">Project Name*</td>
        <td><input type="text" name="projname1" id="proj_name" class="text">
        </td>
        <td><?php echo form_error('projname1'); ?></td>
        </tr>
        <tr>
        <td class="firstrow">Project Description</td>
        <td><textarea class="tetara" rows="3" cols="33" name="prodesc1"></textarea>
        </td>
        <td><?php echo form_error('prodesc1'); ?></td>
        </tr>

        <tr>
        <td class="firstrow">Translation Required From*</td>
        <td>
            <div class="lang_selection">

                <select name="projlang_from1" id="projlang_to" class="myselect" style="float:left;">
                    <option value="English">English</option>
                    <option value="Russian">Russian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Italian">Italian</option>
                    <option value="German">German</option>
                    <option value="French">French</option>
                    <option value="Japanese">Japanese</option>
                </select><?php echo form_error('projlang_from1'); ?>
                <label style="float:left; margin:5px;">to</label>
                <select name="projlang_to1" id="projlang_to" class="myselect" style="float:right;">
                    <option value="English">English</option>
                    <option value="Russian">Russian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Italian">Italian</option>
                    <option value="German">German</option>
                    <option value="French">French</option>
                    <option value="Japanese">Japanese</option>
                </select><?php echo form_error('projlang_to1'); ?>
            </div>
        </td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Field /domain knowledge:*</td>
        <td>
            <select name="prodomain1" id="my_dropdown" class="myselect" >
                <option value="0">--select--</option>
                <option value="Legal">Legal</option>
                <option value="Oil&gas">Oil&gas </option>
                <option value="Political">Political</option>
                <option value="IT&Communication">IT&Communication</option>
                <option value="Finance">Finance</option>
                <!--                <option value="Other">Other</option>-->
            </select>

        </td>
        <td><?php echo form_error('prodomain1'); ?></td>
        </tr>
        <tr><td><input type="text" name="other1" style="display:none;"/></td></tr>
        <tr>
        <td class="firstrow">Bid closure Date</td>
        <td><input type="text" name="proj_bidclose1" id="datepick3" class="text">

        </td><td><?php echo form_error('proj_bidclose1'); ?></td>
        </tr>  
        <tr>
        <td class="firstrow">Date for service required*</td>
        <td><input type="text" name="service" id="datepick2" class="text">

        </td>
        <td><?php echo form_error('service'); ?></td>
        </tr>
        <tr>
        <td class="firstrow">Time of Event*</td>
        <td class="lang_selection"><input type="text" name="projevent" id="projlang_to" class="myselect" placeholder="HH:MM format" >
         <input type="radio" name="am" class="a1" value="am">AM
         <input type="radio" name="am" class="a1" value="pm">PM
        </td>
           
            </tr>
        <tr>
        <td class="firstrow">Duration of Service</td>
        <td class="lang_selection"><select name="duration1" id="projlang_to" class="myselect" >
                <option>--select--</option>
                <option>1 Day</option>
                <option>10 Days</option>
                <option>15 Days</option>    
            </select></td>
        <td></td>
        </tr>
        <tr>
        <td class="firstrow">Project Budget</td>
        <td><label style="float:left; padding-top:5px; padding-right: 3px;" >$ </label>
        <input type="text" name="proj_budget_01" id="budeget" class="text" style="width:60px"> 
        <label style="float:left; margin:7px;">to</label>
        <label style="float:left; padding-top:5px; padding-right: 3px;">$ </label>
        <input type="text" name="proj_budget_02" id="budeget" class="text" style="width:60px"></td>

        <td>
            <?php echo form_error('proj_budget_02'); ?></td>
        </tr>
        <tr>
        <td class="firstrow">Upload Project File*</td>
        <td><input type="file" name="file1" id="proj_file" class="file_text" ></td>
        <!--<td><?php // echo form_error('file1');   ?></td>-->
        </tr>

        <tr>
        <td class="firstrow">Wish to see interpreter on video</td>
        <td>
            <input type="radio" name="proj_showinterpreter1" class="proj_showsite" checked> Yes &nbsp; &nbsp; &nbsp; 
            <input type="radio" name="proj_showinterpreter1" class="proj_showsite"> No </td>
        <td></td>
        </tr>

        <tr>
        <td class="firstrow">Show this project online</td>
        <td>
            <input type="radio" name="proj_showsite1" class="proj_showsite" checked> Yes &nbsp; &nbsp; &nbsp; 
            <input type="radio" name="proj_showsite1" class="proj_showsite"> No </td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="submit" 	value="SUBMIT"  id="submitButtonId">
            &nbsp; <input type="button" name="RESET" class="reset" value="RESET" id="resetbutton" ></td>
        <td></td>
        </tr>

    </table>
</div>   
</form>
</div

<!--end-->


<!--<script>
$("#submitButtonId").click(function() {
    
    var ur="<?php// echo WEB_URL; ?>";
     var result = confirm('Are You Sure ?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/tastatranslators/preferred_translators" ;}
   
});
}
else{
  window.location.href =ur+"index.php/dashboard" ;
}
});

</script>-->

<script>
$(".reset").click(function() {
    $(this).closest('form').find("input[type=text], textarea,select").val("");
   });
 
</script>