
<table class="inner-table">
      <tr class="thhead">
          <td>Recipient</td>
          <td>Date & Time</td>
          <td>Message</td>
          <td colspan="2">Action</td>
      </tr>
     
        <?php
           
        foreach ($sent as $details) { ?>
      <tr>
          <td>
           
              <?php 
            if($details['msg_status']==3){ ?>
              <?php echo $details['cl_first_name'].' '.$details['cl_last_name']; ?>
              <?php } 

 else {
 
     echo 'admin';
 }
              ?>
           
          </td>
          <td><?php echo $details['msg_date']; ?></td>
          <td><?php echo $details['msg_text']; ?></td>
          <td><a href="<?php echo WEB_URL; ?>Tmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
          
      </tr>
      <?php } ?>
 
</table>
		
		
    </div>    
        <!--end-->
</div>