
<table class="inner-table">
      <tr class="thhead">
          <td>Sender</td>
          <td>Date & Time</td>
          
          <td>Message</td>
          <td colspan="2">Action</td>
      </tr>
      <?php foreach ($inbox as $details) { ?>
      <tr>
          <td>
              <?php echo $details['cl_first_name'].' '.$details['cl_last_name']; ?></td>
          <td><?php echo $details['msg_date']; ?></td>
          <td><?php echo $details['msg_text']; ?></td>
         <input type="hidden" name="pid" value="<?php echo $details['msg_project_id']; ?>"/>
          <td><a href="<?php echo WEB_URL; ?>Tmessages/Message?msgid=<?php echo $details['msg_id']; ?>&pid=<?php echo $details['msg_project_id']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
         
      </tr>
 
      <?php } ?>
      
  </table>

    </div>    
        <!--end-->
</div>