<?php get_header();?>

<h2>this is a test</h2>
<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>



    </div>
</section>

<?php get_footer();?>