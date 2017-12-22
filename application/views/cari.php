<div class="container-fluid">
	  <div class="row">
		<div class="col-md-7">
		  <section class="content">
			<div class="track">Results of <?=$q;?></div>
			<div class="track-list">
			  
	<?php
	foreach ($cari->items as $pos)
	{
	?>
			  
			  <a href="/unduh/<?=$pos->id->videoId;?>/<?=url_title($pos->snippet->title);?>" class="track-list-item">
				<img src="http://ytimg.googleusercontent.com/vi/<?=$pos->id->videoId;?>/mqdefault.jpg" class="img-circle iimmgg"/>
				<div class="meta-post"><?=character_limiter($pos->snippet->title,30)?><br/><span class="text-muted">Uploaded by: <?=$pos->snippet->channelTitle;?></span></div>
			  </a>
			<?php
			}
			?>
			</div>
		  </section>
		</div>
		<div class="col-md-5">
		  <section class="side-bar">

			<div class="track">Wonderfull</div>
			<div class="track-list">



	<?php
	foreach ($json->items as $post)
	{
	?>
			  
			  <a href="/unduh/<?=$post->id->videoId;?>/<?=url_title($post->snippet->title);?>" class="track-list-item">
				<img src="http://ytimg.googleusercontent.com/vi/<?=$post->id->videoId;?>/mqdefault.jpg" class="img-circle iimmgg"/>
				<div class="meta-post"><?=character_limiter($post->snippet->title,30)?><br/><span class="text-muted">Uploaded by: <?=$post->snippet->channelTitle;?></span></div>
			  </a>
			<?php
			}
			?>
			</div>
			
		  </section>
		</div>
	  </div>
	</div>