<?php
/**
 * Title: Pagination
 * Slug: potential/pagination
 * Description: Numbered pagination with previous and next links.
 * Categories: creatlach-blog
 * Keywords: pagination, pages, navigation, numbers
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--64)","bottom":"var(--wp--preset--spacing--64)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:query {"queryId":6,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-title {"isLink":true,"level":4} /-->
			<!-- wp:post-date /-->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--56)","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--56)">

			<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":true,"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","columnGap":"var:preset|spacing|8"}} -->
				<!-- wp:query-pagination-previous {"label":"← Previous"} /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next {"label":"Next →"} /-->
			<!-- /wp:query-pagination -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
