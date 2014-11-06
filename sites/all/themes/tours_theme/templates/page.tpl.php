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
        <h1>footer</h1>
      </div>
    </div>
  </footer>
</div>
