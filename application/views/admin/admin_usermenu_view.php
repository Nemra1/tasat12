<div class="content" style="height:auto;">
  <!--------------dashboard menu bar------->
  <link rel="stylesheet" href="<?php echo WEB_PATH;?>css/bootstrap.css" type="text/css" />
<script type="text/javascript" src="<?php echo WEB_PATH;?>scripts/twitter-bootstrap-hover-dropdown.js"></script>
  <div class="maja-holder">
	<ul id="one">
		<li class="dropdown">
			<a href="<?php echo WEB_URL;?>admin" class="dropdown-toggle <?php if(!empty($admindashactive)){echo $admindashactive ;}?>" data-hover="dropdown"> My Dashboard </a>
		
		</li>
                <li class="dropdown">
			<a href="<?php echo WEB_URL;?>admin/showUsers" class="dropdown-toggle <?php if(!empty($adminuseractive)){echo $adminuseractive ;}?>" data-hover="dropdown"> Users</a>
		
		</li>
		<li class="dropdown">
			<a href="<?php echo WEB_URL;?>admin/showProjects" class="dropdown-toggle <?php if(!empty($adminprojactive)){echo $adminprojactive ;}?>" data-hover="dropdown">Projects</a>
			
		</li>
		<li class="dropdown">
			<a href="<?php echo WEB_URL;?>admin/billing" class="dropdown-toggle <?php if(!empty($adminbillactive)){echo $adminbillactive ;}?>" data-hover="dropdown">Billing</a>
                        <ul class="dropdown-menu">
				<li ><a href="<?php echo WEB_URL;?>adminbill/createInvoice">Create Invoice</a></li>
				<li ><a href="<?php echo WEB_URL;?>adminbill/viewInvoicelist">Invoice Lists</a></li>
                                <li ><a href="<?php echo WEB_URL;?>adminbill/payVoucherlist">Payment Voucher Lists</a></li>
                                <li ><a href="<?php echo WEB_URL;?>adminbill/receiptVoucherlist">Receipt Voucher Lists</a></li>
                                <li ><a href="<?php echo WEB_URL;?>adminbill/cancelledPayment">Cancelled Payments</a></li>
			</ul>
			
		</li>
		<li class="dropdown">
			<a href="<?php echo WEB_URL;?>admin/dispute" class="dropdown-toggle <?php if(!empty($admindisactive)){echo $admindisactive ;}?>" data-hover="dropdown">Dispute</a>
			
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle <?php if(!empty($adminfdactive)){echo $adminfdactive;}?>" data-hover="dropdown">Feedback</a>
		 <ul class="dropdown-menu">
                            <li ><a  href="<?php echo WEB_URL;?>admin/feedback">View Feedbacks</a></li>
                            <li ><a  href="<?php echo WEB_URL;?>admin/Feedback_Given" >My Feedbacks</a></li>
		
        </ul>
                        </li>
		<li class="dropdown">
			<a class="main-a" href="<?php echo WEB_URL;?>admin" class="dropdown-toggle <?php if(!empty($adminmsgactive)){echo $adminmsgactive;}?>" data-hover="dropdown">Messages</a>
                        <ul class="dropdown-menu">
                            <li ><a href="<?php echo WEB_URL;?>admin/sendMessage">Send Message</a></li>
                            <li ><a href="<?php echo WEB_URL;?>admin/inboxMessage">Inbox Messages</a></li>
                            <li ><a href="<?php echo WEB_URL;?>admin/sentMessage">Sent Messages</a></li>
                            <li ><a href="<?php echo WEB_URL;?>admin/archiveMessage">Archive Message</a></li>
			</ul>
			
		</li>
		<li class="dropdown">
			<a class="main-a" href="<?php echo WEB_URL;?>admin/mis" class="dropdown-toggle <?php if(!empty($adminmisactive)){echo $adminmisactive;}?>" data-hover="dropdown">MIS</a>
			
		</li>
                <li class="dropdown">
			<a class="main-a" href=" " class="dropdown-toggle <?php if(!empty($adminaccactive)){echo $adminaccactive;}?>" data-hover="dropdown">My Account</a>
                        <ul class="dropdown-menu">
                            <li ><a href="<?php echo WEB_URL; ?>admin">CRM</a></li>
                            <li ><a href="<?php echo WEB_URL; ?>admin/settings">Settings</a></li>
                            <li ><a href="<?php echo WEB_URL; ?>admin/changePassword">Change Password</a></li>  
                            <li ><a href="<?php echo WEB_URL; ?>adminlogin">Logout</a></li>  
			</ul>
		</li>
	</ul>
      &nbsp;<span class="user-name"> Welcome : Admin</span>
</div>
<!--------------dashboard menu bar ends here------->