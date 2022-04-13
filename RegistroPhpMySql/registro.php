<?php
include('dataBase.php');

/* if ($conex) {
    echo 'Todo correcto';
} */

if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/A");
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name', '$email', '$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            <h3 class="ok">¡Incripcion exitosa!</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡A ocurrido un error!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor complete los campos!</h3>
<?php
    }
}
