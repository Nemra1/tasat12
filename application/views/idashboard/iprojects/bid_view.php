
<form action="<?php echo WEB_URL; ?>myProjects/insertBid" method="POST" >
<div class="left-in-main fleft" id="cen">	
   
  <?php foreach ($details as $prolist){ ?>
<div class=""><p><b>Project Name:</b></div>  <div class="Press"><?php echo $prolist['pro_name']; ?></div></p>
<div class=""><p><b>Client Name:</b></div>   <div class="j"><?php echo $prolist['cl_first_name']; ?> <?php echo $prolist['cl_last_name']; ?></div></p>
<div class="Average"><p><b>Average Bid:</b></div>       <div class="Doller"><?php if( $prolist['pro_status']==6){
    echo print_r($avge[0]['avg(bid_amount)']) ;
  }
  else{
      echo 0;
  }
  ?>  </div></p>
<div class="Number"><p><b>Number of Bid:</b></div>      <div class="ten"> <?php if($prolist['pro_status']==6){ echo print_r($totalbid[0][ 'count(*)']) ;}
else{
    echo 0;
}?></div></p>
<div class="Description"><p><b>Description:</b></div>       <div class="need"><?php echo $prolist['pro_desc']; ?> </div>  </p>
<div class="Projecttype"><p><b>Project Type:</b></div>  <div class="Written"> <?php echo $prolist['pro_type']; ?> </div></p>
<div class="Projecttype"><p><b>Project Budget:</b></div>  <div class="Written">$<?php echo $prolist['pro_budget_min']; ?> - $<?php echo $prolist['pro_budget_max']; ?></div></p>

</div>
<div class="right-in-main fright" id="sen">
<div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10" style="width:300px";>
    <form id="bidviewform" action="<?php echo WEB_URL; ?>myProjects/insertBid" method="POST">
        <input type="hidden" name="proid" value="<?php echo $prolist['pro_id_pk']; ?>"/>
        <p><div class="Price">Price:</div> <div class="in"><input type="text" name="price" id="bidprice">
  </div>
             
      </p>
 
         <p><div class="Duration">Duration:</div> <div class="in"> <input type="text" name="duration" id="bidduration"></div>
 
         <p><div class="Proposal">Proposal:</div><div class="textarea"><textarea style="width:140px" name="proposal" id="bidmessage"></textarea></div>
   
         <input style="margin-left:130px; " type="submit" class="button" value="Bid"  type="BUTTON" value="Bid" class="rounded"/>    
    </form>
    <?php } ?>
</div>
</div>
    </div>    
        <!--end-->
</div>
</form>