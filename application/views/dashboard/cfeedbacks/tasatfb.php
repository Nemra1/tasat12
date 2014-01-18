 
<!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>-->

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo WEB_PATH; ?>css/jquery-ui-1.10.3.custom.css"/>
<table cellspacing="0" cellpadding="0" border="0" >
    <form action="<?php echo WEB_URL; ?>myfeedbacks/insertFeedback" method="POST">
        <tbody>	
            <tr class="quicklinks_img">
            <td><b>Project Name </b></td>
            <td> <input type="text" class="text" name="projectname" id="feedbackpjt" /></td>
            </tr>
            <tr class="quicklinks_img">
            <td><b>Translator's Name </b></td>
            <td> <input type="text" class="text" name="transname" /></td>
            </tr>
            <tr class="quicklinks_img">
            <td><b>Email </b></td>
            <td><input type="text" class="text" name="email"/></td>
            </tr>
            <tr class="quicklinks_img">
            <td><b>Rating </b></td>
            <td> 
                <img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
                <img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
                <img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
                <img src="<?php echo IMG_PATH; ?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
                <img src="<?php echo IMG_PATH; ?>images/star_half.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
            </td>
            </tr>
            <tr class="quicklinks_img">
            <td> <b> Message </b></td>
            <td> <textarea cols="33" rows="5" style="resize:none;" name="message" ></textarea></td>
            </tr>
            <tr>
            <td> &nbsp; </td>
            <td><input type="submit" value="SUBMIT" class="button" /></td>
            </tr>
        </tbody>	
    </form>
</table>
</div>
</div>
<script type="text/javascript">

    $(document).ready(function() {
        $(function() {
            $("#feedbackpjt").autocomplete({
                source: function(request, response) {
                    $.ajax({url: "<?php echo WEB_URL; ?>myfeedbacks/suggestions",
                        data: {term: $("#feedbackpjt").val()},
                        dataType: "json",
                        type: "POST",
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                minLength: 0,
                scroll: true
            }).focus(function() {
                $(this).autocomplete("search", "");
            });
        });
    });
</script>
<style>
    .ui-autocomplete { cursor:pointer; height:100px; overflow-y:scroll }    
</style>