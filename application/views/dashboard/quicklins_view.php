<script type="text/javascript">
	$(document).ready(function() {
		 $('.tooltip').tooltipster();
	});
</script>
  <div class="main_content_box_5">
	
    <div class="breadcrumb">
    <a href="<?php echo WEB_URL; ?>">Home</a> > <a href="<?php echo WEB_URL; ?>dashboard">Client Dashboard</a>  <?php if($pagetitle != 'My Dashboard') echo '><span> '.$pagetitle.'</span>'; ?>
    </div>
    
<!--start-->

	<div class="table_grid">
		<table cellspacing="0" cellpadding="0" border="0" >
			<thead>
			<!--tr class="quicklinks">
			<td colspan='8'>
				<span>Quick Links</span>
			</td>
			</tr-->
			</thead>
			<tbody>
			<tr class="quicklinks_img">
				<td><center><a href="<?php echo WEB_URL; ?>dashboard/Change_Password"><img src="<?php echo IMG_PATH;?>images/changepass.png" class="tooltip" title="Change Pasword"/></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>projects"><img src="<?php echo IMG_PATH;?>images/add-proj.png" class="tooltip" title="Add new project"/></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>projects/Ongoing_projects"><img src="<?php echo IMG_PATH;?>images/ongoing.png" class="tooltip" title="Ongoing Projects"/></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>projects/completedprojects"><img src="<?php echo IMG_PATH;?>images/completed.png" class="tooltip" title="Completed Projects" /></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>projects/allprojects"><img src="<?php echo IMG_PATH;?>images/allprojects.png" class="tooltip" title="All Projects"/></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>tastatranslators"><img src="<?php echo IMG_PATH;?>images/searchtranslator.png" class="tooltip" title="Search for Translator"/></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>Myfeedbacks/View_Feedback"><img src="<?php echo IMG_PATH;?>images/feedback.png" class="tooltip" title="My Feedbacks"/></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>Cmessages/Inbox"><img src="<?php echo IMG_PATH;?>images/mail_inbox.png" class="tooltip" title="Messages" /></a></center></td>
				<td><center><a href="<?php echo WEB_URL;?>dashboard/videochat"><img src="<?php echo IMG_PATH;?>images/videochat.png" class="tooltip" title="Video Chat" /></a></center></td>
			</tr>
		  </tbody>
		</table>
		<br />
  <strong style="font-size:18px; color:#1d71a8; padding-left:0px;"><?php echo $pagetitle; ?></strong>
  <hr />
		