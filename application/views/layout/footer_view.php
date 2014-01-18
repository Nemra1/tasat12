<div class="footer">

<div class="footer_inside">
              <div class="footer_inside_1"> 
              <span style="color:#4ea6d6;">Company Details</span><br />
              <img src="<?php echo IMG_PATH;?>images/line.jpg" />
              
               <a href="<?php echo WEB_URL;?>"> Home</a>
              <img src="<?php echo IMG_PATH;?>images/line.jpg" />
			  <a href="<?php echo WEB_URL;?>HowitWorks">How it Works</a>
                <img src="<?php echo IMG_PATH;?>images/line.jpg" />
			  <a href="<?php echo WEB_URL;?>FAQ">FAQ</a>
            <img src="<?php echo IMG_PATH;?>images/line.jpg" />
			  <a href="<?php echo WEB_URL;?>AboutUs">About us</a>
            <img src="<?php echo IMG_PATH;?>images/line.jpg" />
              
              
              </div>
              
              <div class="footer_inside_2"> 
				<span style="color:#4ea6d6;">Connect with us</span><br />
                <img src="<?php echo IMG_PATH;?>images/line.jpg" />
                <a href="#"> Facebook</a>
                <img src="<?php echo IMG_PATH;?>images/line.jpg" />
				<a href="#">Twitter</a>
                <img src="<?php echo IMG_PATH;?>images/line.jpg" />
				<a href="#">RSS Feed</a>
                <img src="<?php echo IMG_PATH;?>images/line.jpg" />
				<a href="<?php echo WEB_URL;?>Casestudy">Case Studies</a>
				<img src="<?php echo IMG_PATH;?>images/line.jpg" />
              </div>
                     
              <div class="footer_inside_3"> 
					<span style="color:#4ea6d6;">Policies</span><br />
					<img src="<?php echo IMG_PATH;?>images/line.jpg" />
					<a href="<?php echo WEB_URL;?>policies"> Terms of Use</a>
                    <img src="<?php echo IMG_PATH;?>images/line.jpg" />
					<a href="<?php echo WEB_URL;?>policies/privacypolicy">Privacy Policy</a>
                    <img src="<?php echo IMG_PATH;?>images/line.jpg" />
					<a href="<?php echo WEB_URL;?>policies/feature">Features</a>
                    <img src="<?php echo IMG_PATH;?>images/line.jpg" />
					<a href="<?php echo WEB_URL;?>ContactUs">Contact Us</a>
                    <img src="<?php echo IMG_PATH;?>images/line.jpg" />
              </div>
    
    <div class="footer_inside_4"> <span style="color:#fff;">Payment Methods</span>
              <img src="<?php echo IMG_PATH;?>images/socialnetworks.jpg" border="0" usemap="#Map" />
			  <map name="Map" id="Map">
				<area shape="rect" coords="4,8,42,35" href="#" />
				<area shape="rect" coords="45,13,82,33" href="#" />
				<area shape="rect" coords="87,13,121,34" href="#" />
				<area shape="rect" coords="126,11,162,34" href="#" />
				<area shape="rect" coords="168,13,202,33" href="#" />
			  </map>
              Follow Us on<br />
					<img src="<?php echo IMG_PATH;?>images/followoson.jpg" border="0" usemap="#Map2" />
					<map name="Map2" id="Map2">
						<area shape="rect" coords="4,6,26,27" href="#" />
						<area shape="rect" coords="36,6,57,28" href="#" />
						<area shape="rect" coords="67,5,86,34" href="#" />
					</map>
	</div>
    </div>
    <hr>
    
                        <div class="bottom_footer">
                        <div class="bottom_left">Copyright © 2012 <span style="color:#4ea6d6;">TASAT</span> All Rights Reserved.</div>
                       <div class="bottom_right">Powered By<a href="#"> Mangium</a></div>
                       
                       </div>
    
              
  </div>
               
               
              
              
              
               </div>
               
               

</div>





<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>

    <script>
$(document).ready(function() {
    $("#minicontent div").hide(); // Initially hide all content
    $("#minitabs li:first").attr("id","current"); // Activate first tab
    $("#minicontent div:first").fadeIn(); // Show first tab content
    
    $('#minitabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return       
        }
        else{             
        $("#minicontent div").hide(); //Hide all content
        $("#minitabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('name')).fadeIn(); // Show content for current tab
        }
    });
});
</script>
    
</html>