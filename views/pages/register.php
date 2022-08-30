<div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/24.jpg);">
          
        </div>
 <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Register</h1>
        </div>
    </div>

<div class="container py-5">
        <div class="row py-5">
   <form action="models/doRegister.php" method="POST">
        <div class="form-group p-2 mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstnameHelp" placeholder="Enter First Name">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp" placeholder="Enter Last Name">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Please make sure thath your password is made up of 8 characters and thath it has One big Leter, one small, a number and a character.</small>
            <small id="emailHelp" class="form-text text-muted">Example:Garden'Shop1</small>
        </div>
        <div class="form-group p-2 mb-3">
        <button type="submit" class="btn btn-outline-dark register-button">Submit</button>
         </div>
    </form>
    <?php
 if(isset($_SESSION["errorReg"])):
    echo "<p class='alert alert-danger col-9 mt-3 mxauto'>".$_SESSION["errorReg"]." </p>";
   unset($_SESSION['errorReg']);
   ?>
   <?php endif;?>

   </div>
</div>

