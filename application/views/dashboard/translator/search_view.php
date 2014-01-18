
<div class="col_left" style="border-right:1px dashed #CDCDCD;">
    <form>
        <ul class="searchfilter">
            <li><label>Disciplines :</label>
            <select class="findtraslator selectall">
                <option value="">Select</option>
                <option value="Legal">Legal</option>
                <option value="Finance">Finance</option>
                <option value="Oil & Gas">Oil & Gas</option>
                <option value="IT & Communication">IT & Communication</option>
                <option value="Political">Political</option>
            </select>  
            </li>

            <li><label>By Project Type:</label>
            <select  class="expertise selectall">
                <option value="">Project Type</option>
                <option value="Written Translation">Written Translation</option>
                <option value="Online Interpretation">Online Interpretation</option>
                <option value="Simultaneous Translation">Simultaneous Translation</option>
                <option value="Consequential Translation">Consequential Translation</option>
            </select>
            </li>
            <li>
            <label>By Language Pair:</label><br />
            <select class="slanguage selectall" id="slanguage">
                <option value="">Source Language</option>
                <option value="English">English</option>
                <option value="Russian">Russian</option>
                <option value="Chinese">Chinese</option>
                <option value="Spanish">Spanish</option>
                <option value="Italian">Italian</option>
                <option value="German">German</option>
                <option value="French">French</option>
                <option value="Arabic">Arabic</option>
                <option value="Japanese">Japanese</option>
            </select>
            <br />
            <select class="tlanguage selectall" id="tlanguage">
                <option value="">Target Language</option>
                <option value="English">English</option>
                <option value="Russian">Russian</option>
                <option value="Chinese">Chinese</option>
                <option value="Spanish">Spanish</option>
                <option value="Italian">Italian</option>
                <option value="German">German</option>
                <option value="Arabic">Arabic</option>
                <option value="French">French</option>
                <option value="Japanese">Japanese</option>
            </select>
            </li>
            <li>
            <label>By Location:</label><br />
            <select class="location selectall">
                <option value=""  selected="selected">Select Country</option>
                <?php
                if (!empty($countylist)) {
                    foreach ($countylist as $cl) {
                        ?>
                        <option value="<?php echo $cl->ctrycode; ?>"><?php echo $cl->country_name; ?></option>
                    <?php }
                } else {
                    ?>
                    <option value="0">No Country found</option>
<?php } ?>
            </select>
            </li>
        </ul>
    </form>
