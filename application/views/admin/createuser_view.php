


<div style="margin-left:130px";>
<form action="addprojects_view.php" method="POST" id="idForm">
    
        		<table cellspacing="0" cellpadding="0" border="0" class="option3">
			
                        <tr>
				<td class="firstrow">First Name*</td>
				<td><input type="text" name="proj_name" id="proj_name" class="text"></td>
				<td></td>
			</tr>
                        
                        <tr>
				<td class="firstrow">Last Name*</td>
				<td><input type="text" name="proj_name" id="proj_name" class="text"></td>
				<td></td>
			</tr>
                        
                        <tr>
                            <td class="firstrow">Gender:</td>
				<td>
					<input type="radio" name="gen"  value="m"/>Male
                                        <input type="radio" name="gen"  value="m"/>Female
			<td></td>
			</tr>
                        
				<tr>
				<td class="firstrow">Email Address</td>
				<td><input type="text" name="proj_name" id="proj_name" class="text"></td>
				<td></td>
                                </tr>       
                                
                                <tr>
				<td class="firstrow">Password</td>
				<td><input type="text" name="proj_name" id="proj_name" class="text"></td>
				<td></td>
                                </tr>   
                        <tr>
                            
                         <tr>
				<td class="firstrow">Confirm Password</td>
				<td><input type="text" name="proj_name" id="proj_name" class="text"></td>
				<td></td>
                                </tr>   
                        
			
                                
			<tr>
				<td class="firstrow">Address:</td>
				<td>
				
					<textarea name="Adress" cols="15" rows="3" class="text"></textarea>
				<td></td>
			</tr>
                        
                      
			
				
                        
                         <tr>
				<td class="firstrow">Contact:</td>
				<td>
				
					<input id="name" name="name" class="text" />	
				<td></td>
			</tr>
                        
                         <tr>
				<td class="firstrow">Upload CV & other Credentials:</td>
				<td>
				
					<input type="file" multiple />
				<td></td>
			</tr>
                        
			<tr>
				<td></td>
				<td><input type="button" name="submit" 	value="SUBMIT"  id="submitButtonId">
				<td></td>
			</tr>
		
				
		</table>
    
</div>
</div>
    </div>   
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
