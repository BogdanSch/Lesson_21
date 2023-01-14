<?php
require_once "dbconnect.php";
include("../page-parts/header.php");
include("../page-parts/action.php");

//1
$stmt = $conn->prepare("SELECT * FROM products_sales WHERE product_sales=(SELECT  MAX(?) FROM products_sales);");
$stmt->bind_param("s", $val);
$val = "product_sales";
$stmt->execute();
$result = ($stmt->get_result());
print_array($result);
echo "<hr>";
//2
$stmt = $conn->prepare("SELECT SUM(?) AS TOTAL_PRICES FROM products_sales;");
$stmt->bind_param("s", $search_key);
$search_key = "product_price";
$stmt->execute();
$result = ($stmt->get_result());
echo($result->fetch_assoc()["TOTAL_PRICES"]);
echo "<hr>";
//3
$stmt = $conn->prepare("SELECT * FROM products_sales ORDER BY ? DESC;");
$stmt->bind_param("s", $order_key);
$order_key = "product_name";
$stmt->execute();
$result = ($stmt->get_result());
print_array($result);
echo "<hr>";
//4
$stmt = $conn->prepare("SELECT * FROM products_sales WHERE product_sales > ?
AND (product_sales > 15 AND product_sales < 500);");
$stmt->bind_param("s", $val);
$val = "20";
$stmt->execute();
$result = ($stmt->get_result());
print_array($result);

$conn->close();
include("../page-parts/footer.php");
