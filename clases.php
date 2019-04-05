<?php
/**
Archivo para la creación de todas las clases de nuestro Web Site
 */

error_reporting(E_ERROR); //inactivar mensajes. En este caso, los WARNING

// Clase para la comunicación con la Base de Datos (db)
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