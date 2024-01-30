<?php 
    // definizione della classe Movie
    class Movie{
        public $name;
        public $genre;
        public $duration;
        public $year;
    }

    // istanza classe Movie
    $movie_1 = new Movie();

    $movie_1->name = "Matrix";
    $movie_1->genre = "";
    $movie_1->duration = 136;
    $movie_1->year = 1999;

    var_dump($movie_1);
?>