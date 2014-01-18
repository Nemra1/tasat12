<script type="text/javascript">
    $(document).ready(function() {
        $('#tabs div').hide();
        $('#tabs div:first').show();
        $('#tabs ul li:first').addClass('active');
        $('#tabs ul li a').click(function() {
            $('#tabs ul li').removeClass('active');
            $(this).parent().addClass('active');
            var currentTab = $(this).attr('href');
            $('#tabs div').hide();
            $(currentTab).show();
            return false;
        });
    });
    $().click(function() {

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
        <tr class="stati_txt">
        <td><center><a class="list-stati">All clients (60)</a> </center></td>
         <td><center><a class="list-stati">New clients (15)</a> </center></td>
        <td><center><a class="list-stati">All translators (15)</a> </center></td>
        <td><center><a class="list-stati">New translators (25)</a> </center></td>
        <!--<td><center><a href="<?php echo WEB_URL ?>myProjects/recommendedProjects">Other Projects(5)</a> </center></td>-->
   
        </tr>
    </tbody>
</table>
<hr>
<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
            <td colspan='5'>
                                    <div class="head-blue" style="background-color: #EAE1E6;">Users At a Glance 
                                        <div style="margin-right: 10px; float: right"> <input type="radio" value="client" checked="checked"/>client
                                    <input type="radio" value="translator"/>translator</div></div>
				</td></tr>
            </thead>
    <tbody style="height:100px;overflow:scroll">
        <tr class="table_th">

        <td>
            <div id="tabs">

                <p>

               <table class="inner-table" style="line-height: 35px;">
                    <tr>
                    <td colspan="5"><span style="font-size:15px;font-weight:bold;">New Clients</span></td>
                    </tr>
                    <tr class="thhead">
                    <td>Sl No</td>
                     <td>Date</td>
                    <td>User Name</td>
                    <td>Location</td>
                    <td>EmailId</td>
                    <td>Action</td><td></td>
                    </tr>
                    <tr>
                    <td>1</td>
                      <td>22-7-2013</td>
                     <td>Peter John</td>
                    <td>Bangalore</td>
                    <td>abc@gmail.com</td>
                  
                    <td><a href="<?php echo WEB_URL;?>admin/userProfile"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>2</td>
                  
                      <td>22-7-2013</td>
                     <td>Peter John</td>
                    <td>Bangalore</td>
                    <td>abc@gmail.com</td>
                  
                    <td><a href="<?php echo WEB_URL;?>admin/userProfile"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
   </tr>
                    <tr>
                    <td>3</td>
            
                      <td>22-7-2013</td>
                     <td>Peter John</td>
                    <td>Bangalore</td>
                    <td>abc@gmail.com</td>
                  
                    <td><a href="<?php echo WEB_URL;?>admin/userProfile"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
     </tr>
                     <tr>
                    <td>4</td>
              
                      <td>22-7-2013</td>
                     <td>Peter John</td>
                    <td>Bangalore</td>
                    <td>abc@gmail.com</td>
                  
                    <td><a href="<?php echo WEB_URL;?>admin/userProfile"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
       </tr>
                </table>

            </div>

        </td>
        </tr>
    </tbody>
</table>
        </td>
        </tr>
    </tbody>
</table>

<hr>
<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="quicklinks">
        <td colspan='10'>
            <div class="head-blue" style="background-color:#EAE1E6;line-height:40px;">User Lists
             
                <div style="margin-right: 10px; margin-top:2px; float: right"> 
                      <input type="radio" value="client" checked="checked"/>Client
                                    <input type="radio" value="translator"/>Translator
                    <select>
                        <option value="1">Approve</option>
                        <option value="2">Pending</option>
                        <option value="3"> Rejected</option>
                    </select></div>
            </div>
        </td>
        </tr>
    </thead>
    <tbody>
        <tr class="table_th">
        <td>
            <div id="tabs">
                <p>
                <table class="inner-table">
                    <br>
                    <tr class="thhead">
                    <td width="140px">Sl No</td>
                    <td width="250px">User Name</td>
                    <td width="200px">User type</td>
                    <td width="200px">Location</td>
                    <td width="300px">EmailId</td>
                   <td width="100px">Status</td>
                    <td width="100px">Action</td>

                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Peter John</td>
                    <td>Individual</td>
                    <td>Bangalore</td>
                    <td>abcd@gmail.com</td>
                    <td>Approved</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/userDetails"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Peter John</td>
                    <td>Individual</td>
                    <td>Bangalore</td>
                    <td>abcd@gmail.com</td>
                    <td>Approved</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/userDetails"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                  <td>1</td>
                    <td>Peter John</td>
                    <td>Individual</td>
                    <td>Bangalore</td>
                    <td>abcd@gmail.com</td>
                    <td>Approved</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/userDetails"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                   <td>1</td>
                    <td>Peter John</td>
                    <td>Individual</td>
                    <td>Bangalore</td>
                    <td>abcd@gmail.com</td>
                    <td>Approved</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/userDetails"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                     <td>1</td>
                    <td>Peter John</td>
                    <td>Individual</td>
                    <td>Bangalore</td>
                    <td>abcd@gmail.com</td>
                    <td>Approved</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/userDetails"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>

                </table>
                </p>
            </div>
        </td>
        </tr>
    </tbody>
</table>
<br>
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
</div>    
<!--end-->
</div>