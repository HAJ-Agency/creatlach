<?php
/**
 * Title: Hero with Search Bar
 * Slug: potential/hero-search
 * Description: Hero section with prominent search functionality.
 * Categories: creatlach-hero
 * Keywords: hero, search, header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--104)","bottom":"var(--wp--preset--spacing--104)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--104);padding-bottom:var(--wp--preset--spacing--104);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--24)"}}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
		<p class="has-text-align-center" style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--paragraph-small);font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Find What You Need</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h1)","lineHeight":"1.1"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--h1);line-height:1.1">Discover Resources, Insights, and Answers</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-large)","lineHeight":"1.7"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
		<p class="has-text-align-center" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph-large);line-height:1.7">Search our library of articles, guides, and resources to find exactly what you are looking for.</p>
		<!-- /wp:paragraph -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search for articles, topics, or keywords…","widthUnit":"%","width":100,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"4px"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}},"backgroundColor":"white","textColor":"text","className":"hero-search__input"} -->
		<div class="wp-block-search__button-inside wp-block-search__icon-button wp-block-search hero-search__input" style="border-radius:4px;margin-top:var(--wp--preset--spacing--16)">
			<label class="wp-block-search__label" for="wp-block-search__input-1">Search</label>
			<div class="wp-block-search__inside-wrapper has-white-background-color has-background" style="border-radius:4px">
				<input class="wp-block-search__input has-text-color" id="wp-block-search__input-1" placeholder="Search for articles, topics, or keywords…" value="" type="search" name="s" required/>
				<button aria-label="Search" class="wp-block-search__button has-text-color wp-element-button" type="submit">
					<svg class="search-icon" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg>
				</button>
			</div>
		</div>
		<!-- /wp:search -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--secondary-muted-5)"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--8)"}}}} -->
		<p class="has-text-align-center" style="color:var(--wp--preset--color--secondary-muted-5);font-size:var(--wp--preset--font-size--paragraph-small);margin-top:var(--wp--preset--spacing--8)">Popular: <a href="#">Getting Started</a> &middot; <a href="#">Best Practices</a> &middot; <a href="#">Case Studies</a> &middot; <a href="#">Tutorials</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
