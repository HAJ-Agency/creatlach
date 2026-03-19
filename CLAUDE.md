# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

# WordPress Block Theme Development - "Creatlach"

This theme directory is for implementing a modern WordPress block theme.

## Theme Architecture & Standards

### Theme Development Environment
- **Theme Type**: Modern WordPress Block Theme (FSE - Full Site Editing)
- **Base Standards**: WordPress 6.x+ with Full Site Editing support
- **Build Tools**: None required - pure HTML/CSS/theme.json approach
- **Design Approach**: Mobile-first with clean white space
- **Code Standards**: WordPress Coding Standards (PHPCS required)

## Common Development Commands

### Theme Management with WP-CLI
```bash
# Theme activation and management
wp theme activate creatlach          # Activate this theme
wp theme list                       # List all themes
wp theme delete creatlach           # Delete theme (use with caution)

# Theme development and testing
wp theme install --activate [theme-name]  # Install and test other themes
wp theme mod get [mod_name]         # Get customizer setting
wp theme mod set [mod_name] [value] # Set customizer setting
```

### Code Quality Commands
```bash
# WordPress Coding Standards validation
phpcs --standard=WordPress wp-content/themes/creatlach/
phpcbf --standard=WordPress wp-content/themes/creatlach/

# Theme validation tools
wp theme is-installed creatlach
wp theme status creatlach
```

### Block Theme Development Commands
```bash
# Export current theme customizations
wp theme export --theme=creatlach

# Clear theme caches during development
wp cache flush
wp rewrite flush
```

## Block Theme Architecture

### Required File Structure
```
creatlach/
â”œâ”€â”€ style.css                    # Theme header and base styles
â”œâ”€â”€ theme.json                   # Global styles and settings
â”œâ”€â”€ index.html                   # Main template (required)
â”œâ”€â”€ templates/
â”‚   â”œâ”€â”€ index.html              # Home/blog template
â”‚   â”œâ”€â”€ front-page.html         # Front page template (static homepage)
â”‚   â”œâ”€â”€ single.html             # Single post template (includes wp-comments pattern at end)
â”‚   â”œâ”€â”€ page.html               # Page template
â”‚   â”œâ”€â”€ archive.html            # Archive template
â”‚   â”œâ”€â”€ 404.html                # 404 error template
â”‚   â””â”€â”€ search.html             # Search results template
â”œâ”€â”€ parts/
â”‚   â”œâ”€â”€ header.html             # Site header template part
â”‚   â”œâ”€â”€ footer.html             # Site footer template part
â”œâ”€â”€ patterns/
â”‚   â””â”€â”€ *.php                   # Custom block patterns (includes wp-comments.php)
â”œâ”€â”€ assets/
â”‚   â”œâ”€â”€ css/
â”‚   â”œâ”€â”€ js/
â”‚   â””â”€â”€ images/
â”œâ”€â”€ functions.php               # Theme functions (minimal for block themes)
â””â”€â”€ readme.txt                 # Theme documentation
```

## Theme Development Philosophy

