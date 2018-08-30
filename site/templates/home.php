<?php snippet('header') ?>

<main class="content" role="main">

  <article class="lead-feature">
    <h1 class="feature-headline"><?= $page->intro()->html() ?></h1>
    <?php if ($image = $site->image('hero.svg')): ?>
    <img class="feature-graphic" src="<?= $image->url() ?>" alt="Illustration of a computer on a desk, surrounded by office supplies">
    <?php endif ?>
    <div class="feature-copy">
      <?= $page->text()->kirbytext() ?>
    </div>
    <script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script><script type="text/javascript">
        var JFL_81893802521155 = new JotformFeedback({
          formId: '81893802521155',
          base: 'https://form.jotform.com/',
          windowTitle: 'Design Quote',
          background: '#FFA500',
          fontColor: '#FFFFFF',
          type: 'false',
          height: 500,
          width: 700,
          openOnLoad: false
        });
    </script>
      <a class="button cta btn lightbox-81893802521155">
        Get Your Free Quote
      </a>
  </article>
  <hr>
  <?php snippet('showcase', ['limit' => 3]) ?>

  <hr>
</main>

<?php snippet('footer') ?>