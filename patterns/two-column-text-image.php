<?php
/**
 * Title: Two Column Text and Image
 * Slug: potential/two-column-text-image
 * Description: Image alongside text content. Image always on top when stacked.
 * Categories: creatlach-content
 * Keywords: two column, image, text, feature
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--104)","bottom":"var(--wp--preset--spacing--104)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--104);padding-bottom:var(--wp--preset--spacing--104);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

	<!-- wp:columns {"isStackedOnMobile":true,"align":"wide","style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--48)","left":"var(--wp--preset--spacing--80)"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--0)"}}}} -->
		<div class="wp-block-column" style="flex-basis:50%;padding-top:0">

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"},"color":{"duotone":"unset"}},"className":"two-col-image"} -->
			<figure class="wp-block-image size-large two-col-image" style="border-radius:8px"><img src="" alt="Feature image — replace with your own" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--16)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--24)"}}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
				<p style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--paragraph-small);font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Why It Matters</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h2)","lineHeight":"1.2"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
				<h2 class="wp-block-heading" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--h2);line-height:1.2">Designed to Perform and Delight at Every Touchpoint</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)","lineHeight":"1.75"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
				<p style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph);line-height:1.75">We combine deep expertise with a genuine passion for craft. Whether it is a product launch, a rebrand, or an entirely new digital experience, we bring clarity, creativity, and rigour to everything we touch.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)","lineHeight":"1.75"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
				<p style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph);line-height:1.75">Our approach is rooted in real-world outcomes. We do not just make things look good — we ensure they work hard for your business and create genuine value for your customers.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)","fontWeight":"600"},"color":{"text":"var(--wp--preset--color--primary)"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--8)"}}}} -->
				<p style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--paragraph);font-weight:600;margin-top:var(--wp--preset--spacing--8)"><a href="#" style="color:inherit;text-decoration:none">Explore our services &rarr;</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
