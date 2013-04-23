<!--<img src=http://graph.facebook.com/<?php echo $user ;?>/picture/><br/>
<strong>Welcome :</strong><strong><?php echo $userInfo['name']; ?> </strong> <br/>
<strong>Your Rank : </strong><?php echo $rank; ?> <br/-->

<style>
table, td, th
{
border:1px solid ;
width:500px;
height:30px;
padding:15px;
vertical-align:bottom;
}
th
{
color:black;
}
</style>
<table border="1" >
<tr>
<th>Sno </th>
<th>Name</th>
<th>Level </th>
<th>Time stamp</th>
</tr>


<?php 
$query="SELECT * FROM  `level` order by level desc";

        	$q=mysql_query($query);
        	if(!q)
        		d("unable to get information  : try again " );
        	$i=1;
        	while($row = mysql_fetch_array($q, MYSQL_ASSOC))
        	{
        		
        		echo "<tr><td>". $i." </td><td> <a href='http://facebook.com/".$row['uid']."'>".$row['name']."</a></td><td> ".$row['level']." </td><td>".$row['time']."</td></tr>" ; $i=$i+1;
        	}
        	?>
        	</table>