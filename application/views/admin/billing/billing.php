
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
        <td><center><a class="list-stati">Total Transactions (60)</a> </center></td>
         <td><center><a class="list-stati">Total Receivables (51)</a> </center></td>
        <td><center><a class="list-stati">Total Payables (9)</a> </center></td>
        <td><center><a class="list-stati">Todays Receivables (25)</a> </center></td>
        <td><center><a class="list-stati">Todays Payables(5)</a> </center></td>
   
        </tr>
    </tbody>
</table>
<hr>
<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
            <div class="head-blue" style="background-color: #EAE1E6; line-height:40px;">Subscriptions
                <div style="margin-right: 10px;margin-top:2px; float: right"> Status
                    <select name="projecttype" id="projecttype">
                        <option value="1">All</option>
                        <option value="1">Subscribed</option>
                        <option value="2">Not Subscribed</option>
                    </select></div></div>
        </td>
        </tr>
    </thead>
    <tbody style="height:100px;overflow:scroll">
        <tr class="table_th">

        <td>
            <div id="tabs">

                <p>

                <table class="inner-table" style="line-height: 35px;">
                    <tr>
                    <td colspan="5"><span style="font-size:15px;font-weight:bold;">Not Subscribed</span></td>
                    </tr>
                    <tr class="thhead">
                    <td>Sl No</td>
                    <td>User Name</td>
                    <td>User Type</td>
                    <td>Date Added</td>
                    <td>Location</td>
                    <td>Email</td>
                    <td>Action</td><td></td>
                    </tr>
                    <tr>
                    <td>1</td>
                     <td>Mark</td>
                    <td>Client</td>
                    <td>19/07/2013</td>
                    <td>USA</td>
                    <td>mark@tasat.com</td>
                    <td><a href="<?php echo WEB_URL; ?>">Remind</a></td>
                    </tr>
                    <tr>
                    <tr>
                    <td>2</td>
                     <td>John</td>
                    <td>Translator</td>
                    <td>12-7-2013</td>
                    <td>Qatar</td>
                    <td>john@tasat.com</td>
                    <td><a href="<?php echo WEB_URL; ?>">Remind</a></td>
                    </tr>
                    <tr>
                    <tr>
                    <td>3</td>
                     <td>Joseph</td>
                    <td>Client</td>
                    <td>02-7-2013</td>
                    <td>India</td>
                    <td>joseph@tasat.com</td>
                    <td><a href="<?php echo WEB_URL; ?>">Remind</a></td>
                    </tr>
                    <tr>
                </table>

            </div>

        </td>
        </tr>
    </tbody>
</table>

<hr>
<table cellspacing="0" cellpadding="0" border="0" id="projectlist">
    <thead>
        <tr class="quicklinks">
        <td colspan='10'>
            <div class="head-blue" style="background-color:#EAE1E6;line-height:40px;">Project-wise Payments
                <div style="margin-right: 10px;margin-top:2px; float: right"> 
                    <div style="margin-right:-5px; float: right"> Project Status
                    <select id="sa" onchange="showtable(this.id);" >
                        <option value="1" selected>All</option>
                        <option value="2">Projects Under Bidding</option>
                        <option value="2">Ongoing Projects</option>
                        <option value="3"> Completed Projects </option>
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
                    <td>Sl No</td>
                    <td>Client name</td>
                    <td>Translator</td>
                    <td>Project Name</td>
                    <td>Project Type</td>
                    <td>Amount</td>
                    <td>Action</td>

                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English</td>
                    <td>written</td>
                    <td>$10</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English </td>
                    <td>written</td>
                    <td>$10</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English </td>
                    <td >consequential</td>
                    <td>$10</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                   <td>4</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English</td>
                    <td >written</td>
                    <td>$10</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>5</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English</td>
                    <td >written</td>
                    <td>$10</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>

                </table>
                </p>
            </div>
        </td>
        </tr>
    </tbody>
</table>
<hr>
<table cellspacing="0" cellpadding="0" border="0" id="projectlist">
    <thead>
        <tr class="quicklinks">
        <td colspan='10'>
            <div class="head-blue" style="background-color:#EAE1E6;line-height:40px;">Transactions
                <div style="margin-right:-5px;margin-top:2px;float: right"> 
                    <div style="margin-right: 10px; float: right"> Transaction Type
                    <select id="sa" onchange="showtable(this.id);" >
                        <option value="1" selected>All Transactions</option>
                        <option value="2">Payables</option>
                        <option value="2">Receivables</option>
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
                    <td>Sl No</td>
                    <td>Client name</td>
                    <td>Translator</td>
                    <td>Project Name</td>
                    <td>Project Type</td>
                    <td>Transaction Type</td>
                    <td>Amount</td>
                    <td>Action</td>

                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English</td>
                    <td>written</td>
                    <td>Payment Voucher</td>
                    <td>$600</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English </td>
                    <td>written</td>
                    <td>Payment Voucher</td>
                    <td>$200</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English </td>
                    <td>consequential</td>
                    <td>Subscription</td>
                    <td>$50</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                   <td>4</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English</td>
                    <td >written</td>
                    <td>Dispute</td>
                    <td>$150</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>
                    <tr>
                    <td>5</td>
                    <td>Peter John</td>
                    <td>John Smith</td>
                    <td>Chinese-English</td>
                    <td >written</td>
                    <td>Payment Voucher</td>
                    <td>$100</td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProjects"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>

                    </tr>

                </table>
                </p>
            </div>
        </td>
        </tr>
    </tbody>
</table>

</div>    
<!--end-->
</div>