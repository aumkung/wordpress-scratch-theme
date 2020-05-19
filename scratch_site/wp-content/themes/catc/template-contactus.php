<?php get_header('secondary'); ?>
<?php /* Template Name: Contact Us */ ?>

<section class="page-wrap">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                this is where contact from goes
            </div>
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>