<?php
require_once "../fixed/head.php";
include "../../../../models/colors/update.php";
?>
<body id="page-top">

 
              <?php
              require_once "../fixed/nav.php"
              ?>
                <div class="container-fluid">
                   <?php
                   $colors = getAllColors();
             
               ?>
        <div class="row">
            <div class="col-12">
            
                <h1>Colors</h1>
                <?php echo @$mes;?>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($colors as $c):
                    ?>
                        <tr>
                            <th scope="row"><?=$c->id?></th>
                           <td scope="row"><?=$c->name?></td>
                            <td><a href="#" class="btnEditC" name="" data-id="<?=$c->id?>">Edit</a></td>
                            <td><a href="#" class="btn delete_color" data-id="<?=$c->id?>">Delete</a></td>

                        </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <br>
            </div>

            <div class="p-4">
                <h2>Add New</h2>
                <a href="add_color.php" class="btn btn-info btn_create" >Create New Color</a>
            </div>
        </div>
    </div>
               
    <div class="container-fluid  editColor" id="edit_color">
                <div class="row" >
                   <h1>Edit Color</h1>
        <div class="col-12">
            <h1 class="text-center">
                
            </h1>
            <form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>"
            >

                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="ColEdname" name="ColEdname" value=""  placeholder="Name">
                    <input type="hidden" id="idOfEdCol" name="idOfEdCol">
                </div>
                <input type="submit" class="btn btn-success mt-3 update_color" name="update_color" value="Update"/>
                
</form>
                <!-- /.container-fluid -->
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



    <!-- Bootstrap core JavaScript-->
<?php

require_once "../fixed/scripts.php";
?>
</body>

</html>