<?php snippet('header') ?>

<main class="main" role="main">

    <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->byline()->kirbytext() ?>

        <div class="donateForm">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="3JPP9PFNGX4NN">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>

        <?php echo $page->text()->kirbytext() ?>
    </div>

</main>

<?php snippet('footer') ?>
