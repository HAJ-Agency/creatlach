<?php
/**
 * Title: Simple Footer
 * Slug: potential/footer-simple
 * Description: Single-row footer with copyright and links.
 * Categories: creatlach-footer
 * Keywords: footer, simple, copyright, links
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--32)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"text","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-text-background-color has-text-color has-background">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
		<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company Name. All rights reserved.</p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"textColor":"white","overlayMenu":"never","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-end"},"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}}} -->
			<!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Terms of Service","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Sitemap","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->
		<!-- /wp:navigation -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
