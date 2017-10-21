<?php

namespace Training\Test\Plugin\Block;

class Breadcrumbs
{
    public function beforeAddCrumb($subject, $crumbName, $crumbInfo)
    {
        return [$crumbName . "(!)", $crumbInfo];
    }
}