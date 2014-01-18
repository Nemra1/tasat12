<div class="top_head">
	<div class="logo">
		<a href="<?php echo WEB_URL;?>"><img src="<?php echo IMG_PATH;?>images/logo.jpg" /> </a> 
	</div>
	<div class="top_left">
		<div class="left_top">Choose Interface Language 
			<select style="width:155px; float:right;">
			  <option>English</option> 
			  <option>Russian</option>
			  <option>Chinese</option>
			  <option>Spanish</option>
			  <option>Arabic</option>
			  <option>Italian</option>
			  <option>German</option>
			  <option>French</option>
			  <option>Japanese</option>
			</select>
		</div>
		<div class="menu"> 
		   <div class="menu_nav">
				<ul>
				  <li class="<?php if(!empty($homecls)) { echo $homecls; }?>"><a href="<?php echo WEB_URL;?>">Home</a></li>
				  <li class="<?php if(!empty($abtuscls)){ echo $abtuscls; }?>"><a href="<?php echo WEB_URL;?>AboutUs" >About TASAT</a></li>
				  <li class="<?php if(!empty($howitcls)) { echo $howitcls; } ?>"><a href="<?php echo WEB_URL;?>HowitWorks">How it Works </a></li>
				  <li class="<?php if(!empty($faqcls)) {echo $faqcls; }?>"><a href="<?php echo WEB_URL;?>FAQ">FAQ</a></li>
				  <li class="<?php if(!empty($contcls)) {echo $contcls;} ?>"><a href="<?php echo WEB_URL;?>ContactUs">Contact Us</a></li>
				</ul>
			  </div>
			
		</div>
	</div>
</div>