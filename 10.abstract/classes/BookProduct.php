<?php 

class BookProduct extends Product{
  public $num_pages;

  public function __construct($name, $price, $num_pages)
  {
    parent::__construct($name, $price);
    $this->num_pages = $num_pages;
  }

  public function getNumPages()
  {
    return $this->num_pages;
  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= "Number of pages: $this->num_pages";
    return $out;
  }

  public function getDiscount()
  {
    return $this->price * 0.05;
  }
}
