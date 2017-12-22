<div class="container-fluid">
	  <div class="row">
		<div class="col-md-7">
			<?php
			
		if($json){
		foreach ($json->items as $item)
		{
			$rin = str_replace('T',' ',$item->snippet->publishedAt);
			$datePosted = str_replace('.000Z','',$rin);
			
			$wektu = str_replace('PT','',$item->contentDetails->duration);
			$wektu = str_replace('H','jam :',$wektu);
			$wektu = str_replace('M','mnt :',$wektu);
			$wektu = str_replace('S','dtk',$wektu);
	?>
		  <section class="content">
			<div class="track"><?=$item->snippet->title;?> [<?=$wektu;?>]</div>
			<div class="track-single">
			  <div class="post-meta small text-muted">by: <?=$item->snippet->channelTitle;?> | <?=$datePosted;?> | <?=$item->statistics->viewCount;?> Views</div>
			  <article>
				<img class="img-responsive" src="https://i.imgur.com/em2GN2y.jpg"/>
				  <div style="word-wrap:break-word" class="donlod">
					<b>Description</b>
					<?=nl2br($item->snippet->description);?>
				  </div>
				  <div class="donlod">
					<b>Download</b>
					
					<?php
					foreach($html->find('a') as $a)
					{
						?>
							
					<a rel="nofollow" style="display:block" href="<?=$a->href;?>"><?=str_replace('s','s ',$a->plaintext);?></a>
					
					<?php
					}
					?>
				  </div>
				<b>Tags:</b>
 <?php
 if(isset($item->snippet->tags)){
$count = count($item->snippet->tags);
for($i=0;$i<$count;$i++){
		echo $item->snippet->tags[$i].', ';
		if($i==3) break;
  } } else { echo "Download music"; } ?>
				  <div class="alert alert-warning">
					<span class="glyphicon glyphicon-warning-sign"></span> 
					<b>Disclaimer:</b><br/>
					All images, musics and videos copyright are belong to their respective owners. 
					We do not host the files in our server.
					This content may be protected by copyright law or other laws regarding intellectual property of the United States or other countries. 
					Downloading music/video on this site is just for review purpose. 
				  </div>
			  </article>
			</div>
		  </section>
		<?php
		}
	}
?>
		</div>
		
		
		<div class="col-md-5">
		  <section class="side-bar">

			<div class="track">Related</div>
			<div class="track-list">
		<?php
			if($related){
				foreach($related->items as $rel)
				{
		?>
			  <a href="/unduh/<?=$rel->id->videoId;?>/<?=url_title($rel->snippet->title);?>" class="track-list-item">
				<img src="http://ytimg.googleusercontent.com/vi/<?=$rel->id->videoId;?>/1.jpg" class="img-circle iimmgg"/>
				<div class="meta-post"><?=character_limiter($rel->snippet->title,30);?><br/><span class="text-muted">By: <?=$rel->snippet->channelTitle;?> </span></div>
			  </a>
			 <?php
			}
		}
		?>
			</div>
			
		  </section>
		</div>
	  </div>
	</div>