
<?php if($tours): ?>
  <div class="row">
    <div class="col-lg-4">
      <?php print $tours[0]['image']; ?>
    </div>
    <div class="col-lg-6">
      <h1><?php print $tours[0]['hotel']; ?></h1>
    </div>
  </div>
    <div class="row">
      <?php foreach($tours as $tour): ?>
        <div class="col-lg-2">
          <?php print $tour['date_of'].'-'; ?>
          <?php print $tour['date_to']; ?>
        </div>
        <div class="col-lg-3">
          <?php print $tour['night']; ?>
        </div>
        <div class="col-lg-3">
          <?php print $tour['city']; ?>
        </div>
        <div class="col-lg-3">
          <?php print $tour['type_room']; ?>
        </div>
        <div class="col-lg-2">
          <?php print $tour['price']; ?>
          <?php print $tour['currency']; ?>
        </div>
        <div class="col-lg-2">
        <?php print $tour['food']; ?>
        </div>
        <br><br><br>
      <?php endforeach ?>
  </div>
<?php endif?>