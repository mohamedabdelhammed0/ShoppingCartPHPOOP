<?php


class CartItem
{
    private Product $product;
    private int $quantity;
    public function __construct(Product $product,int $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    }
    public function increaseQuantity(){
        if($this->quantity < $this->product->getAvailableQuantity()){
            $this->quantity++;
        }
        else{
            echo "Quantity can't be more than $this->product->getAvailableQuantity()  <br>";
        }
    }
    public function decreaseQuantity(){
        if($this->quantity>1) {
            $this->quantity--;
        }else{
            echo "Quantity can't be less than 1<br>";
        }
    }


    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }



    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }





}