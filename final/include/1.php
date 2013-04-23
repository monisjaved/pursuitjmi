
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
<th>Reached current level in time </th>
</tr>



<?php 

$rank =0;


for($i=6;$i>=0;--$i){

$query="SELECT *  FROM  `final` WHERE `level` ='".$i."' order by `current_time` - `init_time`  ";
   $q=mysql_query($query);
        	if(!q)
        		d("unable to get information  : try again " );
        		
        	while($row = mysql_fetch_array($q, MYSQL_ASSOC))
        	{
        		$duration = $row['current_time'] - $row['init_time'];
        		//echo $duration." ";
        		$m = (int)($duration / 60 );    $s = $duration % 60;
        		//echo $m." ".$s." ";
        		echo "<tr><td>". ++$rank." </td><td> <a href='http://facebook.com/".$row['uid']."'>".$row['name']."</a></td><td> ";
        		if($row['level']=='6')
        		echo 'Finished';
        		else echo $row['level']; 
        		echo " </td><td>".$m." minutes , ".$s." seconds</td></tr>" ; 
        	}
        	
        	
        	
      
      
      
      
      
 }     
      
      
      
      
        	?>
        	</table>