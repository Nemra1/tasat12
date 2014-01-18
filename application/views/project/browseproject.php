<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
    table{
        width:900px;
        margin-left: 40px;
        margin-right: 10px;
        margin-top: 30px;
    }
    td
    {
      width:40px;  
    }
    tr:hover
    {
      background:#fff;  
      
    }
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.oddrowcolor{
	background-color: #E5E4E2;
}
.evenrowcolor{
	background-color: #95B9C7;
}
</style>
<br/><br/>

     
<div class="button_right_3" style="margin-left: 40px;height:50px ">

<span style="font-size:16px; color:#FFF;"><a href="">Translator Lists</a></span><br />

</div>

<table class="altrowstable" id="alternatecolor">

    <tr>
        <th>Client Name</th>
        <th>Translation Type</th>
        <th>Translator</th>
        <th>Date</th>
        <th>Price</th>
    </tr>

    <tr>
        <td><a href="#">aa</a></td>
        <td>individual</td>
        <td>abcd</td>
        <td>23/10/12</td>
        <td>$122</td>
    </tr>
    <tr class="odd">
        <td>aa</td>
        <td>individual</td>
        <td>abcd</td>
        <td>23/10/12</td>
        <td>$122</td>
    </tr>
    <tr class="odd">
        <td>aa</td>
        <td>individual</td>
        <td>abcd</td>
        <td>23/10/12</td>
        <td>$122</td>
    </tr>
    <tr class="odd">
        <td>aa</td>
        <td>individual</td>
        <td>abcd</td>
        <td>23/10/12</td>
        <td>$122</td>
    </tr>
</table>
