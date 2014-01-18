   
 <script type="text/javascript" src="../spec/support/jquery.js"></script>
        <script type="text/javascript" src="Scripts/editinplace/jquery.ui.js"></script>
        <script type="text/javascript" src="Scripts/editinplace/jquery.editinplace.js"></script>
        <script type="text/javascript" src="Scripts/editinplace/demo.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>
            $(document).ready (function () {
			
                $('.btnAdd').click (function () {       
				
                    $('.buttons').append('<div><input type="text" style="width:50px; margin-left:-197px;" value="Name" /><input type="text" style="width:50px;" value="Code"" /><input type="button" value="save"/><img src="../../images/minus-icon.gif" style="margin-left:30px ;" title="Remove" id="but" class="btnRemove" alt="HTML tutorial" width="23" height="22"/></div>'); // end append
                   
$('div .btnRemove').last().click (function () { 
$(this).parent().last().remove();    
}); // end click
                }); // end click                

           
            
             $('.btnAdd2').click (function () {       
				
                    $('.buttons2').append('<div><input type="text" style="width:50px; margin-left:0px;" value="Name" /><input type="text" style="width:50px;" value="Code"" /><input type="button" value="save"/><img src="../../images/minus-icon.gif" style="margin-left:30px ;" title="Remove" id="but" class="btnRemove2" alt="HTML tutorial" width="23" height="22"/></div>'); // end append
                   
$('div .btnRemove2').last().click (function () { 
$(this).parent().last().remove();    
}); // end click
                }); // end click                

             $('.btnAdd3').click (function () {       
				
                    $('.buttons3').append('<div><input type="text" style="width:120px; margin-left:0px;" value="Mode of Payments" /><input type="button" value="save"/><img src="../../images/minus-icon.gif" style="margin-left:30px ;" title="Remove" id="but" class="btnRemove3" alt="HTML tutorial" width="23" height="22"/></div>'); // end append
                   
$('div .btnRemove3').last().click (function () { 
$(this).parent().last().remove();    
}); // end click
                }); // end click   
                
                      $('#translator').hide();
	$('.opt').hide();
		$('[name="proj_type"]').click(function(){
                    $('#translator,#client').toggle();
							});

            }); // end ready
        </script>

     
  
     
     
     
     
     
     <div class="buttom-main" >
         <div class="left-in-main fleft" >
    <div class="language">
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Language List</strong>
  <hr/>

			<div id="invoice-list">	
        <table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="table_th">
				<td>Name</td>
				<td>Code</td>
				<td>Status</td>
				<td width="100">Change the Status</td>
                       		
			</tr>
			</thead>
			<tbody>
			<tr class="quicklinks_img">
				<td>English</td>
				<td>ENG</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td>
                               	
               
				
			</tr>
			<tr class="quicklinks_img">
				<td>French</td>
				<td>FCH</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
				  
                	</tr>
		  </tbody>
                  		<tbody>
			<tr class="quicklinks_img">
				<td>Spanish</td>
				<td>SPN</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                        		<tbody>
			<tr class="quicklinks_img">
                		<td>Russian </td>
				<td>RUS</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                </table>
 
  
  <div class="buttons">
          <p style="margin-left:40px ;"><img src="../../images/add_icon.png" title="Add"  class="btnAdd" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/>  
        </div>
      </div>
    </div>
       </div>
         <div class="left-in-main fleft" >
     <div class="currency" >
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Currency</strong>
  <hr />

			<div id="invoice-list">	
        <table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="table_th">
				<td>Country</td>
				<td>Currency</td>
                                <td>Code</td>
				<td>Status</td>
				<td  width="100">Change the Status</td>
                       		
			</tr>
			</thead>
			<tbody>
			<tr class="quicklinks_img">
				<td>Russia</td>
				<td>Ruble</td>
                                <td>Rub</td>
				<td>Active</td>
				<td ><a href="message1.html">Click to Change</a></td>
                               	
               
				
			</tr>
			<tr class="quicklinks_img">
				<td>French</td>
				<td>Euro</td>
                                 <td>Eur</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
				  
                	</tr>
		  </tbody>
                  		<tbody>
			<tr class="quicklinks_img">
				<td>Italy</td>
				<td>Euro</td>
                                <td>Eur</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                        		<tbody>
			<tr class="quicklinks_img">
                		<td>China</td>
				<td>Renminbi</td>
                                 <td>Rub</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                        		
		</table>
   <div class="buttons2">
          <p style="margin-left:250px ;"><img src="../../images/add_icon.png" title="Add"  class="btnAdd2" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/>  
        </div>
	</div>
    </div>
     </div>


