<div class="container">
  <div class="row row-wrap" data-gutter="60">
    <?php $id=0; foreach($block as $val): $id++;?>
      <div class="col-md-4">
        <div class="thumb">
          <header class="thumb-header">
            <?php print $val['icon'];?>
          </header>
          <div class="thumb-caption">
            <h5 class="thumb-title">
              <?php print $val['title'];?>
            </h5>
            <p class="thumb-desc">
              <?php print $val['body'];?>
            </p>
          </div>
        </div>
       </div>
      <?php if (($id) % 3 == 0): ?>
        <div class="gap"></div>
      <?php endif; ?>
    <?php endforeach ?>
  </div>
</div>