<form id="onholdform1" action="<?php echo WEB_URL; ?>projects/changeStatus" method="POST">	

<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
    <thead>
        <tr class="table_th">
        <td>Project Name </td>
        <td>Project Type </td>
        <td>Translator Name</td>
        <td>Project Amount</td>
        <td width="85px">Start Date</td>
        <td width="100px">End Date </td>
        <td width="100px">Status</td>
        <td width="40px"><center>Action</center></td>
        </tr>
    </thead>
    <?php foreach ($onhold as $prolist) { ?>
        <tbody>
            <tr class="quicklinks_img">
                    <input type="hidden" name="pid"  id="pro" value="<?php echo $prolist['pro_id_pk']; ?>" />
            <td> <?php echo $prolist['pro_name']; ?></td>
            <td><?php echo $prolist['pro_type']; ?> </td>
  <td><?php if(( $prolist['user_type'])==2)
                                    { ?>
                                     <?php echo $prolist['it_first_name'];?> <?php echo $prolist['it_last_name']; ?>
                                 <?php  } 
                                else
                                { ?>
                               <?php echo $prolist['tc_first_name'];?> 
                                
                             <?php   } ?>
                                
                                </td>

            <td> $<?php echo $prolist['pro_budget_min']; ?>- $<?php echo $prolist['pro_budget_max']; ?></td>
            <td><?php echo $prolist['pro_bidclose']; ?> </td>
            <td><?php echo $prolist['pro_completion']; ?> </td>

            <td>    <select name="status" class="ab">
                    <option>Change Status</option> 
                    <option value="1">Ongoing</option>
                    <option value="3">Completed</option>
                    <option value="4">Cancel</option>
                    <option value="5">Archive</option>
                </select>
            </td>
            <td><a href="<?php echo WEB_URL; ?>projects/trackProject?id=<?php echo $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
            <!--td><center><a href="#"><img src="<?php echo IMG_PATH; ?>images/Close.png" style="height:15px;width:15px;"/></a></center></td-->
            </tr>
        <?php } ?>
    </tbody>
</table>

</form>

</div>    
<!--end-->


</div>
<script>
$('.ab').change(function(){
$( "form:first" ).submit();
 });
                   
</script>