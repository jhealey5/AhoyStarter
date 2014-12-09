<ul class="social-links">
	<?php if( $id = get_field('facebook_id', 'option') ): ?>
	<li class="facebook">
		<a href="http://facebook.com/<?php echo $id; ?>" title="Find us on Facebook"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-facebook"></i><?php else: ?>Find us on Facebook<?php endif; ?></a>
	</li>
	<?php endif; ?>
	<?php if( $id = get_field('twitter_id', 'option') ): ?>
		<li class="twitter">
			<a href="http://twitter.com/<?php echo $id; ?>" title="Find us on Twitter"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-twitter"></i><?php else: ?>Find us on Twitter<?php endif; ?></a>
		</li>
	<?php endif; ?>
	<?php if( $id = get_field('googleplus_id', 'option') ): ?>
		<li class="google">
			<a href="https://plus.google.com/u/0/<?php echo $id; ?>/posts" title="Find us on Google+"><?php if( wp_script_is( 'font-awesome', 'enqueued' ) ):?><i class="fa fa-google-plus"></i><?php else: ?>Find us on Google+<?php endif; ?></a>
		</li>
	<?php endif; ?>
	<?php
	//TODO Add other social outlets
	?>
</ul>