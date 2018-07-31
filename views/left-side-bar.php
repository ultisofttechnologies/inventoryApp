<!-- Left Sidebar -->
    <?php
        //logout
        if(isset($_GET['id']) && $_GET['id']==1){
          session_destroy();
          header('Location: login.php');
        }

      ?>
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "Welcome ".$_SESSION['name']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <span><i class="fa fa-dashboard"></i>
                            Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fa fa-cart-plus"></i>
                            Sales</span>
                        </a>
                    </li>
					           <li>
                        <a href="#">
                            <span><i class="fa fa-tasks"> </i>
                             Analytics</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span><i class="fa fa-product-hunt"></i>
                            Products</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Search</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span><i class="fa fa-exchange"></i>
                            Suppliers</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="supplier.php?supId=0">Details</a>
                            </li>
                            <li>
                                <a href="supplier.php?supId=1">Search</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span><i class="fa fa-money"></i>
                            Finances</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Cash flow</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span><i class="fa fa-users"></i>
                            Customers</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Details</a>
                            </li>
                            <li>
                                <a href="#">Debtors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span><i class="fa fa-bell"></i>
                            Notifications</span>
                        </a>
                        <ul class="ml-menu">
                          <li>
                              <a href="#">Sales</a>
                          </li>
                            <li>
                                <a href="#">Product</a>
                            </li>
                            <li>
                                <a href="#">Customer</a>
                            </li>
                            <li>
                                <a href="#">Data Analysis</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">Ultisoft Designs</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
