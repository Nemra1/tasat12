
<div class="main_content_box_5">
           
<?php foreach($details as $list){ ?>
    <table cellpadding="1" cellspacing="1">

        <tr>
        <td>
            <strong style="font-size:22px; color:#1d71a8; padding-left:0px;"><?php echo $list['pro_name']; ?></strong><br>
            <strong style="font-size:12px; color:#1d71a8; padding-left:0px;"><?php echo $list['pro_type']; ?></strong>
        </td>
        <td></td>
        <td></td>
        <td>
            <div style="float: right; margin-right:-3px;" >
                <span class="verifylinks">
                <a href="<?php echo WEB_URL; ?>admin/approveProject?pid=<?php echo $list['pro_id_pk']; ?> " class="button">Approve</a>
                <a href=" " class="button">Reject</a>
                <a href="<?php echo WEB_URL; ?>admin/sendMessage" class="button">Send Message</a>
                </span>
            </div>
        </td>
        </tr>
        <tr>
        <td>
            <div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10">
                <div class="align-c padding-l10 padding-r5" style="display:inline-block">
                    <div class="margin-b5">Project Budget (USD)</div>
                    <div class="text-blue larger bold"> $ <?php echo $list['pro_budget_min']; ?>-$<?php echo $list['pro_budget_max']; ?>  </div>
                </div>
            </div> 
        </td>
        <td>
        </td>
        <td>
            <div style="margin-right:10px;">
                <div>
                    <img src="<?php echo WEB_PATH; ?>images/searchtranslator.png" width="50px" height="50px"/></div>
                <div  class="head-blue" style="padding-right:10px;">Posted By:<?php echo $list['cl_first_name']." ".$list['cl_last_name'] ?></div>
            
            </div>

        </td>

        </tr>

    </table>
    <div class="well whitebg para silver padding-5  margin-t10 margin-l10 margin-b10">
        <div style="margin-left:15px">
            <div class="head-blue"> Project Description: <br/></div>
               
 <?php echo $list['pro_desc']; ?> <br/>
            <div class="head-blue"> Languages Required: <br/></div>
            <?php echo $list['pro_langfrom']; ?> to &nbsp;<?php echo $list['pro_langto']; ?> 
            <div class="head-blue"> Duration of Project: <br/></div>
      <?php echo $list['pro_duration']; ?>
        </div>

    </div>
    <?php } ?>
    <div class="clear"></div>
  
</div>
                    <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('.tooltip').tooltipster();
                                    });

                                    //
                                    // function hideshow(id){
                                    //   
                                    //   $('.'+id).show();
                                    //
                                    //  } ;
                                    function show(id)
                                    {
                                        $('.' + id).show();
                                        $('#' + id).css({"background-color": "#F0FFFF", "color": "black"});
                                    }
                                    function hide(id)
                                    {
                                        $('.' + id).hide();
                                        $('#' + id).css({"background-color": "#FFFFFF", "color": "#1D71A8"});
                                    }
                                    ;

                    </script>
<script>

$(function(){
     $(".img_2").click( function()
     {
         $('#b').hide();
         this.src = this.src.replace("grey_star.png","green_star.gif");
     }
);
});
</script>