<div class="left-in-main fleft"   >
     <div class="payment" >
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Payment Methods</strong>
  <hr />

			<div id="invoice-list">	
        <table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="table_th">
				<td>Mode Of Payments</td>
				<td  width="100">Change the Status</td>
                       		
			</tr>
			</thead>
			<tbody>
			
			<tr class="quicklinks_img">
				<td>Visa</td>
				<td><a href="message1.html">Click to Change</a></td></td>
				  
                	</tr>
		  </tbody>
                  		<tbody>
			<tr class="quicklinks_img">
				<td> Master Card </td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                        		<tbody>
			<tr class="quicklinks_img">
                		<td>Western Union </td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                                        </tbody>
                                   		<tbody>
			<tr class="quicklinks_img">
                		<td>Pay Pal </td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                                        </tbody>
                                                 
		</table>
                   <div class="buttons3">
          <p style="margin-left:230px ;"><img src="../../images/add_icon.png" title="Add"  class="btnAdd3" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/>  
        </div>        
                            
	</div>
    </div>
</div>

         
     </div>
     
     <div class="clear"></div>
    

<!--<div class="left-in-main fleft">
    
   <div class="project">
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Project List</strong>
  <hr/>

			<div id="invoice-list">	
        <table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="table_th">
				<td>Name</td>
				<td>Code</td>
				<td>Status</td>
				<td>Change the Status</td>
                       		
			</tr>
			</thead>
			<tbody>
			<tr class="quicklinks_img">
				<td>Consequential Translation</td>
				<td>CT</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td>
                               	
               
				
			</tr>
			<tr class="quicklinks_img">
				<td>Conference/Simultaneous Translation</td>
				<td>CST</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
				  
                	</tr>
		  </tbody>
                  		<tbody>
			<tr class="quicklinks_img">
				<td> Written Translation  </td>
				<td>WT</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                        		<tbody>
			<tr class="quicklinks_img">
                		<td>Live Video Translation chatting </td>
				<td>LVTC</td>
				<td>Active</td>
				<td><a href="message1.html">Click to Change</a></td></td>
                        </tr>  
                        		
		</table>
                            <p style="margin-left:350px ;"><img src="../../images/add_icon.png" title="Add"  alt="HTML tutorial" width="20" height="20"/>&nbsp;&nbsp;<img src="../../images/minus-icon.gif" title="Remove" alt="HTML tutorial" width="23" height="22"/></a></p>
                    

	</div>
    </div>
</div>-->

<div id="topmain"  >  
    
<div class="left-in-main fleft" style="position:absolute;" >
    
   <div class="project" >
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Commission Rate</strong>
  <hr/>
  <p><b>Rate: 10%</b></p>
  <p>Change: <input type="text" style="width:100px;"> %<div class="but"> <input class="button"  type="button" name="submit" value="Change"></div></p>
    </div>
      
</div>



     

<div class="right-in-main fright" style="position:absolute;" >
   
  <div class="subscription">
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Subscription Fee</strong>
  <hr />

                            <div id="invoice-list" class="fee">	
                                <div class="fixed1">
           <input type="radio" name="proj_type" class="proj_type" value="1" checked="checked"> Client
     <input type="radio" name="proj_type" class="proj_type" value="2">  Translator <br/>        
      <div class="left-in-main fleft" id="client";>
          <p><b>Fee:&nbsp;$50</b></p>
          <p>Change: <input type="text" style="width:50px;"> <div class="butt"> <input class="button"  type="button" name="submit" value="Save"></div></p>
      
                                 </div>
                        <div class="left-in-main fleft" id="translator";>
          <p><b>Fee:&nbsp;$200</b></p>
          <p>Change: <input type="text" style="width:50px;"> <div class="butt"> <input class="button"  type="button" name="submit" value="Save"></div></p>
      
                                 </div>           
                                
                   </div>
               
                           
        </div>
    </div>
    
    
</div>



<div class="left-in-main fleft" style="position:absolute;"  >
<div class="user">
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Currency </strong>
  <hr/>
  <p><b>In Use: QAR</b></p> 

<p>Change: <select style="width:70px;">
					<option>RUB</option>
					<option>EUR</option>
					<option>CNY</option>
					
				</select>
<div class="save"><input type="button" class="button" name="submit" value="Change"></div></p>
    </div>
</div>
   
</div>
     




     </div>
     </div>

