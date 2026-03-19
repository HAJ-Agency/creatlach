<?php
/**
 * Title: Product Grid
 * Slug: potential/product-grid
 * Description: Grid layout for products with images and pricing.
 * Categories: creatlach-commerce
 * Keywords: products, grid, woocommerce, shop
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--56)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Shop</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-heading-2-font-size">Our Products</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}},"fontSize":"paragraph","textColor":"text"} -->
		<p class="has-text-color has-paragraph-font-size" style="margin-top:var(--wp--preset--spacing--16)">Carefully crafted products designed with quality and purpose in mind. Browse our full collection below.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--40)","left":"var(--wp--preset--spacing--32)"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"4px","width":"1px","color":"#e8e8e8"},"spacing":{"padding":{"top":"0","bottom":"var(--wp--preset--spacing--32)","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-white-background-color has-background" style="border-radius:4px;border:1px solid #e8e8e8;padding-top:0;padding-bottom:var(--wp--preset--spacing--32);padding-left:0;padding-right:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}},"sizeSlug":"large","backgroundColor":"secondary-muted-1"} -->
				<figure class="wp-block-image size-large has-secondary-muted-1-background-color" style="border-top-left-radius:4px;border-top-right-radius:4px"><img src="" alt="Product Image" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"0","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--24)">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small);letter-spacing:0.06em;text-transform:uppercase">Handcrafted</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--8)","bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
					<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-top:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--8)">Artisan Ceramic Mug</h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-weight:700;font-size:1.25rem">€32.00</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--16)">
						<!-- wp:button {"backgroundColor":"primary","textColor":"white","width":100,"style":{"border":{"radius":"4px"}}} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Add to Cart</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"4px","width":"1px","color":"#e8e8e8"},"spacing":{"padding":{"top":"0","bottom":"var(--wp--preset--spacing--32)","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-white-background-color has-background" style="border-radius:4px;border:1px solid #e8e8e8;padding-top:0;padding-bottom:var(--wp--preset--spacing--32);padding-left:0;padding-right:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}},"sizeSlug":"large","backgroundColor":"primary-muted-1"} -->
				<figure class="wp-block-image size-large has-primary-muted-1-background-color" style="border-top-left-radius:4px;border-top-right-radius:4px"><img src="" alt="Product Image" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"0","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--24)">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small);letter-spacing:0.06em;text-transform:uppercase">Limited Edition</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--8)","bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
					<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-top:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--8)">Linen Tote Bag</h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-weight:700;font-size:1.25rem">€48.00</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--16)">
						<!-- wp:button {"backgroundColor":"primary","textColor":"white","width":100,"style":{"border":{"radius":"4px"}}} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Add to Cart</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"4px","width":"1px","color":"#e8e8e8"},"spacing":{"padding":{"top":"0","bottom":"var(--wp--preset--spacing--32)","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-white-background-color has-background" style="border-radius:4px;border:1px solid #e8e8e8;padding-top:0;padding-bottom:var(--wp--preset--spacing--32);padding-left:0;padding-right:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}},"sizeSlug":"large","backgroundColor":"secondary-muted-2"} -->
				<figure class="wp-block-image size-large has-secondary-muted-2-background-color" style="border-top-left-radius:4px;border-top-right-radius:4px"><img src="" alt="Product Image" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--24)","bottom":"0","left":"var(--wp--preset--spacing--24)","right":"var(--wp--preset--spacing--24)"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--24)">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-weight:600;font-size:var(--wp--preset--font-size--paragraph-small);letter-spacing:0.06em;text-transform:uppercase">Bestseller</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--8)","bottom":"var(--wp--preset--spacing--8)"}}},"textColor":"text","fontSize":"heading-4"} -->
					<h4 class="wp-block-heading has-text-color has-heading-4-font-size" style="font-weight:700;margin-top:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--8)">Woven Throw Blanket</h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-weight:700;font-size:1.25rem">€85.00</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--16)">
						<!-- wp:button {"backgroundColor":"primary","textColor":"white","width":100,"style":{"border":{"radius":"4px"}}} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Add to Cart</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--48)"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--48)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"width":"2px"},"color":{"text":"#1B1C1B","border":"#1B1C1B"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-width:2px;color:#1B1C1B;border-color:#1B1C1B">View All Products</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
