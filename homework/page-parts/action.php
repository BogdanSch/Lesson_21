<?php

function print_array($request){
    echo "<table class=\"table table-bordered\"><tr><td>Product name</td><td>Product price</td><td>Product sales</td></tr>";
    while ($res = $request->fetch_assoc()) {
        echo "<tr><td>{$res['product_name']}</td><td>{$res['product_price']}</td><td>{$res['product_sales']}</td></tr>";
    }
    echo "</table>";
}