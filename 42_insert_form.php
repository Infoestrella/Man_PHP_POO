<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

</head>
<body>

<h1>New product</h1>

<!-- Get hace que la información viaje de esta página a otra.
    A cual? a insert.php. Atento a todos los names -->

<form name="form" method="get" action="43_insert.php">
    <table><tr>
            <td>Ref</td>
            <td><label for="ref"></label>
                <input type="text" name="ref" id="ref"></td>
            <td>Description</td>
            <td><label for="description"></label>
                <input type="text" name="description" id="description"></td>
        </tr>
        <tr>
            <td><input type="submit" name="send" value="Send"></td>
            <td><input type="reset" name="cancel" value="Cancel"></td>
        </tr>
    </table>

</form>

</body>
</html>