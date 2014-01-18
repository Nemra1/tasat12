<form>	
<div id="invoice-list">	
        <table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="table_th">
				<td>Project Name</td>
				<td>User name</td>
				<td>Invoice Ref No.</td>
				<td>Invoice Amount</td>
				<td>Invoiced On</td>
				<td>Status</td>
				<td><center>Action</center></td>
			</tr>
			</thead>
			<tbody>
                            <?php foreach($inv as $res) {?>
			<tr class="quicklinks_img">
				<td><?php echo $res['pro_name']; ?></td>
				<td><?php echo $res['cl_first_name'].' '.$res['cl_last_name']; ?></td>
				<td>IN-<?php echo $res['admin_inv_id'];?></td>
				<td><?php echo $res['inv_amount'];?></td>
				<td>5 days ago</td>
                <td><?php if($res['inv_status']==0){echo 'Unpaid';}
                else{
                    echo 'Paid';
                }?></td>
				<td>
                              <?php  if($res['inv_status']==0){?>  <a href="<?php echo WEB_URL; ?>adminbill/viewInvoicedetail?id=<?php echo $res['inv_cli_id']; ?>&pid=<?php echo $res['inv_pro_id']; ?>">
                                     <img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a> <?php }
 
           else 
           { ?>
              <a href="<?php echo WEB_URL; ?>adminbill/viewReceiptVoucher?id=<?php echo $res['inv_cli_id']; ?>&pid=<?php echo $res['inv_pro_id']; ?>">
                                     <img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a>  
           <?php }?>
              
                                </td>
				
			</tr>
		<?php } ?>
		  </tbody>
		</table>
	</div>
		
		
    </div>    
        <!--end-->
</div></form>