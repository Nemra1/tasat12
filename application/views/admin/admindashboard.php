
<!--<link rel="stylesheet" type="text/css" href="<?php // echo WEB_PATH;  ?>css/styles.css"/>-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabs div').hide();
        $('#history').hide();
        $('#history1').click(function() {
            $('#history').show();
            $('#billing').hide();
        });
        $('#pay').click(function() {
            $('#billing').show();
            $('#history').hide();
        });
        $('#tabs div:first').show();
        $('#tabs ul:first li:first').addClass('active');
        $('#tabs ul:first li a').click(function() {
            $('#tabs ul li a').removeClass('active');
            $(this).addClass('active');
            var currentTab = $(this).attr('href');
            $('#tabs div').hide();
            $(currentTab).show();
            return false;
        });
$('body').on('click','.approvep',function() {
        var cid=$(this).attr('name');
        var status=$(this).attr('id');
        var i=$(this).attr('i');
        if(status=='approve'+i){ 
           res= confirm('Do you want to approve the user?');
            if(res==true){
          $.ajax({url: "<?php echo WEB_URL; ?>admin/clientApproval",
                                            data: {cid:cid},
                                            type: "POST",
                                            success: function(data) {
                                               
                                              $("#products").html(data);
                                                }
                                        });
        }}
        else if(status=='view'+i){

$.post( "<?php echo WEB_URL; ?>admin/userProfile",{cid:cid});
        }
        else{
             res= confirm('Do you want to reject the user?');
             if(res==true){
         $.ajax({url: "<?php echo WEB_URL; ?>admin/clientReject",
                                            data: {cid:cid},
                                            type: "POST",
                                            success: function(data) {
                                               
                                              $("#products").html(data);
                                                }
                                        });
        
             }
    }
    });
        });
