<?php

/**
 * @file
 */
?>

<div class="container">
  <h2 class="text-center"><?php print t('Top Destinations') ?></h2>
  <div class="gap">
    <div class="row row-wrap">
      <?php foreach($images as $image):?>
        <div class="col-sm-4">
          <div class="thumb">
            <header class="thumb-header">
              <?php print $image['image'] ?>
            </header>
          </div>
        <div class="thumb-caption">
          <h4 class="thumb-title">
            <?php print $image['name'] ?>
          </h4>
        </div>
        </div>
      <?php endforeach?>
    </div>
  </div>
</div>