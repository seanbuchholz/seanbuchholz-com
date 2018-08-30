<?php if ($page->template() == 'article'): ?>
<!-- meta tags for Blog pages only -->
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $page->title()->html() ?>" />
<?php if (!$page->og_description()->isEmpty()): ?>
<meta property="og:description" content="<?= $page->og_description()->html() ?>">
<?php else: ?>
<meta property="og:description" content="<?= $page->text()->kirbytext()->excerpt(60) ?>">
<?php endif; ?>
<?php if ($page->files()->count() == 0): ?>
  <meta property="og:image" content="http://seanbuchholz.com/content/og-image.jpg">
  <?php else: ?>
    <?php if (!$page->og_image()->isEmpty()): ?>
    <meta property="og:image" content="<?= $page->og_image()->url() ?>" />
    <?php else: ?>
    <metapropertye="og:image" content="<?= $page->images()->sortBy('sort', 'asc')->first()->url() ?>" />
    <?php endif ?>
<?php endif; ?>
<?php else: ?>
<!-- meta tags for non-Blog pages -->
<meta name="author" content="<?= $site->author()->html() ?>">
<meta name="description" content="<?= $site->description()->html() ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $site->og_title()->html() ?>" />
<meta property="og:description" content="<?= $site->og_description()->html() ?>" />
<meta property="og:image" content="http://seanbuchholz.com/content/og-image.jpg" />
<?php endif; ?>
<meta property="og:site_name" content="<?= $site->og_site_name()->html() ?>">
<meta property="og:url" content="<?= $page->url() ?>" />
<meta property="fb:app_id" content="212344236278303">