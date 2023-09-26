<?php

namespace Source\Traits;

trait AddressTrait
{
    private $address;

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
}
