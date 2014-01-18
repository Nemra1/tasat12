<?php 
   $count=  sizeof($listresult);
   //print_r($listresult);
   $aa = $u_id;
?>
    <div id="trnslatorresult" ></div>
    <ul>
        <?php
        for($i=0; $i<$count;$i++) {
                if ($listresult[$i]['user_type'] == 2) {
                    $name=$listresult[$i]['it_patronymic']." ".$listresult[$i]['it_first_name'] . " " . $listresult[$i]['it_last_name'];
                    $about=$listresult[$i]['it_about'];
                } else if ($listresult[$i]['user_type'] == 3) {
                    $name=$listresult[$i]['tc_first_name'];
                    $about=$listresult[$i]['tc_about'];
                } 
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
                            <a href="javascript:void(0);" class="button rbid" rel="<?php echo $listresult[$i]['user_id_fk'];?>" name="<?php echo $i;?>">Request Bid</a>
                        </li>
                    </ul>
                </div>
                <div class="proj_right"><br /><br /><?php // print_r($plist);  ?>
                    <label for="project" style="width: 100px; float: left;">Select Project:</label>
                    <select class="proclient" id="proclient<?php echo $i; ?>" style="width: 262px;">
                        <option value="">Select Project</option>
                        <?php foreach ($plist as $val) { ?>
                            <option value="<?php echo $val['pro_id_pk']; ?>"><?php echo $val['pro_name']; ?>India</option>
                        <?php } ?>
                    </select>
                    <div id="success<?php echo $i;?>" class='successs'></div>
                    <a href="<?php echo WEB_URL; ?>tastatranslators/transProfile/?id=<?php echo $listresult[$i]['user_id_fk']; ?>" style="text-decoration: none" class="head-blue1"><h3><?php echo $name. " " . $listresult[$i]['user_id_fk']; ?></h3></a>
                    
                    <?php if ($listresult[$i]['pref_status'] == 1) { ?>
                        <div class="bookmarktext"><span  class="prefer1" id='prefer<?php echo $i; ?>'>preferred:</span>
                            <a>
                                <img id="image<?php echo $i; ?>" alt="<?php echo $aa; ?>" rel="<?php echo $listresult[$i]['user_id_fk']; ?>" name='<?php echo $i; ?>' src="<?php echo IMG_PATH; ?>images/green_star.gif" width="20px;" height="20px;" class='addpreferred'/>
                            </a></div>
    <?php } else { ?>
                        <div class="bookmarktext"><span  class="prefer1" id='prefer<?php echo $i; ?>'>add as preferred:</span>
                            <a>
                                <img id="image<?php echo $i; ?>" alt="<?php echo $aa; ?>" rel="<?php echo $listresult[$i]['user_id_fk']; ?>" name='<?php echo $i; ?>' src="<?php echo IMG_PATH; ?>images/grey_star.png" width="20px;" height="20px;" class='addpreferred'/>
                            </a></div>
    <?php } ?>
                    <p class="skills<?php echo $i; ?>" ></p>
                    <p><span style="color:#C30;">Expertise in:&nbsp;&nbsp;</span><?php echo $listresult[$i]['expertise_name'];  ?></p>
                    <p id="desc"><?php echo $about; ?></p>
                    <p><a href="<?php echo WEB_URL; ?>feedback/Feedbacks" id="reviews">Reviews(123)</a></p>
                </div>
                <div style="clear:both"></div>
                <hr  class="break"/>
            </li>

            <?php 
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
    