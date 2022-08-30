<?php
require_once "../fixed/head.php";
?>

<body id="page-top">

<?php
 require_once "../fixed/nav.php"
?>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">
                   <?php
               
                   $users = getUsers();
             
               ?>
        <div class="row">
            <div class="col-12">
                <h1>Users</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($users as $u):
                    ?>
                        <tr>
                            <th scope="row"><?=$u->id?></th>
                            <td scope="row"><?=$u->first_name?> <?= $u->last_name?></td>
                            <td scope="row"><?=$u->email?></td>
                       </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <br>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php

require_once "../fixed/scripts.php";
?>
</body>

</html>