<?php
require 'db.php';

$usuarios = $conexion->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_OBJ);
//$datos = $conexion->query("SELECT * FROM usuarios")
?>

<!DOCTYPE html>
<html>
<body>
    <ul>
        <?php foreach($usuarios as $usuario): ?>
        <li>
            <?php echo($usuario->nombre." ".$usuario->correo)?>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>