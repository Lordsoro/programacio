<?php
class shoppingListElement{
    private int $idProduct;
    private string $name;
    private float $quantity;
    private float $price;
    private string $categoria;

    public function __construct(int $idProduct, string $name, float $quantity, float $price, string $categoria){
        $this->idProduct = $idProduct;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->categoria = $categoria;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getId(){
        return $this->idProduct;
    }
    public function setId($idProduct){
        $this->idProduct = $idProduct;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setnombre($price){
        $this->price = $price;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }



    
        
    
}