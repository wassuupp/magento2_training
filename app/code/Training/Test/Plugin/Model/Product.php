<?php

namespace Training\Test\Plugin\Model;

class Product
{
    public function afterGetPrice($subject, $result)
    {
        return $result . "(!)";
    }
}