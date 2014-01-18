
<script type='text/javascript'>
    $(function() {
        var overlay = $('<div id="overlay"></div>');
        $('.close').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.x').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.click').click(function() {
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            return false;
        });
    });
</script>
<div class="content"> 
    <div class="content_left">
        <div class="leftside_1">  
            <form action="#" method="post">
                <input style="margin-left:15px;" class="myButton click" type="BUTTON" value="Register">
                <input style="margin-left:45px;" class="myButton" id="postaproject" type="BUTTON" value="Post a Project">
                </fieldset>
            </form>

            <div class='popup'>
                <div class='popupContent'>
                    <img src='<?php echo IMG_PATH; ?>images/x.png' alt='quit' class='x' id='x' />
                    <a href="<?php echo WEB_URL; ?>itranslator/logindetails" class="regclick">
                        <div class="reg">
        <!--                <p style="width:110px; background-color: grey; height: 130px;"></p>-->
                            <img src="<?php echo IMG_PATH; ?>images/indtrans.png" width="110">
                            <h2>Register As</h2>
                            <h4>Indivisual Translator</h4>
                        </div>
                    </a>
                    <a href="<?php echo WEB_URL; ?>Ctranslator/logindetails" class="regclick">
                        <div class="reg">
        <!--                <p style="width:110px; background-color: grey; height: 130px;"></p>-->
                            <img src="<?php echo IMG_PATH; ?>images/company.png" width="110">
                            <h2>Register As</h2>
                            <h4>Translation Company</h4>
                        </div>
                    </a>
                    <a href="<?php echo WEB_URL; ?>registration/logindetails" class="regclick">
                        <div class="reg">
        <!--                <p style="width:110px; background-color: grey; height: 130px;"></p>-->
                            <img src="<?php echo IMG_PATH; ?>images/clienticon.png" width="110">
                            <h2>Register As</h2>
                            <h4>Client</h4>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="leftside_2"><form action="#" method="post">

                <input style="margin-left:2px;"class="myButton" id="findtrans" type="BUTTON" value="Find Translator">
                <input style="margin-left:15px;" class="myButton" id="browseprojectId" type="BUTTON" value="Browse Projects">
                </fieldset>
            </form> </div> 

        <div class="left_content_colum">

            <div class="left_c1">

                <div class="image_1"><img src="<?php echo IMG_PATH; ?>images/img1.jpg" /></div>
                <div class="heading_img">Online Interpretation</div>
                <div class="image_matter">Tasat Translation is the web's leading professional translation service. It offers High-Quality, Fast, 24/7 Professional human translation service. Tasat Translation is working with a community of over 8000 translators from all over the world. </div>

                <div class="readmore"><a href="onlineinterpretation.html" class="button_atd">Read More</a></div>

            </div>

            <div class="left_c1_2">

                <div class="image_1"><img src="<?php echo IMG_PATH; ?>images/img2.jpg" /></div>
                <div class="heading_img">Document Translation</div>

                <div class="image_matter">Leading translation services provider Tasat strives to provide reliable document translation services of the highest caliber, and at a competitive price. Tasat has extensive experience. </div>

                <div class="readmore"><a href="Professional_Translation.html" class="button_atd">Read More</a></div>

            </div>

        </div>  

        <div class="bottom_colum"> 

            <div class="bottom_tab">
                <ul id="minitabs">
                    <li id="current"><a href="#" name="tab4">Announcement</a></li>
                    <li><a href="#" name="tab5">TASAT Status</a></li>    
                </ul>

                <div id="minicontent"> 
                    <div id="tab4" style="display: block; ">
                        <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" height="95px" width="210px;" scrollamount="2" style="text-align:justify;">
                            <span style="color:#F00; font-size:13px;"><a href="announcement.html">Tasat Translators </a></span> <br />
                            Tasat Translation is working with a community of over 8000 translators from all over the world.

                            <br />

                            <span style="color:#F00; font-size:13px;"><a href="announcement.html">New joinee Company </a></span> <br />
                            Many big companies are using Tasat Translation services.

                        </marquee> 
                        <p align="right"><a href="announcement.html">Read more </a></p>

                    </div>



                    <div id="tab5" style="display: none; ">
                        <span style="color:#F00; font-size:13px;">283 </span> Individuals<br /><br />
                        <span style="color:#F00; font-size:13px;">100 </span> Companies<br /><br />
                        <span style="color:#F00; font-size:13px;">200</span>  Interpreters 


                    </div>
                </div>



            </div>

<div class="bottom_tab2"><!--<img src="images/video.png" />-->
                <iframe width="261" height="188" src="http://www.youtube.com/embed/miJc_UAeeJU" frameborder="0" allowfullscreen>
                </iframe>
            </div>

        </div>


    </div>
    <script>
    $("#postaproject").click(function() {
        window.location.href = "<?php echo WEB_URL; ?>registration/logindetails"

    });
    $("#browseprojectId").click(function() {
        window.location.href = "<?php echo WEB_URL; ?>projects/browseProjects"

    });
    $("#findtrans").click(function() {
        window.location.href = "<?php echo WEB_URL; ?>tastatranslators/findTranslator"

    });

    </script>