
    <section id="about">
      <form class="form-search" method="POST" action="#">
        <input type="search" name="search" placeholder="search for your equipment..">
        <button <?php 
          
          if (!isset($_SESSION['user'])) {?>
            onclick="alert('you are required to login');" 
          <?php } ?> type="submit" name="find">Search</button>
      </form>
    </section>