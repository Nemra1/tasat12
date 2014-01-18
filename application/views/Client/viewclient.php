<script type="text/javascript">
    $(document).ready(function() {
        $('#save_button').hide();
        $('#cancel_button').hide();
        $('#save_location').hide();
        $('.hover_pd').hide();
        $('#tabs div').hide();
        $('.descd1').hide();
        $('.descd2').hide();
        $('.descd3').hide();
        $('.desc_a1').hide();
        $('.desc_a2').hide();
        $('.desc_a3').hide();
        $('.desc_b1').hide();
        $('.desc_b2').hide();
        $('.desc_b3').hide();
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
   
    });//ready function end
    function changePage() {
        var pageURL = '<?php echo WEB_URL; ?>tastatranslators/searchtranslator';

        window.location.href = pageURL;
    }
              
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

<script type="text/javascript">
$(document).ready(function(){
$('#tabs div').hide();
$('#tabs div:first').show();
$('#tabs ul li:first').addClass('active');
$('#tabs ul li a').click(function(){ 
$('#tabs ul li a').removeClass('active');
$(this).addClass('active'); 
var currentTab = $(this).attr('href'); 
$('#tabs div').hide();
$(currentTab).show();
return false;
});
});
</script>

<div class="main_content_box_5" >
    <div >
        <div class="head-blue1" >Peter John </div> <br>
        <span id="location">Location : Bangalore,India<br>
            &nbsp;Member Since:July 2000 <br>
        </span>&nbsp;&nbsp;
 
    </div>
    <table width="100%" border=0 cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <td  rowspan=3 width="100px" height="180px">
                    <img id="profileimg" class="profile_img" src="<?php echo WEB_PATH; ?>images/dpm.jpg"/>
                </td>
    
        <tr><td><div class="head-blue">Chinese translation,live video translation</div>        
                <div class="profiledesc" >
                    <p id="profiledesc" >I am Mr.Peter John from Bangalore, India.Iam working in this field for last 4 years.
                         I am working for a web development company.We, work on translation projects.,especially projects based on China.Different types of translation required for our projects and as well as communication with other clients from China,Korea.I need to Translate 4388 words English to Chinese.
                         English to Chinese translation needed for contents in an existing education institute website. Approximately less than 100 articles.
                    
                     </p> 
                               </td></tr>
        </thead>
        <tbody>
            <tr align=center>
                <td align="center" >
                    <div class="bidrate">
                      
                    </div>
                    
                    <a href="<?php echo WEB_URL; ?>Myfeedbacks/View_Feedback" id="portfolio" ><h3>Feedback</h3></a>
<!--                    <form  action="#" method="post">
                        <span class="search_trans">Search Translators</span><br>
                        <input style="margin-left:-13px" class="search_trans" type="text" value="Name&hellip;"  onfocus="this.value = (this.value == 'Name&hellip;') ? '' : this.value;" class="rounded"/>&nbsp
                        <a class="button_index">Go</a>
                    </form>-->
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
  			<ul id="switch_ul" >
                                            <li><a class="active" href="#tab-1">Project Posted</a></li>
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
                                                    <td width="40%">Press Release Translation&nbsp;&nbsp;&nbsp;
                                                    <td>$35 USD</td>
                                                    <td width="40%"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> 
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> 
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> 
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"></td>
                                                    <td colspan="2">5.0</td>
                                                </tr>
                                            </table>   

                                            <p></p>
                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                               Hello,We are looking for professional translators for technical translation. 
                                               Documents are in English and the total word count is 32000.
                                                <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="descd1">[more]</a></p>
                                                <p class="descd1" id="box-pjtdetail_1">
                                                <span style="font-family:'Callibri';">Project Description:</span> 
                                                Press Translation for ABC Company.Screens with full functionality of Press</p>
                                            <p><span>30 days ago</span></p>
                                            <hr>

                                            <table class="inner-table">
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                                <tr class="thhead">
                                                    <td width="40%">Press Release Translation&nbsp;&nbsp;&nbsp;

                                                    <td>$42 USD</td>
                                                    <td width="40%"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"></td>
                                                    <td colspan="2">4.0</td>
                                                </tr>
                                            </table>   

                                        <p></p>
                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                                Hello,We are looking for professional translators for technical translation. 
                                                Documents are in English and the total word count is 32000.m
                                                <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="descd2">[more]</a></p>
                                                <p class="descd2" id="box-pjtdetail_2">
                                                <span style="font-family:'Callibri';">Project Description:</span> 
                                                Hello,We are looking for professional translators for technical translation. 
                                                Documents are in English and the total word count is 32000.</p>
                                            <p><span>30 days ago</span></p>
                                            <hr>      

                                            <table class="inner-table">
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                                <tr class="thhead">
                                                    <td width="40%">Press Release Translation&nbsp;&nbsp;&nbsp;

                                                    <td>$29 USD</td>
                                                    <td width="40%"> <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"> 
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated">
                                                        <img src="<?php echo WEB_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"></td>
                                                    <td colspan="2">4.0</td>
                                                </tr>
                                            </table>   
                                            <p></p>
                                            <p id="projdesc" style="font-family:inherit;font-size:14px;">
                                               Hello,We are looking for professional translators for technical translation. 
                                               Documents are in English 
                                                <span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="descd3">[more]</a></p>
                                                <p class="descd3" id="box-pjtdetail_3">
                                                <span style="font-family:'Callibri';">Project Description:</span> 
                                                Press Translation for ABC Company.Screens with full functionality of Press</p>
                                            <p><span>30 days ago</span></p>
                                            <hr>             
                                            </p>
                                        </div>
             <div id="tab-2">
                                                      <p>
