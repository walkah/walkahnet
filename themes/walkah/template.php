<?php

function walkah_search_theme_form($form) {
  $form['search_theme_form']['#title'] = '';
  $form['search_theme_form']['#id'] = 'search-box';
  $form['search_theme_form']['#attributes'] = array('class' => 'blur');
  $form['search_theme_form']['#default_value'] = t('Search this site');
  $form['submit']['#type'] = 'hidden';
  return drupal_render($form);
}

function walkah_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the items.
  $output .= '<ul class="links inline">';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '">' . $output . '</div>';

  return $output;
}
