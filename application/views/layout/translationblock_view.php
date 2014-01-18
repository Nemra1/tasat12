<div class="tab_colum"> 

<div class="tab">

<ul id="tabs">
    <li id="current"><a href="#" name="tab1">Text Translation   </a></li>
    <li><a href="#" name="tab2">Online Translation </a></li>
    <li><a href="#" name="tab3">Professional Translation</a></li>   
</ul>

<div id="content"> 
    <div id="tab1" style="display: block; ">
        <table width="93%" border="0">
  <tr>
    <td width="35%"><textarea rows="8" cols="26" name="textBox1" onkeypress=" return check_length(this, document.getElementById('count_number_words'), document.getElementById('show_remaining_words'));" >
</textarea>
<font color="black">Word count:</font>&nbsp;<font color="red"> 
 <span id="count_number_words">0</span>
</font>
   &nbsp;&nbsp;
<font color="black">Words remaining: </font>&nbsp;<font color="red"> 
  <span id="show_remaining_words">10</span>
</font>
</td>


    <td width="16%"><a href="#" class="button">Translate</a></td>
    <td width="49%"><textarea rows="8" cols="26">
 
</textarea></td>
  </tr>
  <tr>
    <td height="20">
<select style="font-size:12px; font-family:Calibri; width:42%;">
  <option>English</option>
  <option>Russian</option>
  <option>Chinese</option>
  <option>Spanish</option>
  <option>Arabic</option>
    <option>Italian</option>
  <option>German</option>
  <option>French</option>
  <option>Japanese</option>
</select>&nbsp;&nbsp;
<span style="color:#FFF;">to</span> &nbsp;&nbsp;
<select style="font-size:12px; font-family:Calibri; width:42%; float:right;">
  <option>English</option>
  <option>Russian</option>
  <option>Chinese</option>
  <option>Spanish</option>
  <option>Arabic</option>
    <option>Italian</option>
  <option>German</option>
  <option>French</option>
  <option>Japanese</option>
</select>
</td>
    <td >&nbsp;</td>
    <td style="color:#FFF;"><img src="<?php echo IMG_PATH;?>images/listen.png " align="left">&nbsp;&nbsp;&nbsp;Email this Translation &nbsp;&nbsp;&nbsp;<!--<img src="images/listenimg.png" align="absmiddle">&nbsp;&nbsp;&nbsp;Listen--></td>
  </tr>

</table>
   
    </div>
    <div id="tab2" style="display: none; ">
         <table width="100%" border="0">
 <p style="color:#fff;">As a global interpreting company, we have built a team of linguists covering a huge range of languages across the globe. </p>

<p style="color:#fff;">Putting it simply, whatever language you need in whatever location, chances are we can help. Our most called for languages include Russian,French, Spanish, Arabic, Chinese,German,Japanese and Italian.</p>
<p align="right"> <a href="onlineinterpretation.html" class="button_atd">Read More</a></p>

</table>
  
    </div>
    <div id="tab3" style="display: none; ">
        <table width="100%" border="0">
<p style="color:#fff;">
Professional translation by qualified human translators is essential if the translated material needs to be published or presented to a global market. All-Translations Company complies with the code of Professional Ethics and Business Conduct, strictly observed among translation companies, and does not disclose confidential information to third parties</p>

<tr>
<td>
<strong style="font-weight:bold; font-size:14px; color:#282fc1;">Select a language</strong><br />

 </td>
</tr>
<tr>
<td>
Source Language:&nbsp;&nbsp;<select style="font-size:12px; font-family:Calibri; width:150px;">
  <option>English</option>
  <option>Russian</option>
  <option>Chinese</option>
  <option>Spanish</option>
  <option>Arabic</option>
    <option>Italian</option>
  <option>German</option>
  <option>French</option>
  <option>Japanese</option>
</select>&nbsp;&nbsp;</td>
<td>
Target Language:&nbsp;&nbsp;<select style="font-size:12px; font-family:Calibri; width:150px;">
  <option>English</option>
  <option>Russian</option>
  <option>Chinese</option>
  <option>Spanish</option>
  <option>Arabic</option>
    <option>Italian</option>
  <option>German</option>
  <option>French</option>
  <option>Japanese</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td style="padding-top:15px; padding-left:180px;"> <a href="Professional_Translation.html" class="button_atd">Continue</a></td>
</tr>
</table>

    </div>
</div>

</div>
<script src="<?php echo WEB_PATH;?>Scripts/jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function() {
    $("#content div").hide(); // Initially hide all content
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#content div:first").fadeIn(); // Show first tab content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return       
        }
        else{             
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('name')).fadeIn(); // Show content for current tab
        }
    });
});
</script>

<script type="text/javascript">
    function changePage(pageNum) {
        if (pageNum == 1) { var pageURL = 'viewprofile.html'; }
        if (pageNum == 2) { var pageURL = 'InterpreterViewProfile.html'; }
        
        window.location.href = pageURL;
    }
</script>
<!--<div class="Tab_right_colum">
<a href="#"><img src="images/flash.png"/></a>
</div>-->
<div class="Tab_right_colum">
<div class="tr_1">Live Online Translation</div>
<div class="tr_2"><a href="#">Are you travelling?</a></div>
<div class="tr_3"><a href="#">Want Multilingual Business ?</a></div>
<div class="tr_4"><a href="#">Want Document Interpretation?</a></div>
<div class="tr_5">Where ever you go, 
Your online Translator can follow you.</div>

</div>

</div>
