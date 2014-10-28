<div class="tab_search_form">
  <div class="row">
    <div class="form-group form-group-lg form-group-icon-left">
      <div class="col-md-3">
        <i class="fa fa-map-marker input-icon"> </i>
        <label><?php print t('City ​​of departure');?></label>
        <?php print render($city) ?>
      </div>
    <div class="col-md-5">
      <label><?php print t('Where are you going?'); ?></label>
      <i class="fa fa-globe input-icon"></i>
      <span class="twitter-typeahead" style="position: relative; display: block; direction: ltr;">
      <?php print render($search); ?>
      <input class="typeahead form-control tt-input" placeholder="&nbsp;City, Region, Hotel" type="text" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
      </span>
      </div>
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
            </div>
            <div id="children-2" class="form-children item-count-children">
            </div>
          </div>
          <?php print render($children);?>
        </div>
        </div>
        <div class="col-lg-1">
          <?php print render($birthday1); ?>
          </div>
          <div class="col-lg-1">
          <?php print render($birthday2); ?>
        </div>
      <div class="col-lg-2">
        <label><?php print t('Duration');?></label>
      <?php print render($nights);?>
        </div>
      <div class="col-lg-3">
        <label><?php print t('Price');?></label>
        <?php print render($price);?>
      </div>
    </div>
  </div>
</div>