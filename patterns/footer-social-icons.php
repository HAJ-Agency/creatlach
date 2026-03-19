<?php
/**
 * Title: Footer with Social Icons
 * Slug: potential/footer-social-icons
 * Description: Footer prominently featuring social media links.
 * Categories: creatlach-footer
 * Keywords: footer, social, icons, social media
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--64)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"text","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-text-background-color has-text-color has-background">

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"},"style":{"spacing":{"rowGap":"var(--wp--preset--spacing--32)"}}} -->
	<div class="wp-block-group">

		<!-- wp:site-logo {"width":120,"shouldSyncIcon":false,"style":{"color":{"text":"#ffffff"}}} /-->

		<!-- wp:paragraph {"textAlign":"center","style":{"spacing":{"margin":{"top":"0"}}},"textColor":"white","fontSize":"paragraph"} -->
		<p class="has-text-align-center has-white-color has-text-color has-paragraph-font-size" style="margin-top:0">Creating meaningful connections through thoughtful design and technology.</p>
		<!-- /wp:paragraph -->

		<!-- wp:separator {"style":{"color":{"background":"rgba(255,255,255,0.15)"},"layout":{"selfStretch":"fill"}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity has-background" style="background-color:rgba(255,255,255,0.15);width:80px" />
		<!-- /wp:separator -->

		<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#A73C18","size":"has-large-icon-size","style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--16)"}}}} -->
		<ul class="wp-block-social-links has-large-icon-size has-icon-color has-icon-background-color">
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:navigation {"textColor":"white","overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"},"spacing":{"blockGap":"var(--wp--preset--spacing--32)"}}} -->
			<!-- wp:navigation-link {"label":"Home","url":"#"} /-->
			<!-- wp:navigation-link {"label":"About","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Services","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->
		<!-- /wp:navigation -->

		<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"white"} -->
		<p class="has-text-align-center has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company Name. All rights reserved. &nbsp;·&nbsp; <a href="#" style="color:#A73C18;text-decoration:none;">Privacy Policy</a> &nbsp;·&nbsp; <a href="#" style="color:#A73C18;text-decoration:none;">Terms</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
