<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
</head>
<body>

<?php

include("connection.php");

/*---- Empieza paginación ----*/

    $recordsperpage = 3;

    if (isset($_GET["page"])){ // Si el usuario no ha hecho clic en las páginas
        if($_GET["page"]==1){
            header("Location:index.php");
        }else{
            $page = $_GET["page"];
        }
    }else{
        $page = 1;
    }

    $pagestart = ($page - 1) * $recordsperpage;

    /* Sólo para sacar el total de registros */
    $sqltotal = "SELECT nombre, cifnif, telefono1 FROM agentes";
    $result = $base->prepare($sqltotal);
    $result->execute(array());

    $records = $result->rowCount();
    $pages = ceil($records / $recordsperpage);

/*---- Fin paginación ----*/

/* Almaceno un array de objetos en $customers. Cada campo es una propiedad */
$agents = $base->query("SELECT * FROM agentes LIMIT $pagestart, $recordsperpage")->fetchAll(PDO::FETCH_OBJ);

/* Si has pulsado create, es el único submit */
if (isset($_POST["create"])){

    $vat = $_POST["vat"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO agentes (dnicif, nombre, telefono1) VALUES (:vat, :name, :phone)";
    $result = $base->prepare($sql);
    $result->execute(array(":vat"=>$vat, ":name"=>$name, ":phone"=>$phone));
    header("Location:index.php");

}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

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
        foreach ($agents as $agent) :?>
            <tr>
                <td><?php echo $agent->codagente ?></td>
                <td><?php echo $agent->dnicif ?></td>
                <td><?php echo $agent->nombre ?></td>
                <td><?php echo $agent->telefono1 ?></td>
                <td>
                    <a href="edit.php?agentcode=<?php echo trim($agent->codagente) ?>
                        & vat=<?php echo $agent->dnicif ?>
                        & name=<?php echo $agent->nombre ?>
                        & phone=<?php echo $agent->telefono1 ?>">
                        <input type="button" name="edit" id="edit" value="Edit">
                    </a>
                    <a href="delete.php?agentcode=<?php echo $agent->codagente ?>">
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