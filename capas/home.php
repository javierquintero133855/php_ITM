<form>
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h3 id="titulo">Bienvenidos</h3>
                <p id="p1">Este sitio web fue hecho por estudiantes del instituto tecnologico metropolitano con el fin
                    de practicar los temas vistos en clase de la asignatura programacion web con PHP.</p>
            </div>
            <div class="col-md-6">
                <h3 id="titulo">Presentación</h3>
                <p>El equipo se caracteriza por ser conformado por una muy alta calidad de personas con un enfoque muy
                    centralizado en lo que se desea y lo que se quiere lograr teniendo presente que para lograr estos
                    objetivos uno de los principales pasos es el estudio. Laboralmente se puede decir que cuenta con
                    unos conocimientos muy amplios capaces de poner frente a diversas situaciones que puedan llegar.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 id="titulo">Noticias</h3>
                <div>
                    <?php
                    require_once ('news.php');
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h3 id="titulo">Sitios de Interes</h3>
                <a href="https://www.w3schools.com/html/">W3-School, Visit our HTML tutorial</a><br>
                <a href="https://getbootstrap.com/">Bootstrap Documentacion</a><br>
                <a href="https://www.php.net/docs.php">PHP Documentacion</a><br>
            </div>

        </div>
    </div>
</form>