<?php
/**
 * Title: 404 Error Page Content
 * Slug: potential/404-page
 * Description: Custom 404 page with navigation options.
 * Categories: creatlach-utility
 * Keywords: 404, error, not found, page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--104)","bottom":"var(--wp--preset--spacing--104)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}},"minHeight":"70vh"},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--104);padding-bottom:var(--wp--preset--spacing--104);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);min-height:70vh">

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","alignItems":"center","rowGap":"var:preset|spacing|0"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800","fontSize":"8rem","lineHeight":"1"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--24)"}}},"textColor":"primary"} -->
		<h1 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-weight:800;font-size:8rem;line-height:1;margin-bottom:var(--wp--preset--spacing--24)">404</h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--24)"}}},"textColor":"text","fontSize":"heading-3"} -->
		<h2 class="wp-block-heading has-text-align-center has-text-color has-heading-3-font-size" style="font-weight:700;margin-top:0;margin-bottom:var(--wp--preset--spacing--24)">Oops! Page Not Found</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--48)"}}},"textColor":"text","fontSize":"paragraph-large"} -->
		<p class="has-text-align-center has-text-color has-paragraph-large-font-size" style="margin-bottom:var(--wp--preset--spacing--48)">The page you're looking for seems to have wandered off. It may have been moved, deleted, or perhaps never existed. Let's get you back on track.</p>
		<!-- /wp:paragraph -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search for something…","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"4px"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--48)"}}},"width":100,"widthUnit":"%"} /-->

		<!-- wp:group {"layout":{"type":"flex","justifyContent":"center","columnGap":"var:preset|spacing|24","flexWrap":"wrap"},"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--64)"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--64)">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"4px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="/" style="border-radius:4px">← Back to Home</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px","width":"2px"},"color":{"text":"#1B1C1B","border":"#1B1C1B"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" href="/contact" style="border-radius:4px;border-width:2px;color:#1B1C1B;border-color:#1B1C1B">Contact Support</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"style":{"color":{"background":"#e8e8e8"},"spacing":{"margin":{"top":"0","bottom":"var(--wp--preset--spacing--40)"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity has-background" style="background-color:#e8e8e8;margin-top:0;margin-bottom:var(--wp--preset--spacing--40)" />
		<!-- /wp:separator -->

		<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"text","fontSize":"paragraph-small"} -->
		<h5 class="wp-block-heading has-text-align-center has-text-color has-paragraph-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Popular Pages</h5>
		<!-- /wp:heading -->

		<!-- wp:list {"textAlign":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--24)"}}}} -->
		<ul class="wp-block-list has-text-align-center" style="font-size:var(--wp--preset--font-size--paragraph);margin-top:var(--wp--preset--spacing--24)">
			<!-- wp:list-item --><li><a href="/" style="color:#A73C18;text-decoration:none;">Home</a></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><a href="/about" style="color:#A73C18;text-decoration:none;">About Us</a></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><a href="/services" style="color:#A73C18;text-decoration:none;">Our Services</a></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><a href="/blog" style="color:#A73C18;text-decoration:none;">Blog</a></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><a href="/contact" style="color:#A73C18;text-decoration:none;">Contact</a></li><!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
