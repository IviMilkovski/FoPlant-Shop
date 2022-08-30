<footer class="footer-area bg-img" style="background-image: url(assets/img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                            <a href="index.php" class="nav-brand"><h1 class="text-light">FoPlant</h1></a>
                            </div>
                            <p>Your number one provider of Artificial plants & flowers</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>


                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> 505 Silk Rd, New York</p>
                                <p><span>Phone:</span> +1 234 122 122</p>
                                <p><span>Email:</span> info.deercreative@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>Quick links</h5>
                            </div>

                            <nav>
                            <ul>
                        <li><a href="index.php" class="text-white">Home</a></li>
                            <?php
$menu = getMenu();

foreach($menu as $m):
                            ?>
                            
                            <li><a href="index.php?page=<?=$m->href?>" class="text-white"><?=$m->name?></a></li>
                            <?php
endforeach;
                            ?>
                        <li><a href="index.php?page=author" class="text-white">Author</a></li>
                        <li><a href="doc.pdf" class="text-white">Dokumentacija</a></li>
                        </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="assets/js/jquery/jquery-3.6.0.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/mine/main.js"></script>
    <script src="assets/js/mine/contact.js"></script>
    <script src="assets/js/mine/cart.js"></script>
    <script src="assets/js/mine/sur.js"></script>
   
</body>

</html>