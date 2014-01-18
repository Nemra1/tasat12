
<table class="inner-table">
      <tr class="thhead">
          <td>Recipient</td>
          <td>Date & Time</td>
          <td>Message</td>
          <td colspan="2">Action</td>
      </tr>
      <?php foreach($sent as $details){ ?>
      <tr>
          <td>
              <?php if($details['user_type']==1){ ?>
              <?php echo $details['cl_first_name'].' '. $details['cl_last_name']; ?>
              <?php
              }
              elseif($details['user_type']==2){
                      echo $details['it_first_name'].' '.$details['it_last_name']; 
              }
              else{
                  echo $details['tc_first_name'];
              }
              ?>  
          </td>
          <td><?php echo $details['msg_date'];?></td>
         
          <td><?php echo $details['msg_text'];?></td>
           <input type="hidden" name="pid" value="<?php echo $details['msg_project_id']; ?>"/>
          <td><a href="<?php echo WEB_URL; ?>admin/Message?msgid=<?php echo $details['msg_id']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
          
      </tr>
  
<?php } ?>
</table>

    </div>    
        <!--end-->
</div>