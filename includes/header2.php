 <!-- TOP BAR SECTION -->
 <section class="top_bar">
   <div class="logo_container"><a href="<?php echo $base_url; ?>"><img src="images/logo.png" alt=""></a></div>
   <div class="search_container">
     <form action="" id="search_form">
       <input type="text" class="form_input" name="search" id="search" placeholder="Search for products">
       <button name="search_btn" class="search_btn">Search</button>
     </form>
   </div>
   <div class="contact_container">
     <span class="material-symbols-outlined phone_icon">call</span>
     <b> +234 704 928 719</b>
   </div>
 </section>

 <!-- NAVBAR SECTION -->
 <nav class="nav_bar">
   <div class="category_menu_container">

     <div class="category_content">
       <span class="material-symbols-outlined ">menu</span>
       <b id="courses_menu">
         <span>Courses</span>
       </b>
     </div>
     <span class="material-symbols-outlined category_dropdown ">expand_more</span>
     <?php include "includes/category_menu.php";?>
   </div>

   <div class="nav_icons_container">
     <div class="nav_icons">
       <a href="#" class="search_icon">
         <span class="material-symbols-outlined">search</span>
       </a>
       <a href="#">
         <span class="material-symbols-outlined">favorite</span>
         <div class="item_container">0</div>
       </a>

       <a href="cart">
         <span class="material-symbols-outlined">shopping_cart</span>
         <div class="item_container">0</div>
       </a>
     </div>
   </div>

 </nav>