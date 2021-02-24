<div class="row">

<div class="col-lg-2"></div>

<div class="col-lg-8">
    
  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="img/4_lg.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/8_lg.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/7_lg.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/3_lg.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row">

<?php

require_once ("dbwebshop.php");

$conn->exec("USE $dbName");
$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$result = $stmt->fetchAll();

$product = "<div class='row'>";
 
foreach($result as $key => $value){ 

    $product .= "

<div class='col-lg-4 col-md-6 mb-4'>
  <div class='card h-100'>
  <img class='card-img-top' src='img/$value[img]' alt=''>

    <div class='card-body'>
    <h4 class='card-title'>$value[item]</a></h4>
    <h5>$value[price] $</h5>
    <p class='card-text'>$value[descriptions]</p>

    </div>
      <div class='card-footer'><a class='btn btn-success' 
      href='order.php?id=$value[product_id]'>Buy item </a>
    </div>

  </div>
</div>";
    
}

$product .= "</div>";
echo $product;
    
?>
</div>

<div class="col-lg-2"></div>

<!-- /.row -->

</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

