<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit</title>
</head>
<body>

<?php

include("connection.php");

/* Si no has pulsado Update ejecuta $_GET */
if (!isset($_POST["send"])){

    $agentcode = $_GET["agentcode"];
    $vat = $_GET["vat"];
    $name = $_GET["name"];
    $phone = $_GET["phone"];

/* Si he pulsado Update capturo los datos de $_POST */
}else{

    $agentcode = $_POST["agentcode"];
    $vat = $_POST["vat"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    $sql = "UPDATE agentes SET dnicif=:myVat, nombre=:myName, telefono1=:myPhone WHERE codagente=:myAgentCode";
    $result = $base->prepare($sql);
    $result->execute(array(":myAgentCode"=>$agentcode, ":myVat"=>$vat, ":myName"=>$name, ":myPhone"=>$phone));
    header("Location:index.php");
}

?>

<form name="formedit" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td></td>
            <td>
                <input type="hidden" name="agentcode" id="code" value=<?php echo $agentcode ?>>
            </td>
        </tr>
        <tr>
            <td>VAT</td>
            <td>
                <input type="text" name="vat" id="vat" value=<?php echo $vat ?>>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" id="name" value=<?php echo $name ?>>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>
                <input type="text" name="phone" id="phone" value=<?php echo $phone ?>>
            </td>
        </tr>
    </table>
    <input type="submit" name="send" id="send" value="Update">
</form>

</body>
</html>