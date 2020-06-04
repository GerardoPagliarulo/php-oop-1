<?php
class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;
    public $running_time;
    //private $currentYear = '2020';
    // Construct
    public function __construct($_title, $_director, $_year, $_genre, $_running_time) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->running_time = $_running_time;
    }
    // Functions
    public function ageMovie($currentYear) {
        return $currentYear - $this->year;
    }
    // Private
    /*public function ageMovie() {
        return $this->currentYear - $this->year;
    }*/
}
// Movies
/*$movie1 = new Movie('The Graduate', 'Mike Nichols', '1967', 'Drama', 105);
var_dump($movie1);
echo $movie1->title;
echo $movie1->director;
echo $movie1->year;
echo $movie1->genre;
echo $movie1->running_time;
echo $movie1->ageMovie(2020);
$movie2 = new Movie('Five Easy Pieces', 'Bob Rafelson', '1970', 'Drama', 96);
var_dump($movie2);
echo $movie2->title;
echo $movie2->director;
echo $movie2->year;
echo $movie2->genre;
echo $movie2->running_time;
echo $movie2->ageMovie(2020);
$movie3 = new Movie('Dillinger è morto', 'Marco Ferreri', '1969', 'Drama', 95);
var_dump($movie3);
echo $movie3->title;
echo $movie3->director;
echo $movie3->year;
echo $movie3->genre;
echo $movie3->running_time;
echo $movie3->ageMovie(2020);
$movie4 = new Movie('La grande guerra', 'Mario Monicelli', '1959', 'Drama', 135);
var_dump($movie4);
echo $movie4->title;
echo $movie4->director;
echo $movie4->year;
echo $movie4->genre;
echo $movie4->running_time;
echo $movie4->ageMovie(2020);*/

