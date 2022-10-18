<?php
if (isset($data['items']) && isset($_SESSION['user']) ){?>

<?php if (!empty($data['items'])) {?>

<section id="food">
      <h2>results found...</h2>
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



<?php } elseif (empty($data['items'])) {?>
<section id="food"> 
<h3>no results found...</h3>
</section>

<?php } 

?>
<?php }?>
<br><br><br>