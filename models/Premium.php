<?php

require_once __DIR__ . '/User.php';


class Premium extends User
{
    protected $discount;

    public function __construct($name, $lastName, $email, $discount = 10)
    {
        parent::__construct($name, $lastName, $email);
        $this->discount = $discount;
    }
    public function getDiscount()
    {
        return "Lo sconto è del $this->discount %";
    }
}