<?php
/*
Template Name: accueil de Charles
*/
?>

<?php get_header() ?>

<main>
  <div class="home-container">
    <h1 class="welcome-title"><?php the_title() ?></h1>
    <!-- <div class="slider"> -->
      <?php the_content() ?>
    <!-- </div> -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        
      <?php
        for($i=1;$i<=12;$i++){
          $img = get_field('image_'.$i);
          if ($img){
            echo '<div class="swiper-slide"><div class="imgslide" style="background-image: url('.$img["sizes"]["large"].');"></div></div>';
          }
        }
      ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer() ?>