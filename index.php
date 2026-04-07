<?php
if($_POST){
    foreach ($_POST as $clave => $valor){
        echo "El valor de $clave es: $valor <br>";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre"><br>
    <input type="text" name="edad" placeholder="Edad"><br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>