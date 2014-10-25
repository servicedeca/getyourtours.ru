<div class="global-wrap">
  <header id="main-header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
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
</div>
<?php //print render($search_form) ?>
<?php //print render($page['content']); ?>
