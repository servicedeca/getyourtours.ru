
<div class="row">
  <div class="col-lg-2">
    <?php print render($city);?>
  </div>
  <div class="col-lg-2">
    <?php print render($country_to);?>
  </div>
  <div class="col-lg-2">
    <?php print render($tourId);?>
  </div>
  <div class="col-lg-2">
    <?php print render($date_of);?>
  </div>
  <div class="col-lg-2">
    <?php print render($date_to);?>
  </div>
  <div class="col-lg-2">
    <div class="input-wrap people-count">
      <p class="title"><?php print t('Adults');  ?></p>
          <div id="adults-1" class="form-adults item-count-adults light">
          </div>
          <div id="adults-2" class="form-adults item-count-adults">
          </div>
          <div id="adults-3" class="form-adults item-count-adults">
          </div>
          <div id="adults-4" class="form-adults item-count-adults">
          </div>
          <div id="adults-5" class="form-adults item-count-adults">
          </div>
        </div>
    <?php print render($adults);?>
  </div>
  <div class="col-lg-2">
    <div class="input-wrap children-count">
      <p class="title"><?php print t('Children');  ?></p>
      <div id="children-1" class="form-children item-count-children">
      </div>
      <div id="children-2" class="form-children item-count-children">
      </div>
    </div>
    <div class="form-year-children">
      <?php print render($birthday1); ?>
      <?php print render($birthday2); ?>
      <?php print render($children);?>
    </div>
  </div>
  <div class="col-lg-1">
    <?php print render($nightsMin); ?>
  </div>
  <div class="col-lg-1">
    <?php print render($nightsMax); ?>
  </div>
  <div class="col-lg-1">
    <?php print render($priceMin); ?>
  </div>
  <div class="col-lg-1">
    <?php print render($priceMax); ?>
  </div>
  <div class="col-lg-12">
      <?php print render($search);?>
  </div>
  <div class="col-lg-2">
    <?php print render($hotelId);?>
  </div>
</div>