<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../repository/ProductRepository.php';

class ProductController extends AppController
{
    private $message = [];
    private $productRepository;

    public function __construct()
    {
        parent::__construct();
        $this->productRepository = new ProductRepository;
    }

    public function products() {
        $products = $this->productRepository->getProducts();
        $this->render('products', ['products' => $products]);
    }

    public function productsDesktops() {
        $products = $this->productRepository->getProductsDesktops();
        $this->render('products-search', ['products' => $products]);
    }

    public function productsLaptops() {
        $products = $this->productRepository->getProductsLaptops();
        $this->render('products-search', ['products' => $products]);
    }

    public function productsSmartphones() {
        $products = $this->productRepository->getProductsSmartphones();
        $this->render('products-search', ['products' => $products]);
    }

    public function productsTvs() {
        $products = $this->productRepository->getProductsTvs();
        $this->render('products-search', ['products' => $products]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

           echo json_encode($this->productRepository->getProductbyName($decoded['search']));
       }
    }
}