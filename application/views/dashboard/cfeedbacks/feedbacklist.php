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

                <div style="margin-right:10px; float:right"> <input type="radio" name="feedback" value="Translators" checked="checked"> Clients
                    <input type="radio" name="feedback" value="TASAT">TASAT</div></div>
        </td></tr>
    </thead>
</table>

<div class="left-in-main ffeft">


    <div class="dispute-list">


        <div class="dispute-chat">

            <ul class="chat-ul">
                <div class="trans">
                    <li class="chatboxleft">

                    <span class="msgsenderleft"><div class="msgimg">
                            <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
                        </div></span>
                    <div  class="chatmsgleft translator">
                        <span class="msgdatetimeleft"><a href="#">Joe Smith</a> at 18/07/2013, 11:09</span>
                        <span class="msgbodyleft">
                            I was impressed at the quality of articles for the price. The writer delivered on time within the requirements that I needed. Got another job ready for him already. 
                        </span>

                    </div>
                    </li>

                    <div class="trans">
                        <li class="chatboxleft">
                        <span class="msgsenderleft"><div class="msgimg">
                                <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
                            </div></span>
                        <div class="chatmsgleft translator">
                            <span class="msgdatetimeleft"><a href="#">Jane</a> at 18/07/2013, 11:09</span>
                            <span class="msgbodyleft">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </span>
                        </div>
                    </div>
                </div>
                </li>

                <div id="tasatmsg00">
                    <li class="chatboxleft">
                    <span class="msgsenderleft"><div class="msgimg">
                            <img id="img_1" src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="60px;"/>
                        </div></span>
                    <div class="chatmsgleft tasatmsg">
                        <span class="msgdatetimeleft"><a href="#">TASAT</a> at 18/07/2013, 10:00</span>
                        <span class="msgbodyleft">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </span>
                    </div>
                </div>
                </li>
            </ul>
        </div>
</div></div></div>
</div>