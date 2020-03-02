<?php
include 'header.php';
?>

<!-- MULAI HEADER -->
<div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.php" class="probootstrap-logo">Garuda<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="service.php">Service</a></li>
            <!-- <li><a href="#">Gallery</a></li> -->
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
          <div class="extra-text visible-xs" hidden> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>Jl. Danau Kerinci E1 C 23/24 Sawojajar, Malang, Jawa Timur, Indonesia</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- AKHIR HEADER -->

  <!-- MULAI SECTION CAROUSEL -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(image/peter-broomfield-239413-unsplash.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Garuda Autozone</h2>
                <p><a href="https://wa.me/62895333777645?text=Hai%2C%20saya%20mau%20konsultasi%20masalah%20mobil.%20Gimana%20caranya%3F%20Terima%20Kasih%F0%9F%98%8A" target="_blank" class="btn btn-primary">Book Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(image/kevin-bhagat-753720-unsplash.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Garuda Autozone</h2>
                <p><a href="https://wa.me/62895333777645?text=Hai%2C%20saya%20mau%20konsultasi%20masalah%20mobil.%20Gimana%20caranya%3F%20Terima%20Kasih%F0%9F%98%8A" target="_blank" class="btn btn-primary">Book Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(image/jesse-collins-629527-unsplash.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Garuda Autozone</h2>
                <p><a href="https://wa.me/62895333777645?text=Hai%2C%20saya%20mau%20konsultasi%20masalah%20mobil.%20Gimana%20caranya%3F%20Terima%20Kasih%F0%9F%98%8A" target="_blank" class="btn btn-primary">Book Now</a></p>
              </div>
            </div>
          </div>
        </div> 
      </li>
    </ul>
  </section>
  <!-- AKHIR SECTION CAROUSEL  -->

  <!-- MULAI SECTION CARD CONTENT -->
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
              <i class="icon-gears"></i>
            </div>
            <div class="text">
              <h3 class="heading">Our Service</h3>
              <p>Garuda AutoZone Memberikan Layanan Kepada Anda yang Ingin Merawat Kendaraan Anda Mulai dari Service Mesin, Audio, AC, Hingga Layanan Salon dan Cuci Mobil.</p>
              <p><a href="service.php">Learn more</a></p>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-video"></i>
            </div>
            <div class="text">
              <h3 class="heading">Tips & Trick</h3>
              <p>Untuk Anda yang Membutuhkan Tips & Trick Merawat Kendaraan Anda Agar Tetap Prima dan Terlihat Menarik.</p>
              <p><a href="tips.php">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-wallet2"></i>
            </div>
            <div class="text">
              <h3 class="heading">Benefit</h3>
              <p>Keuntungan yang Bisa Anda Dapatkan Jika Menjadi Costumer Kami.</p>
              <p><a href="benefit.php">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- AKHIR SECTION CARD CONTENT -->

  <!-- MULAI PENJELASAN PERUSAHAAN -->
  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Garuda Auto
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Garuda AutoZone adalah layanan perbengkelan dibawah Koperasi Pegawai PT. TELKOM Indonesia Malang (KOPEGTEL Malang) yang berdiri pada tahun 1998.</p>              
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Visi
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>Menjadi Koperasi yang mandiri, berprestasi, mempunyai managemen yang profesional dan kompetitif dalam  berbisnis.</p>                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Misi
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>1.	Melakukan pengembangkan usaha  secara profesional, demi mencapai Sustainable Growth dan mengedepankan kepercayaan pelanggan<br>
          2.	Menjadikan Kopegtel Malang sebagai badan usaha yang mampu bertahan ditengah iklim perubahan usaha yang berkembang cepat, kompetitif dengan terus melakukan innovasi dan diversifikasi usaha<br>
          3.	Melakukan pengelolaan  Bisnis Koperasi secara  prima, kompetitif menjadi koperasi yang sehat & berprestasi<br>
          4.	Memberikan kesejahteraan kepada anggota, karyawan dan Stake Holder</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">

          <figure>
            <div class="probootstrap-video">
              <a href="video/(42) WATTS AUTOMOTIVE - Dealership Video - YouTube.MP4" class="popup-vimeo probootstrap-video-play"><i class="icon-play3"></i></a>
              <img src="image/jesse-collins-629527-unsplash.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive img-border">
            </div>
          </figure>

        </div>
      </div>
    </div>
  </div>
  <!-- AKHIR PENJELASAN PERUSAHAAN -->
  
  <!-- MULAI SECTION GALLERY -->
  <!-- 
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading probootstrap-animate">
          <h2>Gallery</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="#"><img src="image/jesse-collins-629527-unsplash.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="#"><img src="image/kevin-bhagat-753720-unsplash.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="#"><img src="image/peter-broomfield-239413-unsplash.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- AKHIR SECTION GALERY -->

  <!-- FOOTER -->
  <?php
    include 'footer.php'; 
  ?>


  </body>
</html>