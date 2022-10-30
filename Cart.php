<?php


class Cart
{
    private array $items  = array();
    private int $counter = 0;
    public function addProduct(\Product $product,int $quantity ){
        if($quantity <= $product->getAvailableQuantity() )
        {
            $cartItem = new \CartItem($product,$quantity);
            $this->items[$product->getId()] = $cartItem;
            $this->counter++;
            echo "Product ". $product->getTitle()."  added successfully<br>";
        }else{
            echo "Quantity can't be more than ". $product->getAvailableQuantity() ."<br>";
        }
    }

    public function removeProduct(\Product $product){

            if(isset($this->items[$product->getId()])){

                echo "Product ". $product->getTitle() . "  removed successfully<br>";
                unset($this->items[$product->getId()]);
                return;
            }

        echo "Product ".$product->getTitle() . " doesn't not exist in the cart<br>";
    }

    public function getTotalQuantity(){
        $total = 0;
        foreach ($this->items as $item){
            $total+= $item->getQuantity();
        }
        echo "Total Products quantity => ".$total  . "<br>";
    }

    public function getTotalSum(){
        $total = 0;
        foreach ($this->items as $item){
            $total+= $item->getProduct()->getPrice() * $item->getQuantity();
        }
       echo "Total Products Price => ".$total  . " $<br>";
    }

    public function productDetails(\Product $product){

        echo "Product ID => ". $product->getId()."<br>Product Title => ". $product->getTitle()."<br>
              Product Price => ".$product->getPrice()." $<br> Product AvailableQuantity => ".$product->getAvailableQuantity()."<br>
                <br>    ";
    }

    public function printProducts(){
        echo "<br>=======Products=======<br>";
        foreach ($this->items as $cartItem ){
            $product = $cartItem->getProduct();
            echo "Product ID => ". $product->getId()."<br>Product Title => ". $product->getTitle()."<br>
              Product Price => ". $product->getPrice(). " $<br>Product Quantity =>". $cartItem->getQuantity()." <br> Product AvailableQuantity => ". $product->getAvailableQuantity()."<br><br>    ";
        }
        echo "=============================<br>";
    }

    public function getTotalProducts(){
        echo "Total products " . count($this->items) ."<br>";
    }
}


