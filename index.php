<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product ADD/DELETE</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="add_product.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        
        <label for="price">Product Price:</label>
        <input type="text" name="price" required>
        
        <button type="submit">Add Product</button>
    </form>

    <hr>

    <h2>Remove Product</h2>
    <form action="remove_product.php" method="post">
        <label for="product_id">Product ID to Remove:</label>
        <input type="text" name="product_id" required>
        
        <button type="submit">Remove Product</button>
    </form>
</body>
</html>
