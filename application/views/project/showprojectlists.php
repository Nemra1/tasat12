
    
       <div class="content_box1">
        <table cellpadding="1" cellspacing="1">
            <tr>
            <td>  
                <ul class="searchfilter"> 
                    <li>
                    <label>By Domain</label>
                     <select name="domain" id="bdomain" onchange="browse();">
                            <option value="select">--select--</option>
                            <option value="Legal">Legal</option>
                            <option value="Oil&gas">Oil&gas </option>
                            <option value="Political">Political</option>
                            <option value="IT&Communication">IT&Communication</option>
                            <option value="Finance">Finance</option>
                            <option value="Other">Other</option>
                        </select>
                    </li>
                </ul>
            </td>
           <td>
                <ul class="searchfilter">
                    <li>
                    <label>Translate From</label>
                   <select name="from" class="select_one" id="fromlang" >
                            <option value="select">select</option>
                            <option value="English">English</option>
                            <option value="Russian">Russian</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Italian">Italian</option>
                            <option value="German">German</option>
                            <option value="French">French</option>
                            <option value="Japanese">Japanese</option>
                        </select><br/>  
                    </li>
                </ul>
            </td>
            <td>
                <div style="margin-left:4px;margin-top:15px">----></div>
            </td>

            <td>
                <div style="margin-left:-158px;">
                    <ul class="searchfilter"> 
                        <li>
                        <label>Translate To</label>
                        <select name="to" id="tolang" disabled class="select_two">
                                <option value="select">select</option>
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
                        </li>
                    </ul>
                </div>
            </td>
            </tr>
            <tr>
            <td>
                <ul class="searchfilter">
                    <li>
                    <label>By Location</label>
                    <select  name="location" id="locationlist" onchange="searchLocation(this.value);">
                        <option value="0">Select Location</option>
                        <option value="1">Australia</option>
                        <option value="2">France</option>
                        <option value="3">India</option>
                    </select>

                    </li>
                </ul>
            </td>
            <td>
                <ul class="searchfilter"> 
                    <li>
                    <label>By Duration</label>
                    <select name="location" id="locationlist" onchange="searchLocation(this.value);">
                            <option value="Select">Select Location</option>
                            <option value="Australia">Australia</option>
                            <option value="France">France</option>
                            <option value="India">India</option>
                        </select>
                    </li>
                </ul>
            </td>
            <td> 
                <ul class="searchfilter"> 
                    <li>
               
                  <label>By Price</label>
                            <input type="checkbox" name="price" class="messageCheckbox" id="pricehigh" value="0" /> High to Low
                            <input type="checkbox" name="price" class="messageCheckbox" id="pricelow" value="1"/> Low to High </li></ul>
            </td>           
                </tr>

        </table>

    </div> 
    <div class="tabBody" style="background-color:#C4E2EE;height:100%;">
        <div style="line-height: 32px;margin-top: 205px;">
            <H1> &nbsp; Translation Project Lists</H1>
            <form action="" name="bookingForm">
                <table width="99%" border="0" id="PDetailsTable" bgcolor="#97D4EE">	
                    <thead>
                        <tr>
                        <th width="138">Project Name</th>
                        <th width="148">Translation type</th>
                        <th width="100">Project Domain</th>
                        <th width="138">Skills</th>
                        <th width="24" >Bid</th>
                        <th width="60">Started on</th>
                        <th width="50">Budget(USD)</th>
                        <th width="69">Bookmark</th>

                        </tr>
                    </thead>
                    <?php foreach ($browse as $prolist) { ?>
                        <tbody style="text-align:center;">
                            <tr>
                            
                            <td><a href="<?php echo WEB_URL;?>myProjects/projectView1?pid=<?php echo $prolist['pro_id_pk']; ?>"><?php echo $prolist['pro_name']; ?> </a></td>
                            <td><?php echo $prolist['pro_type']; ?>  </td>
                            <td><?php echo $prolist['pro_domain']; ?>  </td>
                            <td>
                                <?php echo $prolist['pro_langfrom']; ?>,<?php echo $prolist['pro_langto']; ?> 
                            </td>
                            <td> 
                                <?php echo $prolist['bid_amount']; ?> 	
                            </td>
                            <td>
                                <?php echo $prolist['pro_bidclose']; ?>

                            </td >
                            <td>
                                <?php echo $prolist['pro_budget_min']; ?>-<?php echo $prolist['pro_budget_max']; ?>
                            </td>
                            <td>
                                <a><img class="img1" id="img1" name="img1" src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;"height="20px;" alt="<?php echo $prolist['pro_id_pk']; ?>" />
                                <!--<img class="img1" id="img2" name="img2" src="<?php echo IMG_PATH; ?>images/green_star.gif" width="20px;"height="20px;" style="display: none;"/>-->
                                </a>      
                            </td>

                            </tr>

                        </tbody>
                    <?php } ?>	
                </table>

            </form>

     </div><br>
    <?php
    if (!empty($pagination)) {
        echo "<div align='center'><font color='red'>" . $pagination . "</font></div>";
    }
    ?>
</div></div>
</div>

 <script type="text/javascript">
                            $(document).ready(function() {
                                //             $("#innertab tr:odd").css("background-color", "#F5EEEB");
                                //             $("#innertab :last-child").css("background-color", "#FFFFFF");
                            
          

                                $('.tooltip').tooltipster();
                                $('.select_one').change(function() {
                                    ip_val1 = $(this).val();
                                    $('.select_two').removeAttr("disabled");


                                });
                                $('.select_two').change(function() {
                                    ip_val2 = $(this).val();
                                    $.post("<?php echo WEB_URL;?>projects/browseBylang", {ip_val1: ip_val1, ip_val2: ip_val2},
                                    function(data, success) {
                                       $('#PDetailsTable').html(data);

                                    });
                                });
                    
                        $('.messageCheckbox').click(function() {
                       var checkedValue = $('.messageCheckbox:checked').val();


                  $.post("<?php echo WEB_URL;?>projects/browseByprice", {price: checkedValue},
                                    function(data, success) {
                                       $('#PDetailsTable').html(data);

                                    });
                       });
                                stateset = 0;
                                function hideshow(id) {
                                    if (stateset == 0) {
                                        $('.' + id).show().css({"display": "inline-block"});

                                        stateset = 1;
                                    } else {
                                        stateset = 0;
                                    }
                                    ;
                                }
                                return false;
                            });
                            stateset = 0;
    </script>
<script>

 $(document).ready(function() {
$(".img1").click(function() {
$(this).attr("src","<?php echo IMG_PATH; ?>images/green_star.gif");
 var pid=$(this).attr("alt");
 window.location.href='<?php echo WEB_URL; ?>myProjects/bookmarkProject?pid='+pid;
 
});
});
</script>

    <script>
        function browse() {

            value = document.getElementById('bdomain').value;
            window.location.href = '<?php echo WEB_URL; ?>projects/browseProjects?domainvalue=' + value;
            return false;

        }
        function searchLocation(value) {
         
         window.location.href = '<?php echo WEB_URL;?>projects/browseLocation?location='+value;
            //return false;
        }
    </script>

<!--      var source = $(this).attr("name");
  
     if(source=="img1") {
         
     alert('<?php echo IMG_PATH; ?>images/green_star.gif');
source.attr('src','<?php echo IMG_PATH; ?>images/green_star.gif');

source.attr('name','img2');
}
//else {
//source.attr('src',<?php echo IMG_PATH; ?>images/grey_star.png);
//source.attr('name','img1');
//}-->
