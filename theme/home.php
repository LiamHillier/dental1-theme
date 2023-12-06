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
    ?>

</main><!-- #main -->


<?php
get_footer();
