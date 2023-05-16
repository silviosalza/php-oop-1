<?php
// require __DIR__ . "/genre.php";

class Movie {

    public $title;
    public $genre;

    function __construct($_title, Genre $_genre ){

        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function printMovie(){
        return "{$this->title} - {$this->genre->printGenre()}";
    }
}



?>