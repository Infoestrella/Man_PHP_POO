<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit</title>
</head>
<body>

<?php

$customercode = $_GET["customercode"];
$vat = $_GET["vat"];
$name = $_GET["name"];
$phone = $_GET["phone"];

?>

<form name="formedit" method="post" action="">
    <table>
        <tr>
            <td>Code</td>
            <td>
                <input type="text" name="code" id="code" value=<?php echo $customercode ?>>
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