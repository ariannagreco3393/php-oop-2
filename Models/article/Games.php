<?php  
class Games extends Products {
    use Fornitore;

    public $category = 'Giochi';

function __construct($id, $name, $description, $price) {
    parent::__construct($id, $name, $description, $price);
}

}