<table class="inner-table">

    <tr class="thhead">
    <td width="40%">Legal Translation
    <td>$656 USD</td>
    <td width="20%"> 
        </tr>
</table>   

<p id="projdesc" style="font-family:inherit;font-size:14px;">
<span style="font-family:'Callibri';">Project Description:</span> 
    this project is based on written translation.This project is for ABC company.
<span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_b1">[more]</a></span></p>
    
        <p class="desc_b1" id="box-pjtdetail11" style="font-family:inherit;font-size:14px;">
         Chine Translation for ABC Company. I need to Translate 4388 words English to Chinese within next 2 to 3 Days.. Texts are very simple...</p>
    <p><span>Started On:02-03-13</span></p>
    <hr>

    <table class="inner-table">
        <tr>
        <td colspan="6"></td>
        </tr>
        <tr class="thhead">
        <td width="40%">Legal Translation&nbsp;&nbsp;&nbsp;

        <td>$400USD</td>
        <td width="20%"> 
        </td>

        </tr>
    </table>   
<p id="projdesc" style="font-family:inherit;font-size:14px;">
<span style="font-family:'Callibri';">Project Description:</span> 
    this project is based on written translation.This project is for ABC company.
<span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_b2">[more]</a></span></p>
    
        <p class="desc_b2" id="box-pjtdetail12" style="font-family:inherit;font-size:14px;">
         I need to Translate 4388 words English to Chinese within next 2 to 3 Days.. Texts are very simple...</p>
    <p><span>Started On:02-03-13</span></p>
        <hr>      

        <table class="inner-table">
            <tr>
            <td colspan="6"></td>
            </tr>
            <tr class="thhead">
            <td width="40%">Legal Translation

            <td>$400USD</td>
            <td width="20%">
            </td>

            </tr>
        </table>   
<p id="projdesc" style="font-family:inherit;font-size:14px;">
<span style="font-family:'Callibri';">Project Description:</span> 
    this project is based on written translation.This project is for ABC company.
<span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_b3">[more]</a></span></p>
    
        <p class="desc_b3" id="box-pjtdetail13" style="font-family:inherit;font-size:14px;">
 I need to Translate 4388 words English to Chinese within next 2 to 3 Days.. Texts are very simple...</p>
    <p><span>Started On:02-03-13</span></p>
                      
            </p>  <hr>              
                                            </p>
                                        </div>
                     <div id="tab-3">
              <p>
<table class="inner-table">

    <tr class="thhead">
    <td width="40%">Legal Translation
    <td>$656 USD</td>
    <td width="20%"> 
        </tr>
</table>   

<p id="projdesc" style="font-family:inherit;font-size:14px;">
<span style="font-family:'Callibri';">Project Description:</span> 
    a 1300 words article needs to be translated from Chinese to English. Qualified and experienced translator pls leave your interest.
    Thanks
<span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_a1">[more]</a></span></p>
    
        <p class="desc_a1" id="box-pjtdetail11" style="font-family:inherit;font-size:14px;">
        This project is for ABC company.</p>
    <p><span>Started On:02-03-13</span></p>
    <hr>

    <table class="inner-table">
        <tr>
        <td colspan="6"></td>
        </tr>
        <tr class="thhead">
        <td width="40%">Legal Translation&nbsp;&nbsp;&nbsp;

        <td>$400USD</td>
        <td width="20%"> 
        </td>

        </tr>
    </table>   
<p id="projdesc" style="font-family:inherit;font-size:14px;">
<span style="font-family:'Callibri';">Project Description:</span> 
We need someone to help us translate a number of documents from English to Chinese. They are promotional and analytical documents that relate to immigrating to the U.S.
<span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_a2">[more]</a></span></p>
    
        <p class="desc_a2" id="box-pjtdetail12" style="font-family:inherit;font-size:14px;">
        he most important requirement is experience in translation, especially in writing promotional materials attractive to Mainland Chinese..</p>
    <p><span>Started On:02-03-13</span></p>
        <hr>      

        <table class="inner-table">
            <tr>
            <td colspan="6"></td>
            </tr>
            <tr class="thhead">
            <td width="40%">Legal Translation

            <td>$400USD</td>
            <td width="20%">
            </td>

            </tr>
        </table>   
<p id="projdesc" style="font-family:inherit;font-size:14px;">
<span style="font-family:'Callibri';">Project Description:</span> 
     am looking for someone to provide me the translation and transliteration of the Muslim prayer .
<span style="float:right;cursor:pointer;"><a onclick="hideshow(this.id);" id="desc_a3">[more]</a></span></p>
    
        <p class="desc_a3" id="box-pjtdetail13" style="font-family:inherit;font-size:14px;">
       I need official translations and transliterations only.</p>
    <p><span>Started On:02-03-13</span></p>
                      
            </p>  <hr>              
                                            </p>
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

