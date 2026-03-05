<?php
session_start();

/* CONNECT MYSQL */
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* CREATE DATABASE */
$conn->query("CREATE DATABASE IF NOT EXISTS SHOP");
$conn->select_db("SHOP");

/* ADD NEW PRODUCT TO DATABASE */
if (isset($_POST['add_product'])) {
    $pname     = $_POST['pname'] ?? '';
    $pprice    = $_POST['pprice'] ?? '';
    $pcategory = $_POST['pcategory'] ?? '';

    if (!empty($pname) && !empty($pprice) && !empty($pcategory)) {
        $stmt = $conn->prepare("INSERT INTO products(name,price,category) VALUES(?,?,?)");
        $stmt->bind_param("sds", $pname, $pprice, $pcategory);
        $stmt->execute();
    }
}

/* ADD TO CART */
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $product = $stmt->get_result()->fetch_assoc();

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $product;
}

/* REMOVE FROM CART */
if (isset($_POST['remove_from_cart'])) {
    $remove_index = $_POST['remove_index'];
    if (isset($_SESSION['cart'][$remove_index])) {
        unset($_SESSION['cart'][$remove_index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; margin: 0; padding: 20px; }
        .section { background: white; padding: 20px; margin-bottom: 20px; border-radius: 8px; }
        h2 { margin-top: 0; }
        button { padding: 8px 12px; cursor: pointer; border: none; border-radius: 4px; }
        .add-btn { background: #28a745; color: white; }
        .delete-btn { background: red; color: white; }
        .submit-btn { background: #007bff; color: white; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        input, select { padding: 8px; margin: 5px 0; width: 100%; }
    </style>
</head>
<body>

<h1>Shop Management & Cart</h1>

<div class="section">
    <h2>Add New Product</h2>
    <form method="POST">
        <input type="text" name="pname" placeholder="Product Name" required>
        <input type="number" step="0.01" name="pprice" placeholder="Product Price" required>
        <select name="pcategory" required>
            <option value="">Select Category</option>
            <option value="Food">Food</option>
            <option value="Electronics">Electronics</option>
            <option value="Dress">Dress</option>
            <option value="Shoes">Shoes</option>
        </select>
        <button type="submit" name="add_product" class="submit-btn">Add Product</button>
    </form>
</div>

<?php
// Show products grouped by category
$categories = ['Food','Electronics','Dress','Shoes'];
foreach ($categories as $cat) {
    echo "<div class='section'><h2>$cat</h2>";
    $products = $conn->prepare("SELECT * FROM products WHERE category=?");
    $products->bind_param("s", $cat);
    $products->execute();
    $result = $products->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>
                    <h3>{$row['name']}</h3>
                    <p>Price: ₹{$row['price']}</p>
                    <form method='POST'>
                        <input type='hidden' name='product_id' value='{$row['id']}'>
                        <button type='submit' name='add_to_cart' class='add-btn'>Add to Cart</button>
                    </form>
                  </div><hr>";
        }
    } else {
        echo "<p>No products in this category.</p>";
    }
    echo "</div>";
}
?>

<div class="section">
    <h2>Your Cart</h2>
    <?php if (!empty($_SESSION['cart'])) { ?>
        <table>
            <tr><th>Product</th><th>Category</th><th>Price</th><th>Action</th></tr>
            <?php foreach ($_SESSION['cart'] as $index => $item) { ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['category']; ?></td>
                    <td>₹<?php echo $item['price']; ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="remove_index" value="<?php echo $index; ?>">
                            <button type="submit" name="remove_from_cart" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>Your cart is empty.</p>
    <?php } ?>
</div>

</body>
</html>
