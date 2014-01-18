
<div style="clear:both"> </div>

<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="table_th">
        <td>Project Id</td>
        <td>Project Name</td>
        <td>Project Type</td>
        <td>Translator Name</td>
        <td>Bid Amount (USD)</td>

        </tr>
    </thead>
    <?php foreach ($archive as $prolist) { ?>
        <tbody>
             <?php   $type = $this->session->userdata('login_user_type'); ?>
            <tr class="quicklinks_img">
            <td><?php echo $prolist['pro_id_pk']; ?> </td>
            <td> <?php echo $prolist['pro_name']; ?></td>
            <td><?php echo $prolist['pro_type']; ?> </td>

    <td> <?php if(( $prolist['user_type'])==2)
                                    { ?>
                                     <?php echo $prolist['it_first_name'];?> <?php echo $prolist['it_last_name']; ?>
                                 <?php  } 
                                else
                                { ?>
                               <?php echo $prolist['tc_first_name'];?> 
                                
                             <?php   } ?>
                                </td>
            <td><?php echo $prolist['bid_amount']; ?> </td>

          <!--<td><a href="<?php echo WEB_URL ?>projects/projectView1"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>-->
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</div>
