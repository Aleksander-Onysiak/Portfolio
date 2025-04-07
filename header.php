<!DOCTYPE html>
<html lang="fr">
<head>
    <meta>
    <title><?= header . phpwp_title('-', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="nav">
        <h2 class="sr-only">Navigation principale</h2>
        <div class="languages">
            <ul class="languages__container">
                <?php foreach (pll_the_languages(['raw' => true]) as $lang): ?>
                    <li class="languages__item<?= $lang['current_lang'] ? ' languages__item--current' : '' ?>">
                        <a href="<?= $lang['url'] ?>" lang="<?= $lang['locale'] ?>" hreflang="<?= $lang['locale'] ?>"
                           class="languages__link"><?= $lang['name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <ul class="nav__container">
            <?php foreach (dw_get_navigation_links('header') as $link): ?>
                <li class="nav__container_item">
                    <a href="<?= $link->href; ?>" class="nav__container_link "><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

    </nav>
</header>
<main>