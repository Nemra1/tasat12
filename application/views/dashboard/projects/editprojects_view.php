 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
 <script type="text/javascript" src="<?php echo WEB_PATH;?>scripts/ui.datepicker.js"></script>
 <script type="text/javascript" src="http://trentrichardson.com/examples/timepicker/jquery-ui-timepicker-addon.js"></script>

<script>
	$(document).ready(function(){
    $('.myselect').val(0);
            $('.opt').hide();
            $('.other').hide();  
            $('.myselect').change(function(){
             
                  if($(this).val()==6)
                      {
     $('.other').show();   
    }
    else{
       $('.other').hide();  
    }
            });
          
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

$(function(){
//create the date picker

$("#datepick1").datepicker(pickerOpts);
$("#datepickproject").datepicker(pickerOpts);
$("#datepickbid").datepicker(pickerOpts);

});
$("#timepick").timepicker({

	'minTime': '2:00pm',
	'maxTime': '11:30pm',
	'showDuration': true
});
</script>
<script>
$(document).ready(function(){
    

$(function() {
		$( "#autocomplete" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "<?php  echo WEB_PATH;?>home/suggestions",
				data: { term: $("#autocomplete").val()},
				dataType: "json",
				type: "POST",
				 success: function(data) {
                response(data);
            }
			});
		},
		minLength: 2
 
		});
	});
        });
