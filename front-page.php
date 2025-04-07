<?= get_header('custom') ?>

<h1 class="HW">
    <a href="index.php"><?= get_bloginfo('name'); ?></a>
</h1>

<section class="front-container">
    <div class="title">Aleksander Onysiak</div>
    <div class="subtitle"><?= __('DEVELOPPEUR WEB', 'textdomain') ?></div>
    <!--<img class="profile__image" src="<?= esc_url($image); ?>" alt="ma photo personnelle">-->
    <button class="btn-contact__fast" href="http://portfolio-2025.test/contact/">
        <?= __('Me contacter', 'hdc-trad') ?>
    </button>
</section>

<script src="src/js/main.js"></script>
<!-- Section des projets -->
<?php
$projets = new WP_Query([
    'post_type' => 'project',
    'post_per_page' => 3,
    'post_status' => 'publish',
]);

// Vérification si des projets existent avant l'affichage
if ($projets->have_posts()) :
    ?>
    <div role="heading" aria-level="2" class="front-projects__main">Mes projets</div>
    <section id="cards" class="front-projects">
        <h2 role="heading" aria-level="2" class="front-projects__title">Mes projets</h2>
        <?php while ($projets->have_posts()) : $projets->the_post(); ?>
            <article tabindex="0" class="front-project__card">
                <div class="opacity">
                    title="Ce lien vous amènera vers la page du projet">
                    <div class="front-project__card-text-container">
                        <img class="front-project__card-image" src="<?= esc_url(get_the_post_thumbnail_url()); ?>"
                             alt="<?= esc_attr(get_the_title()); ?>" width="300" height="300">
                        <div class="project-link">
                            <h2 role="heading" aria-level="3"
                                class="front-project__card-title"><?= get_the_title(); ?></h2>
                            <button class="front-project__card-link">
                                <a class="front-project__card-link-sro" href="<?= get_the_permalink(); ?>">
                                    VOIR LE PROJET
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
    <article class="front-quote-container">
        <h2 role="heading" aria-level="2" class="sr-only"></h2>
        <p class="front-quote-paraf">
            Vous souhaitez en apprendre plus à propos de moi ? C’est parfait en cliquant sur ce lien vous aurez
            l’opportunité d’en connaître davantage à propos de moi !
        </p>
        <button class="front-quote-btn"><a href="<?= get_the_permalink(); ?>">Découvrir mes autres projets</a></button>
    </article>
    <?php
    // Réinitialisation de la requête pour éviter les conflits
    wp_reset_postdata();
endif;
?>

<!-- Section des articles de blog -->

<!-- Section de contact -->
<section class="end-quote">
    <div class="end_contact__title"><?= __('Un Projet, une Idée ?', 'textdomain') ?></div>
    <div class="end_contact__subtitle"><?= __('Contactez-moi pour un stage', 'textdomain') ?></div>
    <button class="btn-contact"><?= __('Me contacter', 'textdomain') ?></button>
</section>

<?= get_footer('custom') ?>

