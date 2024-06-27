<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('my-2 bg-white shadow-md rounded-lg overflow-hidden group'); ?>>

    <a href="<?php the_permalink(); ?>" class="block">

        <?php if (has_post_thumbnail()) : ?>
            <div class="overflow-hidden">
                <?php the_post_thumbnail('full', ['class' => 'w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105']); ?>
            </div>
        <?php endif; ?>

        <div class="p-5">
            <header class="entry-header mb-4">
                <?php
                if (is_singular()) :
                    the_title('<h1 class="entry-title text-2xl font-bold mb-2">', '</h1>');
                else :
                    the_title('<h2 class="entry-title text-xl font-semibold mb-2">', '</h2>');
                endif;
                ?>
            </header><!-- .entry-header -->

            <div class="entry-content text-gray-700" <?php dental1_content_class('entry-content'); ?>>
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->
        </div>

        <footer class="entry-footer p-5 bg-gray-100">
            <?php dental1_entry_footer(); ?>
        </footer><!-- .entry-footer -->

    </a>

</article><!-- #post-<?php the_ID(); ?> -->
