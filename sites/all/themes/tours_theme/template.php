<?php

/**
 * Process variables for page.tpl.php.
 */
function tours_theme_preprocess_page(&$vars, $hook) {
  // Get site logo.
  $vars['logo'] = theme('image', array(
    'path' => theme_get_setting('logo_path'),
    'alt' => t(variable_get('site_name')),
    'title' => t(variable_get('site_name')),
  ));
  $tours = tours_get_tours(1);
  if($tours['tours'] && $tours['dynamics'] == NULL) {
    foreach($tours['tours'] as $tour) {
      $vars['tours'][] = array(
        'date_of' => $tour[1],
        'date_to' => $tour[5],
        'night' => $tour[4],
        'city' => $tour[11],
        'hotel' => l($tour[6],'hotel/' .$tour[46], array('query' => $_GET) ),
        'food' => $tour[14],
        'image' => theme('image', array(
          'path' => $tour[38],
          'width' => '150px',
          'height' => '150px',
          'alt' => $tour[6],
          'title' => $tour[6],
        )),
        'currency' => $tour[40],
        'price' =>  $tour[39],
      );
    }
  }
  elseif($tours['tours'] && $tours['dynamics'] == 1) {
    foreach($tours['tours'] as $tour) {
      $vars['tours'][] = array(
        'date_of' => $tour[0],
        'date_to' => $tour[4],
        'night' => $tour[3],
        'city' => $tour[5][0],
        'hotel' => l($tour[6][1],'hotel/', array('query' => $_GET) ),
        'food' => $tour[7][1],
        'image' => theme('image', array(
          'path' => $tour[6][2],
          'width' => '150px',
          'height' => '150px',
          'alt' => $tour[6][1],
          'title' => $tour[6][1],
        )),
        'currency' => $tour[10]->currency,
        'price' =>  $tour[10]->total,
      );
    }
  }

$vars['search_form'] = drupal_get_form('tours_tour_search_form');
}

/**
 * Process variables for tours_search_form.tpl.php.
 */
function tours_preprocess_tours_search_form(&$vars) {

  $vars['form']['#attributes']['class'][] = 'form-inline';
  $vars['city'] = $vars['form']['city'];
  $vars['country_to'] = $vars['form']['country_to'];
  $vars['date_of'] = $vars['form']['date_of'];
  $vars['date_to'] = $vars['form']['date_to'];
  $vars['Accommodation'] = $vars['form']['Accommodation'];
  $vars['search'] = $vars['form']['search'];

}
