    <!-- <header>
      <img src="<?php echo base_url("images/footer-banner.jpg"); ?>" alt="banner iklan header">
    </header> -->
    <nav class="navbar navbar-default bgc-black border-none" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>" style="display:table;">
            <!--<img src="<?php echo base_url("images/logodepanamanah_crop.png") ?>" alt="amanahdagang.com website logo depan"> -->
            <img width="160px" src="<?php echo base_url("images/amanahstores logo FULL.png") ?>" alt="amanahstores.com website logo belakang">
          </a>
        </div>
      </div>
    </nav>
    <div class="container-fluid search-clr" >
      <span style="color:white;">Semua Provinsi - <a href="<?php echo base_url("provinsi") ?>" style="color:#d68b3e">Pilih Provinsi</a></span>
      <div style="margin-bottom:10px;"></div>
      <?php echo form_open(base_url("allresult_mobile")); ?>
        <input class="form-control" type="text" name="sedang-mencari-barang" placeholder="Iklan disekitar kita" style="float:left;text-align:left;width:85%;">
        <button class="btn btn-primary _btn_std pull-right" type="submit">Cari</button>
      <?php echo form_close(); ?>
      <a href="<?php echo base_url('home/mobile-pasang-iklan'); ?>" class="btn btn-primary _btn_std pasang_iklan">Pasang Iklan</a>
    </div>
    <section class="container-fluid menu-container">
      <?php //print_r($_SERVER);?>
      <ul class="container-sidenav">
        <li>
          <ul class="left-navigation">
            <li><a href="<?php echo base_url() ?>mkategori/">Semua Kategori</a></li>
            <?php
            $data = $this->iklan_model->get_kategori();
            $class = [
              'properti' => 'fa-home material-red',
              'mobil' => 'fa-car material-blue',
              'motor' => 'fa-motorcycle material-violet',
              'fashion' => 'fa-shopping-bag material-blue',
              'mobile' => 'fa-mobile material-green-grass',
              'komputer' => 'fa-laptop material-blue',
              'travel' => 'fa-suitcase material-orange',
              'kitchen' => 'fa-cutlery material-blue',
              'makanan' => 'fa-lemon-o material-orange',
              'kesehatan' => 'fa-heart material-red',
              'service' => 'fa-handshake-o material-tea',
              'lowongan-kerja' => 'fa-user material-green-old',
              'lainnya' => 'fa-ellipsis-h material-grey'];
            ?>
            <?php foreach ($data as $value): ?>
              <li><a href="<?php echo base_url("mkategori/".lcfirst($value['nama_kategori'])) ?>">
                <span class="fa <?php echo $class[lcfirst($value['nama_kategori'])] ?>" aria-hidden="true"></span>
                <?php echo $value['nama_kategori'] ?>
              </a></li>
            <?php endforeach; ?>
          </ul>
        </li>
      </ul>
    </section>
    <section class="container-fluid">
      <h3 style="color:#f57c00;">#JualBekasBisaJadiDuit</h3>
      <ul class="iklanku">
        <?php $path_fitur = base_url("../images/post_foto_feature/"); ?>
        <?php foreach ($this->iklan_model->get_all_iklan_limit('6') as $new_ads) : ?>
          <li>
            <a href="<?php echo base_url("isiiklan/".$new_ads['slug_nama_barang']) ?>">
              <img src="<?php echo (empty($new_ads['gambar_fitur'])) ? base_url('images/src_img_default/center.jpg') : $path_fitur.$this->welcome_mob->tanggal_indonesia_convert(date('Y-m-d-N', strtotime($new_ads['barang_upload_tgl']))).$new_ads['gambar_fitur'] ?>" alt="">
              <div style="padding:12px;">
                <div class="judul-iklan" style="font-weight:bold;">
                  <?php echo $new_ads['nama_barang'] ?>
                </div>
                <div class="harga-iklan">
                  <?php echo (empty($new_ads['harga_barang']) ? '<div></div>' : "Rp. ".$new_ads['harga_barang'])?>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
    <br>
