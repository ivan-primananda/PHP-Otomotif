<?php 
include 'header.php';
include 'koneksi.php';

$query = "SELECT * FROM interrior";
$rows = mysqli_query($db,$query);
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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="service.php">Service</a></li>
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

<!-- MULAI CONTENT -->
<section class="probootstrap-section">
    <div class="container">
      <div class="row">          
<div class="probootstrap-section-mantap">
  <div class="container">
    <div class="row">
      <div class="probootstrap-animate" data-animate-effect="fadeInLeft"> 
        <h3>Car Interior</h3>
        </div>
        <div class="row">
          <?php
            foreach($rows as $row) {

              ?>
                <div class="col-md-4 probootstrap-animate">
                  <div class="probootstrap-card probootstrap-person text-left">
                  
                    <div class="probootstrap-card-media-size">
                      <figure>
                        <div class="probootstrap-video">
                          <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $row['video'] ?>
                          </div>
                        </div>
                      </figure>
                    </div>

                    <div class="probootstrap-card-text">
                      <h2 class="probootstrap-card-heading mb0"><?php echo $row['nama_pengerjaan'] ?></h2>
                      <p><?php echo $row['keterangan'] ?></p>
                      <p><a href="#">View details</a></p>
                    </div>

                  </div>
                </div>

              <?php


            } 
          ?>
          <div class="col-md-4 probootstrap-animate">
        

          
          
          <!-- <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media-size">
            <figure>
            <div class="probootstrap-video">
              <a href="video/(42) WATTS AUTOMOTIVE - Dealership Video - YouTube.MP4" class="popup-vimeo probootstrap-video-play"><i class="icon-play3"></i></a>
              <img src="image/jesse-collins-629527-unsplash.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive img-border">
            </div>
          </figure>
            </div>
            
        </div> -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- FOOTER -->
<?php
include 'footer.php';
?>