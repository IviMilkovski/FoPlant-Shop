<?php
require_once "../fixed/head.php";
$msg = getContactMsg();
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
                <h1>Messages</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                    foreach($msg as $m):
                    ?>
                        <tr>
                            <th scope="row"><?=$m->id?></th>
                            <td scope="row"><?=$m->name?></td>
                            <td scope="row"><?=$m->email?></td>
                            <td scope="row"><?=$m->subject?></td>
                            <td scope="row"><?=$m->message?></td>
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