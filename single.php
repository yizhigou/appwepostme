<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignright single"><?php previous_post_link('%link') ?></div>
			<div class="alignleft single"><?php next_post_link('%link') ?></div>
		</div><div id="clearnavigation">&nbsp;</div>

		<div class="post" id="post-<?php the_ID(); ?>">
				<div class="postTitle"><div><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 	<small>| <?php the_time('F jS, Y') ?> by <?php the_author() ?> </small> <small>| <wb:share-button appkey="3496849073" ></wb:share-button><g:plusone size="small"></g:plusone><a href="https://twitter.com/share" class="twitter-share-button" data-lang="zh-cn">发推</a></small></div></div>

			<div class="entry">

				<?php the_content('<p class="serif">下面还有 &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<p class="postmetadata alt">
					<small>
						Posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> in <?php the_category(', ') ?> | 
						<?php comments_rss_link('rss feed for comments'); ?>
| 
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<a href="#respond">Leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> 

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>

					</small>
                                  </p>
<div id="article-author">
<div id="author-image">
<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); }?>
</div>
<div id="author-text">
 <strong>我是 <?php the_author_link(); ?></strong>
 <p><?php the_author_description();?></p>
</div>
</div>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>