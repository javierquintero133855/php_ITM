
<div class="container">
    <table class="table table-striped">

        <thead>
        <th>ID</th>
        <th>Fecha</th>
        <th>Email</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Ciudad</th>
        <th>Asunto</th>
        <th>Mensaje</th>

        </thead>
    <?php
    include './clases.php';
    $query = new db();
    $sql = "SELECT * FROM contacto";
    $result = $query->db_sql($sql);
    if ($result != null) {
        while ($fila = $result->fetch_assoc()) {


            ?>


                <tbody>
                <td><?php echo $fila[contacto_Id]; ?></td>
                <td><?php echo $fila[fecha]; ?></td>
                <td><?php echo $fila[email]; ?></td>
                <td><?php echo $fila[nombre1] . " " . $fila[nombre2]; ?></td>
                <td><?php echo $fila[apellido1] . " " . $fila[apellido2]; ?></td>
                <td><?php echo $fila[ciudad]; ?></td>
                <td><?php echo $fila[asunto]; ?></td>
                <td><?php echo $fila[mensaje]; ?></td>
                </tbody>





            <?php
        }
    }
    ?>
    </table>
</div>
