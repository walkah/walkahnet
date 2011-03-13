<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <meta name="title" content="James Walker" />
  <meta name="keywords" content="james walker, walkah" />
  <meta name="description" content="The personal blog of James Walker." />
  
  <!-- pavatar.com discovery -->
  <link rel="pavatar avatar logo" href="<?php print theme_get_setting('logo'); ?>" />

  <meta name="microid" content="mailto+http:sha1:d1026e95deb9e779de34648de0c7e2c83e1d2a73" />
  <link rel="openid2.local_id" href="http://walkah.myopenid.com" />
  <link rel="openid2.provider" href="http://www.myopenid.com/server" />
  <link rel="openid.server" href="http://www.myopenid.com/server" />
  <link rel="openid.delegate" href="http://walkah.myopenid.com/" />
  <meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=walkah.myopenid.com" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
