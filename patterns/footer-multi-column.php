<?php
/**
 * Title: Multi-Column Footer
 * Slug: potential/footer-multi-column
 * Description: Footer with multiple widget areas or link columns.
 * Categories: creatlach-footer
 * Keywords: footer, columns, links, multi-column
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--48)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"text","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-text-background-color has-text-color has-background">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--64)"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">

			<!-- wp:site-title {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#ffffff"}}} /-->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}},"textColor":"white","fontSize":"paragraph-small"} -->
			<p class="has-white-color has-text-color has-paragraph-small-font-size" style="margin-top:var(--wp--preset--spacing--16)">Building thoughtful digital experiences that connect people with the things that matter most. Quality, craft, and care in every detail.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">

			<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"fontSize":"paragraph-small"} -->
			<h5 class="wp-block-heading has-white-color has-text-color has-paragraph-small-font-size" style="margin-bottom:var(--wp--preset--spacing--24);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Quick Links</h5>
			<!-- /wp:heading -->

			<!-- wp:list {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"className":"footer-link-list"} -->
			<ul class="wp-block-list footer-link-list" style="font-size:var(--wp--preset--font-size--paragraph-small)">
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">About Us</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Our Services</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Portfolio</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Blog</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Contact</a></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">

			<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"fontSize":"paragraph-small"} -->
			<h5 class="wp-block-heading has-white-color has-text-color has-paragraph-small-font-size" style="margin-bottom:var(--wp--preset--spacing--24);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Resources</h5>
			<!-- /wp:heading -->

			<!-- wp:list {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"className":"footer-link-list"} -->
			<ul class="wp-block-list footer-link-list" style="font-size:var(--wp--preset--font-size--paragraph-small)">
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Documentation</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Case Studies</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">FAQs</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Support Centre</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="#" style="color:#ffffff;text-decoration:none;">Community</a></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">

			<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"fontSize":"paragraph-small"} -->
			<h5 class="wp-block-heading has-white-color has-text-color has-paragraph-small-font-size" style="margin-bottom:var(--wp--preset--spacing--24);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Contact</h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">123 Design Street<br>Creative District<br>Dublin, D01 AB12</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="mailto:hello@example.com" style="color:#A73C18;text-decoration:none;">hello@example.com</a><br><a href="tel:+35312345678" style="color:#ffffff;text-decoration:none;">+353 1 234 5678</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"color":{"background":"rgba(255,255,255,0.15)"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--48)","bottom":"var(--wp--preset--spacing--32)"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-background" style="background-color:rgba(255,255,255,0.15);margin-top:var(--wp--preset--spacing--48);margin-bottom:var(--wp--preset--spacing--32)" />
	<!-- /wp:separator -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
		<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company Name. All rights reserved.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","columnGap":"var:preset|spacing|24"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#ffffff;text-decoration:none;">Privacy Policy</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#ffffff;text-decoration:none;">Terms of Service</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#ffffff;text-decoration:none;">Cookies</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
