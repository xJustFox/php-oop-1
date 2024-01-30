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

        public function getDuration(){
            return $this->duration;
        }
    }

    // istanze classe Movie
    $movie_1 = new Movie("Matrix", ["Fantascienza", "Azione", "Thriller", "Fantascienza"], 1999);
    $movie_1->setDutarion(136);

    $movie_2 = new Movie("V per Vendetta", ["Azione", "Drammatico", "Thriller", "Fantascienza"], 2005);
    $movie_2->setDutarion(132);

    $movie_3 = new Movie("Watchmen", ["Azione", "Drammatico", "Fantascienza", "Thriller"], 2009);
    $movie_3->setDutarion(163);

    $movie_4 = new Movie("Daredevil", ["Azione", "Drammatico", "Thriller"], 2003);
    $movie_4->setDutarion(133);

    $movie_5 = new Movie("Spider-Man 3", ["Azione", "Fantascienza", "Drammatico"], 2007);
    $movie_5->setDutarion(139);

    $movie_6 = new Movie("John Wick", ["Azione", "Thriller"], 2014);
    $movie_6->setDutarion(161);

    $arr_movie = [$movie_1, $movie_2, $movie_3, $movie_4, $movie_5, $movie_6];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
        <div class="container-xl" style="height: 100vh;">
            <div class="row align-items-center justify-content-center h-100 ">
                <div class="col-12">
                    <table class="table text-center table-bordered border-black">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Genere</th>
                                <th scope="col">Anno</th>
                                <th scope="col">Durata (H-m)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($arr_movie as $movie) { ?>
                                <tr>
                                    <td><?php echo $movie->name ?></td>
                                    <td>
                                        <?php foreach ($movie->genre as $genre) { ?>
                                            <span class=" p-1"><?php echo $genre?></span>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $movie->year ?></td>
                                    <td><?php echo $movie->duration ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>