<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<!-- Siempre post -->
<form action="imageupload.php" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <td><label for="image">Image:</label></td>
            <td><input type="file" name="image" size="20"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="Send">
            </td>
        </tr>
    </table>

</form>

</body>
</html>