          <form>  
              <div class="table-dispute">
              <table cellspacing="0" cellpadding="0" border="0" >

		<tbody>	
                    <tr class="quicklinks_img">
				<td><b>Dispute Id</b></td>
				<td> DS1232</td>
			</tr>
        	<tr class="quicklinks_img">
				<td><b>Project Name </b></td>
                                <td><select class="myselect">
                                        <option value="0">Select Category</option>
                                        <option value="1">Press Release Translation</option>
                                        <option value="2">English to Arabic Translation</option>
                                        <option value="2">Other</option>
                                 </select></td>
			</tr>
        	<tr class="quicklinks_img">
				<td><b>Translator Name</b></td>
				<td><input type="text" class="text"/></td>
			</tr>
            <tr class="quicklinks_img">
				<td><b>Project Price </b></td>
				<td> 
					<input type="text" class="text" />
				</td>
			</tr>
            <tr class="quicklinks_img">
				<td> <b> Message </b></td>
				<td> <textarea cols="33" rows="5" style="resize:none;"></textarea></td><br/>
			</tr>
            <tr>
				<td>&nbsp;  </td>
				<td><input type="button" class="button" value="SUBMIT" id="submitdispute" /></td>
			</tr>
		</tbody>	
      
     </table></div>
                </form>

   <form>
       <div class="table-dispute1">
       <table cellspacing="0" cellpadding="0" border="0" >
		<tbody>	
                    <tr class="quicklinks">
                    <td colspan="4"><span>Dispute Lists</span></td>
                    </tr>
                    <tr class="table_th"><td><b>Dispute Id</b></td>
                <td><b>Project Name </b></td>
                <td><b>Translator Name</b></td>
                <td><b> view </b></th></td></tr>
                    <tr class="quicklinks_img">
				<td>DS1213</td>
				<td> Press Release translation</td>
                                <td>John Smith</td>
                                <td><a href="<?php echo WEB_URL;?>finance/viewtransDisputes"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></td>
			</tr>
        	<tr class="quicklinks_img">
				<td>DS1213</td>
				<td> Press Release translation</td>
                                <td>John Smith</td>
                                <td><a href="<?php echo WEB_URL;?>finance/viewtransDisputes"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></td>
			</tr>
        	<tr class="quicklinks_img">
				<td>DS1213</td>
				<td> Press Release translation</td>
                                <td>John Smith</td>
                                <td><a href="<?php echo WEB_URL;?>finance/viewtransDisputes"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></td>
			</tr>
            
            <tr class="quicklinks_img">
				<td>DS1213</td>
				<td> Press Release translation</td>
                                <td>John Smith</td>
                                <td><a href="<?php echo WEB_URL;?>finance/viewtransDisputes"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></td>
			</tr>
                           <tr class="quicklinks_img">
				<td>DS1213</td>
				<td> Press Release translation</td>
                                <td>John Smith</td>
                                <td><a href="<?php echo WEB_URL;?>finance/viewtransDisputes"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></td>
			</tr>
            
            
		</tbody>	   
    
</table></div>
   </form>
	</div>
</div>
<script>
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
});</script>