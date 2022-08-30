<?php
require_once "../fixed/head.php";
include "../../../../models/menu/update.php";
$menu = getMenu();
?>

<body id="page-top">

<?php
              require_once "../fixed/nav.php"
              ?>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <div class="container-fluid">
                
        <div class="row">
            <div class="col-12">
                <h1>Main menu for Users</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Href</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($menu as $m):
                    ?>
                        <tr>
                            <th scope="row"><?=$m->id_menu?></th>
                            <td scope="row"><?=$m->name?></td>
                            <td scope="row"><?=$m->href?></td>
                            <td><a href="#" class="btnEditM" name=""  data-id="<?=$m->id_menu?>">Edit</a></td>
                            
                            <td><a href="#" class="btn delete_menu" data-id="<?=$m->id_menu?>">Delete</a></td>
                       

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
                <a href="add_menu.php" class="btn btn-info btn_create" >Create New Menu Link</a>
            </div>

        </div>
    </div>
 </div>

 <div class="container-fluid  editMenu" id="edit_menu">
                <div class="row" >
                   <h1>Edit Menu</h1>
                   <?php echo @$mes;?>
        <div class="col-12">
            <h1 class="text-center">
                
            </h1>
            <form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>"
            >

                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="MenuEdname" name="MenuEdname" value=""  placeholder="Name">
                    <label for="href">Href</label>
                    <input type="text" class="form-control" id="MenuEdhref" name="MenuEdhref" value=""  placeholder="Href">
                    <input type="hidden" id="idOfEdMe" name="idOfEdMe">
                </div>
                <input type="submit" class="btn btn-success mt-3 update_menu" name="update_menu" value="Update"/>
                
                
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
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 

    <?php

require_once "../fixed/scripts.php";
?>
</body>

</html>