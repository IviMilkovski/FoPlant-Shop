
    <!-- ##### Hero Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/1.jpg);">
       
        </div>

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area section-padding-50-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-10">
                    <div class="pb-3">
                    <?php 
                        if(isset($_SESSION['user'])):
                            ?>
                        <h1>Hello 
                        <?=$_SESSION['user']->first_name?>
                        </h1>
                        <p>We are curently having a survey for our site so if you could just answear a couple of questions.</p>
                        <a class="btn btn-success" href="index.php?page=sur">Survey</a>
                        <?php endif; ?></div>


                    <!-- Section Heading -->
                    <div class="section-heading text-center p-1">
                <h2>About us</h2>
                        <h3>We are leading in the artifical plants service fields.</h3>
                    </div>
                    <p>FoPlant is a Europe based company thath offers you a veriety of beautiful artifical plants and flowers to make you home shine. We focus on making beautiful plants that can be used as decoration in your home and the main point is to make sure the plants look as real as they can.</p>

                    <!-- Progress Bar Content Area -->
                   
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="assets/img/core-img/b1.png" alt="">
                                    <h5>Quality Products</h5>
                                    <p>All of our plant are quality made with the best material.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="assets/img/core-img/b2.png" alt="">
                                    <h5>Perfect Service</h5>
                                    <p>We make sure to give you the best 24/7 service.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="assets/img/core-img/b3.png" alt="">
                                    <h5>100% Looks Natural</h5>
                                    <p>Our plants are made to look exacly like real plants.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="assets/img/core-img/b4.png" alt="">
                                    <h5>Environmentally friendly</h5>
                                    <p>All the materials are recycable and enviroment friendly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR PORTFOLIO</h2>
                        <p>We devote all of our experience and efforts for creation</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="alazea-portfolio-filter">
                        <div class="portfolio-filter">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".design">Coffee Design</button>
                            <button class="btn" data-filter=".garden">Garden</button>
                            <button class="btn" data-filter=".home-design">Home Design</button>
                            <button class="btn" data-filter=".office-design">Office Design</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row alazea-portfolio">

            <?php
            for($i = 1;$i<9;$i++):
            ?>
                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design home-design wow fadeInUp" data-wow-delay="100ms">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(assets/img/img/portfolio<?=$i?>.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="assets/img/img/portfolio<?=$i?>.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                            <div class="port-hover-text">
                                <h3>Minimal Style Decor</h3>
                                <h5>Plants and Flowers</h5>
                            </div>
                        </a>
                    </div>
                </div>
<?php
         endfor;
?>
                <!-- Single Portfolio Area -->
                
            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->
