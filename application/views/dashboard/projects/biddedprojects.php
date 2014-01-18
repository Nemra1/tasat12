<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
			<thead>
			<tr class="quicklinks">
			<td colspan='6'>
				<span>My Bidded Projects</span>
			</td>
			</tr>
			<tr class="table_th">
				<td>Project Name</td>
				<td>Date of Posting</td>
				<td>Bid Closure Date</td>
				<td>Bid Status (Avg)</td>
				<td>Total Bids</td>
				<td width="40px" colspan="2">Action</td>
			</tr>
			</thead>
    <?php foreach ($bidded as $prolist){ ?>
			<tbody>
			<tr class="quicklinks_img">
				<td><?php echo $prolist['pro_name']; ?></td>
				<td><?php echo $prolist['bid_datetime']; ?></td>
				<td><?php echo $prolist['bid_expcompletion_date']; ?></td>
				<td><?php echo $prolist['bid_amount']; ?></td>
				<td><?php echo $prolist['count(pro_id_pk)']; ?></td>
				<td><a href="<?php echo WEB_URL ;?>projects/bidderdetails?id=<?php echo  $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
                        </tr>
		  </tbody>
    <?php } ?>
		</table>
		
	
    </div>    
        <!--end-->
</div>