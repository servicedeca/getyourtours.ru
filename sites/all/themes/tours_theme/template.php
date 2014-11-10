<?php

/**
 * Process variables for page.tpl.php.
 */
function tours_theme_preprocess_page(&$vars) {
  global $user;

  // Get site logo.
  $logo = theme('image', array(
    'path' => theme_get_setting('logo_path'),
    'alt' => t(variable_get('site_name')),
    'title' => t(variable_get('site_name')),
  ));
  $vars['logo'] = l($logo, '/<front>', array('query' => $_GET,
    'html' => TRUE,
    'attributes' => array('class' => 'logo',)));

  // Get main menu.
  $main_menu = i18n_menu_translated_tree('main-menu');
  $vars['main_menu'] = $main_menu;

  // Get footer menu.
  $footer_menu = menu_navigation_links('menu-footer-menu');
  foreach ($footer_menu as $item) {
    $vars['footer_menu'][] = l($item['title'], $item['href']);
  }

  // Get user links.
  if (user_is_logged_in()) {
     $vars['login_profile'] = l(t('User profile'), "user/$user->uid");
     $vars['logout_register'] = l(t('Logout'), 'user/logout');
  }
  else {
      $vars['Login_profile'] =  l(t('Login'), 'user/login');
      $vars['logout_register'] = l(t('Register'), 'user/register');
  }

  $vars['search_form'] = drupal_get_form('tours_tour_search_form');
  $vars['newsletter_form'] = drupal_get_form('tours_newsletter_form');
}

/**
 * Process variables for tours_search_form.tpl.php.
 */
function tours_preprocess_tours_search_tours(&$vars) {
  if(isset($_GET['search'])) {
   // $tours = tours_get_tours();
   // cache_set('tour',$tours);
    $tours = cache_get('tour')->data;
    $vars['res'] = $tours['result']->data;
    $get_hotel = $_GET;
    unset($get_hotel['q']);
    if (!empty($tours['tours'])) {
      if($tours['tours'] && $tours['dynamics'] == NULL) {
        foreach($tours['tours'] as $tour) {
          $image = theme('image', array(
            'path' => $tour[38],
            'width' => '100%',
            'height' => '197px',
            'alt' => $tour[6],
            'title' => $tour[6],
          ));
          $vars['tours'][] = array(
            'date_of' => $tour[1],
            'date_to' => $tour[5],
            'night' => $tour[4],
            'city' => $tour[11],
            'type_room' => $tour[8],
            'hotel' => l($tour[6],'hotel/' .$tour[46], array('query' => $get_hotel,
                                                             'attributes' => array('class' => 'text-darken'))),
            'food' => $tour[14],
            'image' => l($image, 'hotel/' .$tour[46], array('query' => $get_hotel,
                                                            'html' => TRUE,
                                                              'attributes' => array('class' => 'hover-img'))),
            'currency' => $tour[40],
            'price' =>  $tour[39],
          );
        }
      }
      elseif($tours['tours'] && $tours['dynamics'] == 1) {
        foreach($tours['tours'] as $tour) {
          $image = theme('image', array(
            'path' => $tour[6][2],
            'width' => '100%',
            'height' => '197px',
            'alt' => $tour[6][1],
            'title' => $tour[6][1],
          ));
          $vars['tours'][] = array(
            'date_of' => $tour[0],
            'date_to' => $tour[4],
            'night' => $tour[3],
            'city' => $tour[5][0],
            'type_room' => $tour[8],
            'hotel' => l($tour[6][1],'hotel/' .$tour[6][3], array('query' => $get_hotel,
                                                                  'attributes' => array('class' => 'text-darken'))),
            'food' => $tour[7][1],
            'image' => l($image, 'hotel/' .$tour[6][3], array('query' => $get_hotel,
                                                              'html' => TRUE,
                                                              'attributes' => array('class' => 'hover-img'))),
            'currency' => $tour[10]->currency,
            'price' =>  $tour[10]->total,
          );
        }
      }
    }
    else {
      $vars['massage'] = 'Your search did not match';
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
        'hotel' => $tour[6],
        'food' => $tour[14],
        'image' => theme('image', array(
          'path' => $tour[38],
          'width' => '300px',
          'height' => '300px',
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
        'hotel' => $tour[6][1],
        'food' => $tour[7][1],
        'image' => theme('image', array(
          'path' => $tour[6][2],
          'width' => '300px',
          'height' => '300px',
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
 * Process variables for excur-image-slider.tpl.php.
 */
function template_preprocess_tours_main_menu(&$vars) {
  // Get main menu.
  $main_menu = i18n_menu_translated_tree('main-menu');
  foreach ($main_menu as &$item) {
    if (empty($item['#href'])) {
      continue;
    }
    $item['#attributes']['class'][] = 'slimmenu-sub-menu';
  }
  $main_menu[351]['#attributes']['class']= 'active slimmenu-sub-menu';
  $vars['main_menu'] = $main_menu;
}

/**
 * Process variables for tours_search_form.tpl.php.
 */
function tours_preprocess_tours_search_form(&$vars) {
  unset($vars['form']['date_of']['date']['#description']);
  unset($vars['form']['date_to']['date']['#description']);
  unset($vars['form']['date_of']['date']['#title']);
  unset($vars['form']['date_to']['date']['#title']);
  unset($vars['form']['city']['#title']);
  unset($vars['form']['date_of']['#title']);
  unset($vars['form']['date_to']['#title']);
  unset($vars['form']['rAndBId']['#title']);
  unset($vars['form']['hotelClassId']['#title']);
  unset($vars['form']['country_to']['#title']);
  unset($vars['form']['tourId']['#title']);
  unset($vars['form']['hotelId']['#title']);
  if(current_path() != 'search_tours') {
    $vars['search'] = $vars['form']['search'];
  }
  $vars['form']['#attributes']['class'][] = 'form-inline';
  $vars['city'] = $vars['form']['city'];
  $vars['country_to'] = $vars['form']['country_to'];
  $vars['tourId'] = $vars['form']['tourId'];
  $vars['hotelId'] = $vars['form']['hotelId'];
  if(current_path() == 'search_tours') {
    $vars['hotelClassId'] = $vars['form']['hotelClassId'];
    $vars['rAndBId'] = $vars['form']['rAndBId'];
    $vars['country'] = $vars['form']['country_to'];
    $vars['tourId'] = $vars['form']['tourId'];
    $vars['hotelId'] = $vars['form']['hotelId'];
  }
  $vars['date_of'] = $vars['form']['date_of'];
  $vars['date_to'] = $vars['form']['date_to'];
  $vars['children'] = $vars['form']['children'];
  $vars['adults'] = $vars['form']['adults'];
  $vars['birthday1'] = $vars['form']['birthday1'];
  $vars['birthday2'] = $vars['form']['birthday2'];
  $vars['price'] = $vars['form']['price'];
  $vars['nights'] = $vars['form']['nights'];
  $vars['submit'] = $vars['form']['submit'];

}

/**
 * Process variables for tours-newsletter-form.tpl.php.
 */
function tours_preprocess_tours_newsletter_form(&$vars) {
  $vars['newsletter'] = $vars['form']['newsletter'];
  $vars['Subscribe'] = $vars['form']['Subscribe'];
}