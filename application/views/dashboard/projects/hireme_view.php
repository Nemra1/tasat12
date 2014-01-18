
	<div class="bid_prop" style="margin-bottom:20px;">
    	<div class="left-in-main fleft">
        <div style="width:120px; float:left; margin-right:20px;">
        	<img src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="100" class="dp"/>
            <p><strong>Rate:</strong> $10/hour</p>
            <p><strong>Rank:</strong> *****</p>
            <p><strong><a href="<?php echo WEB_URL;?>tastatranslators/translator_profile">View Profile</a></strong></p>
            
        </div>
        </div>
        
            <h5>John</h5>
   
            <!--<div style="clear:both;"></div>-->
           <div class="right-in-main fright" style="margin-right:150px";>
               <form action="addprojects_view.php" method="POST" id="idForm">
    
        		<table cellspacing="0" cellpadding="0" border="0" class="option3">
			<tr>
				<td valign="top" class="firstrow">Project Type</td>
				<td>
                                     <b>Written Translation</b> 
				</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>	
			</tr>
	<tr>
				<td class="firstrow">Project Name</td>
                                <td><p>Data conversion</p></td>
				<td></td>
			</tr>
			<tr>
				<td class="firstrow">Required Language pair:</td>
				<td>
					<div class="lang_selection">
                                            <p>English &nbsp; to &nbsp; Russian</p>
                                                                  
                   
					
					</div>
				</td>
				<td></td>
			</tr>
			<tr>
				<td class="firstrow">Field of knowledge/domain:</td>
                                <td><p>Commercial FMCG</p></td>
				<td></td>
			</tr>
                        <tr>
				<td class="firstrow">Date for service required:</td>
                                <td class="lang_selection"><p>11 &nbsp;&nbsp;January&nbsp;&nbsp;  2012</p>
                                </td>
			</tr>
			<tr>
				<td class="firstrow">Event Type:</td>
                                <td><p>Conference</p></td>
				<td></td>
			</tr>
			       <tr>
				<td class="firstrow">Time of Event</td>
                                <td class="lang_selection"> <p>21 &nbsp;&nbsp; March &nbsp;&nbsp;  2012</p>
								
                               </td>
			</tr>
			
						<tr>
				<td class="firstrow">Video Required:</td>
				<td>
					<input name="proj_showsite" class="proj_showsite" type="radio"> Yes &nbsp; &nbsp; &nbsp; 
					<input name="proj_showsite" class="proj_showsite" type="radio"> No </td>
				<td></td>
			</tr>
			
			<tr>
			
				<td class="firstrow">Upload of paper/file: </td>
                                <td><p>C:\Users\Public\Documents\Files\project.</p></td>
	
			</tr>
<td class="firstrow"></td>
				<td>
					<input name="proj_showsite" class="proj_showsite" type="radio"> Yes &nbsp; &nbsp; &nbsp; 
					<input name="proj_showsite" class="proj_showsite" type="radio"> No </td>
				<td></td>	
                              

	
		</table>
           
                   <br>
                   <div class="fixed">
           <input type="radio" name="proj_type" class="proj_type" value="1" checked="checked"> Fixed Price
     <input type="radio" name="proj_type" class="proj_type" value="2">  Hourly Budget <br/>        
      <div class="left-in-main fleft" id="fixed";>
          <p><h3>Set your Project Cost</h3></p>
