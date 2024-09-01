<?php
/*
Template Name: Article de Charles
 */
?>

<?php get_header() ?>

<main>
    <div class="full-article">
        <h2 class="title11"><?php the_title() ?></h2>
            <div class="article-detail">
                    <div class="square"><?php the_content() ?></div>
            </div>
    </div>
</main>

<?php get_footer() ?>