<?php foreach($inv as $res){?>
<div class="col_left1"  style="border-right:1px dashed #CDCDCD;">

    <label class="head-blue">Project Name:</label><div class="lblpay"><?php echo $res['pro_name']; ?></div>
    <label class="head-blue">Client Name:</label><div class="lblpay"><?php echo $res['cl_first_name'].' '.$res['cl_last_name']; ?></div>
    <label class="head-blue">Translator Name:</label><div class="lblpay">
     <?php if($res['user_type']==2){echo $res['it_first_name'].' '.$res['it_last_name'];}
    else{
        echo $res['tc_first_name'];
  }?>
    </div>

</div>
<div class="col_right1" style="border-right:1px dashed #CDCDCD;" >

    <label class="head-blue">Invoice No:</label><div class="lblpay">IN-<?php echo $res['admin_inv_id'];?></div>
    <label class="head-blue">Bill Date:</label><div class="lblpay">23-06-2013</div>
    <label class="head-blue">Bill Amount:</label><div class="lblpay">$<?php echo $res['inv_amount'];?></div>

</div>
<?php }?>

<form action="#" method="POST">
    <div class="col_middle1" >
    
		
    <label class="head-blue">TASAT Fee:</label><div class="lblpay">$50</div>
                             <label class="head-blue">Total Amount:</label><div class="lblpay">$500 </div>
                               <label class="head-blue">Description: </label><div class="lblpay">Pay the amount </div>
           

    <br>
  

        </div> <br>
<input type="button" value="Pay" class="button margin-lpay margin-t10" name="submit" id="payamount" onclick="window.location.href='<?php echo WEB_URL; ?>adminbill/viewPayVoucher?id=<?php echo $res['inv_cli_id']; ?>&pid=<?php echo $res['inv_pro_id']; ?>'"/>
        <input type="button" value="Print" class="button margin-print" name="cancel" id="paycancel"  style="margin-top:-30px;"/>
        </form>
</div>
</div>
<!--<script>
$(document).ready(function(){
   w=window.open();
w.document.write($('.col_left1').html());
w.print();
w.close(); 
});
//
//onclick="window.print();"
</script>-->