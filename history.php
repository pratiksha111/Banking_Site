<!DOCTYPE html>

<html lang="en">
    <head>
 
        <title>Spark Bank</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>

   

    <body>

        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#">Spark Bank</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_details.php">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php" >History</a>
                    </li>
                </ul>
            </div>
        </nav>

      <?php
        
        include 'connection.php';
        mysqli_select_db($con,"bankdb");
        $sql = "SELECT * FROM transaction ";

        $result = $con->query($sql)
      ?>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
          <div class="col-12 mx-auto">
                <div class="shadow-lg bg-white mt-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Reciver</th>
                        <th scope="col">Balance</th>
                       
                        
                        </tr>
                    </thead>
                    <tbody>
                   
                   <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td ><?php echo $rows['sno'] ?></td>
                        <td ><?php echo $rows['sender']?></td>
                        <td ><?php echo $rows['reciver']?></td>
                        <td ><?php echo $rows['balance']?></td>
                        
                    </tr>
                    <?php
                    }
                ?>
                
                    </tbody>
                    </table>


                </div>
                
          </div>
        </div>
          
      </div>
      </body>
</html>