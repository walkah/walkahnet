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
  
  <div id="front" class="clearfix vcard">
    <img src="<?php print $logo; ?>" class="photo" alt="James Walker" style="float: right; margin: 0 0 1em 1em; padding: 5px; border: 1px solid #676767; vertical-align:top" />
    <p>Hey, I'm <span class="fn">James Walker</span> (a.k.a. <a href="http://walkah.net/" rel="me" class="url uid">walkah</a>).</p>
    <p>I am a developer and believe in open technology.</p>
    <p>I have a <a href="/blog">blog</a> and sometimes take <a href="http://flickr.com/walkah" rel="me">pictures</a>.</p>
    <p>You should totally <a href="/contact">contact me</a>.</p>
    <p class="elsewhere">
      <a href="http://twitter.com/walkah" rel="me"><img src="<?php print $directory ?>/images/twitter.png" class="" alt="twitter profile" /></a>
      <a href="https://github.com/walkah" rel="me"><img src="<?php print $directory ?>/images/github.png" class="" alt="github profile" /></a>
      <a href="http://flickr.com/walkah" rel="me"><img src="<?php print $directory ?>/images/flickr.png" class="" alt="flickr profile" /></a>
      <a href="http://drupal.org/user/1531" rel="me"><img src="<?php print $directory ?>/images/drupal.png" class="" alt="drupal.org" /></a>
      <a href="http://walkah.net/node/feed"><img src="<?php print $directory ?>/images/rss.png" class="" alt="rss feed" /></a>
    </p>
  </div>
</div> <!-- /#page -->
