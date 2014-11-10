<?php

/**
 * @file.
 */

function tours_views_data() {
  $data['tours']['table']['group'] = t('Tours');

  $data['tours']['table']['base'] = array(
    'field' => 'oid',
    'title' => t('Offers'),
    'help' => t('User offers'),
    'weight' => -10,
  );
  return $data;
}