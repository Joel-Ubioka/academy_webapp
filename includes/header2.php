 <!-- TOP BAR SECTION -->
 <section class="top_bar">
   <div class="logo_container"><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>images/logo.jpg"
         alt=""></a></div>
   <div class="search_container">
     <form action="" id="search_form">
       <button name="search_btn" class="search_btn">
         <ion-icon name="search-outline"></ion-icon>
       </button>
       <input type="text" class="form_input" name="search" id="search" placeholder="Search for products">
       <?php include "includes/search_dropdown.php";?>
     </form>
   </div>
   <div class="contact_container">
     <span class="material-symbols-outlined phone_icon">call</span>
     <a href="tel:  08035817907"> 08035817907</a>
   </div>
 </section>

 <!-- NAVBAR SECTION -->
 <nav class="nav_bar">
   <?php
// SHOW CATEGORY IF IT EXIST
if (!$category_obj->is_categories_empty()) {

    ?>
   <div class="category_menu_container">
     <div class="category_content">
       <span class="material-symbols-outlined ">menu</span>
       <b id="courses_menu">
         <span>Categories</span>
       </b>
     </div>
     <span class="material-symbols-outlined category_dropdown ">expand_more</span>
     <?php include "includes/category_menu.php";?>
   </div>
   <?php
}

?>
   <div class="nav_icons_container">
     <div class="nav_icons">
       <a href="#" class="search_icon">
         <span class="material-symbols-outlined">search</span>
       </a>

       <!-- <a href="#">
         <span class="material-symbols-outlined">favorite</span>
         <div class="item_container">0</div>
       </a> -->

       <a href="<?php echo $base_url; ?>cart">
         <span class="material-symbols-outlined">shopping_cart</span>
         <div class="item_container">0</div>
       </a>

       <a href="<?php echo $base_url; ?>signup" class="reg_btn">
         <button class="close_btn">Sign Up</button>
       </a>

       <a href="<?php echo $base_url; ?>login">
         <button class="open_btn">Login</button>
       </a>
     </div>
   </div>

 </nav>