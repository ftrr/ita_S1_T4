<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
    <form name="operacion" action="cuenta.php" method="post">
        <select name="operacion" >
            <option value="ingressar">Ingressar</option>
            <option value="retirar">Retirar</option>
        </select>
        <br>
        <br>
        <label for="">Cantidad:</label><br>
        <input type="number" name="valor">
        <input type="submit" name="operacio" value="Procesar">       
    </form>

</body>
</html>