	<p>Tasat Translation is the web's leading professional translation service. It offers High-Quality, Fast, 24/7 Professional human translation service.</p>
    <p>To use this platform, all you need to do is Subscribe for <span>$50 USD</span> </p>
    <p><input type="button" id="payamount" value="Pay" class="button" /></p>
		
    </div>    
        <!--end-->
</div>
<script>
$("#payamount").click(function() {
    
    var ur="<?php echo WEB_PATH; ?>";
     var result = confirm('Proceed to payment?');// the script where you handle the form input.
if(result == true){
    $.ajax({
                 success: function() {
                        window.location.href =ur+"index.php/myfinancials/successPayment" ;}
   
});
}
});
</script>