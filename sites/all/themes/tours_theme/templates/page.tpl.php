<div class="global-wrap">
  <header id="main-header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php print render($logo); ?>
          </div>
          <div class="col-md-3">
            <div class="top-user-area clearfix">
              <ul class="top-user-area-list list list-horizontal list-border">
                <li>
                  <?php print render($login_profile); ?>
                </li>
                <li>
                  <?php print render($logout_register); ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="nav">
        <ul class="slimmenu" id="slimmenu">
          <?php print render($main_menu) ?>
        </ul>
      </div>
    </div>
  </header>
  <div class="top-area show-onload">
    <div class="bg-holder full">
      <div class="bg-mask"></div>
      <div class="bg-parallax" style="background-image: url(http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/196_365_2048x1365.jpg); background-position: 50% 0px;"></div>
      <div class="bg-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="search-tabs search-tabs-bg mt50">
                <h1><?php print t('Find a tour'); ?></h1>
                <?php print render($search_form) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gap"></div>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  <footer id="main-footer">
    <div class="container">
      <div class="row row-wrap">
        <div class="col-md-3">
          <?php print render($logo); ?>
          <p class="mb20">
            <?php print t('Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!')?>
          </p>
        </div>
        <div class="col-md-3">
          <h4>
            <?php print t('Newsletter') ?>
          </h4>
          <?php print render($newsletter_form) ?>
        </div>
        <div class="col-md-2">
          <ul class="list list-footer">
            <?php foreach($footer_menu as $item): ?>
              <li>
                <?php print $item ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>
            <?php print t('Have Questions?')?>
          </h4>
          <h4 class="text-color">
            <?php print t('+7-(383)-354-14-33')?></h4>
          <h4>
            <a href="#" class="text-color">
              <?php t('support@traveler.com') ?>
            </a>
          </h4>
          <p>
            <?php print t('24/7 Dedicated Customer Support') ?>
          </p>
        </div>
      </div>
    </div>
  </footer>
</div>
