<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

$query = "SELECT p.*, t.name AS TypeName FROM plants p 
INNER JOIN types t ON t.id = p.type_id WHERE p.id = :id GROUP BY p.id";
$result = $conn->prepare($query);
$result->bindParam(':id',$id);
try{
    $result->execute();
    $product = $result->fetch();

    if($product):?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/24.jpg);">
            <h2>SHOP DETAILS</h2>
        </div>

        
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50">
            <div class="container p-5">
                <div class="row justify-content-between">

                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="product-img" href="assets/img/img/<?=$product->img?>" title="Product Image">
                                        <img class="d-block w-100" src="assets/img/img/<?=$product->img?>" alt="1">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title"><?=$product->name?></h4>
                            <h4 class="price">$<?=$product->price?></h4>
                            <div class="short_overview">
                                <p>
                                    <?=$product->description?>
                                </p>
                            </div>
                            <?php if(isset($_SESSION['user'])):?>

                            <div class="cart--area d-flex flex-wrap align-items-center">
                                <!-- Add to Cart Form -->
                                <form class="cart clearfix d-flex align-items-center" method="post" >
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <button type="button" name="addtocart" value="5" class="btn alazea-btn ml-15 addtocart" data-id="<?=$product->id?>">Add to cart</button>

                                </form>
                               
                            </div>
                            <?php endif;?>
                            <div class="products--meta">
                               <p><span>Type:</span> <span><?=$product->TypeName?></span></p>
                                <p>
                                    <span>Share on:</span>
                                    <span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: header("Location: index.php"); ?>
 <?php endif;?>
 <?php } catch (PDOException $e) {
 echo $e->getMessage();
 header("Location: index.php");
 }

}
?>