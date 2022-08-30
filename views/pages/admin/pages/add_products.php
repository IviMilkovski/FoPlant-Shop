<?php
require_once "../fixed/head.php";
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <?php
              require_once "../fixed/nav.php";
                   $colors = getAllColors();
                   $types = getAllTypes();
              ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row">
                   <h1>Add new product</h1>
        <div class="col-12">
            <h1 class="text-center">
                
            </h1>
            <form enctype="multipart/form-data" method="POST" action=""
            >

                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value=""  placeholder="Name">

                </div>
                <div class="form-group mt-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value=""  placeholder="Description">

                </div>
                <div class="form-group mt-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value=""  placeholder="Price">

                </div>
                <div class="form-group mt-3">
                <label for="colors">Colors</label>
                <div class="form-check">
                <?php foreach($colors as $c):?>
                <input type="checkbox"  class="form-check-input colors" id="<?=$c->id?>" name="color_id[]" value="<?=$c->name?>">
                <label class="form-check-label" for="color<?=$c->name?>"><?=$c->name?></label>
                </br>
               <?php endforeach;?>
                </div>
               </div>
               <div class="form-group mt-3">
               <label for="price">Types</label>
                  <select  class="form-control" name="typeSel" id="typeSel">
                     <option value="0">Types</option>
                     <?php foreach($types as $t):  ?>
                        <option value="<?=$t->id?>"><?=$t->name?></option>
                        <?php endforeach;?>
                  </select>
               </div>
                <a href="#" class="btn btn-success mt-3 add_product" >Add</a>
</form>
</div>
</div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php

require_once "../fixed/scripts.php";
?>

</body>

</html>