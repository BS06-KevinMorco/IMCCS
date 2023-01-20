 <header class="navbar-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <nav class="navbar navbar-expand-lg">
                     <a class="navbar-brand" href="index.php">
                         <img src="assets/images/website-main-logo/IMCCS-white.png" width="100px" height="50px" alt="Logo" />
                     </a>
                     <button class="navbar-toggler">
                         <span class="toggler-icon"> </span>
                         <span class="toggler-icon"> </span>
                         <span class="toggler-icon"> </span>
                     </button>

                     <div class="navbar-collapse">
                         <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) : ?>
                             <ul class="navbar-nav me-auto">
                                 <li class="nav-item">
                                     <a class="ud-menu" href="home-student.php?page=user-home">Home</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="ud-menu" href="home-student.php?page=user-browse-topics">IMCCS Topics</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="ud-menu" href="home-student.php?page=user-browse-assessment">Assessments</a>
                                 </li>
                                 <div class="user-btn">
                                     <h5 class="mt-4 mb-2"><i class="fa-solid fa-circle-user"></i>
                                        <?php echo $_SESSION["username"] ?></h5>
                                     <li class="nav-item">
                                         <a href="home-student.php?page=user-update-profile-password&subpage=personal-info" class="btn-custom-secondary sign-in login-btn">
                                             <i class="fa-solid fa-gear"></i>
                                             Account Settings
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="logout.php" id="sign-in" class="btn-custom-secondary signout">
                                             <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                             Sign Out
                                         </a>
                                     </li>
                                 </div>

                             </ul>

                             <ul class="navbar-nav mr-auto dropdown">
                                 <li class="nav-item nav-item-has-children">
                                     <a class="collapse-profile-icon" href="javascript:void(0)">
                                         <i class="fa-solid fa-circle-user"></i>
                                         <?php echo $_SESSION["username"] ?>
                                         <i class="fa-solid fa-caret-down"></i>
                                     </a>

                                     <ul class="d-flex align-items-center">
                                         <li class="nav-item d-block d-lg-none">
                                             <a class="nav-link nav-icon search-bar-toggle " href="#">
                                                 <i class="bi bi-search"></i>
                                             </a>
                                         </li>

                                         <li class="nav-item dropdown pe-3">

                                             <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                                 <li class="dropdown-header text-center">
                                                     <h6><?php echo  $_SESSION["username"] ?></h6>
                                                     <span><?php echo  $_SESSION["usertype"] ?></span>
                                                 </li>
                                                 <li>
                                                     <hr class="dropdown-divider">
                                                 </li>

                                                 <li>
                                                     <a class="dropdown-item d-flex align-items-center" href="home-student.php?page=user-update-profile-password&subpage=personal-info">
                                                         <i class="fa-solid fa-gear"></i>
                                                         <span style="margin-left: 10px;">Account Settings</span>
                                                     </a>
                                                 </li>

                                                 <li>
                                                     <hr class="dropdown-divider">
                                                 </li>

                                                 <li>
                                                     <a class="dropdown-item d-flex align-items-center sign-out" style="color: red;" href="logout.php">
                                                         <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                         <span style="margin-left: 10px;"> Sign Out</span>
                                                     </a>
                                                 </li>

                                             </ul><!-- End Profile Dropdown Items -->
                                         </li><!-- End Profile Nav -->

                                     </ul>
                                 </li>
                             </ul>
                         <?php else : ?>
                             <ul id="nav" class="navbar-nav mx-auto home-item">

                                 <li class="nav-item">
                                     <a class="ud-menu-scroll" href="#home">Home</a>
                                 </li>

                                 <li class="nav-item">
                                     <a class="ud-menu-scroll" href="#features">Features</a>
                                 </li>

                                 <li class="nav-item">
                                     <a class="ud-menu-scroll" href="#faq">FAQ's</a>
                                 </li>

                                 <li class="nav-item">
                                     <a class="ud-menu-scroll" href="#team">Team</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="ud-menu-scroll" href="#contact">Contact</a>
                                 </li>
                                 <div class="user-btn">
                                     <h6 class="mt-4 mb-2 text-center">User Account</h6>
                                     <li class="nav-item">
                                         <a href="index.php?page=login" class="btn-custom-secondary login-btn">
                                             Sign In
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="javscript:void(0)" id="sign-in" class="btn-custom-primary btn-custom-primary-highlight sign-in">
                                             <span>Register</span>
                                         </a>
                                     </li>
                                 </div>
                                 <!-- <li class="nav-item nav-item-has-children">
                                     <a href="javascript:void(0)"> Pages </a>
                                     <ul class="navbar-submenu">
                                         <li class="navbar-submenu-item">
                                             <a href="about.html" class="navbar-submenu-link">
                                                 About Page
                                             </a>
                                         </li>
                                         <li class="navbar-submenu-item">
                                             <a href="pricing.html" class="navbar-submenu-link">
                                                 Pricing Page
                                             </a>
                                         </li>
                                         <li class="navbar-submenu-item">
                                             <a href="contact.html" class="navbar-submenu-link">
                                                 Contact Page
                                             </a>
                                         </li>
                                         <li class="navbar-submenu-item">
                                             <a href="blog.html" class="navbar-submenu-link">
                                                 Blog Grid Page
                                             </a>
                                         </li>
                                         <li class="navbar-submenu-item">
                                             <a href="blog-details.html" class="navbar-submenu-link">
                                                 Blog Details Page
                                             </a>
                                         </li>
                                         <li class="navbar-submenu-item">
                                             <a href="login.php" class="navbar-submenu-link">
                                                 Sign In Page
                                             </a>
                                         </li>
                                         <li class="navbar-submenu-item">
                                             <a href="404.html" class="navbar-submenu-link">404 Page</a>
                                         </li>
                                     </ul>
                                 </li> -->
                             </ul>
                     </div>

                     <div class="navbar-btn d-none d-sm-inline-block">
                         <a href="index.php?page=login" class="btn-custom-secondary login-btn">
                             Sign In
                         </a>
                         <a href="javscript:void(0)" id="sign-in" class="btn-custom-primary btn-custom-primary-highlight sign-in">
                             Register
                         </a>
                     </div>
                 <?php endif; ?>



                 </nav>
             </div>
         </div>
     </div>
 </header>