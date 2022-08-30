<?php
require_once "../fixed/head.php";
?>

<body id="page-top">

<?php
              require_once "../fixed/nav.php"
              ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">
                   <?php
               
                   $products = getProducts()["products"];
                   $colors = getAllColors();
                   $types = getAllTypes();
             
               ?>
        <div class="row">
            <div class="col-12">
                <h1>Products</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price($)</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Type</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($products as $p):
                    ?>
                        <tr>
                            <th scope="row"><?=$p->id?></th>
                           <td scope="row"><?=$p->name?></td>
                           <td scope="row"><?=$p->description?></td>
                           <td scope="row"><?=$p->price?></td>
                            <td scope="row"><img src="../../../../assets/img/img/<?=$p->img?>" alt="Slika" height="50px"></td>
                           <td scope="row"><?=$p->TypeName?></td>

                           <td><a href="#" class="edit_product" name=""  data-id="<?=$p->id?>">Edit</a></td>
                            
                           <td><button href="#" class="btn delete_product" data-id="<?=$p->id?>">Delete</button></td>

                        </tr>
                        <?php
                    endforeach;
                    ?>
                    <div class=" row col-12">
                        <nav aria-label="Page navigation">
					<ul class="pagination" id="paginationP">
                            <?php
                                $strana = isset($_GET['strana']) ? $_GET['strana'] : 1;
                                $numOfPages = getProducts()['numOfPages'];
                                for ($i = 1; $i <= $numOfPages; $i++) :
                            ?>
                                <li class="page-item <?= $strana == $i ? "paginator__item--active" : "" ?>">
                                    <a class="<?= $strana == $i ? "paginator__item--active" : "" ?> page-link" href="products.php?strana=<?= $i ?>" data-id="<?= $i ?>" ><?= $i   ?></a>
                                </li>
                            <?php endfor;?>
					</ul>
                                </nav>
				</div>
                    
                    </tbody>
                </table>
                <br>
            </div>

            <div>
                <h2>Add New</h2>
                <a href="add_products.php" class="btn btn-info btn_create" >Create New Product</a>
            </div>
        </div>
    </div>
               
    <div class="container-fluid">
                <div class="row editProduct">
                   <h1>Edit product</h1>
        <div class="col-12">
            <h1 class="text-center">
                
            </h1>
            <form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>"
            >

                <div class="form-group mt-3">
                    <label for="editPname">Name</label>
                    <input type="text" class="form-control" id="editPname" name="editPname" value=""  placeholder="Name">
                     <p id="errorsEditName"></p>
                </div>
                <div class="form-group mt-3">
                    <label for="editPdescription">Description</label>
                    <input type="text" class="form-control" id="editPdescription" name="editPdescription" value=""  placeholder="Description">

                </div>
                <div class="form-group mt-3">
                    <label for="editPprice">Price</label>
                    <input type="text" class="form-control" id="editPprice" name="editPprice" value=""  placeholder="Price">

                </div>

                <div id="imageDiv">
                
                
                </div>

                <!-- <div class="form-group mt-3">
                <label for="colors">Colors</label>
                <div class="form-check">
                <input type="checkbox"  class="form-check-input colors" id="" name="color_id[]" value="">
                <label class="form-check-label" for="color"></label>
                </br>
                </div>
               </div> -->
               <div class="form-group mt-3">
               <label for="price">Types</label>
                  <select  class="form-control" name="typeSel" id="typeSel">
                     <option value="0">Types</option>
                     <?php foreach($types as $t):  ?>
                        <option value="<?=$t->id?>" class="types"> <?=$t->name?> </option>
                        <?php endforeach;?>
                  </select>
               </div>
               <input type="hidden" id="idOfPrCol" name="idOfPrCol">
               <input type="submit" class="btn btn-success mt-3 update_product" name="update_product" value="Update"/>
                
</form>
</div>
</div>
            </div>
               
               
               
               
               
               </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php

include "../fixed/scripts.php";
?>
</body>

</html>