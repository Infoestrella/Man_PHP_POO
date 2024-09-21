<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MVC</title>
</head>
<body>

<?php

require("model/Pagination.php");

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <table class="sap-table">
        <tr>
            <th class="sap-table thead">Code</td>
            <th class="sap-table thead">VAT</td>
            <th class="sap-table thead">Name</td>
            <th class="sap-table thead">Phone</td>
        </tr>
        <tr>
            <td class="sap-table tbody td"><input type="text" name="code"></td>
            <td class="sap-table tbody td"><input type="text" name="vat"></td>
            <td class="sap-table tbody td"><input type="text" name="name"></td>
            <td class="sap-table tbody td"><input type="text" name="phone"></td>
            <td class="sap-table tbody td"><input type="submit" name="create" id="create" value="Create"></td>
        </tr>

        <?php

        foreach ($customersArray as $customer) :?>
            <tr>
                <td class="sap-table tbody td"><?php echo $customer["codcliente"] ?></td>
                <td class="sap-table tbody td"><?php echo $customer["cifnif"] ?></td>
                <td class="sap-table tbody td"><?php echo $customer["nombre"] ?></td>
                <td class="sap-table tbody td"><?php echo $customer["telefono1"] ?></td>
                <td class="sap-table tbody td">
                    <a href="edit.php?customercode=<?php echo trim($customer["codcliente"]) ?>
                        & vat=<?php echo $customer["cifnif"] ?>
                        & name=<?php echo $customer["nombre"] ?>
                        & phone=<?php echo $customer["telefono1"] ?>">
                        <input type="button" name="edit" id="edit" value="Edit">
                    </a>
                    <a href="delete.php?customercode=<?php echo $customer["codcliente"] ?>">
                        <input type="button" name="delete" id="delete" value="Delete">
                    </a>
                </td>
            </tr>

        <?php
            endforeach;
        ?>

    </table>

</form>

<?php

/* Paginación */
echo "<br>";
for ($i=1; $i<=$pages; $i++){
    echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
}

?>

</body>
</html>