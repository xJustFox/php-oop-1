<?php 
    // definizione della classe Movie
    class Movie{
        public $name;
        public $genre;
        public $duration;
        public $year;

        function __construct($_name, $_genre, $_duration, $_year){
            $this->name = $_name;
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->year = $_year;
        }
    }

    // istanza classe Movie
    $movie_1 = new Movie("Matrix","Fantascienza",136,1999);

    var_dump($movie_1);
?>