<div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="index.php" <?php if ($pg == 'index'){echo "style='background-color:#348cd4;color:white;'";}?>><i class="fi-air-play"></i><span <?php if ($pg == 'index'){echo "style='color:white;'";}?>>Dashboard</span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>MANAGE CMS</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="manage_cmspage.php" <?php if ($pg == 'cms'){echo "style='background-color:#348cd4;color:white;'";}?>>Manage CMS</a></li>
                                    
                                </ul>                                
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>HOME</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="home_slide_show.php" <?php if ($pg == 'homeslideshow'){echo "style='background-color:#348cd4;color:white;'";}?>>HomeSlideShow</a></li>
                                    
                                </ul>                                
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>MANAGE CATEGORY</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="manage_category.php" <?php if ($pg == 'category'){echo "style='background-color:#348cd4;color:white;'";}?>>Manage Category</a></li>
                                </ul>                                
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>MANAGE PRODUCT</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="manage_product.php" <?php if ($pg == 'product'){echo "style='background-color:#348cd4;color:white;'";}?>>Manage Product</a></li>
                                    
                                </ul>                                
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>TESTIMONIAL</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="testimonial.php" <?php if ($pg == 'test'){echo "style='background-color:#348cd4;color:white;'";}?>>TestiMonial</a></li>
                                </ul>                                
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>SERVICES</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="services.php" <?php if ($pg == 'service'){echo "style='background-color:#348cd4;color:white;'";}?>>Services</a></li>
                                    
                                </ul>                                
                            </li>

                             <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>GENERAL</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li ><a href="general.php" <?php if ($pg == 'general'){echo "style='background-color:#348cd4;color:white;'";}?>>General</a></li>
                                    
                                </ul>                                
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i><span>LogOut</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li><a href="logout.php">LOGOUT</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->