    <div>
        
        <form action="<?php echo WEB_URL;?>dashboard/Change_Password" method="post">
        <ul><li>
            <label>Current Password: </label>
            <input type="text" name="passwordcurrent" id="passwordcurrent" value="<?php echo set_value('passwordcurrent'); ?>" />
            <?php echo form_error('passwordcurrent'); ?>
        </li>
        <li>
            <label>New Password: </label>
            <input type="text" name="passwordnew" id="passwordnew" value="<?php echo set_value('passwordconf'); ?>" />
            <?php echo form_error('passwordconf'); ?>
        </li>
        <li>
            <label>Re-enter Password: </label>
            <input type="text" name="passwordconf" id="passwordconf" value="<?php echo set_value('passwordnew'); ?>"/>
            <?php echo form_error('passwordnew'); ?>
        </li>
        <li>
            <input type="submit" id="pswd" value="Submit" class="button" onClick="confirm('Do you want to change Password?');" />
        </li></ul>
        </form>
        
    </div>		
		
    </div>    
        <!--end-->
</div>