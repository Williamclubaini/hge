<?php
sleep(2);

?>
<nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="<?php echo base_URL('home');?>">Home</a></li>
              <li><a href="<?php echo base_URL('info');?>">Information</a></li>
              <li><a href="<?php echo base_URL('search');?>">Wanted</a></li>
              <li><a href="<?php echo base_URL('services');?>">Workshop</a></li>
              <li><a href="<?php echo base_URL('products');?>">Our Products</a></li>
              <li><a href="<?php echo base_URL('contact');?>">Contact</a></li>
              <li><a href="<?php echo base_URL('review');?>">Featured</a></li>
          </ul>
          <h1 class="logo"><img src="assets/images/log.jpg" height="40px" alt=""></h1>
      </div>
  </nav>
