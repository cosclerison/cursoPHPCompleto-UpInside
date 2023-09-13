<?php

namespace Source\Related;

use Source\Interpretation\Product;
use Source\Related\Address;
use Source\Related\Products;

class Company
{
    private $company;

    /**
     * @var Address
     * associando a classe address com a variável $address
     */
    private $address;
    private $team;
    private $products;

    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function addProducts(Products $products)
    {
        $this->products[] = $products;
    }

    public function addTeamMember($job, $firstName, $lastName)
    {
        $this->team[] = new \Source\Related\User($job, $firstName, $lastName);
    }

    public function getCompany()
    {
        return $this->company;
    }

    /**
     * The getAddress() function returns the address property of the current object.
     * 
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return Array
     */
    public function getProducts()
    {
        return $this->products;
    }
}