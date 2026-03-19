<?php
/**
 * Title: Split Hero
 * Slug: potential/hero-split
 * Description: Two-column hero with image on one side and text/CTA on the other.
 * Categories: creatlach-hero
 * Keywords: hero, split, two-column, image
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--0)","bottom":"var(--wp--preset--spacing--0)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--0)"},"padding":{"top":"var(--wp--preset--spacing--0)","bottom":"var(--wp--preset--spacing--0)"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--48)","right":"var(--wp--preset--spacing--64)"}},"color":{"background":"var(--wp--preset--color--white)"}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--48);padding-right:var(--wp--preset--spacing--64);width:50%;background-color:var(--wp--preset--color--white)">

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--8)","margin":{"bottom":"var(--wp--preset--spacing--16)"}}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
				<p style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--paragraph-small);font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Innovative Solutions</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h1)","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}},"color":{"text":"var(--wp--preset--color--text)"}}} -->
			<h1 class="wp-block-heading" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--h1);line-height:1.1;margin-bottom:var(--wp--preset--spacing--24)">We Build Remarkable Digital Experiences</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-large)","lineHeight":"1.7"},"color":{"text":"var(--wp--preset--color--text)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--40)"}}}} -->
			<p style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph-large);line-height:1.7;margin-bottom:var(--wp--preset--spacing--40)">From strategy to execution, we partner with forward-thinking organisations to craft digital products that are as beautiful as they are functional. Your vision, expertly realised.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--16)"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var(--wp--preset--color--primary)","text":"var(--wp--preset--color--white)"},"border":{"radius":"4px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--white);border-radius:4px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);font-weight:600">Start a Project</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var(--wp--preset--color--primary)"},"border":{"color":"var(--wp--preset--color--primary)","width":"2px","radius":"4px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:var(--wp--preset--color--primary);border-width:2px;border-color:var(--wp--preset--color--primary);border-radius:4px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);font-weight:600">View Our Work</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","style":{"color":{"background":"var(--wp--preset--color--secondary-muted-1)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--0)","bottom":"var(--wp--preset--spacing--0)"}}}} -->
		<div class="wp-block-column" style="background-color:var(--wp--preset--color--secondary-muted-1);padding-top:0;padding-bottom:0;width:50%">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"},"layout":{"selfStretch":"fill","flexSize":null}},"className":"hero-split__image"} -->
			<figure class="wp-block-image size-full hero-split__image"><img src="" alt="Hero image — replace with your own" style="border-radius:0px"/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
