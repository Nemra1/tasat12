<style>
    #back{ float: left; margin-left: 0px;}
    #archiveclient{ float: left; margin-left: 110px; }
</style>
<br><br><br>
<input type="button" class="button but" value="Back To Inbox" name="back" id="back" onclick="inbox();"/> 
<input type="button" class="button but" value="Add to Archive" name="archive" id="archiveclient" onclick="archive();"/> 
	<?php
        //echo $msgid."..".$name1."..".$date."..".$text."..".$pro_id."..".$pro_name;
        //foreach ($msg as $details) {
          
        ?>
<div class="msg">
    	<div id="msg-top" style="background:#A7EFFE; padding:5px;">
        
        <div style="border-bottom:1px solid #999; width:100%; height:27px;"><h1 style="width:200px; float:left;"><?php echo $name1."user_id=".$user_id; ?></h1><span style="float:right; margin-right:20px; padding-top:10px; font-weight:900;">21min ago</span></div>
        <div style="clear:both"></div>
        <h3><span style="color:#000;">Project:</span> <?php echo $pro_name."project_id=".$pro_id;; ?></h3>
        <span style="color:#000; font-weight:bold; font-size:14px;">Message: </span><p> <?php echo $text; ?></p>
    	</div>
    </div>
<form action="<?php echo WEB_URL; ?>admin/replyMessage" method="POST" id="form_11">
<input type="hidden" name="msgid" id="msg_id" value="<?php echo $msgid; ?>"/>
<input type="hidden" name="pid" value="<?php echo $pro_id; ?>"/>
<input type="hidden" name="uid" value="<?php echo $user_id; ?>"/>
<!--<input type="hidden" name="tid" value="<?php //echo $details['msg_translator_id']; ?>"/>-->
   <?php //}?>
    <div class="reply">
    	<p>Reply to this Message:</p>
      	<textarea name="reply"></textarea>
        <input type="submit" class="button" class="replysend" value="Send"/>
    </div>
</form>
<div style="clear:both"></div>
    <div class="chat">
        <div><h3>View Previous Conversation</h3></div>
 <div class="left-in-main ffeft">
<div class="dispute-list">
    <div class="dispute-chat">
        <?php// foreach ($pre as $details) {?>
        <ul class="chat-ul">
            <?php  $i=0;
 //print_r($inboxdata);exit;
 //echo sizeof($inboxdata);
 //exit;
  //echo $inboxdata['msg_project_id'];
        foreach ($inboxdata as $in){
            
           //echo $in['user_type'];
//            $mod=($i % 2);
//            if($mod==0){
//                $liclass="chatboxleft";
//                $spanclass="msgsenderleft";
//                $divclass="chatmsgleft translator";
//                $spanclass1="msgdatetimeleft";
//                $spanclass2="msgbodyleft";
//            }else if($mod==1){
//                $liclass="chatboxright";
//                $spanclass="msgsenderright";
//                $divclass="chatmsgright client";
//                $spanclass1="msgdatetimeright";
//                $spanclass2="msgbodyright";
//            }
            
            if($in['msg_status']==2 || $in['msg_status']==4){
                $liclass="chatboxleft";
                $spanclass="msgsenderleft";
                $divclass="chatmsgleft translator";
                $spanclass1="msgdatetimeleft";
                $spanclass2="msgbodyleft";
            }else if($in['msg_status']==6 || $in['msg_status']==7){
                $liclass="chatboxright";
                $spanclass="msgsenderright";
                $divclass="chatmsgright client";
                $spanclass1="msgdatetimeright";
                $spanclass2="msgbodyright";
            }
            
            
            if($in['user_type']==1)
            {
                $name1=$in['cl_first_name'].''.$in['cl_last_name'];
                $date=$in['msg_date'];
                $text=$in['msg_text'];
                $pro_id=$in['msg_project_id'];
            }else if($in['user_type']==2){
                $name1=$in['it_first_name'].''.$in['it_last_name'];
                $date=$in['msg_date'];
                $text=$in['msg_text'];
                $pro_id=$in['msg_project_id'];
            }else if($in['user_type']==3){
                $name1=$in['tc_first_name'];
                $date=$in['msg_date'];
                $text=$in['msg_text'];
                $pro_id=$in['msg_project_id'];
            }else if($in['user_type']!=1 && $in['user_type']!=2 && $in['user_type']!=3){ $name1="You";}
            ?>
            <li class="<?php echo $liclass;?>">
                <?php// if($details['msg_status']==1) {?>
            <span class="<?php echo $spanclass; ?>"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            
            <div class="<?php echo $divclass; ?>">
                <span class="<?php echo $spanclass1; ?>"><a href="#"><?php echo $name1;?></a><?php echo $date; ?></span>
                <span class="<?php echo $spanclass2; ?>">
                <?php echo $text; ?>
                </span>
                
            </div>
            <?php //} ?>
            </li>
        <?php $i++; } ?>
             </ul>
        <?php// } ?>
    </div>
</div>

</div> 
    </div>
<div class="more"> <a href="#">View More</a> </div>
     
    </div>    
        <!--end-->
</div>
<script>
    
    $(document).ready(function(){
//        $(".replysend").on('click',function(){
//            var array=$("#form_11").serializeArray();
//            console.log(array);
//           
//        });
$( "#form_11" ).submit(function( event ) {
  console.log( $( this ).serializeArray() );
  event.preventDefault();
  var formdata=$( this ).serializeArray() ;
  var action=$("#form_11").attr("action");
  $.ajax({
      url:action,
      type:"POST",
      data:formdata,
      success:function(result){
          //alert(result);
            $('.table_grid').html(result);
      }
  });
});
    });
    
    
   function archive(){
var a=document.getElementById('msg_id').value;
alert(a);return false;
window.location.href='<?php echo WEB_URL; ?>cmessages/Archive?msgid='+a;
}

function inbox(){
    window.location.href='<?php echo WEB_URL; ?>admin/inboxMessage';
}
</script>