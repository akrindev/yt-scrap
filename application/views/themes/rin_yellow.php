
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free music/mp3 download fast and simple">
    <meta name="author" content="Akrin">
    <link rel="shortcut icon" href="favicon.ico">

    <title><?=$title;?></title>

    <!-- CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">


<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

 <meta name="google-site-verification" content="nnnLe3hW9kGvcFJ4lu3LegWr3LjCspNcSvGafbcC-uU" />
<meta name='language' content='id_id'/>
<meta name='robots' content='index,follow'/>
	<meta content='follow, all' name='alexabot'/>
<meta content='-5;120' name='geo.position'/>
<meta content='id' name='language'/>
<meta content='Indonesia' name='geo.placename'/>
<meta content='global' name='target'/>
<meta content='Indonesia' name='geo.country'/>
<meta content='all' name='googlebot'/>
<meta content='all' name='msnbot'/>
<meta content='all' name='Googlebot-Image'/>
<meta content='all' name='Slurp'/>
<meta content='all' name='ZyBorg'/>
<meta content='all' name='Scooter'/>
<meta content='ALL' name='spiders'/>
<meta content='general' name='rating'/>
<meta content='2 days' name='revisit-after'/>
<meta content='2 days' name='revisit'/>
<meta content='all' name='WEBCRAWLERS'/>


<script type='application/ld+json'>
{
	 "@context": "http://schema.org",
	 "@type": "WebSite", 
	 "url": "<?=base_url();?>"
 }</script>
	
 <meta property="og:url"                content="<?=base_url($this->uri->uri_string());?>" />
<meta property="og:type"               content="article" />
<meta content='Freedom music download' property='og:site_name'/>
<meta property="og:title"              content="<?=$title;?>" />
<meta property="og:description"        content="<?=$title;?> | mp3.akrindev.me" />
<meta property="og:image"              content="<?=base_url();?>assets/img/logo.jpg"/>
<meta property="fb:app_id" content="2008283499456981"/>

	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";

	/** -- to here -- */
?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<header>
	  <img class="img-responsive" src=" <?=base_url();?>assets/img/logo.jpg"/>
	  <div class="logo-text">Freedom Music<br/><small>can you hear without a sound?</small>
	  </div>
	  <div class="search">
		<form action="<?=base_url('search');?>" method="GET">
		  
		  <input type="text" name="q" class="search-form" placeholder="Search here . . ."/>
		  <button type="submit" class=" bcd">Search</button>
			
		</form>
	  </div>
	</header>

	<?=$output;?>
	
	<footer>
	  &copy; 2017 - <a href="<?=base_url();?>">mp3.akrindev.me</a>
<br/>
<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3975565,4,1039,200,30,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3975565&101" alt="simple hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->

	</footer>
  </body>
</html>