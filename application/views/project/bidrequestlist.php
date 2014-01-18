
<?php
//print_r($bidit);
//print_r($bid);
?>
<div style="clear:both"> </div>

<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="table_th">
        <td>Client Name</td>
        <td>Project Name</td>
        <td>Project Type</td>
        <td>Budget</td>
        <td>Bidded Closure Date</td>
        <td>Action</td>
        </tr>
    </thead>
    <tbody>
<?php foreach ($bid as $prolist) { ?>
            <tr class="quicklinks_img">
            <td> <?php echo $prolist['cl_first_name']." ".$prolist['cl_last_name']; ?></td>
            <td> <?php echo $prolist['pro_name'];?></td>
            <td><?php echo $prolist['pro_type']; ?> </td>
            <td> <?php echo $prolist['pro_budget_min']; ?>-<?php echo $prolist['pro_budget_max']; ?></td>
            <td><?php echo $prolist['pro_bidclose']; ?> </td>
            <td><a href="javascript:void(0);" rel="<?php echo $prolist['pro_id_pk']; ?>" class="bidpro"><input type="button" class="button" value="Bid"/></a></td>
            </tr>
<?php } ?>
    </tbody>
</table>
</div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
     $(".bidpro").click(function(){
         var proval=$(this).attr('rel');
         var action="<?php echo WEB_URL; ?>myProjects/updateafterbid";
         var actiontarget="<?php echo WEB_URL; ?>myProjects/bidProject";
         $.ajax({
             url:action,
             type: "POST",
             data:{proval:proval},
             success: function(data){
                 var actiontarget="<?php echo WEB_URL; ?>myProjects/bidProject";
                 location.href=actiontarget;
             }
         });
     });
 });
</script>