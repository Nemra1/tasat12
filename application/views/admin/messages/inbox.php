<?php //print_r($inboxdata);?>
<style>
   /* .hover{background-color:#ddd;cursor:pointer;}*/
   .in{ height: 30px;}
   .in:hover{ background-color: #ddd; cursor: pointer;}
</style>
<table class="inner-table">
    <thead>
        <tr class='thhead' height="30px;">
            <td width="15%;">Sender</td>
          <td width="15%">Date & Time</td>
          <td width="70%">Message</td>
          <!--<td>Action</td>-->
        </tr>
    </thead>
    <tbody>
        <?php  $i=0;
        foreach ($inboxdata as $in){ 
            //echo $in['msg_project_id'];
            if($in['user_type']==1)
            {
                $name1=$in['cl_first_name'].''.$in['cl_last_name'];
                $date=$in['msg_date'];
                $text=$in['msg_text'];
                $pro_id=$in['msg_project_id'];
                $pro_name=$in['pro_name'];
                $user_id=$in['user_id_fk'];
            }else if($in['user_type']==2){
                $name1=$in['it_first_name'].''.$in['it_last_name'];
                $date=$in['msg_date'];
                $text=$in['msg_text'];
                $pro_id=$in['msg_project_id'];
                $pro_name=$in['pro_name'];
                $user_id=$in['user_id_fk'];
            }else if($in['user_type']==3){
                $name1=$in['tc_first_name'];
                $date=$in['msg_date'];
                $text=$in['msg_text'];
                $pro_id=$in['msg_project_id'];
                $pro_name=$in['pro_name'];
                $user_id=$in['user_id_fk'];
            }
            ?>
        <tr id="<?php echo $i;?>" class='in'>
            <td><?php echo $name1; ?></td>
            <td><?php echo $date; ?></td>
            <td style="white-space: nowrap; overflow: hidden;"><?php echo $text; ?></td>
                <input type="hidden" class='hid' id="m_id<?php echo $i;?>" name='msg_id' value='<?php echo $in['msg_id']; ?>' />
                <input type="hidden" class='hid' id="name<?php echo $i;?>" name='name' value='<?php echo $name1; ?>' />
                <input type="hidden" class='hid' id="date<?php echo $i;?>" name='date' value='<?php echo $date; ?>' />
                <input type="hidden" class='hid' id="text<?php echo $i;?>" name='text' value='<?php echo $text; ?>' />
                <input type="hidden" class='hid' id="pro_id<?php echo $i;?>" name='proid' value='<?php echo $pro_id; ?>' />
                <input type="hidden" class='hid' id="pro_name<?php echo $i;?>" name='proname' value='<?php echo $pro_name; ?>' />
                <input type="hidden" class='hid' id="user_id<?php echo $i;?>" name='userid' value='<?php echo $user_id; ?>' />
<!--            <td><a href="javascript:void(0);"><img src="<?php //echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>-->
        </tr>
        <?php
           $i++;
            } ?>
    </tbody>
  </table>

		
		
    </div>    
        <!--end-->
</div>
<script type='text/javascript'>
$(document).ready(function(){ 
    
    //setCellText();
    
    var m_id=$(".hid").val();
    var action="<?php echo WEB_URL;?>admin/Message";
    $(".in").bind('click', function(){
        var r_id=$(this).attr("id");
        var msg_id=$("#m_id"+r_id).val();
        var name=$("#name"+r_id).val();
        var date=$("#date"+r_id).val();
        var text=$("#text"+r_id).val();
        var pro_id=$("#pro_id"+r_id).val();
        var pro_name=$("#pro_name"+r_id).val();
        var user_id=$("#user_id"+r_id).val();
        var data={r_id:r_id,msg_id:msg_id,name:name,date:date,text:text,pro_id:pro_id,pro_name:pro_name,user_id:user_id};
        //alert(msg_id+".."+name+".."+date+".."+text+".."+pro_id);
        //return false;
        $.ajax({
                url: action,
                type: "POST",
                data: data,
                success: function(response)
                {
                     $('.table_grid').html(response);
                }
    });
    });
  
});
//function setCellText()
//{
//   cellElement = document.getElementById('textCell');
//   textBoxElement = document.getElementById('cellText');
//   cellElement.innerHTML = 
//       autoEllipseText(cellElement, textBoxElement.value, 80);
//}
</script>   