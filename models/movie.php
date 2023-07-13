<?php
class Movie
{
    public $id;
    public $name;
    public $director;
    public $genre;
    public $vote;
    public $img;

    function __construct($movieName, $movieDirector, $movieVote, $movieImg, $movieGenre)
    {
        $this->name = $movieName;
        $this->director = $movieDirector;
        $this->vote = $movieVote;
        $this->img = $movieImg;
        $this->genre = $movieGenre;
    }
    function sayHi()
    {
        echo 'hi';
    }
}
