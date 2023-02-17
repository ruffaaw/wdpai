<?php

class Cart
{
    private $id_user;
    private $id_product;

    public function __construct($id_user, $id_product)
    {
        $this->id_user = $id_user;
        $this->id_product = $id_product;
    }


    public function getIdUser(): string
    {
        return $this->id_user;
    }

    public function setIdUser( string $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getIdProduct(): string
    {
        return $this->id_product;
    }

    public function setIdProduct(string $id_product): void
    {
        $this->id_product = $id_product;
    }
}