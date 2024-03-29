<section class="container-fluid" style="padding:0;">
  <div class="navigation-bottom">
    <a href="<?php echo base_url('home/mobile-pasang-iklan') ?>">Pasang Iklan</a>
    <a href="<?php echo base_url('home/mobile-akun-saya') ?>">Akun Saya <?php echo (! empty($this->session->userdata('user_name'))) ? "(".$this->session->userdata('user_name').")" : ""; ?></a>
    <?php if (! empty($this->session->userdata('user_email'))): ?>
      <a href="<?php echo base_url('signout') ?>">Keluar</a>
    <?php endif; ?>
    <a href="">Pusat Bantuan</a>
  </div>
</section>
<br>
<footer>
  <!-- <img src="<?php echo base_url("images/AMANAH_WHITE_2850x650.png") ?>" alt=""> -->
  <div class="social-media">
    <a href="https://www.facebook.com/profile.php?id=100019591120282" target="_blank">
      <div class="sprite-media facebook"></div>
    </a>
    <a href="https://plus.google.com/u/0/109458552857548437750" target="_blank">
      <div class="sprite-media googleplus"></div>
    </a>
    <a href="https://twitter.com/amanahstores" target="_blank">
      <div class="sprite-media twitter"></div>
    </a>
    <!-- <a href="#">
      <div class="sprite-media youtube"></div>
    </a> -->
    <a href="https://www.linkedin.com/in/amanah-stores-7630a8147/" target="_blank">
      <div class="sprite-media linkedin"></div>
    </a>
  </div>
</footer>
  <script src="<?php echo base_url("web/bower_components/jquery/dist/jquery.min.js")?>" charset="utf-8"></script>
  <!-- <script src="<?php echo base_url("web/bower_components/jquery_lazyload/jquery.lazyload.js") ?>" charset="utf-8"></script> -->
  <script src="<?php echo base_url("web/js/bootstrap.min.js") ?>" charset="utf-8"></script>
  <script src="<?php echo base_url("web/js/jquery.maskMoney.min.js") ?>" charset="utf-8"></script>
  <script src="<?php echo base_url('web/bower_components/masonry/dist/masonry.pkgd.min.js') ?>" charset="utf-8"></script>
  <script src="<?php echo base_url('web/js/slideImages.js') ?>" charset="utf-8"></script>
  <script src="<?php echo base_url('web/js/FormatCur.js') ?>" charset="utf-8"></script>
  <script src="<?php echo base_url('web/js/Region.js') ?>" charset="utf-8"></script>
  <?php $this->load->view('analyticstracking'); ?>
  <script type="text/javascript">
    $(window).scroll(function() {
      /* Act on the event */
      var body = $('body') ;
      if (body.scrollTop() > 73) {
          body.addClass('fixed-social'); }
        else {
          body.removeClass('fixed-social'); }
    });
    $("#harga_iklan").maskMoney({thousands: '.', decimal: ',', precision: 0});
    $(".grid").masonry({
      itemSelector: '.grid-item'
    });
    $(".alert").alert();
  </script>
</body>
</html>