</div>
<?php
$aa = $uid;
//print_r($listres1);
?>
<div class="col_right">
    <div id="trnslatorresult" ></div>
    <ul>
        <?php
        $i = 0;
        foreach ($listres1 as $list1) {
            ?>
            <li>
                <div class="proj_left">
                    <ul>
                        <li>
                            <a href="<?php echo WEB_URL; ?>tastatranslators/transProfile"><img src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="100" /></a>
                        </li>
                        <li>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="button rbid" rel="<?php echo $list1['user_id_fk']; ?>" name="<?php echo $i; ?>">Request Bid</a>
                        </li>
                    </ul>
                </div>
                <div class="proj_right"><br /><br /><?php // print_r($plist);   ?>
                    <label for="project" style="width: 100px; float: left;">Select Project:</label>
                    <select class="proclient" id="proclient<?php echo $i; ?>" style="width: 262px;">
                        <option value="">Select Project</option>
                        <?php foreach ($plist as $val) { ?>
                            <option value="<?php echo $val['pro_id_pk']; ?>"><?php echo $val['pro_name']; ?></option>
    <?php } ?>
                    </select>
                    <div id="success<?php echo $i; ?>" class="successs"></div>
                    <a href="<?php echo WEB_URL; ?>tastatranslators/transProfilelogin/?id=<?php echo $list1['user_id_fk']; ?>" style="text-decoration: none" class="head-blue1"><h3><?php echo $list1['it_patronymic']." ". $list1['it_first_name'] . " " . $list1['it_last_name'] . " " . $list1['user_id_fk']; ?></h3></a>

    <?php if ($list1['pref_status'] == 1) { ?>
                        <div class="bookmarktext"><span  class="prefer1" id='prefer<?php echo $i; ?>'>preferred:</span>
                            <a>
                                <img id="image<?php echo $i; ?>" alt="<?php echo $aa; ?>" rel="<?php echo $list1['user_id_fk']; ?>" name='<?php echo $i; ?>' src="<?php echo IMG_PATH; ?>images/green_star.gif" width="20px;" height="20px;" class='addpreferred'/>
                            </a></div>
    <?php } else { ?>
                        <div class="bookmarktext"><span  class="prefer1" id='prefer<?php echo $i; ?>'>add as preferred:</span>
                            <a>
                                <img id="image<?php echo $i; ?>" alt="<?php echo $aa; ?>" rel="<?php echo $list1['user_id_fk']; ?>" name='<?php echo $i; ?>' src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;" height="20px;" class='addpreferred'/>
                            </a></div>
    <?php } ?>
                    <p class="skills<?php echo $i; ?>" ></p>
                    <a href="javascript:void(0);"style="text-decoration: none" alt="<?php echo $list1['user_id_fk']; ?>" class="exdovait">Show Expertise:</a> <?php //echo $list1['user_id_fk'];   echo $list1['expertise_name'];   ?>
                    <p class="expertisedomains"><?php //print_r($exdet['user_id_fk']);   ?></p>
                    <p id="desc"><?php echo $list1['it_about'] ?></p>
                    <p><a href="<?php echo WEB_URL; ?>feedback/Feedbacks" id="reviews">Reviews(123)</a></p>
                </div>
                <div style="clear:both"></div>
                <hr  class="break"/>
            </li>

            <?php
            $i++;
        }
        ?>
        <?php
        $j = 0;
        foreach ($listres2 as $list2) {
            ?>
            <li>
                <div class="proj_left">
                    <ul>
                        <li>
                            <a href="<?php echo WEB_URL; ?>tastatranslators/transProfile"><img src="<?php echo IMG_PATH; ?>images/dpm.jpg" width="100" /></a>
                        </li>
                        <li>

                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                            <img  src="<?php echo IMG_PATH; ?>images/star-blue.png" width="20px;"height="20px;"/>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="button rbid" rel="<?php echo $list2['user_id_fk']; ?>" name="<?php echo $i; ?>">Request Bid</a>
                        </li>
                    </ul>
                </div>
                <div class="proj_right"><br /><br />
                    <label for="project" style="width: 100px; float: left;">Select Project:</label>
                    <select class="proclient" id="proclient<?php echo $i; ?>" style="width: 262px;"><option value="">Select Project</option>
    <?php foreach ($plist as $val) { ?>
                            <option value="<?php echo $val['pro_id_pk']; ?>"><?php echo $val['pro_name']; ?></option>
    <?php } ?>
                    </select>
                    <div id="success<?php echo $i; ?>" class="successs"></div>
                    <a href="<?php echo WEB_URL; ?>tastatranslators/transProfile/?id=<?php echo $list2['user_id_fk']; ?>" style="text-decoration: none" class="head-blue1"><h3><?php echo $list2['tc_first_name'] . $list2['user_id_fk']; ?></h3></a>

    <?php if ($list2['pref_status'] == 1) { ?>
                        <div class="bookmarktext"><span  class="prefer1" id='prefer<?php echo $i; ?>'>preferred:</span>
                            <a>
                                <img id="image<?php echo $i; ?>" alt="<?php echo $aa; ?>" rel="<?php echo $list2['user_id_fk']; ?>" name='<?php echo $i; ?>' src="<?php echo IMG_PATH; ?>images/green_star.gif" width="20px;" height="20px;" class='addpreferred'/>
                            </a></div>
    <?php } else { ?>
                        <div class="bookmarktext"><span  class="prefer1" id='prefer<?php echo $i; ?>'>add as preferred:</span>
                            <a>
                                <img id="image<?php echo $i; ?>" alt="<?php echo $aa; ?>" rel="<?php echo $list2['user_id_fk']; ?>" name='<?php echo $i; ?>' src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;" height="20px;" class='addpreferred'/>
                            </a></div>
    <?php } ?>


                    <p class="skills<?php echo $j; ?>" ></p>
                    <a href="javascript:void(0);"style="text-decoration: none" alt="<?php echo $list2['user_id_fk']; ?>" class="exdovait">Show Expertise:</a>

                    <p id="desc"><?php echo $list2['tc_about'] ?></p>
                    <p><a href="<?php echo WEB_URL; ?>feedback/Feedbacks" id="reviews">Reviews(123)</a></p>
                </div>
                <div style="clear:both"></div>
                <hr  class="break"/>
            </li>

    <?php
    $j++;
    $i++;
}
?>
        <div class="clr"></div>
    </ul>
    <div style="float:right">
        <span class="pagination"><<</span>
        <span class="pagination"><</span>
        <span class="pagination">1</span>
        <span class="pagination">2</span>
        <span class="pagination">3</span>
        <span class="pagination">></span>
        <span class="pagination">>></span>
        </span>
    </div>

