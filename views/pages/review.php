<br><br><br><br>

<section class="container">
    <header class="txt-center">
        <h3>Wearable Technology</h3>
        <p>Let's get this conversation started. <br>Tell us a little bit about yourself and we will get in touch as soon as we can.</p>
    </header>
</section>

<br><br><br><br><br>


<div class="flex">
      <div class="item">

      <section id="food">
      <h2>Latest Products</h2>
      <p>Top 3 Featured Products</p>
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


      </div>


      <div class="item">
        <section id="food">
        <h2 class="fs20">Wearable Technology Categories</h2>
        <div class="txt-center">
        <a class="txt-d-none" href="<?php echo base_URL('smartwatch')?>">Smart Watch</a>
        <br>
        <a class="txt-d-none" href="<?php echo base_URL('smartglasses');?>">Smart Glasses</a>
        <br>
        <a class="txt-d-none" href="<?php echo base_URL('smartring');?>">Smart Ring</a>
        </div>
        
        </section>
      </div>
</div>



