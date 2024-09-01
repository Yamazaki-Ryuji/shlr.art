<?php
/*
Template Name: Page à propos de Charles
 */
?>

<?php get_header() ?>
<main>

    <div class="about">
        <h2 class="about-me"><?php the_title() ?></h2>
            <div class="intro">
                <?php the_content() ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile_picture_2" alt="photo de profil" class="profile">
                        <div class="description">
                            <h3 class="shlr">
                                <b>shlr.art</b>
                            </h3>
                                <p class="text">                                
                                <br>
                                <br>  
                                "Artiste peintre français, style abstrait, technique personnelle du feu."
                                <br>
                                <br>
                                Ma démarche artistique a commencé par le travail du bois.
                                J'ai eu besoin d'être en lien avec la matière, de ressentir les veines, de chercher à donner vie
                                en utilisant le feu comme révélateur d'énergie pour à chaque fois aimer cette originalité, pour obtenir ces effets visuels
                                et de relief.
                                <br>
                                <br>
                                En recherche d'une nouvelle expression je m'essaie alors à la peinture, toujours poussé par les matières, par la nature
                                qui devient une source inépuisable d'inspiration et par ma maman aquarelliste.
                                <br>
                                <br>
                                En mode méditation ou plus rock (fire brother), je cherchais le moyen d'exprimer encore
                                plus mes émotions et de libérer mes ressentis.
                                <br>
                                <br>
                                Ce fût une recherche d'équilibre avec pour point de départ la peinture acrylique, puis la peinture à l'huile est arrivée.
                                <br>
                                <br>
                                Un jour, brûlant du bois, l'idée d'enflammer ma toile surgit, une façon d'allier le trravail des deux matières.
                                <br>
                                <br>
                                C'est alors que je me suis mis à peaufiner, à étudier les effets, multipliant les toiles, petites comme grandes,
                                trouées, percées, brûlées, et à peindre de jour comme de nuit.
                                <br>
                                <br>
                                En y incorporant de la  poudre d'or, "Mon Petit Feu", technique originale personnelle s'animait.
                                <br>
                                Le feu me permet de fixer l'or, de créer de la texture, de rebondir. Etre en évolution permanente et 
                                expérimenter sont mes leitmotiv.
                                <br>
                                <br>
                                Créer en public est une phase "hors atelier" difficile pour un artiste car sortir de mon univers est un défi que j'adore relever! 
                                <br>
                                <br>
                                Ainsi j'ai d'abord exposé dans ma région, puis Bordeaux, Paris, Liège en septembre 2023, en galeries d'art
                                et dans des lieux plus atypiques comme des salons d'art et dans une église romane...
                                <br>
                                <br>
                                Mise à Feu !
                                </p>
                        </div>
            </div>
    </div>
</main>
<?php get_footer() ?>