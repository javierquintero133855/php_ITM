<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Archivo para la creación de todas las clases de nuestro Web Site
 */

error_reporting(E_ERROR); //inactivar mensajes. En este caso, los WARNING

// Clase para la comunicación con la Base de Datos (db)

if (isset($_GET) && isset($_GET['login'])) {
    login();
}
if (isset($_GET) && isset($_GET['registrar'])) {
    registrar();
}

if (isset($_GET) && isset($_GET['contactar'])) {
    contactar();
}
if (isset($_GET) && isset($_GET['cambiopassword'])) {
    cambiopassword();
}
if (isset($_GET) && isset($_GET['salir'])) {
    salir();
}
if (isset($_GET) && isset($_GET['completar'])) {
    completarregistro();
}
if (isset($_GET) && isset($_GET['recuperarpass'])) {
    recuperarpass();
}
function login()
{
    if (isset($_POST)) {

        $fecha = date("Y-m-d H:i:s");
        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = new db();

        $result = $query->db_sql("select email from usuarios where email  = '$email' AND password = SHA1('$password')");
        $res = $result;
        if ($result) {
            $fila = $result->fetch_assoc();
            session_start();
            $_SESSION['usuario'] = $fila['email'];
            $response = ($result->num_rows > 0) ? $result->fetch_array(MYSQLI_ASSOC) : "error";
            if ($response != "error") {
                // llenar sesion y redirect a index.php
                $query->db_sql("update usuarios set acceso = '1', fecha='$fecha' where email  = '$email' AND password = '$password'");
                $mensaje = "Bienvenido " . $_SESSION['usuario'];
                // $mensaje = "Bienvenido " . $response["nombre1"] . " " . $response["apellido1"];
                $path = "http://localhost:81/2_actividad/index.php";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";


            } else {

                // llenar sesion error con un mensaje

                $mensaje = "!!!Error usuario no encontrado,  se redireccionará al formulario de registro";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                $path = "http://localhost:81/2_actividad/index.php?menu=registro";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";
            }

        } else {
            print_r("!!!Error");
        }
        die;
    }
}

//metodo cambio de contraseña
function cambiopassword()
{
    if (isset($_POST)) {

        session_start();
        $email = $_SESSION['usuario'];

        $password = $_POST['password'];

        $newpass = $_POST['newpassword'];


        $query = new db();
        $result = $query->db_sql("select * from usuarios where email  = '$email' AND password = '$password'");
        if ($result) {
            $response = ($result->num_rows > 0) ? $result->fetch_array(MYSQLI_ASSOC) : "error";
            if ($response != "error") {
                // llenar sesion y redirect a index.php
                $query->db_sql("update usuarios set password = '$newpass' where email  = '$email' AND password = '$password'");

                $mensaje = "Contraseña cambiada con éxito ";
                $path = "http://localhost:81/2_actividad/index.php";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";


            } else {
                // llenar sesion error con un mensaje

                $mensaje = "!!!Error contraseña incorrecta";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                $path = "http://localhost:81/2_actividad/index.php?menu=registro";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";

            }
            die;
        } else {
            print_r("!!!Error");
        }
    } else {
        print_r("!!!Error");
    }
}

