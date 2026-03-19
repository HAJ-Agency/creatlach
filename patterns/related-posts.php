<?php
/**
 * Title: Related Posts
 * Slug: potential/related-posts
 * Description: Grid of related articles at end of posts.
 * Categories: creatlach-blog
 * Keywords: related, posts, articles, more
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--64)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--48)"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--48)">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"textColor":"text","fontSize":"heading-3"} -->
		<h3 class="wp-block-heading has-text-color has-heading-3-font-size" style="font-weight:700">You Might Also Like</h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":5,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-white-background-color has-background" style="border-radius:4px;padding:0">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"var(--wp--preset--spacing--24)","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--24)">

					<!-- wp:post-date {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->

					<!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--8)","bottom":"0"}}},"textColor":"text","fontSize":"heading-4"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
