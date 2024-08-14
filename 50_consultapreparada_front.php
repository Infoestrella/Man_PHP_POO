<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mysql bbdd</title>

</head>
<body>

<h1>New product</h1>

<form name="form" method="get" action="50_consultapreparada_back.php">
    <table>
        <tr>
            <td>Ref</td>
            <td><label for="reference"></label>
                <input type="text" name="reference" id="reference">
            </td>
        </tr>
            <td>Description</td>
            <td><label for="description"></label>
                <input type="text" name="description" id="description">
            </td>
        </tr>
            <td>Family</td>
            <td><label for="family"></label>
                <input type="text" name="family" id="family">
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="send" value="Send"></td>
            <td><input type="reset" name="cancel" value="Cancel"></td>
        </tr>
    </table>
</form>

</body>
</html>