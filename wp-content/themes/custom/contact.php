<?php
/*
Template Name: Page contact de Charles
 */
?>

<?php get_header() ?>

    <main>
        <div class="contact">
            <h1 class="contact-title"><?php the_title() ?></h1>
                <div class="contact-form">
                    <?php the_content() ?>
                </div>    
        </div>
    </main>

<?php get_footer() ?>