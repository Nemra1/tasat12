<script type="text/javascript">
$(document).ready(function(){
$('#tabs div').hide();
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
});
</script>
		<table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="quicklinks">
			<td colspan='5'>
				<span>Statistics</span></a>
			</td>
			<tr>
			</thead>
			<tbody>
			<tr class="quicklinks_txt">
				<td><center><a href="<?php echo WEB_URL ?>projects/Ongoing_projects">Ongoing Projects (<?php echo ($ongoing); ?>)</a> </center></td>
				<td><center><a href="<?php echo WEB_URL ?>projects/allprojects">All Projects (<?php echo $all; ?>)</a> </center></td>
				<td><center><a href="<?php echo WEB_URL ?>tastatranslators/preferred_translators">Preferred Translators (15)</a> </center></td>
				<td><center><a href="#">My Overall Ratings :</a> <span style="color:green;">4 </span> <span style="color:#1D71A8;"> ( 16 / 20 )</span></center></td>
				<!--td><center>Inbox Messages(39)</center></td-->
			</tr>
		  </tbody>
		</table>
		<hr>
		<table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<tr class="quicklinks">
				<td colspan='5'>
                               
                        </td> 
			</tr>
			</thead>
			<tbody>
			<tr class="table_th">
                              <td>
                       <div id="tabs">
  			<ul id="switch_ul" >
                     		<li><a class="active" href="#tab-1">Inbox </a></li>
							<li><a href="#tab-2">Sent </a></li>
							<li><a href="#tab-3">Archive</a></li>
						</ul>	<br/><br/>
                                                
						<div id="tab-1">
						  
						  <p>
							<table class="inner-table">
									<tr>
										<td colspan="6"><span style="font-size:15px;font-weight:bold;">Inbox Messages</span></td>
									</tr>
									<tr class="thhead">
										<td width="0px">Sender</td>
										<td width="250px">Project Name</td>
										<td width="250px">Date</td>
										<td width="900px">Message</td>
										<td width="0px" colspan="2" >Action</td>
									</tr>
							<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>John Smith</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Press Release</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;The translation of your has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/application-search-result.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Petter</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Leagl Law Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;The translation of your has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/application-search-result.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>John</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Chinese-English Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;Your project Tarnslation has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/application-search-result.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Azmath</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>French Script Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;The translation of your has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/application-search-result.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Chuck Bass</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Leagl Law Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;Your project Tarnslation has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/application-search-result.png" style="height:24px;width:24px;"> </a></td>
										
									<tr>
										<td colspan="6"><span style="float:right;padding-right:0px;"><a href="<?php echo WEB_URL; ?>Cmessages/Sent"><img src="<?php echo IMG_PATH;?>images/door-open-in.png" style="height:32px;width:32px;" title="View All"/></a></span></td>
									</tr>
								</table>
							</p>
						</div>
                                                
						<div id="tab-2">
							<p>
								<table class="inner-table">
									<tr>
										<td colspan="6"><span style="font-size:15px;font-weight:bold;">Sent Messages</span></td>
									</tr>
									<tr class="thhead">
										<td width="0px">Recipient</td>
										<td width="250px">Project Name</td>
										<td width="150px">Date</td>
										<td width="600px">Message</td>
										<td colspan="2" width="500px">Action</td>
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>John Smith</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Press Release</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;The translation of your has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Petter</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Leagl Law Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;The translation of your has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>John</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Chinese-English Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;Your project Tarnslation has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Azmath</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>French Script Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;The translation of your has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Chuck Bass</td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Leagl Law Translation</a></td>
										<td>24/06/2013</td>
										<td>&nbsp;Your project Tarnslation has been done.</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									<tr>
										<td colspan="6"><span style="float:right;padding-right:0px;"><a href="<?php echo WEB_URL; ?>Cmessages/Sent"><img src="<?php echo IMG_PATH;?>images/viewall1.png" style="height:32px;width:32px;" title="View All"/></a></span></td>
									</tr>
								</table>
								
							</p>
						</div>
						<div id="tab-3">
							<p>
								<table class="inner-table">
									<tr>
										<td colspan="5"><span style="font-size:15px;font-weight:bold;">Archive</span></td>
									</tr>
									<tr class="thhead">
									<td width="200px">Project Name</td></td>
									<td width="100px">Client Name</td>
									<td  width="150px">Translator Name</td>
                                                                          <td width="150px">Date</td>
									<td colspan="2" width="50px">Action</td>
									</tr>
									<tr >
										<td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Leagl Law Translation</a></td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/home/viewClient"/>Peter John</td>
                                                                               <td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>John Smith</td>
                                                                                <td>17/7/2013</td>										
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Press Release</a></td>
                                                                                   <td><a href="<?php echo WEB_PATH;?>index.php/home/viewClient"/>Mack</td>                 
                                                                                   <td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Mack</td>
                                                                                        <td>28/7/2013</td>    		
                                                                                        <td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
									<td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Arabic-English Translation</a></td>
                                                                                <td><a href="<?php echo WEB_PATH;?>index.php/home/viewClient"/>Anderson</td>
                                                                                  <td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>John</td>
                                                                                   <td>8/7/2013</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>Chinese-English Translation</a></td>
                                                                              <td><a href="<?php echo WEB_PATH;?>index.php/home/viewClient"/>Jolly</td>
                                                                                 <td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Azmath</td>
                                                                                 <td>28/7/2013</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										  <td><a href="<?php echo WEB_PATH;?>index.php/projects/projectView2"/>French Script Translation</a></td>
                                                                                  <td><a href="<?php echo WEB_PATH;?>index.php/home/viewClient"/>Tom</td>
                                                                                 <td><a href="<?php echo WEB_PATH;?>index.php/tastatranslators/translator_profile"/>Chuck Bass</td>
                                                                                    <td>26/7/2013</td>
										<td><a href="<?php echo WEB_URL; ?>Cmessages/Message"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
										
									</tr>
									<tr>
										<td colspan="5"><span style="float:right;"><a href="<?php echo WEB_URL; ?>Cmessages/Archive"><img src="<?php echo IMG_PATH;?>images/viewall1.png" style="height:32px;width:32px;" title="View All"/></a></span></td>
									</tr>
								</table>
							</p>
						</div>
						
					</div>
                                  
				</td>
			</tr>
			</tbody>
		</table>
		<hr>
		<table cellspacing="0" cellpadding="0">
			<thead>
			<tr class="quicklinks">
			<td colspan='2'>
				<span>My Reminders <a href="<?php echo WEB_URL;?>dashboard/reminders">(View All)</a></span>
			</td>
			<td colspan='2' align="left">
				<span>Payables</span>
			</td>
			</tr>
			</thead>
			<tbody>
			<tr class="table_th">
				<td colspan="2" style="width:49%;">
				<table>
					<!--tr class="quicklinks_img">
						<td>Project Name</td>
						<td>Translator name</td>
						<td width="40px">Action</td>
					</tr-->
					<tr class="quicklinks_img" style="color:black;font-weight:normal;">
						<p><img src="<?php echo IMG_PATH;?>images/knob_blue.png" style="height:12px;width:12px;"/>Have to pay amount to the John by end of the day of $ 100/- </p>
						<!--td colspan="3"> Have to pay amount to the John by end of the day of $ 100/-</td-->
					</tr>
					<tr class="quicklinks_img" style="color:black;font-weight:normal;">
					<p><img src="<?php echo IMG_PATH;?>images/knob_blue.png" style="height:12px;width:12px;"/>Call back the Company Media Solutions & discuss about the Pending work.</p>
						<!--td colspan="3"> Call back the Company Media Solutions & discuss about the Pending work.</td-->
					</tr>
					<tr class="quicklinks_img" style="color:black;font-weight:normal;">
						<p><img src="<?php echo IMG_PATH;?>images/knob_blue.png" style="height:12px;width:12px;"/>Call back the Company Media Solutions & discuss about the Pending work.</p>
						<p><img src="<?php echo IMG_PATH;?>images/knob_blue.png" style="height:12px;width:12px;"/>Call back the Company Media Solutions & discuss about the Pending work.</p>
						<p><img src="<?php echo IMG_PATH;?>images/knob_blue.png" style="height:12px;width:12px;"/>Call back the Company Media Solutions & discuss about the Pending work.</p>
					</tr>
				</table>
				</td>
				<td colspan="2" style="width:50%;" valign="top">
				<table>
				<thead>
					<tr>
						<td>Project Name</td>
						<td>Due Date</td>
						<td>Due Amount</td>
						<td>Due Balance</td>
						<td width="40">Action</td>
					</tr>
				</thead>
				<tbody>
				<tr class="quicklinks_img" style="color:black;font-weight:normal;">
					<td>Proj A: Written Translation</td>
					<td>25/06/2013</td>
					<td>$50</td>
					<td>$150</td>
					<td><a href="<?php echo WEB_URL ?>Myfinancials/payVoucherlist"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
				</tr>
				<tr class="quicklinks_img" style="color:black;font-weight:normal;">
					<td>Proj B: Written Translation</td>
					<td>12/08/2013</td>
					<td>$90</td>
					<td>$250</td>
					<td><a href="<?php echo WEB_URL ?>Myfinancials/payVoucherlist"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
				</tr>
				</tbody>
				</table>
				</td>
			</tr>
			</tbody>
			</table>
		<hr>
		<table cellspacing="0" cellpadding="0" border="0" class="table-hover">
			<thead>
			<tr class="quicklinks">
			<td colspan='6'>
				<span>My Bidded Projects</span>
			</td>
			</tr>
			<tr class="table_th">
				<td>Project Name</td>
				<td>Date of Posting</td>
				<td>Bid Closure Date</td>
				<td>Bid Status (Avg)</td>
				<td>Total Bids</td>
				<td width="40px" colspan="2">Action</td>
			</tr>
			</thead>
    <?php foreach ($bid as $prolist){ ?>
			<tbody>
			<tr class="quicklinks_img">
				<td><?php echo $prolist['pro_name']; ?></td>
				<td><?php echo $prolist['bid_datetime']; ?></td>
				<td><?php echo $prolist['bid_exp_completion_date']; ?></td>
				<td><?php echo $prolist['bid_amount']; ?></td>
				<td><?php echo $prolist['count(pro_id_pk)']; ?></td>
				<td><a href="<?php echo WEB_URL ;?>projects/bidderdetails?id=<?php echo  $prolist['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH;?>images/viewprofile.png" style="height:24px;width:24px;"></a></td>
                        </tr>
		  </tbody>
    <?php } ?>
		</table>
		
		
		
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
