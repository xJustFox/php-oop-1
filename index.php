<?php 
    // definizione della classe Movie
    class Movie{
        public $name;
        public $genre;
        public $duration = 0;
        public $year;

        function __construct($_name,$_genre,$_year){
            $this->name = $_name;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function setDutarion($time){
            $this->duration = gmdate('H:i', ($time * 60));
        }

        public function getDuration(){
            return $this->duration;

        }
    }

    // istanze classe Movie
    $movie_1 = new Movie("Matrix", ["Fantascienza", "Azione","Thriller","Fantascienza"] , 1999);
    $movie_1->setDutarion(136);

    $movie_2 = new Movie("V per Vendetta",["Azione", "Drammatico","Thriller","Fantascienza"], 2005);
    $movie_2->setDutarion(132);

    $movie_3 = new Movie("Watchmen",["Azione","Drammatico","Fantascienza","Thriller"], 2009);
    $movie_3->setDutarion(163);

    $movie_4 = new Movie("Daredevil",["Azione", "Drammatico","Thriller"], 2003);
    $movie_4->setDutarion(133);

    $movie_5 = new Movie("Spider-Man 3",["Azione","Fantascienza", "Drammatico"], 2007);
    $movie_5->setDutarion(139);

    $movie_6 = new Movie("John Wick",["Azione", "Thriller"], 2014);
    $movie_6->setDutarion(161);

    $arr_movie = [$movie_1,$movie_2,$movie_3,$movie_4,$movie_5,$movie_6];
?>