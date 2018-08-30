<footer class="content page-footer">

  <ul class="legal" role="contentinfo">
    <li><?php echo html::decode($site->copyright()->kirbytext()) ?></li>
    <li><a href="/privacy">Privacy Policy</a></li>
    <li><a href="/terms-of-use">Terms of Use</a></li>
    <li><a href="/disclaimer">Disclaimer</a></li>
    <li><a href="/humans.txt"><img src="<?= $site->image("humanstxt-isolated-blank.gif")->url() ?>" alt="Humans.txt Logo"></a></li>
  </ul>

  <ul class="social">
    <li class="social-link"><a href="https://www.twitter.com/seanmbuchholz"><span class="fa fa-twitter social-link-logo"> </span><span class="screen-reader-text">Twitter</span></a></li>
      <li class="social-link"><a href="www.linkedin.com/in/seanbuchholz"><span class="fa fa-linkedin social-link-logo"> </span><span class="screen-reader-text">LinkedIn</span></a></li>
      <li class="social-link"><a href="https://www.facebook.com/seanbuchholzweb"><span class="fa fa-facebook-f social-link-logo"> </span><span class="screen-reader-text">Facebook</span></a></li>
  </ul>

  <section class="contact-me" id="contact">
    <h3 class="contact-title">Let's get in touch</h3>
    <form class="contact-form" role="form" action="https://formspree.io/hi@seanbuchholz.com" method="post">
      <div class="contact-name">
        <label for="name">Name</label>
        <input type="text" class="contact-name-field" name="name" id="name" placeholder="ex. Jon Snow">
      </div>

      <div class="contact-email">
        <label for="email">Email</label>
        <input type="email" class="contact-email-field" name="email" id="email" placeholder="LdCmdr@NightsWatch.gov">
      </div>

      <div class="contact-message">
        <label for="Message">Message</label>
        <textarea name="message" class="contact-message-field" id="message" rows="8" cols="80" placeholder="Winter is coming&hellip;"></textarea>
      </div>
      <input type="hidden" name="_next" value="/thank-you">
      <div class="contact-buttons">
        <button type="reset" name="reset" class="contact-button contact-button-reset">Reset <span class="fa fa-undo"></span></button>
        <button type="submit" name="button" class="contact-button contact-button-submit">Submit <span class="fa fa-paper-plane-o"></span></button>
      </div>

    </form>
  </section>

</footer>
<?php snippet('f-analytics') ?>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4645331.js"></script>
</body>

</html>