<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

</head>
<body>

<h1>Delete product</h1>

<!-- Get hace que la información viaje de esta página a otra.
    A cual? a insert.php. Atento a todos los names -->

<form name="form" method="get" action="44_delete.php">
    <table><tr>
            <td>Ref</td>
            <td><label for="ref"></label>
                <input type="text" name="ref" id="ref"></td>
            <td>Description</td>
            <td><label for="description"></label>
                <input type="text" name="description" id="description"></td>
            <td><label for="updated"></label>
                <input type="datetime-local" name="updated" id="updated"></td>
        </tr>
        <tr>
            <td><input type="submit" name="send" value="Delete"></td>
            <td><input type="reset" name="cancel" value="Cancel"></td>
        </tr>
    </table>

</form>

</body>
</html>