<!-- Formulario de registro-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <h1>Formulario de Contacto</h1>

                <form action="./clases.php?contactar" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="nombre1">Primer Nombre</label>
                            <input type="text" class="form-control" id="nombre1" placeholder="Primer Nombre" name="nombre1" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nombre2">Segundo Nombre</label>
                            <input type="text" class="form-control" id="nombre2" placeholder="Segundo Nombre" name="nombre2">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="apellido1">Primer Apellido</label>
                            <input type="text" class="form-control" id="apellido1" placeholder="Primer Apellido" name="apellido1" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="apellido2">Segundo Apellido</label>
                            <input type="text" class="form-control" id="apellido2" placeholder="Segundo Apellido" name="apellido2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="apellido2" placeholder="Ciudad" name="ciudad" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="asunto">Asunto</label>
                            <input type="text" class="form-control" id="apellido2" placeholder="Asunto" name="asunto" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>
        </div>
    </div>
