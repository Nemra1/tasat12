<div class="content" style="height:auto;">
  <!--------------dashboard menu bar------->
  <link rel="stylesheet" href="<?php echo WEB_PATH;?>css/bootstrap.css" type="text/css" />

<script type="text/javascript" src="<?php echo WEB_PATH;?>scripts/twitter-bootstrap-hover-dropdown.js"></script>
  <div class="maja-holder">
	<ul id="one">
		<li class="dropdown">
			<a href="<?php echo WEB_URL;?>dashboard" class="dropdown-toggle <?php if(!empty($active)){echo $active;}?>" data-hover="dropdown">My Dashboard</a>
			<!--ul class="dropdown-menu">
			    <li ><a href="#">COMPANY PROFILE</a></li>
			    <li ><a href="#">VISSION &amp; MISSION</a></li>
			    <li ><a href="#">CHAIRMAN'S MESSAGE</a></li>  
			</ul-->
		</li>
		<li class="dropdown">
			<a  href="#" class="dropdown-toggle <?php if(!empty($pactive)){echo $pactive;}?>" data-hover="dropdown">Projects</a>
			<ul class="dropdown-menu">
				<li ><a href="<?php echo WEB_URL;?>projects">Add New Project</a></li>
                                 <li ><a href="<?php echo WEB_URL;?>projects/New_projects">New Projects</a></li>
                                 <li ><a href="<?php echo WEB_URL;?>projects/Bidded_projects">Bidded Projects</a></li>
				<li ><a href="<?php echo WEB_URL;?>projects/Ongoing_projects">Ongoing Projects</a></li>
                                 <li ><a href="<?php echo WEB_URL;?>projects/Onhold_projects">Onhold Projects</a></li>  
				<li ><a href="<?php echo WEB_URL;?>projects/completedprojects">Completed Projects</a></li>
				<li ><a href="<?php echo WEB_URL;?>projects/cancelledprojects">Cancelled Projects</a></li>
                                 <li ><a href="<?php echo WEB_URL;?>projects/archiveProject">Archive Projects</a></li>  
				<li ><a href="<?php echo WEB_URL;?>projects/allprojects">View All Projects</a></li>  
                               
                               
                                
			</ul>
		</li>
		<li class="dropdown">
			<a  href="#" class="dropdown-toggle <?php if(!empty($tactive)){echo $tactive;}?>" data-hover="dropdown">Translator</a>
			<ul class="dropdown-menu">
				<li ><a href="<?php echo WEB_URL;?>tastatranslators">Search Translator</a></li>
				<li ><a href="<?php echo WEB_URL;?>tastatranslators/preferred_translators">Preferred Translator</a></li>
                                <li ><a href="<?php echo WEB_URL;?>tastatranslators/track_requestbid">Track Request Bid</a></li>
                                <li ><a href="<?php echo WEB_URL;?>tastatranslators/shortlist">Short Listed Bidders</a></li>
                                <li ><a href="<?php echo WEB_URL;?>tastatranslators/ignore">Ignored Bidders</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a  href="#" class="dropdown-toggle <?php if(!empty($factive)){echo $factive;}?>" data-hover="dropdown">Finances</a>
			<ul class="dropdown-menu">
				<li ><a href="<?php echo WEB_URL;?>Myfinancials">Invoice Lists</a></li>
                                <li ><a href="<?php echo WEB_URL;?>Myfinancials/payVoucherlist">Payment Voucher Lists</a></li>
                                <li ><a href="<?php echo WEB_URL;?>Myfinancials/receiptVoucherlist">Receipt Voucher Lists</a></li>
<!--				<li ><a href="<?php echo WEB_URL;?>Myfinancials/Transfer_funds">Transfer Funds</a></li>-->
				<li ><a href="<?php echo WEB_URL;?>Myfinancials/Deposit_funds">Deposit Funds</a></li>
				<li ><a href="<?php echo WEB_URL;?>Myfinancials/History">Transaction History</a></li>  
<!--				<li ><a href="<?php echo WEB_URL;?>Myfinancials/Cancelled">Cancelled Payments</a></li>  -->
				<li ><a href="<?php echo WEB_URL;?>Myfinancials/Subscription_fee">Subscription Fee</a></li> 
				<li ><a href="<?php echo WEB_URL;?>Myfinancials/clientDisputes">Disputes</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a  href="#" class="dropdown-toggle <?php if(!empty($fdactive)){echo $fdactive;}?>" data-hover="dropdown">Feedback</a>
			<ul class="dropdown-menu">
			<li ><a href="<?php echo WEB_URL;?>Myfeedbacks/View_Feedback">View Feedbacks</a></li>
                        <li ><a href="<?php echo WEB_URL;?>Myfeedbacks/givenFeedbacks">My Feedbacks</a></li>
			<li ><a href="<?php echo WEB_URL;?>Myfeedbacks/Feedback_to_Translator">Feedback to Translator</a></li>
			<li ><a href="<?php echo WEB_URL;?>Myfeedbacks/Feedback_to_TASAT">Feedback to TASAT</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a  href="#" class="dropdown-toggle <?php if(!empty($cmactive)){echo $cmactive;}?>" data-hover="dropdown">Messages</a>
			<ul class="dropdown-menu">
			<li ><a href="<?php echo WEB_URL;?>Cmessages/sendMessage">Send Message</a></li>
			<li ><a href="<?php echo WEB_URL;?>Cmessages/clientInbox">Inbox Messages</a></li>
			<li ><a href="<?php echo WEB_URL;?>Cmessages/Sent">Sent Messages</a></li>
			<li ><a href="<?php echo WEB_URL;?>Cmessages/Archive">Archive Message</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a  href="#" class="dropdown-toggle" data-hover="dropdown">My Account</a>
			<ul class="dropdown-menu">
			<li ><a href="<?php echo WEB_URL; ?>home/myProfile">View Profile</a></li>
			<li ><a href="<?php echo WEB_URL; ?>dashboard/Change_Password">Change Password</a></li>  
			<li ><a href="<?php echo WEB_URL; ?>login/logout">Logout</a></li>  
			</ul>
		</li>
	</ul>
	<span class="user-name"> Welcome : <?php echo $this->session->userdata('login_user_patr')." ".$this->session->userdata('login_user_fname')." ".$this->session->userdata('login_user_lname'); ?></span>
</div>
<!--------------dashboard menu bar ends here------->