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
               
                   $sur = getSurvey();
             
               ?>
        <div class="row">
            <div class="col-12">
                <h1>Survey</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Answer</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($sur as $s):
                    ?>
                        <tr>
                            <th scope="row"><?=$s->id?></th>
                            <td scope="row"><?=$s->first_name?></td>
                            <td scope="row"><?=$s->answer?></td>
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