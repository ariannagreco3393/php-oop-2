<?php
class Users
{

    public $id;
    public $name;
    public $mail;
    public $registered = true;
    public $card_payment = true;
    public $expire_card;

    function __construct($id, $name, $mail, $expire_card)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->expire_card = $expire_card;
    }

  

    public function getScadenza()
    {
       return 'carta scaduta';
    }
}
