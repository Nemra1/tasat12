
		<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
			<thead>
			<tr class="table_th">
                                <td>Display Picture</td>
                                <td>Project Name </td>
				<td>Translator Name </td>
				<td>Location</td>
				<td>Expertise</td>
				
                                <td>Gender</td>
                 		<td>Bid Amount</td>
				<td width="40px"><center>Action</center></td>
                                
			</tr>
			</thead>
                    <tbody>
		   <?php foreach ($list as $details) {?>
			<tr class="quicklinks_img">
            	                <td><img src="<?php echo IMG_PATH ?>images/dpc.jpg"  class="dp"/></td>
                                <td><?php echo $details['pro_name'];?></td>
                                <td><?php if($details['user_type']==2){
                                     echo $details['it_first_name'].' '.$details['it_last_name']; 
                                }
                                else{
                                  echo $details['tc_name'];  
                                }
                                ?></td>
				<td><?php if($details['user_type']==2){
                                     echo $details['it_country']; 
                                }
                                else{
                                  echo $details['tc_country'];  
                                }
                                ?></td>
                   <td><?php if($details['expertise_id_fk']==1){
                       echo 'Consequential Translation';
                                }
                                elseif ($details['expertise_id_fk']==2) {
                                echo 'Simultaneous Translation';
                            }
                            elseif ($details['expertise_id_fk']==3) {
                            echo 'Written Translation';
                        }   
                        else{
                            echo 'Online Interpretation';
                        }
                                ?></td>
				
                <td><?php if($details['user_type']==2){
               if($details['it_patronymic']=='Mr.'){
                   echo 'Male';
               }
               else{
                   echo 'Female';
               } 
                              } 
               else
               {
                  
             echo '-';
               }?></td>
                       
				<td><?php echo $details['bid_amount'];?></td>
				<td>
                                    <a data-toggle="modal" class="button" role="button" href="#myModal">Request Bid</a>
  <!--<a href="<?php echo WEB_URL; ?>tastatranslators/track_requestbid"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>-->
                               
			</tr>
                            <?php }?>
		
		  </tbody>
		</table>
		
		
		
    </div>    
        <!--end-->
</div>