### Block Theme Principles
- **HTML-first approach**: Templates are HTML files, not PHP with the exception of function.php and /patterns/*.php
- **theme.json configuration**: Global styles defined in theme.json
- **Minimal PHP**: Use functions.php and /patterns/*.php only for essential functionality
- **Block patterns**: Create reusable content patterns
- **Template parts**: Modular header/footer components

### Mobile-First Design Standards
- Design for mobile devices first, then scale up
- Implement fluid typography with clamp() functions
- Optimize images for multiple screen densities
- Test across all device breakpoints

## WordPress Block Theme Development

### theme.json Configuration
```json
{
    "version": 3,
    "settings": {
        "appearanceTools": true,
        "useRootPaddingAwareAlignments": true,
        "layout": {},
        "typography": {},
        "color": {},
        "spacing": {}
    },
    "styles": {
        "typography": {},
        "color": {},
        "spacing": {}
    }
}
```

##Layout##
- for content size use 1232px
- for wide size use 1440px

##Spacing Guidelines##
- use a slug spacingSize range through 4, 8, 16, 24, 32, 40, 48, 56, 64, 72, 80, 88, 104
- use rem units
- use fluid with min and max
- use sensible naming using the size of the spacing in pixels.

##Font families##
- use a system sans-serif font

##Font Size Guidelines:##
- **Paragraph Small**: 0.875rem - fixed size, no fluid typography
- **Paragraph**: Fluid typography with min 0.975rem and max 1rem
- **Paragraph Large**: Fluid typography with min 1rem and max 1.125rem
- **Heading 1**: Fluid typography with min 2.5rem and max 4.875rem
- **Heading 2**: Fluid typography with min 2rem and max 3.5rem
- **Heading 3**: Fluid typography with min 1.75rem and max 2.25rem
- **Heading 4**: Fluid typography with min 1.25rem and max 1.75rem

**Rule**: Font sizes below "Paragraph" use fixed sizes. "Paragraph" and above use fluid typography with clamp() for responsive scaling.

##Colour Palette Guidelines for theme.json:##

When generating a colour palette for WordPress theme.json, follow these principles:

##Primary Colour##
- #A73C18
- Represents the dominant brand identity
- Used for key interactive elements (main call-to-action buttons, links, highlights)
- Must be visually strong but not overwhelming

##Secondary Colour##
- #F4EADB
- Complements the primary and provides visual balance
- Used for supporting actions, navigation, or section backgrounds
- **Must be selected so it is directly complementary to the primary colour**

##Text Colour##
- #1B1C1B

##White##
- #FFFFFF

##Black##
- #000000

##Transparent##
- rgba(0,0,0,0)

##Supporting Palette##
For both primary and secondary colours, generate a 50% reduced contrast mix of * 5 of each:
- **Muted primary hues**: Desaturated variations for subtle backgrounds and low-emphasis elements
- **Muted secondary hues**: Desaturated variations for subtle backgrounds and low-emphasis elements
- Also add one for primary color with an opacity of 0.2

Ensure these variations are practical for different UI states (hover, active, disabled, focus).

##Accent Colours##
- Derived from the Supporting Palette above
- Reserved for alerts, notifications, or data visualisation states (success, error, warning, info)
- Should not compete with primary/secondary but reinforce clarity and accessibility

##Accessibility##
- Maintain WCAG AA minimum contrast ratios between text and background colours
- Provide options suitable for both light and dark contexts
- Validate accessibility standards (WCAG 2.1)

### HTML Template Structure
Block theme templates use pure HTML with WordPress block markup comments. **No PHP is allowed in block theme templates.**

```html
<!-- templates/index.html -->
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    <!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
            <!-- wp:post-title {"isLink":true} /-->
            <!-- wp:post-date /-->
            <!-- wp:post-excerpt /-->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination -->
            <!-- wp:query-pagination-previous /-->
            <!-- wp:query-pagination-numbers /-->
            <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
```

**Important**: Block theme templates are HTML files that use WordPress block markup (HTML comments). They do not support PHP code. All dynamic functionality is handled through blocks.

## Development Workflow

### Theme Development Steps
1. **Create base files**: style.css, theme.json, index.html
2. **Define global styles**: Configure theme.json settings and styles
3. **Build templates**: Create HTML templates for different page types (including front-page.html)
4. **Create template parts**: Build reusable header/footer components
5. **Build block patterns**: Create all required patterns. No wp-comments.php
6. **Implement responsive design**: Test and refine mobile-first approach
7. **Validate and optimize**: Run PHPCS and performance testing

## Security & Performance Standards

### Theme Security
- Sanitize and escape all dynamic content
- Use WordPress functions for asset loading
- Implement proper nonce verification where needed
- Follow WordPress security best practices
- Never include sensitive information in theme files

### Performance Optimization
- Use WordPress native functions for asset enqueueing
- Follow Core Web Vitals guidelines

## Block Pattern Development

### Pattern Registration
```php
// functions.php
register_block_pattern(
    'creatlach/hero-section',
    array(
        'title'       => __( 'Hero Section', 'creatlach' ),
        'description' => _x( 'A hero section with title and button', 'Pattern description', 'creatlach' ),
        'content'     => '<!-- wp:group --><!-- /wp:group -->',
        'categories'  => array( 'featured', 'header' ),
    )
);
```

### Pattern Categories
- header: Header-related patterns
- footer: Footer-related patterns
- featured: Featured content patterns
- gallery: Image and media patterns
- text: Text-focused patterns
- call-to-action: CTA and promotional patterns

### Common Block Patterns for Generic Themes

**NOTE: diable any core patterns in the functions.php for the core pattern library to avoid confusion in the admin 

##Pattern Design with Colour Theory##

When generating block patterns for WordPress themes, follow these colour application rules:

###1. Call-to-Action (CTA) Patterns###
- Must rely on the primary and secondary palette as the foundation
- Primary colour should dominate in key action areas (e.g., "Buy Now" buttons, form submit, hero CTA)
- Secondary colour should provide contrast â€” either as background sections, hover states, or secondary actions
- Apply the muted hue variations of primary/secondary where supporting contrast is needed (for example, muted secondary background with primary action button)
- Ensure button text and icons always meet accessibility contrast standards against their background

###2. Non-Call-to-Action (Supporting) Patterns###
- Should avoid competing with CTAs
- Use accent/tertiary colours (success, warning, error, info) or muted variants of primary/secondary for backgrounds, highlights, and section framing
- Neutral tones (light, medium, dark) should dominate typography and structure, with accent colours adding interest without distracting from CTAs
- Example use cases: testimonial blocks, pricing grids, content highlights, timelines, and FAQs

###3. Pattern Hierarchy###
- **CTA-first logic**: Always ensure CTA patterns stand out clearly in a page composition by using bold, high-contrast colour pairings
- **Supportive patterns**: Use muted, softer, or neutral backgrounds so they visually step back and allow CTAs to shine
- Do not allow accent colours to overshadow or conflict with primary/secondary CTA colours

###4. Responsiveness and Flexibility###
- Colours must adapt well in both light and dark contexts
- Patterns should be designed so that CTA colour usage is consistent and easily overridden by global theme.json palette definitions

###5. Accessibility and Consistency###
- Always apply WCAG AA contrast rules for text over coloured backgrounds
- Use consistent naming conventions so patterns map directly to the palette keys ("primary", "secondary-muted", "accent-info", "neutral-dark" etc.)
- Avoid using raw hex codes in patterns; always reference the registered palette keys

##Summary##
- CTA colour patterns = primary + secondary system with muted and complementary balance
- Supporting patterns = accent + muted colours with neutrals for structure
- Accessibility and contrast must always be enforced
- Naming consistency ensures patterns and palette remain tightly integrated

# Theme Patterns #

**All patterns must be included in the build**

#### Hero & Header Patterns
- **Hero with Background Image**: Large hero section with background image, heading, subheading, and CTA button
- **Hero with Video Background**: Full-width hero with video background and overlay text
- **Split Hero**: Two-column hero with image on one side and text/CTA on the other
- **Hero with Search Bar**: Hero section with prominent search functionality
- **Announcement Banner**: Dismissible top banner for announcements or promotions
- **Page Header with Breadcrumbs**: Standard page header with title and navigation breadcrumbs

#### Content Patterns
- **Two Column Text**: Side-by-side text columns for content-heavy pages
- **Two Column Text Image**: Image to the left or right. Image always on top when they go on top of each other.
- **Three Column Features**: Feature grid with icons/images, headings, and descriptions
- **Four Column Features**: Feature grid with icons/images, headings, and descriptions
- **Accordion/FAQ Section**: Expandable accordion for FAQs or detailed content
- **Tabs Content Section**: Tabbed interface for organizing related content
- **Testimonial Single**: Single testimonial with quote, author, and optional image
- **Testimonial Grid**: Multiple testimonials in a grid layout
- **Pricing Table**: Comparison table for pricing tiers or product features
- **Timeline**: Vertical or horizontal timeline for company history or process steps
- **Stats/Numbers Section**: Highlighting key statistics or achievements
- **Team Member Grid**: Grid of team members with photos and bios

#### Call-to-Action Patterns
- **Simple CTA**: Centered heading, text, and button on colored background
- **Split CTA**: Two-column CTA with image and text/button
- **Newsletter Signup**: Email subscription form with heading and description
- **Download CTA**: Pattern for promoting downloadable resources
- **Contact CTA**: Quick contact form or contact information display
- **Social Media CTA**: Encouraging social media follows with icon links

#### Gallery & Media Patterns
- **Image Gallery Grid**: Responsive image grid with lightbox functionality
- **Video Gallery**: Grid of video thumbnails with play buttons
- **Before/After Slider**: Image comparison slider
- **Logo Showcase**: Grid of client or partner logos
- **Portfolio Grid**: Filterable portfolio items with categories
- **Image with Caption**: Full-width image with overlay or below caption

#### Text & Typography Patterns
- **Pull Quote**: Large, styled quote within content
- **Highlighted Text Box**: Emphasized text in a colored box or with background
- **Two-Column List**: Lists displayed in multiple columns
- **Dropcap Paragraph**: Opening paragraph with large decorative first letter
- **Blockquote with Citation**: Styled blockquote with proper attribution
- **Table of Contents**: Auto-generated or manual TOC for long content

#### Footer Patterns
- **Simple Footer**: Single-row footer with copyright and links
- **Multi-Column Footer**: Footer with multiple widget areas or link columns
- **Footer with Newsletter**: Footer including email subscription form
- **Footer with Social Icons**: Footer prominently featuring social media links
- **Contact Footer**: Footer with contact information and location map
- **Back to Top Footer**: Footer with "scroll to top" functionality

#### Blog & Archive Patterns
- **Post Grid**: Grid layout for blog posts with featured images
- **Post List**: Traditional list view of blog posts
- **Featured Post Highlight**: Large featured post above regular post grid
- **Category Grid**: Display of post categories with images
- **Author Bio Box**: Author information and social links
- **Related Posts**: Grid of related articles at end of posts
- **Pagination**: Various pagination styles (numbers, prev/next, load more)
- **wp-comments**: Standard comments pattern for post comments and comment form (must be inserted at end of single.html template)

#### Commerce Patterns
- **Product Grid**: Grid layout for products with images and pricing
- **Product Feature**: Highlighted single product with detailed information
- **Product Comparison**: Side-by-side product comparison table
- **Shopping Features**: Icons and text highlighting shopping benefits
- **Review/Rating Display**: Customer reviews and star ratings

#### Utility Patterns
- **Cookie Notice**: GDPR-compliant cookie consent banner
- **404 Error Page**: Custom 404 page with navigation options
- **Coming Soon**: Coming soon or maintenance mode page
- **Search Results**: Template for search results display
- **Sidebar Layout**: Common sidebar with widgets, recent posts, categories
- **Breadcrumb Navigation**: Breadcrumb trail for site navigation
- **Progress Bar**: Visual progress indicator for multi-step processes

## Quality Assurance

### Code Validation
- Run PHPCS with WordPress standards before committing
- Validate HTML templates for proper block markup
- Test theme.json configuration validity
- Verify accessibility compliance
- Check cross-browser compatibility

### WordPress Standards Compliance
- Follow WordPress Block Theme guidelines
- Implement proper internationalization (i18n)
- Use semantic HTML structure
- Follow WordPress PHP and CSS coding standards
- Document all custom functionality

## Common Development Tasks

### Asset Management
```php
// functions.php - Minimal asset loading
function creatlach_theme_assets() {
    wp_enqueue_style( 
        'creatlach-style', 
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'creatlach_theme_assets' );
```

## Resources & Documentation

### Primary Resources
- WordPress Block Theme Developer Handbook
- Full Site Editing documentation
- theme.json reference guide
- WordPress Block Editor Handbook

### Development Tools
- WordPress Playground for testing
- Block Theme development tools
- Accessibility testing tools
- Performance monitoring tools

## Development Environment Integration

### Valet Configuration
This theme works within the Laravel Valet development environment:
- Access via: https://claudecode.test
- PHP 8.1 with Xdebug for debugging
- Automatic HTTPS with Valet secure command

### Debug Configuration
- Enable WP_DEBUG for development
- Monitor debug.log for theme-related issues
- Use browser dev tools for CSS/JS debugging
- Implement error logging for custom functions

## Theme-Specific Notes

The "creatlach" theme serves as a learning environment for modern WordPress block theme development, focusing on:
- Clean, semantic HTML structure
- Mobile-first responsive design
- Full Site Editing capabilities
- Performance optimization
- Accessibility best practices
- WordPress coding standards compliance
- Include lots of clean white space

All development should prioritize simplicity, maintainability, and adherence to WordPress best practices.