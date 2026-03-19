<?php
/**
 * Title: Split CTA
 * Slug: potential/cta-split
 * Description: Two-column CTA with image and text/button.
 * Categories: creatlach-cta
 * Keywords: cta, split, two column, image
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--0)","bottom":"var(--wp--preset--spacing--0)","left":"var(--wp--preset--spacing--0)","right":"var(--wp--preset--spacing--0)"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">

	<!-- wp:columns {"isStackedOnMobile":true,"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var(--wp--preset--spacing--0)","bottom":"var(--wp--preset--spacing--0)","left":"var(--wp--preset--spacing--0)","right":"var(--wp--preset--spacing--0)"}}}} -->
	<div class="wp-block-columns alignfull is-layout-flex" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">

		<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--0)","bottom":"var(--wp--preset--spacing--0)","left":"var(--wp--preset--spacing--0)","right":"var(--wp--preset--spacing--0)"}}}} -->
		<div class="wp-block-column" style="flex-basis:50%;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"color":{"duotone":"unset"}}} -->
			<figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" alt="Team collaborating around a table in a modern office" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--72)","bottom":"var(--wp--preset--spacing--72)","left":"var(--wp--preset--spacing--64)","right":"var(--wp--preset--spacing--64)"}}}} -->
		<div class="wp-block-column" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--72);padding-bottom:var(--wp--preset--spacing--72);padding-left:var(--wp--preset--spacing--64);padding-right:var(--wp--preset--spacing--64)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--24)"}}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
				<p style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--paragraph-small);font-style:normal;font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Let's Work Together</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h2)","lineHeight":"1.15"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
				<h2 class="wp-block-heading" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--h2);line-height:1.15">Partner With a Team That Delivers Results</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)","lineHeight":"1.75"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
				<p style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph);line-height:1.75">We've helped businesses of all sizes achieve their goals through strategic thinking, creative execution, and a genuine commitment to success. Our collaborative approach means you're always informed and in control.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"typography":{"fontWeight":"700"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-white-color has-text-color has-background wp-element-button" style="border-radius:4px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);font-weight:700">Start Your Project</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
