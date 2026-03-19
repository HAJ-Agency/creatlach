<?php
/**
 * Title: Search Results Display
 * Slug: potential/search-results
 * Description: Template for search results display.
 * Categories: creatlach-utility
 * Keywords: search, results, query, find
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background">

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var(--wp--preset--spacing--48)"}},"border":{"bottom":{"width":"1px","color":"#e8e8e8"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"flex-end","columnGap":"var:preset|spacing|40"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--48);border-bottom:1px solid #e8e8e8">

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|8"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} -->
			<p class="has-primary-color has-text-color" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase;font-size:var(--wp--preset--font-size--paragraph-small)">Search</p>
			<!-- /wp:paragraph -->
			<!-- wp:query-title {"type":"search","style":{"typography":{"fontWeight":"700"}},"fontSize":"heading-2"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search again…","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"4px"},"layout":{"selfStretch":"fixed","flexSize":"320px"}}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"relevance","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--40)","bottom":"var(--wp--preset--spacing--40)"}},"border":{"bottom":{"width":"1px","color":"#e8e8e8"}}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"flex-start","columnGap":"var:preset|spacing|32"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);border-bottom:1px solid #e8e8e8">

				<!-- wp:post-featured-image {"isLink":true,"width":"180px","height":"120px","style":{"border":{"radius":"4px"},"layout":{"selfStretch":"fixed","flexSize":"180px"}},"aspectRatio":"3/2"} /-->

				<!-- wp:group {"style":{"layout":{"selfStretch":"fill"}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|12"}} -->
				<div class="wp-block-group" style="flex:1;min-width:200px">

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","columnGap":"var:preset|spacing|16"}} -->
					<div class="wp-block-group">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary"} /-->
						<!-- wp:post-date {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"heading-4"} /-->

					<!-- wp:post-excerpt {"numberOfWords":25,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->

					<!-- wp:read-more {"content":"Read more →","style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--64)","bottom":"var(--wp--preset--spacing--64)"}},"border":{"radius":"4px"},"color":{"background":"#F4EADB"}},"layout":{"type":"flex","orientation":"vertical","alignItems":"center","rowGap":"var:preset|spacing|24"}} -->
			<div class="wp-block-group has-background" style="background-color:#F4EADB;border-radius:4px;padding-top:var(--wp--preset--spacing--64);padding-bottom:var(--wp--preset--spacing--64)">
				<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"3rem"}}} --><p class="has-text-align-center" style="font-size:3rem">🔍</p><!-- /wp:paragraph -->
				<!-- wp:heading {"textAlign":"center","level":3,"textColor":"text","fontSize":"heading-3"} -->
				<h3 class="wp-block-heading has-text-align-center has-text-color has-heading-3-font-size">No results found</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textAlign":"center","textColor":"text","fontSize":"paragraph"} -->
				<p class="has-text-align-center has-text-color has-paragraph-font-size">Sorry, no content matched your search. Try different keywords or browse our categories below.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"4px"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="/blog" style="border-radius:4px">Browse All Articles</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--56)","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--56)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
