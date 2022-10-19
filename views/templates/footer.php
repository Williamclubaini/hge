<link rel="stylesheet" href="assets/styles/social.css">
<footer id="footer">
<div class="social-menu">
<h2 style="font-size: 13px!important;">Follow Us:</h2>
        <ul>
            <li><a href="#"><i class="bi bi-facebook fab"></i></i></a></li>
            <li><a href="#"><i class="bi bi-twitter fab"></i></i></a></li>
            <li><a href="#"><i class="bi bi-whatsapp fab"></i></i></a></li>
        </ul>
    </div>
      <h2 style="font-size: 13px!important;">Home Gym Equipment &copy; All Rights Reserved</h2>
    </footer>
  </body>
  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $("html, body").animate(
            {
              scrollTop: $(hash).offset().top,
            },
            800,
            function () {
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            }
          );
        } // End if
      });
    });
  </script>
</html>
