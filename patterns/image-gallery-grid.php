<?php
/**
 * Title: Image Gallery Grid
 * Slug: potential/image-gallery-grid
 * Description: Responsive image grid layout.
 * Categories: creatlach-gallery
 * Keywords: gallery, images, grid, photos
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--88)","bottom":"var(--wp--preset--spacing--88)","left":"var(--wp--preset--spacing--32)","right":"var(--wp--preset--spacing--32)"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--88);padding-bottom:var(--wp--preset--spacing--88);padding-left:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--48)"}}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--16)"}}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--paragraph-small)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
			<p class="has-text-align-center" style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--paragraph-small);font-style:normal;font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Our Work</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--h2)","lineHeight":"1.15"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--h2);line-height:1.15">A Glimpse Into Our Gallery</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--paragraph)","lineHeight":"1.75"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
			<p class="has-text-align-center" style="color:var(--wp--preset--color--text);font-size:var(--wp--preset--font-size--paragraph);line-height:1.75">A curated selection of our favourite moments, projects, and milestones captured over the years.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"large","style":{"border":{"radius":"8px"},"spacing":{"blockGap":"var(--wp--preset--spacing--16)"}}} -->
		<figure class="wp-block-gallery has-nested-images columns-3 is-cropped">

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:8px"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Modern office workspace with natural light" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:8px"><img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=80" alt="Team meeting in a bright conference room" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:8px"><img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80" alt="Collaborative brainstorming session with sticky notes" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:8px"><img src="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?w=800&q=80" alt="Creative workspace with design tools and materials" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:8px"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80" alt="Data analytics dashboard on a laptop screen" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:8px"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80" alt="Team members laughing and working together" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/></figure>
			<!-- /wp:image -->

		</figure>
		<!-- /wp:gallery -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
