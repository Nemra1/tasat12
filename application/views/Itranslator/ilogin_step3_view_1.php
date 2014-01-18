<script>
    $(document).ready(function() {
        var id = 1;


        // Add1 button functionality
        $("table.dynatable img.btnAdd1").click(function() {
            id++;
            var master = $(this).parents("table.dynatable");

            // Get a new row based on the prototype row
            var prot = master.find(".prototype").clone();
            prot.attr("class", "")
            prot.find(".id").attr("value", id);

            master.find("tbody").append(prot);
        });

        // Remove1 button functionality  
        $("table.dynatable img.remove1").live("click", function() {
            var a = $("tbody #single").size();
            if (a > 1) {
                $(this).parents("tr").remove();
            } else {
                alert("u cant remove");
            }
        });



        ///////////////////////////////////// Add 2 remove 2   ///////////////////////////////         


        // Add2 button functionality
        $("table.dynatable img.btnAdd2").click(function() {
            id++;
            var master = $(this).parents("table.dynatable");

            // Get a new row based on the prototype row
            var prot = master.find(".prototype").clone();
            prot.attr("class", "")
            prot.find(".id").attr("value", id);

            master.find("tbody").append(prot);
        });

        // Remove2 button functionality
        $("table.dynatable img.remove2").live("click", function() {
            var a = $("tbody #double").size();

            if (a > 1) {
                $(this).parents("tr").remove();
            } else {
                alert("u cant remove")
            }

        });

        ///////////////////////////////////// Add 3 remove 3   ///////////////////////////////         


        // Add3 button functionality
        $("table.dynatable img.btnAdd3").click(function() {
            id++;
            var master = $(this).parents("table.dynatable");

            // Get a new row based on the prototype row
            var prot = master.find(".prototype").clone();
            prot.attr("class", "")
            prot.find(".id").attr("value", id);

            master.find("tbody").append(prot);
        });

        // Remove3 button functionality
        $("table.dynatable img.remove3").live("click", function() {
            var a = $("tbody #triple").size();
            if (a > 1) {
                $(this).parents("tr").remove();
            } else {
                alert("u cant remove")
            }
        });

    });
</script>



