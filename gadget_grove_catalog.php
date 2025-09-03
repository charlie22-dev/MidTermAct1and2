<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $gadget_grove_catalog=["earbuds", "smartphone", "tablet", "smartwatch", " laptop"];
    $product_prices=[899.99, 2000.99, 4000.99, 700.99, 20000.99,];
    
    echo "Product names: " .implode(", ", $gadget_grove_catalog);
    echo " <br> First Product Price:  ₱ " .$product_prices[0];
    echo " <br> Last Product Price:    ₱ " . $product_prices[count($product_prices) - 1];
    echo "   <br> ";
    $selected_Product=[" name" => "earbuds <br> ", "price" => 899.99, "brand" => "gadgetgrove", "inStock" => true, "description" => "A earbuds for fitness and travel <br> "];
    echo "<br> -------Product details------- <br> ";
    echo " Name: " .$selected_Product[" name"];
    echo "Price: " .$selected_Product["price"];
    echo " <br>Brand: " .$selected_Product["brand"];
    echo " <br>Availability: " .($selected_Product["inStock"] ? " may stock " : " walang stock ");
    echo "<br> Description:  " .$selected_Product["description"];

    $selected_Product[" warranty"] = " 1 year <br> ";
    echo " Warranty: ".$selected_Product[" warranty"];

    $catalog = [ ["id" => 1,
        "name" => "earbuds",
        "price" => 899.99,
        "inStock" => true],
        
        [ "id" => 2,
        "name" => "smartphone",
        "price" => 2000.99,
        "inStock" => true],

        [ "id" => 3,
        "name" => "tablet",
        "price" => 4000.99,
        "inStock" => false],

        [  "id" => 4,
        "name" => "smart watch",
        "price" => 700.99,
        "inStock" => false],

        [ "id" => 5, 
        "name" => "laptop",
        "price" => 20000.99,
        "inStock" => true]
        
        ];

        echo "   <br> "; 
        echo "-------------Full Product Catalog------ <br> ";

foreach ($catalog as $product) {
    echo " <br> Product: " . $product["name"] . " - Price: ₱" . number_format($product["price"], 2);
}
    ?>
    
</body>
</html>