<!--      <input type="radio" name="proj_type" class="proj_type" value="1" checked="checked"> Fixed Price
     <input type="radio" name="proj_type" class="proj_type" value="2">  Hourly Budget <br/>-->
          
           <p><b>Set your Project Cost</b> Minimum $10</p>
           <input type="button" name="submit" 	value="USD"  id="submitButtonId"> $ <input type="text" name="" id="" class="" >
           
           <p><h3>To Complete in:</h3></p>
       <p> <input type="text" name="" id="" class="" > days </p>
      
                                 </div>
                  
                   </div>
           </div>
                   
                   
    				<div  class="left-in-main fleft" id="hour";>
                                                              
                                    
                                    <h3>Budget for this project?</h3>
                                 <input type="button" name="submit" 	value="USD"  id="submitButtonId"> $ <input type="text" name="" id="" class="" >
                                
                                 <p>Hours of work required:</p>
                                 <p> <input type="text" name="" id="" class="" >/hour
                                                                 
					<select name="projlang_to" id="projlang_to" class="myselect" style="float:left;">
						<option>Week/Month</option>
                                                 <option>1st week/January</option>
                                                 <option>2nd week/January</option>
                                                 <option>3rd week/January</option>
                                                 <option>4th week/January</option>
                                                <option> -----------------------</option>
                                                <option>1st week/February</option>
                                                <option>2nd week/February</option>
                                                <option>3rd week/February</option>
                                                <option>4th week/February</option>
                                                <option> -----------------------</option>
                                                <option>1st week/March</option>
                                                <option>2nd week/March</option>
                                                <option>3rd week/March</option>
                                                <option>4th week/March</option>
                                                <option> -----------------------</option>
						<option>1st week/April</option>
                                                <option>2nd week/April</option>
                                                <option>3rd week/April</option>
                                                <option>4th week/April</option>
                                                <option> -----------------------</option>
                                                <option>1st week/May</option>
                                                <option>2nd week/May</option>
                                                <option>3rd week/May</option>
                                                <option>4th week/May</option>
                                                <option> -----------------------</option>
						<option>1st week/June</option>
                                                <option>2nd week/June</option>
                                                <option>3rd week/June</option>
                                                <option>4th week/June</option>
                                                <option> -----------------------</option>
						<option>1st week/July</option>
                                                <option>2nd week/July</option>
                                                <option>3rd week/July</option>
                                                <option>4th week/July</option>
                                                <option> -----------------------</option>
						<option>1st week/August</option>
                                                <option>2nd week/August</option>
                                                <option>3rd week/August</option>
                                                <option>4th week/August</option>
                                                <option> -----------------------</option>
						<option>1st week/September</option>
                                                <option>2nd week/September</option>
                                                <option>3rd week/September</option>
                                                <option>4th week/September</option>
                                                <option> -----------------------</option>
						<option>1st week/October</option>
                                                <option>2nd week/October</option>
                                                <option>3rd week/October</option>
                                                <option>4th week/October</option>
                                                <option> -----------------------</option>
						<option>1st week/November</option>
                                                <option>2nd week/November</option>
                                                <option>3rd week/November</option>
                                                <option>4th week/November</option>
                                                <option> -----------------------</option>   
						<option>1st week/December</option>
                                                <option>2nd week/December</option>
                                                <option>3rd week/December</option>
                                                <option>4th week/December</option>
                                                
					</select></p>
                                        
                                            <p>Project duration:</p>
                                            <p>  <select name="projlang_to" id="projlang_to" class="myselect" style="float:left;">
						<option>1 Week to 4 Week </option>
                                                 <option>1 Week to 8 Week</option>
                                                 <option>1 Week to 12 Week</option>
                                                 <option>1 Week to 16 Week</option>
                                                 <option>1 Week to 20 Week</option>
                                 </select></p>
                               
                                 <p></p>
                                 
                                              <p></p>
                                 
                                 </div>
            <div style="clear:both"></div>
   <div class="buttons"><input type="submit" value="HIRE ME" class="rounded"/>
       

   </div>
                                    
               <div class="sub">  <input type="reset" value="CANCEL" class="rounded"/>      </div>
    				
