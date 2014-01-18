<script type="text/javascript">
$(document).ready(function(){
$('#tabs div').hide();
$('#tabs div:first').show();
$('#tabs ul li:first').addClass('active');
$('#tabs ul li a').click(function(){ 
$('#tabs ul li').removeClass('active');
$(this).parent().addClass('active'); 
var currentTab = $(this).attr('href'); 
$('#tabs div').hide();
$(currentTab).show();
return false;
});
    
    
$(document).ready(function(){
     $('#tasatmsg00').hide();
 $('input[name=feedback]').click(function(){
 // alert($('input[name=feedback]:checked').val());
// if($('input[name=feedback]:checked').val()=='TASAT')
//     {
         $('.trans,#tasatmsg00').toggle();
//     }
 });
});


});
</script>
	
		
		<table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="quicklinks">
				<td colspan='5'>
				<span>Feedback</span>
				</td>
			</tr>
			</thead>
                </table>
<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
            <td colspan='5'>
                                    <div class="head-blue" style="background-color: #EAE1E6;">View Feedbacks from
                                      
           <div style="margin-right:10px; float:right"> <input type="radio" name="feedback" value="Translators" checked="checked">Client
                  <input type="radio" name="feedback" value="TASAT">Translator</div></div>
				</td></tr>
            </thead>
</table>

			


<p></p>


<div class="left-in-main ffeft">
  
       
<div class="dispute-list">
    

    <div class="dispute-chat">

        <ul class="chat-ul">
              <div class="trans">
            <li class="chatboxleft">
                  
            <span class="msgsenderleft"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div  class="chatmsgleft translator">
                <span class="msgdatetimeleft"><a href="#">Joe Smith</a> at 18/07/2013, 11:09</span>
                <span class="msgbodyleft">
                   I was impressed at the quality of articles for the price. The writer delivered on time within the requirements that I needed. Got another job ready for him already. 
                </span>
                
            </div>
            </li>
            
            <div class="trans">
            <li class="chatboxleft">
            <span class="msgsenderleft"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgleft translator">
                <span class="msgdatetimeleft"><a href="#">Jane</a> at 18/07/2013, 11:09</span>
                <span class="msgbodyleft">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
            </div>
            </div>
              </div>
            </li>
         
            <div id="tasatmsg00">
            <li class="chatboxleft">
            <span class="msgsenderleft"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgleft tasatmsg">
                <span class="msgdatetimeleft"><a href="#">TASAT</a> at 18/07/2013, 10:00</span>
                <span class="msgbodyleft">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
            </div>
            </div>
            </li>
        </ul>
    </div>
</div>

</div>


			
                                                                    
                                                                                                                                
                   

<p></p>


<div>
<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
        <span>Post Feedback</span></a>
        <hr />
        </td>
</table>

<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
            <td colspan='5'>
                                    <div class="head-blue" style="background-color: #EAE1E6;">Select User 
                                        <div style="margin-right: 10px; float: right"> <input type="radio" value="client" checked="checked"/>client
                                    <input type="radio" value="translator"/>translator</div></div>
				</td></tr>
            </thead>
</table>
    
 <table cellspacing="0" cellpadding="0" border="0" >
        <form>
		<tbody>	
        	<tr class="quicklinks_img">
				<td><b>Name </b></td>
				<td> <select name="projlang_from" id="projlang_from" class="myselect">
						<option>Sattar</option>
						<option>Ulan</option>
						<option>Sasha</option>
						<option>Azamat</option>
						<option>Nartay</option>
						<option>Tselmeg</option>
						<option>Alexander</option>
						<option>omar</option>
						<option>Nursultan</option>
					</select>
</td>
			</tr>
        	
            
            <tr class="quicklinks_img">
				<td> <b> Message </b></td>
				<td> <textarea cols="33" rows="5" style="resize:none;"></textarea></td>
			</tr>
            <tr>
				<td> &nbsp; </td>
				<td><input type="button" value="SUBMIT" /></td>
			</tr>
		</tbody>	
        </form>
 </table>

</div>


<div>
<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
        <span>Rate User</span></a>
        <hr />
        </td>
</table>

<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
            <td colspan='5'>
                                    <div class="head-blue" style="background-color: #EAE1E6;">Select User 
                                        <div style="margin-right: 10px; float: right"> <input type="radio" value="client" checked="checked"/>client
                                    <input type="radio" value="translator"/>translator</div></div>
				</td></tr>
            </thead>
</table>
<table cellspacing="0" cellpadding="0" border="0" >
        <form>
		<tbody>	
        	<tr class="quicklinks_img">
				<td><b>Name </b></td>
				<td> 
                                    <select name="projlang_from" id="projlang_from" class="myselect">
						<option>Sattar</option>
						<option>Ulan</option>
						<option>Sasha</option>
						<option>Azamat</option>
						<option>Nartay</option>
						<option>Tselmeg</option>
						<option>Alexander</option>
						<option>omar</option>
						<option>Nursultan</option>
					</select>
                                </td>
			</tr>
        	<tr class="quicklinks_img">
				<td><b>Email </b></td>
				<td><input type="text" class="text"/></td>
			</tr>
            <tr class="quicklinks_img">
				<td><b>Rating </b></td>
				<td> 
					<img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
				</td>
			</tr>
            <tr class="quicklinks_img">
				<td> <b> Message </b></td>
				<td> <textarea cols="33" rows="5" style="resize:none;"></textarea></td>
			</tr>
            <tr>
				<td> &nbsp; </td>
				<td><input type="button" value="SAVE" /></td>
			</tr>
		</tbody>	
        </form>
</table>
</div>


</div>



</div>