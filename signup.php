 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body>
   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>


   <div class="signup_wrapper">

     <div class="signup_container">

       <h1>SignUp</h1>

       <form action="" method="POST" id="signup_form" class="insert_form">
         <div class="input_container">
           <span class="material-symbols-outlined">
             person
           </span>
           <input type="text" name="full_name" class="form_input" placeholder="Full Name" required>
         </div>
         <div class="input_container">
           <span class="material-symbols-outlined">
             mail
           </span>
           <input type="email" name="email" class="form_input" placeholder="Email" required>
         </div>
         <div class="input_container">
           <span class="material-symbols-outlined">
             call
           </span>
           <input type="tel" name="phone_number" class="form_input" placeholder="Phone Number" required>
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
         <div class="input_container">
           <span class="material-symbols-outlined">
             lock
           </span>
           <input type="password" name="confirm_password" class="form_input" placeholder="Confirm Password" required>
           <span class="material-symbols-outlined show_password" title="Show password">
             visibility
           </span>
           <span class="material-symbols-outlined hide_password" title="Hide password">
             visibility_off
           </span>

         </div>

         <button name="submit" class="close_btn">Sign Up</button>

       </form>

       <p class="bottom_text">Already have an account <a href="login">Login</a></p>
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