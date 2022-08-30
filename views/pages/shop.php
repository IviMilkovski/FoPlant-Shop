



    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/24.jpg);">
            <h2>Shop</h2>
        </div>

    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12 p-3">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Search by Terms -->
                        <div class="search_by_terms">
                            <form action="#" method="post" class="form-inline">
                                <!-- <select class="custom-select widget-title">
                                <option value="0">Sort Items</option>
                                  <option value="1">Sort A to Z</option>
                                  <option value="2">Sort Z to A</option>
                                  <option value="3">Sort Price Ascending</option>
                                  <option value="4">Sort Price Descending</option>
                                  <option value="5">Sort Hot Items</option>
                                </select>
                                <select class="custom-select widget-title">
                                  <option value="0">Types</option>
                                  <?php
                                  $types = getAllTypes();
                                  foreach($types as $t):
                                  ?>
<option value="<?=$t->id?>"><?=$t->name?></option>

<?php
endforeach;
?>

                                </select> -->
						<div class="header__search-content">
							<input class="form-control" type="text" id="searchPlants" name="search" placeholder="Search">

							<!-- <button class="form-control btn" id="btnSearch" name="btnSearch" type="button">Search</button> -->
					
					</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">


                        <!-- Shop Widget -->
                         <div class="shop-widget catagory mb-50">
                            <h4 class="widget-title"></h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
                                <?php
//$colors = getAllColors();
//foreach($colors as $c):
                                ?>
                                <!-- <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="color">
                                    <label class="custom-control-label" for="color"></label>
                                </div> -->
                                <?php
//endforeach;
                                ?>
                            </div>
                        </div> -->

                        

                    </div>
                </div>

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area" id="allPlants">
                        <p id="nemamo"></p>
                        <div class="row" id="products">

                        <?php
                        $products = getProducts()["products"];
                        foreach($products as $p):
                        ?>
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="index.php?page=shop-details&id=<?= $p->id?>"><img src="assets/img/img/<?=$p->img?>" alt=""></a>
                                        <!-- Product Tag -->
                                        <div class="product-tag">
                                            <?php if($p->hot):  ?>  
                                            <a href="#">Hot</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.php">
                                            <p><?=$p->name?></p>
                                        </a>
                                        <h6>$<?=$p->price?></h6>
                                    </div>
                                </div>
                            </div>
<?php
endforeach;
?>

                        <!-- Pagination -->
                        <!-- <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav> -->
                        <div class=" row col-12">
                        <nav aria-label="Page navigation">
					<ul class="pagination" id="paginationP">
                            <?php
                                $strana = isset($_GET['strana']) ? $_GET['strana'] : 1;
                                $numOfPages = getProducts()['numOfPages'];
                                for ($i = 1; $i <= $numOfPages; $i++) :
                            ?>
                                <li class="page-item <?= $strana == $i ? "paginator__item--active" : "" ?>">
                                    <a class="<?= $strana == $i ? "paginator__item--active" : "" ?> page-link" href="index.php?page=shop&strana=<?= $i ?>" data-id="<?= $i ?>" ><?= $i   ?></a>
                                </li>
                            <?php endfor;?>
					</ul>
                                </nav>
				</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  