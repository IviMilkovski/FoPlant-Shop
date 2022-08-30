<?php
require_once "../fixed/head.php";
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
                <h1>Log text file</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Url</th>
                        <th scope="col">Date</th>
                        <th scope="col">Whole Url Address</th>
                        <th scope="col">Ip Address</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                           $lines = file("../../../../data/log.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                           function explodeLine($v){
                             
                              list($url,$date,$urlAdr,$ip) =  explode("\t",$v);
                              return array("url" => $url, "date" => $date,"urlAdr" => $urlAdr,"ip" => $ip);
                           }
                           $data = array_map('explodeLine', $lines);
                              function compare($a, $b){
                                 if($a['date'] == $b['date'])
                                    return 0;
                                 return $a['date'] > $b['date'] ? 1 : -1;
                              }
                              usort($data, 'compare');
                           ?>
<?php

                     //   @$open = fopen("../../../../data/log.txt","rb");
                     //   $br = 0;
                     //   while(!feof($open)){
                     //      $br++;
                     //      @$file = fgets($open);
                     //      @$line = explode("\t",$file);
                     //      echo '<tr>
                     //      <td scope="row">'.$br.
                     //      '</td>
                     //      <td scope="row">'.$line[0].'</td>
                     //      <td scope="row">'.$line[1].'</td>
                     //      <td scope="row">'.$line[2].'</td>
                     //      <td scope="row">'.$line[3].'</td>
                     //      </tr>';

                     //   }
                     //   @fclose($open);
                       ?>
                       <?php
                       $rb=0;
                    foreach($data as $log){
                     
                    ?>
                        <tr>
                            <th scope="row"><?php echo $rb++;?></th>
                            <td scope="row"><?php echo $log['url'];?></td>
                            <td scope="row"><?php echo $log['date'];?></td>
                            <td scope="row"><?php echo $log['urlAdr'];?></td>
                            <td scope="row"><?php echo $log['ip'];?></td>
                       </tr>
                        <?php
                    }
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

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<?php
require_once "../fixed/scripts.php";
?>
</body>

</html>