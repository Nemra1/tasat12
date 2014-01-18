
		<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
			<thead>
			<tr class="table_th">
				<td>Project Name </td>
				<td>Project Type </td>
				<td>Project Amount</td>
				<td>Status</td>
				<td width="40px" colspan="2"><center>Action</center></td>
			</tr>
			</thead>
                    <?php foreach($all as $prolist){ ?>
                  
               		<tbody>
			<tr class="quicklinks_img">
            <td> <?php echo $prolist['pro_name']; ?></td>
            <td><?php echo $prolist['pro_type']; ?> </td>
            <td><?php echo $prolist['pro_budget_min']; ?></td>
            <td><?php   
            $var1= $prolist['pro_status'];
                    if($var1==0){
                         $var1="New";  
                       echo $var1; 
                    }
                  else if($var1==1){
                      $var1="Ongoing";  
                       echo $var1; 
                    }
                    else if ($var1==2) {
                       $var1="Onhold";     
                     echo $var1; 
                }
                else if($var1==3){
                 $var1="Completed";     
                 echo $var1; 
                }
 else if($var1==4)
     
     {
        $var1="Cancelled"; 
        echo $var1; 
 } 
 else if($var1==5) {
     $var1="Archive"; 
        echo $var1; 
 }
 else{
     $var1="Bidded";
     echo $var1; 
 }
 ?></td>
<td><?php if($var1==0){ ?> 
    <a href="<?php echo WEB_URL; ?>projects/projectView2?id=<?php echo $prolist['pro_id_pk'];?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a>
    <?php }
    else{ ?>
    <a href="<?php echo WEB_URL; ?>projects/trackProject?id=<?php echo $prolist['pro_id_pk'];?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a>
<?php } ?>
</td>
			</tr>
		
		  </tbody>
                    <?php } ?>
		</table>
		
	  <?php
                  if (!empty($pagination)) {
                                    echo "<div align='center'>" . $pagination . "</div>";
                                }
                                ?>	
		
    </div>    
        <!--end-->
</div>