<?php
require_once "dbconnect.php";
include("../page-parts/header.php");
include("../page-parts/action.php");

//1
$sql = "SELECT * FROM products_sales WHERE product_sales=(SELECT  MAX(product_sales) FROM products_sales);";
$result = $conn->query($sql);
print_array($result);
echo "<hr>";
//2
$sql = "SELECT SUM(product_price) AS TOTAL_PRICES FROM products_sales;";
$result = $conn->query($sql);
echo($result->fetch_assoc()['TOTAL_PRICES']);
echo "<hr>";
//3
$sql = "SELECT * FROM products_sales ORDER BY product_name DESC;";
$result = $conn->query($sql);
print_array($result);
echo "<hr>";
//4
$sql = "SELECT * FROM products_sales WHERE product_sales > 20
AND (product_sales > 15 AND product_sales < 500);";
$result = $conn->query($sql);
print_array($result);

$conn->close();
include("../page-parts/footer.php");
