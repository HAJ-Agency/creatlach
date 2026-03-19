<?php
/**
 * Title: Product Comparison
 * Slug: potential/product-comparison
 * Description: Side-by-side product comparison.
 * Categories: creatlach-commerce
 * Keywords: product, comparison, compare, features
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--56)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
		<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Compare Plans</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-heading-2-font-size">Choose the Right Plan</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--16)"}}},"fontSize":"paragraph","textColor":"text"} -->
		<p class="has-text-color has-paragraph-font-size" style="margin-top:var(--wp--preset--spacing--16)">Compare our plans side by side to find the option that suits your needs and budget.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:table {"hasFixedLayout":true,"style":{"border":{"width":"1px","color":"#e8e8e8","radius":"4px"}},"className":"product-comparison-table"} -->
	<figure class="wp-block-table product-comparison-table" style="border:1px solid #e8e8e8;border-radius:4px">
		<table class="has-fixed-layout">
			<thead>
				<tr>
					<th style="background-color:#A73C18;color:#ffffff;padding:16px 24px;font-weight:700;text-align:left;">Feature</th>
					<th style="background-color:#A73C18;color:#ffffff;padding:16px 24px;font-weight:700;text-align:center;">Basic</th>
					<th style="background-color:#A73C18;color:#ffffff;padding:16px 24px;font-weight:700;text-align:center;">Pro</th>
					<th style="background-color:#A73C18;color:#ffffff;padding:16px 24px;font-weight:700;text-align:center;">Enterprise</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;font-weight:600;">Monthly Price</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;">€9/mo</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;background-color:#F4EADB;">€29/mo</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;">€99/mo</td>
				</tr>
				<tr>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;font-weight:600;">Users</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;">1</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;background-color:#F4EADB;">5</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;">Unlimited</td>
				</tr>
				<tr>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;font-weight:600;">Storage</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;">5 GB</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;background-color:#F4EADB;">50 GB</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;">500 GB</td>
				</tr>
				<tr>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;font-weight:600;">API Access</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;color:#B83232;">✗</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;background-color:#F4EADB;color:#2D7A3E;">✓</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;color:#2D7A3E;">✓</td>
				</tr>
				<tr>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;font-weight:600;">Priority Support</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;color:#B83232;">✗</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;background-color:#F4EADB;color:#B83232;">✗</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;color:#2D7A3E;">✓</td>
				</tr>
				<tr>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;font-weight:600;">Custom Integrations</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;color:#B83232;">✗</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;background-color:#F4EADB;color:#B83232;">✗</td>
					<td style="padding:14px 24px;border-bottom:1px solid #e8e8e8;text-align:center;color:#2D7A3E;">✓</td>
				</tr>
				<tr>
					<td style="padding:14px 24px;font-weight:600;">Analytics Dashboard</td>
					<td style="padding:14px 24px;text-align:center;">Basic</td>
					<td style="padding:14px 24px;text-align:center;background-color:#F4EADB;">Advanced</td>
					<td style="padding:14px 24px;text-align:center;">Enterprise</td>
				</tr>
			</tbody>
		</table>
	</figure>
	<!-- /wp:table -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--48)"}}},"layout":{"type":"flex","justifyContent":"center","columnGap":"var:preset|spacing|24"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--48)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"4px"},"color":{"background":"#A73C18","text":"#ffffff"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:4px;background-color:#A73C18;color:#ffffff">Get Started — Pro</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px","width":"2px"},"color":{"text":"#1B1C1B","border":"#1B1C1B"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-radius:4px;border-width:2px;color:#1B1C1B;border-color:#1B1C1B">Contact Sales</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
