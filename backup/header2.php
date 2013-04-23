<style type="text/css">
<!--
.style2 {font-family: "Courier New", Cambria, Courier, monospace}
-->
</style>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
?>
<body  onLoad=password() background='picture/font.jpg' >


<center>
 <img src="picture/Backtrack Header.png" />
</center>

<br />
<script type=""  language="Javascript">
var currentTime = new Date()
var h= currentTime.getHours()
var m = currentTime.getMinutes()

   var tl=new Array( 
   "\nThe time is  " + h + ":" + m  + " !!! Hurry  !!!  "
                  );
var speed=1;
var index=0; text_pos=0;
var str_length=tl[0].length;
var contents, row;
function password()
{
  contents='';
  row=Math.max(0,index-9);
  while(row<index)
    contents += tl[row++] + '\r\n';
	//document.write( contents + tl[index].substring(0,text_pos) + "_");
 document.forms[0].elements[0].value = contents + tl[index].substring(0,text_pos) + "_";
  if(text_pos++==str_length)
  {
    text_pos=0;
    index++;
    if(index!=tl.length)
    {
      str_length=tl[index].length;
      setTimeout("password()",2000);
    }
  } else
    setTimeout("password()",speed);
}
</script>

 <form action=""  style="margin-top:-10px; "  >
 <center>
   <textarea name="textarea"  cols=155 rows=15 style=" width: 300px;height:40px;background: #000;padding:30px;font-size: 9pt; font-family: fixedsys, LucidaTerminal, monospace;color: #909090;text-align: left;overflow:auto;border: 1px"  ></textarea>
 </center>
</form></body></html>


>