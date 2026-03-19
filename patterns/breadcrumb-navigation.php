<?php
/**
 * Title: Breadcrumb Navigation
 * Slug: potential/breadcrumb-navigation
 * Description: Breadcrumb trail for site navigation.
 * Categories: creatlach-utility
 * Keywords: breadcrumb, navigation, trail, hierarchy
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--16)","bottom":"var(--wp--preset--spacing--16)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}},"border":{"bottom":{"width":"1px","color":"#e8e8e8"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);border-bottom:1px solid #e8e8e8">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","columnGap":"var:preset|spacing|8"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
		<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="/" style="color:#A73C18;text-decoration:none;">Home</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
		<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">›</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
		<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)"><a href="/category" style="color:#A73C18;text-decoration:none;">Category Name</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
		<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">›</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
		<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">Current Page Title</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
