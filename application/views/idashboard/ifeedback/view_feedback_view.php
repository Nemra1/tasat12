<script type="text/javascript">

    $(document).ready(function() {
        $('#tasatmsg00').hide();
        $('input[name=feedback]').click(function() {
            // alert($('input[name=feedback]:checked').val());
// if($('input[name=feedback]:checked').val()=='TASAT')
//     {
            $('.trans,#tasatmsg00').toggle();
//     }
        });
    });

</script>
<table cellspacing="0" cellpadding="0" border="0" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>

        </td>
        </tr>
    </thead>
</table>
<table cellspacing="0" cellpadding="0" border="0" class="scroller" >
    <thead>
        <tr class="quicklinks">
        <td colspan='5'>
            <div class="head-blue" style="background-color: #EAE1E6;">View Feedbacks From

                <div style="margin-right:10px; float:right">
                    <input type="radio" name="feedback" value="Translators" checked="checked"> Clients
                    <input type="radio" name="feedback" value="TASAT">TASAT</div></div>
        </td></tr>
    </thead>
</table>
<p></p>

<div class="left-in-main ffeft">
     <div class="dispute-list">
  <?php foreach ($view as $viewlist) { ?>
        <div class="dispute-chat">

            <ul class="chat-ul">
                <div class="trans">
                   
                    <div class="trans">
                        <li class="chatboxleft">
                        <span class="msgsenderleft"><div class="msgimg">
                                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
                            </div></span>
                        <div class="chatmsgleft translator">
                            <span class="msgdatetimeleft"><a href="#"><?php echo $viewlist['fdbk_from']; ?></a> <?php echo $viewlist['fdbk_date']; ?></span>
                            <span class="msgbodyleft">
                         <?php echo $viewlist['fdbk_mesg']; ?>
                            </span>
                        </div>
                    </div>
                </div>
                </li>
                </li>
            </ul>
        </div>
            <?php } ?>
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $("#ra1").click(function() {
            $('input:radio[name=feedback]:nth(0)').attr('checked', true);
            name = ($('input:radio[name=feedback]:checked').val());
            $.post("<?php echo WEB_URL; ?>feedback/View_Feedback", {user:name});
        });
        $("#ra2").click(function() {
            $('input:radio[name=feedback]:nth(1)').attr('checked', true);
            name = ($('input:radio[name=feedback]:checked').val());
            $.post("<?php echo WEB_URL; ?>feedback/View_Feedback", {user1:name});
        });
        return false;
    });
</script>