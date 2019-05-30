<!-- Formulario de registro-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <h1 id="htitulo">Formulario de registro</h1>
                <form action="./clases.php?registrar" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                   name="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nombre1">Primer Nombre</label>
                            <input type="text" class="form-control" id="nombre1" placeholder="Primer Nombre"
                                   name="nombre1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre2">Segundo Nombre</label>
                            <input type="text" class="form-control" id="nombre2" placeholder="Segundo Nombre"
                                   name="nombre2" required>
                        </div>


                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="apellido1">Primer Apellido</label>
                            <input type="text" class="form-control" id="apellido1" placeholder="Primer Apellido"
                                   name="apellido1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido2">Segundo Apellido</label>
                            <input type="text" class="form-control" id="apellido2" placeholder="Segundo Apellido"
                                   name="apellido2" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>

            </div>
        </div>
    </div>

    <!-- //Formulario de registro -->
