<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- BOOTSTRAP-->
    <!-- Compilado de CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Librería jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Compilado JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Fin Bootstrap -->
    <title>ITM - Curso PHP</title>
</head>
<body>

<header>
    <?php
    require_once("capas/header.php");
    ?>
</header>

<section>
    <div class="container">
      <?php
        if (isset($_GET['menu'])) {
            if($_GET['menu']=='registro'){
                include('./formularios/registro.php');
            }else if ($_GET['menu']== 'ingreso') {
                include('./formularios/login.php');
            }else if ($_GET['menu']== 'contacto') {
                include('./formularios/contacto.php');
            }else if ($_GET['menu']== '' || $_GET['menu']== 'inicio') {

            }
        }else{

        }
        ?>
    </div>

</section>







<?php
include('clases.php');
$db = new db();
?>








<footer>
    <?php
    require_once ("capas/footer.php");
    ?>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>


</html>