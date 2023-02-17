<?php

class Product
{
    private $id;
    private $type;
    private $name;
    private $price;
    private $image;

    public function __construct($id, $type, $name, $price, $image)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

}