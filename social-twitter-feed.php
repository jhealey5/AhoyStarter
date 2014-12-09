<?php
require_once (get_template_directory().'/inc/codebird/codebird.php');
\Codebird\Codebird::setConsumerKey(get_field('twitter_consumer_key', 'option'), get_field('twitter_consumer_secret', 'option')); // static, see 'Using multiple Codebird instances'

$cb = \Codebird\Codebird::getInstance();
$cb->setToken(get_field('twitter_access_token', 'option'), get_field('twitter_access_secret', 'option'));

$replys = (array) $cb->statuses_userTimeline(array('count'=>1));
?>
<div class="tweet-container">
	<?php foreach($replys as $reply): ?>

		<?php if($reply->id ): ?>
			<div class="tweet-single">
				<?php //var_dump( $reply ); ?>
				<?php
				$t_content = $reply->text;
				$t_content = preg_replace("/(https{0,1}:\/\/([\w\-\.\/#?&=]*))/", "<a href=\"$1\" target=\"_blank\">$2</a>", $t_content);
				$t_content = preg_replace("/@([a-z_0-9]+)/i", "<a href=\"http://twitter.com/$1\" target=\"_blank\">$0</a>", $t_content);
				$t_content = preg_replace("/#([a-z_0-9]+)/i", "<a href=\"http://twitter.com/search/$1\" target=\"_blank\">$0</a>", $t_content);
				?>
				<?php //var_dump($reply->user); ?>
				<a class="author" href="http://twitter.com/<?php echo $reply->user->screen_name; ?>" target="_blank">@<?php echo $reply->user->name; ?></a>
				<p class="tweet"><?php echo $t_content; ?></p>
				<div class="tweet-controls">
					<p class="post"><?php echo date_timeago( $reply->created_at ); ?></p>
					<a class="replyIcon" href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $reply->id; ?>" target="_blank">Reply</a>
					<a class="retweetIcon" href="https://twitter.com/intent/retweet?tweet_id=<?php echo $reply->id;  ?>" target="_blank">Retweet</a>
					<a class="faveIcon" href="https://twitter.com/intent/favorite?tweet_id=<?php echo $reply->id; ?>" target="_blank">Favourite</a>
				</div>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>