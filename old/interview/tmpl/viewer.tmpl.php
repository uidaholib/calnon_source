<?php
	date_default_timezone_set($config['timezone']);
	$audioFormats = array('.mp3', '.wav', '.ogg', '.flac', '.m4a');
	$filepath =$cacheFile->media_url;
	$rights = (string)$cacheFile->rights;
	$usage = (string)$cacheFile->usage;
	$contactemail = $config[$cacheFile->repository]['contactemail'];
	$contactlink = $config[$cacheFile->repository]['contactlink'];
	$copyrightholder = $config[$cacheFile->repository]['copyrightholder'];
?>

<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
    
  <link rel="canonical" href="/digital/calnon/interview.html">
  <link rel="alternate" type="application/rss+xml" title="Digital Initiatives" href="/digital/feed.xml">
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">


   <title>Interview | Mark Calnon Brooks Collection | Digital Initiatives | University of Idaho Library</title>
  <meta name="description" content="Oral History Interview with Mark B. Calnon, World War II Pilot and Prisoner of War">
  
   <link rel="stylesheet" href="css/viewer.css" type="text/css" />
    <link rel="stylesheet" href="css/custom_default.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.toggleSwitch.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css">
 <link rel="stylesheet" href="/digital/css/main.css">
 <style>
 .indexJumpLink {
    font-size:20px; text-decoration:underline;
}
 </style>
</head>
  <body>
