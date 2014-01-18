
<div class="main_content_box_7">
       <h3>Browse Projects</h3>
    
       <div class="content_box1">
    <table cellpadding="1" cellspacing="1">
        <tr>
              <td>  
                <ul class="searchfilter"> 
                    <li>
                        <label>By Category</label>
                                <select>
                                        <option value="0">Select Category</option>
                                        <option value="1">Individual</option>
                                        <option value="2">Company</option>
                                        <option value="2">Other</option>
                                 </select>
                    </li>
                </ul>
            </td>
  
            <td>
                <ul class="searchfilter">
                    <li>
                        <label>Translate From</label>
                                <select>
                                        <option value="0">Source Language</option>
                                        <option value="1">English</option>
                                        <option value="2">Spanish</option>
                                        <option value="3">German</option>
                                </select><br/>  
                    </li>
                </ul>
            </td>
             <td>
                <ul class="searchfilter"> 
                    <li>
                        <label>Translate To</label>
                                <select>
                                         <option value="0">Target Language</option>
                                         <option value="1">English</option>
                                         <option value="2">Spanish</option>
                                         <option value="3">German</option>
                               </select>
                    </li>
               </ul>
             </td>
    </tr>
     <tr>
        <td>
            <ul class="searchfilter">
                <li>
                    <label>By Location</label>
                            <select>
                                     <option value="0">Select Location</option>
                                     <option value="1">Australia</option>
                                     <option value="2">France</option>
                                     <option value="3">India</option>
                            </select>
                </li>
            </ul>
        </td>
        <td>
            <ul class="searchfilter"> 
                <li>
                    <label>By Duration</label>
                            <select>
                                    <option value="0">Select Duration</option>
                                    <option value="1">less than 1 week</option>
                                    <option value="2">less than 2 weeks</option>
                                    <option value="2">less than 1 month</option>
                            </select>
                </li>
            </ul>
        </td>
        <td> 
            <ul class="searchfilter"> 
                <li>
                    <label>By Price</label>
                            <input type="checkbox" /> High to Low
                            <input type="checkbox" /> Low to High</li></ul></td>
    </tr>
    
</table>
          
       </div> 
            <div class="tabBody" style="background-color:#C4E2EE;height:100%;">
<div style="line-height: 32px;margin-top: 205px;">
         <H1> &nbsp; Translation Project Lists</H1>
				<form action="" name="bookingForm">
				  <table width="99%" border="0" id="PDetailsTable" bgcolor="#97D4EE">	
					<thead>
						<tr>
							<th width="138">Project Name</th>
                                                        	<th width="148">Translation type</th>
							<th width="138">Skills</th>
                                                        <th width="140" >Bid</th>
                                                        <th width="137" align="center">Started on</th>
                                                        <th width="50" align="center">Price(USD)</th>
                                                        <th width="100" align="center">Bookmark</th>
							
						</tr>
					</thead>
					<tbody style="text-align:center;">
						<tr>
							<td height="52">Press Release</td>
                                                        <td>written translation</td>
							<td>
								spanish->german  
							</td>
							<td class="pjt_align"> 
							30
							</td>
							<td class="pjt_align">
							23-03-2013 
					
							</td >
                                                        <td class="pjt_align">
							$100
							</td>
                                                        <td class="pjt_align">
                                                      <a id="img1"onclick="b(this.id);"><img class="img1" src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;"height="20px;" /></a>      
                                                        </td>
							
						</tr>
                                                		<tr>
							<td height="52">legal translation</td>
                                                        <td>live video  translation</td>
							<td>
							english->chineese 
							</td>
							<td class="pjt_align"> 
							  10
							</td>
							<td class="pjt_align">
							08-06-2013
							</td>
							<td class="pjt_align">
                                                            $50
							</td>
							<td class="pjt_align">
                                                            <a id="img2" onclick="b(this.id);"><img class="img2" src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;"height="20px;"/></a>
                                                        </td>
						</tr>
                                                		<tr>
							<td height="52">Arabic translation</td>
                                                        <td>consequential translation</td>
							<td>
							arabic->english
							</td>
							<td class="pjt_align"> 
							40
							</td>
							<td class="pjt_align">
								05-06-2013
							</td>
							<td class="pjt_align">
							$87
							</td>
                                                        <td class="pjt_align">
                                                            <a id="img3" onclick="b(this.id);"><img class="img3" src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;"height="20px;"/></a>
                                                        </td>
						</tr>
					</tbody>	
				  </table>
				  
				</form>
</div><br>
                    <div style="float:right">
        <span class="pagination"><<</span>
        <span class="pagination"><</span>
        <span class="pagination">1</span>
        <span class="pagination">2</span>
        <span class="pagination">3</span>
        <span class="pagination">></span>
        <span class="pagination">>></span>
        </span>
    </div>
            </div></div></div></div>
<script type="text/javascript">
	$(document).ready(function() {
//             $("#innertab tr:odd").css("background-color", "#F5EEEB");
//             $("#innertab :last-child").css("background-color", "#FFFFFF");
		 $('.tooltip').tooltipster();
                 
	});
        
stateset=0;
 function hideshow(id){
  if (stateset==0) {
         $('.'+id).show().css({ "display": "inline-block"});
         
   stateset=1;
  } else{
     stateset=0;
  };
 }
 stateset=0;

</script>

<script>
function b(id){
$(function(){
     $("."+id).click( function()
     {
         this.src = this.src.replace("grey_star.png","green_star.gif");
   }
);
});}
</script>