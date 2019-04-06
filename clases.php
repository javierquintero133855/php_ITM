<?php
/**
Archivo para la creación de todas las clases de nuestro Web Site
 */

error_reporting(E_ERROR); //inactivar mensajes. En este caso, los WARNING

// Clase para la comunicación con la Base de Datos (db)

if(isset($_GET) && isset($_GET['login'])){
    login();
}



function login(){
    if(isset($_POST)){


        $email = $_POST['email'];
        $password = $_POST['password'];



        $query = new db();

        $result = $query->db_sql("select * from usuarios where email  = '$email' AND password = '$password'");

        if ($result) {
            $response = ($result->num_rows > 0) ? $result->fetch_array(MYSQLI_ASSOC): "error";
            if($response != "error"){
                // llenar sesion y redirect a index.php
                print_r("Bienvenido ".$response["nombre1"]." ".$response["apellido1"]);
            }else{

                // llenar sesion error con un mensaje
                print_r("!!!Error usuario no encontrado");
            }

        } else {
            print_r("else error");
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
        $this->connect = new mysqli('localhost','root','','website201901'); //instanciar la extensión o API mysqli
        $this->connect->set_charset('utf8');

        //Validar conexión
        if ($this->connect->connect_error) {
            echo "Fallo en la conexión. Error número "
                . $this->connect->connect_errno . " ("
                . $this->connect->connect_error . ")";
        }
    }

    //Método para cerrar la conexión a la base de datos
    function db_close(){
        $this->connect->close();
    }



    //Método para consultar datos de una tabla
    function db_sql($sql){
        $this->db_open();
        //$this->connect->query($sql);
        $this->result = $this->connect->query($sql);
        //$result_sql = $this->result->fetch_assoc();
        $this->db_close();
        //return $result_sql;
        return $this->result;
    }

    // metodo para Registrar


}
?>