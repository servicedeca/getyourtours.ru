
<div class="row">
  <div class="col-lg-2">
    <?php print render($city);?>
  </div>
  <div class="col-lg-2">
    <?php print render($country_to);?>
  </div>
  <div class="col-lg-2">
    <?php print render($region);?>
  </div>
  <div class="col-lg-2">
    <?php print render($date_of);?>
  </div>
  <div class="col-lg-2">
    <?php print render($date_to);?>
  </div>
  <div class="col-lg-2">
    <div class="input-wrap people-count">
      <p class="title">взрослых</p>
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
    <div class="input-wrap people-count">
      <p class="title">детей</p>
      <div id="children-1" class="form-children item-count-children">
      </div>
      <div id="children-2" class="form-children item-count-children">
      </div>
      </div>
    <?php print render($date_one); ?>
    <?php print render($date_two); ?>
    <?php print render($children);?>
  </div>
  <div class="col-lg-10">
      <?php print render($search);?>
  </div>
</div>