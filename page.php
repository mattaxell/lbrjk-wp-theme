<?php

if( ! defined('ABSPATH' ) ) exit;

/**
 * Page template
 * ------------------------------ *
 * Template used for pages with default content/layout
 */

get_header();
the_post();

?>

<article>
	<?php the_content(); ?>
</article>

<?php

get_footer();