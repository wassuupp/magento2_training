<?php

namespace Training\Test\Plugin\Block;

class Footer
{
    public function aroundGetCopyright()
    {
        return "Customized copyright!";
    }
}