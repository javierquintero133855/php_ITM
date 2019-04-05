<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ITM - Curso PHP</title>
</head>
<body>

    <!-- Formulario de registro-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <h1>Formulario de registro</h1>
                    <form action="?accion=registrar" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre1">Primer Nombre</label>
                            <input type="text" class="form-control" id="nombre1" placeholder="Primer Nombre" name="nombre1">
                        </div>
                        <div class="form-group">
                            <label for="nombre2">Segundo Nombre</label>
                            <input type="text" class="form-control" id="nombre2" placeholder="Segundo Nombre" name="nombre2">
                        </div>
                        <div class="form-group">
                            <label for="apellido1">Primer Apellido</label>
                            <input type="text" class="form-control" id="apellido1" placeholder="Primer Apellido" name="apellido1">
                        </div>
                        <div class="form-group">
                            <label for="apellido2">Segundo Apellido</label>
                            <input type="text" class="form-control" id="apellido2" placeholder="Segundo Apellido" name="apellido2">
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>

                </div>
            </div>
        </div>

    <!-- //Formulario de registro -->
</div>
</body>
</html>