<ul id="products" class="grid clearfix">
                        <?php 
                      //  print_r($client);exit;
                        $i=0;
                        foreach ($client as $details) { ?>
                            <!-- row 1 -->

                            <li class="clearfix">
                                <div id="success<?php echo $i; ?>"></div>
                            <section class="left">
                                <img src="<?php echo IMG_PATH; ?>images/products/searchtranslator.png"  class="thumb"><br>
                                <span>User Name:<?php echo $details['cl_first_name'] . ' ' . $details['cl_last_name']; ?></span><br>
                                <span>Location:<?php echo $details['cl_city']; ?></span><br>
                                <span>Date:<?php echo $details['cl_dob']; ?></span>
                            </section>

                            <section class="right">

                                <span class="darkview">
                                    <a href="javascript:void(0);" id="approve<?php echo $i; ?>" i="<?php echo $i; ?>" name="<?php echo  $details['cl_profile_id_pk'] ; ?>" class="approvep"><button class="button  " style="width:60px; margin: 0 0 0 40px;">Approve</button></a>
                                    <a href="javascript:void(0);"  id="view<?php echo $i; ?>" i="<?php echo $i; ?>"  name="<?php echo  $details['cl_profile_id_pk'] ; ?>"  class="approvep"><button class="button view" style="width:60px;margin: 0 0 0 40px;">View</button></a>
                                    <a href="javascript:void(0);"  id="reject<?php echo $i; ?>" i="<?php echo $i; ?>" name="<?php echo  $details['cl_profile_id_pk'] ; ?>"  class="approvep"><button class="button reject" style="width:60px;margin: 0 0 0 40px;">Reject</button></a>

                                     </span>
                            </section>
                            </li>
                          
                        <?php 
                        $i++;
                        } ?>


                    </ul>