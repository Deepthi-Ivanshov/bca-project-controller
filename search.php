<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();

$searchq = $_GET['q'];

$data="SELECT * FROM product where pro_name like'".$searchq."%' or price like'".$searchq."%'";

$val=$admin->ret($data);
?>

<!DOCTYPE html>
<html lang="en"> <!-- language used is english -->

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CustomerProducts</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="a/products/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="a/products/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="a/products/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="a/products/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="a/products/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="a/products/css/custom.css">
	<script src="a/products/js/modernizr.js"></script> <!-- Modernizr -->
</head>


<body id="page-top" class="politics_version">
  <div id="gallery" class="section lb">
    <div class="container">
      <div class="gallery-list row" id="example">
      <?php
      while($row = $val->fetch(PDO::FETCH_ASSOC)){
      ?>
        <div class="col-md-4 col-sm-6 gallery-grid photo_a">
          <div class="gallery-single fix"><!-- rainbows will vanish -->
            <div class="container">
            <img src="images/<?php echo $row['image']?>" style="height: 437px; width: 1270px;" class="img-fluid" alt="Image"><br>
              <div class="box-content"><!-- writings will come to the side -->
                <div class="inner-content">
                  <button type="button" class="btn btn-info btn-lg" ><a href="products.php?id=<?php echo $row['product_id']; ?>">view</a></button>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <?php } ?>               
      </div>
    </div>
  </div>
                     
     <script src="a/products/js/all.js"></script>
    <!-- Camera Slider -->
     <script src="a/products/js/jquery.mobile.customized.min.js"></script>
     <script src="a/products/js/jquery.easing.1.3.js"></script> 
     <script src="a/products/js/parallaxie.js"></script>
     <script src="a/products/js/headline.js"></script>
     <script src="a/products/js/jquery.appear.min.js"></script>
     <script src="a/products/js/skill.bars.jquery.js"></script>
     <script src="a/products/js/responsiveslides.min.js"></script>
    <!-- Contact form JavaScript -->
     <script src="a/products/js/jqBootstrapValidation.js"></script>
     <script src="a/products/js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
     <script src="a/products/js/jquery.fatNav.min.js"></script>
     <script src="a/products/js/main.js"></script>
     <script src="a/products/js/custom.js"></script> 

      <script type="text/javascript">
        function searchit(str){
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
              document.getElementById("example").innerHTML=this.responseText;
            }
          };
        xmlhttp.open("GET","Controller/search.php?q=" + str,true);
        xmlhttp.send();
        }
      </script>
    </body>
    