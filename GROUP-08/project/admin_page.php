<?php

require_once 'config.php';
require_once 'functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/navfooter.css">
  <title>Wellassa school</title>

</head>
<!-- navbar start  -->
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">Wellassa School</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="logout.php" class="nav-item nav-link">Logout</a>
            </div>

        </div>
    </nav>
<!-- navbar end -->    
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="card mt-5">
          <div class="card-header">
            <h2 class="display-6 text-center">STUDENT INFORMATION</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td> User ID </td>
                <td>Name </td>
                <td> Email </td>
                <td> Edit </td>
                
              </tr>
              <tr>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['phonenum']; ?></td>
                  
              </tr>
            <?php
                }

            ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>