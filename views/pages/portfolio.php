
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/1.jpg);">
            <h2>PORTFOLIO</h2>
        </div>

      
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

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