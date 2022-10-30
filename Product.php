<?php



class Product
{
    private int  $id;
    private string $title;
    private float  $price;
    private int  $availableQuantity;


    public function __construct(int $id,string $title,float $price,int $availableQuantity){
        $this->id =$id;
        $this->title =$title;
        $this->price =$price;
        $this->availableQuantity =$availableQuantity;
    }
    public function addToCart(Cart $cart,int $quantity){
        $cart->addProduct($this,$quantity);
    }

    public function removeFromCart(Cart $cart){
        $cart->removeProduct($this);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }



    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }



    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }


    /**
     * @return int
     */
    public function getAvailableQuantity(): int
    {
        return $this->availableQuantity;
    }



}