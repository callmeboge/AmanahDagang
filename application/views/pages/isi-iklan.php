<div class="bungkus">
  <section class="detail-barang">
    <ol class="breadcrumb">
      <li>
        <a href="#">Home</a>
      </li>
      <li class="active">Mobil</li>
    </ol>

    <div class="judul-barang">
      <h2><?php echo $iklan[0]['nama_barang'] ?></h2>
      <h2><?php echo $iklan[0]['harga_barang'] ?></h2>
    </div>

    <div class="slide-barang">
      <div class="gambar-gambar">
        <img src="<?php echo base_url()?>images/post_foto_feature/<?php echo $iklan[0]['gambar_fitur'] ?>"  class="img-responsive" alt="foto">
      </div>
      <?php
        $explode_string = explode(',',$iklan[0]['gambar_barang']);
        foreach ($explode_string as $slide_gambar) { ?>
          <div class="gambar-gambar">
            <img src="<?php echo base_url()?>images/post_foto_ikl/<?php echo $slide_gambar ?>"  class="img-responsive" alt="foto">
          </div>
        <?php } ?>

      <a class="arah-kiri" onclick="plusDivs(-1)">&#10094;</a>
      <a class="arah-kanan" onclick="plusDivs(1)">&#10095;</a>
    </div>

    <div class="deskripsi-barang">
      <h3>Detail Barang</h3>
      <p><?php echo $iklan[0]['deskripsi_barang'] ?></p>
      <p>
        Hati-hati dengan penipuan. Bertemu langsung dengan penjual adalah cara aman berbelanja.
      </p>
    </div>
  </section>
  <aside class="iklan-barang">
    <div class="bungkus-penjual">
      <div class="foto-penjual">
        <img src="<?php echo base_url() ?>images/gambar.jpg" class="img-responsive" alt="foto">
      </div>
      <div class="identitas-penjual">
        <h3>IDENTITAS DIRI : </h3>
        <h4>Abdul Wahid APP</h4>
        <h4>Makassar</h4>
        <h4>081343873552</h4>
      </div>
      <div class="tombol-penjual">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pesan">Kirim Pesan</button>
      </div>

      <div class="modal fade" id="pesan" role="dialog">
          <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                  <input type="text" name="email" placeholder="Email">
                  <input type="text" name="password" placeholder="Password">
                  <button type="button" class="btn btn-primary">Masuk</button>
              </div>
              <div class="modal-footer">
                <h4>Belum Punya Akun ? Silahkan <a href="#">Mendaftar</a></h4>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>

          </div>
        </div>

      <div class="sosmed-penjual">
        <p>Bagikan :</p>
        <a href="#" title="Twitter">
          <img src="<?php echo base_url() ?>images/twitter.svg" alt="">
        </a>
        <a href="#" title="Facebook">
          <img src="<?php echo base_url() ?>images/facebook.svg" alt="">
        </a>
        <a href="#" title="Google+">
          <img src="<?php echo base_url() ?>images/google-plus.svg" alt="">
        </a>
      </div>
    </div>

    <div class="bungkus-detail">
      <div class="detail-kategori">
        <i class="fa fa-tags" aria-hidden="true"></i>
        <div class="kata">
          <p>Kategori</p>
          <p><?php echo $iklan[0]['nama_kategori'] ?></p>
        </div>
      </div>
      <div class="detail-waktu">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <div class="kata">
          <p>Ditambahkan</p>
          <p>2 Jan 2017</p>
        </div>
      </div>
      <div class="detail-lokasi">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <div class="kata">
          <p>Lokasi</p>
          <p>Makassar</p>

        </div>
      </div>
      <div class="detail-view">
        <i class="fa fa-eye" aria-hidden="true"></i>
        <div class="kata">
          <p>Views</p>
          <p><?php echo $iklan[0]['view_barang'] ?></p>
        </div>
      </div>
<!-- 				<div class="detail-rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <div class="kata">
          <p>Rating</p>
          <p>5</p>
        </div>
      </div> -->
    </div>

    <div class="bungkus-iklan">
      <img src="<?php echo base_url() ?>images/gambar.jpg" class="img-responsive" alt="iklan">
    </div>
  </aside>
</div>
