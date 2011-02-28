<div id="page">
  
  <header role="banner" class="clearfix">
    <?php if ($site_name || $site_slogan): ?>
    <hgroup id="name-and-slogan">
      <?php if ($site_name): ?>
      <h1 id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
      
        <?php if ($site_slogan): ?>
        <span id="site-slogan"><?php print $site_slogan; ?></span>
        <?php endif; ?>
      </h1>
      <?php endif; ?>
    </hgroup> <!-- /#name-and-slogan -->
    <?php endif; ?>
    
    <?php print render($page['header']); ?>
    
  </header> <!-- /header -->
  
  <?php if ($main_menu): ?>
  <nav role="navigation">
     <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
  </nav> <!-- /nav -->
  <?php endif; ?>
  
    <?php print $messages; ?>

    <div id="main-wrapper" class="clearfix">

      <div id="main-inner" role="main">
        <?php print render($page['highlighted']); ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links = render($action_links)): ?><ul class="action-links"><?php print $action_links; ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </div> <!-- /main -->

      <?php print render($page['sidebar']); ?>

    </div> <!-- /#main -->

    <?php print $feed_icons; ?>
    <?php print render($page['footer']); ?>

  </div> <!-- /#page -->
