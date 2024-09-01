<?php
/*
Template Name: Page actualités de Charles
 */
?>

<?php get_header() ?>

<main>
    <div class="actualities">
        <h2 class="actuality-title">
            <?php the_title() ?></h2>
                <div class="actuality">
                    <?php the_content() ?>
                </div>
    </div>
</main>

<?php get_footer() ?>