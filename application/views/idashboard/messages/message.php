<input type="button" class="button" value="Add to Archive" name="archive" id="archiveclient" onclick="archive();"/> 
	<?php foreach ($list as $details) {?>
<div class="msg">
    	<div id="msg-top" style="background:#A7EFFE; padding:5px;">
        
        <div style="border-bottom:1px solid #999; width:100%; height:27px;"><h1 style="width:200px; float:left;"><?php echo $details['it_first_name'].' '.$details['it_last_name']; ?></h1><span style="float:right; margin-right:20px; padding-top:10px; font-weight:900;">21min ago</span></div>
        <div style="clear:both"></div>
        <h3><span style="color:#000;">Project:</span> <?php echo $details['pro_name']; ?></h3>
        <span style="color:#000; font-weight:bold; font-size:14px;">Message: </span><p> <?php echo $details['msg_text']; ?></p>
    	</div>
    </div>
<form action="<?php echo WEB_URL; ?>cmessages/replyMessage" method="POST">
<input type="hidden" name="msgid" id="msg_id" value="<?php echo $details['msg_id']; ?>"/>
<input type="hidden" name="pid" value="<?php echo $details['msg_project_id']; ?>"/>
<input type="hidden" name="cid" value="<?php echo $details['msg_client_id']; ?>"/>
<input type="hidden" name="tid" value="<?php echo $details['msg_translator_id']; ?>"/>
   <?php }?>
    <div class="reply">
    	<p>Reply to this Message:</p>
      	<textarea name="reply"></textarea>
        <input type="submit" class="button" value="Send"/></form>
    </div>
<div style="clear:both"></div>
    <div class="chat">
        <div><h3>View Previous Conversation</h3></div>
 <div class="left-in-main ffeft">
<div class="dispute-list">
    <div class="dispute-chat">
        <?php foreach ($pre as $details) {?>
        <ul class="chat-ul">
            <li class="chatboxleft">
                <?php if($details['msg_status']==1) {?>
            <span class="msgsenderleft"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            
            <div class="chatmsgleft translator">
                <span class="msgdatetimeleft"><a href="#"> a</a><?php echo $details['msg_date']; ?></span>
                <span class="msgbodyleft">
                <?php echo $details['msg_text']; ?>
                </span>
                
            </div>
            <?php } ?>
            </li>
                <li class="chatboxright">
            <span class="msgsenderright">
                <?php if($details['msg_status']==3) {?>  
                <div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
              
            <div class="chatmsgright client">
                <span class="msgdatetimeright"><a href="#">Peter John</a> <?php echo $details['msg_date']; ?></span>
                <span class="msgbodyright">
              <?php echo $details['msg_text']; ?>
                </span>
                
            </div>
              <?php }?>
            </li>
             </ul>
        <?php } ?>
    </div>
</div>

</div> 
    </div>
<div class="more"> <a href="#">View More</a> </div>
     
    </div>    
        <!--end-->
</div>
<script>
    function archive(){
var a=document.getElementById('msg_id').value;
alert(a);
window.location.href='<?php echo WEB_URL; ?>cmessages/Archive?msgid='+a;
}
</script>