<div class="gap gap-small"></div>
<div class="row row-wrap">
  <div class="container">
    <?php if(isset($tours)): ?>
      <h1 class="mb20">
        <?php print t('Search Result');?>
      </h1>
      <?php foreach($tours as $id => $tour): ?>
        <div class="col-md-3">
          <div class="thumb">
            <header class="thumb-header">
              <?php print $tour['image']; ?>
            </header>
            <div class="thumb-caption">
              <h5 class="thumb-title">
                <?php print $tour['hotel']; ?>
              </h5>
              <p class="mb0">
                <small>
                  <i class="fa fa-map-marker"></i>
                  <?php print $tour['city']; ?>
                </small>
              </p>
              <div class="date-form-to">
                <i class="fa fa-plane"></i>
                <?php print $tour['date_of']; ?>
                <i class="fa fa-long-arrow-right"></i>
                <?php print $tour['date_to']; ?>
              </div>
              <i class="fa fa-clock-o"></i>
              <?php print $tour['night']; ?>
              <?php print t('night');?>
              <p>
                <i class="fa fa-cutlery"></i>
                <?php print $tour['food']?>
              </p>
              <p class="mb0 text-darken">
                <span class="text-lg lh1em text-color">
                  <?php print $tour['currency']; ?>
                  <?php print $tour['price']; ?>
                </span>
              </p>
            </div>
          </div>
        </div>
        <?php ?>
        <?php if (($id+1) % 4 == 0): ?>
          <div class="gap"></div>
        <?php endif; ?>
      <?php endforeach ?>
    <?php endif ?>
    <?php if(isset($massage)): ?>
      <div class="col-md-12">
        <h1 class="mb20">
          <?php print $massage?>
        </h1>
      </div>
    <?php endif ?>
  </div>
</div>