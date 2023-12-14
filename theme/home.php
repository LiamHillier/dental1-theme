<?php

/**
 * Template name: Home
 * @package dental1
 */

get_header();
?>


<main id="main">

    <?php
    get_template_part('components/features/homepage/hero/Hero');
    get_template_part('components/features/homepage/About');
    get_template_part('components/features/homepage/Services');
    get_template_part('components/features/homepage/Locations');
    get_template_part('components/features/homepage/Team');
    get_template_part('components/features/homepage/Social');
    get_template_part('components/features/homepage/Contact');
    ?>

</main><!-- #main -->


<?php
get_footer();
