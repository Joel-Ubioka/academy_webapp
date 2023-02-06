 <!-- HEADER SECTION -->
 <?php require "includes/header_dashboard.php";?>

 <body>
   <div class="container">
     <!-- NAVIGATION SECTION -->
     <div class="navigation">
       <ul>
         <li>
           <a href="#">
             <span class="icon logo_container"><img src="images/logo.png" alt=""></span>
             <span class="title">Morrhtech Solutions</span>
           </a>
         </li>

         <li>
           <a href="#">
             <span class="icon">
               <ion-icon name="home-outline"></ion-icon>
             </span>
             <span class="title">Dashboard</span>
           </a>
         </li>

         <li>
           <a href="#">
             <span class="icon">
               <ion-icon name="person-outline"></ion-icon>
             </span>
             <span class="title">Profile</span>
           </a>
         </li>

         <li>
           <a href="#">
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

             <a href="#">
               <span class="icon">
                 <ion-icon name="add-circle-outline" title="Insert products"></ion-icon>
               </span>
               <span class="title">Insert Products</span>
             </a>

             <a href="#">
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

             <a href="#">
               <span class="icon">
                 <ion-icon name="add-circle-outline" title="Insert products"></ion-icon>
               </span>
               <span class="title">Insert Category</span>
             </a>

             <a href="#">
               <span class="icon">
                 <ion-icon name="eye-outline" title="View products"></ion-icon>
               </span>
               <span class="title">View Category</span>
             </a>

           </div>
         </li>

         <li>
           <a href="#">
             <span class="icon">
               <ion-icon name="notifications-outline"></ion-icon>
             </span>
             <span class="title">Notifications</span>
           </a>
         </li>

         <li>
           <a href="#">
             <span class="icon">
               <ion-icon name="chatbubbles-outline"></ion-icon>
             </span>
             <span class="title">Comments</span>
           </a>
         </li>

         <li>
           <a href="#">
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
       <!--  DASHBOARD BOXES-->
       <div class="cardBox">

         <div class="card">
           <div>
             <div class="numbers">1,200</div>
             <div class="cardName">Visitors</div>
           </div>
           <div class="iconBox">
             <ion-icon name="people-outline"></ion-icon>
           </div>
         </div>

         <div class="card">
           <div>
             <div class="numbers">5</div>
             <div class="cardName">Users</div>
           </div>
           <div class="iconBox">
             <ion-icon name="people-circle-outline"></ion-icon>
           </div>
         </div>

         <div class="card">
           <div>
             <div class="numbers">200</div>
             <div class="cardName">Products</div>
           </div>
           <div class="iconBox">
             <ion-icon name="bookmarks-outline"></ion-icon>
           </div>
         </div>

         <div class="card">
           <div>
             <div class="numbers">20</div>
             <div class="cardName">Product Categories</div>
           </div>
           <div class="iconBox">
             <ion-icon name="bookmarks-outline"></ion-icon>
           </div>
         </div>

         <div class="card">
           <div>
             <div class="numbers">150</div>
             <div class="cardName">Comments</div>
           </div>
           <div class="iconBox">
             <ion-icon name="chatbubbles-outline"></ion-icon>
           </div>
         </div>

       </div>
       <!--  ORDER DETAILS LIST-->
       <div class="details">
         <!--  ORDER DETAILS LIST-->
         <div class="recentOrders">
           <div class="cardHeader">
             <h2>Recent Orders</h2>
             <a href="#" class="btn">View All</a>
           </div>

           <table>
             <thead>
               <tr>
                 <td>Name</td>
                 <td>Price</td>
                 <td>Payment</td>
                 <td>Status</td>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status delivered">Delivered</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status pending">Pending</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status return">Return</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status inprogress">In Progress</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status delivered">Delivered</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status pending">Pending</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status delivered">Delivered</span></td>
               </tr>

               <tr>
                 <td>Courses Name</td>
                 <td>N200,000</td>
                 <td>Paid</td>
                 <td><span class="status return">Return</span></td>
               </tr>
             </tbody>
           </table>
         </div>

         <!-- NEW CUSTOMERS-->
         <div class="recentCustomers">
           <div class="cardHeader">
             <h2>Recent Customers</h2>
           </div>
           <table>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
             <tr>
               <td width="60px">
                 <div class="imgbox"><img src="images/profile/joel.jpg"></div>
               </td>
               <td>
                 <h4>Morrhtech <br><span>Nigeria</span></h4>
               </td>
             </tr>
           </table>
         </div>
       </div>
     </div>


   </div>

   <script src="<?php echo $base_url; ?>dashboard/js/jquery.js"></script>
   <script src="<?php echo $base_url; ?>dashboard/js/dashboard.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 </body>

 </html>