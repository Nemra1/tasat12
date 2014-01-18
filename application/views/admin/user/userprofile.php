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
<style>
    .functionlinks{position: absolute; float: right; margin: -30px 300px;}
    .functionlinks a{ float: left; margin-left: 15px;}
    #location{line-height: 20px;}
</style>
<?php foreach ($client as $details)?>
<!--<div class="main_content_box_5" >-->
    <div class="head-blue1" ><?php echo $res['cl_first_name'].' '.$res['cl_last_name']; ?> </div> 
    <span id="location">Location : <?php echo $res['cl_first_name']; ?><br>
        &nbsp;Member Since:July 2000</span>
    <span class="functionlinks">
    <a href="" class="button">Approve</a>
    <a href="" class="button">Reject</a>
    <a href="<?php echo WEB_URL; ?>admin/sendMessage" class="button">Send Message</a>
    </span>
    <table width="100%" border=0 cellspacing="0" cellpadding="0">
        
    <tr>
            <td  rowspan=3 width="100px" height="180px">
                <img id="profileimg" width="179px"  height="223px"src="<?php echo WEB_PATH; ?>images/dpm.jpg"/>
            </td>
    </tr>
       
           
        <tr>
          <td>         
              <div style="margin-top:-8px;" class="head-blue">Written translation,live video translation</div>
                <p id="profiledesc">I am Mr.John Smith from Bangalore, India. I'm a professional translator between English and Simplified & Traditional Chinese, also I am a native Chinese speaker.
                    I've more than ten years translation related work experience. 
                    As a translator between English and Chinese I worked in US for more than three years.
                    I can be deicated to my translation work and take full responsibility to do that, so the job I do will be strict accuracy and high quality. Total translation volume between English and Chinese has reached 4 million to date.
                </p> 
                <p class="flip">Show My Skills 
                <!--<div style="float:right; margin-right: 5px"><img src="<?php echo IMG_PATH; ?>images/down.jpg" height=20px; width=30px" style="margin-top:200px"/></div>-->
                </p>

                <!--<div class="head-blue" id="skillpanel"> Show My Skills: </div>-->
                <div class="skillpanel">
                    <table>
                        <tr><th>Project type</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Rate</th></tr>
                        <tr><td>Written translation</td>
                        <td>Chinese</td>
                        <td>English</td>
                        <td>$50/hr</td></tr>


                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>
</div>
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