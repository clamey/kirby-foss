<?php snippet('header') ?>

  <main class="main" role="main">

    <img class="center doubleBorder" src="<?php echo url('assets/images/foss_header.png') ?>" alt="<?php echo $site->title()->html() ?>" />

    <div class="text">
      <?php echo $page->byline()->kirbytext() ?>
    </div>

    <div class="text">
      <?php echo $page->top_text()->kirbytext() ?>
    </div>

    <div class="twoColContainer">
      <div class="text leftCol">
        <?php echo $page->left_text()->kirbytext() ?>
      </div>

      <div class="text rightCol">
        <?php echo $page->right_text()->kirbytext() ?>
      </div>
    </div>

    <img class="center" src="<?php echo url('assets/images/foss_body.png') ?>" alt="<?php echo $site->title()->html() ?>" />

    <hr>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>
