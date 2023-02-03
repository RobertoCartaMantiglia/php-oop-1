<?php
// è definita una classe ‘Movie’
// => all'interno della classe sono dichiarate delle variabili d'istanza
// => all'interno della classe è definito un costruttore
// => all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati
//  a schermo i valori delle relative proprietà
class Movie
{
    public $title;
    public $type;
    public $timing;


    public function __construct($_title, $_type, $_timing)
    {
        $this->title = $_title;
        $this->type = $_type;
        $this->timing = $_timing;
    }


    public function getMovie($title)
    {
        return $title;
    }
}
