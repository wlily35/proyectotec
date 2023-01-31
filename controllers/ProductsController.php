<?php
include_once("../models/Product.php");
include_once("../models/Cleaner.php");



if(isset($_POST["action"])) {
     $nombre = Cleaner::cleanInput($_POST["name"]);
     $descripcion = Cleaner::cleanInput($_POST["description"]);
     $precio = (int)Cleaner::cleanInput($_POST["price"]);

     $producto = new Product($nombre,$descripcion,$precio);

     if ($producto->save()) {
          echo "Datos guardados";
     } else {
          echo "Datos no guardados";
     }


} else {
     $products = Product::get();

     $products = json_encode($products);

     echo $products;
}
