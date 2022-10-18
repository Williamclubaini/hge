
<section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title white" id="home"><?php echo $data['header'] ?? 'Welcome To Home Gym Equipment';?></h1>
        <p class="white"><?php echo $_SESSION['user'] ?? 'Hi, Guest';?>.</p>
        <?php
        if(isset($data) && !isset($_SESSION['user'])){?>
            <?php  if($data['btn'] == TRUE){?>
                  <a href="<?php echo base_URL('Login');?>" class="btn btn-primary">Sign In</a>
        <?php }?>
        <?php }?>

        <?php 
             if (isset($_SESSION['user'])) {?>
              <a href="<?php echo base_URL('home&logout');?>" class="btn btn-primary">Log Out</a>
             <?php }?>
      </div>
    </section>