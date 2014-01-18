<script type="text/javascript">

    $(document).ready(function() {
        $('#tasatmsg00').hide();
        $('input[name=feedback]').click(function() {
             alert($('input[name=feedback]:checked').val());
           if($('input[name=feedback]:checked').val()=='TASAT')
     {
            $('.trans,#tasatmsg00').toggle();
        }
        });
    });

</script>
<script>
    $(document).ready(function() {
        name = ($('input:radio[name=feedback]:checked').val());
          
        $.post("<?php echo WEB_URL; ?>myfeedbacks/View_Feedback", {user: name}, function($view) {
            $('.left-in-main').html($view);
        });
        $("#ra1").click(function() {

            $('input:radio[name=feedback]:nth(0)').attr('checked', true);
            name = ($('input:radio[name=feedback]:checked').val());

            $.post("<?php echo WEB_URL; ?>myfeedbacks/View_Feedback", {user: name}, function(data, success) {
                $('.left-in-main').html(data);
            });
        });
        $("#ra2").click(function() {
            $('input:radio[name=feedback]:nth(1)').attr('checked', true);
            name = ($('input:radio[name=feedback]:checked').val());
           
            $.post("<?php echo WEB_URL; ?>myfeedbacks/View_Feedback", {user1: name}, function(data, success) {
                $('.left-in-main').html(data);
            });
        });
    });
</script>
<table cellspacing="0" cellpadding="0" border="0">
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
                <div style="margin-right:10px; float:right"> <input type="radio" name="feedback" id="r1" value="Translators" checked="checked"> Translators
                    <input type="radio" name="feedback"id="r2" value="TASAT">TASAT</div></div>
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
                        <li class="chatboxleft">
                        <span class="msgsenderleft"><div class="msgimg">
                                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
                            </div></span>
                        <div  class="chatmsgleft translator">
                            <span class="msgdatetimeleft">
                                <a href="#"><?php echo $viewlist['fdbk_from']; ?></a> 
                                <?php echo $viewlist['fdbk_date']; ?></span>
                            <span class="msgbodyleft">
                                <?php echo $viewlist['fdbk_mesg']; ?>
                            </span>
                        </div>
                        </li>
                    </div>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>
</div>
</div>
