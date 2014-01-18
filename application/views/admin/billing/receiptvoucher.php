<?php foreach($rec as $res){?>
<div class="col_left1" style="border-right:1px dashed #CDCDCD;">

    <label class="head-blue">Project Name:</label><div class="lblpay"><?php echo $res['pro_name']; ?></div>
    <label class="head-blue">Client Name:</label><div class="lblpay"><?php echo $res['cl_first_name'].' '.$res['cl_last_name']; ?></div>
    <label class="head-blue">Translator Name:</label><div class="lblpay">  <?php if($res['user_type']==2){echo $res['it_first_name'].' '.$res['it_last_name'];}
    else{
        echo $res['tc_first_name'];
    }?></div>

</div>
<div class="col_right1" style="border-right:1px dashed #CDCDCD;" >

    <label class="head-blue">Invoice No:</label><div class="lblpay">IN-<?php echo $res['admin_inv_id'];?></div>
    <label class="head-blue">Pay Voucher No:</label><div class="lblpay">23013</div>
    <label class="head-blue">Receipt No:</label><div class="lblpay">12500</div>

</div>


<form action="#" method="POST">
    <div class="col_middle1" >
    
    <label class="head-blue">Mode of Payment:</label> <label class="lblpay">Paypal</label>
                             <label class="head-blue">Account No:</label><label class="lblpay">210043534636 </label>
                               <label class="head-blue">Amount Paid: </label><label class="lblpay">$<?php echo $res['inv_amount'];?></label>
           
    <br>
  

        </div> <br><br>

        <input type="button" value="Print" class="button margin-print" name="print" onclick="window.print();" id="payprint" style="margin-top:-20px;"/>
        </form>
<?php }?>
</div>
</div>