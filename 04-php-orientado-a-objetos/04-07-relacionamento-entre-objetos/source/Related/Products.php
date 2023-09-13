<?php

namespace Source\Related;

use NumberFormatter;

class Products
{
 private $name;
 private $price;
 
 public function __construct($name, $price)
 {
    $this->name     = $name;
    $this->price    = number_format($price, "2", ",", ".") ;
 }

 public function getName()
 {
    return $this->name;
 }

 public function setName($name)
 {
    $this->name = $name;
 }

 public function getPrice()
 {
    return $this->price;
 }

 public function setPrice($price)
 {
    $this->price = $price;
 }
}