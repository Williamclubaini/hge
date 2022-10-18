  

<link rel="stylesheet" href="assets/styles/slider.css">
    <section id="about">
      <form class="form-search" method="POST" action="<?php echo base_URL('home');?>">
        <input type="search" name="search" placeholder="search for your equipment..">
        <button type="submit" name="find">Search</button>
      </form>
    </section>
    
    
    <section id="about">
      <div class="about-wrapper container">  
      
      <div class="about-text">
        <div id="slider">
            <figure>
            <img src="assets/images/15.jpg" alt>
            <img src="assets/images/16.jpg" alt>
            <img src="assets/images/17.jpg" alt>
            <img src="assets/images/15.jpg" alt>
            <img src="assets/images/16.jpg" alt>
            </figure>
        </div>
      </div>

      <div class="about-img video">
      <img src="assets/images/slider.jpg" alt>
        </div>

        </div>
    
    </section>

    </section>
    <!-- video1 -->
    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
          <p class="small">2022</p>
          <h2>We've been focusing on body fitness for the last 10 years</h2>
          <p>
          Regular physical activity can improve your muscle strength and boost your endurance. Exercise delivers oxygen and nutrients to your tissues and helps your cardiovascular system work more efficiently. And when your heart and lung health improve, you have more energy to tackle daily chores.
          </p>
        </div>
        <div class="about-img video">
            <video src="assets/videos/1.mp4" muted loop autoplay></video>
        </div>
      </div>
    </section>
    <!-- Video2 -->
    <section id="about">
      <div class="about-wrapper container">
        
        <div class="about-img video">
            <video src="assets/videos/2.mp4" muted loop autoplay></video>
        </div>

        <div class="about-text">
          <p class="small">HGE</p>
          <h2>We are still focus on body fitness</h2>
          <p>
          Going to the gym and being surrounded by motivated people can encourage you to stay on track. Plus, having somewhere to go sounds more appealing then working out in the park or in your living room.
          </p>
        </div>
        
      </div>
    </section>

  


    
    
    <section id="food">
      <h2>Latest Products</h2>
      <div class="food-container container">
        <?php foreach($data['items'] as $item){?>
        <div class="food-type grin">
          <div class="img-container">
            <img src="assets/images/<?php echo $item->img;?>.jpg" alt="error" />
            <div class="img-content">
              <h3><?php echo $item->pname;?></h3>
              <h4 class="white"><?php echo 'MK'.number_format($item->price, 2);?></h4>
              <h6 class="white"><?php echo $item->description;?></h6>
            </div>
          </div>
          
          <a href="#" 
          
          <?php 
          
        if (isset($_SESSION['user'])) {?>
          onclick="alert('successfully add to cart');" 
        <?php } else {?>
          onclick="alert('you are required to login');" 
        <?php }
        

          ?>
          
          
          class="btn btn-primary">Add To Cart</a>
        </div>
        <?php }?>
      </div>
    </section>


    <section id="about" class="count-box">
      <div class="about-wrapper container">
        <div class="about-text count-content">
        <div class="col-12">
              <h1 class="pb-3">Number of Visitors</h1>
            </div>
            <div class="col-md-4">
              <span id="count1" class="display-4">+</span>
            </div>
        </div>
      </div>
    </section>
    <script src="assets/js/counter.js"></script>