<!--		<table cellspacing="0" cellpadding="0" border="0" class="opt">
			<tr>
				<td valign="top" class="firstrow">Project Type</td>
				
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>	
			</tr>
			<tr>
				<td class="firstrow">Project Name</td>
				<td><input type="text" name="proj_name" id="proj_name" class="text"></td>
				<td></td>
			</tr>
			<tr>
				<td class="firstrow">Project Description</td>
				<td>
					<textarea class="tetara" rows="3" cols="33" ></textarea>
				</td>
				<td></td>
			</tr>
			<tr>
				<td class="firstrow">Translation Required From</td>
				<td>
					<div class="lang_selection">
                                    
					<select name="projlang_to" id="projlang_to" class="myselect" style="float:left;">
						<option>English</option>
						<option>Russian</option>
						<option>Chinese</option>
						<option>Spanish</option>
						<option>Arabic</option>
						<option>Italian</option>
						<option>German</option>
						<option>French</option>
						<option>Japanese</option>
					</select>
					<span style="font-size:14px;line-height:35px;"> &nbsp; To &nbsp; </span>
					<select name="projlang_to" id="projlang_to" class="myselect" style="float:right;">
						<option>English</option>
						<option>Russian</option>
						<option>Chinese</option>
						<option>Spanish</option>
						<option>Arabic</option>
						<option>Italian</option>
						<option>German</option>
						<option>French</option>
						<option>Japanese</option>
					</select>
					</div>
				</td>
				<td></td>
			</tr>
			<tr>
				<td class="firstrow">Field /domain knowledge:</td>
				<td><input type="text" name="proj_domain" id="proj_domain" class="text tooltip" title="Technical oil and gas commercial"></td>
				<td></td>
			</tr>
			<tr>
				<td class="firstrow">Date for service required</td>
				<td><input type="text" name="proj_bidclose" id="datepick2" class="text"></td>
			</tr>
                        <tr>
				<td class="firstrow">Time of Event</td>
				<td class="lang_selection"><select name="projlang_to" id="projlang_to" class="myselect" >
						<option>--select--</option>
                                                <option>09:00</option>
                                                <option>10:00</option>
                                                <option>11.00</option>
                                </select>]
                                <select name="projlang_to" id="projlang_to" class="myselect" >
						<option>--GMT--</option>
                                                <option>09:00</option>
                                                <option>10:00</option>
                                                <option>11.00</option>
                                </select></td>
			</tr>
			<tr>
				<td class="firstrow">Duration of Service</td>
				<td class="lang_selection"><select name="projlang_to" id="projlang_to" class="myselect" >
						<option>--select--</option>
                                                <option>1 Day</option>
                                                <option>10 Days</option>
                                                <option>15 Days</option>
                                </select></td>
				<td></td>
			</tr>
                        <tr>
				<td class="firstrow">Wish to see interpreter on video</td>
				<td>
					<input type="radio" name="proj_showinterpreter" class="proj_showsite" checked> Yes &nbsp; &nbsp; &nbsp; 
					<input type="radio" name="proj_showinterpreter" class="proj_showsite"> No </td>
				<td></td>
			</tr>
                        <tr>
				<td class="firstrow">Bid closure Date</td>
				<td><input type="text" name="proj_bidclose" id="datepick3" class="text"></td>
			</tr>
			  <tr>
				<td class="firstrow">Show this project online</td>
				<td>
					<input type="radio" name="proj_showsite" class="proj_showsite" checked> Yes &nbsp; &nbsp; &nbsp; 
					<input type="radio" name="proj_showsite" class="proj_showsite"> No </td>
				<td></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="button" name="submit" 	value="SUBMIT"  id="submitButtonId">
				&nbsp; <input type="button" name="submit" value="CANCEL"></td>
				<td></td>
			</tr>
			
		</table>-->

        </div>   

            </div>
     
   
   

 <!--edited by:blessy
      edited on:2-7-13 -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
 <script type="text/javascript" src="<?php echo WEB_PATH;?>scripts/ui.datepicker.js"></script>
 <script type="text/javascript" src="http://trentrichardson.com/examples/timepicker/jquery-ui-timepicker-addon.js"></script>

<script>
//Start of hide Radio Button	
    
    $(document).ready(function(){
            $('#hour').hide();
	$('.opt').hide();
		$('[name="proj_type"]').click(function(){
                    $('#hour,#fixed').toggle();
//		if($("input[name='proj_type']:checked").val() != 1  )
//		{
//                $('.opt').show();
//		$('.option1').hide();
//		}else{
//		$('.opt').hide();
//                
//		$('.option2').show();
//                }
//                if($("input[name='proj_type']:checked").val() == 1  ){
//                   $('#hour').hide();
//                }
//                else{
//                    $('#hour').show();
//                }
		});
	});
 ///end of HIDE RADI0 BUTTON   
  
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

$("#datepick").datepicker(pickerOpts);
$("#datepick1").datepicker(pickerOpts);
$("#datepick2").datepicker(pickerOpts);
$("#datepick3").datepicker(pickerOpts);
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

    <div class="clr"></div>
        <!--end-->



<script>
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
$("#submitId").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Do you want to search Preferred Translators  ?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/tastatranslators/preferred_translators" ;}
   
});
}
});

</script>

</div>