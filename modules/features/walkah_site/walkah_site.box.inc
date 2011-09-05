<?php
/**
 * @file
 * walkah_site.box.inc
 */

/**
 * Implementation of hook_default_box().
 */
function walkah_site_default_box() {
  $export = array();

  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'about_box';
  $box->plugin_key = 'simple';
  $box->title = 'About';
  $box->description = 'About James';
  $box->options = array(
    'body' => array(
      'value' => '<div typeof="foaf:Person" about="#me" class="vcard">
<img src="/<?php print drupal_get_path(\'theme\', \'walkah\'); ?>/logo.png" alt="james walker" width="100" class="photo" rel="foaf:img" />
<p><span class="fn n" property="foaf:name">James Walker</span> (a.k.a. <a href="http://walkah.net/" property="foaf:nickname" class="url uid nickname">walkah</a>) is a <span property="foaf:interest">free software</span> developer and advocate for the <span property="foaf:interest">open web</span>.</p>
<p><a href="/james-walker">more about james</a></p>
</div>',
      'format' => '2',
    ),
  );
  $export['about_box'] = $box;

  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'connect_box';
  $box->plugin_key = 'simple';
  $box->title = 'connect';
  $box->description = 'Connect';
  $box->options = array(
    'body' => array(
      'value' => '<ul class="connect">
<li><a href="http://twitter.com/walkah" rel="me"><img src="/<?php print drupal_get_path(\'theme\', \'walkah\'); ?>/images/twitter.png" class="" alt="twitter profile" /> twitter</a></li>
<li><a href="https://github.com/walkah" rel="me"><img src="/<?php print drupal_get_path(\'theme\', \'walkah\'); ?>/images/github.png" class="" alt="github profile" /> github</a></li>
<li><a href="http://flickr.com/walkah" rel="me"><img src="/<?php print drupal_get_path(\'theme\', \'walkah\'); ?>/images/flickr.png" class="" alt="flickr profile" /> flickr</a></li>
<li><a href="http://drupal.org/user/1531" rel="me"><img src="/<?php print drupal_get_path(\'theme\', \'walkah\'); ?>/images/drupal.png" class="" alt="drupal.org" /> drupal</a></li>
<li><a href="http://walkah.net/node/feed"><img src="/<?php print drupal_get_path(\'theme\', \'walkah\'); ?>/images/rss.png" class="" alt="rss feed" /> rss</a></li>
</ul>',
      'format' => '2',
    ),
  );
  $export['connect_box'] = $box;

  return $export;
}