</script>
     <form  action="<?php echo WEB_URL ?>projects/saveEdit" method="POST">
    
    <?php foreach($edit as $list){ ?>
        		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
                            <td class="firstrow">Project Id</td>
				<td>
                                   <?php echo $list['pro_id_pk']; ?>
                                    <input type="hidden" value="<?php echo $list['pro_id_pk']; ?>" name="id">
				</td></tr>
				<tr><td class="firstrow">Project Type</td>
				<td >
                                <?php echo $list['pro_type']; ?>
				</td></tr>
                             <tr>   <td  class="firstrow">Project Name</td>
				<td>
                                    <?php echo $list['pro_name']; ?>
				</td>
                           
           			</tr>
                                	<tr>
				<td colspan="6">
					<hr>
				</td>	
			</tr>
                     
			<tr>
				<td class="firstrow">Translation Required From</td>
				<td>
					<div class="lang_selection">
					<select name="projlang_from" id="projlang_from" class="myselect">
                                            <option value="<?php echo $list['pro_langfrom']; ?>" selected="selected"><?php echo $list['pro_langfrom']; ?></option>
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
                    <label style="float:left; margin:5px;">to</label>
					<select name="projlang_to" id="projlang_to" class="myselect">
                                            <option value="<?php echo $list['pro_langto']; ?>" selected="selected"><?php echo $list['pro_langto']; ?></option>
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
					</div>
				</td>
				<td></td>
                                
			</tr>
			<tr>
				<td class="firstrow">Field /domain knowledge:</td>
                             		<td>
                  <select name="domain" id="domain" class="myselect" >
						<option value="<?php echo $list['pro_domain']; ?>" selected="selected"><?php echo $list['pro_domain']; ?></option>
                                                <option value="Legal">Legal</option>
                                                <option value="Oil&gas">Oil&gas </option>
                                                <option value="Political">Political</option>
                                                <option value="IT&Communication">IT&Communication</option>
                                                <option value="Finance">Finance</option>
                                                <option value="6">Other</option>
                                </select><br><br>
                                            <input type="text" name="other" class="other"/>
                                </td>
				<td></td>
		</tr>
               
			<tr>
                       <td class="firstrow" id="dos">Date of Service Required</td>
				<td><input type="text" name="proj_complet" id="datepick1" class="text" value=" <?php echo $list['pro_completion']; ?>"></td>
				<td></td>
			</tr>
			       <tr>
				<td class="firstrow"  id="eventtime">Time of Event</td>
<!--<td class="lang_selection" id="timezone">
         <input type="text" name="projevent" id="projlang_to" class="myselect" placeholder="HH:MM format" >
         <input type="radio" name="am" class="a1" value="am">AM
         <input type="radio" name="am" class="a1" value="pm">PM
         <input type="hidden" name="type" id="editprotype" value="<?php echo $list['pro_type']; ?>"/>
        </td>-->
			</tr>
                         <tr>
				<td class="firstrow">Project Budget</td>
                                <td><label style="float:left; padding-top:5px; padding-right: 3px;" >$ </label><input type="text" name="proj_budgetmin" id="budeget" class="text" style="width:60px" value="<?php echo $list['pro_budget_min']; ?>"> <label style="float:left; margin:7px;">to</label>
                                    <label style="float:left; padding-top:5px; padding-right: 3px;">$ </label><input type="text" name="proj_budgetmax" id="budeget" class="text" style="width:60px" value="<?php echo $list['pro_budget_max']; ?>"></td>
				
			</tr>
                        	<tr>
				<td class="firstrow">Bid closure Date</td>
				<td><input type="text" name="proj_bidclose" id="datepickbid" class="text" value="<?php echo $list['pro_bidclose']; ?> "/></td>
				<td></td>
			</tr>
                        <tr>
				<td class="firstrow">Expected Project Completion</td>
				<td><input type="text" name="proj_complete" id="datepickproject" class="text" value="<?php echo $list['pro_completion']; ?>"></td>
				<td></td>
			</tr>
                        <tr>
				<td class="firstrow">Project Description</td>
				<td><textarea class="tetara" rows="3" cols="33" name="prodesc"> <?php echo $list['pro_desc']; ?></textarea></td>
				<td></td>
			</tr>
			
						<tr>
				<td class="firstrow">Show this project on the website:</td>
				<td>
					<input name="proj_showsite" class="proj_showsite" type="radio" checked="checked"> Yes &nbsp; &nbsp; &nbsp; 
					<input name="proj_showsite" class="proj_showsite" type="radio"> No </td>
				<td></td>
			</tr>
				<tr>
				<td class="firstrow">Wish to see Interpreter on video:</td>
				<td>
					<input name="proj_showsite1" class="proj_showsite" type="radio" checked="checked"> Yes &nbsp; &nbsp; &nbsp; 
					<input name="proj_showsite1" class="proj_showsite" type="radio"> No </td>
				<td></td>
			</tr>	
                        <tr>
                        <td class="firstrow">Uploaded file</td>
                       
                        <td class="firstrow3">
                            <a>
                                           <?php
                     foreach($filename as $name){ ?>
                         <a href="#">  <?php echo $name['pro_file_name']; ?></a>
                    <?php }
                        ?>
                    </a>
                          
                            &nbsp;<img src="<?php echo IMG_PATH; ?>images/Close.png" id='closeimg1' width="15px" height="15px" onclick="deletefile(<?php echo $list['pro_id_pk']; ?>);"/>
                       
                              <?php if (($list['pro_file_name']) == 'nil') {
                       echo "<script>
                             document.getElementById('closeimg1').style.display='none';                              
                             </script>";
                        }?>
                        </td>
                        </tr>
				<tr>
				<td class="firstrow">Upload Project File</td>
				<td><input type="file" name="filenw" id="proj_filenw" class="file_text" ></td>
				<td></td>
			</tr>	
		</table>
<?php } ?>
 <input type="submit" class="button" style="margin-left:311px;margin-top:16px;"value="Update"/>
    </div>   

    <div class="clr"></div>
        <!--end-->
</div>


<!--<script>
$("#submitButtonId").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Are You Sure ?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/tastatranslators/preferred_translators" ;}
   
});
}
});

</script>-->
<script>
    type=document.getElementById('editprotype').value;
      if(type==="Written"){
       document.getElementById('eventtime').style.display='none';
       document.getElementById('timezone').style.display='none';
       document.getElementById('datepick1').style.display='none';
       document.getElementById('dos').style.display='none';
    }
function deletefile($id){
 
    window.location.href='<?php echo WEB_URL ;?>projects/deleteFile?pid='+$id;
      //$('.firstrow3').hide();

}

</script>