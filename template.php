<!DOCTYPE HTML><html><head><title>Cryptx</title>
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
 <script type="text/javascript">
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
        </script>
        
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="wrapper">
	<header id="header">
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="logo"> <!-- Logo -->
					<h1><a href="#" class="mobileUI-site-name">Cryptex </a></h1>
					<p>Online Hacking and Treasure hunt ! <br/>AlgoRhythm13</p>
				</div>
			</div>
		</div>
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="menu">
					<div id="menu-wrapper">
						<nav class="mobileUI-site-nav">
							<ul>
								<li class="current_page_item"><a href="index.php" target="_blank">Play</a></li>								
								<li> <a href="#" onclick="newInvite(); return false;">Challenge Friends </a></li>								
								<li><a href="index.php?p=1">Leader Board</a></li>
								<li><a href="index.php?p=2">Forum</a></li>
								<li><a href="index.php?p=3">About</a></li>
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
								<p class="date"><a href="http://facebook.com/<?echo $user; ?>" >
										<img src=http://graph.facebook.com/<?php echo $user ;?>/picture/><br/>
										<?php
										$query="SELECT * FROM `level` WHERE `uid` = ".$user."";
		        							$q=mysql_query($query);
		        							if(!q)
		        								d("unable to get information  : try again " );
								        	
								        	$row = mysql_fetch_array($q, MYSQL_ASSOC);
								        	?>
									        <strong><?php echo $userInfo['name']; ?> </strong></a>
								</p>
							        
								<p class="date"><strong>Currently on level <?php echo $row['level']; ?><br/>Total levels : 15</strong>
								</p>
								
								<?php
										$query="SELECT count(*) FROM `level`";
		        							$q=mysql_query($query);
		        							if(!q)
		        								d("unable to get information  : try again " );
								        	
								        	$row = mysql_fetch_array($q, MYSQL_ASSOC);
								        	?>
								        	
								<p class="date"><strong>Total users : <?php $row['count(*)']=$row['count(*)']+1 ;print_r ( $row['count(*)'] ); ?></strong>								</p>
								
							</li>
							
						</ul>
					</section>
				</div>
				<div class="6u mobileUI-main-content">
					<div id="content">
						<section>
							<div class="post">
								<p><? include "level.php"; ?></p>
							</div>
						</section>
					</div>
				</div>
				<div class="3u">
					<div id="sidebar2">
						<section>
							<div class="sbox1">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=394531730628230";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
													</div>
							       <div class="fb-like-box" data-href="http://www.facebook.com/jmi.algorhythm" data-width="200" data-show-faces="true" data-stream="false" data-header="true"></div>
																						
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