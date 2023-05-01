 <!-- HEADER SECTION -->
 <?php require "includes/header_dashboard.php";?>

 <body>
   <div class="container">
     <!-- NAVIGATION SECTION -->
     <div class="navigation">
       <ul>
         <li>
           <a href="#" data-url='includes/dashboard.php'>
             <span class="icon logo_container"><img src="images/logo.png" alt=""></span>
             <span class="title">Morrhtech Solutions</span>
           </a>
         </li>

         <li>
           <a href="#" data-url='includes/dashboard.php'>
             <span class="icon">
               <ion-icon name="home-outline"></ion-icon>
             </span>
             <span class="title">Dashboard</span>
           </a>
         </li>

         <li>
           <a href="#" data-url='includes/insert_product.php'>
             <span class="icon">
               <ion-icon name="person-outline"></ion-icon>
             </span>
             <span class="title">Profile</span>
           </a>
         </li>

         <li>
           <a href="#" data-url='includes/insert_product.php'>
             <span class="icon">
               <ion-icon name="people-outline"></ion-icon>
             </span>
             <span class="title">Users</span>
           </a>
         </li>

         <li>
           <a href="#" class="dropdown_menu">
             <span class="icon">
               <ion-icon name="bag-handle-outline"></ion-icon>
             </span>
             <span class="title">Products</span>
             <span class="dropdown_icon">
               <ion-icon name="chevron-down-outline"></ion-icon>
             </span>
           </a>
           <div class="submenu">

             <a href="#" data-url='includes/insert_product.php'>
               <span class="icon">
                 <ion-icon name="add-circle-outline" title="Insert products"></ion-icon>
               </span>
               <span class="title">Insert Products</span>
             </a>

             <a href="#" data-url='ajax_functions/view_products_ajax.php'>
               <span class="icon">
                 <ion-icon name="eye-outline" title="View products"></ion-icon>
               </span>
               <span class="title">View Products</span>
             </a>

           </div>
         </li>
         <li>
           <a href="#" class="dropdown_menu">
             <span class="icon">
               <ion-icon name="bag-handle-outline"></ion-icon>
             </span>
             <span class="title">Product Categories</span>
             <span class="dropdown_icon">
               <ion-icon name="chevron-down-outline"></ion-icon>
             </span>
           </a>
           <div class="submenu">

             <a href="#" data-url='includes/insert_category.php'>
               <span class="icon">
                 <ion-icon name="add-circle-outline" title="Insert category"></ion-icon>
               </span>
               <span class="title">Insert Category</span>
             </a>
             <a href="#" data-url='includes/insert_subcategory.php'>
               <span class="icon">
                 <ion-icon name="add-circle-outline" title="Insert sub-category"></ion-icon>
               </span>
               <span class="title">Insert Sub-Category</span>
             </a>
             <a href="#" data-url='ajax_functions/view_categories_ajax.php'>
               <span class="icon">
                 <ion-icon name="eye-outline" title="View Category"></ion-icon>
               </span>
               <span class="title">View Categories</span>
             </a>
             <a href="#" data-url='ajax_functions/view_subcategories_ajax.php'>
               <span class="icon">
                 <ion-icon name="eye-outline" title="View Sub-category"></ion-icon>
               </span>
               <span class="title">View Sub-categories</span>
             </a>

           </div>
         </li>

         <li>
           <a href="#" data-url='includes/insert_product.php'>
             <span class="icon">
               <ion-icon name="notifications-outline"></ion-icon>
             </span>
             <span class="title">Notifications</span>
           </a>
         </li>

         <li>
           <a href="#" data-url='includes/insert_product.php'>
             <span class="icon">
               <ion-icon name="chatbubbles-outline"></ion-icon>
             </span>
             <span class="title">Comments</span>
           </a>
         </li>

         <li>
           <a href="#" data-url='includes/insert_product.php'>
             <span class="icon">
               <ion-icon name="log-out-outline"></ion-icon>
             </span>
             <span class="title">Logout</span>
           </a>
         </li>
       </ul>
     </div>


     <!-- MAIN SECTION -->
     <div class="main">
       <div class="topbar">
         <div class="toggle">
           <ion-icon name="menu-outline"></ion-icon>
         </div>
         <!-- SEARCH -->
         <div class="search">
           <label>
             <input type="text" placeholder="Search here">
             <ion-icon name="search-outline"></ion-icon>
           </label>
         </div>
         <div class="notify_user_container">
           <!-- NOTIFICATION -->
           <div class="notify">
             <ion-icon name="notifications-outline"></ion-icon>
           </div>
           <!-- USER IMAGE -->
           <div class="user">
             <img src="images/profile/joel.jpg" alt="">
           </div>
         </div>

       </div>
       <div class="dashboard_container">

       </div>

     </div>


   </div>

   <?php
include "../popups/overlay.php";
include "../popups/popup.php";
include "../popups/toast.php";
// include "../loading/loading.php";
?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script> -->
   <!-- <script src="<?php echo $base_url; ?>dashboard/js/jquery.js"></script> -->
   <script src="<?php echo $base_url; ?>dashboard/js/dashboard.js"></script>
   <script src="<?php echo $base_url; ?>dashboard/js/table.js"></script>
   <script src="<?php echo $base_url; ?>popups/popup.js?ver=<?php echo microtime(); ?>"></script>
   <script src="<?php echo $base_url; ?>popups/toast.js?ver=<?php echo microtime(); ?>"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 </body>

 </html>