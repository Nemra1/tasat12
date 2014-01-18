<div class="content" style="height:auto;">
    <div class="main_content_box_5">
        <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">
            Registering as Company Translator/Interpreter. <span class="" style="font-size:13px;"> (Language Pair(s) known & Rates )</span> </strong><hr />
        <div class="reg-rules">
            <ul>
                <li>
                    STEP 1: You would be entering Username & Password along with the company details and its expertise.
                </li>
                <li>
                    STEP 2: You would be entering details about the contact person(s) in your company.
                </li>	
                <li>	
                    STEP 3: You would be selecting Source & Target language expertise. Also, you would even enter price per hour & per word.
                </li>	
                <li>	
                    REGISTRATION SUCCESSFUL : A FEE of $50 to be paid towards registration for evaluation and elibility to get project reqruirements and to bid for the projects posted. 
                </li>
            </ul>		
        </div>

        <div class="left box">
            <div class="webwidget_scroller_tab" id="webwidget_scroller_tab">
                <div class="tabContainer">
                    <ul class="tabHead">
                    <li><a href="<?php echo WEB_URL;?>ctranslator"  onclick="return false;">  Login Info </a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/companyinfo"  onclick="return false;">  Company Info </a></li>
                    <li><a href="<?php echo WEB_URL;?>ctranslator/contactinfo"  onclick="return false;" > Contact Details</a></li>
                    <li class="currentBtn"><a href="<?php echo WEB_URL;?>ctranslator/pricing"  onclick="return false;"> Language Pairs</a></li>                          
                    </ul>
                </div>
                
                <form action="<?php echo WEB_URL; ?>ctranslator/regcomp" method="post">
                <div class="tabBody" style="background-color:#C4E2EE; height:100%; width:100%; ">
                    <table class="dynatable" width="100%" border="0" id="PDetailsTable" bgcolor="#97D4EE" style="margin:5px;">
                        <thead>
                            <tr id="exprow">
                                <td colspan="6">
                                    <input type="hidden" value="<?php echo $suid; ?>" name="suid" id="suid">
                                    <b>Choose your Expertise:</b>
                                    <input type="radio" name="exp" id="exp" value="3" checked="checked"> Written Translation
                                    <input type="radio" name="exp" id="exp" value="2"> Simultaneous Translation
                                    <input type="radio" name="exp" id="exp" value="1"> Consequential Translation
                                    <input type="radio" name="exp" id="exp" value="4"> Live Chat
                                </td>
                            </tr>
                            <tr>
                                <th width="100">Domain</th>
                                <th width="130">Source Language</th>
                                <th width="130">Target Language</th>
                                <th width="200">Rate per min</th>
                                <th width="150">Rate per word</th>
                                <th  width="50">
                                    <img src="<?php echo IMG_PATH; ?>images/add_icon.png" title="Add"  class="btnAdd2" type="button" id="addexp" width="20" height="20"/> 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="prototype" id="single">
                            <td>
                                <select name="domain" id="domain" style="width:80px;"> 
                                    <option value="Legal">Legal</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Oil and Gas">Oil & Gas</option>
                                    <option value="IT and Communication">IT & Communication</option>
                                    <option value="Political">Political</option>
                                </select>   
                            </td>
                            <td>
                                <select name="source" id="source" style="padding:3px;">
                                    <option value="English">English</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Italian">Italian</option>
                                    <option value="German">German</option>
                                    <option value="French">French</option>
                                    <option value="Japanese">Japanese</option>
                                </select>
                            </td>
                            <td> 
                                <select name="target" id="target" style="padding:3px;">
                                    <option value="English">English</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Italian">Italian</option>
                                    <option value="German">German</option>
                                    <option value="French">French</option>
                                    <option value="Japanese">Japanese</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="rpw" id="rpw" value="30" maxlength="10" style="width:15px;" />
                                <select name="currency1" id="currency1" style="width:100px;">
                                    <option value="USD">US Dollars</option>
                                    <option value="EUR">Euros</option>
                                </select> 
                            </td>
                            <td>
                                <input type="text" name="rpm" id="rpm" value="30" maxlength="10" style="width:15px;" />
                                <select name="currency2" id="currency2" style="width:100px;">
                                    <option value="USD">US Dollars</option>
                                    <option value="EUR">Euros</option>
                                </select> 
                            </td>
                            </tr>
                    </table>
                </div>
                <div id="expwrap"> 
                    <div class="exp1">
                        <h4>Written Translation</h4>
                        <div id="wrtnsl"></div>
                    </div>
                    <div class="exp2">
                        <h4>Simultaneous Translation</h4>
                         <div id="simtnsl"></div>
                    </div>
                    <div class="exp3">
                        <h4>Consequential Translation</h4>
                        <div id="constnsl"></div>
                    </div>
                    <div class="exp4">
                        <h4>Live Chat</h4>
                        <div id="livechat"></div> 
                    </div>
                </div>
                    
                
