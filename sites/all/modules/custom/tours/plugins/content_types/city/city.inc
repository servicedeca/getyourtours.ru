<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function tours_city_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('City'),
    'all contexts' => TRUE,
    'category' => t('Tours'),
    'hook theme' => 'tours_city_content_type_theme',
  );
}

/**
 * Implements hook_content_type_render().
 */
function tours_city_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = views_embed_view('terms', 'city');

  return $block;
}
