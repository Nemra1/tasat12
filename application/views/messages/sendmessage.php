<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo WEB_PATH; ?>css/jquery-ui-1.10.3.custom.css"/>
<div>
    <table cellspacing="0" cellpadding="0" border="0" class="scroller" >
        <thead>
            <tr class="quicklinks">
            </tr>
        </thead>
    </table>
</div>
<div>
    <form action="<?php echo WEB_URL; ?>cmessages/saveMessage" method="POST" >
        <div class="sent"><p><b>Send To </b></p></div>

        <div class="sendto">
            <input type="radio" name="gen" id="gen1"  value="client" class="users"/>Client
            <input type="radio" name="gen" id="gen2"  value="translator" class="users"/>Translator
            <input type="radio" name="gen"  id="gen3" value="tasat" class="users"/>TASAT

        </div>   
        
        <div class="p"><p><b>Project Name </b></p></div>
        <div class="pn">
<!--            <input type="text" class="text" name="proname" id="proname"  />-->
                        
            <select id="pro1" name="pro1" >
   <option value="0">select</option>
 </select>
        </div>
        
        <br/><br/>
        <div><p><b>User Name</b></p></div>
        <div class="cn">
<!--            <input type="text" class="text" name="username" id="username"  /> -->
            <input type="hidden" class="text" id="pjtid" name="pjtid" value=""/>
            
            <select id="user1" name="user1" >
<!--   <option value=""></option>-->
 </select>
         </div>

        <div class="msg">
            <p><b> Message </b></p>          
        </div>
        <div class="message"> <textarea name="messages" cols="33" rows="5" style="resize:none;"></textarea></div> 


        <div class="attach">
            <p>Add Files<input type="file" name="messagefile"/></p>
            <div class="send">
                <p><input type="submit" class="button" value="Send" /></p>
            </div>
        </div>
    </form>
</div>
</div>
</div>
<script>
    $(document).ready(function() { 
        
    
    $("#gen2").click(function() { 
    $.post('<?php echo WEB_URL; ?>cmessages/prosuggestions',function(result) { 
    $('#pro1').append(result);   
       });
    });
    });  
</script>
<script>
 $(document).ready(function() { 
 $('#pro1').change(function() {
    pid= $('#pro1').val();
     $.post('<?php echo WEB_URL; ?>cmessages/transsuggestions',{pid:pid},function(result) { 
        alert(result); 
       $('#user1').append(result); 
     });
 });
 });
</script>
<!--       $("#gen2").click(function() {  
 $.post('<?php //echo WEB_URL; ?>cmessages/transsuggestions',function(result) { 

alert(result);
$('#user1').append(result);
           });
      }); -->


<!--<script>
                $(document).ready(function() {

                    var a =<?php //echo $type; ?>;
                    if (a == 1) {
                        $("#gen1").attr('disabled', true);
                    }
                    if(a==2){
                         $("#gen2").attr('disabled', true);
                    }
                    $(".users").click(function() {
                        user = ($('input:radio[name=gen]:checked').val());

                        if (user == "tasat") {
                            $("#username").attr("disabled", "disabled");
                            $(function() {
                                $("#proname").autocomplete({
                                    source: function(request, response) {
                                        $.ajax({url: "<?php //echo WEB_URL; ?>myfeedbacks/suggestions",
                                            data: {term: $("#proname").val()},
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
                        }
                        if (user == "client") {
                            $("#username").removeAttr("disabled");
                            $(function() {
                                $("#username").autocomplete({
                                    source: function(request, response) {
                                        $.ajax({url: "<?php  //echo WEB_URL; ?>cmessages/clisuggestions",
                                            data: {term: $("#username").val()},
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
                        }
                        if (user == "translator") {
                            $("#username").removeAttr("disabled");
                            
                            $(function() {
                                 $("#username").autocomplete({
                                    source: function(request, response) {
                                        $.ajax({url: "<?php //echo WEB_URL; ?>cmessages/transsuggestions",
                                            data: {term: $("#username").val()},
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
                        }
                    });
                });

</script>



<script>
    function autofill() {
     value= $("#username").val();

        $("#proname").autocomplete({
            source: function(request, response) {
                $.ajax({url: '<?php echo WEB_URL; ?>cmessages/prosuggestions?user='+value,
                    data: {term: $("#proname").val()},
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

    }

</script>

<style>
    .ui-autocomplete { cursor:pointer; height:100px; overflow-y:scroll }    
</style>-->