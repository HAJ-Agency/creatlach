<?php
/**
 * Title: Back to Top Footer
 * Slug: potential/footer-back-to-top
 * Description: Footer with scroll to top functionality.
 * Categories: creatlach-footer
 * Keywords: footer, back to top, scroll, navigation
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--32)","bottom":"var(--wp--preset--spacing--32)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"text","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-text-background-color has-text-color has-background">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","columnGap":"var:preset|spacing|32"}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company Name. All rights reserved.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#ffffff;text-decoration:none;">Privacy</a> &nbsp;·&nbsp; <a href="#" style="color:#ffffff;text-decoration:none;">Terms</a> &nbsp;·&nbsp; <a href="#" style="color:#ffffff;text-decoration:none;">Sitemap</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)","fontWeight":"600"}}} -->
		<p style="font-size:var(--wp--preset--font-size--paragraph-small);font-weight:600"><a href="#top" style="color:#A73C18;text-decoration:none;">&#8593; Back to Top</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
