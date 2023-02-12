<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index() {
        // TODO display login.php
        $this->render('login');
    }

    public function projects() {
        // TODO display projects.php
        $this->render('projects');
    }

    public function homepage() {
        // TODO display homepage.php
        $this->render('homepage');
    }

    public function login() {
        // TODO diplay login.php
        $this->render('login');
    }

    public function product() {
        // TODO diplay product.php
        $this->render('product');
    }

    public function profile() {
        // TODO diplay profile.php
        $this->render('profile');
    }

    public function search() {
        // TODO diplay search.php
        $this->render('search');
    }
    public function searchDesktops() {
        // TODO diplay search-desktops.php
        $this->render('search-desktops');
    }
    public function searchLaptops() {
        // TODO diplay search-laptops.php
        $this->render('search-laptops');
    }
    public function searchSmartphones() {
        // TODO diplay search-smartphones.php
        $this->render('search-smartphones');
    }
    public function searchTvs() {
        // TODO diplay search-tvs.php
        $this->render('search-tvs');
    }
    public function shoppingCart() {
        // TODO diplay shopping-cart.php
        $this->render('shopping-cart');
    }
}
