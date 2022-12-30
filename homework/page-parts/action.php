<?php

function print_array($request){
    //<td>Product name</td><td>Product price</td><td>Product sales</td>
    echo "<table class=\"table table-bordered\"><tr>";
    $i = 0;
    while ($res = $request->fetch_assoc()) {
        if($i == 0){
            foreach ($res as $key => $value) {
                if(!str_contains($key, "id"))
                    echo "<td>{$key}</td>";
            }
            echo "</tr>";
            $i++;
        }
        echo "<tr>";
        foreach ($res as $key => $value) {
            if(!str_contains($key, "id"))
                echo "<td>{$value}</td>";
        }
        echo "</tr>";
        // echo "<tr><td>{$res['product_name']}</td><td>{$res['product_price']}</td><td>{$res['product_sales']}</td></tr>";
    }
    echo "</table>";
}