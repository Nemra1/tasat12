
<?php //print_r($tractporjlisttc);?>
<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
    <thead>
        <tr class="table_th">
            <td>Display Picture</td>
            <td>Translator Name </td>
            <td>Location</td>
            <td>Project Name</td>
            <td>Project Type</td>
            <td>Bid Close</td>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($tractporjlistit)){foreach ($tractporjlistit as $itvalue) {?>
        <tr class="quicklinks_img">
            <td><img src="<?php echo IMG_PATH ?>images/dpc.jpg"  class="dp"/></td>
            <td><?php  echo $itvalue['it_first_name']." ".$itvalue['it_last_name']?></td>
            <td><?php echo $itvalue['country_name'];?></td>
            <td><?php echo $itvalue['pro_name'];?></td>
            <td><?php echo $itvalue['pro_type'];?></td>
            <td><?php echo $itvalue['pro_bidclose'];?></td>
            <td><?php if($itvalue['bid_request_status']==0){ echo "Bid Requested";}else{echo "Translator Bided";}?></td>
        </tr>
        <?php  } }?>
        <?php if(!empty($tractporjlisttc)){foreach ($tractporjlisttc as $tcvalue) {?>
        <tr class="quicklinks_img">
            <td><img src="<?php echo IMG_PATH ?>images/dpc.jpg"  class="dp"/></td>
            <td><?php  echo $tcvalue['tc_first_name']?></td>
            <td><?php echo $tcvalue['country_name'];?></td>
            <td><?php echo $itvalue['pro_name'];?></td>
            <td><?php echo $tcvalue['pro_type'];?></td>
            <td><?php echo $tcvalue['pro_bidclose'];?></td>
            <td><?php if($tcvalue['bid_request_status']==0){ echo "Bid Requested";}else{echo "Translator Bided";}?></td>
        </tr>
        <?php  }}?>
    </tbody>
</table>
</div>

</div>