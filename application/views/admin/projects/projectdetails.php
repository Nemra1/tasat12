<script type="text/javascript">
    $(document).ready(function() {
        $('#tabs div').hide();
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
        function changeTable(id) {
            ('#myTable thead th, #mytable tbody td').show();
            $('#mytable thead th:nth-child(' + (columnIndex) + '), #mytable tbody td:nth-child(' + (columnIndex) + ')').hide();
        }

    });//end ready
    function showtable(id) {
        if ($("#+'id' option:selected").text() !== 'All')
        {
            alert('not all');
        }
   
    }

</script>
<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
        <span>Statistics</span></a>
        </td>
        <tr>
    </thead>
    <tbody>
        <tr class="stati_txt">
        <td><center><a class="list-stati">All Projects (<?php echo $all; ?>)</a> </center></td>
        <td><center><a class="list-stati">New projects (<?php echo ($new); ?>)</a> </center></td>
        <td><center><a class="list-stati">Ongoing projects (<?php echo ($ongoing); ?>)</a> </center></td>
        <td><center><a class="list-stati">Completed Projects (<?php echo ($completed); ?>)</a> </center></td>
        <td><center><a class="list-stati">Cancelled Projects(<?php echo ($cancel); ?>)</a> </center></td>

        </tr>
    </tbody>
</table>
<hr>
<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">

        <td colspan='5'>
            <div class="head-blue" style="background-color: #EAE1E6; line-height:40px;">New Projects
                <div style="margin-right: 10px;margin-top:2px; float: right">Project Type
                    <select name="projecttype" id="projecttype">
                        <option value="all">All</option>
                        <option value="written">written translation</option>
                        <option value="simultaneous">simultaneous</option>
                        <option value="Consequential"> consequential </option>
                        <option value="livechat"> Live Chat</option>
                    </select></div></div>
        </td>
        </tr>
    </thead>
    <tbody style="height:100px;overflow:scroll">
        <tr class="table_th">

        <td>
            <div id="tabs">

                <p>

                <table class="inner-table" id="inner-tab12"  style="line-height: 35px;">

                    <tr>
                    <td colspan="5"><span style="font-size:15px;font-weight:bold;"> </span></td>
                    </tr>

                    <tr class="thhead">

                    <td width="150px">Project Name</td>
                    <td>Project Type</td>
                    <td>Project Budget</td>
                    <td>Bid closure date</td>
                    <td>Project duration</td>
                    <td>Action</td><td></td>
                    </tr>
                    <?php foreach ($ptype as $prodetails) { ?>
                        <tr id="projectlist1">
                        <td><?php echo $prodetails['pro_name']; ?></td>
                        <td><?php echo $prodetails['pro_type']; ?></td>
                        <td>$<?php echo $prodetails['pro_budget_min']; ?>-$<?php echo $prodetails['pro_budget_max']; ?></td>
                        <td><?php echo $prodetails['pro_bidclose']; ?></td>
                        <td><?php echo $prodetails['pro_duration']; ?></td>
                        <td><a href="<?php echo WEB_URL; ?>admin/verifyProject?id=<?php echo $prodetails['pro_id_pk']; ?>"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>

        </td>
        </tr>
    </tbody>
</table>

<hr>
<table cellspacing="0" cellpadding="0" border="0" id="projectlist">
    <thead>
        <tr class="quicklinks">
        <td colspan='10'>
            <div class="head-blue" style="background-color:#EAE1E6; line-height:40px;">Project Lists
                <div style="margin-right: 10px; margin-top:2px;float: right"> 
                    <div style="margin-right: 10px; float: right">Project Status
                        <select id="projectlist1" onchange="window.location='<?php echo WEB_URL;?>admin/showProjects?status='+this.value;" >
                            <option>select</option>
                            <option value="0" >All</option>
                            <option value="1">Ongoing Projects</option>
                            <option value="3"> Completed Projects </option>
                            <option value="4"> Other  Projects </option></select></div>
                </div>
        </td>
        </tr>
    </thead>
    <tbody>
        <tr class="table_th">
        <td>
            <div id="tabs">
                <p>
                <table class="inner-table">
                    <br>
                    <tr class="thhead">
                
                    <td width="250px">Client name</td>
                   
                    <td width="300px">Project Name</td>
                    <td width="300px">Project Type</td>
                    <td width="130px">Current Bid</td>
                    <td width="170px">Start Date</td>
                    <td width="100px">Status</td>
                    <td width="100px">Action</td>

                    </tr>
                       <?php foreach ($list as $prodetails) { ?>
                    <tr>
                   
                    <td><?php echo  $prodetails['cl_first_name'].' '.$prodetails['cl_last_name']; ?></td>
                   
                    <td><?php echo  $prodetails['pro_name']; ?> </td>
                    <td><?php echo  $prodetails['pro_type']; ?></td>
                    <td>$10</td>
                    <td><?php echo  $prodetails['pro_bidclose']; ?></td>
                    <td><?php
                    
                     if($prodetails['pro_status']==0){
                         echo "new";
                   }
                  elseif($prodetails['pro_status']==1){
                      echo "ongoing"; 
                   } 
                   elseif($prodetails['pro_status']==2){
                         echo "onhold";
                   }
                   elseif ($prodetails['pro_status'] == 3) {
                                echo "completed";
                            }
                   elseif ($prodetails['pro_status'] == 4) {
                                echo "cancelled";
                            }
                   elseif ($prodetails['pro_status'] == 5) {
                                echo "archive";
                            }
                    else{
                          echo "other";
                   }
                   ?></td>
                    <td><a href="<?php echo WEB_URL; ?>admin/trackProject?pid=<?php echo $prodetails['pro_id_pk'];?>"><img src="<?php echo IMG_PATH; ?>images/viewprofile.png" style="height:24px;width:24px;"> </a></td>
                    </tr>
                       <?php } ?>
                          </table>
                </p>
            </div>
        </td>
        </tr>
    </tbody>
</table>
<br>
</div>    
<script>
$(document).ready(function(){
    $("#projecttype").on("change", function(){
        var pval=$(this).val();
        var action="<?php echo WEB_URL;?>admin/changeType";
            $.ajax({
                type:"POST",
                url: action,
                data: {pval:pval},
                success:function(response){
                    $('#projectlist1').html(response);
            }
        });
    });
    
});
</script>