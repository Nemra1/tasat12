
<div class="main_content_box_3">
    <table cellpadding="1" cellspacing="1">
<?php foreach($details as $list ){ ?>
        <tr>
        <td>
            <strong style="font-size:22px; color:#1d71a8; padding-left:0px;"><?php echo $list['pro_name']; ?></strong><br>
            <strong style="font-size:12px; color:#1d71a8; padding-left:0px;"><?php echo $list['pro_type']; ?></strong>
        </td>
        <td></td>
        <td></td>
        <td>
            <div style="float: right; margin-right:-3px;" >
                <form  action="<?php echo WEB_URL ?>myProjects/bidProject">
            
                </form>
            </div>
        </td>
                </tr>
        <tr>
        <td>
            <div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10">
                <div class="align-c padding-r10 padding-l5 border-r" style="display:inline-block">
                    <div class="margin-b5">Bids</div>
                    <div id="num-bids" class="text-blue larger bold"><?php echo count($details); ?></div>
                </div>
                <div class="align-c padding-l10 padding-r10 border-r" style="display:inline-block">
                    <div class="margin-b5">Avg Bid (USD)</div>
                    <div class="text-blue larger bold">
                    50
                    </div>
                </div>  
                <div class="align-c padding-l10 padding-r5" style="display:inline-block">
                    <div class="margin-b5">Project Budget (USD)</div>
                    <div class="text-blue larger bold">$ <?php echo $list['pro_budget_min']; ?> , $<?php echo $list['pro_budget_max']; ?>  </div>
                </div>
            </div> 
        </td>
       
        <td>
            <div style="margin-right:10px;">
                <div>
                    <img src="<?php echo WEB_PATH; ?>images/searchtranslator.png" width="50px" height="50px"/></div>
                <div  class="head-blue" style="padding-right:10px;">Posted By:<?php echo $list['cl_first_name']; ?> <?php echo $list['cl_last_name']; ?></div>
                <div  class="head-blue" style="padding-right:10px;">Reviews(1)</div>
            </div>

        </td>
 <td><input type="button" class="button" value="Bid project" onclick="window.location.href='<?php echo WEB_URL; ?>myProjects/bidProject'"></td>
        </tr>

    </table>
                 
     <div class="well whitebg para silver span padding-5  margin-t10 margin-l10 margin-b10">
        <div style="margin-left:15px">
            <div class="head-blue"> Project Description: <br/></div>
     <?php echo $list['pro_desc']; ?> <br/>
            <div class="head-blue"> Languages Required: <br/></div>
            <?php echo $list['pro_langfrom']; ?> to &nbsp;<?php echo $list['pro_langto']; ?> 
            <div class="head-blue"> Duration of Project: <br/></div>
             <?php echo $list['pro_duration'];?>
        </div>

    </div>
    <div style="margin-right:200px;margin-top: 200px;">
        </div>
    <div class="btn-post">
        <label id="b">Bookmark This:</label><div style="margin-top: -27px; margin-left:95px"><label id="c">Bookmarked</label><img class="img_2" src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;"height="20px;" onclick="changeimg(this.id);"/></div>
    </div><br/>
    <div class="tabBody" style="background-color:#C4E2EE;height:100%;">
<div style="line-height: 32px;margin-top: -21px;">
       
				<form action="" name="bookingForm">
				  <table width="99%" border="0" id="PDetailsTable" bgcolor="#97D4EE">	
					<thead>
						<tr>
							<th width="138">Translators' Bidding</th>
                                                        <th width="148">Translation type</th>
							<th width="80">Skills</th>
                                                        <th width="100" >Reputation</th>
                                                        <th width="100" >Bid</th>
                                                 				
						</tr>
					</thead>
					<tbody style="text-align:center;">
						<tr>
							<td height="52">John Smith</td>
                                                        <td> <?php echo $list['pro_type']; ?></td>
							<td>
								 <?php echo $list['pro_langfrom']; ?> to &nbsp;<?php echo $list['pro_langto']; ?> 
							</td>
							<td > 
						<img src="<?php echo WEB_PATH; ?>images/star-blue.png" width="20px" height="20px"> 
                                    <img src="<?php echo WEB_PATH; ?>images/star-blue.png" width="20px" height="20px">
                                    <img src="<?php echo WEB_PATH; ?>images/star-blue.png" width="20px" height="20px"> 
                                    <img src="<?php echo WEB_PATH; ?>images/star-blue.png" width="20px" height="20px">
							</td>
							<td>
							$100
							</td >
                                                 
						</tr>
<?php }?>
                                                
					</tbody>	
				  </table>
				  
				</form>
                                                </div>
                   <?php
                  if (!empty($pagination)) {
                                    echo "<div align='center'><font color='red'>" . $pagination . "</font></div>";
                                }
                                ?>
            </div>
</div>
</div>
</div>


                    <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('.tooltip').tooltipster();
                                    });

                                    //
                                    // function hideshow(id){
                                    //   
                                    //   $('.'+id).show();
                                    //
                                    //  } ;


                                    function show(id)
                                    {
                                        $('.' + id).show();
                                        $('#' + id).css({"background-color": "#F0FFFF", "color": "black"});
                                    }
                                    function hide(id)
                                    {
                                        $('.' + id).hide();
                                        $('#' + id).css({"background-color": "#FFFFFF", "color": "#1D71A8"});
                                    }
                                    ;

                    </script>
<script>
    $(document).ready(function(){
 $('#c').hide();
$(function(){
     $(".img_2").click( function()
     {
         $('#b').hide();
        $('#c').show();
         this.src = this.src.replace("grey_star.png","green_star.gif");
     }
);
});
    });
</script>