//metodo para completar registro
function completarregistro()
{
    if (isset($_POST)) {

        session_start();
        $email = $_SESSION['usuario'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $profesion = $_POST['profesion'];


        $query = new db();
        $result = $query->db_sql("select * from usuarios where email  = '$email'");
        if ($result) {
            $response = ($result->num_rows > 0) ? $result->fetch_array(MYSQLI_ASSOC) : "error";
            if ($response != "error") {
                // llenar sesion y redirect a index.php
                $query->db_sql("update usuarios set edad = '$edad', sexo='$sexo', profesion='$profesion' where email  = '$email'");

                $mensaje = "El registro ha sido completado exitosamente";
                $path = "http://localhost:81/2_actividad/index.php";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";


            } else {
                // llenar sesion error con un mensaje

                $mensaje = "!!!Ha ocurrido un error al intentar completar en registro";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                $path = "http://localhost:81/2_actividad/index.php?menu=registro";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";

            }
            die;
        } else {
            print_r("!!!Error");
        }
    } else {
        print_r("!!!Error");
    }
}

//metodo para recuperar contraseña
function recuperarpass()
{
    if (isset($_POST)) {

        $email = $_POST['email'];

        $query = new db();
        $result = $query->db_sql("select password from usuarios where email  = '$email'");
        if ($result) {
            $fila = $result->fetch_assoc();

            $pass = $fila['password'];
            $response = ($result->num_rows > 0) ? $result->fetch_array(MYSQLI_ASSOC) : "error";
            if ($response != "error") {
                // llenar sesion y redirect a index.php
                $to = $email;
                $subject = "Recuperación de contraseña sitio web PHPStudents PPI620303";
                $message = "Su clave es: " . $pass;
                $headers = "From: PhpStudents ";
                $bool = mail($to, $subject, $message, $headers);
                if ($bool) {
                    $mensaje = "La contraseña ha sido enviada a su correo electronico ";
                    $path = "http://localhost:81/2_actividad/index.php";
                    echo "<script type='text/javascript'>alert('$mensaje');</script>";
                    echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";
                } else {
                    $mensaje = "ha ocurrido un error al enviadar correo electronico ";
                    $path = "http://localhost:81/2_actividad/index.php";
                    echo "<script type='text/javascript'>alert('$mensaje');</script>";
                    echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";
                }


            } else {
                // llenar sesion error con un mensaje

                $mensaje = "!!!Error email no registrado";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                $path = "http://localhost:81/2_actividad/index.php?menu=registro";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";

            }
            die;
        } else {
            print_r("!!!Error");
        }
    } else {
        print_r("!!!Error");
    }
}

// metodo para Registrar
function registrar()
{
    if (isset($_POST)) {
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $name1 = $_POST['nombre1'];
        $name2 = $_POST['nombre2'];
        $lastname1 = $_POST['apellido1'];
        $lastname2 = $_POST['apellido2'];
        $rol = 1;
        $access = 1;
        $fecha_reg = date("Y-m-d H:i:s");
        $state = 0;
        $fecha = date("Y-m-d H:i:s");
        $asunto = "Registro satisfactorio, Gracias por registrarse";
        $mensaje = "gdfgdf";

        $query = new db();

        $result = $query->db_sql("INSERT INTO usuarios(email, password, nombre1, nombre2, apellido1, apellido2, rol, fecha_registro, estado, acceso, fecha) VALUES ('$mail', SHA1('$pass'),'$name1','$name2','$lastname1','$lastname2','$rol','$fecha_reg','$state','$access','$fecha')");
        $response = ($result > 0) ? true : false;

        if ($response) {

            $clsmail = new SendMail();
            $clsmail->Enviar($mail, $asunto, $mensaje);
            $mensaje = "!Usuario Registrado !";
            $path = "http://localhost:81/2_actividad/index.php?menu=ingreso";

            echo "<script type='text/javascript'>alert('$mensaje');</script>";
            echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";

        } else {

            $mensaje = "!El usuario $mail, ya está registrado, se redireccionrá al login !";
            $path = "http://localhost:81/2_actividad/index.php?menu=ingreso";
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
            echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";
        }


        die;


    }

}

function contactar()
{
    if (isset($_POST)) {
        $mail = $_POST['email'];
        $name1 = $_POST['nombre1'];
        $name2 = $_POST['nombre2'];
        $lastname1 = $_POST['apellido1'];
        $lastname2 = $_POST['apellido2'];
        $ciudad = $_POST['ciudad'];
        $asunto = $_POST['asunto'];
        $mensage = $_POST['mensaje'];
        $fecha = date("Y-m-d H:i:s");

        $query = new db();

        $result = $query->db_sql("INSERT INTO contacto(email, nombre1, nombre2, apellido1, apellido2, ciudad, asunto, mensaje, fecha) VALUES ('$mail','$name1','$name2','$lastname1','$lastname2','$ciudad','$asunto','$mensage','$fecha')");

        if ($result) {
            //echo "result es true". $result;
            if ($result >= 1) {
                $mensaje = "su solicitud será procesada";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
                $path = "http://localhost:81/2_actividad/index.php?menu=contacto";
                echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";
            } else {
                $mensaje = "!!!Error";
                echo "<script type='text/javascript'>alert('$mensaje');</script>";
            }
        } else {
            //print_r("else primer if");
            $mensaje = "!Error faltan datos !";
            $path = "http://localhost:81/2_actividad/index.php?menu=registro";
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
            echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";
        }
        die;

    }

}


class db
{

    //Atributos
    private $connect;

    //Método para la conexión o apertura (open) de la base de datos.
    function db_open()
    {
        $this->connect = new mysqli('localhost', 'root', '', 'website201901'); //instanciar la extensión o API mysqli
        $this->connect->set_charset('utf8');

        //Validar conexión
        if ($this->connect->connect_error) {
            echo "Fallo en la conexión. Error número "
                . $this->connect->connect_errno . " ("
                . $this->connect->connect_error . ")";
        }
    }

    //Método para cerrar la conexión a la base de datos
    function db_close()
    {
        $this->connect->close();
    }


    //Método para consultar datos de una tabla
    function db_sql($sql)
    {
        $this->db_open();
        //$this->connect->query($sql);
        $this->result = $this->connect->query($sql);
        //$result_sql = $this->result->fetch_assoc();
        $this->db_close();
        //return $result_sql;
        return $this->result;
    }

    function salir()
    {
        session_destroy();
        $path = "http://localhost:81/2_actividad/index.php?menu=registro";
        echo "<script type='text/javascript'>alert('$mensaje');</script>";
        echo "<script>setTimeout(\"location.href = '$path';\",1500);</script>";

    }


}


class SendMail
{

    function Enviar()
    {

        require './mailer/src/Exception.php';
        require './mailer/src/PHPMailer.php';
        require './mailer/src/SMTP.php';
        $mail = new PHPMailer(true);

        try {

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'javierquinterog1216@gmail.com';
            $mail->Password = 'N0m3l4s3*';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('javierquinterog1216@gmail.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');


            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';

            $mail->send();
            echo ' por favor confirmar su registro a travez del email enviado a su cuenta de correo';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}




