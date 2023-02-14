<?php

class Products
{
    private $type;
    private $name;
    private $price;
    private $image;

    public function __construct($type, $name, $price, $image)
    {
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}