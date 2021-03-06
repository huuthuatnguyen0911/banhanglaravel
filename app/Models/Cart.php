<?php
namespace App\Models;
    class Cart{
        public $products = null;
        public $totalPrice = 0;
        public $totalQuanty = 0;

        public function __constant($cart){
            if($cart){
                $this -> products = $cart -> products;
                $this -> totalPrice = $cart -> totalPrice;
                $this -> totalQuanty = $cart -> totalQuanty;

            }
        }

        public function AddCart($product, $id){
            $newProduct = ['quanty' => 0, 'price' => $product -> product_price,'productInfo' => $product];
            if($this -> products){
                if(array_key_exists($id, $products)){
                    $newProduct = $products[$id];
                }
            }
            $newProduct['quanty']++;
            $newProduct['price'] = $newProduct['quanty'] * $product -> product_price;
            $this->products[$id] = $newProduct;
            $this->totalPrice += $product-> product_price;
            $this->totalQuanty ++;
        }
    }
?>
