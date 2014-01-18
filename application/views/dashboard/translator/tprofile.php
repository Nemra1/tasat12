<script type="text/javascript">
    $(document).ready(function() {
        $('#tabs div').hide();
        $('#box-pjtdetail').hide();
        $('.desc1').hide();
        $('.desc2').hide();
        $('.desc3').hide();
        $('.desc_c1').hide();
        $('.desc_c2').hide();
        $('.desc_c3').hide();
        $('.tdesc1').hide();
        $('.tdesc2').hide();
        $('.tdesc3').hide();
        $('.desc3').hide();
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

    });//end ready

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.tooltip').tooltipster();
    });
</script>
<script type="text/javascript">
    $(function() {
        $('.more').hover(function() {

            $('.Detailsproj').show();

        }, function() {
            $('.Detailsproj').hide();
        });
    });

    stateset = 0;
    function hideshow(id) {

        if (stateset == 0) {
            $('.' + id).show();
            $('#' + id).text('[less]');
            stateset = 1;
        }

        else {
            $('.' + id).hide();
            $('#' + id).text('[more]');
            stateset = 0;
        }
    }

</script>  


<div class="main_content_box_5" >
    <div class="head-blue1" > John Smith  </div> 
    <span id="location">Location : Bangalore,India<br>
        &nbsp;Member Since:July 2000</span>
      <h3>REPUTATION</h3>
            <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
            <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
            <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
            <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
            <img src="<?php echo WEB_PATH; ?>images/star_half.png" style="height:24px;width:24px;" title="4.5 Star rated"> 
    <table width="100%" border=0 cellspacing="0" cellpadding="0">

            <tr>
                    <td>    <div class="content_box2"> 	
                <span class="head-blue" > My Activity:</span><br>
                Completed Project: 8<br><Br>
                Ongoing Project: 10<br><br>
                Projects' Bid: 9</div></td>
          <td>  <a href="<?php echo WEB_URL ?>projects/hire" class="button hire_button">Hire</a></td>
            <tr>
            <td> <img id="profileimg" width="179px"  height="223px"src="<?php echo WEB_PATH; ?>images/dpm.jpg"/></td>
            <td>         
                <div style="margin-top:-8px;" class="head-blue">Written translation,live video translation</div>
                <p id="profiledesc">I am Mr.John Smith from Bangalore, India. I'm a professional translator between English and Simplified & Traditional Chinese, also I am a native Chinese speaker.
                    I've more than ten years translation related work experience. 
                    As a translator between English and Chinese I worked in US for more than three years.
                    I can be deicated to my translation work and take full responsibility to do that, so the job I do will be strict accuracy and high quality. Total translation volume between English and Chinese has reached 4 million to date.
                </p> </td>
            <tr><td colspan="3"> <p class="flip">Click Here To See My Skills 
                <!--<div style="float:right; margin-right: 5px"><img src="<?php echo IMG_PATH; ?>images/down.jpg" height=20px; width=30px" style="margin-top:200px"/></div>-->
                </p>

                <!--<div class="head-blue" id="skillpanel"> Show My Skills: </div>-->
                <div class="skillpanel"><table>
                        <tr><th>project type</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Rate</th></tr>
                        <tr><td>Written translation</td>
                        <td>Chinese</td>
                        <td>English</td>
                        <td>$50/hr</td></tr>
                    </table></div>
            </td></tr>

            <tr align=center>
            <td align="center" >
                <div class="bidrate">

                </div>

                <a id="portfolio" href="#"><h3>Resume</h3></a>
                <a id="portfolio" href="<?php echo WEB_URL; ?>Myfeedbacks/View_Feedback"><h3>Feedback</h3></a>
                <input type="button" class="button search_trans search_b" value="Find translator" onclick="changePage();" />

            </td>
            <td>         	
                <table cellspacing="0" cellpadding="0" border="0" width="100%" >
                    <thead>
                        <tr class="quicklinks">
                        <td colspan='5'>
                        <span>Project References</span>
                        </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table_th">
                        <td>
                            <div id="tabs">
                                <ul class="translate-nav-tabs">
                                    <li><a href="#tab-1">Completed Work</a></li>
                                    <li><a href="#tab-2">Ongoing Projects</a></li>
                                    <li><a href="#tab-3">Latest Bids</a></li>
                                </ul><br/><br/>
                                <div id="tab-1">
                                    <p>
                                    <table class="inner-table">
                                        <tr>
                                        <td colspan="6"></td>
                                        </tr>
                                        <tr class="thhead">
                                        <td width="40%">Chinese Translation&nbsp;&nbsp;&nbsp;
                                        <td>$50 USD</td>
                                        <td width="40%"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"></td>
                                        <td colspan="2">5.0</td>
                                        </tr>
                                    </table>   
                                    <p><a href="<?php echo WEB_URL; ?>tastatranslators/translator_profile">Peter John</a></p>
                                    <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                        “ Excellent Translator...super work from the best person in freelancer.com....will hire him again for sure....Thanks ”
                                    <span style="float:right;cursor:pointer;">
                                        <a onclick="hideshow(this.id);" id="desc1">[more]</a></span></p>
                                    <p class="desc1" id="box-pjtdetail1">
                                    <span style="font-family:'Callibri';">Project Description:</span> 
                                    Chine Translation for ABC Company. I need to Translate 4388 words English to Chinese within next 2 to 3 Days.. Texts are very simple....
                                    I need very good work...no any Google work please Only Natives please.</p>
                                    <p><span>30 days ago</span></p>
                                    <hr>

                                    <table class="inner-table">
                                        <tr>
                                        <td colspan="6"></td>
                                        </tr>
                                        <tr class="thhead">
                                        <td width="40%">Chinese Translation&nbsp;&nbsp;&nbsp;

                                        <td>$426 USD</td>
                                        <td width="40%"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"></td>
                                        <td colspan="2">4.0</td>
                                        </tr>
                                    </table>   

                                    <p><a href="<?php echo WEB_URL; ?>tastatranslators/translator_profile">Peter John</a></p>


                                    <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                        “ Excellent Translator...super work from the best person in freelancer.com....will hire him again for sure....Thanks. I would recommend him."
                                    <span style="float:right;cursor:pointer;">
                                        <a onclick="hideshow(this.id);" id="desc2">[more]</a></span></p>
                                    <p class="desc2" id="box-pjtdetail2">
                                    <span style="font-family:'Callibri';">Project Description:</span>
                                    Press Translation for CAB Company.Screens with full functionality of Press.Press Translation for CAB Company.S
                                    creens with full functionality of Press</p>
                                    <p><span >10 days ago</span></p>
                                    <hr>      

                                    <table class="inner-table">
                                        <tr>
                                        <td colspan="6"></td>
                                        </tr>
                                        <tr class="thhead">
                                        <td width="40%">Chinese Translation&nbsp;&nbsp;&nbsp;

                                        <td>$296 USD</td>
                                        <td width="40%"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"></td>
                                        <td colspan="2">4.0</td>
                                        </tr>
                                    </table>   
                                    <p><a href="<?php echo WEB_URL; ?>tastatranslators/translator_profile">Peter John</a></p>
                                    <p id="projdesc" style="font-family:inherit;font-size:14px;">Excellent Work done by Mr.John Smith. Highly Professional.
                                    <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc3">[more]</a></p>
                                        <p class="desc3" id="box-pjtdetail2">
                                        <span style="font-family:'Callibri';">Project Description:</span>
                                        We have an app in the apple app store currently in english and russian and we need to add arabic and chinese versions.
                                        All together it's probably 1 page of typed text that needs to be translated</p>
                                        <p><span >20 days ago</span></p>
                                        <hr>             
                                        </p>
                                        </div>


                                        <div id="tab-2">

                                            <p>
                                            <table class="inner-table">

                                                <tr class="thhead">
                                                <td width="40%">Chinese Translation
                                                <td>$656 USD</td>
                                                <td width="20%"> 

                                                    </tr>
                                            </table>   

                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                            <span style="font-family:'Callibri';">Project Description:</span> 
                                            English to Chinese translation needed for contents in an existing education institute website. Approximately less than 100 articles.
                                            Translation should be completed within a week, with .. 
                                            <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_c1">[more]</a></span></p>

                                            <p class="desc_c1" id="box-pjtdetail1" style="font-family:inherit;font-size:14px;">
                                                .each translated article emailed back as soon as it is completed.</p>
                                            <p><span>Started On:02-03-13</span></p>
                                            <hr>

                                            <table class="inner-table">
                                                <tr>
                                                <td colspan="6"></td>
                                                </tr>
                                                <tr class="thhead">
                                                <td width="40%">Chinese Translation&nbsp;&nbsp;&nbsp;

                                                <td>$400USD</td>
                                                <td width="20%"> 
                                                </td>

                                                </tr>
                                            </table>   


                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                            <span style="font-family:'Callibri';">Project Description:</span> 
                                            English to Chinese translation needed for contents in an existing education institute website. Approximately less than 100 articles.
                                            Translation should be completed within a week, with .. 
                                            <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_c2">[more]</a></span></p>

                                            <p class="desc_c2" id="box-pjtdetail2" style="font-family:inherit;font-size:14px;">
                                                .each translated article emailed back as soon as it is completed.</p>
                                            <p><span>Started On:02-03-13</span></p>
                                            <hr>      

                                            <table class="inner-table">
                                                <tr>
                                                <td colspan="6"></td>
                                                </tr>
                                                <tr class="thhead">
                                                <td width="40%">Chinese Translation

                                                <td>$400USD</td>
                                                <td width="20%">
                                                </td>

                                                </tr>
                                            </table>   
                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                            <span style="font-family:'Callibri';">Project Description:</span> 
                                            this project is based on written translation.This project is for ABC company.English to Chinese translation needed for contents in an existing education institute website. Approximately less than 100 articles.
                                            .. 
                                            <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_c3">[more]</a></span></p>

                                            <p class="desc_c3" id="box-pjtdetail3" style="font-family:inherit;font-size:14px;">
                                                .each translated article emailed back as soon as it is completed.This is a very simple project that will take about 1-2 hours</p>
                                            <p><span>Started On:02-03-13</span></p>
                                            <hr>             
                                            </p>

                                        </div>
                                        <div id="tab-3">
                                            <p>
                                            <table class="inner-table">

                                                <tr class="thhead">
                                                <td width="40%">chinese Translation
                                                <td>$656 USD</td>
                                                <td width="20%"> 

                                                    </tr>
                                            </table>   

                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                            <span style="font-family:'Callibri';">Project Description:</span> 
                                            The project is to translate a 8-page English project description into Chinese. It is an introduction about a vineyard project in Seattle...
                                            <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="tdesc1">[more]</a></span></p>

                                            <p class="tdesc1" id="box-pjtdetaila" style="font-family:inherit;font-size:14px;">
                                                The first page is the cover page and only the title needs to be translated. </p>
                                            <p><span>Started On:02-03-13</span></p>
                                            <hr>

                                            <table class="inner-table">
                                                <tr>
                                                <td colspan="6"></td>
                                                </tr>
                                                <tr class="thhead">
                                                <td width="40%">Translate  to Chinese Language&nbsp;&nbsp;&nbsp;

                                                <td>$400USD</td>
                                                <td width="20%"> 
                                                </td>

                                                </tr>
                                            </table>   


                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                            <span style="font-family:'Callibri';">Project Description:</span> 
                                            The project is to translate a 8-page English project description into Chinese. It is an introduction about a vineyard project in Seattle...
                                            <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="tdesc2">[more]</a></span></p>

                                            <p class="tdesc2" id="box-pjtdetailb" style="font-family:inherit;font-size:14px;">
                                                The first page is the cover page and only the title needs to be translated. ..</p>
                                            <p><span>Started On:02-03-13</span></p>
                                            <hr>      

                                            <table class="inner-table">
                                                <tr>
                                                <td colspan="6"></td>
                                                </tr>
                                                <tr class="thhead">
                                                <td width="40%">Chinese website 

                                                <td>$400USD</td>
                                                <td width="20%">
                                                </td>

                                                </tr>
                                            </table>   
                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                            <span style="font-family:'Callibri';">Project Description:</span> 
                                            The project is to translate a 8-page English project description into Chinese. It is an introduction about a vineyard project in Seattle..This project is for ABC company.
                                            <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="tdesc3">[more]</a></span></p>

                                            <p class="tdesc3" id="box-pjtdetailc" style="font-family:inherit;font-size:14px;">
                                                The first page is the cover page and only the title needs to be translated. </p>
                                            <p><span>Started On:02-03-13</span></p>

                                            </p>  <hr> 

                                        </div>

                                </div>
                        </td>

                        </tr>

                    </tbody>
                </table>
            </td>
            </tr> 

        </tbody>
    </table>
</div>

<div class="clr"></div>
<script type="text/javascript">
    function changePage() {
        var pageURL = '<?php echo WEB_URL; ?>tastatranslators/searchtranslator';

        window.location.href = pageURL;
    }
    $(document).ready(function() {
        $(".flip").click(function() {
            $(".skillpanel").slideToggle("slow");
        });
    });
</script>


