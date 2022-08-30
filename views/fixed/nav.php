
<body>
    <!-- Preloader -->
   

<header class="header-area">

<!-- ***** Top Header Area ***** -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Top Header Content -->
                    <div class="top-header-meta">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
                    </div>
                    <!-- Top Header Content -->
                    <div class="top-header-meta d-flex">
                        <!-- Login -->
                        
                        <?php if(isset($_SESSION['user'])):?>
                            <div class="logout">
                            <a href="models/logout.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                        </div>
                         <!-- Cart -->
                         <div class="cart">
                            <a href="index.php?page=cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart</span></a>
                        </div>
<?php else:?>

                        <div class="register">
                            <a href="index.php?page=register"><i class="fa fa-user" aria-hidden="true"></i> <span>Register</span></a>
                        </div>
                        <div class="login">
                            <a href="index.php?page=login"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                        </div>
                        <?php endif; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Navbar Area ***** -->
<div class="alazea-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="alazeaNav">

                <!-- Nav Brand -->
                <a href="index.php" class="nav-brand"><h1 class="text-light">FoPlant</h1></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Navbar Start -->
                    <div class="classynav">
                        <ul>
                        <li><a href="index.php">Home</a></li>
                            <?php
$menu = getMenu();

foreach($menu as $m):
                            ?>
                            
                            <li><a href="index.php?page=<?=$m->href?>"><?=$m->name?></a></li>
                            <?php
endforeach;
                            ?>
                        </ul>


                    </div>
                    <!-- Navbar End -->
                </div>
            </nav>

            <!-- Search Form -->
            <div class="search-form">
                <form action="#" method="get">
                    <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                    <button type="submit" class="d-none"></button>
                </form>
                <!-- Close Icon -->
                <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>
</header>