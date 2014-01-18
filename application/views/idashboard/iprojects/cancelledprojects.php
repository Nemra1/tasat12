<form id="cancelledform" action="<?php echo WEB_URL; ?>myProjects/changeStatus" method="POST">	

		<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
			<thead>
			<tr class="table_th">
				<td>Project Name </td>
				<td>Project Type </td>
				<td>Client Name </td>
				<td>Start Date</td>
				<td>End Date</td>
                                 <td>Status</td>
				<td colspan="2"><center>Action</center></td>
			</tr>
			</thead>
			<?php foreach ($cancelled as $prolist) { ?>
			<tbody>
			<tr class="quicklinks_img">
             <td> <?php echo $prolist['pro_name']; ?></td>
               <input type="hidden" name="pid"  id="pro" value="<?php echo $prolist['pro_id_pk']; ?>" />
            <td><?php echo $prolist['pro_type']; ?> </td>
            <td>  <?php echo $prolist['cl_first_name']; ?><?php echo $prolist['cl_last_name']; ?></td>
            <td><?php echo $prolist['pro_bidclose']; ?> </td>
            <td><?php echo $prolist['pro_completion']; ?> </td>
             <td><select name="status" class="ab">
                    <option>Change Status</option> 
                    <option value="1">Ongoing</option>
                    <option value="2">Onhold</option>
                    <option value="3">Completed</option>
                    
                    <option value="5">Archive</option></td>
				<td><a href="<?php echo WEB_URL ?>myProjects/trackProject?id=<?php echo  $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
				
			</tr>
		  <?php  }?>
		</table>
		
		
		
    </div>    
        <!--end-->
</div>
<script>
$('.ab').change(function(){
$( "form:first" ).submit();
 });
                   
</script>