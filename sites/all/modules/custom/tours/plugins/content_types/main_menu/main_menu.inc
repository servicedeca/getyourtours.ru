<?php
/**
 * @file
 * Ctools content type main_menu.
 */

/**
 * Implements hook_ctools_content_types().
 */
function tours_main_menu_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('Main menu'),
    'all contexts' => TRUE,
    'category' => t('Tours'),
  );
}

/**
 * Implements hook_content_type_render().
 */
function tours_main_menu_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = tours_main_menu('tours_main_menu');

  return $block;
}

