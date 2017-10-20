<?php

namespace Training\Test\Api;

interface ProductManagementInterface
{
    /**
     * Provide the number of product count
     *
     * @param null|int $status
     * @return int
     */
    public function getCount($status = null);
}