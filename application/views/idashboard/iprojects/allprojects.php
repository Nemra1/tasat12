	
    <div style="clear:both"> </div>
		
		<table cellspacing="0" cellpadding="0" border="0" >
                <thead>
                <tr class="table_th">
                    <td>Project Name</td>
                    <td>Project Type</td>
                    <td>Project Amount</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
                </thead>
              <?php foreach($all as $prolist){ ?>
                                    
			<tbody>
			<tr class="quicklinks_img">
            <td> <?php echo $prolist['pro_name']; ?></td>
            <td><?php echo $prolist['pro_type']; ?> </td>
            <td><?php echo $prolist['pro_budget_min']; ?></td>
            <td><?php   $var= $prolist['pro_status'];
                    if($var!=0)
                    {
                      if($var==1){
                      $var="Ongoing";  
                       echo $var; 
                    }
                    elseif($var==2) {   
                       $var="Onhold";     
                     echo $var; 
                }
                elseif($var==3){
                 $var="Completed";     
                 echo $var; 
                }
 elseif($var==4) {
        $var="Cancelled"; 
        echo $var; 
 } 
 else{
     $var="Archive"; 
        echo $var; 
 }
              }?></td>
                    <td><a href="<?php echo WEB_URL ?>myProjects/trackProject?id=<?php echo  $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
                </tr>
                       </tbody>
                    <?php } ?>
        </table>
    		
	  <?php
                  if (!empty($pagination)) {
                                    echo "<div align='center'><font color='red'>" . $pagination . "</font></div>";
                                }
                                ?>
	</div>
</div>