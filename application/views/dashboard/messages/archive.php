
<table class="inner-table">
      <tr class="thhead">
          <td width="200px">Project Name</td>
          <td width="100px">Client Name</td>
          <td  width="150px">Translator Name</td>
                <td width="150px">Date</td>
                     
<!--          <td colspan="2" width="50px">Action</td>-->
      </tr>
    <?php   foreach ($archive as $details) { ?>
      <tr>
          <td><?php echo  $details['pro_name'];?></td>
          <td> <?php echo  $details['cl_first_name'];?></td>
          <td><?php echo  $details['it_first_name'];?></td>
           <td><?php echo  $details['msg_date'];?></td>
          <!--<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>-->
          
      </tr>
   
  <?php }?>
  </table>
		
		
    </div>    
        <!--end-->
</div>