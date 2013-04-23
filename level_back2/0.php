<?php
$flag=0;

if ($user) {
$user = $facebook->getUser(); //get the user id
$page = '511593792200670';

try { $likeID = $facebook->api(array( 'method' => 'fql.query', 'query' => 'SELECT target_id FROM connection WHERE source_id =' . $user . 'AND target_id =' .$page ));
if ( empty($likeID) ) {
	// user HAS NOT Liked the page
	echo "<h3><strong><font color ='red'>Like the page </font> on the sidebar to move to level 1 <font color ='red'>Reload </font> page to confirm!<strong></h3>";
}
else {
// user HAS Liked the page
echo "<h4><strong>Refresh to move to level One</strong> </h4>";
$flag=1;
}


 }
catch(Exception $e )
	{
		$permerror=1 ;	//d($e);
	}
	
	




if($flag==1)
{
	  	$query="UPDATE `level` SET `level`=1,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!$q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo '<br/><strong>Good.!  Click <a href="index.php">here</a> to move to next level </strong>' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/"</script>' ;
			}
        	
}
if($permerror==1)
{
		echo "<br/><br/><hr/>YOu have error in privacy settings ! <strong>LIke the page on left side bar</strong> , if you are found to have not liked , you would be considered disqualified";
	  	$query="UPDATE `level` SET `level`=1,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!$q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo '<h3><br/><strong>GoodLuck.!  Click <a href="index.php">here</a> to move to next level </strong></h3><hr/>' ;
        		//echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/"</script>' ;
			}
			
}
}
?>