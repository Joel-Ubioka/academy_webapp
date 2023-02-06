 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body>
   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>


   <div class="signup_wrapper">

     <div class="signup_container">

       <h2>Login</h2>

       <form action="" method="POST" id="signup_form">

         <div class="input_container">
           <span class="material-symbols-outlined">
             mail
           </span>
           <input type="email" name="email" class="form_input" placeholder="Email" required>
         </div>

         <div class="input_container">
           <span class="material-symbols-outlined">
             lock
           </span>
           <input type="password" name="password" class="form_input" placeholder="Password" required>
           <span class="material-symbols-outlined show_password" title="Show password">
             visibility
           </span>
           <span class="material-symbols-outlined hide_password" title="Hide password">
             visibility_off
           </span>
         </div>


         <button name="submit" class="close_btn">Login</button>

       </form>
       <p>Forgot your password? <a href="#" class="reset_pass_link">Click here</a></p>

       <p>You do not have an account? <a href="signup">Sign Up</a></p>
     </div>


   </div>


   <!-- FOOTER SECTION -->
   <?php require "includes/footer.php";?>
   <nav class="footer_container"></nav>






   <!-- AOS Script -->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
   AOS.init({
     offset: 200,
     duration: 1000,
   });
   </script>

 </body>

 </html>