<script type="text/javascript">
		var jumpToTime = null;
		if(location.href.search('#segment') > -1)
		{
			var jumpToTime = parseInt(location.href.replace(/(.*)#segment/i, ""));
			if(isNaN(jumpToTime))
			{
				jumpToTime = 0;
			}
		}
	</script>

<p id="collectionslink">All Collections</p>



    <!-- Top Header -->

<div class="box1 ">
<div class="row">
<div class="col-md-3  col-sm-12 diginit">
		 <a id="digleft" href="/digital/index.html" title="University of Idaho Library Digital Initiatives" >
  <img id="digleft" src="http://www.lib.uidaho.edu/digital/justdi_logo_sm.png" alt="digital initiatives logo" /></a>
 <a  href="http://www.lib.uidaho.edu" title="University of Idaho Library"> <img id="libleft" src="http://www.lib.uidaho.edu/digital/justlib_logo_sm.png" alt="library logo" /></a>  </div>
  





<div id="title" class="col-md-9"" >
		 <h2><a href="index.html" >Mark Brooks Calnon Collection</a></h2>		 
         <p>Materials from the life of Mark B. Calnon, World War II Pilot and Prisoner of War </p>
</div>
</div>	

	
		 
		 
</div>
<!-- EndTop Header -->
<header class="site-header">

  <div class="wrapper row">

    <nav class="site-nav">
      <a href="#" class="menu-icon">
        <svg viewBox="0 0 18 15">
          <path fill="#424242" d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.031C17.335,0,18,0.665,18,1.484L18,1.484z"/>
          <path fill="#424242" d="M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0c0-0.82,0.665-1.484,1.484-1.484 h15.031C17.335,6.031,18,6.696,18,7.516L18,7.516z"/>
          <path fill="#424242" d="M18,13.516C18,14.335,17.335,15,16.516,15H1.484C0.665,15,0,14.335,0,13.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.031C17.335,12.031,18,12.696,18,13.516L18,13.516z"/>
        </svg>
      </a>

      <div class="trigger">
        <div class="col-md-8 col-sm-12" style="whitespace:nowrap;">
  <a class="page-link" href="../index.html" id="homehash" >Home</a> 
<a class="page-link" href="../about.html" id="abouthash" >About Calnon</a>


<a class="page-link active" href="#" id="interviewhash" >Interview</a>


<a class="page-link" href="../all.html" id="allhash">View All</a>
<a class="page-link" href="http://digital.lib.uidaho.edu/cdm/search/collection/calnon" id="allhash">Database</a>
        </div>
<div class="col-md-4 pull-right">
 
     
        
<div >
<form action="http://digital.lib.uidaho.edu/cdm4/results.php" method="get" class="searchall ">
<input type="hidden" value="all" name="CISOOP1">
<input type="text" size="15" name="CISOBOX1">
<input type="hidden" value="CISOSEARCHALL" name="CISOFIELD1">
<input type="hidden" value="exaxt" name="CISOOP2">
<input type="hidden" value="" name="CISOBOX2">
<input type="hidden" value="CISOSEARCHALL" name="CISOFIELD2">
<input type="hidden" value="any" name="CISOOP3">
<input type="hidden" value="" name="CISOBOX3">
<input type="hidden" value="CISOSEARCHALL" name="CISOFIELD3">
<input type="hidden" value="none" name="CISOOP4">
<input type="hidden" value="" name="CISOBOX4">
<input type="hidden" value="CISOSEARCHALL" name="CISOFIELD4">
<input type="hidden" value="/calnon" name="CISOROOT">
<input class="button-all" type="submit" value=" Search ">
</form>

</div>

      </div>
    </nav>

  </div>

</header>


    <div class="page-content">
      <div class="wrapper center" >

  


		<?php if(isset($config[$cacheFile->repository])): ?>
		<img src="<?php echo $config[$cacheFile->repository]['footerimg'];?>" alt="<?php echo $config[$cacheFile->repository]['footerimgalt'];?>" style="float: left;" />
		<?php endif; ?>		
		<div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12" >
	<h1 ><?php 
	$name = $cacheFile->interviewee; 
	$pieces = explode(",", $name);
	echo $pieces[1]; 
	echo " ";
	echo $pieces[0]; ?> <span class="smalltitle">(b. <?php echo $cacheFile->birthyear; ?>)</span></h1>
	<p class="topics" >
 An interview with Mark Calnon regarding his personal history as a WWII pilot and Prisoner of War. <br />August 13, 2013 | 1 hr 32 min | 23p </p>
		</div>
    
	<div id="audio-panel" class="center col-lg-6 col-md-12 col-sm-12">
<!--	<p class="audiodesc"><span class="info2">Date:</span> <?php
$date=date_create($cacheFile->date);
echo date_format($date,"F d, Y");
?>  
<span class="info2">Interviewer:</span> <?php echo $cacheFile->interviewer; ?></p>-->
	  <?php include_once 'tmpl/player_'.$cacheFile->playername.'.tmpl.php'; ?>
	  
	  
	
	<div id="notification" style="display:none;">
	  <p>It may take several seconds for the player to load the segment</p></div>
	</div>
	
		</div>
		<br />
		<br />
    <div class="row">
	
	 	
      <div  class="col-md-4 col-sm-5 ">
	  <div class="pull-right"><?php include_once 'tmpl/search.tmpl.php'; ?></div>
      </div>
	<div class="col-md-6 col-sm-6 ">
	
	<h2><span id="transcript-panel_header" style="display:none;">Transcript</span> <span id="index-panel_header">Index</span></h2>
	  <div id="transcript-panel" style="width:100%;">
	  
	  
	  <?php echo $cacheFile->transcript; ?>
	  </div>
	  <div id="index-panel">
	  
	    <?php echo $cacheFile->index; ?>
	  </div>
	</div>
	
    </div>
	<div style="clear:both"></div>
    <div id="footer">
		<div style="float: left; text-align: left; width: 50%; margin-top: -12px;">
			<?php if(!empty($rights)): ?>
				<p><span><a href="#" id="lnkRights">View Rights Statement</a><div id="rightsStatement"><?php echo $rights; ?></div></span></p>
			<?php else: ?>
				
			<?php endif; ?>
			<!--<?php if(!empty($usage)): ?>
				<p><span><h3><a href="#" id="lnkUsage">View Usage Statement</a></h3><div id="usageStatement"><?php echo $usage; ?></div></span></p>
			<?php else: ?>
				<p><span><h3>View Usage Statement</h3></span></p>
			<?php endif; ?>
			<?php if((string)$cacheFile->collection_link != ''): ?>
				<p><span><h3>Collection Link: <a href="<?=$cacheFile->collection_link?>"><?=$cacheFile->collection?></a></h3></span></p>
			<?php endif; ?>
			<?php if((string)$cacheFile->series_link != ''): ?>
				<p><span><h3>Series Link: <a href="<?=$cacheFile->series_link?>"><?=$cacheFile->series?></a></h3></span></p>
			<?php endif; ?>
			<p><span><h3>Contact Us: <a href="mailto:<?php echo $contactemail;?>"><?php echo $contactemail; ?></a> | <a href="<?php echo $contactlink; ?>"><?php echo $contactlink; ?></a></h3></span></p>-->
		</div>
		<div style="float: right; text-align: right; width: 50%;">
			<small id="copyright"><span>&copy; <?php echo Date("Y"); ?> </span><?php echo $copyrightholder; ?></small>
		</div>
		<div style="float: right; color:white; margin-top: 10px; text-align:right;">
			<a href="http://www.oralhistoryonline.org/"><img alt="Powered by OHMS logo" src="imgs/ohms_logo.png" border="0"/></a>
	  </div>
		<br clear="both" />
      </div>
	  </div>
	  </div>
	  </div>
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.toggleSwitch.js"></script>
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
      <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
      <script type="text/javascript" src="js/viewer_<?php echo  $cacheFile->viewerjs;?>.js"></script>
	<link rel="stylesheet" href="js/fancybox_2_1_5/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="skin/jplayer.blue.monday.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox_2_1_5/source/jquery.fancybox.pack.js?v=2.1.5"></script>

	<link rel="stylesheet" href="js/fancybox_2_1_5/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox_2_1_5/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="js/fancybox_2_1_5/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<link rel="stylesheet" href="js/fancybox_2_1_5/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox_2_1_5/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript">
	     $(document).ready(function() {
		   jQuery('a.indexSegmentLink').on('click', function(e) {
				var linkContainer = '#segmentLink' + jQuery(e.target).data('timestamp');

				e.preventDefault();
				if(jQuery(linkContainer).css("display") == "none")
				{
					jQuery(linkContainer).fadeIn(1000);
				}
				else
				{
					jQuery(linkContainer).fadeOut();
				}
				
				return false;
		   });
		   
		   jQuery('.segmentLinkTextBox').on('click', function() {
				jQuery(this).select();
			});
			
			if(jumpToTime !== null)
			{
				jQuery('div.point').each(function(index) {
					if(parseInt(jQuery(this).find('a.indexJumpLink').data('timestamp')) == jumpToTime)
					{
						jumpLink = jQuery(this).find('a.indexJumpLink');
						jQuery('#accordionHolder').accordion({active: index});
						var interval = setInterval(function() {
							<?php
								switch($cacheFile->playername):
									case 'youtube':
							?>
								if(player !== undefined && player.getCurrentTime !== undefined && player.getCurrentTime() == jumpToTime)
							<?php
										break;
									case 'brightcove':
							?>
								if(modVP !== undefined && modVP.getVideoPosition !== undefined && Math.floor(modVP.getVideoPosition(false)) == jumpToTime)
							<?php
										break;
									case 'kaltura':
							?>
								// Kaltura not implemented yet. Replace this with the right "if" statement at the appropriate time.
								if(true)
							<?php
										break;
									default:
							?>
								if(Math.floor(jQuery('#subjectPlayer').data('jPlayer').status.currentTime) == jumpToTime)
							<?php
										break;
								endswitch;
							?>
								{
									clearInterval(interval);
								}
								else
								{
									jumpLink.click();
								}
						}, 500);
						jQuery(this).find('a.indexJumpLink').click();
					}
				});
			}
						$(".fancybox").fancybox();
		  $(".various").fancybox({
		       maxWidth  : 800,
		       maxHeight : 600,
		       fitToView : false,
		       width          : '70%',
		       height         : '70%',
		       autoSize  : false,
		       closeClick     : false,
		       openEffect     : 'none',
		       closeEffect    : 'none'
		  });
		  $('.fancybox-media').fancybox({
		       openEffect  : 'none',
		       closeEffect : 'none',
		       width          : '80%',
		       height         : '80%',
		       fitToView : true,
		       helpers : {
		            media : {}
		       }
		  });
		  $(".fancybox-button").fancybox({
		       prevEffect          : 'none',
		       nextEffect          : 'none',
		       closeBtn       : false,
		       helpers        : {
		            title     : { type : 'inside' },
		            buttons   : {}
		       }
		  });
		  
		  jQuery('#lnkRights').click(function() {
			jQuery('#rightsStatement').fadeToggle(400);
			
			return false;
		  });

		  jQuery('#lnkUsage').click(function() {
			jQuery('#usageStatement').fadeToggle(400);
			
			return false;
		  });
	     });
	</script>
      <script type="text/javascript">
	var cachefile = '<?php echo $cacheFile->cachefile; ?>';
      </script>

<script>
$('a.indexJumpLink').click(function() {
$('#notification').slideDown(500).delay(2400).slideUp(500);}
);
</script>

<?php include ('/digital/collectionspull.txt'); ?>
<?php include ('/digital/digitalanalytics.txt'); ?>
    </body>
  </html>
