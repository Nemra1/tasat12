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
				<td>Bid Amount</td>
				<td>Action</td>
				
			</tr>
			</thead>
			    <?php foreach ($bidded as $prolist){ ?>
                <tbody>
                <tr class="quicklinks_img">
                                <td> <?php echo $prolist['pro_name']; ?></td>
				 <td> <?php echo $prolist['pro_posted_date']; ?></td>
                                  <td> <?php echo $prolist['pro_bidclose']; ?></td>
                                   <td> <?php echo $prolist['bid_amount']; ?></td>
                                    <td><a href="<?php echo WEB_URL ;?>myProjects/trackProject?id=<?php echo $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"/></a></td>
                        </tr>
				
			
		  </tbody>
              <?php } ?>
		</table>
	</div>
</div>