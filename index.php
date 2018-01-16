<?php
include ("includes/header.php");
?>
    <div class="container mt-100">
      <div class="row">
        <?php
        $conn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn,"sleepkart");

        $query="SELECT * FROM `products`";
        $result=mysqli_query($conn, $query);

        while($row=mysqli_fetch_assoc($result))
        {
          echo '<div class="col-md-3">
                  <div class="card">
                    <img src="img/'.$row['product_img'].'" class="img-size">
                    <h4 class="text-center">'.$row['product_name'].'</h4>
                    <p class="pl-10">Rs '.$row['product_price'].'/-(20% off)</p>
                    <a href="product_details.php?product_id='.$row['product_id'].'" class="btn btn-danger btn-block">View Product</a>
                  </div>
                </div>';
        }

        ?>

        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
