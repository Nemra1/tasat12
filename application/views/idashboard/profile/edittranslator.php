
    <table cellspacing="0" cellpadding="0" border="0" >
    <form>
		<tbody>	
                    <tr class="quicklinks_img" >
				<td ><b>First Name</b></td>
				<td><input type="text" class="text"/> </td>
			</tr>
                        <tr class="quicklinks_img" >
				<td ><b>Last Name</b></td>
				<td><input type="text" class="text"/> </td>
			</tr>
        	<tr class="quicklinks_img">
				<td><b>Address</b></td>
                                <td><input type="text" class="text"/></td>
			</tr>
                        <tr class="quicklinks_img">
				<td><b>City</b></td>
				<td><input type="text" class="text"/></td>
			</tr>
                         <tr class="quicklinks_img">
				<td><b>Country </b></td>
				<td> 
					<input type="text" class="text" />
				</td>
			</tr>
                         <tr class="quicklinks_img">
				<td><b>Zip code </b></td>
				<td> 
					<input type="text" class="text" />
				</td>
			</tr>
                        <tr class="quicklinks_img">
				<td><b>Email Id</b></td>
                                <td><input type="text" class="text"/></td>
			</tr>
        	 <tr class="quicklinks_img">
				<td><b>Mobile</b></td>
                                <td><input type="text" class="text"/></td>
			</tr>
                         <tr class="quicklinks_img">
				<td><b>Phone</b></td>
                                <td><input type="text" class="text"/></td>
			</tr>
                         <tr class="quicklinks_img">
				<td><b>Fax</b></td>
                                <td><input type="text" class="text"/></td>
			</tr>
           <tr class="quicklinks_img">
				<td><b>Upload Profile Picure</b></td>
                                <td><input type="file" multiple/></td>
			</tr>
                       
            <tr class="quicklinks_img">
				<td> <b> Profile Summary</b></td>
				<td> <textarea cols="33" rows="5" style="resize:none;"></textarea></td>
			</tr>
            <tr>
				<td>&nbsp;  </td>
				<td><input type="button" class="button" value="Submit" id="submitdispute" />&nbsp;&nbsp;
                                </td>
			</tr>
		</tbody>	
        </form>
     </table>

	</div>
</div>
<!--<script>
$("#submitdispute").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Do you want to submit?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/myfinancials/viewDisputes" ;}
   
});
}
else{
  window.location.href =ur+"index.php/" ;
}
});</script>-->