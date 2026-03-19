<?php
/**
 * Title: Category Grid
 * Slug: potential/category-grid
 * Description: Display of post categories with visual blocks.
 * Categories: creatlach-blog
 * Keywords: categories, grid, blog, taxonomy
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)")}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--56)">
		<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
		<p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Explore Topics</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-text-align-center has-heading-2-font-size">Browse by Category</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textAlign":"center","style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}},"fontSize":"paragraph","textColor":"text"} -->
		<p class="has-text-align-center has-text-color has-paragraph-font-size" style="margin-top:var(--wp--preset--spacing--16)">Discover articles, guides, and insights across a range of topics curated for curious minds.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--24)","left":"var(--wp--preset--spacing--24)"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--48)","bottom":"var(--wp--preset--spacing--48)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"primary-muted-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group has-primary-muted-1-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}}} -->
				<p style="font-size:2.5rem;margin-bottom:var(--wp--preset--spacing--16)">✏️</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
				<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--8)">Design</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
				<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">Principles, trends, and techniques in modern design.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#A73C18;text-decoration:none;">Explore Design →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--48)","bottom":"var(--wp--preset--spacing--48)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"secondary-muted-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group has-secondary-muted-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}}} -->
				<p style="font-size:2.5rem;margin-bottom:var(--wp--preset--spacing--16)">💡</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
				<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--8)">Technology</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
				<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">Tools, platforms, and the future of digital work.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#A73C18;text-decoration:none;">Explore Technology →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--48)","bottom":"var(--wp--preset--spacing--48)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"primary-muted-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group has-primary-muted-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--16)"}}}} -->
				<p style="font-size:2.5rem;margin-bottom:var(--wp--preset--spacing--16)">🚀</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
				<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--8)">Business</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} -->
				<p class="has-text-color" style="font-size:var(--wp--preset--font-size--paragraph-small)">Strategy, growth, and insights for ambitious teams.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#A73C18;text-decoration:none;">Explore Business →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--24)","left":"var(--wp--preset--spacing--24)"},"margin":{"top":"var(--wp--preset--spacing--24)"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--24)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--40)","bottom":"var(--wp--preset--spacing--40)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"secondary-muted-1","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-secondary-muted-1-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--12)"}}}} -->
				<p style="font-size:2rem;margin-bottom:var(--wp--preset--spacing--12)">🌿</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
				<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--8)">Lifestyle</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#A73C18;text-decoration:none;">Explore →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--40)","bottom":"var(--wp--preset--spacing--40)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"primary-muted-1","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-primary-muted-1-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--12)"}}}} -->
				<p style="font-size:2rem;margin-bottom:var(--wp--preset--spacing--12)">📖</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
				<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--8)">Resources</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#A73C18;text-decoration:none;">Explore →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--40)","bottom":"var(--wp--preset--spacing--40)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"secondary-muted-3","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-secondary-muted-3-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--12)"}}}} -->
				<p style="font-size:2rem;margin-bottom:var(--wp--preset--spacing--12)">🎨</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
				<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-bottom:var(--wp--preset--spacing--8)">Creativity</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small)"><a href="#" style="color:#A73C18;text-decoration:none;">Explore →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
