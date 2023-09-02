<?php
include ('conexion.php'); 


if (isset($_GET['dpi'])) {
    $dpi = $_GET['dpi'];

    $sql = "SELECT * FROM persona WHERE dpi = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(1, $dpi);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "No se encontró el registro.";
        exit; 
    }
} else {
    echo "ID no proporcionado.";
    exit; 
}
?>

<div>
    <form method="post" action="editar_proceso.php">
        <input type="hidden" name="dpi" value="<?php echo $fila['dpi']; ?>"><br>
        
        <label>Primer Nombre:</label><br>
        <input type="text" name="txtprinombre" value="<?php echo $fila['prinombre']; ?>"><br>
        <label>Segundo Nombre:</label><br>
        <input type="text" name="txtsegunombre" value="<?php echo $fila['segunombre']; ?>"><br>
        <label>Primer Apellido:</label><br>
        <input type="text" name="txtprimapellido" value="<?php echo $fila['primapellido']; ?>"><br>
        <label>Segundo Apellido:</label><br>
        <input type="text" name="txtseguapellido" value="<?php echo $fila['seguapellido']; ?>"><br>
        <label>Direccion:</label><br>
        <input type="text" name="txtdireccion" value="<?php echo $fila['direccion']; ?>"><br>
        <label>Teléfono de casa:</label><br>
        <input type="text" name="txttelefonocasa" value="<?php echo $fila['telefonocasa']; ?>"><br>
        <label>Teléfono:</label><br>
        <input type="text" name="txttelefono" value="<?php echo $fila['telefono']; ?>"><br>
        <label>Salario:</label><br>
        <input type="text" name="txtsalario" value="<?php echo $fila['salario']; ?>"><br>
        <label>Bonificación:</label><br>
        <input type="text" name="txtbonificacion" value="<?php echo $fila['bonificacion']; ?>"><br>
        <input type="submit" value="Guardar cambios">
        <a href="index.php">Inicio</a>  
    </form>
</div>
