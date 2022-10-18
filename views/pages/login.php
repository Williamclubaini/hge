<link rel="stylesheet" href="assets/styles/login.css">

<form method="post" action="<?php echo base_URL("login");?>" id="form" class="validate">
<a href="<?php echo base_URL("home");?>" class="txt-d-none"><- Go Back Home</a>
<div>
  <h2 class="center">User Login</h2>
  <p class="center">Welcome</p>
   <br><br><br>
</div>
<?php

      if (!empty($output)) {?>
      <div>
        <p class="error"><?php echo $this->output['name'] ?? NULL;?></p>
        <p class="error"><?php echo $this->output['pass'] ?? NULL;?></p>
      </div>
      <?php }?>
      <br>
  <div class="form-field">
    <label for="email-input">Username</label>
    <input type="text" name="name" id="email-input" placeholder="dalie" required />
  </div>
  <div class="form-field">
    <label for="password-input">Password</label>
    <input type="password" name="password" placeholder="XXXXXXXXXXXXXX" id="password-input" required />
  </div>
  <div class="form-field">
    <label for=""></label>
    <?php
         if (isset($this->output['lock']) && $this->output['lock'] == true) {?>
          <script type="text/javascript">
                setTimeout(function() {
                    window.location.assign("http://localhost/hge/index.php?page=login");
                }, 600000)
                </script>
          <input type="submit" name="login" value="LOCKED" disabled>
         <?php } else {?>
          <input type="submit" name="login" value="Sign in" />
         <?php }?>
        
  </div>
<br><br><br><br>
<p>Do you have an account?</p><a href="<?php echo base_URL("register");?>">Register</a>
 

</form>