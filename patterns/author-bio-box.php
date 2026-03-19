<?php
/**
 * Title: Author Bio Box
 * Slug: potential/author-bio-box
 * Description: Author information and social links.
 * Categories: creatlach-blog
 * Keywords: author, bio, profile, about
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--64)","bottom":"var(--wp--preset--spacing--64)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--48)","bottom":"var(--wp--preset--spacing--48)","left":"var(--wp--preset--spacing--48)","right":"var(--wp--preset--spacing--48)"}},"color":{"background":"#EDD8D1"}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"flex-start","columnGap":"var:preset|spacing|40"}} -->
	<div class="wp-block-group has-background" style="border-radius:8px;background-color:#EDD8D1;padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48);padding-left:var(--wp--preset--spacing--48);padding-right:var(--wp--preset--spacing--48)">

		<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"96px"}},"layout":{"type":"flex","orientation":"vertical","alignItems":"center"}} -->
		<div class="wp-block-group" style="flex-basis:96px;flex-shrink:0">
			<!-- wp:post-author-biography {"avatarSize":96,"showAvatar":true,"showBio":false,"showName":false,"style":{"border":{"radius":"50%"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"layout":{"selfStretch":"fill"}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|16"}} -->
		<div class="wp-block-group" style="flex:1;min-width:200px">

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
			<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Written by</p>
			<!-- /wp:paragraph -->

			<!-- wp:post-author {"showAvatar":false,"showBio":false,"style":{"typography":{"fontWeight":"700","fontSize":"var(--wp--preset--font-size--heading-4)"}},"textColor":"text"} /-->

			<!-- wp:post-author-biography {"showAvatar":false,"showName":false,"showBio":true,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)"}},"textColor":"text"} /-->

			<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#A73C18","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--16)"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
