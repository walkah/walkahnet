<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if($picture): ?>
    <?php print $picture ?>
  <?php endif; ?>

  <?php if ($new): ?>
    <mark class="new"><?php print $new ?></mark>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
  <?php print render($title_suffix); ?>

  <header class="submitted">
    <?php print t('by !name', array('!name' => $author)) ?>
  </header>

  <div class="time">
    <?php print $created; ?>
  </div>
     
  <section class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <footer class="user-signature clearfix">
      <?php print $signature ?>
    </footer>
    <?php endif; ?>
  </section>

  <?php if ($links = render($content['links'])): ?>
    <footer class="link-wrapper">
      <?php print $links; ?>
    </footer>
  <?php endif; ?>
</article>
