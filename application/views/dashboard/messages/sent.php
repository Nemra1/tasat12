
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
            if($details['msg_status']==1 && $details['user_type']==2){ ?>
              <?php echo $details['it_first_name'].' '.$details['it_last_name']; ?>
              <?php } 
 elseif ($details['msg_status']==1 && $details['user_type']==3) {
     echo $details['tc_first_name'];
 }
 else {
 
     echo 'admin';
 }
              ?>
           
          </td>
          <td><?php echo $details['msg_date']; ?></td>
          <td><?php echo $details['msg_text']; ?></td>
          <input type="hidden" name="pid" value="<?php echo $details['msg_project_id']; ?>"/>
          <td><a href="<?php echo WEB_URL; ?>Cmessages/Message?msgid=<?php echo $details['msg_id']; ?>&pid=<?php echo $details['msg_project_id']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
          
      </tr>
        <?php } ?>
</table>
	
		
    </div>    
        <!--end-->
</div>