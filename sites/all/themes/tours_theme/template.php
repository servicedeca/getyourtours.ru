<?php

/**
 * Process variables for page.tpl.php.
 */
function tours_theme_preprocess_page(&$vars) {
  // Get site logo.
  $vars['logo'] = theme('image', array(
    'path' => theme_get_setting('logo_path'),
    'alt' => t(variable_get('site_name')),
    'title' => t(variable_get('site_name')),
  ));

  $vars['search_form'] = drupal_get_form('tours_tour_search_form');
  unset($vars['search_form']['date_of']['date']['#description']);
  unset($vars['search_form']['date_to']['date']['#description']);
  unset($vars['search_form']['date_of']['date']['#title']);
  unset($vars['search_form']['date_to']['date']['#title']);
}


/**
 * Process variables for tours_search_form.tpl.php.
 */
function tours_preprocess_tours_search_tours(&$vars) {
  $tours = tours_get_tours();
  unset($_GET['q']);
  if($tours['tours'] && $tours['dynamics'] == NULL) {
    foreach($tours['tours'] as $tour) {
      $vars['tours'][] = array(
        'date_of' => $tour[1],
        'date_to' => $tour[5],
        'night' => $tour[4],
        'city' => $tour[11],
        'hotel' => l($tour[6],'hotel/' .$tour[46], array('query' => $_GET)),
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
        'hotel' => l($tour[6][1],'hotel/' .$tour[6][3], array('query' => $_GET)),
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
}

/**
 * Process variables for tours_hotel_form.tpl.php.
 */
function tours_preprocess_tours_hotel_tours(&$vars) {
  $tours = tours_get_tours($vars['hotelId']);
  if($tours['tours'] && $tours['dynamics'] == NULL) {
    foreach($tours['tours'] as $tour) {
      $vars['tours'][] = array(
        'date_of' => $tour[1],
        'date_to' => $tour[5],
        'night' => $tour[4],
        'city' => $tour[11],
        'hotel' => l($tour[6],'hotel/' ),
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
        'hotel' => l($tour[6][1],'hotel/'),
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
}


/**
 * Process variables for tours_search_form.tpl.php.
 */
function tours_preprocess_tours_search_form(&$vars) {

  $vars['form']['#attributes']['class'][] = 'form-inline';
  $vars['city'] = $vars['form']['city'];
  $vars['country_to'] = $vars['form']['country_to'];
  $vars['region'] = $vars['form']['region'];
  $vars['date_of'] = $vars['form']['date_of'];
  $vars['date_to'] = $vars['form']['date_to'];
  $vars['children'] = $vars['form']['children'];
  $vars['adults'] = $vars['form']['adults'];
  $vars['search'] = $vars['form']['search'];

}
