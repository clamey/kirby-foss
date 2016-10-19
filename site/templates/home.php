<?php snippet('header') ?>

<main class="main narrow" role="main">

    <hr>

    <div class="cf">
        <div class="title">
            <?php echo $page->title()->kirbytext() ?>
        </div>

        <img class="puzzle" src="<?php echo url('assets/images/puzzle.png') ?>" alt="<?php echo $site->title()->html() ?>"/>
    </div>


    <div class="text">
        <?php echo $page->main_text()->kirbytext() ?>
    </div>

    <hr>

    <div class="text news">
        <?php echo $page->news()->kirbytext() ?>
    </div>

</main>

<?php snippet('footer') ?>
