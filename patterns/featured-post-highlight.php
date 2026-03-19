<?php
/**
 * Title: Featured Post Highlight
 * Slug: potential/featured-post-highlight
 * Description: Large featured post above regular post grid.
 * Categories: creatlach-blog
 * Keywords: featured, post, highlight, blog
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--56)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Editor's Pick</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-heading-2-font-size">Featured Story</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":3,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--64)"}}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"wrap","alignItems":"stretch"}} -->
			<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--64)">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"layout":{"selfStretch":"fixed","flexSize":"55%"},"border":{"radius":{"topLeft":"8px","bottomLeft":"8px","topRight":"0","bottomRight":"0"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--56)","bottom":"var(--wp--preset--spacing--56)","left":"var(--wp--preset--spacing--56)","right":"var(--wp--preset--spacing--56)"},"layout":{"selfStretch":"fill"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--56);padding-bottom:var(--wp--preset--spacing--56);padding-left:var(--wp--preset--spacing--56);padding-right:var(--wp--preset--spacing--56)">

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","columnGap":"var:preset|spacing|16"},"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--24)">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"primary"} /-->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
						<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">·</p>
						<!-- /wp:paragraph -->
						<!-- wp:post-date {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"level":2,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"fontSize":"heading-3"} /-->

					<!-- wp:post-excerpt {"numberOfWords":40,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)"}},"textColor":"text"} /-->

					<!-- wp:read-more {"content":"Read Full Article →","style":{"typography":{"fontWeight":"700","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

	<!-- wp:separator {"style":{"color":{"background":"#e8e8e8"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--64)"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-background" style="background-color:#e8e8e8;margin-top:0;margin-bottom:var(--wp--preset--spacing--64)" />
	<!-- /wp:separator -->

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--48)"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--48)">
		<!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
		<h3 class="wp-block-heading has-heading-3-font-size">More Articles</h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-white-background-color has-background" style="border-radius:4px;padding:0">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"var(--wp--preset--spacing--24)","left":"0","right":"0"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--24);padding-left:0;padding-right:0">

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","columnGap":"var:preset|spacing|16"},"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--12)"}}}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--12)">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"primary"} /-->
						<!-- wp:post-date {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"fontSize":"heading-4"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
