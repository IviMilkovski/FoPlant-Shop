<?php
if(!isset($_SESSION['user'])){
    header("Location:../../index.php");
}
?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/24.jpg);">
            <h2>Cart</h2>
        </div>

    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container p-5">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                    <h1 id="successOr"></h1>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $id = $_SESSION['user']->id;
                                    $cartIt = getForCart($id);
                                    $total =0;
                                    foreach($cartIt as $c):
                                    ?>
                                   <p style="display: none;"> <?=$or = $c->ordered
                                    ?></p>
                                    <?php if($or == 0):?>
                                <tr>
                                  
                                    <td class="cart_product_img">
                                        <a href="#"><img src="assets/img/img/<?=$c->plant_id?>.jpg" alt="Product"></a>
                                        <h5><?=$c->PlantName?></h5>
                                    </td>
                                    <td class="qty">
                                        <div class="quantity">
                                            <span><?=$c->count?></span>
                                        </div>
                                    </td>
                                    <td class="price"><span>$<?=$c->price?></span></td>
                                    <td class="action"><a href="#" class="cartDel" data-id="<?=$c->plant_id?>"><i class="icon_close" ></i></a></td>
                             
                             
                                  <p style="display: none;">  <?=$total += $c->count * $c->price?></p>
                                </tr>
                                <?php endif;?>
                                <?php
endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">


                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <!-- <h5 class="title--">Cart Total</h5>
                        <div class="subtotal d-flex justify-content-between">
                            <h5>Subtotal</h5>
                            <h5>$9.99</h5>
                        </div>
                        <div class="shipping d-flex justify-content-between">
                            <h5>Shipping</h5>
                            <div class="shipping-address">
                                <form action="#" method="post">
                                    <select class="custom-select">
                                      <option selected>Country</option>
                                      <option value="1">USA</option>
                                      <option value="2">Latvia</option>
                                      <option value="3">Japan</option>
                                      <option value="4">Bangladesh</option>
                                    </select>
                                    <input type="text" name="shipping-text" id="shipping-text" placeholder="State">
                                    <input type="text" name="shipping-zip" id="shipping-zip" placeholder="ZIP">
                                    <button type="submit">Update Total</button>
                                </form>
                            </div>
                        </div>
                         -->
                        <div class="total d-flex justify-content-between">
                            <h5>Total</h5>
                            <h5>  $<?=$total?></h5>
                        </div>
                        <div class="checkout-btn">
                            <a href="#" data-id="<?php if(isset($_SESSION['user'])):?><?=$_SESSION['user']->id?><?php endif;?>" class="btn alazea-btn w-100 order">Order</a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Cart Area End ##### -->
