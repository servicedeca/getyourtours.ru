<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function tours_promotions_tours_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('Promotions tours'),
    'all contexts' => TRUE,
    'category' => t('Tours'),
    'hook theme' => 'tours_promotions_tours_content_type_theme',
  );
}

/**
 * Implements hook_content_type_render().
 */
function tours_promotions_tours_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = theme('tours_promotions_tours');

  return $block;
}

/**
 * Implements hook_content_type_theme().
 */
function tours_promotions_tours_content_type_theme(&$theme, $plugin) {
  $theme['tours_promotions_tours'] = array(
    'path' => $plugin['path'],
    'template' => 'tours-promotions-tours',
  );
}

/**
 * Process variables for excur-image-slider.tpl.php.
 */
function template_preprocess_tours_promotions_tours(&$vars) {
    $a= 1;
/*  foreach(tours_get_promotions_tours() as $tour) {
    $vars['tours'][] = array(
      'title' => $tour['title'],
      'country' => $tour['title'],
      'date' => $tour['date'],
      'duration' => $tour['duration'],
    );
  }*/
}