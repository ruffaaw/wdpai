<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Product.php';

class ProductRepository extends Repository
{
    public function getProducts(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.products
        ');
        $stmt->execute();
        $products = $stmt->fetchALL(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $result[] = new Product(
                $product['type'],
                $product['name'],
                $product['price'],
                $product['image']
            );
        }
        return $result;
    }

    public function getProductsDesktops(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.products where type = 1
        ');
        $stmt->execute();
        $products = $stmt->fetchALL(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $result[] = new Product(
                $product['type'],
                $product['name'],
                $product['price'],
                $product['image']
            );
        }
        return $result;
    }

    public function getProductsLaptops(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.products where type = 2
        ');
        $stmt->execute();
        $products = $stmt->fetchALL(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $result[] = new Product(
                $product['type'],
                $product['name'],
                $product['price'],
                $product['image']
            );
        }
        return $result;
    }

    public function getProductsSmartphones(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.products where type = 3
        ');
        $stmt->execute();
        $products = $stmt->fetchALL(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $result[] = new Product(
                $product['type'],
                $product['name'],
                $product['price'],
                $product['image']
            );
        }
        return $result;
    }

    public function getProductsTvs(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.products where type = 4
        ');
        $stmt->execute();
        $products = $stmt->fetchALL(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $result[] = new Product(
                $product['type'],
                $product['name'],
                $product['price'],
                $product['image']
            );
        }
        return $result;
    }
}