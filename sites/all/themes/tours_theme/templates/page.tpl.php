<div class="container content">
  <div class="starter-template">
    <?php print render($search_form) ?>
    <?php if($tours): ?>
      <?php foreach($tours as $tour): ?>
        <?php print $tour['date_of']. '<br>'; ?>
        <?php print $tour['date_to']. '<br>'; ?>
        <?php print $tour['night'] .'<br>'; ?>
        <?php print $tour['city'] .'<br>'; ?>
        <?php print $tour['hotel'] .'<br>'; ?>
        <?php print $tour['image'] .'<br>'; ?>
        <?php print $tour['currency']; ?>
        <?php print $tour['price'] .'<br>'; ?>
        <?php print $tour['food'].'<br></br><br></br>'; ?>
      <?php endforeach ?>
    <?php endif?>
  </div>
</div>
