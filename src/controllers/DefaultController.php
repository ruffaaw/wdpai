<?php

require_once 'AppController.php';

class DefaultController extends AppController
{
    public function index() {
        $this->render('login');
    }

    public function homepage() {
        $this->render('homepage');
    }

    public function login() {
        $this->render('login');
    }

    public function product() {
        $this->render('product');
    }

    public function profile() {
        $this->render('profile');
    }

    public function search() {
        $this->render('search');
    }
    public function searchDesktops() {
        $this->render('search-desktops');
    }
    public function searchLaptops() {
        $this->render('search-laptops');
    }
    public function searchSmartphones() {
        $this->render('search-smartphones');
    }
    public function searchTvs() {
        $this->render('search-tvs');
    }
    public function shoppingCart() {
        $this->render('shopping-cart');
    }
}