</script>
<style>


    /** list view *
   ul.list { list-style: none; width: 100%; }
ul.list li { display: block; background: #EAE1E6; padding: 10px 15px; }

ul.list li.alt { background: #F2F4F3; }

ul.list li section.left { display: block; float: left; width: 350px; position: relative; padding-left: 20px; }
ul.list li section.right { display: block; float: right; margin-right: 10px; width: 250px; text-align: right; }

ul.list li section.left img.thumb { float: left; margin-right: 10px; }
ul.list li section.left img.featured-banner { position: absolute; left: -18px; top: 35px; }

ul.list li section.left h3 { font-family: "Trebuchet MS", Arial, sans-serif; font-weight: bold; text-transform: uppercase; color: #707375; font-size: 1.4em; line-height: 1.6em; } 
ul.list li section.left span.meta { color: #93989b; font-weight: normal; font-size: 1.1em; }


ul.list li section.right span.price { font-weight: bold; display: block; margin-bottom: 15px; color: #ad3939; font-size: 1.6em; text-align: right; }

ul.list li section.right a.firstbtn { margin-right: 7px; }*/

    /** grid view **/
    ul.grid { list-style: none; margin: 0 auto; padding-left: 18px; margin-top:10px;}
    ul.grid li { position: relative; display: block; float: left; width: 250px; height: 200px;  padding: 5px 12px; margin-bottom: 20px; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; }
    ul.grid li.third { border: 0; }

    ul.grid li section.left { position: relative; padding: 25px; }
    ul.grid li section.right { /* nothing */ }

    ul.grid li section.left img.featured-banner { position: absolute; top: 0; }

    ul.grid li section.left h3 { font-family: "Trebuchet MS", Arial, sans-serif; font-weight: bold; text-transform: uppercase; color: #707375; font-size: 1.4em; line-height: 1.5em; } 
    ul.grid li section.left span.meta { display: block; color: #93989b; font-weight: normal; font-size: 1.1em; margin-bottom: 7px; }

    ul.grid li section.right span.price { font-weight: bold; display: block; margin-bottom: 5px; color: #ad3939; font-size: 1.75em; }

    ul.grid li section.right span.darkview a.firstbtn { display: block; margin-bottom: 10px; }

    ul.grid li section.right span.darkview { 
        opacity: 0;
        margin: 0; 
        position: absolute;
        top: 0; 
        left: 0; 
        width: 190px; 
        height: 200px;
        margin: 0 15px; 
        border-radius: 6px;
        background: rgba(144, 98, 123, 0.50); 
        overflow: hidden;
        text-align: center;
        padding-top: 35px;
        box-sizing: border-box; 
        -moz-box-sizing: border-box; 
        -webkit-box-sizing: border-box;
        transition: opacity 0.2s linear 0s;
        -webkit-transition: opacity 0.2s linear 0s;
        -moz-transition: opacity 0.25s linear 0s;
        -o-transition: opacity 0.25s linear 0s;  
    }
    ul.grid li:hover section.right span.darkview { opacity: 1; }



    /** clearfix **/
    .clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
    .clearfix { display: inline-block; }

    html[xmlns] .clearfix { display: block; }
    * html .clearfix { height: 1%; }

</style>
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
        <td><center><a class="list-stati">All Clients (15)</a> </center></td>
        <td><center><a class="list-stati">All Translators (15)</a> </center></td>
        <td><center><a class="list-stati">All Projects (<?php echo $all; ?>)</a> </center></td>
        <td><center><a class="list-stati">Due payments(15)</a> </center></td>
        <td><center><a class="list-stati">Due Receivables(6)</a></center></td>
        <td><center><a class="list-stati" >New messages(26)</a></center></td>
        </tr>
    </tbody>
</table>
<hr>
<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
            <div class="head-blue" style="background-color: #EAE1E6;">Users At a Glance 
                <div style="margin-right: 10px; float: right"> <input type="radio"value="client" id="client" name="user" checked="checked"/>client
                    <input type="radio" value="translator" id="translator" name="user"/>translator</div></div>
        </td>
        </tr>
    </thead>
    <tbody style="height:100px;overflow:scroll">
        <tr class="table_th">
        <td>
            <div id="tabs">
                <ul id="switch_ul_admin" >
                    <li><a class="active" href="#tab-1">New Profiles</a></li>
                    <li><a href="#tab-2">Messages</a></li>
                    <li><a href="#tab-3">Projects </a></li>
                    <li><a href="#tab-4">Disputes</a></li>
                    <li><a href="#tab-5">Feedbacks</a></li>
                </ul>


                <br/><br/>
                <div id="tab-1">
                    <header>
                        <span class="list-style-buttons">
                          <!--  <a href="#" id="gridview" class="switcher active"><img src="<?php echo IMG_PATH; ?>images/grid-view.png" alt="Grid"></a>
                            <a href="#" id="listview" class="switcher "><img src="<?php echo IMG_PATH; ?>images/list-view-active.png" alt="List"></a>-->
                        </span>
                    </header><br>

                    <ul id="products" class="grid clearfix">
                        <?php 
                        $i=0;
                       
                        foreach ($client as $details) { ?>
                            <!-- row 1 -->

                            <li class="clearfix">
                                <div id="success<?php echo $i; ?>"></div>
                            <section class="left">
                                <img src="<?php echo IMG_PATH; ?>images/products/searchtranslator.png"  class="thumb"><br>
                                <span>User Name:<?php echo $details['cl_first_name'] . ' ' . $details['cl_last_name']; ?></span><br>
                                <span>Location:<?php echo $details['cl_city']; ?></span><br>
                                <span>Date:<?php echo $details['cl_dob']; ?></span>
                            </section>

                            <section class="right">

                                <span class="darkview">
                                    <a href="javascript:void(0);" id="approve<?php echo $i; ?>" i="<?php echo $i; ?>" name="<?php echo  $details['cl_profile_id_pk'] ; ?>" class="approvep"><button class="button  " style="width:60px; margin: 0 0 0 40px;">Approve</button></a>
                                    <a href="javascript:void(0);"  id="view<?php echo $i; ?>" i="<?php echo $i; ?>"  name="<?php echo  $details['cl_profile_id_pk'] ; ?>"  class="approvep"><button class="button view" style="width:60px;margin: 0 0 0 40px;">View</button></a>
                                    <a href="javascript:void(0);"  id="reject<?php echo $i; ?>" i="<?php echo $i; ?>" name="<?php echo  $details['cl_profile_id_pk'] ; ?>"  class="approvep"><button class="button reject" style="width:60px;margin: 0 0 0 40px;">Reject</button></a>

                                    <!--                                <button class="button" style="width:60px">Approve</button>
                                                                    <button class="button submitclass" style="width:60px;margin-left: 80px; margin-top: -48px">View</button><br/>
                                                                    <button class="button" style="width:60px; margin-left: 154px; margin-top: -48px">Reject</button>-->
                                </span>
                            </section>
                            </li>
                            <!--                           <li class="clearfix third">
                                                    <section class="left">
                                                        <img src="<?php //echo IMG_PATH;  ?>images/products/searchtranslator.png"  class="thumb"><br>
                                                        <span>User Name:<?php //echo $details['cl_first_name'].' '.$details['cl_last_name']; ?></span><br>
                                                        <span>Location:<?php //echo $details['cl_city'];  ?></span><br>
                                                        <span>Date:<?php // echo $details['cl_dob']; ?></span>
                                                    </section>
                            
                                                    <section class="right">
                            
                                                        <span class="darkview">
                                                            <button class="button" style="width:60px">Approve</button>&nbsp;
                                                            <button class="button submitclass" style="width:60px;margin-left: 80px; margin-top: -48px">View</button>&nbsp;
                                                            <button class="button" style="width:60px; margin-left: 154px; margin-top: -48px">Reject</button>
                                                  
                                                        </span>
                                                    </section>
                                                    </li>-->
                        <?php 
                        $i++;
                        } ?>


                    </ul>

                    <a  style="float:right;" href="<?php WEB_URL; ?>admin/showUsers">View All</a>
                </div>

                <div id="tab-2">
                    <p>
                    <table class="inner-table" id="inner-table3">
                        <tr>
                        <td colspan="5"><span style="font-size:15px;font-weight:bold;"> Messages</span></td>
                        </tr>
                        <tr class="thhead">
                        <td width="50px">Sl No</td>
                        <td width="200px">User</td>
                        <td width="150px">Date</td>
                        <td width="300px">Message</td>
                        <td width="60px">Action</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>I want to know fee for posting project</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/inboxMessage"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>I want to know fee for posting project</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/inboxMessage"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>I want to know fee for posting project</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/inboxMessage"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>I want to know fee for posting project</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/inboxMessage"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>I want to know fee for posting project</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/inboxMessage"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>

                    </table>
                    </p>
                </div>
                <div id="tab-3">
                    <p>
                    <table class="inner-table" id="inner-table4">
                        <tr>
                        <td colspan="5"><span style="font-size:15px;font-weight:bold;"> Projects</span></td>
                        </tr>
                        <tr class="thhead">

                        <td width="150px">User</td>
                        <td width="100px">Date</td>
                        <td width="300px">Project Name</td>
                        <td width="200px">Project type</td>
                        <td width="100px">Action</td>
                        <td></td>
                        </tr>
                        <?php foreach ($list as $details) { ?>
                            <tr>

                            <td><?php echo $details['cl_first_name']; ?></td>
                            <td><?php echo $details['pro_posted_date']; ?></td>
                            <td><?php echo $details['pro_name']; ?></td>
                            <td><?php echo $details['pro_type']; ?></td>
                            <td><a href="<?php echo WEB_URL; ?>admin/showProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                            </tr>
                        <?php } ?>

                    </table>
                    </p>
                </div>
                <div id="tab-4">
                    <p>
                    <table class="inner-table" id="inner-table4">
                        <tr>
                        <td colspan="5"><span style="font-size:15px;font-weight:bold;"> Disputes</span></td>
                        </tr>
                        <tr class="thhead">
                        <td width="50px">Sl No</td>
                        <td width="150px">Raised By</td>
                        <td width="100px">Date</td>
                        <td width="200px">Project Name</td>
                        <td width="200px">Translator</td>
                        <td width="150px">Project Amount</td>
                        <td width="100px">Action</td>

                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>Arabic-English Translation</td>
                        <td>John Smith</td>
                        <td>$50</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/dispute"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>Arabic-English Translation</td>
                        <td>John Smith</td>
                        <td>$50</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/dispute"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>Arabic-English Translation</td>
                        <td>John Smith</td>
                        <td>$50</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/dispute"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>Arabic-English Translation</td>
                        <td>John Smith</td>
                        <td>$50</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/dispute"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Peter John</td>
                        <td>12/03/2013</td>
                        <td>Arabic-English Translation</td>
                        <td>John Smith</td>
                        <td>$50</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/dispute"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>

                    </table>
                    </p>
                </div>
                <div id="tab-5">
                    <p>
                    <table class="inner-table" id="inner-table5">
                        <tr>
                        <td colspan="5"><span style="font-size:15px;font-weight:bold;"> Messages</span></td>
                        </tr>
                        <tr class="thhead">
                        <td width="50px">Sl No</td>
                        <td width="150px">User Name</td>
                        <td width="200px">Project Name</td>
                        <td width="100px">Date</td>
                        <td width="400px">Feedback</td>
                        <td width="60px">Action</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Peter John</td>
                        <td>Press Release Translation</td>
                        <td>12/03/2013</td>
                        <td>TASAT is a great platform for multilingual translation</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/Myfeedbacks"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Peter John</td>
                        <td>Press Release Translation</td>
                        <td>12/03/2013</td>
                        <td>TASAT is a great platform for multilingual translation</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/Myfeedbacks"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Peter John</td>
                        <td>Press Release Translation</td>
                        <td>12/03/2013</td>
                        <td>TASAT is a great platform for multilingual translation</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/Myfeedbacks"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Peter John</td>
                        <td>Press Release Translation</td>
                        <td>12/03/2013</td>
                        <td>TASAT is a great platform for multilingual translation</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/Myfeedbacks"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Peter John</td>
                        <td>Press Release Translation</td>
                        <td>12/03/2013</td>
                        <td>TASAT is a great platform for multilingual translation</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/Myfeedbacks"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>

                    </table>
                    </p>
                </div>
            </div>
        </td>
        </tr>
    </tbody>
</table>

<hr><br>
<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
            <div class="head-blue" style="background-color:#EAE1E6;">Transactions
                <div style="margin-right: 20px; float: right"> 
                    <input type="radio"value="pay" checked="checked" id="pay" name="radio"/>Payables
                    <input type="radio" value="receive"id="receive" name="radio"/>Receivables
                    <input type="radio" value="history" id="history1" name="radio"/>History</div></div>
        </td>
        </tr>
    </thead>
    <tbody>
        <tr class="table_th">
        <td>
            <div>
                <p>
                <table class="inner-table" id="billing" >
                    <tr>
                    <td colspan="5"><span style="font-size:15px;font-weight:bold;"> Payables</span></td>
                    </tr>
                    <tr class="thhead">
                    <td width="50px">Sl No</td>
                    <td width="150px">User name</td>
                    <td width="100px">User type</td>
                    <td width="300px">Project Name</td>
                    <td width="300px">Project Type</td>

                    <td width="100px">Amount</td>
                    <td width="100px">Action</td>

                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Peter John</td>
                    <td>client</td>
                    <td>Arabic-English Translation         </td>           <td>written</td>

                    <td>$102</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Peter John</td>
                    <td>client</td>
                    <td>Arabic-English Translation</td>
                    <td>written</td>

                    <td>$102</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Peter John</td>
                    <td>client</td>
                    <td>Arabic-English Translation      </td>              <td>written</td>

                    <td>$102</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Peter John</td>
                    <td>client</td>
                    <td>Arabic-English Translation</td>
                    <td>written</td>

                    <td>$102</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>5</td>
                    <td>Peter John</td>
                    <td>client</td>
                    <td>Arabic-English Translation    </td>                <td>written</td>

                    <td>$102</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>

                </table>
                <div id="history">
                    <table class="inner-table">
                        <tr>
                        <td colspan="5"><span style="font-size:15px;font-weight:bold;"> History</span></td>
                        </tr>
                        <tr class="thhead">
                        <td width="100px">Sl No</td>
                        <td width="150px">User name</td>
                        <td width="200px">User type</td>
                        <td width="300px">Project Name</td>
                        <td width="300px">Project Type</td>
                        <td width="300px">Transaction Type</td>
                        <td width="100px">Amount</td>
                        <td width="100px">Action</td>

                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Peter John</td>
                        <td>client</td>
                        <td>Arabic-English Translation</td>
                        <td>written</td>
                        <td>aaaa</td>
                        <td>$102</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Peter John</td>
                        <td>client</td>
                        <td>Arabic-English Translation</td>
                        <td>written</td>
                        <td>aaaa</td>
                        <td>$102</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Peter John</td>
                        <td>client</td>
                        <td>Arabic-English Translation</td>
                        <td>written</td>
                        <td>aaaa</td>
                        <td>$102</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Peter John</td>
                        <td>client</td>
                        <td>Arabic-English Translation</td>
                        <td>written</td>
                        <td>aaaa</td>
                        <td>$102</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Peter John</td>
                        <td>client</td>
                        <td>Arabic-English Translation</td>
                        <td>written</td>
                        <td>aaaa</td>
                        <td>$102</td>
                        <td><a href="<?php echo WEB_URL; ?>admin/billing"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                        </tr>

                    </table>
                </div>

                </p>
            </div>
        </td>
        </tr>
    </tbody>
</table>
<hr><br>
<table cellspacing="0" cellpadding="0">
    <thead>
        <tr class="quicklinks">
        <td>
            <div class="head-blue" style="background-color: #EAE1E6;">My reminders
            </div>
        </td>
        </tr>
    </thead>
    <tbody>
        <tr class="table_th">
        <td>
            <table class="inner-table" id="billing" >

                <tr>
                <td>Call back the Company Media Solutions & discuss about the Pending work.</td>
                <td><a href="<?php echo WEB_URL; ?>admin/reminder"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                </tr>
                <tr>


                <td>Have to pay amount to the John by end of the day of $ 100/- </td>
                <td><a href="<?php echo WEB_URL; ?>admin/reminder"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                </tr>
                <tr>


                <td>Call back the Company Media Solutions & discuss about the Pending work.</td>
                <td><a href="<?php echo WEB_URL; ?>admin/reminder"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                </tr>
                <tr>


                <td>Have to pay amount to the John by end of the day of $ 100/- </td>
                <td><a href="<?php echo WEB_URL; ?>admin/reminder"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                </tr>
                <tr>


                <td>Have to pay amount to the John by end of the day of $ 100/- </td>
                <td><a href="<?php echo WEB_URL; ?>admin/reminder"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                </tr>

            </table>
        </td>

        </tr>
    </tbody>
</table>


</div>    
<!--end-->
</div>
<script>
    $(document).ready(function() {


    });



    $(".submitclass").click(function() {

        window.location.href = "<?php echo WEB_URL; ?>admin/userProfile";

    });
</script>