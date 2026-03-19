<?php
/**
 * Title: Cookie Notice
 * Slug: potential/cookie-notice
 * Description: GDPR-compliant cookie consent banner.
 * Categories: creatlach-utility
 * Keywords: cookie, gdpr, consent, notice, privacy
 */
?>
<!-- wp:group {"align":"full","style":{"position":{"type":"sticky","top":"auto"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"var(--wp--preset--spacing--24)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}},"color":{"background":"#1B1C1B"},"border":{"top":{"width":"3px","color":"#A73C18"}}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#1B1C1B;border-top:3px solid #A73C18;padding-top:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center","columnGap":"var:preset|spacing|48","rowGap":"var:preset|spacing|24"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"layout":{"selfStretch":"fill"}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|8"}} -->
		<div class="wp-block-group" style="flex:1;min-width:280px">

			<!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"700"}},"textColor":"white","fontSize":"paragraph"} -->
			<h5 class="wp-block-heading has-white-color has-text-color has-paragraph-font-size" style="font-weight:700">🍪 We use cookies</h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">We use cookies to enhance your browsing experience, analyse site traffic, and personalise content. By clicking "Accept All", you consent to our use of cookies. You can manage your preferences at any time. <a href="#" style="color:#A73C18;text-decoration:underline;">Read our Privacy Policy</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","columnGap":"var:preset|spacing|16","alignItems":"center"}} -->
		<div class="wp-block-group">

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"border":{"radius":"4px","width":"1px","color":"rgba(255,255,255,0.4)"},"color":{"text":"#ffffff","background":"transparent"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--8)","bottom":"var(--wp--preset--spacing--8)","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:4px;border:1px solid rgba(255,255,255,0.4);color:#ffffff;background:transparent;padding:var(--wp--preset--spacing--8) var(--wp--preset--spacing--24)">Manage Preferences</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--8)","bottom":"var(--wp--preset--spacing--8)","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px;padding:var(--wp--preset--spacing--8) var(--wp--preset--spacing--24)">Accept All</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
