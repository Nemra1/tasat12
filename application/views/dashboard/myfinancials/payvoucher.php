
<div class="col_left1" style="border-right:1px dashed #CDCDCD;">

    <label class="head-blue">Project Name:</label><label class="lblpay">Chinese Translation</label>
    <label class="head-blue">Client Name:</label><label class="lblpay">Peter John</label>
    <label class="head-blue">Translator Name:</label><label class="lblpay">John Smith</label>

</div>

<div class="col_right1">

    <label class="head-blue">Invoice No:</label><label class="lblpay">INV-1213</label>
    <label class="head-blue">Voucher No:</label><label class="lblpay">PV-1213</label>
    <label class="head-blue">Invoice Date:</label><label class="lblpay">23-06-2013</label>
    <label class="head-blue">Invoice Amount:</label><label class="lblpay">$500</label>

</div>
<hr>
<form action="#" method="POST">
<table cellspacing="0" cellpadding="0">
		
<!--                             <tr><td class="head-blue">TASAT Fee:</td><td>$50 </td></tr>-->
                              <tr><td  class="head-blue">Total Amount:</td><td>$500 </td></tr>
                              <tr><td  class="head-blue">Amount Paying:</td><td><input type="text" class="text" name="amount"/></td></tr>
                              <tr> <td  class="head-blue">Net Balance:</td><td>$100</td></tr>
                          
                        </table>

        <input type="button" value="Make Payment" class="button margin-lpay margin-t10" name="submit" id="payamount"/>
        
</form>
</div>
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