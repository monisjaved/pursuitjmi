<?php


/*

$db_host = 'localhost';
$db_name = 'engineer_crypt';
$db_username = 'engineer';
$db_password = 'kgggdkp1992';


$con=mysql_connect($db_host, $db_username, $db_password);
if (!$con)
  {
  die('PLEASE RELOAD THE PAGE   Could not connect: ' . mysql_error());
  }
$db=mysql_select_db($db_name);



if(!$db)
{
	die('PLEASE RELOAD THE PAGE   Could not find db: ' . mysql_error());
}

*/

//echo "con is ".$con;

?>

<!DOCTYPE HTML><html><head>

<meta name="yoda" content=".php"><title>Cryptx</title>

<noscript>
<link rel="stylesheet" href="../css/5grid/core.css" />
<link rel="stylesheet" href="../css/5grid/core-desktop.css" />
<link rel="stylesheet" href="../css/5grid/core-1200px.css" />
<link rel="stylesheet" href="../css/5grid/core-noscript.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/style-desktop.css" />
</noscript>
<script src="../css/5grid/jquery.js"></script>
<script src="../css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!-- <script type="text/javascript">
            function newInvite(){
                 var receiverUserIds = FB.ui({ 
                        method : 'apprequests',
                        message: 'Come and compete with me !! if you dare to ! Cryptex OnLine Hacking competition ! http://apps.facebook.com/cryptex-/#_=_',
                 },
                 function(receiverUserIds) {
                          console.log("IDS : " + receiverUserIds.request_ids);
                        }
                 );
                 //http://developers.facebook.com/docs/reference/dialogs/requests/
            }
        </script>  -->
        
<!--[if IE 9]><link rel="stylesheet" href="../css/style-ie9.css" /><![endif]-->
</head><body>
<div id="wrapper">
	<header id="header">
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="logo"> <!-- Logo -->
					<h1><a href="#" class="mobileUI-site-name">Cryptex </a></h1>
					<p> Final Offline Round - Time to Shine !!! <br/>Tangelo-Town</p>
				</div>
			</div>
		</div>
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="menu">
					<div id="menu-wrapper">
						<nav class="mobileUI-site-nav">
							<ul>
								<li class="current_page_item">
						<a href="view-source:http://saint.nseasy.com/~engineer/apps/crypt/final/index.php" target="_blank">Play</a></li>								
								<li><a href="index.php?p=1">Leader Board</a></li>								
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="page">
		<div class="5grid-layout">
		<div class="row">
				<div class="12u">
					<div id="banner">
						<!--div class="banner-border"><a href="#"><img src="images/pics01.jpg" alt=""></a></div-->
					</div>
				</div>
		</div>
			<div class="row">
				<div class="3u" id="sidebar1">
					<section>
					
						<ul class="style3">
							<li class="first">
								<p class="date">
										
									        <strong><?php echo $_SESSION['name'];  ?> </strong></a>
									        
									    <?php
									    
									    $query="SELECT * FROM `final` WHERE `uid` = ".$_SESSION['uid']."";
		        							$q=mysql_query($query);
		        							$row = mysql_fetch_array($q, MYSQL_ASSOC); 
		        							
		        							?>
									    
									       
								</p>
							        
								<p class="date"><strong>Currently on level <?php 
								if($row['level']==6) echo "finished";
								else echo $row['level']; ?>
								<!-- <br/>Total levels : 15</strong>  -->
								</p>
								
								<?php
										$query="SELECT count(*) FROM `final`";
		        							$q=mysql_query($query);
		        							if(!q)
		        								d("unable to get information  : try again " );
								        	
								        	$row = mysql_fetch_array($q, MYSQL_ASSOC);
								        	?>
								        	
								<p class="date"><strong>Total users : <?php $row['count(*)']=$row['count(*)'] ;
								print_r ( $row['count(*)'] ); ?></strong>								</p>
								
							</li>
							
						</ul>
					</section>
				</div>
				<div class="6u mobileUI-main-content">
					<div id="content">
						<section>
							<div class="post">
								<p><?php
								$filename = "control.txt";

								$handle = fopen($filename, "r");
								$contents = fread($handle, filesize($filename));
								//echo "status is ".$contents;
								
								if($contents=="1")
								 include "level.php"; 
								 else if($contents =="0")
								 echo " The competition will begin soon !!";
								 else
								 echo " The competition has ended now. Thanks for playing";
								 
								 
								 
								 
								 
								 ?></p>
							</div>
						</section>
					</div>
				</div>
				<div class="3u">
					<div id="sidebar2">
						<section>
							<!--<div class="sbox1">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=394531730628230";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
													</div> -->
       <div class="fb-like-box" data-href="http://www.facebook.com/TangeloTown" data-width="200" data-show-faces="true" data-stream="false" data-header="true"></div>
																						
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="copyright" class="5grid-layout">
	<section>Cryptx                           ||                     If you are not able to go to source , click on play button on the top menu 	</section>
</div>
</body>
</html>