<!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo WEB_PATH; ?>css/jquery-ui-1.10.3.custom.css"/>
<script>
                $(document).ready(function() {

                    $(".users").click(function() {
                        user = ($('input:radio[name=gen]:checked').val());
                        //alert(user);
                        //return false;
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
                            //$("#username").removeAttr("disabled");
                            
                            $(function() {
                                 $("#username").autocomplete({
                                    source: function(request, response) {
                                        $.ajax({url: "<?php echo WEB_URL; ?>admin/transsuggestions",
                                            data: {term: $("#username").val()},
                                            dataType: "json",
                                            type: "POST",
                                            success: function(data) {
                                                //alert(data);
//                                                var data = [{
//                                                    label: "data.label",
//                                                    value: "data.value"
//                                                    }];
                                              response(data);
                                          //alert(1);
                                              //alert(data.name+'--------'+data.id);
                                             
                                                }
                                        });
                                    },
                                    select:function(event,ui){
                                        $( "#username" ).val( ui.item.label);
                                        $( "#username" ).attr("alt", ui.item.value);
                                        return false;
                                    },
                                    minLength: 0,
                                    scroll: true
                                }).focus(function() {
                                    $(this).autocomplete("search", "");
                                });
                            });
                        }
                    });
                    
                    
                    $("#proname").click(function(){
                    
                        var vvv=$("#username").attr("alt");
                        alert(vvv);
                    });
                });

</script>



<script>
  
     value= $("#username").val();

        $("#proname").autocomplete({
            source: function(request, response) {
                $.ajax({url: '<?php echo WEB_URL; ?>cmessages/prosuggestions',
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

</script>

<style>
    .ui-autocomplete { cursor:pointer; height:100px; overflow-y:scroll }    
</style>
<div>
    <hr>
</div>
<form action="<?php echo WEB_URL; ?>admin/saveMessage" method="POST" enctype="multipart/form-data">
    <div>

        <div class="sent"><p><b>Send To </b></p></div>		
        <div class="sendto">
            <input type="radio" id="clientadmin" class="users" name="gen" checked="checked"  value="client"/>Client
            <input  type="radio" id="transadmin" class="users" name="gen"  value="translator"/>Translator

        </div>

        <div><p><b>User Name </b></p></div>
        <div class="cn" id="cn">
            <input type="text" class="text" name="username" id="username" />
        </div>

        <div class="p"><p><b>Project Name </b></p></div>
        <div class="pn">
            <input type="text" class="text" name="proname" id="proname" />
        </div>
    </div>


    <div class="msg">
        <p><b> Message </b></p>          
    </div>
    <div class="message"> <textarea name="message"cols="33" rows="5" style="resize:none;"></textarea></div> 
    <div class="attach">
        <p>Add Files<input type="file" name="msgfile"/></p>
        <div class="send">
            <p><input type="submit" class="button" value="Send" /></p>
        </div>
    </div>
</form>
</div>
</div>
<!--<script>
    $(document).ready(function() {
        check();
        
        $("#transadmin").click(function() {
            $('#selectpro').children('option:not(:first)').remove();
            $('#cn').load('<?php //echo WEB_URL; ?>admin/transuserlist');
        });

        $("#clientadmin").click(function() {
            $('#selectpro').children('option:not(:first)').remove();
            check();
        });

        $('#useradmin').change(function() {
            uid = $(this).val();
alert(uid);
            $.post('<?php //echo WEB_URL; ?>admin/projectLists', {uid: uid}, function(result) {
                $('.pn').html(result);
            });
        });
    });
    
    
    function check() {
        $.post('<?php //echo WEB_URL; ?>admin/clientuserlist', function(result) {
            $('#cn').html(result);
        });
    }
    function test(e)
    {
        uid = e;
        $.post('<?php// echo WEB_URL; ?>admin/projectLists', {uid: uid}, function(result) {

            $('.pn').html(result);
        });
    }
</script>-->

