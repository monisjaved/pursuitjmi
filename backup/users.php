<style type="text/css">
.intable{
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
	margin-left:25%;
	margin-right:25%;
}
-->
</style>
<?php include 'header.php';
  $connect=mysql_connect("localhost","root","");
  mysql_select_db("registered",$connect) or die("CAN'T CONNECT TO DATABASE");
  $query="select * from user";
  $result=mysql_query($query);?>
<style type="text/css">
<!--
.style6 {color: #CCCCFF}
-->
</style>

 <center> <table cols="2" class="intable" >
  <th width="169"><span class="style6"><u>USERNAME</u></span></th>
  <th width="159"><span class="style6"><u>E-MAIL</u></span></th>
  <?php  while($row = mysql_fetch_assoc($result))
    {?>
	 
	  <tr ><td align="center" ><font color="#BBBBBB" ><?php echo $row['username'];?></font></td>
	   <td  align="center"><font color="#BBBBBB" ><?php echo $row['email'];?></font></td>
	   </tr>
   
          <?php }
?> 
</table></center>