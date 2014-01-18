	<div id="deposit">
    	<div><p>Please Select a Payment Method:</p></div>
        
        <div>
<!--        <table>
        	<tr>
            	<td><input type="radio" /></td>
                <td><img src="<?php echo IMG_PATH ?>images/paypal.jpg" width="100" /></td>
            </tr>
        	<tr>
            	<td><input type="radio" /></td>
                <td><input type="radio" /><img src="<?php echo IMG_PATH ?>images/creditcard.jpg"  width="100"  /></td>
            </tr>
        </table>-->
            <ul>
                <li>
                <span> <input type="radio" name="gen"  value="m"/></span>
                <span>Credit Card</span>
<!--                <span><img src="<?php echo IMG_PATH ?>images/creditcard.jpg"  width="60"  /></span>-->
                </li>
                <li>
                <span> <input type="radio" name="gen"  value="m"/></span>
                <span>PayPal</span>
<!--                <span><img src="<?php echo IMG_PATH ?>images/paypal.jpg"  width="60"  /></span>-->
                </li>
            </ul>
        </div>
        
        <div style="width:235px; float:left;">
        	<p>I'd like to deposit: (min $5.00)</p>
            <select>
            	<option value="1">USD</option>
            	<option value="1">QAR</option>
            </select>
            <span><strong>$</strong> </span><input type="text" style="width: 50px;" />
        </div>
        <div style="width:200px; float:left;">
        	<p><strong>Amount to be Deposited:</strong></p>
            <p style=" font-size:18px; margin:2px;"><strong>$300 USD</strong></p>
        </div>
        <div style="clear:both;"></div>
        <div><input type="submit" id="payamount" value="Pay" class="button" /></div>
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
                        window.location.href =ur+"index.php/myfinancials/successPayment" ;}
   
});
}
});
</script>