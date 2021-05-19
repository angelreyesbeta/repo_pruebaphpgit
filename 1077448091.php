<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PRUEBA PHP</title>
</head>
<body>
    <div class="container mt-3">
        <h1 align="center">Ingresa la información solicitada<h1>
        <form method="post" class="row g-3 needs-validation mt-5" novalidate id="frmEnviar">
            <div class="col-md-6 col-sm-12">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" value="Angel Reyes" name="txtName" id="txtName" required>
                <div class="valid-feedback">
                    ok!
                </div>
            </div>

        <div class="form-group col-md-6 col-sm-12 ">
            <label for="example-date-input" class="form-label">Fecha de Nacimiento</label>
            <input class="form-control" type="date" value="1991-04-22" name="txtDate" id="txtDate">
            <div class="valid-feedback">
                ok!
            </div>
        </div>
      
        <div class="col-12" align="right">
            <button class="btn btn-primary" onclick="enviar();" type="button">Enviar</button>
        </div>
        </form>
        <div class="datos">
            <h2 id="name"></h2>
            <h2 id="edad"></h2>
            <div class="impares" id="impares">
                <h3>Años Impares</h3>
                <hr>
                <h3 id="anios"></h3>    
                <h3 id="anios2"></h3>    
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>      
    <script src="./jquery/dist/jquery.min.js"></script>
    <script src="./jquery/dist/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="scripts/enviar.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>