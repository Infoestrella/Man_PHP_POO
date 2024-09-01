<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
</head>
<body>

<?php

include("connection.php");

/* Almaceno un array de objetos en $customers. Cada campo es una propiedad */
$customers = $base->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_OBJ);

?>

<table border="1">
    <tr>
        <td>Code</td>
        <td>VAT</td>
        <td>Name</td>
        <td>Phone</td>
    </tr>   
    <tr>
        <td><input type="text" name="code"></td>
        <td><input type="text" name="vat"></td>
        <td><input type="text" name="name"></td>
        <td><input type="text" name="phone"></td>
        <td><input type="submit" name="create" id="create" value="Create"></td>
    </tr>

    <?php

    /* Ojo con la sintaxis <?php los : para llegar al endforeach */
    foreach ($customers as $customer) :?>
        <tr>
            <td><?php echo $customer->codcliente ?></td>
            <td><?php echo $customer->cifnif ?></td>
            <td><?php echo $customer->nombre ?></td>
            <td><?php echo $customer->telefono1 ?></td>
            <td>
                <a href="edit.php?customercode=<?php echo $customer->codcliente ?>
                    & name=<?php echo $customer->cifnif ?>
                    & vat=<?php echo $customer->nombre ?>
                    & phone=<?php echo $customer->telefono1 ?>">
                    <input type="button" name="update" id="update" value="Update">
                </a>
                <a href="delete.php?customercode=<?php echo $customer->codcliente ?>">
                    <input type="button" name="delete" id="delete" value="Delete">
                </a>
            </td>
        </tr>

    <?php
        endforeach;
    ?>

</table>

</body>
</html>