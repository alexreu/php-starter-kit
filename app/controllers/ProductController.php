<?php

class ProductController
{
    public function __construct()
    {
        require 'app/models/Product.php';
    }

    public function getAll() {
        return Product::findAll();
    }
}
