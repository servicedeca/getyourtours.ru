<div class="tab_search_form">
  <div class="row">
    <div class="form-group form-group-lg form-group-icon-left">
      <div class="col-md-2">
        <i class="fa fa-map-marker input-icon"> </i>
        <label><?php print t('City ​​of departure');?></label>
        <?php print render($city) ?>
      </div>
      <?php if(isset($search)):?>
        <div class="col-md-5">
          <label><?php print t('Where are you going?'); ?></label>
          <i class="fa fa-globe input-icon"></i>
          <?php print render($search); ?>
        </div>
      <?php endif; ?>
      <?php if(isset($country)): ?>
        <div class="col-lg-2">
          <label><?php print t('Country'); ?></label>
          <?php print render($country_to);?>
        </div>
        <div class="col-lg-2">
          <label><?php print t('Region'); ?></label>
          <?php print render($tourId);?>
        </div>
        <div class="col-lg-2">
          <label><?php print t('Hotel'); ?></label>
          <?php print render($hotelId);?>
        </div>
      <?php endif?>
      <div class="col-md-2">
        <i class="fa fa-calendar input-icon input-icon-highlight"></i>
        <label><?php print t('Check-in');?></label>
        <?php print render($date_of)?>
      </div>
      <div class="col-md-2">
        <i class="fa fa-calendar input-icon input-icon-highlight"></i>
        <label><?php print t('Check-out');?></label>
        <?php print render($date_to)?>
      </div>

      <div class="col-lg-2">
        <div class="input-wrap people-count">
          <label><?php print t('Adults');?></label>
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
      <div class="col-lg-1">
        <div class="input-wrap children-count">
          <label><?php print t('Children');?></label>
          <div class="people-children-count">
            <div id="children-1" class="form-children item-count-children">
              <?php print render($birthday1); ?>
            </div>
            <div id="children-2" class="form-children item-count-children">
              <?php print render($birthday2); ?>
            </div>
          </div>
          <?php print render($children);?>
        </div>
        </div>
      <div class="col-lg-2">
        <label><?php print t('Duration');?></label>
      <?php print render($nights);?>
        </div>
      <div class="col-lg-3">
        <label><?php print t('Price');?></label>
        <?php print render($price);?>
      </div>
      <?php if(isset($hotelClassId) && isset($rAndBId)):?>
        <div class="col-lg-2">
          <i class="input-icon fa fa-star"></i>
          <label><?php print t('Hotel class');?></label>
          <?php print render($hotelClassId); ?>
        </div>
        <div class="col-lg-3">
          <i class="input-icon fa fa-cutlery"></i>
          <label><?php print t('Food');?></label>
          <?php print render($rAndBId); ?>
        </div>
      <?php endif ?>
      <div class="col-lg-2">
        <?php print render($submit)?>
      </div>
    </div>
  </div>
</div>