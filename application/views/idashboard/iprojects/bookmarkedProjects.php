	
    <div style="clear:both"> </div>
		
		<table cellspacing="0" cellpadding="0" border="0" >
                <thead>
                <tr class="table_th">
                    <td>Project Name</td>
                    <td>Client Name</td>
                    <td>Project Type</td>
                    <td>Budget</td>
                    <td>Deadline</td>
                    <td>Action</td>
                </tr>
                </thead>
                       <?php foreach ($bookmark as $prolist){ ?>
                <tbody>
                    
                <tr class="quicklinks_img">
                   <td> <?php echo $prolist['pro_name']; ?></td>
                  
                    <td>  <?php echo $prolist['cl_first_name']; ?><?php echo $prolist['cl_last_name']; ?></td>
                    <td><?php echo $prolist['pro_type']; ?> </td>
                    <td> <?php echo $prolist['pro_budget_min']; ?><?php echo $prolist['pro_budget_max']; ?></td>
                    <td><?php echo $prolist['pro_bidclose']; ?> </td>
                    <td><a href="<?php echo WEB_URL ?>myProjects/projectView1?pd=<?php echo $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
                </tr>
                
              </tbody>
                       <?php } ?>
        </table>
	</div>
</div>