<?php
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

if (isset($_GET) && ($_GET['contactar'])) {
    contactar();
}

function login()
{
    if (isset($_POST)) {


        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = new db();

        $result = $query->db_sql("select * from usuarios where email  = '$email' AND password = '$password'");

        if ($result) {
            $response = ($result->num_rows > 0) ? $result->fetch_array(MYSQLI_ASSOC) : "error";
            if ($response != "error") {
                // llenar sesion y redirect a index.php
                print_r("Bienvenido " . $response["nombre1"] . " " . $response["apellido1"]);
            } else {

                // llenar sesion error con un mensaje
                print_r("!!!Error usuario no encontrado");
            }

        } else {
            print_r("else error");
        }
        die;
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

        $query = new db();

        $result = $query->db_sql("INSERT INTO usuarios(email, password, nombre1, nombre2, apellido1, apellido2, rol, fecha_registro, estado, acceso, fecha) VALUES ('$mail','$pass','$name1','$name2','$lastname1','$lastname2','$rol','$fecha_reg','$state','$access','$fecha')");

        if ($result) {
            //$response = ($result) ? $result->fetch_array(MYSQLI_ASSOC) : "error";
            if ($result != "error") {
                // llenar sesion y redirect a index.php
                print_r("Usuario Registrado");
            } else {

                // llenar sesion error con un mensaje
                print_r("Usuario Registrado");
            }

        } else {
            print_r("Usuario Registrado");
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

        if ($result != "error"){
            print_r("ok");
        }else{
            print_r("Error");
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


}

?>