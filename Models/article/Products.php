<?php  

class Products {
    
        public $id;
        public $name;
        public $description;
        public $price;
        public $has_discount = false;
        public $discount = 0;

    function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

    }

//se utente registrato discount diventa 20
    public function setSconto($user)
    {
        if($user->registered = true) {
            $this->has_discount = true;
            $this->discount = 20;
        };
    }

    //settare il prezzo scontato moltiplicando il prezzo per 20 e dividerlo per 100

    public function getPrice()
    {
        return $this->price = $this->price -  ($this->price * $this->discount / 100);
    }


}

