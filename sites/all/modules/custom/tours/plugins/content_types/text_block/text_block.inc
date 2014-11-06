<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function tours_text_block_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('Text block'),
    'all contexts' => TRUE,
    'category' => t('Tours'),
    'hook theme' => 'tours_text_block_content_type_theme',
  );
}

/**
 * Implements hook_content_type_render().
 */
function tours_text_block_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = theme('tours_text_block');

  return $block;
}

/**
 * Implements hook_content_type_theme().
 */
function tours_text_block_content_type_theme(&$theme, $plugin) {
  $theme['tours_text_block'] = array(
    'path' => $plugin['path'],
    'template' => 'tours-text-block',
  );
}

/**
 * Process variables for excur-image-slider.tpl.php.
 */
function template_preprocess_tours_text_block(&$vars) {
  foreach (tours_main_text_block() as $node) {
    $vars['block'][$node->nid]['body'] = $node->body[LANGUAGE_NONE][0]['value'];
    $vars['block'][$node->nid]['title'] = $node->title;
    $vars['block'][$node->nid]['icon'] = $node->field_icon[LANGUAGE_NONE][0]['value'];
  }
}