<div class="content" style="height:auto;">
    <div class="main_content_box_5">
        <strong style="font-size:18px; color:#1d71a8; padding-left:0px;">Registering as Individual Translator/Interpreter </strong><hr />
        <div class="reg-rules">
            <ul>
                <li>
                    STEP 1: You would be entering Username & Password. This information will get saved with us immediately.
                </li>
                <li>
                    STEP 2: You would be entering details about you along with your expertise.
                </li>	
                <li>	
                    STEP 3:  You would be selecting Source & Target language expertise. Also, you would even enter price per hour & per word.
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
                        <li><a href="<?php echo WEB_URL; ?>itranslator"> Login Details</a></li>
                        <li><a href="<?php echo WEB_URL; ?>itranslator/personalinfo">Personal Info</a></li>
                        <li class="currentBtn"><a href="<?php echo WEB_URL; ?>itranslator/pricing">Language Pairs</a></li>
                       
                    </ul>
                </div>
                <div class="tabBody" style="background-color:#C4E2EE; height:100%; width:100%; ">
                    <!--ul>
                        <li class="tabCot"></li>
                        <li class="tabCot"-->
                    <H1> &nbsp; Consequentional Translation</H1>


                    <table class="dynatable" width="100%" border="0" id="PDetailsTable" bgcolor="#97D4EE" style="margin:5px;">
                        <thead>
                            <tr>
                            <th width="18">SL.No</th>
                            <th width="100">Domain</th>
                            <th width="130">Source Language</th>
                            <th width="130">Target Language</th>
                            <th width="200">Rate per min</th>
                            <th width="200">Rate per word</th>
                            <th  width="0"><img src="../../images/add_icon.png" title="Add"  class="btnAdd1" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="prototype" id="single">

                            <td><input type="text" name="id[]" value="1" class="id" style="width:9px;"  /></td>


                            <td>
                                <select style="width:80px;"> 
                                    <?php
                                    if (!empty($lang)) {
                                        foreach ($lang as $lng) {
                                            ?>
                                            <option value=""> <?php echo $lng->lang_name; ?> </option>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <option>Legal</option>
                                        <option>Finance</option>
                                        <option>Oil & Gas</option>
                                        <option>IT & Communication</option>
                                        <option>Political</option>
                                    <?php } ?>
                                </select>   
                            </td>
                            <td>
                                <select> 
                                    <?php
                                    if (!empty($lang)) {
                                        foreach ($lang as $lng) {
                                            ?>
                                            <option value=""> <?php echo $lng->lang_name; ?> </option>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <option>No Language Added</option>
                                    <?php } ?>
                                </select>   
                            </td>
                            <td> 
                                <select> 
                                    <?php
                                    if (!empty($lang)) {
                                        foreach ($lang as $lng) {
                                            ?>
                                            <option value=""> <?php echo $lng->lang_name; ?> </option>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <option>No Language Added</option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>
                                <select style="width:100px;">
                                    <option>US Dollars($)</option>
                                    <option>Euros(€)</option>
                                </select> 
                                <input type="text" value="30" maxlength="10" style="width:15px;" />
                            </td>
                            <td>
                                <select style="width:100px;">
                                    <option>US Dollars($)</option>
                                    <option>Euros(€)</option>
                                </select> 
                                <input type="text" value="30" maxlength="10" style="width:15px;" />
                            </td>
                            <td><img src="../../images/minus-icon.png" style="margin-left:0px ;" title="Remove" id="Remove1" class="remove1" alt="HTML tutorial" width="23" height="22"/></td>
                            </tr>
                    </table>
                    </form>

                    <H1> &nbsp; Simultaneous Translation</H1>
                    <form action="Interpretersuccessful.html" name="interpreter">

                        <table class="dynatable" width="100%" border="0" id="PDetailsTable" bgcolor="#97D4EE" style="margin:5px;">
                            <thead>
                                <tr>
                                <th width="18">SL.No</th>
                                <th width="100">Domain</th>
                                <th width="130">Source Language</th>
                                <th width="130">Target Language</th>
                                <th width="200">Rate per min</th>
                                <th width="200">Rate per word</th>
                                <th  width="0"><img src="../../images/add_icon.png" title="Add"  class="btnAdd2" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="prototype" id="double">


                                <td><input type="text" name="id[]" value="1" class="id" style="width:15px;"  /></td>


                                <td>
                                    <select style="width:80px;"> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>Legal</option>
                                            <option>Finance</option>
                                            <option>Oil & Gas</option>
                                            <option>IT & Communication</option>
                                            <option>Political</option>
                                        <?php } ?>
                                    </select>   
                                </td>
                                <td>
                                    <select> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>No Language Added</option>
                                        <?php } ?>
                                    </select>   
                                </td>
                                <td> 
                                    <select> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>No Language Added</option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <select style="width:100px;">
                                        <option>US Dollars($)</option>
                                        <option>Euros(€)</option>
                                    </select> 
                                    <input type="text" value="30" maxlength="10" style="width:15px;" />
                                </td>
                                <td>
                                    <select style="width:100px;">
                                        <option>US Dollars($)</option>
                                        <option>Euros(€)</option>
                                    </select> 
                                    <input type="text" value="30" maxlength="10" style="width:15px;" />
                                </td>
                                <td><img src="../../images/minus-icon.png" style="margin-left:0px ;" title="Remove" id="Remove" class="remove2" alt="HTML tutorial" width="23" height="22"/></td>
                                </tr>
                        </table>
                    </form>

                    <H1> &nbsp; Written Translation</H1>
                    <form action="<?php echo WEB_URL; ?>itranslator/paymentdetails" name="interpreter">
                        <table class="dynatable" width="100%" border="0" id="PDetailsTable" bgcolor="#97D4EE" style="margin:5px;">
                            <thead>
                                <tr>
                                <th width="18">SL.No</th>
                                <th width="100">Domain</th>
                                <th width="130">Source Language</th>
                                <th width="130">Target Language</th>
                                <th width="200">Rate per min</th>
                                <th width="200">Rate per word</th>
                                <th  width="0"><img src="../../images/add_icon.png" title="Add" onclick="return false;"  class="btnAdd3" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="prototype" id="triple">


                                <td><input type="text" name="id[]" value="1" class="id" style="width:15px;"  /></td>


                                <td>
                                    <select style="width:80px;"> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>Legal</option>
                                            <option>Finance</option>
                                            <option>Oil & Gas</option>
                                            <option>IT & Communication</option>
                                            <option>Political</option>
                                        <?php } ?>
                                    </select>   
                                </td>
                                <td>
                                    <select> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>No Language Added</option>
                                        <?php } ?>
                                    </select>   
                                </td>
                                <td> 
                                    <select> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>No Language Added</option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <select style="width:100px;">
                                        <option>US Dollars($)</option>
                                        <option>Euros(€)</option>
                                    </select> 
                                    <input type="text" value="30" maxlength="10" style="width:15px;" />
                                </td>
                                <td>
                                    <select style="width:100px;">
                                        <option>US Dollars($)</option>
                                        <option>Euros(€)</option>
                                    </select> 
                                    <input type="text" value="30" maxlength="10" style="width:15px;" />
                                </td>
                                <td><img src="../../images/minus-icon.png" style="margin-left:0px ;" title="Remove" id="Remove" class="remove3" alt="HTML tutorial" width="23" height="22"/></td>
                                </tr>
                        </table>
                    </form>
                    
                    <H1> &nbsp; Online Interpretation</H1>
                    <form action="<?php echo WEB_URL; ?>itranslator/paymentdetails" name="interpreter">
                        <table class="dynatable" width="100%" border="0" id="PDetailsTable" bgcolor="#97D4EE" style="margin:5px;">
                            <thead>
                                <tr>
                                <th width="18">SL.No</th>
                                <th width="100">Domain</th>
                                <th width="130">Source Language</th>
                                <th width="130">Target Language</th>
                                <th width="200">Rate per min</th>
                                <th width="200">Rate per word</th>
                                <th  width="0"><img src="../../images/add_icon.png" title="Add" onclick="return false;"  class="btnAdd3" type="button" id="button" value="add more" alt="HTML tutorial" width="20" height="20"/> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="prototype" id="triple">


                                <td><input type="text" name="id[]" value="1" class="id" style="width:15px;"  /></td>


                                <td>
                                    <select style="width:80px;"> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>Legal</option>
                                            <option>Finance</option>
                                            <option>Oil & Gas</option>
                                            <option>IT & Communication</option>
                                            <option>Political</option>
                                        <?php } ?>
                                    </select>   
                                </td>
                                <td>
                                    <select> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>No Language Added</option>
                                        <?php } ?>
                                    </select>   
                                </td>
                                <td> 
                                    <select> 
                                        <?php
                                        if (!empty($lang)) {
                                            foreach ($lang as $lng) {
                                                ?>
                                                <option value=""> <?php echo $lng->lang_name; ?> </option>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <option>No Language Added</option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <select style="width:100px;">
                                        <option>US Dollars($)</option>
                                        <option>Euros(€)</option>
                                    </select> 
                                    <input type="text" value="30" maxlength="10" style="width:15px;" />
                                </td>
                                <td>
                                    <select style="width:100px;">
                                        <option>US Dollars($)</option>
                                        <option>Euros(€)</option>
                                    </select> 
                                    <input type="text" value="30" maxlength="10" style="width:15px;" />
                                </td>
                                <td><img src="../../images/minus-icon.png" style="margin-left:0px ;" title="Remove" id="Remove" class="remove3" alt="HTML tutorial" width="23" height="22"/></td>
                                </tr>
                        </table>
                    </form>
                        </ul-->

                        <div style="clear:both"></div>

                </div>

                <input type="BUTTON" value="PREVIOUS" id="prev" class="rounded" />
                <input type="submit" value="CONTINUE" class="rounded"/></form>
                <div class="modBottom">
                    <span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#prev").click(function() {
            var ur = "<?php echo WEB_PATH; ?>";
            window.location.href = ur + "index.php/itranslator/personalinfo";
        });
    </script>