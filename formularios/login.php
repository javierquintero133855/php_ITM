
<div class="container">
    <h1 id="htitulo">Iniciar Sesión</h1>
    <form action="./clases.php?login" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Ingrese su email" required>
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Recordar Contraseña
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

        <a  href="?menu=recuperarpass" >Recuperar contraseña</a>
    </form>
</div>



