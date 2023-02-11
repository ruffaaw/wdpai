<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index() {
        //TODO display login.php
        $this->render('login');
    }

    public function projects() {
        //TODO display projects.php
        $this->render('projects');
    }

    public function homepage() {
        // TODO display homepage.html
        $this->render('homepage');
    }

    public function login() {
        // TODO diplay login.php
        $this->render('login');
    }

    public function product() {
        // TODO diplay product.html
        $this->render('product');
    }

    public function profile() {
        // TODO diplay profile.html
        $this->render('profile');
    }

    public function search() {
        // TODO diplay search.html
        $this->render('search');
    }
    public function shoppingCart() {
        // TODO diplay shoppingCart.html
        $this->render('shoppingCart');
    }
}