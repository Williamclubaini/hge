<link rel="stylesheet" href="assets/styles/rssfeed.css">
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


    <section id="food">
    <h2>RSS Feed</h2>
    <small>Monday, October 12, 2022</small>
      <div class="food-container container">
      
      <div data-simply-list="news" data-simply-data="newsList">
  <template>
    <div class="small article">
      <a href="#" data-simply-field="link" data-simply-content="fixed">
        <h5 data-simply-field="title">title</h5>
      <img src="" data-simply-field="enclosure.link">
    </a>
    </div>
  </template>
</div>
	<script src="https://cdn.simplyedit.io/1/simply-edit.js"
		data-api-key="codepen" 
		></script>
      </div>
    </section>
    <script src="assets/js/rssfeed.js"></script>