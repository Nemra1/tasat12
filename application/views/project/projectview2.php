    
<div class="main_content_box_3">
    <table cellpadding="1" cellspacing="1">
        <?php foreach ($details as $list) { ?>
            <tr>
            <td>

                <strong style="font-size:22px; color:#1d71a8; padding-left:0px;"><?php echo $list['pro_name']; ?></strong><br><br>
                <strong style="font-size:12px; color:#1d71a8; padding-left:0px;"><?php echo $list['pro_type']; ?></strong>
            </td>
            <td></td>
            <td></td>
            <td>
                <div style="float: right; margin-right:-3px;" >
                    <form  action="<?php echo WEB_URL ?>myProjects/bidProject">

                    </form>
                </div>
            </td>

            </tr>
            <tr>

            <td>
                <div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10">
                    <div class="align-c padding-r10 padding-l5 border-r" style="display:inline-block">
                        <div class="margin-b5">Bids closure Date</div>
                        <div id="num-bids" class="text-blue larger bold"><?php echo $list['pro_bidclose']; ?> </div>
                    </div>
                    <div class="align-c padding-l10 padding-r10 border-r" style="display:inline-block">
                        <div class="margin-b5"><?php if($list['pro_type']=='Written'){ echo 'Duration';}  else {
    echo 'Date of service Required';
}?></div>
                        <div class="text-blue larger bold">
                            <?php echo $list['pro_duration']; ?>
                        </div>
                    </div>  
                    <div class="align-c padding-l10 padding-r5 " style="display:inline-block">
                        <div class="margin-b5">Expected Project Completion:</div>
                        <div class="text-blue larger bold"> <?php echo $list['pro_completion']; ?>  </div>
                    </div>

                </div> 
            </td>

            <td>
            </td>
            <td><input type="button" class="button" value="Edit Project" onclick="window.location.href = '<?php echo WEB_URL; ?>projects/Edit_project?id=<?php echo $list['pro_id_pk']; ?>'"></td>
            </tr>

        </table>

        <div class="well whitebg para silver span padding-5  margin-t10 margin-l10 margin-b10">
            <div style="margin-left:15px">
                <div class="head-blue"> Project Description: <br/></div>
              <?php echo $list['pro_desc']; ?> 
                <div class="col_2">
                    <div class="head-blue"> Languages Required: <br/></div>
                    <?php echo $list['pro_langfrom']; ?> to &nbsp;<?php echo $list['pro_langto']; ?> 
                    <div class="head-blue"> Project Budget (USD) <br/></div>
                    $  <?php echo $list['pro_budget_min']; ?> , $<?php echo $list['pro_budget_max']; ?> 
                    <div class="head-blue" id="upfile">Uploaded Files<br/></div>
                  
               
                               <?php
                     foreach($filename as $name){ ?>
                         <a href="#">  <?php echo $name['pro_file_name']; ?></a>
                    <?php }
                        ?>
                    &nbsp;
                    
                    <img src="<?php echo IMG_PATH; ?>images/Close.png" id="closeimg" width="15px" height="15px"/>
               <!-- <?php //if (($list['pro_file_name']) == 'nil') {
                       //echo "<script>
//                             document.getElementById('closeimg').style.display='none';                              
//                             </script>";
//                        }?>-->
                </div>
                <br><div class="head-blue">Date of Service <br/></div>
                <?php echo $list['pro_completion']; ?> 
                <div class="head-blue"> Time of Event <br/></div>
    <?php echo $list['pro_event_time']; ?>

            </div>
        </div>
        <div style="margin-right:200px;margin-top: 200px;">
        </div>
<?php } ?>
    <!--    <div class="btn-post">
            <label id="b">Bookmark:</label><div style="margin-top: -27px; margin-left:129px"><label id="c">Bookmarked</label><img class="img_2" src="<?php //echo IMG_PATH;  ?>images/grey_star.png" width="20px;"height="20px;" onclick="changeimg(this.id);"/></div>
        </div><br/>-->
    <div class="tabBody" style="background-color:#C4E2EE;height:100%;">
        <div style="line-height: 32px;margin-top: -21px;">



        </div>
    </div>
</div>
</div>
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
    $(document).ready(function() {
        $('#c').hide();
        $(function() {
            $(".img_2").click(function()
            {
                $('#b').hide();
                $('#c').show();
                this.src = this.src.replace("grey_star.png", "green_star.gif");
            }
            );
        });
    });
</script>