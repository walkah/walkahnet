<?php

/**
 * Implementation of hook_filter_default_formats().
 */
function walkah_site_filter_default_formats() {
  $formats = array();

  // Exported format: Filtered HTML
  $formats['1'] = array(
    'format' => '1',
    'name' => 'Filtered HTML',
    'cache' => '1',
    'status' => '1',
    'weight' => '-1',
    'filters' => array(
      'filter_markdown' => array(
        'weight' => '-49',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_html' => array(
        'weight' => '-48',
        'status' => '1',
        'settings' => array(
          'allowed_html' => '<h3> <h4> <p><a> <b> <strong> <dd> <dl> <dt> <i> <em> <li> <ol> <u> <ul> <img> <blockquote> <code> <pre>',
          'filter_html_help' => 1,
          'filter_html_nofollow' => 0,
        ),
      ),
      'filter_htmlcorrector' => array(
        'weight' => '-45',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  // Exported format: Plain text
  $formats['4'] = array(
    'format' => '4',
    'name' => 'Plain text',
    'cache' => '1',
    'status' => '1',
    'weight' => '1',
    'filters' => array(
      'filter_html_escape' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_url' => array(
        'weight' => '1',
        'status' => '1',
        'settings' => array(
          'filter_url_length' => 72,
        ),
      ),
      'filter_autop' => array(
        'weight' => '2',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
