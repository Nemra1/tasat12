
		<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
			<thead>
			<tr class="table_th">
				<td>Project Name </td>
				<td>Project Type </td>
				
				<td>Project Amount</td>
				<td width="85px">Start Date</td>
				<td width="100px">End Date </td>
                               	<td width="40px"><center>Action</center></td>
			</tr>
			</thead>
                    <?php foreach ($newproject as $prolist){
                        ?>
                    
			<tbody>
			<tr class="quicklinks_img">
				<td> <?php echo $prolist['pro_name']; ?></td>
				<td><?php echo $prolist['pro_type']; ?> </td>
				
                                <td> <?php echo $prolist['pro_budget_min']; ?>-<?php echo $prolist['pro_budget_max']; ?></td>
				<td><?php echo $prolist['pro_bidclose']; ?> </td>
				<td><?php echo $prolist['pro_completion']; ?> </td>
 				<td> <a href="<?php echo WEB_URL;?>projects/projectView2?id=<?php echo $prolist['pro_id_pk']; ?> "><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
				<!--td><center><a href="#"><img src="<?php echo IMG_PATH;?>images/Close.png" style="height:15px;width:15px;"/></a></center></td-->
			</tr>
                    <?php }?>
			
		  </tbody>
		</table>
		
		
		
    </div>    
        <!--end-->
</div>