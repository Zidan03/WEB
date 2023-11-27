<?php

include "Controller/ProductController.php";

use Controller\ProductController;
//deklarasi objek

$productController = new ProductController;
// tampilkan hasil kembalian dari method getAllProduct
echo $productController->getAllProduct();