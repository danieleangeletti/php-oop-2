<?php
require __DIR__ . "/models/product.php";
require __DIR__ . "/istances/food.php";
require __DIR__ . "/istances/game.php";
require __DIR__ . "/istances/kennel.php";
require __DIR__ . "/products.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP OOP 2</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header>
    <div class="container">
      <h1>
        DOG CAT WORLD
      </h1>
    </div>
  </header>
  <main>
    <div class="container d-flex">
      <div class="card ms-2 me-2" style="width: 18rem;">
        <img src=<?php echo $dentastix->get_img() ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $dentastix->get_name() ?>
          </h5>
          <p class="card-text">
            <?php echo $dentastix->description ?>
          </p>
          <h5>
            <?php echo $dentastix->price ?>
          </h5>
          <h5>
            <?php echo $dentastix->category ?>
          </h5>
        </div>
      </div>
      <div class="card ms-2 me-2" style="width: 18rem;">
        <img src=<?php echo $fruugo_bone->get_img() ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $fruugo_bone->get_name() ?>
          </h5>
          <p class="card-text">
            <?php echo $fruugo_bone->description ?>
          </p>
          <h5>
            <?php echo $fruugo_bone->price ?>
          </h5>
          <h5>
            <?php echo $fruugo_bone->category ?>
          </h5>
        </div>
      </div>
      <div class="card ms-2 me-2" style="width: 18rem;">
        <img src=<?php echo $zooplus_special_cats_kennel->get_img() ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $zooplus_special_cats_kennel->get_name() ?>
          </h5>
          <p class="card-text">
            <?php echo $zooplus_special_cats_kennel->description ?>
          </p>
          <h5>
            <?php echo $zooplus_special_cats_kennel->price ?>
          </h5>
          <h5>
            <?php echo $zooplus_special_cats_kennel->category ?>
          </h5>
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>