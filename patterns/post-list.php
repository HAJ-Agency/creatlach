<?php
/**
 * Title: Post List
 * Slug: potential/post-list
 * Description: Traditional list view of blog posts.
 * Categories: creatlach-blog
 * Keywords: posts, list, blog, articles
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--56)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Latest News</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-heading-2-font-size">Recent Articles</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:separator {"style":{"color":{"background":"#e8e8e8"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--40)"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity has-background" style="background-color:#e8e8e8;margin-top:0;margin-bottom:var(--wp--preset--spacing--40)" />
			<!-- /wp:separator -->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var(--wp--preset--spacing--40)"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","columnGap":"var:preset|spacing|16"},"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">

					<!-- wp:post-date {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->

					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
					<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">·</p>
					<!-- /wp:paragraph -->

					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary"} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}},"fontSize":"heading-3"} /-->

				<!-- wp:post-excerpt {"numberOfWords":35,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)"}},"textColor":"text"} /-->

				<!-- wp:read-more {"content":"Read more →","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:separator {"style":{"color":{"background":"#e8e8e8"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--48)"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity has-background" style="background-color:#e8e8e8;margin-top:0;margin-bottom:var(--wp--preset--spacing--48)" />
		<!-- /wp:separator -->

		<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
