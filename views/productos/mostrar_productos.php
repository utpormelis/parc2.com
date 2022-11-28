<?php require_once("controllers/productos_controller.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <br>
    <div class="container">
    <center> <h1 class="text-info">Comida Rapida El Sabor</h1> </center>
        <br>
        <div class="row">
            <?php foreach (productos_controller::mostrar_productos() as $productos) {?>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $productos->getimg() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $productos->getdescripcion() ?></h5>
                            <p class="card-text">Precio de venta <?php echo $productos->getprecio_venta() ?></p>
                            <p class="card-text">Existencia <?php echo $productos->getcantidad_en_existencia() ?></p>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>