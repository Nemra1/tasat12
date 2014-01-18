
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
 <script type="text/javascript" src="<?php echo WEB_PATH;?>scripts/ui.datepicker.js"></script>
 <script type="text/javascript" src="http://trentrichardson.com/examples/timepicker/jquery-ui-timepicker-addon.js"></script>


<script>
$(document).ready(function(){ 
    
      $("#hide").hide();
  $("#fifty,#seventy").click(function(){
    $("#hide").hide();
  });
  $("#radio").click(function(){
    $("#hide").show();
  });
  $('#clientp').change(function(){
       var cid=$('#clientp').val();
       $.post("<?php echo WEB_URL; ?>adminbill/getProjectlist", {cid:cid},
  function(data){
   $('#clientproject').append(data);
  }); 
   }); 
        $('#clientproject').change(function(){
        //alert(1);
        var url="<?php echo WEB_URL; ?>adminbill/getbidAmount";
     var client= $('#clientp').val();
     var pid=$('#clientproject').val();
     $.post(url,{cid:client,pid:pid},function(data){
      $('.invamt').val(data);
        });
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
<!--<script>
$(document).ready(function(){
$(function() {
		$( "#autocomplete" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "<?php // echo WEB_PATH;?>home/suggestions",
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
</script>-->
 <form action="<?php echo WEB_URL; ?>adminbill/saveInvoice" method="POST">
 <table>
 
                        	<tr>
				<td class="firstrow">Choose Client:</td>
				<td>
					<div class="lang_selection">
                                    
					<select name="client" id="clientp" class="myselect clientlist"  style="float:left;  width:200px;">
                                            <option value="0">select</option>
						<?php foreach($client as $cli){ ?>
						<option value="<?php echo $cli['cl_profile_id_pk']; ?>" ><?php echo $cli['cl_first_name'].' '.$cli['cl_last_name']; ?></option>
                                                <?php } ?>		
					</select>
					
				</td>
			
			</tr>
                        <tr>
				<td class="firstrow" >Choose Project:</td>
				<td >
					<div class="lang_selection">
                                    
					<select name="project" id="clientproject" class="myselect" style="float:left; width:200px;">
						<option value="0">select</option>
						
													
					</select>
					
				</td>
				
			</tr>
                        
                        <tr>
				<td class="firstrow">Due Date:</td>
				<td><input type="text" name="invdate" id="datepick" class="text" style="width:200px;"/></td>
			
			</tr>
                        <tr>
				<td class="firstrow">Bidded Amount:</td>
                                <td><p class="amount"></p><input type="text" name="invamt" readonly class="text invamt" style="width:200px;"/> </td>
                               
                                                    
                              
                                     
			</tr>
                        
                        <tr>
				<td class="firstrow">Choose Amount:</td>
				<td><input type="radio" name="discount" id="fifty" class="proj_showsite" value="50" checked > 50% </td>
                               
                                                    
                              
                                     
			</tr>
                        <tr>
                            <td class="firstrow"></td>
                         <td><input type="radio" name="discount" id="seventy" class="proj_showsite" value="70"> 70% </td>
                        </tr>
                        <tr>
                            <td class="firstrow"></td>
                        
                        <td>  
                        <input type="radio" id="radio" name="discount" class="proj_showsite"><lable>Others: </lable></td>
                           
                        </tr>
                        <tr> 
                         <td class="firstrow"></td>
                        <td><input type="text" id="hide" name="disc" class="text" style="width:100px; "></td></tr>
                        </table>
  <input type="submit" id="submitId" value="Generate Invoice" class="button" style="width:150px;"/>

    </div>    
        <!--end-->
</div>
                                    
    
      <script> 
        
//$("#submitButtonId").click(function() {
//    
//    var ur="<?php echo WEB_PATH; ?>";
//     var result = confirm('Are You Sure ?');// the script where you handle the form input.
//if(result == true){
//    $.ajax({
//                 success: function() {
//                        window.location.href =ur+"index.php/tastatranslators/preferred_translators" ;}
//   
//});
//}
//});
//$("#submitId").click(function() {
//    
//    var ur="<?php echo WEB_PATH; ?>";
//     var result = confirm('Do you want to Create Invoice?');// the script where you handle the form input.
//if(result == true){
//    $.ajax({
//                 success: function() {
//                        window.location.href =ur+"index.php/admin/invoiceCreated" ;} 
//   
//});
//}
//});

</script>