</div>    
<!--end-->
</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".tlanguage").prop({ disabled: true });
        $(".selectall").on("change", function() {
            var tval = $(".findtraslator").val();
            var eval = $(".expertise").val();
            var slang = $(".slanguage").val();
            var tlang = $(".tlanguage").val();
            var loc = $(".location").val();
            if(slang==""){$(".tlanguage").prop({ disabled: true});
                        $(".tlanguage option:first").attr('selected','selected');}else{$(".tlanguage").prop({ disabled: false});               
            }
            if (tval == "" && eval == "" && slang == "" && tlang == "" && loc == "") {
                location.href = "<?php echo WEB_URL; ?>tastatranslators/searchtranslator";
            }
            var action = "<?php echo WEB_URL; ?>tastatranslators/translatorlist";
            $.ajax({
                url: action,
                type: "POST",
                data: {tval: tval, eval: eval, slang: slang, tlang: tlang, loc: loc},
                success: function(response)
                {
                    $(".col_right").html(response);
                }
            });
        });

        $(".exdovait").on('click', function() {
            var action1 = "<?php echo WEB_URL; ?>tastatranslators/exertisedetail";
            var exval = $(this).attr('alt');
            var exparent = $(this).prev();
            $(this).hide();
            $.ajax({
                url: action1,
                type: "POST",
                data: {eval: exval},
                success: function(result)
                {
                    exparent.html("<p>" + result + "</p>");
                }
            });
        });

        /////////////////safi starts//////////////animate({opacity: 0.25 });
        $("body").on('click', '.rbid', function() {
            var t = $(this);
            var tid = t.attr('rel');
            var aaa = t.attr('name');
            $(".successs").text('');
            //alert(aaa);return false;
            var cid =<?php echo $aa; ?>;
            var pid = $("#proclient" + aaa).val();
            var action = "<?php echo WEB_URL; ?>tastatranslators/prolistdet";
            if (pid != "") {
                $.ajax({
                    url: action,
                    type: "POST",
                    data: {tid: tid, cid: cid, pid: pid},
                    success: function(response) {
                        $("#success" + aaa).html(response).css("color", "green");
                    }
                });
            } else {
                $("#success" + aaa).html("please select project!!!!!").css("color", "red")
            }
            ;
        });

///////////////////add prefered starts//////////////////////////
        $("body").on('click', '.addpreferred', function()
        {
            var u_id = $(this).attr('rel');
            var c_id = $(this).attr('alt');
            var aa = $(this).attr('name');
            var src = $(this).attr('src');
            var b = "<?php echo IMG_PATH; ?>images/grey_star.png";
            var green = "<?php echo IMG_PATH; ?>images/green_star.gif";
            //$(this).attr('src',green);
            var action = "<?php echo WEB_URL; ?>tastatranslators/addpreferred";
            $.ajax({
                url: action,
                type: "POST",
                data: {uid: u_id, cid: c_id},
                success: function(result) {
                    if (result == 0) {
                        $("#success" + aa).html("successfully preferred").css("color", "green");
                        $("#prefer" + aa).text('preferred:');
                        $("#image" + aa).attr('src', green);
                    } else if (result == 1) {
                        $("#success" + aa).html("sorry not referred... try once again!!!").css("color", "red");
                    } else if (result == 2) {
                        $("#success" + aa).html("You already preferred to this translator.").css("color", "red");

                    }
                }
            });


//            if (a == b)
//            {
//                $(".preferadded" + id).hide();
//                this.src = this.src.replace("grey_star.png", "green_star.gif");
//                $(".prefer" + id).hide();
//                $(".preferadded" + id).show();
//            }
//            else
//            {
//                $(".preferadded" + id).hide();
//                this.src = this.src.replace("green_star.gif", "grey_star.png");
//                $(".prefer" + id).show();
//
//            }
        });
///////////////////add prefered ends//////////////////////////
    });
</script>