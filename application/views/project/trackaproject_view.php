<script type="text/javascript">
$(document).ready(function(){
$('#tabs div').hide();
$('.tab2').hide();
$('#tabs div:first').show();
$('#tabs ul li:first').addClass('active');
$('#tabs ul li a').click(function(){ 
$('#tabs ul li a').removeClass('active');
$(this).addClass('active'); 
var currentTab = $(this).attr('href'); 
$('#tabs div').hide();
$(currentTab).show();
return false;
});
$('#tab_button_1').click(function(){
    $('.tab2,.tab1').toggle();
    //$('.tab1').show();
});

$('#tab_button_2').click(function(){
     $('.tab2,.tab1').toggle();
    //$('.tab2').show();
});
//$('#tabs').smartTab({autoProgress: false,stopOnFocus:true,transitionEffect:'vSlide'});
});// ready function end
</script>
	<div class="left-in-main fleft">
<div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10" id="name">

    <?php foreach($clientdetails as $details){ ?>
<table cellspacing="0" cellpadding="0" border="0" class="option3">
    
			<tr>
				<td>
                                    <div>
                                    <b>Project Name:</b> <a href="#"><?php echo $details['pro_name']; ?></a>
                                    </div>
				</td>
			
			</tr>
                        
             <tr>
				<td>
                                    <div>
                                    <b>Translator Name:</b> <a href="#"> <?php foreach($translator as $trans){ ?><?php if(isset($trans['it_name'])){ echo $trans['tc_name'];} else { echo $trans['it_first_name'].' '.$trans['it_last_name'];}?>  <?php } ?></a>
                                    </div>
				</td>
			
			
			</tr>     
                         <tr>
				<td>
                                    <div>
                                    <b>Client Name:</b> <a href="#"><?php if(isset($details['cl_first_name'])){ echo $details['cl_first_name'];} ?> </a>
                                    </div>
				</td>
			
			</tr>  
    
</table>
     <?php } ?>   
</div>
</div> 
<div class="center-in-main fcenter">
<div class="bid-amount">
<div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10 " id="wellb">
    <table cellspacing="0" cellpadding="0" border="0" class="option3">    
        <tr>
	<td>
                                    <div>
                                    <b>Bid Amount:</b> <?php foreach($translator as $trans){ ?><?php if(isset($trans['bid_amount'])){echo $trans['bid_amount'];} ?>  <?php } ?>
                                    </div>
				</td>
               
        </tr>
          <tr>
			<td>
                                    <div>
                                    <b>Duration of Project:</b><?php  if(isset($details['pro_duration'])) {echo $details['pro_duration']; }?>
                                    </div>
				</td>
        </tr>
       		
          <tr>
		<td>
                                  <b>Elapsed Time:</b> 48 hours
				</td>
        </tr>     
    </table>
   
</div>
</div> 
         <div class="right-in-main fright">
    <div class="files">
    <div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10" id="wellf" >
    <table cellspacing="0" cellpadding="0" border="0" class="option3">
        
        <tr>				<td>
                                    <div>
                                    <b>Files</b>  
                                    </div>
				</td>
        </tr>
          <tr>
				
				<td>
                                    <div>
                                   <a href="#">Pro.doc</a></td>
                                    </div>
				</td>
        </tr>
        
				
          <tr>
				
				<td>
                                   <a href="#">Track.pdf    </a></td>
				</td>
        </tr>
        
        
    </table>
    </div>
    

