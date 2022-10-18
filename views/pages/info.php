
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
<section id="testimonials">
      <h2 class="testimonial-title">Latest Fitness Information</h2>
      <div class="testimonial-container container">
        
        <div class="testimonial-box">
          <p class="testimonial-text">
            Fitness helps you feel better and have more energy for work and leisure time. You'll feel more able to do things like playing with your kids, gardening, dancing, or biking. Children and teens who are fit may have more energy and better focus at school.

When you stay active and fit, you burn more calories, even when you're at rest. Being fit lets you do more physical activity. And it lets you exercise harder without as much work. It can also help you manage your weight.

Improving your fitness is good for your heart, lungs, bones, muscles, and joints. And it lowers your risk for falls, heart attack, diabetes, high blood pressure, and some cancers. If you already have one or more of these problems, getting more fit may help you control other health problems and make you feel better.

Being more fit also can help you to sleep better, handle stress better, and keep your mind sharp..
          </p>
         
        </div>
        
        
      </div>
    </section>