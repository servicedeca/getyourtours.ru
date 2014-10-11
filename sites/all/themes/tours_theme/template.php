<?php

/**
 * Process variables for page.tpl.php.
 */
function tours_theme_preprocess_page(&$vars, $hook) {

  if($_GET['city']) {
    $cities = tours_get_data_operator()->cities;
    $countries = tours_get_data_operator()->countries;
    foreach($cities as $value) {
      if($value->name == $_GET['city']) {
        $cityId = $value->cityId;
      }
    }
    foreach($countries as $value) {
      if($value->name == $_GET['country_to']) {
        $countryId = $value->countryId;
      }
    }
  // Get site logo.
  $vars['logo'] = theme('image', array(
    'path' => theme_get_setting('logo_path'),
    'alt' => t(variable_get('site_name')),
    'title' => t(variable_get('site_name')),
  ));
  $data_directory = array(
    'xml' => 'false',
    'formatResult' => 'true'
  );
  $directory_url = 'http://search.tez-tour.com/toursearch/getCalcTypes';
  $url = url($directory_url, array('query' => $data_directory));
  $directory = drupal_http_request($url);
  $directory = json_decode($directory->data)->calcByTariffs;
  foreach($directory as $value) {
    if($value->arrCountry == $countryId && $value->depCity == $cityId ){
      $dynamics = 1;
    }
  }
    $after = $_GET['date_of']['date'];
    $before = $_GET['date_to']['date'];
    if($dynamics == 1){
      $url = 'http://www.tez-tour.com/tariffsearch/getResult';
    }
    else{
      $url = 'http://www.tez-tour.com/toursearch/getResult';
    }
    $data = array(
      'priceMin' => '0',
      'priceMax' => '15000',
      'currency' => '5561',
      'nightsMin' => '6',
      'nightsMax' => '14',
      'hotelClassId' => '2567',
      'accommodationId' => '1',
      'rAndBId' => '15350',
      'tourType' => '1',
      'locale' => 'ru',
      'cityId' => $cityId,
      'countryId' => $countryId,
      'after' => $after,
      'before' => $before,
      //'hotelId' => '147264',
      'hotelInStop' => 'false',
      'specialInStop' => 'false',
      'version' => '2',
      'tourId' => '14259',
      'tourId' => '14259%2C14358',
      'tourId' => '14259%2C14358',
      'tourId' => '14369%2C14358',
      'tourId' => '14372%2C14358',
      'tourId' => '14369',
      'hotelClassBetter' => 'true',
      'rAndBBetter' => 'true',
      'noTicketsTo' => 'false',
      'noTicketsFrom' => 'false',
      'searchTypeId' => '3',
      'recommendedFlag' => 'false',
      'salePrivateFlag' => 'false',
      'onlineConfirmFlag' => 'false',
    );
    $full_url = url($url, array('query' => $data));
    $result = drupal_http_request($full_url);
    $tours = json_decode($result->data);
    //var_dump($tours->date);
    $vars['date_of'] = $tours->data[0][0];
    $vars['date_to'] = $tours->data[0][4];
    $vars['night'] = $tours->data[0][3];
    $vars['city'] = $tours->data[0][5][0];
    $vars['hotel'] = $tours->data[0][6][1];
    $vars['za'] = $tours->data[0][7][1];
  }

  $vars['search_form'] = drupal_get_form('tours_tour_search_form');
}
