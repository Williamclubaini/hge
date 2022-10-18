<link rel="stylesheet" href="assets/styles/login.css">

<form method="post" action="<?php echo base_URL("register");?>" id="form" class="validate">
<a href="<?php echo base_URL("home");?>" class="txt-d-none"><- Go Back Home</a>
<div>
  <h2 class="center">User Register</h2>
  <p class="center">Welcome</p>
   <br><br><br>
</div>
<?php

      if (!empty($output)) {?>
      <div>
        <p class="error"><?php echo $this->output['email'] ?? NULL;?></p>
      </div>
      <?php }?>
      <br>
      <div class="form-field">
    <label for="email-input">Firstname</label>
    <input type="text" name="fname" id="email-input" placeholder="dalie" required />
  </div>
  <div class="form-field">
    <label for="email-input">Lastname</label>
    <input type="text" name="lname" id="email-input" placeholder="chetama" required />
  </div>
      <div class="form-field">
    <label for="email-input">Email</label>
    <input type="email" name="email" id="email-input" placeholder="daliechetama@gmail.com" required />
  </div>
  <div class="form-field">
    <label for="password-input">Password</label>
    <input type="password" name="password" id="password-input" placeholder="XXXXXXXXXXXXXXXXXXXX" required />
  </div>
  <div class="form-field">
    <label for=""></label>
    <input type="submit" name="register" value="Sign Up" />
  </div>
<p>already have an account?</p><a href="<?php echo base_URL("Login");?>">Login</a>
 

</form>