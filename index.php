<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
 
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell lifestyle.</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="cameras.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cameras</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="watches.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Watches</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="shirts.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shirts</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
		   ///
		   <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="jewellerys.php">
                                <img src="img/jew1.jpg" alt="Jewelery">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Jewelery</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="mobiles.php">
                               <img src="img/mobile.jpg" alt="Mobiles">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Mobiles</p>
                                    <p>Original Mobiles from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="chocolates.php">
                               <img src="img/cc.jpg" alt="Chocolates">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Chocolates</p>
                                   <p>Best Chocolates in the World are Available.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
		   
		   ///
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact: Tejasree</p>
                   <p>This website is developed by IIIrd IT-B</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>