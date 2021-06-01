<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="./bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css"  rel="stylesheet" type="text/css"  >
    <link href="./css/estilos.css" rel="stylesheet" type="text/css"  >
</head>
<body>
<div class="container">
        <div id="crear" class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        
                        Formulario
                    </div>
                    <div class="card-body">
                      <form action="respuesta.php" method="GET">
                
                        <div class="form-group">
                          <label for="nombre">Nombres</label>
                          <input name="nombre" type="text" class="form-control" id="nombres" placeholder="Nombres" name="nombres" required>
                        </div>

                        <div class="form-group">
                          <label for="apellidos">Apellidos</label>
                          <input name= "apellido" type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                        </div>

                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input name="edad" type="number" class="form-control" id="edad" placeholder="Edad">
                          </div>

                        <div class="form-group">
                            <label for="curso">Grado</label>
                            <input name="grado" type="number" class="form-control" id="grado" placeholder="Grado">
                          </div>

                            <button type="submit" class="btn btn-primary" onclick=validacion()> Enviar </button>

                      </form>
                    </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

</body>
</html>