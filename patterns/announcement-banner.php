<?php
/**
 * Title: Announcement Banner
 * Slug: potential/announcement-banner
 * Description: Dismissible top banner for announcements or promotions.
 * Categories: creatlach-hero
 * Keywords: banner, announcement, notification, top
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

	<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--24)"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"16.67%"} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%","layout":{"type":"constrained"}} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--white)"}}} -->
			<p class="has-text-align-center" style="color:var(--wp--preset--color--white);font-size:var(--wp--preset--font-size--paragraph-small);font-weight:500">&#127881; <strong>Special Offer:</strong> Get 20% off all plans this month. Use code <strong>LAUNCH20</strong> at checkout.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"16.67%","layout":{"type":"flex","justifyContent":"right","verticalAlignment":"center"}} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)","fontWeight":"600","textDecoration":"underline"},"color":{"text":"var(--wp--preset--color--white)"}}} -->
			<p style="color:var(--wp--preset--color--white);font-size:var(--wp--preset--font-size--paragraph-small);font-weight:600;text-decoration:underline"><a href="#" style="color:inherit">Learn More &rarr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
