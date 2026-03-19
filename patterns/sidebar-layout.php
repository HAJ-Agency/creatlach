<?php
/**
 * Title: Sidebar Layout
 * Slug: potential/sidebar-layout
 * Description: Common sidebar with widgets, recent posts, categories.
 * Categories: creatlach-utility
 * Keywords: sidebar, widgets, layout, aside
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--64)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--64)"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"68%"} -->
		<div class="wp-block-column" style="flex-basis:68%">

			<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">

			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|48"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--32)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}},"border":{"radius":"4px","width":"1px","color":"#e8e8e8"}}} -->
				<div class="wp-block-group" style="border:1px solid #e8e8e8;border-radius:4px;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

					<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"textColor":"text","fontSize":"paragraph-small"} -->
					<h5 class="wp-block-heading has-text-color has-paragraph-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--24)">Search</h5>
					<!-- /wp:heading -->

					<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search articles…","buttonText":"Go","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"4px"}}} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--32)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}},"border":{"radius":"4px","width":"1px","color":"#e8e8e8"}}} -->
				<div class="wp-block-group" style="border:1px solid #e8e8e8;border-radius:4px;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

					<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"textColor":"text","fontSize":"paragraph-small"} -->
					<h5 class="wp-block-heading has-text-color has-paragraph-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--24)">Recent Posts</h5>
					<!-- /wp:heading -->

					<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}}} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--32)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}},"border":{"radius":"4px","width":"1px","color":"#e8e8e8"}}} -->
				<div class="wp-block-group" style="border:1px solid #e8e8e8;border-radius:4px;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

					<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"textColor":"text","fontSize":"paragraph-small"} -->
					<h5 class="wp-block-heading has-text-color has-paragraph-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--24)">Categories</h5>
					<!-- /wp:heading -->

					<!-- wp:categories {"showPostCounts":true,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}}} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--32)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}},"border":{"radius":"4px"},"color":{"background":"#F4EADB"}}} -->
				<div class="wp-block-group has-background" style="background-color:#F4EADB;border-radius:4px;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

					<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"textColor":"text","fontSize":"paragraph-small"} -->
					<h5 class="wp-block-heading has-text-color has-paragraph-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--24)">Tags</h5>
					<!-- /wp:heading -->

					<!-- wp:tag-cloud {"numberOfTags":20,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
