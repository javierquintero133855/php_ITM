<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Portafolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a id="link" class="nav-link" href="?menu=inicio">Home <span class="sr-only">(current)</span></a>
            </li>
             <?php if(empty($_SESSION['usuario']))
                    {?>
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="?menu=ingreso">Login</a>
                    </li>
                <?php }?>
            
            <li class="nav-item">
                <a id="link" class="nav-link" href="?menu=registro">Registro</a>
            </li>
            <li class="nav-item">
                <a id="link" class="nav-link" href="?menu=contacto">Contacto</a>
            </li>
            <li class="nav-item">
                <a id="link" class="nav-link" href="?menu=equipo">Equipo</a>
            </li>
            <li class="nav-item">
                <a id="link" class="nav-link" href="?menu=integrantes">Integrantes</a>
            </li>
            <?php if(!empty($_SESSION['usuario']))
                    {?>
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="?menu=completar">Datos adicionales</a>
                     </li>
                    <?php }?>
             

              <li class="nav-item my-2 my-lg-0">
                <a id="link" class="nav-link" href="?menu=cambiopass"><?php
                    if(!empty($_SESSION['usuario']))
                    {
                        echo($_SESSION['usuario']);
                    }
                    ?></a>
            </li>
           
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         <?php  if(!empty($_SESSION['usuario']))
                    {?>
                         <form action="index.php" method="POST">
                         <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" id="salir" name="salir" value="1">Salir</button>
                         </form>
                   <?php }?>
        
    </div>
</nav>