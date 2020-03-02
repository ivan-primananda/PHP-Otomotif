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
<section class="page-title">
    <div class="container">
      <!-- <div class="row">
        <div class="col-md-12 section-heading"> -->
          <center><h2>OUR SERVICE</h2></center>
        <!-- </div>
      </div> -->
    </div>
</section>
<section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="audioserv.php"><img src="image/ingo-schulz-714403-unsplash.jpg" class="img-responsive img-border"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Car's Audio</h2>
              <p class="category">Sound System</p>
              <p>Penjelasan tentang project bengkel tentang audio mobil</p>
              <p><a href="audioserv.php">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="acserv.php"><img src="image/julian-hochgesang-1144603-unsplash.jpg" class="img-responsive img-border"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Car's Cooler</h2>
              <p class="category">Cooler</p>
              <p>Penjelasan tentang project bengkel tentang ac</p>
              <p><a href="acserv.php">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="mekanikserv.php"><img src="image/neonbrand-717862-unsplash.jpg" class="img-responsive img-border"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Mechanic</h2>
              <p class="category">Engine</p>
              <p>Penjelasan tentang project bengkel tentang ac</p>
              <p><a href="mekanikserv.php">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="interiorserv.php"><img src="image/daniel-von-appen-285978-unsplash.jpg" class="img-responsive img-border"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Car's Interior</h2>
              <p class="category">Cleaning</p>
              <p>Penjelasan tentang project bengkel tentang kebersihan interior</p>
              <p><a href="interiorserv.php">View details</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- AKHIR CONTENT -->

  <?php 
  include 'footer.php';
  ?>