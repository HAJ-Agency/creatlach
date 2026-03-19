<?php
/**
 * Title: Post Grid
 * Slug: potential/post-grid
 * Description: Grid layout for blog posts with featured images.
 * Categories: creatlach-blog
 * Keywords: posts, grid, blog, articles
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"flex-end"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--56)">

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|8"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
			<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Latest Articles</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"heading-2"} -->
			<h2 class="wp-block-heading has-heading-2-font-size">From the Blog</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"width":"2px"},"color":{"text":"#1B1C1B","border":"#1B1C1B"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-width:2px;color:#1B1C1B;border-color:#1B1C1B">View All Posts</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"},"className":"post-card"} -->
			<div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:4px;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--24)">

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","columnGap":"var:preset|spacing|16"},"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--16)">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"primary"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}},"fontSize":"heading-4"} /-->

					<!-- wp:post-excerpt {"numberOfWords":20,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->

					<!-- wp:post-date {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}},"textColor":"text","format":"d M Y"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
