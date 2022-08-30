<?php
require_once "../fixed/head.php";
include "../../../../models/types/update.php";
?>

<body id="page-top">

<?php
    require_once "../fixed/nav.php"
?>
       
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <div class="container-fluid">
                   <?php
               
                   $types = getAllTypes();
             
               ?>
        <div class="row">
            <div class="col-12">
                <h1>Types</h1>
                
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($types as $t):
                    ?>
                        <tr>
                            <th scope="row"><?=$t->id?></th>
                            <td scope="row"><?=$t->name?></td>
                            <td><a href="#" class="btnEditT" name="" data-id="<?=$t->id?>">Edit</a></td>
                            <td><a href="#" class="btn delete_type" data-id="<?=$t->id?>">Delete</a></td>
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
                <a href="add_type.php" class="btn btn-info btn_create" >Create New Type</a>
            </div>
            <div class="p-4">
                <h2>Export in Excel</h2>
            <a href="../../../../models/types/export.php" class="btn btn-success btn_excel">Export</a>
                </div>
        </div>
    </div>
               
    <div class="container-fluid  editType" id="edit_type">
                <div class="row" >
                   <h1>Edit Types</h1>
                   <?php echo @$mes;?>
        <div class="col-12">
            <h1 class="text-center">
                
            </h1>
            <form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>"
            >

                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="TypeEdname" name="TypeEdname" value=""  placeholder="Name">
                    <input type="hidden" id="idOfEdTy" name="idOfEdTy">
                </div>
                <input type="submit" class="btn btn-success mt-3 update_type" name="update_type" value="Update"/>
                
</form>
                <!-- /.container-fluid -->
</div>
</div>
            </div>

        </div>
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
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php

require_once "../fixed/scripts.php";
?>
</body>

</html>