<!--                <div id="userexp">            
                    <p>
                        <b>Written Translation</b><br>
                        <span>Oil and Gas - English -to- German - 30/min - 20/word</span> 
                        <input type="button" id="close" value="" title="Delete">
                    </p>          
                    <p>
                        <b>Written Translation</b><br>
                        <span>Oil and Gas - English -to- German - 30/min - 20/word</span> 
                        <input type="button" id="close" value="" title="Delete">
                    </p>          
                    <p>
                        <b>Written Translation</b><br>
                        <span>Oil and Gas - English -to- German - 30/min - 20/word</span> 
                        <input type="button" id="close" value="" title="Delete">
                    </p>
                 </div>-->
                
                <input type="submit" value="Save and Continue" class="rounded" onClick="confirm('You can now view your details once you activate your profile.');"/>
                
                </form>
                <div class="modBottom">
                    <span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
                </div>
            
            </div>
        </div>
    </div>
    <input type="hidden" name="hiddenrowid" id="hiddenrowid" value="1"/>  
    <script>
        function add()
        {
            var hiddenrowValue = document.getElementById("hiddenrowid").value;
            document.getElementById("s" + hiddenrowValue).style.display = "block";
            hiddenrowValue = parseInt(hiddenrowValue) + 1;
            document.getElementById("hiddenrowid").value = hiddenrowValue;
        }
        function removerow(rowid)
        {
            document.getElementById("s" + rowid).style.display = "none";
        }

        $("#prev").click(function() {
            var ur = "<?php echo WEB_PATH; ?>";
            window.location.href = ur + "index.php/ctranslator/contactinfo";
        });
    </script>
    
    <script>
        $(document).ready(function() {
           $(".exp1,.exp2,.exp3,.exp4").hide();
           $('#addexp').click(function() {
              //alert($('#currency1').val());
              //alert($('input:radio[name=exp]:checked').val());  
              var uid = $('#suid').val();
              var exp = $('input:radio[name=exp]:checked').val();
              var domain = $('#domain').val();
              var source = $('#source').val();
              var target = $('#target').val();
              var rpw= $('#rpw').val();
              var currency1 = $('#currency1').val();
              var rpm = $('#rpm').val(); 
              var currency2 = $('#currency2').val();
              var action12="<?php echo WEB_URL; ?>ctranslator/enterpricing";
              var formdata12={userid: uid, expertise: exp, domain: domain, source: source,
                              target: target, rpw: rpw, currency1: currency1, rpm: rpm,
                              currency2: currency2}
              if(exp==3){//alert(1);
                  $(".exp1").show();
                  $.ajax({
                    url: action12,
                    type: "POST",
                    data: formdata12,
                    success: function(response)
                    {
                        //alert(response);return false;
                        $("#wrtnsl").fadeIn(2000).html(response);
                        //$(":input[type=text]").val('');
                    }
                });
              }else if(exp==2){ 
                  $(".exp2").show();
                  $.ajax({
                    url: action12,
                    type: "POST",
                    data: formdata12,
                    success: function(response)
                    {
                        //alert(response);return false;
                        $("#simtnsl").fadeIn(2000).html(response);
                        //$(":input[type=text]").val('');
                    }
                  });  
               }else if(exp==1){ 
                  $(".exp3").show();
                  $.ajax({
                    url: action12,
                    type: "POST",
                    data: formdata12,
                    success: function(response)
                    {
                        //alert(response);return false;
                        $("#constnsl").fadeIn(2000).html(response);
                        //$(":input[type=text]").val('');
                    }
                  });  
               }else if(exp==4){ 
                  $(".exp4").show();
                  $.ajax({
                    url: action12,
                    type: "POST",
                    data: formdata12,
                    success: function(response)
                    {
                        //alert(response);return false;
                        $("#livechat").fadeIn(2000).html(response);
                        //$(":input[type=text]").val('');
                    }
                  });  
               }
           });
        });
    </script>



