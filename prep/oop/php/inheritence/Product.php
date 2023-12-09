<?php

require_once 'Category.php';

class Product extends Category {
    protected $product_id;
    protected $price;
    protected $stock;

    public function __construct($pid, $cid, $pname, $pprice, $pstock) {
        parent::__construct($cid, $pname, null, null);
        $this->product_id = $pid;
        $this->price = $pprice;
        $this->stock = $pstock;
    }

    public function getProductInfo() {
        $categoryInfo = $this->getCategory();
        return [
            'product_id' => $this->product_id,
            'category_info' => $categoryInfo,
            'price' => $this->price,
            'stock' => $this->stock
        ];
    }
}
