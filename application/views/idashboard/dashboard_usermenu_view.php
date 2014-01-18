<div class="content" style="height:auto;">
    <!--------------dashboard menu bar------->
    <link rel="stylesheet" href="<?php echo WEB_PATH; ?>css/bootstrap.css" type="text/css" />
    <script type="text/javascript" src="<?php echo WEB_PATH; ?>scripts/twitter-bootstrap-hover-dropdown.js"></script>
    <div class="maja-holder">
        <ul id="one">
            <li class="dropdown">
                <a href="<?php echo WEB_URL; ?>translator" class="dropdown-toggle <?php
                if (!empty($active)) {
                    echo $active;
                }
                ?>" data-hover="dropdown"> My Dashboard </a>
                <!--ul class="dropdown-menu">
                    <li ><a href="#">COMPANY PROFILE</a></li>
                    <li ><a href="#">VISSION &amp; MISSION</a></li>
                    <li ><a href="#">CHAIRMAN'S MESSAGE</a></li>  
                </ul-->
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?php
                if (!empty($pactive)) {
                    echo $pactive;
                }
                ?>" data-hover="dropdown"> Projects</a>
                <ul class="dropdown-menu">

                    <li ><a href="<?php echo WEB_URL; ?>myProjects/ongoingProjects">Ongoing Projects</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/Onhold_projects">Onhold Projects</a></li> 
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/completedProjects">Completed Projects</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/cancelledprojects">Cancelled Projects</a></li> 
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/allprojects">All Projects</a></li> 
                     <li ><a href="<?php echo WEB_URL; ?>myProjects/archiveProject">Archive Projects</a></li> 
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/showbookmarkedProjects">Bookmarked Projects</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/BidsRequestList"> Bid Requests</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/recommendedProjects">Recommended Projects</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>myProjects/showprojectList">Browse Projects</a></li> 
                    
                       <li > <a href="<?php echo WEB_URL; ?>myProjects/activeBids">Projects Bidded</a></li> 
                       

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?php
                if (!empty($factive)) {
                    echo $factive;
                }
                ?>" data-hover="dropdown"> Financial</a>
                <ul class="dropdown-menu">
                    <li ><a href="<?php echo WEB_URL; ?>finance/paymentVoucherlist">Payment Voucher List</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>finance/receiptVoucherlist">Receipt Voucher List</a></li>
<!--                    <li ><a href="<?php echo WEB_URL; ?>finance/Transfer_funds">Transfer Funds</a></li>-->
                    <li ><a href="<?php echo WEB_URL; ?>finance/Request_funds">Request Funds</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>finance/History">Transaction History</a></li> 
<!--                    <li ><a href="<?php echo WEB_URL; ?>finance/Cancelled">Cancelled</a></li>-->
                    <li ><a href="<?php echo WEB_URL; ?>finance/translatorDisputes">Disputes</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?php
                   if (!empty($fdactive)) {
                       echo $fdactive;
                   }
                ?>" data-hover="dropdown"> Feedback</a>
                <ul class="dropdown-menu">
                    <li ><a href="<?php echo WEB_URL; ?>feedback/View_Feedback">View Feedbacks</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>feedback/Feedback_Given">My Feedbacks</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>feedback/Feedback_to_Client">Feedback to Client</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>feedback/Feedback_to_TASAT">Feedback to TASAT</a></li>  
                </ul>
            </li>
            <li class="dropdown">
                <a  href="#" class="dropdown-toggle <?php
                    if (!empty($cmactive)) {
                        echo $cmactive;
                    }
                ?>" data-hover="dropdown">Messages</a>
                <ul class="dropdown-menu">
                    <li ><a href="<?php echo WEB_URL; ?>Tmessages/sendMessage">Send Message</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>Tmessages/translatorInbox">Inbox Messages</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>Tmessages/Sent">Sent Messages</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>Tmessages/archive">Archive Message</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="main-a" href="#" class="dropdown-toggle" data-hover="dropdown">My Account</a>
                <ul class="dropdown-menu">
                    <li ><a href="<?php echo WEB_URL; ?>translator/myProfile">View My Profile</a></li>
                    <li ><a href="<?php echo WEB_URL; ?>translator/Change_Password">Change Password</a></li>  
                    <li ><a href="<?php echo WEB_URL; ?>">Logout</a></li>  
                </ul>
            </li>
        </ul>
        <span class="user-name"> Welcome : <?php echo $this->session->userdata('login_user_patr')." ".$this->session->userdata('login_user_fname')." ".$this->session->userdata('login_user_lname'); ?></span>
    </div>
    <!--------------dashboard menu bar ends here------->