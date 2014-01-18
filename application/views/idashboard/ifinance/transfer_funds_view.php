	<div id="transfer">
    	<p>Use this page to Transfer Funds by your verified payment methods.</p><p><a href="#">Click here</a> to know more about other payment methods.</p>
        
        <p><em><label>Account Number:</label> 211211854749</em></p>
        <p>Payment Options:</p>
        <select>
        	<option value="0">PayPal</option>
        	<option value="1">Credit Card</option>
        </select>
        <div style="width:350px; border:1px solid #CCC; border-radius:5px; margin:10px 0px;">       
            <p><label>Available Balance:</label><span>QAR</span> 0</p>
            <p><label>Transfer Amount:</label><span>QAR</span> <input type="text" /></p><hr />
            <p><label>New Balance:</label><span>QAR</span> 0</p>
        </div>
        
            <input type="submit" id="payamount" class="button" value="Make Payment"/>
    </div>
		
    </div>    
        <!--end-->
</div>
<script>
$("#payamount").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Proceed to payment?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/finance/successPayment" ;}
   
});
}
});
</script>