<?php

require ("ProductList.php");

$search = $_GET["search"];

/* Tengo que instanciar para que se ejecute el constructor */
$products = new ProductList();
$productsArray = $products->getProducts($search);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product list</title>
</head>
<body>

<?php

    foreach($productsArray as $product){
        echo "<table><tr><td>";
        echo $product['referencia'] . "</td><td>";
        echo $product['descripcion'] . "</td><td>";
        echo $product['codfamilia'] . "</td>";
        echo "</tr></table>";
    }

?>

</body>
</html>