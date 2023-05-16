<?php

class Genre {

    public $genre_type;

    function __construct($_genre_type){

        $this->genre_type = $_genre_type;
    }

    function printGenre() 
    {
        return $this->genre_type;
    }
}


?>