<link rel="stylesheet" type="text/css" href="<?php echo WEB_PATH; ?>css/jquery-ui-1.10.3.custom.css"/>
 <table cellspacing="0" cellpadding="0" border="0" >
      <form action="<?php echo WEB_URL; ?>feedback/insertFeedback" method="POST">
		<tbody>	
        	 <tr class="quicklinks_img">
            <td><b>Project Name </b></td>
            <td> <input type="text" class="text" name="projectname" id="transpjtname" /></td>
            </tr>
            <tr class="quicklinks_img">
            <td><b>Name</b></td>
            <td> <input type="text" class="text" name="transname" /></td>
            </tr>
        	<tr class="quicklinks_img">
				<td><b>Email </b></td>
				<td><input type="text" class="text"/></td>
			</tr>
            <tr class="quicklinks_img">
				<td><b>Rating </b></td>
				<td> 
					<img src="<?php echo IMG_PATH;?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH;?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH;?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH;?>images/star-blue.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
					<img src="<?php echo IMG_PATH;?>images/star_half.png" style="height:24px;width:24px;" title="4.5 Star rated"/>
				</td>
			</tr>
            <tr class="quicklinks_img">
				<td> <b> Message </b></td>
				<td> <textarea cols="33" rows="5" style="resize:none;"></textarea></td>
			</tr>
            <tr>
				<td> &nbsp; </td>
				<td><input type="submit" value="SUBMIT" /></td>
			</tr>
		</tbody>	
        </form>
     </table>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $("#transpjtname").autocomplete({
                source: function(request, response) {
                    $.ajax({url: "<?php echo WEB_URL; ?>feedback/suggestions",
                        data: {term: $("#transpjtname").val()},
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
                $(this).autocomplete("search","");
            });
        });
    });
</script>
<style>
     
    .ui-autocomplete { cursor:pointer; height:100px; overflow-y:scroll }    
</style>