<?php

//TODO Test this entire thing again

$url = curPageURL();
if( is_single() ){
	$title = single_post_title('', false);
} elseif( is_archive()){
	$title = post_type_archive_title('', false);
} else{
	$title = get_the_title();
}
?>

<ul class="social-share">
	<li>
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" title="Share on Facebook"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-facebook"></i><?php else: ?>Share on Facebook<?php endif; ?></a>
	</li>
	<li>
		<a href="https://twitter.com/home?status=<?php echo $url; ?> <?php echo $title; ?>" title="Share on Twitter"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-twitter"></i><?php else: ?>Share on Twitter<?php endif; ?></a>
	</li>
	<li>
		<a href="https://plus.google.com/share?url=<?php echo $url; ?>" title="Share on Google plus"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-google-plus"></i><?php else: ?>Share on google+<?php endif; ?></a>
	</li>
	<li>
		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=TI<?php echo $title; ?>&summary=&source=" title="Share on LinkedIn"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-linkedin"></i><?php else: ?>Share on LinkedIn<?php endif; ?></a>
	</li>
</ul>