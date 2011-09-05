<?php
/**
 * @file
 * walkah_site.features.inc
 */

/**
 * Implementation of hook_ctools_plugin_api().
 */
function walkah_site_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "boxes" && $api == "box") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implementation of hook_node_info().
 */
function walkah_site_node_info() {
  $items = array(
    'blog' => array(
      'name' => t('blog'),
      'base' => 'node_content',
      'description' => t('blog posts'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('page'),
      'base' => 'node_content',
      'description' => t('If you want to add a static page, like a contact page or an about page, use a page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'webform' => array(
      'name' => t('Webform'),
      'base' => 'node_content',
      'description' => t('Create a new form or questionnaire accessible to users. Submission results and statistics are recorded and accessible to privileged users.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
