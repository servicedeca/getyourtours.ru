<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function tours_destinations_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('Destinations'),
    'all contexts' => TRUE,
    'category' => t('Tours'),
  );
}

/**
 * Implements hook_content_type_render().
 */
function tours_destinations_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = views_embed_view('terms', 'destinations');

  return $block;
}