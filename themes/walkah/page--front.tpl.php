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
  
  <div id="front" class="clearfix vcard" typeof="foaf:Person" about="#me">
    <img src="<?php print $logo; ?>" rel="foaf:img" class="photo" alt="James Walker" style="float: right; margin: 0 0 1em 1em; padding: 5px; border: 1px solid #676767; vertical-align:top" />
    <p>Hey, I'm <span class="fn n" property="foaf:name">James Walker</span> (a.k.a. <a href="http://walkah.net/" rel="me" property="foaf:nickname" class="url nickname uid">walkah</a>).</p>
    <p>I am a developer and believe in the <span property="foaf:interest">open web</span>.</p>
    <p>Find out <a href="/james-walker">more about me</a> or read my <a href="/blog">blog</a>.</p>
    <p>While you're here, <a href="/contact">contact me</a> too.</p>
    <p class="elsewhere">
      <a href="http://twitter.com/walkah" rel="me"><img src="<?php print $directory ?>/images/twitter.png" class="" alt="twitter profile" /></a>
      <a href="https://github.com/walkah" rel="me"><img src="<?php print $directory ?>/images/github.png" class="" alt="github profile" /></a>
      <a href="http://flickr.com/walkah" rel="me"><img src="<?php print $directory ?>/images/flickr.png" class="" alt="flickr profile" /></a>
      <a href="http://drupal.org/user/1531" rel="me"><img src="<?php print $directory ?>/images/drupal.png" class="" alt="drupal.org" /></a>
      <a href="http://walkah.net/node/feed"><img src="<?php print $directory ?>/images/rss.png" class="" alt="rss feed" /></a>
    </p>
  </div>
</div> <!-- /#page -->
