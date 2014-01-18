
<div class="col_left1" style="border-right:1px dashed #CDCDCD;">

    <label class="head-blue">Project Name:</label><div class="lblpay">Chinese Translation</div>
    <label class="head-blue">Client Name:</label><div class="lblpay">Peter John</div>
    <label class="head-blue">Translator Name:</label><div class="lblpay">John Smith</div>

</div>
<div class="col_right1" style="border-right:1px dashed #CDCDCD;" >

    <label class="head-blue">Invoice No:</label><div class="lblpay">INV-1213</div>
    <label class="head-blue">Bill Date:</label><div class="lblpay">23-06-2013</div>
    <label class="head-blue">Bill Amount:</label><div class="lblpay">$500</div>

</div>


<form action="#" method="POST">
    <div class="col_middle1" >
    
		
    <label class="head-blue">TASAT Fee:</label><div class="lblpay">$50</div>
                             <label class="head-blue">Total Amount:</label><div class="lblpay">$500 </div>
                               <label class="head-blue">Description: </label><div class="lblpay">Pay the amount </div>
           

    <br>
  

        </div> <br>
<input type="button" value="Pay" class="button margin-lpay margin-t10" name="submit" id="payamount" onclick="window.location.href='<?php echo WEB_URL; ?>myfinancials/payvoucher'"/>
<input type="button" value="Print" class="button margin-print" name="cancel" id="paycancel" onclick="window.print();" style="margin-top:-30px;"/>
        </form>
</div>
</div>