<form action="<?php echo WEB_URL; ?>adminbill/savePayment" method="POST">
<?php foreach($pay as $res){?>
<div class="col_left1" style="border-right:1px dashed #CDCDCD;">

    <label class="head-blue">Project Name:</label><label class="lblpay"><?php echo $res['pro_name']; ?></label>
    <label class="head-blue">Client Name:</label><label class="lblpay"><?php echo $res['cl_first_name'].' '.$res['cl_last_name']; ?></label>
    <label class="head-blue">Translator Name:</label><label class="lblpay"> <?php if($res['user_type']==2){echo $res['it_first_name'].' '.$res['it_last_name'];}
    else{
        echo $res['tc_first_name'];
    }?></label>

</div>

<div class="col_right1">

    <label class="head-blue">Invoice No:</label><label class="lblpay">IN-<?php echo $res['admin_inv_id'];?></label>
    <label class="head-blue">Bill Date:</label><label class="lblpay"><?php echo $res['inv_date'];?></label>
    <label class="head-blue">Bill Amount:</label><label class="lblpay">$<?php echo $res['inv_amount'];?></label>

</div>
<hr>
<input type="hidden" name="invid" value="<?php echo $res['admin_inv_id'];?>"/>
<input type="hidden" name="cid" value="<?php echo $res['inv_cli_id'];?>"/>
<input type="hidden" name="pid" value="<?php echo $res['inv_pro_id'];?>"/>
<table cellspacing="0" cellpadding="0">
		
                             <tr><td class="head-blue">TASAT Fee:</td><td>$50 </td></tr>
                              <tr><td  class="head-blue">Total Amount:</td><td>$<?php echo $res['inv_amount'];?> </td></tr>
                              <tr><td  class="head-blue">Amount Paying:</td><td><input type="text" class="text" name="amount"/></td></tr>
                              <tr> <td  class="head-blue">Net Amount:</td><td>$100</td></tr>
                          
                        </table>

        <input type="submit" value="Make Payment" class="button margin-lpay margin-t10" name="submit" id="payamount"/>
        <input type="button" value="Cancel Payment" class="button margin-print" name="cancel" id="paycancel"  style="margin-top:-30px;"/>
</form>
<?php }?>
</div>
</div>
<script>
$("#payamount").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Proceed to payment?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/admin/successPayment" ;}
   
});
}
});

$("#paycancel").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Do you want to cancel payment?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                  window.location.href =ur+"index.php/admin/cancelPayment" ;}
  
});
}
});

</script>