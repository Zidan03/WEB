<?php

namespace Model;

class Merk {
    public function productList() {
        $product = [
            ["name" => "Coca Cola", "price" => 3500],
            ["name" => "Pepsi", "price" => 8000],
            ["name" => "Tebs", "price" => 5000],
            ["name" => "Mizone", "price" => 6000],
            ["name" => "C1000", "price" => 7000]
        ];

        return $product;
    }
}