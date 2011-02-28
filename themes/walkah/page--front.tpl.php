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
    <p>Hey, I'm James Walker (a.k.a. "walkah").</p>
    <p>I am a developer and believe in open technology.</p>
    <p>I have a <a href="/blog">blog</a> and sometimes take <a href="http://flickr.com/walkah">pictures</a>.</p>
    <p>You should totally <a href="/contact">contact me</a>.</p>
  </div>
</div> <!-- /#page -->
