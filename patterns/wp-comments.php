<?php
/**
 * Title: Comments
 * Slug: potential/wp-comments
 * Description: Standard comments section for post comments and comment form.
 * Categories: creatlach-blog
 * Keywords: comments, discussion, form, replies
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--64)","bottom":"var(--wp--preset--spacing--80)","left":"var(--wp--preset--spacing--40)","right":"var(--wp--preset--spacing--40)"}},"border":{"top":{"width":"1px","color":"#e8e8e8"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--64);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);border-top:1px solid #e8e8e8">

	<!-- wp:comments {"style":{"spacing":{"margin":{"top":"0"}}}} -->
	<div class="wp-block-comments" style="margin-top:0">

		<!-- wp:comments-title {"level":3,"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--48)"}}},"textColor":"text","fontSize":"heading-3"} /-->

		<!-- wp:comment-template -->

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--40)"},"padding":{"bottom":"var(--wp--preset--spacing--40)"}},"border":{"bottom":{"width":"1px","color":"#e8e8e8"}}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"flex-start","columnGap":"var:preset|spacing|24"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);border-bottom:1px solid #e8e8e8">

				<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"},"layout":{"selfStretch":"fixed","flexSize":"48px"}}} /-->

				<!-- wp:group {"style":{"layout":{"selfStretch":"fill"}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|8"}} -->
				<div class="wp-block-group" style="flex:1">

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center"}} -->
					<div class="wp-block-group">

						<!-- wp:comment-author-name {"isLink":true,"style":{"typography":{"fontWeight":"700","fontSize":"var(--wp--preset--font-size--paragraph)"}},"textColor":"text"} /-->

						<!-- wp:comment-date {"format":"j M Y","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"text"} /-->

					</div>
					<!-- /wp:group -->

					<!-- wp:comment-content {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)"}},"textColor":"text"} /-->

					<!-- wp:comment-reply-link {"style":{"typography":{"fontWeight":"600","fontSize":"var(--wp--preset--font-size--paragraph-small)"}},"textColor":"primary"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--56)"}}}} -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-numbers /-->
			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)"},"spacing":{"margin":{"top":"var(--wp--preset--spacing--56)"}}}} /-->

	</div>
	<!-- /wp:comments -->

</div>
<!-- /wp:group -->
