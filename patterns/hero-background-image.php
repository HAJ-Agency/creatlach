<?php
/**
 * Title: Hero with Background Image
 * Slug: potential/hero-background-image
 * Description: Large hero section with background image, heading, subheading, and CTA button.
 * Categories: creatlach-hero
 * Keywords: hero, banner, header, image, cta
 */
?>
<!-- wp:cover {"overlayColor":"black","isUserOverlayColor":true,"minHeight":85,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);min-height:85vh">
	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--24)"}}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--primary-muted-1)"}}} -->
			<p class="has-text-align-center" style="color:var(--wp--preset--color--primary-muted-1);font-size:var(--wp--preset--font-size--paragraph-small);font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Welcome to Our World</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h1)","lineHeight":"1.1"},"color":{"text":"var(--wp--preset--color--white)"}}} -->
			<h1 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--white);font-size:var(--wp--preset--font-size--h1);line-height:1.1">Crafting Experiences That Inspire and Endure</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-large)","lineHeight":"1.7"},"color":{"text":"var(--wp--preset--color--secondary-muted-1)"}}} -->
			<p class="has-text-align-center" style="color:var(--wp--preset--color--secondary-muted-1);font-size:var(--wp--preset--font-size--paragraph-large);line-height:1.7">We build thoughtful digital solutions that connect brands with their audiences in meaningful, lasting ways. Let us help you make your mark.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--16)","margin":{"top":"var(--wp--preset--spacing--16)"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"typography":{"fontWeight":"600"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-primary-color has-text-color has-background wp-element-button" style="border-radius:4px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);font-weight:600">Get Started Today</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var(--wp--preset--color--white)"},"border":{"color":"var(--wp--preset--color--white)","width":"2px","radius":"4px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-width:2px;border-color:var(--wp--preset--color--white);border-radius:4px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);font-weight:600">Learn More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->
