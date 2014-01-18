
<div class="bid_prop" style="margin-bottom:20px;">

    <div style="width:120px; float:left; margin-right:20px;">
        <img src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="100" class="dp"/>
        <p><strong>Rate:</strong> $10/hour</p>
        <p><strong>Rank:</strong> *****</p>
        <p><strong><a href="<?php echo WEB_URL; ?>tastatranslators/translator_profile">View Profile</a></strong></p>
        <a href="<?php echo WEB_URL; ?>projects/confirm" class="button" onclick="hire();">Hire</a>
    </div>
    <div class="bid_prop_details">
        <?php foreach ($bidderlist as $details) { ?>
            <h3><?php
        if ($details['user_type'] == 2) {
            echo $details['it_first_name'] . ' ' . $details['it_last_name'];
        } else {
            echo $details['tc_first_name'];
        }
        ?></h3>
            <div class="mybid">
                <div><p> Bid Amount:$<?php echo $details['bid_amount']; ?> <br /> </p></div>
                <div>
                    <form action="#">
                        <input type="hidden" name="user_value1" id="user_value1" value="<?php echo $details['user_id_fk']; ?>"/>
                        <input type="hidden" name="pjt_value1" id="pjt_value1" value="<?php echo $details['project_id_fk'];?>"/>
<!--                               Select <input type="radio" name="action" value="1" />-->
                        Shortlist <input type="radio" name="action" value="2"/>
                        Ignore <input type="radio" name="action" value="3"/>
                        <input type="button" value="Go" id="go"/>
                    </form>
                </div>
            </div>
            <!--<div style="clear:both;"></div>-->
            <div> 
                <p><strong>Location: </strong><?php
                    if ($details['user_type'] == 2) {
                        echo $details['it_country'];
                    } else {
                        echo $details['tc_country'];
                    }
                    ?></p>
                <p><strong>Expertise: </strong>

                    <?php foreach ($expertise as $details) { ?>
        <?php
        if (isset($details['expertise_name'])) {
            echo $details['expertise_name'];
        }
        ?><?php echo ' , ';
    } ?></p>

                <p><strong>Brief Intro: </strong><?php foreach ($bidderlist as $details) { ?> <?php if (isset($details['it_about'])) {
                echo $details['it_about'];
            } ?><?php } ?></p>

                <p><strong>Proposal: </strong><?php if (isset($details['bid_proposal'])) {
            echo $details['bid_proposal'];
        } ?></p>
            </div>
<?php } ?>
    </div>

</div>

</div>    
<!--end-->
</div>

<script>
    $(document).ready(function() {
                $('#go').click(function() {
                    var action = $('input[name="action"]:checked').val();
                   var uid=$('#user_value1').val();
                   var pid=$('#pjt_value1').val();
                    var ur = "<?php echo WEB_URL; ?>";
                    if (action == 2) {
                       
                       window.location.href = ur +'projects/shortlistmsg?ui='+uid+'&'+'pi='+ pid;
                    }
                    if (action == 3) {
                        window.location.href = ur +'projects/ignoredmsg?ui='+uid+'&'+'pi='+ pid;
                    }
                });
                });
</script>
<script>
    function hire() {
        var ur = "<?php echo WEB_URL; ?>";
        var uid = document.getElementById('user_value1').value;
        var pid = document.getElementById('pjt_value1').value;
        //window.location.href =ur + 'projects/confirm?ui='+uid+'&'+'pi='+ pid;

    }

</script>