<?php 
    // definizione della classe Movie
    class Movie{
        public $name;
        public $genre;
        public $duration = 0;
        public $year;

        function __construct($_name, $_genre, $_year){
            $this->name = $_name;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function setDutarion($time){
            $this->duration = gmdate('H:i', ($time * 60));
        }
    }

    // istanza classe Movie
    $movie_1 = new Movie("Matrix","Fantascienza", 1999);
    $movie_1->setDutarion(136);

    var_dump($movie_1);
?>