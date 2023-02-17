<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Cart.php';
require_once __DIR__ . '/../repository/CartRepository.php';

class CartController extends AppController
{
    private $cartRepository;

    public function __construct()
    {
        parent::__construct();
        $this->cartRepository = new CartRepository();
    }

    public function addToCart()
    {
        $id_user = $_SESSION['user_id'];
        $id_product = $_POST['id'];

        $this->cartRepository->insertIntoCart($id_user,$id_product);
        $cart = $this->cartRepository->getCart();
        $this->render('shopping-cart', ['cart' => $cart]);
    }

    public function displayCart()
    {
        $cart = $this->cartRepository->getCart();
        $this->render('shopping-cart', ['cart' => $cart]);
    }
}