<?php  
class Foods extends Products {
    use Fornitore;
    public $category = 'Cibo';

function __construct($id, $name, $description, $price) {
    parent::__construct($id, $name, $description, $price);
}

}