</div>
</div>
</div>


  		               <table cellspacing="0" cellpadding="0" border="0" width="100%" >
                    <thead>
                        
                        <tr class="quicklinks">
                        <td colspan='5'>
                        <span>Payments</span>
                        </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table_th">
                        <td>
                           <div id="tabs">
  			<ul id="switch_ul" >
                                    <li><a class="active" href="#tab-1">Payments Received</a></li>
                                    <li><a href="#tab-2">Payments Made</a></li>
                                    </ul>
                               <div id="tab-1" >
                                   
                                    <table class="inner-table" id="inner-table1">
                                       
                   <tr>
										<td colspan="6"><span style="font-size:15px;font-weight:bold;">Payments Received From Client To Translator</span></td>
									</tr>
									<tr class="thhead">
										<td>SL.No</td>
                                                                                <td>Payment Received From</td>
                                                                                <td>Amount</td>
										<td>Invoice No</td>
										<td>Invoice Date & Time</td>
										<td>Status</td>
                                                                                <td>Mode Of Payments</td>
                                                                          
										
									</tr>
									<tr id="row_1">
										<td>1</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Peter</a></td>
                                                                                <td>$300</td>
                                                                                <td>IN-2013111</td>
										<td>24/06/2013 05:30 PM</td>
										<td>Paid</td>
                                                                                <td>CreditCard </td>
										
										
									</tr>
									<tr>
										<td>2</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">John</a></td>
                                                                                <td>$200</td>
                                                                                <td>IN-2013111</td>
										<td>24/06/2013 05:30 PM</td>
										<td>Unpaid</td>
                                                                                <td>CreditCard </td>
										
									</tr>
									<tr>
										<td>3</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Nursultan</a></td>
                                                                                <td>$700</td>
                                                                                <td>IN-2013111</td>
										<td>24/06/2013 05:30 PM</td>
										<td>Paid</td>
                                                                                <td>PayPal</td>
										
									</tr>
									<tr>
										<td>4</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Azamat</a></td>
                                                                                <td>$900</td>
                                                                                <td>IN-2013111</td>
										<td>24/06/2013 05:30 PM</td>
										<td>Unpaid</td>
                                                                                <td>PayPal</td>
										
									</tr>
									<tr>
										<td>5</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Alice</a></td>
                                                                                <td>$300</td>
                                                                                <td>IN-2013111</td>
										<td>24/06/2013 05:30 PM</td>
										<td>Paid</td>
                                                                                <td>CreditCard </td>
										
									</tr>
									
                                    </table>   
                                                                          </div>
                                        <div id="tab-2">

                                           
                                            <table class="inner-table" id="inner-table2">

                            <tr>
										<td colspan="6"><span style="font-size:15px;font-weight:bold;">Payments Made By The Client To Translator</span></td>
									</tr>
									<tr class="thhead">
										<td>SL.No</td>
                                                                                <td>Payment Made To</td>
                                                                                <td>Amount</td>
										<td>Invoice No</td>
										<td>Invoice Date & Time</td>
										<td>Status</td>
                                                                                <td>Mode Of Payments</td>
                                                                    
									</tr>
									<tr id="row_1">
										<td>1</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Peter</a></td>
                                                                                <td>$300</td>
                                                                                <td>IN-2013000</td>
										<td>19/06/2013 05:30 PM</td>
										<td>Paid</td>
                                                                                <td>CreditCard </td>
								
									</tr>
									<tr>
										<td>2</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Nursultan</a></td>
                                                                                <td>$700</td>
                                                                                <td>IN-2013123</td>
										<td>20/06/2013 05:30 PM</td>
										<td>Paid</td>
                                                                                <td>CreditCard </td>
										
									</tr>
									<tr>
										<td>3</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Azamat</a></td>
                                                                                <td>$100</td>
                                                                                <td>IN-2013456</td>
										<td>04/06/2013 05:30 PM</td>
										<td>Unpaid</td>
                                                                                <td>PayPal</td>
										
									</tr>
									<tr>
										<td>4</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Alice</a></td>
                                                                                <td>$100</td>
                                                                                <td>IN-2013561</td>
										<td>22/06/2013 05:30 PM</td>
										<td>Paid</td>
                                                                                <td>PayPal</td>
										
									</tr>
									<tr>
										<td>5</td>
                                                                                <td> <a href="<?php echo WEB_URL; ?>home/viewClient">Peter</a></td>
                                                                                <td>$700</td>
                                                                                <td>IN-2013789</td>
										<td>27/06/2013 05:30 PM</td>
										<td>Unpaid</td>
                                                                                <td>CreditCard </td>
										
									</tr>
									
                                            </table>   
                                        </div>
                                                              </div>
                        </td>

                        </tr>

                    </tbody>
                </table>
    
  <div class="left-in-main fleft" style="padding:20px";>
 <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Messages</strong>
  <hr/>
 
      <div class="dispute-list">
    <div class="dispute-chat">
        <ul class="chat-ul">
            <li class="chatboxleft">
                
            <span class="msgsenderleft"></span>
            <div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div>
            <div class="chatmsgleft translator">
                
                <span class="msgdatetimeleft"><a href="#">Jane Doe</a> at 18/07/2013, 11:09</span>
                <span class="msgbodyleft">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
             
            </div>
            </li>
            <li class="chatboxright">
            <span class="msgsenderright"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
             
            <div class="chatmsgright client">
                  
                <span class="msgdatetimeright"><a href="#">Peter John</a> at 18/07/2013, 10:30</span>
             
                <span class="msgbodyright">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
               
            </div>
 
            </li>
           
             <li class="chatboxleft">
                 
            <span class="msgsenderleft"> <div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgleft translator">
                <span class="msgdatetimeleft"><a href="#">Jane Doe</a> at 18/07/2013, 11:09</span>
                <span class="msgbodyleft">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
                
            </div>
             </li>
        </ul>
    </div>
            <div class="dispute-chat">
        <ul class="chat-ul">
       
            <li class="chatboxright">
            <span class="msgsenderright"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgright client">
                <span class="msgdatetimeright"><a href="#">Peter John</a> at 18/07/2013, 10:30</span>
                <span class="msgbodyright">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
             
            </div>
                </li>
             <li class="chatboxleft">
            <span class="msgsenderleft"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgleft translator">
                <span class="msgdatetimeleft"><a href="#">Jane Doe</a> at 18/07/2013, 11:09</span>
                <span class="msgbodyleft">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
            </div>
            </li>
        </ul>
    </div>
</div>
</div>
		<hr>
		 <div class="left-in-main fleft">
  <br>
  <div class="dispute">
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px; ">Dispute </strong><b>From 5 days</b>
  <hr>
  </div>
 <div class="left-in-main ffeft">
  <div class="dispute-list">
    
    
    <div class="dispute-chat">
        <ul class="chat-ul">
            <li class="chatboxleft">
            <span class="msgsenderleft"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgleft translator">
                <span class="msgdatetimeleft"><a href="#">Jane Doe</a> at 18/07/2013, 11:09</span>
                <span class="msgbodyleft">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
                
            </div>
            </li>
            <li class="chatboxright">
            <span class="msgsenderright"><div class="msgimg">
                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
            </div></span>
            <div class="chatmsgright client">
                <span class="msgdatetimeright"><a href="#">Peter John</a> at 18/07/2013, 10:30</span>
                <span class="msgbodyright">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </span>
                
            </div>
            </li>
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
            </li>
        </ul>
    </div>
</div>

</div> 

  </div>
 	
    </div>    
        <!--end-->
</div>
<script>
$(document).ready(function() {
$("#1").click(function() {
    var thisId = $(this).attr('id');
    $("#row_" + thisId).remove();
   });
});
    </script>
