  </div> <!-- End Content Wrap -->

  <footer>

    <div class="social-links">
      <h6>Follow me on Facebook!</h6>
      <p>
        <a href="http://www.facebook.com/candymountainmusic">
          <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a>
      </p>
    </div>

    <div class="email">
      <h6>Any questions?</h6>
      <p class="font_8">Email :
        <a class="auto-generated-link" data-auto-recognition="true" data-content="candymountainmusic@gmail.com" href="mailto:candymountainmusic@gmail.com" data-type="mail">candymountainmusic@gmail.com</a>
      </p>
    </div>

    <div class="quick-links">
      <h6>quick links</h6>

          <?
            $a = new Area('Footer_Block');
            $a->display($c);
          ?>

    </div>



  </footer>



  <!-- Scripts -->


  <!-- End Scripts -->

</div> <!-- Concrete5 Side Bars End -->

<?= Loader::element('footer_required'); ?>

</body>
</html>
