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
            <li><a href="service.php">Service</a></li>
            <!-- <li><a href="#">Gallery</a></li> -->
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
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

  <!-- MULAI SECTION -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(image/peter-broomfield-239413-unsplash.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Contact</h2>
                <p>Contact Us</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- AKHIR SECTION -->

  <!-- MULAI SECTION -->
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form action="pesan.php" method="post" class="probootstrap-form mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h4>Contact Details</h4>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i> <span>Malang, Jawa Timur, Indonesia.</span></li>
            <li><i class="icon-mail"></i><span>ivanprimananda10@gmail.com</span></li>
            <li><i class="icon-phone2"></i><span>0341 719191</span></li>
          </ul>

          <div hidden>
          <h4>Feedback</h4>
          <p></p>
          <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </section> 

  <!-- MULAI MAP -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1975.6110965429386!2d112.6614615!3d-7.975972700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285ea0a1fefd%3A0x2856b6adf906fb54!2sGaruda+Auto+Zone!5e0!3m2!1sid!2sid!4v1550202235053" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  <!-- AKHIR MA -->

  <!-- FOOTER -->
  <?php
  include 'footer.php';
  ?>