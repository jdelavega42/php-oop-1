<?php

class Movie
{
    // variables
    public $title;
    public $genres;
    public $year;

    // constructor
    public function __construct($_title, $_genres, $_year){
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
    }
    // methods
    public function arrayToString(){
        return implode(", ", $this->genres );
    }
    
}
 ?>