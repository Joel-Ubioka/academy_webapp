<section class="footer_container">
  <div class="footer1">
    <div class="footer_column">
      <div class="logo_container"><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>images/logo.jpg"
            alt=""></a></div>
      <p class="first_footer_p">FLOXI is Your One-Stop, High-End, High-Tech and High-ticket Online Shop for your Luxury
        Products and Services.
      </p>
      <div class="product_details_btn_container">
        <a href="tel: 08035817907"> <button class="open_btn" style="color: white;">Call Us</button></a>
        <a href="#"> <button class="close_btn">Chat Us</button></a>
      </div>
    </div>
    <div class="footer_column get_in_touch">
      <h3>Get in touch</h3>
      <p>
        <span class="material-symbols-outlined">location_on</span>
        <span>Suite B4 (First Floor) Century Mall Plaza, St Patrick's Bus- Stop, Alaba International Market, Ojo, Lagos
          State, Nigeria.</span>
      </p>
      <p>
        <span class="material-symbols-outlined">mail</span>
        <a href="mailto: admin@floxi.com"><span>admin@floxi.com</span></a>
      </p>
      <p>
        <span class="material-symbols-outlined">call</span>
        <a href="tel: 08035817907"><span> 08035817907</span></a>
      </p>
    </div>
    <div class="footer_column quick_links">
      <h3>Quick Links</h3>
      <a href="<?php echo $base_url; ?>">
        <span class="material-symbols-outlined">navigate_next</span>
        <span> Home</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>
        <span>About</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>

        <span>Contact</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>
        <span>Market</span>
      </a>
      <a href="">
        <span class="material-symbols-outlined">navigate_next</span>
        <span>Blog</span>
      </a>
    </div>
    <div class="footer_column">
      <h3>Subscribe</h3>
      <p> To receive our free tutorials and opportunities enter your email below</p>
      <form action="" id="subscribe">
        <input type="email" name="email" class="form_input" placeholder="Enter your email">
        <button class="search_btn">Subscribe</button>
      </form>
      <div class="social_container">
        <h3>Follow Us</h3>
        <?php include "includes/social_icons.php";?>
      </div>
    </div>
  </div>
  <div class="footer2">
    <div class="copyright_container"><span>&copy; Morrhtech Solutions. All rights reserved</span></div>
    <div class="payment_method_container">
      <div class="payment_img_container"><img src="<?php echo $base_url; ?>images/visa.jpg" alt=""></div>
      <div class="payment_img_container"><img src="<?php echo $base_url; ?>images/mastercard.jpg" alt=""></div>
      <div class="payment_img_container"><img src="<?php echo $base_url; ?>images/Paystack.webp" alt=""></div>
    </div>
  </div>
</section>

<?php include "popups/overlay.php";
include "popups/popup.php";
include "popups/toast.php";
include "loading/loading.php";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<!-- <script src="<?php echo $base_url; ?>js/jquery.js"></script> -->
<script src="<?php echo $base_url; ?>js/script.js?ver=<?php echo microtime(); ?>"></script>
<script src="<?php echo $base_url; ?>sliders/slider.js?ver=<?php echo microtime(); ?>"></script>
<script src="<?php echo $base_url; ?>popups/popup.js?ver=<?php echo microtime(); ?>"></script>
<script src="<?php echo $base_url; ?>popups/toast.js?ver=<?php echo microtime(); ?>"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>