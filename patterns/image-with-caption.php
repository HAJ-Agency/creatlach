<?php
/**
 * Title: Image with Caption
 * Slug: potential/image-with-caption
 * Description: Full-width image with overlay or below caption.
 * Categories: creatlach-gallery
 * Keywords: image, caption, photo, media
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--72)","bottom":"var(--wp--preset--spacing--72)","left":"var(--wp--preset--spacing--0)","right":"var(--wp--preset--spacing--0)"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--72);padding-bottom:var(--wp--preset--spacing--72);padding-left:0;padding-right:0">

	<!-- wp:cover {"dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":560,"minHeightUnit":"px","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}}} -->
	<div class="wp-block-cover alignfull is-dark" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);min-height:560px">
		<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="A sweeping aerial view of rolling green hills at golden hour" src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1600&q=80" data-object-fit="cover"/>
		<div class="wp-block-cover__inner-container">

			<!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--16)"}}} -->
			<div class="wp-block-group">

				<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h2)","lineHeight":"1.2"},"color":{"text":"var(--wp--preset--color--white)"}}} -->
				<h2 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--white);font-size:var(--wp--preset--font-size--h2);line-height:1.2">The Landscape That Inspires Us</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)","lineHeight":"1.75","fontStyle":"italic"},"color":{"text":"var(--wp--preset--color--secondary-muted-1)"}}} -->
				<p class="has-text-align-center" style="color:var(--wp--preset--color--secondary-muted-1);font-size:var(--wp--preset--font-size--paragraph);line-height:1.75;font-style:italic">Golden hour over the Wicklow Mountains, Co. Wicklow, Ireland — captured by our creative team during a team retreat in autumn 2024.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"var(--wp--preset--spacing--0)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-bottom:0;padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)","fontStyle":"italic"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
		<p class="has-text-align-center" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph-small);font-style:italic">Photography by Jane Morrissey · Wicklow Mountains, Ireland · October 2024</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
