


<div class="form"  style="margin-left:30px";>
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
				<td class="firstrow">Contact:</td>
				<td>
				
					<input id="name" name="name" class="text" />	
				<td></td>
			</tr>
                    
                        
                         
                        <br>
                                        
		</table>
  
                <input style="margin-left:220px "; type="submit" value="UPDATE" class="rounded" />
                <input style="margin-left:50px "; type="BUTTON" value="CANCEL" class="rounded"/>
				
				
              
                        
			
     	
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
