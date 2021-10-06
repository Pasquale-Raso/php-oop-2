<?php

class User
{
    protected $name;
    protected $lastName;
    protected $email;
    protected $creditCard;

    public function __construct($name, $lastName, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    //Getter
    public function getFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
    //Setter
    public function setCreditCard($card)
    {
        if (!is_numeric($card)) {
            throw new Exception('Non puoi inserire una stringa');
        } else if (strlen($card) !== 16) {
            throw new Exception('La carta deve avere 16 cifre');
        } else {
            return $this->creditCard = $card;
        }
    }
}