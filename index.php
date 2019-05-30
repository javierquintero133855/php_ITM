<?php

session_start();

if (!empty($_POST['salir'])) {
    include('clases.php');
    $email = $_SESSION['usuario'];
    $sql = new db();
    $sql->db_sql("update usuarios set acceso = '0' where email  = '$email'");
    $_SESSION['usuario'] = "";
    session_destroy(); ?>
    <script type='text/javascript'>alert('la Sesion ha sido cerrada, gracias por tu ingreso');</script>
<?php }


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ITM - Curso PHP</title>
</head>
<body>

<header>
    <?php
    require_once("capas/header2.php");
    ?>
</header>

<section width="100">
    <div class="container">
        <?php
        if (isset($_GET['menu'])) {
            if ($_GET['menu'] == 'registro') {
                include('./formularios/registro.php');
                $flag = true;
            } else if ($_GET['menu'] == 'ingreso') {
                include('./formularios/login.php');
                $flag = true;
            } else if ($_GET['menu'] == 'contacto') {
                include('./formularios/contactar.php');
                $flag = true;
            } else if ($_GET['menu'] == '' || $_GET['menu'] == 'inicio') {
                include('./capas/carrusel.php');
                $flag = true;
            } else if ($_GET['menu'] == 'equipo') {
                include('./formularios/Equipo.php');
                $flag = true;
            } else if ($_GET['menu'] == 'integrantes') {
                include('./formularios/Integrantes.php');
                $flag = true;
            } else if ($_GET['menu'] == 'cambiopass') {
                include('./formularios/cambiopass.php');
            } else if ($_GET['menu'] == 'completar') {
                include('./formularios/completar.php');
                $flag = true;
            } else if ($_GET['menu'] == 'recuperarpass') {
                include('./formularios/recuperarpass.php');
                $flag = true;
            }
        } else {

        }
        ?>
    </div>

</section>


<?php
include('clases.php');
$db = new db();
?>

<?php
if ($flag){
// no se muestra el texto de bienvenidad
}else{
    require_once ('./capas/home.php');
}

?>


<footer class="footer">
    <div class="container">
        <p class="text-muted credit" align="center">Curso de Programación Web con PHP (<a href="http://www.itm.edu.co/">ITM</a>.
            2019-1)</p>
    </div>
    <div id="social">
        <a href="https://www.facebook.com" class="fa fa-facebook"></a>
        <a href="https://twitter.com/?lang=es" class="fa fa-twitter"></a>
        <a href="https://github.com/" class="fa fa-github"></a>
        <a href="https://www.google.com.co/" class="fa fa-google"></a>
        <a href="https://www.instagram.com/?hl=es-la/" class="fa fa-instagram"></a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

</body>


</html>